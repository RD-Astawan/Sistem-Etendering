<?php
defined('BASEPATH') or exit('No direct script access allowed');

//require __DIR__ . '/KMeans.php';
include APPPATH . 'third_party/KMeans/Space.php';
include APPPATH . 'third_party/KMeans/Point.php';
include APPPATH . 'third_party/KMeans/Cluster.php';

class Ichm
{
    public function transpose($data)
    {
        $retData = array();
        foreach ($data as $row => $columns) {
            foreach ($columns as $row2 => $column2) {
                $retData[$row2][$row] = $column2;
            }
        }
        return $retData;
    }

    public function distance($vector1, $vector2)
    {
        $n = count($vector1);
        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            $sum += ($vector1[$i] - $vector2[$i]) * ($vector1[$i] - $vector2[$i]);
        }
        return sqrt($sum);
    }

    //math
    public function mean($arr)
    {
        $count = count($arr); //total numbers in array
        $total = 0;
        foreach ($arr as $value) {
            $total = $total + $value; // total value of array numbers
        }
        $average = ($total / $count); // get average value
        return $average;
    }

    public function groupRating($content, $k = 4)
    {
        // clutering
        $space = new Space(2);
        foreach ($content as $c) {
            $space->addPoint($c);
        }

        // resolve k clusters
        $clusters = $space->solve($k);
        $centroids = array_map(function ($cluster) {
            return [$cluster[0], $cluster[1]];
        }, $clusters);

        // group rating
        $matrixPro = [];
        foreach ($centroids as $numberCluster) {
            $maxCS = 0;
            $CS = [];
            $rowCluster = [];

            // CS(j,k) and MaxCS(j,k)
            foreach ($content as $rowItem) {
                // Eucledian distance
                $De = $this->distance($rowItem, $numberCluster);
                $CS[] = $De;
                if ($maxCS < $De) {
                    $maxCS = $De;
                }

            }

            // Pro(j,k)
            foreach ($CS as $valCS) {
                $rowCluster[] = $maxCS == 0? 0 : 1 - ($valCS / $maxCS);
            }

            // assign
            $matrixPro[] = $rowCluster;
        }

        return $matrixPro;
    }

    public function pearsonSim($rating)
    {
        // inisialisasi variabel
        $data = $this->transpose($rating);
        $simPembilang = 0;
        $simPenyebutA = 0;
        $simPenyebutB = 0;
        $similarity = [];
        // rata - rata
        $mean = [];
        foreach ($data as $val) {
            $mean[] = $this->mean($val);
        }

        // proses similarity
        foreach ($data as $i => $iVal) {
            $rowSimilarity = [];
            foreach ($data as $j => $jVal) {
                foreach ($jVal as $colIndex => $val) {
                    $calcI = $data[$i][$colIndex] - $mean[$i];
                    $calcJ = $data[$j][$colIndex] - $mean[$j];
                    $simPembilang += ($calcI * $calcJ);
                    $simPenyebutA += pow($calcI, 2);
                    $simPenyebutB += pow($calcJ, 2);
                }
                $simPenyebut = sqrt($simPenyebutA) * sqrt($simPenyebutB);
                $rowSimilarity[] = ($simPenyebut != 0) ?
                ($simPembilang / $simPenyebut) :
                0;
                $simPembilang = 0;
                $simPenyebutA = 0;
                $simPenyebutB = 0;
            }

            $similarity[] = $rowSimilarity;
        }

        return $similarity;
    }

    public function adjustSim($groupRating)
    {
        // inisialisasi variabel
        $mean = [];
        foreach ($groupRating as $value) {
            $mean[] = $this->mean($value);
        }

        $simPembilang = 0;
        $simPenyebutA = 0;
        $simPenyebutB = 0;
        $similarity = [];
        $data = $this->transpose($groupRating);

        // proses similarity
        foreach ($data as $k => $kVal) {
            $rowSimilarity = [];
            foreach ($data as $l => $lVal) {
                foreach ($lVal as $colIndex => $val) {
                    $calcK = $data[$k][$colIndex] - $mean[$colIndex];
                    $calcL = $data[$l][$colIndex] - $mean[$colIndex];
                    $simPembilang += ($calcK * $calcL);
                    $simPenyebutA += pow($calcK, 2);
                    $simPenyebutB += pow($calcL, 2);
                }
                $simPenyebut = sqrt($simPenyebutA) * sqrt($simPenyebutB);
                $rowSimilarity[] = $simPenyebut == 0 ? 0 : ($simPembilang / $simPenyebut);
                $simPembilang = 0;
                $simPenyebutA = 0;
                $simPenyebutB = 0;
            }

            $similarity[] = $rowSimilarity;
        }

        return $similarity;
    }

    public function linearCombination($pearsonSim, $adjustSim, $coefisien = 0.5)
    {
        $similarity = [];

        foreach ($pearsonSim as $rowIndex => $row) {
            $rowSimilarity = [];
            foreach ($row as $colIndex => $col) {
                $lc = ($col * (1 - $coefisien)) + ($adjustSim[$rowIndex][$colIndex] * $coefisien);
                $rowSimilarity[] = $lc;
            }

            $similarity[] = $rowSimilarity;
        }

        return $similarity;
    }

    public function weightedSum($ratingItem, $linearSim, $indexUser)
    {
        $coldStart = [];
        $prediksiPembilang = 0;
        $prediksiPenyebut = 0;

        foreach ($ratingItem[$indexUser] as $k => $kVal) {
            foreach ($ratingItem[$indexUser] as $i => $iVal) {
                $prediksiPembilang += $iVal * $linearSim[$k][$i];
                $prediksiPenyebut += abs($linearSim[$k][$i]);
            }
            $ws = ($prediksiPenyebut !== 0) ? $prediksiPembilang / $prediksiPenyebut : 0;
            $prediksiPembilang = 0;
            $prediksiPenyebut = 0;
            $coldStart[] = $ws;
        }

        return $coldStart;
    }

    public function weightedAverageDeviation($ratingItem, $linearSim, $indexUser)
    {
        $mean = [];
        foreach ($this->transpose($ratingItem) as $value) {
            $mean[] = $this->mean($value);
        }
        $nonColdStart = [];
        $prediksiPembilang = 0;
        $prediksiPenyebut = 0;

        foreach ($ratingItem[$indexUser] as $k => $kVal) {
            foreach ($ratingItem[$indexUser] as $i => $iVal) {
                $prediksiPembilang += ($iVal - $mean[$i]) * $linearSim[$k][$i];
                $prediksiPenyebut += abs($linearSim[$k][$i]);
            }
            $wad = ($prediksiPenyebut != 0) ?
            $mean[$k] + ($prediksiPembilang / $prediksiPenyebut) :
            0;
            $prediksiPembilang = 0;
            $prediksiPenyebut = 0;
            $nonColdStart[] = $wad;
        }

        return $nonColdStart;
    }

    public function getIchm($rating, $konten, $indexUser, $coefisien = 0.5)
    {
        $group = $this->groupRating($konten);
        $pearsonSim = $this->pearsonSim($rating);
        $adjustSim = $this->adjustSim($group);
        $lc = $this->linearCombination($pearsonSim, $adjustSim);
        $coldStart = $this->weightedAverageDeviation($rating, $lc, $indexUser);

        return [$coldStart, $pearsonSim];
    }

}

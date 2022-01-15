<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ichm extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('ichm');
        //Codeigniter : Write Less Do More
    }

    public function getTenderRecommendation($id_tender)
    {
        $content_item = [];
        $rating_konsumen_produsen = [];
        $hasil_slope_one = [];

        $produsens = []; // untuk ditampilkan di rekomendasi
        $produsens_id = [];
        $konsumens_id = [];

        $this->db->where('id_tender', $id_tender);
        $lamarans = $this->db->get('tb_lamaran')->result();

        if(sizeof($lamarans) == 0) {
            return [];
        }

        foreach ($lamarans as $lamaran) {
            $harga = $lamaran->tawaran_harga;
            $this->db->where('username', $lamaran->username_produsen);
            $produsen = $this->db->get('tb_produsen')->row();
            $proyek_selesai = $produsen->proyek_selesai;

            array_push($produsens, $produsen);
            array_push($produsens_id, $produsen->id_produsen);
            array_push($content_item, [$harga, $proyek_selesai]);
        }

        $konsumens = $this->db->get('tb_konsumen')->result();
        foreach ($konsumens as $konsumen) {
            array_push($konsumens_id, $konsumen->id_konsumen);
        }

        $this->db->where_in('id_produsen', $produsens_id);
        $ratings = $this->db->get('tb_rating')->result();

        // Buat matriks
        foreach ($konsumens_id as $k_id) {
            $row = $this->zeros(sizeof($produsens_id));

            foreach ($ratings as $rating) {
                if ($rating->id_konsumen == $k_id) {
                    $index_produsen = array_search($rating->id_produsen, $produsens_id);
                    if($index_produsen !== false) {
                        $row[$index_produsen] = $rating->rating;
                    }
                }
            }
            
            array_push($rating_konsumen_produsen, $row);
            array_push($hasil_slope_one, $row);
        }

        
        // foreach ($rating_konsumen_produsen as $k) {
        //     foreach ($k as $r) {
        //         echo $r . ' ';
        //     }
        //     echo "<br>";
        // }

        // echo "<br><br>";

        for($i = 0; $i < sizeof($produsens_id); $i++) {
            for($j = 0; $j < sizeof($produsens_id); $j++) {
                if($i !== $j) {
                    $result = $this->dev($rating_konsumen_produsen, $i, $j);
                    $dev[$i][$j] = $result[0];
                    $count[$i][$j] = $result[1];
                }
                else {
                    $dev[$i][$j] = 0;
                    $count[$i][$j] = 0;
                }
            }
        }

        // echo "<br><br>";

        // foreach ($dev as $k) {
        //     foreach ($k as $r) {
        //         echo $r . ' ';
        //     }
        //     echo "<br>";
        // }

        // echo "<br><br>";

        // foreach ($count as $k) {
        //     foreach ($k as $r) {
        //         echo $r . ' ';
        //     }
        //     echo "<br>";
        // }

        for($i = 0; $i < sizeof($rating_konsumen_produsen); $i++) {
            $row = $rating_konsumen_produsen[$i];
            for($j = 0; $j < sizeof($row); $j++) {
                if($rating_konsumen_produsen[$i][$j] === 0) {
                    $hasil_slope_one[$i][$j] = $this->prediksi($rating_konsumen_produsen, $dev, $count, $i, $j);
                }
            }
        }

        // echo "<br><br>";

        // foreach ($hasil_slope_one as $k) {
        //     foreach ($k as $r) {
        //         echo $r . ' ';
        //     }
        //     echo "<br>";
        // }

        
        [$scores, $pearsonSim] = $this->ichm->getIchm($hasil_slope_one, $content_item, 0);
        print_r($pearsonSim);
        for($i = 0; $i < sizeof($produsens); $i++) {
            $produsens[$i]->score = $scores[$i];
        } 

        usort($produsens, function($a, $b)
         {
            return (($a->score < $b->score) ? 1 : -1);
         });

        return $produsens;

    }

    private function zeros($n)
    {
        $arr = [];
        for ($i = 0; $i < $n; $i++) {
            array_push($arr, rand(0, 0));
        }
        return $arr;
    }

    private function dev($rating_konsumen_produsen, $i, $j) {
        $count = 0;
        $sum = 0;
        for($r = 0; $r < sizeof($rating_konsumen_produsen); $r++) {
            if($rating_konsumen_produsen[$r][$i] !== 0 && $rating_konsumen_produsen[$r][$j] !== 0) {
                $sum = $sum + ($rating_konsumen_produsen[$r][$i] - $rating_konsumen_produsen[$r][$j]);
                $count++;
            }
        }
        $dev = $count === 0? 0 : $sum/$count;
        return [$dev, $count];
    }

    private function prediksi($rating_konsumen_produsen, $dev, $count, $i, $j) {
        $pembilang = 0;
        $penyebut = 0;


        for($c = 0; $c < sizeof($dev); $c++) {
            if($c !== $j) {
                $pembilang += ($dev[$j][$c] + $rating_konsumen_produsen[$i][$c]) * $count[$j][$c];
                $penyebut += $count[$j][$c];
            }
        }
        return $penyebut === 0? 0 : $pembilang/$penyebut;
    }

}
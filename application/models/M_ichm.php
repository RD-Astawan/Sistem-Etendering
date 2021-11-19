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

        // print_r($produsens_id);
        // echo "<br>";

        $konsumens = $this->db->get('tb_konsumen')->result();
        foreach ($konsumens as $konsumen) {
            array_push($konsumens_id, $konsumen->id_konsumen);
        }

        // print_r($konsumens_id);
        // echo "<br>";

        $this->db->where_in('id_produsen', $produsens_id);
        $ratings = $this->db->get('tb_rating')->result();

        // Buat matriks
        foreach ($konsumens_id as $k_id) {
            $row = $this->zeros(sizeof($produsens_id));
            //echo $k_id . ' => ';
            foreach ($ratings as $rating) {
                if ($rating->id_konsumen == $k_id) {
                    // echo '|' . $rating->id_produsen;
                    $index_produsen = array_search($rating->id_produsen, $produsens_id);
                    if($index_produsen !== false) {
                        $row[$index_produsen] = $rating->rating;
                    }
                }
            }
            //echo "<br>";
            array_push($rating_konsumen_produsen, $row);
        }

        // foreach ($content_item as $c) {
        //     echo $c[0] . ' ' . $c[1];
        //     echo "<br>";
        // }

        // echo "<br><br><br>";

        // foreach ($rating_konsumen_produsen as $k) {
        //     foreach ($k as $r) {
        //         echo $r . ' ';
        //     }
        //     echo "<br>";
        // }

        $scores = $this->ichm->getIchm($rating_konsumen_produsen, $content_item, 0);
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

}

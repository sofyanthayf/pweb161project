<?php

class News_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }


    public function save_news(){
        $data['id'] = date('U');
        $data['judul'] = $this->input->post('judul');
        $data['isi'] = $this->input->post('isinews');
        $data['penulis'] = $_SESSION['id'];

        $this->db->insert( 'news', $data );
    }

    public function get_list_news(){
        $sql = "SELECT n.judul, n.id id_news, n.isi, n.tanggal, n.penulis,
                       m.id id_penulis, m.namalengkap
                FROM news n
                LEFT JOIN members m
                    ON(n.penulis=m.id)";
        $query = $this->db->query( $sql );
        if( !empty( $query->row_array() ) ) {
            return $query->row_array();
        } else {
            return false;
        }
    }
}

<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function registeruser(){
        $data = [
                'id' => date('U'),
                'email' => $this->input->post('email'),
                'username' =>  $this->input->post('user'),
                'namalengkap' =>  $this->input->post('nama'),
                'password' =>  password_hash( $this->input->post('pass1'), PASSWORD_BCRYPT )
                ];

        $this->db->insert( 'members', $data );
    }

    public function updateuser(){
        $this->db->where('username', $_SESSION['username'] );
        $data = [ 'namalengkap' => $this->input->post('nama') ];
        $this->db->update( 'members', $data );
    }

    public function namausersudahterdaftar( $namauser ){
        $query = $this->db->get_where( 'members', array( 'username' => $namauser) );
        if( !empty( $query->row_array() ) ) {
            return true;
        }
        return false;
    }

    public function emailsudahterdaftar( $emailaddr ){
        $query = $this->db->get_where( 'members', array( 'email' => $emailaddr) );
        if( !empty( $query->row_array() ) ) {
            return true;
        }
        return false;
    }

    public function userterdaftar( $username ){
        $query = $this->db->get_where( 'members', array( 'username' => $username) );
        if( !empty( $query->row_array() ) ) {
            $_SESSION['username'] = $query->row_array()['username'];
            $_SESSION['password'] = $query->row_array()['password'];
            $_SESSION['email'] = $query->row_array()['email'];
            $_SESSION['id'] = $query->row_array()['id'];
            $_SESSION['nama'] = $query->row_array()['namalengkap'];
            $_SESSION['admin'] = $query->row_array()['admin'];
            return true;
        }
        return false;
    }

    public function passwordok( $pass ){
        if( password_verify( $this->input->post('pass') , $_SESSION['password'] ) ){
            return true;
        }

        return FALSE;
    }


    public function getuser($username){
        $query = $this->db->get_where( 'members', array( 'username' => $username) );
        if( !empty( $query->row_array() ) ) {
            return $query->row_array();
        }
        return false;
    }

}


?>

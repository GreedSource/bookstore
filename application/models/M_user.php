<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_user extends CI_Model{
    
    public $table = 'users';
    public $table_id = 'id';

    function __construct(){
        $this->load->database();
    }

    function find($email) {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->row();
    }

    function login($email, $password) {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->row();
    }

    function dataEntry($data) {
        return $this->db->insert($this->table, $data);
        //return $this->db->insert_id();
    }
}
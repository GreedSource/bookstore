<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_libro extends CI_Model{
    
    public $table = 'book';
    public $table_id = 'id';

    function __construct(){
        $this->load->database();
    }

    function find($id) {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);

        $query = $this->db->get();
        return $query->row();
    }

    function findAll() {
        $this->db->select();
        $this->db->from($this->table);

        $query = $this->db->get();
        return $query->result();
    }

    function dataEntry($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    function updateData($key, $data) {
        $this->db->where($this->table_id, $key);
        $this->db->update($this->table, $data);
    }

    function deleteRecord($key) {
        $this->db->where($this->table_id, $key);
        $this->db->delete($this->table);
    }

    function dataRating($data){
        $this->db->insert('book_rating', $data);
        return $this->db->insert_id();
    }

}
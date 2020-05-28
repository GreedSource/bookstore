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

    function bookRating($data) {
        $this->db->insert('book_rating', $data);
        return $this->db->insert_id();
    }

    function getRating($key){
        $this->db->select('b.id AS id, ROUND(AVG(br.rating)) AS rating');
        $this->db->from('book b');
        $this->db->join('book_rating br', 'b.id = br.book_id');
        $this->db->where('b.id', $key);

        $query = $this->db->get();
        return $query->row();
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
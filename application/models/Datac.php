<?php

class Datac extends CI_Model {

    protected $table = 'item';

    public function __construct() {
        parent::__construct();
    }

    public function get_count() {
        return $this->db->count_all('item');
    }

    public function get_item($limit, $start) {
        $this->db->limit($limit, $start);
		$this->db->where('status', 'ready');
		$this->db->join('vendor', 'item.idv = vendor.idv', 'inner');
		$this->db->join('category', 'item.idcat  = category.idcat', 'inner');
    
        $query = $this->db->get($this->table);

        return $query->result();
    }
}
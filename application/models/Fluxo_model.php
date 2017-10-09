<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fluxo_model extends CI_Model
{

    public $table = 'FLUXO';
    public $id = 'id_fluxo';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_fluxo', $q);
	$this->db->or_like('data', $q);
	$this->db->or_like('lk_id_tipo_venda', $q);
	$this->db->or_like('lk_id_tipo_pagamento', $q);
	$this->db->or_like('lk_id_login', $q);
	$this->db->or_like('lk_id_aluno', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_fluxo', $q);
	$this->db->or_like('data', $q);
	$this->db->or_like('lk_id_tipo_venda', $q);
	$this->db->or_like('lk_id_tipo_pagamento', $q);
	$this->db->or_like('lk_id_login', $q);
	$this->db->or_like('lk_id_aluno', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    //consulta venda em aberto do atendente logado
     function get_fluxoa_berto($id)
    {
        $this->db->where($this->id, $id);
        $this->db->where('lk_id_tipo_pagamento', null);


        return $this->db->get($this->table)->row();
    }

}

/* End of file Fluxo_model.php */
/* Location: ./application/models/Fluxo_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-29 19:17:54 */
/* http://harviacode.com */
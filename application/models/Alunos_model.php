<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alunos_model extends CI_Model
{

    public $table = 'ALUNOS';
    public $id = 'id_aluno';
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
        $this->db->like('id_aluno', $q);
        $this->db->or_like('cdaluno_nome', $q);
        $this->db->or_like('cdaluno_rg', $q);
        $this->db->or_like('cdaluno_datadenascimento', $q);
        $this->db->or_like('cdaluno_naturalidade', $q);
        $this->db->or_like('cdaluno_estadocivil', $q);
        $this->db->or_like('cdaluno_profissao', $q);
        $this->db->or_like('cdaluno_telefoneresidencial', $q);
        $this->db->or_like('cdaluno_telefonecomercial', $q);
        $this->db->or_like('cdaluno_telefonecelular', $q);
        $this->db->or_like('cdaluno_email', $q);
        $this->db->or_like('cdaluno_cep', $q);
        $this->db->or_like('cdaluno_cidade', $q);
        $this->db->or_like('cdaluno_endereco', $q);
        $this->db->or_like('cdaluno_numero', $q);
        $this->db->or_like('cdaluno_bairro', $q);
        $this->db->or_like('cdaluno_pontodereferencia', $q);
        $this->db->or_like('foto', $q);
        $this->db->or_like('status', $q);
        $this->db->or_like('id_aluno_id_login', $q);
        $this->db->or_like('data_criacao', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_aluno', $q);
        $this->db->or_like('cdaluno_nome', $q);
        $this->db->or_like('cdaluno_rg', $q);
        $this->db->or_like('cdaluno_datadenascimento', $q);
        $this->db->or_like('cdaluno_naturalidade', $q);
        $this->db->or_like('cdaluno_estadocivil', $q);
        $this->db->or_like('cdaluno_profissao', $q);
        $this->db->or_like('cdaluno_telefoneresidencial', $q);
        $this->db->or_like('cdaluno_telefonecomercial', $q);
        $this->db->or_like('cdaluno_telefonecelular', $q);
        $this->db->or_like('cdaluno_email', $q);
        $this->db->or_like('cdaluno_cep', $q);
        $this->db->or_like('cdaluno_cidade', $q);
        $this->db->or_like('cdaluno_endereco', $q);
        $this->db->or_like('cdaluno_numero', $q);
        $this->db->or_like('cdaluno_bairro', $q);
        $this->db->or_like('cdaluno_pontodereferencia', $q);
        $this->db->or_like('foto', $q);
        $this->db->or_like('status', $q);
        $this->db->or_like('id_aluno_id_login', $q);
        $this->db->or_like('data_criacao', $q);
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


    public function autoCompleteAluno($q){

        $this->db->select('*');
        $this->db->like('id_aluno', $q);
        $this->db->or_like('cdaluno_nome', $q);
        $this->db->or_like('cdaluno_rg', $q);
        $this->db->or_like('cdaluno_datadenascimento', $q);
        $this->db->or_like('cdaluno_naturalidade', $q);
        $this->db->or_like('cdaluno_estadocivil', $q);
        $this->db->or_like('cdaluno_profissao', $q);
        $this->db->or_like('cdaluno_telefoneresidencial', $q);
        $this->db->or_like('cdaluno_telefonecomercial', $q);
        $this->db->or_like('cdaluno_telefonecelular', $q);
        $this->db->or_like('cdaluno_email', $q);
        $this->db->or_like('cdaluno_cep', $q);
        $this->db->or_like('cdaluno_cidade', $q);
        $this->db->or_like('cdaluno_endereco', $q);
        $this->db->or_like('cdaluno_numero', $q);
        $this->db->or_like('cdaluno_bairro', $q);
        $this->db->or_like('cdaluno_pontodereferencia', $q);
        $query = $this->db->get('ALUNOS');
        if($query->num_rows() > 0){
            foreach ($query->result_array() as $row){
                $row_set[] = array('label'=>$row['cdaluno_nome'].' | Telefone: '.$row['cdaluno_telefonecelular'].' | Código:'.$row['id_aluno'],'id'=>$row['id_aluno']);
            }
            echo json_encode($row_set);
        }
    }

}

/* End of file Alunos_model.php */
/* Location: ./application/models/Alunos_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-14 01:24:19 */
/* http://harviacode.com */
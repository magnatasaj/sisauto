<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class FluxoVenda extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this -> load -> model('Fluxo_model');
        $this -> load -> model('Vendas_itens_model');
        $this -> load -> model('Alunos_model');
        $this -> load -> helper("moeda");

        $this -> load -> library('form_validation');
    }

    public function index() {

        $dados = $this -> fluxo_aberto($this -> session -> userdata('id'));

        if ($dados) {

            $dados -> itens = $this -> Vendas_itens_model -> get_fluxo_vendas($dados -> id_fluxo);
            print_r($dados);
            $this -> load -> view('fluxovenda/VENDA_venda', $dados);
        } else {
            echo "não tem vendas em aberto";
        }

    }

    public function fluxo_aberto($id) {
        $row = $this -> Fluxo_model -> get_fluxoa_berto($id);
        return $row;
    }

    public function VendaPagamento() {
        //pega id da venda
        $id = $this -> uri -> segment(3, 0);
        //verifica se o id existe
        $row = $this -> Fluxo_model -> get_fluxoa_berto($id);
        //se existir o id
        if ($row) {
            //consulta se a venda tem itens
            $row -> itens = $this -> Vendas_itens_model -> get_fluxo_vendas($id);
            //se tiver itens
            if ($row->itens) {
                //consulta Aluno
                $row -> Aluno = $this -> Alunos_model -> get_by_id($row -> lk_id_aluno);
                print_r($row);
                $this -> load -> view('fluxovenda/VENDA_pagamento', $row);
            } else {
                $this -> session -> set_flashdata('erro', 'Venda está sem itens');
                redirect('fluxoVenda');
            }
        } else {
            echo 'id venda não existe';
        }
    }

    public function create_action() {
        $this -> _rules();

        if ($this -> form_validation -> run() == FALSE) {
            $this -> create();
        } else {
            $data = array('data' => $this -> input -> post('data', TRUE), 'lk_id_tipo_venda' => $this -> input -> post('lk_id_tipo_venda', TRUE), 'lk_id_tipo_pagamento' => $this -> input -> post('lk_id_tipo_pagamento', TRUE), 'lk_id_login' => $this -> input -> post('lk_id_login', TRUE), 'lk_id_aluno' => $this -> input -> post('lk_id_aluno', TRUE), );

            $this -> Fluxo_model -> insert($data);
            $this -> session -> set_flashdata('message', 'Create Record Success');
            redirect('fluxo');
        }
    }

    public function update($id) {
        $row = $this -> Fluxo_model -> get_by_id($id);

        if ($row) {
            $data = array('button' => 'Update', 'action' => site_url('fluxo/update_action'), 'id_fluxo' => set_value('id_fluxo', $row -> id_fluxo), 'data' => set_value('data', $row -> data), 'lk_id_tipo_venda' => set_value('lk_id_tipo_venda', $row -> lk_id_tipo_venda), 'lk_id_tipo_pagamento' => set_value('lk_id_tipo_pagamento', $row -> lk_id_tipo_pagamento), 'lk_id_login' => set_value('lk_id_login', $row -> lk_id_login), 'lk_id_aluno' => set_value('lk_id_aluno', $row -> lk_id_aluno), );
            $this -> load -> view('fluxo/FLUXO_form', $data);
        } else {
            $this -> session -> set_flashdata('message', 'Record Not Found');
            redirect('fluxo');
        }
    }

    public function update_action() {
        $this -> _rules();

        if ($this -> form_validation -> run() == FALSE) {
            $this -> update($this -> input -> post('id_fluxo', TRUE));
        } else {
            $data = array('data' => $this -> input -> post('data', TRUE), 'lk_id_tipo_venda' => $this -> input -> post('lk_id_tipo_venda', TRUE), 'lk_id_tipo_pagamento' => $this -> input -> post('lk_id_tipo_pagamento', TRUE), 'lk_id_login' => $this -> input -> post('lk_id_login', TRUE), 'lk_id_aluno' => $this -> input -> post('lk_id_aluno', TRUE), );

            $this -> Fluxo_model -> update($this -> input -> post('id_fluxo', TRUE), $data);
            $this -> session -> set_flashdata('message', 'Update Record Success');
            redirect('fluxo');
        }
    }

    public function delete($id) {
        $row = $this -> Fluxo_model -> get_by_id($id);

        if ($row) {
            $this -> Fluxo_model -> delete($id);
            $this -> session -> set_flashdata('message', 'Delete Record Success');
            redirect('fluxo');
        } else {
            $this -> session -> set_flashdata('message', 'Record Not Found');
            redirect('fluxo');
        }
    }

}

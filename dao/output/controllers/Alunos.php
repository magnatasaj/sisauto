<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alunos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Alunos_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'alunos/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'alunos/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'alunos/index.html';
            $config['first_url'] = base_url() . 'alunos/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Alunos_model->total_rows($q);
        $alunos = $this->Alunos_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'alunos_data' => $alunos,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('alunos/ALUNOS_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Alunos_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_aluno' => $row->id_aluno,
		'cdaluno_nome' => $row->cdaluno_nome,
		'cdaluno_rg' => $row->cdaluno_rg,
		'cdaluno_datadenascimento' => $row->cdaluno_datadenascimento,
		'cdaluno_naturalidade' => $row->cdaluno_naturalidade,
		'cdaluno_estadocivil' => $row->cdaluno_estadocivil,
		'cdaluno_profissao' => $row->cdaluno_profissao,
		'cdaluno_telefoneresidencial' => $row->cdaluno_telefoneresidencial,
		'cdaluno_telefonecomercial' => $row->cdaluno_telefonecomercial,
		'cdaluno_telefonecelular' => $row->cdaluno_telefonecelular,
		'cdaluno_email' => $row->cdaluno_email,
		'cdaluno_cep' => $row->cdaluno_cep,
		'cdaluno_cidade' => $row->cdaluno_cidade,
		'cdaluno_endereco' => $row->cdaluno_endereco,
		'cdaluno_numero' => $row->cdaluno_numero,
		'cdaluno_bairro' => $row->cdaluno_bairro,
		'cdaluno_pontodereferencia' => $row->cdaluno_pontodereferencia,
		'foto' => $row->foto,
		'status' => $row->status,
		'id_aluno_id_login' => $row->id_aluno_id_login,
		'data_criacao' => $row->data_criacao,
	    );
            $this->load->view('alunos/ALUNOS_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('alunos'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('alunos/create_action'),
	    'id_aluno' => set_value('id_aluno'),
	    'cdaluno_nome' => set_value('cdaluno_nome'),
	    'cdaluno_rg' => set_value('cdaluno_rg'),
	    'cdaluno_datadenascimento' => set_value('cdaluno_datadenascimento'),
	    'cdaluno_naturalidade' => set_value('cdaluno_naturalidade'),
	    'cdaluno_estadocivil' => set_value('cdaluno_estadocivil'),
	    'cdaluno_profissao' => set_value('cdaluno_profissao'),
	    'cdaluno_telefoneresidencial' => set_value('cdaluno_telefoneresidencial'),
	    'cdaluno_telefonecomercial' => set_value('cdaluno_telefonecomercial'),
	    'cdaluno_telefonecelular' => set_value('cdaluno_telefonecelular'),
	    'cdaluno_email' => set_value('cdaluno_email'),
	    'cdaluno_cep' => set_value('cdaluno_cep'),
	    'cdaluno_cidade' => set_value('cdaluno_cidade'),
	    'cdaluno_endereco' => set_value('cdaluno_endereco'),
	    'cdaluno_numero' => set_value('cdaluno_numero'),
	    'cdaluno_bairro' => set_value('cdaluno_bairro'),
	    'cdaluno_pontodereferencia' => set_value('cdaluno_pontodereferencia'),
	    'foto' => set_value('foto'),
	    'status' => set_value('status'),
	    'id_aluno_id_login' => set_value('id_aluno_id_login'),
	    'data_criacao' => set_value('data_criacao'),
	);
        $this->load->view('alunos/ALUNOS_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'cdaluno_nome' => $this->input->post('cdaluno_nome',TRUE),
		'cdaluno_rg' => $this->input->post('cdaluno_rg',TRUE),
		'cdaluno_datadenascimento' => $this->input->post('cdaluno_datadenascimento',TRUE),
		'cdaluno_naturalidade' => $this->input->post('cdaluno_naturalidade',TRUE),
		'cdaluno_estadocivil' => $this->input->post('cdaluno_estadocivil',TRUE),
		'cdaluno_profissao' => $this->input->post('cdaluno_profissao',TRUE),
		'cdaluno_telefoneresidencial' => $this->input->post('cdaluno_telefoneresidencial',TRUE),
		'cdaluno_telefonecomercial' => $this->input->post('cdaluno_telefonecomercial',TRUE),
		'cdaluno_telefonecelular' => $this->input->post('cdaluno_telefonecelular',TRUE),
		'cdaluno_email' => $this->input->post('cdaluno_email',TRUE),
		'cdaluno_cep' => $this->input->post('cdaluno_cep',TRUE),
		'cdaluno_cidade' => $this->input->post('cdaluno_cidade',TRUE),
		'cdaluno_endereco' => $this->input->post('cdaluno_endereco',TRUE),
		'cdaluno_numero' => $this->input->post('cdaluno_numero',TRUE),
		'cdaluno_bairro' => $this->input->post('cdaluno_bairro',TRUE),
		'cdaluno_pontodereferencia' => $this->input->post('cdaluno_pontodereferencia',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'status' => $this->input->post('status',TRUE),
		'id_aluno_id_login' => $this->input->post('id_aluno_id_login',TRUE),
		'data_criacao' => $this->input->post('data_criacao',TRUE),
	    );

            $this->Alunos_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('alunos'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Alunos_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('alunos/update_action'),
		'id_aluno' => set_value('id_aluno', $row->id_aluno),
		'cdaluno_nome' => set_value('cdaluno_nome', $row->cdaluno_nome),
		'cdaluno_rg' => set_value('cdaluno_rg', $row->cdaluno_rg),
		'cdaluno_datadenascimento' => set_value('cdaluno_datadenascimento', $row->cdaluno_datadenascimento),
		'cdaluno_naturalidade' => set_value('cdaluno_naturalidade', $row->cdaluno_naturalidade),
		'cdaluno_estadocivil' => set_value('cdaluno_estadocivil', $row->cdaluno_estadocivil),
		'cdaluno_profissao' => set_value('cdaluno_profissao', $row->cdaluno_profissao),
		'cdaluno_telefoneresidencial' => set_value('cdaluno_telefoneresidencial', $row->cdaluno_telefoneresidencial),
		'cdaluno_telefonecomercial' => set_value('cdaluno_telefonecomercial', $row->cdaluno_telefonecomercial),
		'cdaluno_telefonecelular' => set_value('cdaluno_telefonecelular', $row->cdaluno_telefonecelular),
		'cdaluno_email' => set_value('cdaluno_email', $row->cdaluno_email),
		'cdaluno_cep' => set_value('cdaluno_cep', $row->cdaluno_cep),
		'cdaluno_cidade' => set_value('cdaluno_cidade', $row->cdaluno_cidade),
		'cdaluno_endereco' => set_value('cdaluno_endereco', $row->cdaluno_endereco),
		'cdaluno_numero' => set_value('cdaluno_numero', $row->cdaluno_numero),
		'cdaluno_bairro' => set_value('cdaluno_bairro', $row->cdaluno_bairro),
		'cdaluno_pontodereferencia' => set_value('cdaluno_pontodereferencia', $row->cdaluno_pontodereferencia),
		'foto' => set_value('foto', $row->foto),
		'status' => set_value('status', $row->status),
		'id_aluno_id_login' => set_value('id_aluno_id_login', $row->id_aluno_id_login),
		'data_criacao' => set_value('data_criacao', $row->data_criacao),
	    );
            $this->load->view('alunos/ALUNOS_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('alunos'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_aluno', TRUE));
        } else {
            $data = array(
		'cdaluno_nome' => $this->input->post('cdaluno_nome',TRUE),
		'cdaluno_rg' => $this->input->post('cdaluno_rg',TRUE),
		'cdaluno_datadenascimento' => $this->input->post('cdaluno_datadenascimento',TRUE),
		'cdaluno_naturalidade' => $this->input->post('cdaluno_naturalidade',TRUE),
		'cdaluno_estadocivil' => $this->input->post('cdaluno_estadocivil',TRUE),
		'cdaluno_profissao' => $this->input->post('cdaluno_profissao',TRUE),
		'cdaluno_telefoneresidencial' => $this->input->post('cdaluno_telefoneresidencial',TRUE),
		'cdaluno_telefonecomercial' => $this->input->post('cdaluno_telefonecomercial',TRUE),
		'cdaluno_telefonecelular' => $this->input->post('cdaluno_telefonecelular',TRUE),
		'cdaluno_email' => $this->input->post('cdaluno_email',TRUE),
		'cdaluno_cep' => $this->input->post('cdaluno_cep',TRUE),
		'cdaluno_cidade' => $this->input->post('cdaluno_cidade',TRUE),
		'cdaluno_endereco' => $this->input->post('cdaluno_endereco',TRUE),
		'cdaluno_numero' => $this->input->post('cdaluno_numero',TRUE),
		'cdaluno_bairro' => $this->input->post('cdaluno_bairro',TRUE),
		'cdaluno_pontodereferencia' => $this->input->post('cdaluno_pontodereferencia',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'status' => $this->input->post('status',TRUE),
		'id_aluno_id_login' => $this->input->post('id_aluno_id_login',TRUE),
		'data_criacao' => $this->input->post('data_criacao',TRUE),
	    );

            $this->Alunos_model->update($this->input->post('id_aluno', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('alunos'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Alunos_model->get_by_id($id);

        if ($row) {
            $this->Alunos_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('alunos'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('alunos'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('cdaluno_nome', 'cdaluno nome', 'trim|required');
	$this->form_validation->set_rules('cdaluno_rg', 'cdaluno rg', 'trim|required');
	$this->form_validation->set_rules('cdaluno_datadenascimento', 'cdaluno datadenascimento', 'trim|required');
	$this->form_validation->set_rules('cdaluno_naturalidade', 'cdaluno naturalidade', 'trim|required');
	$this->form_validation->set_rules('cdaluno_estadocivil', 'cdaluno estadocivil', 'trim|required');
	$this->form_validation->set_rules('cdaluno_profissao', 'cdaluno profissao', 'trim|required');
	$this->form_validation->set_rules('cdaluno_telefoneresidencial', 'cdaluno telefoneresidencial', 'trim|required');
	$this->form_validation->set_rules('cdaluno_telefonecomercial', 'cdaluno telefonecomercial', 'trim|required');
	$this->form_validation->set_rules('cdaluno_telefonecelular', 'cdaluno telefonecelular', 'trim|required');
	$this->form_validation->set_rules('cdaluno_email', 'cdaluno email', 'trim|required');
	$this->form_validation->set_rules('cdaluno_cep', 'cdaluno cep', 'trim|required');
	$this->form_validation->set_rules('cdaluno_cidade', 'cdaluno cidade', 'trim|required');
	$this->form_validation->set_rules('cdaluno_endereco', 'cdaluno endereco', 'trim|required');
	$this->form_validation->set_rules('cdaluno_numero', 'cdaluno numero', 'trim|required');
	$this->form_validation->set_rules('cdaluno_bairro', 'cdaluno bairro', 'trim|required');
	$this->form_validation->set_rules('cdaluno_pontodereferencia', 'cdaluno pontodereferencia', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('id_aluno_id_login', 'id aluno id login', 'trim|required');
	$this->form_validation->set_rules('data_criacao', 'data criacao', 'trim|required');

	$this->form_validation->set_rules('id_aluno', 'id_aluno', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Alunos.php */
/* Location: ./application/controllers/Alunos.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-14 01:24:19 */
/* http://harviacode.com */
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Situacao extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Situacao_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'situacao/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'situacao/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'situacao/index.html';
            $config['first_url'] = base_url() . 'situacao/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Situacao_model->total_rows($q);
        $situacao = $this->Situacao_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'situacao_data' => $situacao,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('situacao/SITUACAO_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Situacao_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_sitaucao' => $row->id_sitaucao,
		'situacao_nome' => $row->situacao_nome,
		'situacao_obs' => $row->situacao_obs,
	    );
            $this->load->view('situacao/SITUACAO_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('situacao'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('situacao/create_action'),
	    'id_sitaucao' => set_value('id_sitaucao'),
	    'situacao_nome' => set_value('situacao_nome'),
	    'situacao_obs' => set_value('situacao_obs'),
	);
        $this->load->view('situacao/SITUACAO_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'situacao_nome' => $this->input->post('situacao_nome',TRUE),
		'situacao_obs' => $this->input->post('situacao_obs',TRUE),
	    );

            $this->Situacao_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('situacao'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Situacao_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('situacao/update_action'),
		'id_sitaucao' => set_value('id_sitaucao', $row->id_sitaucao),
		'situacao_nome' => set_value('situacao_nome', $row->situacao_nome),
		'situacao_obs' => set_value('situacao_obs', $row->situacao_obs),
	    );
            $this->load->view('situacao/SITUACAO_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('situacao'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_sitaucao', TRUE));
        } else {
            $data = array(
		'situacao_nome' => $this->input->post('situacao_nome',TRUE),
		'situacao_obs' => $this->input->post('situacao_obs',TRUE),
	    );

            $this->Situacao_model->update($this->input->post('id_sitaucao', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('situacao'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Situacao_model->get_by_id($id);

        if ($row) {
            $this->Situacao_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('situacao'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('situacao'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('situacao_nome', 'situacao nome', 'trim|required');
	$this->form_validation->set_rules('situacao_obs', 'situacao obs', 'trim|required');

	$this->form_validation->set_rules('id_sitaucao', 'id_sitaucao', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Situacao.php */
/* Location: ./application/controllers/Situacao.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-14 21:18:35 */
/* http://harviacode.com */
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Servico extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Servico_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'servico/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'servico/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'servico/index.html';
            $config['first_url'] = base_url() . 'servico/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Servico_model->total_rows($q);
        $servico = $this->Servico_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'servico_data' => $servico,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('servico/SERVICO_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Servico_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_servico' => $row->id_servico,
		'nome' => $row->nome,
		'valor_base' => $row->valor_base,
		'st_servico' => $row->st_servico,
	    );
            $this->load->view('servico/SERVICO_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('servico'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('servico/create_action'),
	    'id_servico' => set_value('id_servico'),
	    'nome' => set_value('nome'),
	    'valor_base' => set_value('valor_base'),
	    'st_servico' => set_value('st_servico'),
	);
        $this->load->view('servico/SERVICO_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nome' => $this->input->post('nome',TRUE),
		'valor_base' => $this->input->post('valor_base',TRUE),
		'st_servico' => $this->input->post('st_servico',TRUE),
	    );

            $this->Servico_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('servico'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Servico_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('servico/update_action'),
		'id_servico' => set_value('id_servico', $row->id_servico),
		'nome' => set_value('nome', $row->nome),
		'valor_base' => set_value('valor_base', $row->valor_base),
		'st_servico' => set_value('st_servico', $row->st_servico),
	    );
            $this->load->view('servico/SERVICO_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('servico'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_servico', TRUE));
        } else {
            $data = array(
		'nome' => $this->input->post('nome',TRUE),
		'valor_base' => $this->input->post('valor_base',TRUE),
		'st_servico' => $this->input->post('st_servico',TRUE),
	    );

            $this->Servico_model->update($this->input->post('id_servico', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('servico'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Servico_model->get_by_id($id);

        if ($row) {
            $this->Servico_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('servico'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('servico'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nome', 'nome', 'trim|required');
	$this->form_validation->set_rules('valor_base', 'valor base', 'trim|required|numeric');
	$this->form_validation->set_rules('st_servico', 'st servico', 'trim|required');

	$this->form_validation->set_rules('id_servico', 'id_servico', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }




public function autoCompleteServico(){

        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->Servico_model->autoCompleteServico($q);
        }

    }

}

/* End of file Servico.php */
/* Location: ./application/controllers/Servico.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-10-02 14:32:07 */
/* http://harviacode.com */
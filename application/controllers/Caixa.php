<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Caixa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Caixa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
      $dados = $this->ConsultarCaixaAberto();  
      if($dados != FALSE){
        redirect('fluxoVenda');
                }else{
           redirect('caixa/abrir');   
       }   
   }

   
   public function ConsultarCaixaAberto() 
   {
    $row = $this->Caixa_model->get_caixa_aberto($this->session->userdata('id'));
    if ($row) {
      return $row; 

  } else {

     return FALSE;
 }
}

public function abrir() 
{

    $this->session->set_flashdata('alerta', 'É preciso abrir um caixa pra fazer uma venda');
    $this->load->view('caixa/CAIXA_abrir');
}


public function abrir_acao() 
{
    $dados['caixa_saldo'] = str_replace('.','',$this->input->post('caixa_saldo'));
    $dados['data_abertura'] = date('Y-m-d H:i:s');
    $dados['id_login_abertura'] = $this->session->userdata('id');
    $this->Caixa_model->insert($dados);
    $this->session->set_flashdata('message', 'Create Record Success');

    redirect('fluxoVenda');

}

public function update($id) 
{
    $row = $this->Caixa_model->get_by_id($id);

    if ($row) {
        $data = array(
            'button' => 'Update',
            'action' => site_url('caixa/update_action'),
            'id_caixa' => set_value('id_caixa', $row->id_caixa),
            'caixa_saldo' => set_value('caixa_saldo', $row->caixa_saldo),
            'data_abertura' => set_value('data_abertura', $row->data_abertura),
            'data_fechamento' => set_value('data_fechamento', $row->data_fechamento),
            'id_login_abertura' => set_value('id_login_abertura', $row->id_login_abertura),
            'id_login_fechamento' => set_value('id_login_fechamento', $row->id_login_fechamento),
            );
        $this->load->view('caixa/CAIXA_form', $data);
    } else {
        $this->session->set_flashdata('message', 'Record Not Found');
        redirect('caixa');
    }
}

public function update_action() 
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->update($this->input->post('id_caixa', TRUE));
    } else {
        $data = array(
          'caixa_saldo' => $this->input->post('caixa_saldo',TRUE),
          'data_abertura' => $this->input->post('data_abertura',TRUE),
          'data_fechamento' => $this->input->post('data_fechamento',TRUE),
          'id_login_abertura' => $this->input->post('id_login_abertura',TRUE),
          'id_login_fechamento' => $this->input->post('id_login_fechamento',TRUE),
          );

        $this->Caixa_model->update($this->input->post('id_caixa', TRUE), $data);
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect('caixa');
    }
}

public function delete($id) 
{
    $row = $this->Caixa_model->get_by_id($id);

    if ($row) {
        $this->Caixa_model->delete($id);
        $this->session->set_flashdata('message', 'Delete Record Success');
        redirect('caixa');
    } else {
        $this->session->set_flashdata('message', 'Record Not Found');
        redirect('caixa');
    }
}

public function _rules() 
{
	$this->form_validation->set_rules('caixa_saldo', 'caixa saldo', 'trim|required|numeric');
	$this->form_validation->set_rules('data_abertura', 'data abertura', 'trim|required');
	$this->form_validation->set_rules('data_fechamento', 'data fechamento', 'trim|required');
	$this->form_validation->set_rules('id_login_abertura', 'id login abertura', 'trim|required');
	$this->form_validation->set_rules('id_login_fechamento', 'id login fechamento', 'trim|required');

	$this->form_validation->set_rules('id_caixa', 'id_caixa', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
}

}

/* End of file Caixa.php */
/* Location: ./application/controllers/Caixa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-29 13:25:55 */
/* http://harviacode.com */
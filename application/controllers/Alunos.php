<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Alunos extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Alunos_model');
        $this->load->model('Situacao_model');
		
        if(null == $this->session->userdata('id')){
         $this->session->set_flashdata('erro','Voçê não está logado!'.
            '<br>Logue para ter acesso!');  
         redirect();
     }
 }

 public function index()
 {
   $row['s'] = $this->Situacao_model->get_all();
  $this->load->view('alunos/v_aluno_cadastro',$row);
}

public function ler($id) 
{
  $row = $this->Alunos_model->get_by_id($id);
  $row->s = $this->Situacao_model->get_all();

  if ($row) {
     $this->load->view('alunos/v_aluno_editar', $row);
 } else {
     $this->session->set_flashdata('erro', 'Record Not Found');
     redirect();
 }
}

public function removefoto($id,$foto)
{
    $this->load->helper('file');
    $caminhoParaFicheiro = 'uploads/'.$foto;
    delete_files($caminhoParaFicheiro);
    if (unlink($caminhoParaFicheiro)) {
        $data =  array('foto' => '');
        $this->Alunos_model->update($id, $data);

        echo json_encode('foto removida!') ;

    }
    else {
       echo 'Não foi possível remover';
   }


}


public function adicionar() 
{
       //recebe dados do formulario #cadastroAlunos
  $dados = $this->input->post();
  $dados['cdaluno_datadenascimento'] = date('Y-m-d', strtotime(str_replace('/', '-', $dados['cdaluno_datadenascimento'])));
     	 //configuraçao upload file
  $config['upload_path'] = 'uploads/';
  $config['allowed_types'] = '*';
  $config['max_filename'] = '255';
  $config['encrypt_name'] = TRUE;
        $config['max_size'] = '2024'; //1 MB

        $r =  array('re'=> FALSE, 'msg' => '');


        if (isset($_FILES['foto']['name'])) {
        	if (0 < $_FILES['foto']['error']) {
        		$r['re'] ='false';
        		$r['msg'] = 'Houve um erro ao enviar o arquivo:'.$_FILES['foto']['error'];
        		echo json_encode($r) ;
        	} else {
        		if (file_exists('uploads/' . $_FILES['foto']['name'])) {
        			$r['re'] ='false';
        			$r['msg'] = 'Ja existe esse arquivo:'.$_FILES['foto']['error'];
        			echo json_encode($r) ;
        			
        		} else {
                  //carregar bibliteca uploade e passar configuraç~oes
        			$this->load->library('upload', $config);
        			if (!$this->upload->do_upload('foto')) {
                        $r['re'] ='false';
                        $r['msg'] = 'Houve um erro:'.$this->upload->display_errors();
                        echo json_encode($r) ;

                    } else {
        				 //recuperar dados do uplaode
                        $foto =  $this->upload->data();

                        $dados['foto']  = $foto['file_name'];
                        $dados['id_aluno_id_login'] = $this->session->userdata('id');
                        $dados['data_criacao'] = date('Y-m-d H:i:s');
                        $dados['aluno_status'] = 1;
                        $this->Alunos_model->insert($dados);
                        $r['re'] ='true';
                        $r['msg'] = 'ok';
                        echo json_encode($r) ;
                    }
                }
            }
        } else {
            $r['re'] ='false';
            $r['msg'] = 'Selecione uma foto';
            echo json_encode($r) ;

        }
        
        

        
    }
    


    public function atualizar() 
    {
    	//recebe dados do formulario #cadastroAlunos
      $dados = $this->input->post();
      $dados['cdaluno_datadenascimento'] = date('Y-m-d', strtotime(str_replace('/', '-', $dados['cdaluno_datadenascimento'])));
         //configuraçao upload file
      $config['upload_path'] = 'uploads/';
      $config['allowed_types'] = '*';
      $config['max_filename'] = '255';
      $config['encrypt_name'] = TRUE;
        $config['max_size'] = '2024'; //1 MB

        $r =  array('re'=> FALSE, 'msg' => '');


        if (isset($_FILES['foto']['name'])) {
            if (0 < $_FILES['foto']['error']) {
                $r['re'] ='false';
                $r['msg'] = 'Houve um erro ao enviar o arquivo:'.$_FILES['foto']['error'];
                echo json_encode($r) ;
            } else {
                if (file_exists('uploads/' . $_FILES['foto']['name'])) {
                    $r['re'] ='false';
                    $r['msg'] = 'Ja existe esse arquivo:'.$_FILES['foto']['error'];
                    echo json_encode($r) ;
                    
                } else {
                  //carregar bibliteca uploade e passar configuraç~oes
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto')) {
                        $r['re'] ='false';
                        $r['msg'] = 'Houve um erro:'.$this->upload->display_errors();
                        $this->session->set_flashdata('msg', 'Erro :'.$this->upload->display_errors());
                        echo json_encode($r) ;

                    } else {
                         //recuperar dados do uplaode
                        $foto =  $this->upload->data();
                        $dados['foto']  = $foto['file_name'];
                        $this->Alunos_model->update($this->input->post('id_aluno'), $dados);

                        $r['re'] ='true';
                        $r['msg'] = 'Atualizado com sucesso!';
                        $this->session->set_flashdata('msg', 'Atualizado com sucesso');

                        echo json_encode($r) ;

                    }
                }
            }
        } else {
            unset($dados['foto']);
            
            $this->Alunos_model->update($this->input->post('id_aluno', TRUE), $dados);
            $r['re'] ='true';
            $r['msg'] = 'Atualizado sem foto';
            $this->session->set_flashdata('msg', 'Atualizado com sucesso');

            echo json_encode($r) ;

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

    	$this->form_validation->set_rules('id_aluno', 'id_aluno', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    // autos comletar alunos

public function autoCompleteAluno(){

        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->Alunos_model->autoCompleteAluno($q);
        }

    }

}




/* End of file Alunos.php */
/* Location: ./application/controllers/Alunos.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-14 01:14:55 */
/* http://harviacode.com */
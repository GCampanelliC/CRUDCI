<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("alunos_model");
	}

    
	public function index()
	{

		$data['alunos'] = $this->alunos_model->listar_alunos();
		
		$data['title'] = "Dashboard - Alunos";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
	}

	public function visualizar($id){

		$this->load->model("alunos_model");
		$data['alunos'] = $this->alunos_model->show($id);

		$data['title'] = "Informações - Aluno";

		
			$this->load->view('templates/header', $data);
			$this->load->view('templates/nav-top', $data);
			$this->load->view('pages/visu', $data);
			$this->load->view('templates/footer', $data);
		
	}

	public function info(){
		$data['title'] = "Informações - Alunos";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/info', $data);
		$this->load->view('templates/footer', $data);
	}

	public function new(){

		$data['title'] = "Novo Aluno";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-alunos', $data);
		$this->load->view('templates/footer', $data);
	}

	public function edit($id){
	
		
		
		$data['alunos'] = $this->alunos_model->show($id);
		

		$data['title'] = "Editar - Alunos";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/edit-alunos', $data);
		$this->load->view('templates/footer', $data);
	}

	public function update($id){

		$nome = $this->input->post('nome');
		//Endereço
		$endereco = $this->input->post('endereco');

		// Tratar o upload da foto.
		$config['upload_path'] = "./assets/img";
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = 100;
		$config['max_width']  = 1024;
		$config['max_height']  = 768;
		$config['encrypt_name'] = TRUE;
		

		$this->load->library('upload', $config);

		
		
		if(!$this->upload->do_upload('foto'))
		{
			
		   $info_data = $this->upload->data();
		  
		  
		   $aluno = array(
			   "nome" => $nome,
			   "endereco" => $endereco
			   
		   );

		   $this->load->model("alunos_model");
		   $this->alunos_model->upd($id,$aluno);

		}else{  
		
		   $info_data = $this->upload->data();
		   $nome_arquivo = $info_data["file_name"];
		  
		   $aluno = array(
			   "nome" => $nome,
			   "endereco" => $endereco,
			   "foto" => './assets/img/'.$nome_arquivo
		   );
		   $this->load->model("alunos_model");
		   $this->alunos_model->upd($id,$aluno);
		}

		redirect("dashboard"); 
		
		
	}

	public function delete($id){
	
        $this->alunos_model->destroy($id);
		redirect("dashboard");
	}

	public function upload(){
		//Nome 
		 $nome = $this->input->post('nome');
		 //Endereço
		 $endereco = $this->input->post('endereco');
 
		 // Tratar o upload da foto.

		 $config['upload_path'] = "./assets/img";
		 $config['allowed_types'] = 'jpeg|jpg|png';
		 $config['max_size'] = 800;
		 $config['max_width']  = 700;
		 $config['max_height']  = 600;
		 $config['encrypt_name'] = TRUE;
		 
 
		 $this->load->library('upload', $config);
 
		 
		 
		 if($this->upload->do_upload('foto'))
		 {
			 
			$info_data = $this->upload->data();
			$nome_arquivo = $info_data["file_name"];
		   
			$aluno = array(
				"nome" => $nome,
				"endereco" => $endereco,
				"foto" => './assets/img/'.$nome_arquivo
			);
		    
			$this->load->model("alunos_model");
			$this->alunos_model->store($aluno);
			
		 }else
		 {
			 $erros = $this->upload->display_errors();
			 $alert = array(
				 "class" => "danger",
				 "mensagem" => "Atenção! Upload não foi feito. <br>". $erros
			 );
		 }  
		 redirect("dashboard");
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_site', 'site');
		$this->load->library('session');
		$this->load->helper('file');
		$this->load->helper('download');
	}

	public function index(){
		$botao = array('botao' => 'home');
		$this->load->view('template/header', $botao);
		$this->load->view('template/body');
		$this->load->view('template/footer');
		$this->load->view('template/funcoes');
	}

	public function cursos(){
		$botao = array('botao' => 'cursos');
		$this->session->set_flashdata('sucesso', '');

		$this->load->view('template/header', $botao);
		$this->load->view('cursos/body');
		$this->load->view('template/footer');
		$this->load->view('cursos/funcoes');
		$this->load->view('template/funcoes');
	}

	public function formMatricula($curso){
		$dados = $this->input->post();
		$horario = '';

		if ($curso == '0') {
			$curso = 'Coaching Profissional';
		} else if($curso == '1'){
			$curso = 'Coaching para Empresários';
		} else if($curso == '2'){
			$curso = 'Líder Coach';
		} else {
			$curso = 'Método IBA - Inteligência Emocional';
		}

		if ($dados['matricula-horario'] == '0') {
			$horario = 'Manhã';
		} else if($dados['matricula-horario'] == '1'){
			$horario = 'Tarde';
		} else {
			$horario = 'Noite';
		}

		//envia email para o dono do site
		$mensagem = "
			<p><b>Nome:</b> " . $dados['matricula-nome'] . "</p>
			<p><b>Email:</b> " . $dados['matricula-email'] . "</p>
			<p><b>Telefone:</b> " . $dados['matricula-telefone'] . "</p>
			<p><b>Curso:</b> " . $curso . "</p>
			<p><b>Horário:</b> " . $horario;
		$msg = wordwrap($mensagem,70);
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$resposta = mail("lucasmigli1@gmail.com", "(Novo interesse de matrícula)", $msg, $headers);

		//Envia email para o cliente
		$mensagem2 = 'Olá ' . $dados['matricula-nome'] . ', agradecemos o interesse no curso, assim que possível iremos retornar o contato para confirmação da matrícula.';
		$msg2 = wordwrap($mensagem2,70);
		$headers2 = "MIME-Version: 1.0" . "\r\n";
		$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		mail($dados['matricula-email'], '(Superando Desafios) Interesse de Matrícula', $msg2, $headers2);

		if ($resposta) {
			$this->session->set_flashdata('sucesso', 'true');
		} else {
			$this->session->set_flashdata('sucesso', 'false');
		}
		redirect('site/cursos','refresh');
	}

	public function solucoes(){
		$botao = array('botao' => 'solucoes');
		$this->load->view('template/header', $botao);
		$this->load->view('solucoes/body');
		$this->load->view('template/footer');
		$this->load->view('solucoes/funcoes');
		$this->load->view('template/funcoes');
	}

	public function formSolucoes($categoria){
		$dados = $this->input->post();
		$horario = '';

		if ($categoria == '0') {
			$categoria = 'Consultório de Psicologia';
		} else if($categoria == '1'){
			$categoria = 'Atendimento em Coaching';
		} else {
			$categoria = 'Para Empresas';
		}

		//envia email para o dono do site
		$mensagem = "
			<p><b>Nome:</b> " . $dados['matricula-nome'] . "</p>
			<p><b>Email:</b> " . $dados['matricula-email'] . "</p>
			<p><b>Telefone:</b> " . $dados['matricula-telefone'] . "</p>
			<p><b>Curso:</b> " . $categoria;

		$msg = wordwrap($mensagem,70);
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$resposta = mail("lucasmigli1@gmail.com", "(Contato - Soluções)", $msg, $headers);

		//Envia email para o cliente
		$mensagem2 = 'Olá ' . $dados['matricula-nome'] . ', agradecemos a preferência na solução, assim que possível iremos retornar o contato para dar continuidade no processo.';
		$msg2 = wordwrap($mensagem2,70);
		$headers2 = "MIME-Version: 1.0" . "\r\n";
		$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		mail($dados['matricula-email'], '(Superando Desafios) Contato para Solução', $msg2, $headers2);

		if ($resposta) {
			$this->session->set_flashdata('sucesso', 'true');
		} else {
			$this->session->set_flashdata('sucesso', 'false');
		}

		redirect('site/solucoes','refresh');
	}

	public function login(){
		$dados = $this->input->post();
		$result = $this->site->realizaLogin($dados['login-email'], $dados['login-senha']);

		if (!empty($result)) {
			$this->session->set_userdata(array('usuario' => $result));

			redirect('site/material','refresh');
		} else {
			$this->session->set_flashdata('sucesso', 'false');
			redirect('site/index','refresh');
			
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('site/index','refresh');
	}

	public function cadastro(){
		$dados = $this->input->post();

		$this->site->realizaCadastro($dados['login-nome'], $dados['login-email'], $dados['login-senha']);
		
		$result = $this->site->realizaLogin($dados['login-email'], $dados['login-senha']);

		if (!empty($result)) {
			$this->session->set_userdata(array('usuario' => $result));

			redirect('site/material','refresh');
		} else {
			$this->session->set_flashdata('sucesso', 'false');
			redirect('site/index','refresh');
		}
	}

	public function material(){
		if (!$this->session->userdata('usuario')['isLogado']) {
			$botao = array('botao' => 'home');
			$this->load->view('template/header', $botao);
			$this->load->view('template/body');
			$this->load->view('template/footer');
			$this->load->view('template/funcoes');
		} else {
			$botao = array('botao' => 'material');
			$this->load->view('template/header', $botao);
			$this->load->view('material/body');
			$this->load->view('template/footer');
			$this->load->view('material/funcoes');
			$this->load->view('template/funcoes');
		}
	}

	public function downloadArquivo($arquivo_id){
		//busca o diretorio do arquivo
		$path = $this->site->buscaPathByArquivoId($arquivo_id);

		//busca de fato o arquivo baseado no caminho
		$data = file_get_contents($path);

		//pega o nome do arquivo com o end ali em baixo
		$nome = explode('/', $path);
		$nome = end($nome);

		//realiza o download
		force_download($nome, $data);
	}

	public function visualizarArquivo($arquivo_id){
		//busca o diretorio do arquivo
		$path = $this->site->buscaPathByArquivoId($arquivo_id);

		if ($arquivo_id == 4) {

			if (strpos($path, 'watch?v=')) {
				$path = explode('watch?v=', $path)[1];
			} else if(strpos($path, 'youtu.be/')){
				$path = explode('youtu.be/', $path)[1];
			}

			$this->output->set_content_type('application/json')->set_output(json_encode($path));
		} else {
			//busca de fato o arquivo baseado no caminho
			$data = file_get_contents($path);

			//pega o nome do arquivo com o end ali em baixo
			$nome = explode('/', $path);
			$nome = end($nome);

			//pega a extensao do arquivo
			$ext  = explode('.', $nome);
			$ext  = strtolower(end($ext));


			if ($ext == 'pdf') {
				header("Content-Type: application/pdf");
				echo $data;
			} else if($ext == 'jpg' || $ext == 'png' || $ext == 'gif'){
				echo '<img src="data:image/jpeg;base64,' . base64_encode($data) . '" />';
			} else {
				//realiza o download
				force_download($nome, $data);
			}
		}

	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/body');
		$this->load->view('template/footer');
	}

	public function cursos(){
		$this->load->library('session');

		$this->load->view('cursos/header');
		$this->load->view('cursos/body');
		$this->load->view('cursos/footer');
		$this->load->view('cursos/funcoes');
	}

	public function formMatricula($curso){
		$this->load->library('session');
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

		$this->load->view('cursos/header');
		$this->load->view('cursos/body');
		$this->load->view('cursos/footer');
		$this->load->view('cursos/funcoes');
	}

	public function solucoes(){
		$this->load->library('session');

		$this->load->view('solucoes/header');
		$this->load->view('solucoes/body');
		$this->load->view('solucoes/footer');
		$this->load->view('solucoes/funcoes');
	}

	public function formSolucoes($categoria){
		$this->load->library('session');
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

		$this->load->view('solucoes/header');
		$this->load->view('solucoes/body');
		$this->load->view('solucoes/footer');
		$this->load->view('solucoes/funcoes');
	}
}

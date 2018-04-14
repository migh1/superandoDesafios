<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_site extends CI_Model {

	public function realizaLogin($email, $senha){
		$retorno = array();

		if ($email == 'admin@admin.com' && $senha == 'admin') {
			$retorno = array(
				'nome' 		=> 'Administrador',
				'nivel' 	=> 1,
				'isLogado' 	=> true
			);
		} else if($email == 'usuario@usuario.com' && $senha == 'usuario'){
			$retorno = array(
				'nome' 		=> 'Usuário',
				'nivel'		=> 2,
				'isLogado' 	=> true
			);
		}
		return $retorno;
	}

	public function realizaCadastro($nome, $email, $senha){
		return true;
	}

	public function buscaPathByArquivoId($arquivo_id){
		/*$this->db->select('path');
		$this->db->where('arquivo_id', $arquivo_id);
		return $this->db->get('arquivos')->result_array()[0]['path'];*/
		return base_url('arquivos/intranet/teste.pdf');
	}
}

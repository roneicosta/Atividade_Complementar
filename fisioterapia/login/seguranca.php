<?php
/**
 * Classe de controle da sessão do cliente com a aplicação
 * WEB.
 * @author Carlos Alberto Junior
 * @package modulos.
 */

class SessionManager{
	private $id;
	private $login;
	private $lastAction;
	private $maxInactiveTime = 6000;
	private $acesso;

	function SessionManager(){
		$this->lastAction = null;
	}

	/**
	 * Registra uma sessão para o usuario da aplicação.
	 *
	 * @param Integer $id codigo de referencia do usuario.
	 * @param String $login nome de usuario.
	 */
	public function registerSession($id, $login, $nome,$acesso){
		$this->id 		 = base64_encode($id);
		$this->login 	 = $login;
		$this->nome 	 = $nome;
		$this->lastAction = date("Y-n-j H:i:s");
		$this->acesso = $acesso;

		$_SESSION['id'] 		= $this->getSessionId();
		$_SESSION['userLogin'] 	= $this->getUserLogin();
		$_SESSION['userNome'] 	= $this->getUserNome();
		$_SESSION['lastAction']	= $this->getLastAction();
		$_SESSION['Acesso']	    = $this->getAcesso();
	}

	/**
	 * Verifica a validade de uma sessão do usuario.
	 *
	 * @return Header login.php caso falhe.
	 */
	public function isValidSession(){
     $event="On";
     if(!isset($_SESSION['id'])|| !isset($_SESSION['userLogin'])){
		//	header("Location: index.php?event=DENIED");
       $event="Off";
        }
		if(!$this->isInativo( $_SESSION['lastAction'])){
		 //	header("Location: index.php?event=TIMEOUT");
       $event="Off";
		}
		return $event;
	}

	private function isInativo($lastAction){
		$agora = date("Y-n-j H:i:s");
		$diferenca = (strtotime($agora) - strtotime($lastAction));

		if($diferenca >= 6000){
			return false;
		}
		else{
			$_SESSION['lastAction'] = $agora;
			return true;
		}
	}

	public function destroiSession(){
		session_destroy();
	}

	/**
	 * Retorna o id do usuario criptogrado em base64.
	 * @return String id
	 */
	public function getSessionId(){
		return $this->id;
	}
	
	public function getAcesso(){
		return $this->acesso;
	}	

	/**
	 * Retorna o nome de usuario criptogrado em base64.
	 * @return String userLogin
	 */
	public function getUserLogin(){
		return $this->login;
	}

  	public function getUserNome(){
		return $this->nome;
        }
	/**
	 * Retorna o tempo de maximo de inatividade permitido
	 * pela aplicação em segundos. Valor padrão estabelicido
	 * é de 300 segundos ou 3 minutos.
	 *
	 * @return Integer maxInactiveTime
	 */
	public function getMaxInactiveTime(){
		return $this->maxInactiveTime;
	}

	/**
	 * Retorna a data da ultima açao feita pelo usuario autenticado
	 * na sessão corrente.
	 *
	 * @return Date lastAction
	 */
	public function getLastAction(){
		return $this->lastAction;
	}
}
?>

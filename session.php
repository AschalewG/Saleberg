<?php

class Session {
	
	private $logged_in=false;
	public $email;
	public $message;
	
	function __construct() {
		session_start();
		$this->check_message();
		$this->check_login();
    if($this->logged_in) {
    } else {
    }
	}
	
  public function is_logged_in() {
    return $this->logged_in;
  }

	public function login($user) {
		
    if($user){
      $this->user_id = $_SESSION['user_id'] = $user->id;
      $this->logged_in = true;
    }
  }
  
  public function logout() {
    unset($_SESSION['email']);
    unset($this->user_name);
    $this->logged_in = false;
  }

	public function message($msg="") {
	  if(!empty($msg)) {
	    
	    $_SESSION['message'] = $msg;
	  } else {
			return $this->message;
	  }
	}

	private function check_login() {
    if(isset($_SESSION['email'])) {
      $this->user_name = $_SESSION['email'];
      $this->logged_in = true;
	  
	  return TRUE;
    } else {
      unset($this->user_name);
      $this->logged_in = false;
	  
	  return FALSE;
    }
  }
	
	
	public function nav(){
		
		if($this->check_login()){
			return TRUE;
		}else{
			
			return FALSE;
		}
	}
  
	private function check_message() {
		if(isset($_SESSION['message'])) {
      $this->message = $_SESSION['message'];
      unset($_SESSION['message']);
    } else {
      $this->message = "";
    }
	}
	
}

$session = new Session();
$message = $session->message();

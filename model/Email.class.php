<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './biblioteca/phpmailer/PHPMailer/src/Exception.php';
require './biblioteca/phpmailer/PHPMailer/src/PHPMailer.php';
require './biblioteca/phpmailer/PHPMailer/src/SMTP.php';

class Email extends PHPMailer {     
    
    const EMAIL_PROFESSOR = "rafael.pinto@canoas.ifrs.edu.br"; 
    const EMAIL_SMTP = "smtp.gmail.com";
    const EMAIL_USUARIO = "deluca.melhoramentos@gmail.com";
    const EMAIL_NOME = "Loja deluca Tecnologia";
    const EMAIL_SENHA = "jurvmbjndlakipet";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";

    function __construct($exceptions = null) {    

        parent::__construct($exceptions);
        parent::__construct();			
        parent::IsSMTP();
	    parent::IsHTML(true);                 
        $this->CharSet = 'UTF-8';
        $this->Host = Email::EMAIL_SMTP; 		
        $this->Port = Email::EMAIL_PORTA;         
        $this->SMTPAuth = Email::EMAIL_SMTPAUTH;        
        $this->FromName = Email::EMAIL_NOME;
        $this->From     = Email::EMAIL_USUARIO;
        $this->Username = Email::EMAIL_USUARIO;
        $this->Password = Email::EMAIL_SENHA;       
    }

  
    public function EnviarEmail($assunto, $mensagem, $destinatarios=array()) {

        $this->Subject = $assunto;
        $this->Body = $mensagem;       	
	    foreach($destinatarios as $email) {
             $this->AddAddress($email, $email); 
        }       
	  
            if (parent::Send()) {
                $this->ClearAllRecipients();
            } else {
               echo '<h3 class="alert alert-danger">Não foi possível enviar o email.<br>' . $this->ErrorInfo . '</h3>';
 
            }                
    }    
 
    
}

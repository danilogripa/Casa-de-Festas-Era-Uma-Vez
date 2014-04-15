<?php require_once 'swift/lib/swift_required.php';

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('mail3.hi-media-techno.com', 465, 'ssl')
  ->setUsername('dev@afilio.com.br')
  ->setPassword('q1w2e3r4t5');

$form = $_POST;


$subject = 'Contato via Formulário | Claro';
$today = date('d-m-Y H:i:s');

if($_POST['tipo'] == "completo"){
$message = <<<HEREDOC

Dados de contato recebidos via formulário: <br />
<br />
Nome: {$_POST['nome']} <br />
Email: {$_POST['email']} <br />
DDD: {$_POST['ddd']} <br />
Telefone: {$_POST['telefone']} <br />
CPF: {$_POST['cpf']} <br />
RG: {$_POST['rg']} <br />
Data de Nascimento: {$_POST['nasc']}<br />
<br />
Formulário enviado em {$today}, ip: {$_SERVER['REMOTE_ADDR']}
HEREDOC;
$retorno = "contato.php";
}else{
$message = <<<HEREDOC

Dados de contato recebidos via formulário: <br />
<br />
Nome: {$_POST['nome']} <br />
DDD: {$_POST['ddd']} <br />
Telefone: {$_POST['telefone']} <br />
<br />
Formulário enviado em {$today}, ip: {$_SERVER['REMOTE_ADDR']}
HEREDOC;
$retorno = "index.php";
}
// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance($subject)
    ->setFrom(array('dev@afilio.com.br' => 'Afilio'))
    ->setTo(array('siteclaro@afilio.com.br' => 'Site Claro'))
    ->setBody($message, 'text/html');

// Send the message
$result = $mailer->send($message);

if($result){
    $retorno .= "?resposta=ok";
   	echo $retorno;
} else {
    $retorno .= "?resposta=falha";
    echo $retorno;
}
   	header('Location: ' . $retorno);
?>
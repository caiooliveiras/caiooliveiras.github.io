<?php
header('Content-Type: text/html; charset=utf-8');
if(!isset($_POST[Submit])) die("Não foi enviado nenhum tipo de dado. Por favor volte a página index.html antes. Obrigado!");
/* Medida preventiva para evitar que outros dom�nios sejam remetente da sua mensagem. */
if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {
        $emailsender='contato@garda.net.br';
} else {
        $emailsender = "contato@" . $_SERVER[HTTP_HOST];
        //    Na linha acima estamos for�ando que o remetente seja 'webmaster@seudominio',
        // voc� pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
}

echo '<link href="css/style-content.css" rel="stylesheet">';
echo '<link href="css/bootstrap.css" rel="stylesheet">';

/* Verifica qual � o sistema operacional do servidor para ajustar o cabe�alho de forma correta. N�o alterar */
if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

// Passando os dados obtidos pelo formul�rio para as vari�veis abaixo
$name        = $_POST['name'];
$data        = $_POST['data'];
$cpf         = $_POST['cpf'];
$rg          = $_POST['rg'];
$renda       = $_POST['renda'];
$profissao   = $_POST['profissao'];
$cep         = $_POST['cep'];
$estado      = $_POST['estado'];
$cidade      = $_POST['cidade'];
$bairro      = $_POST['bairro'];
$endereco    = $_POST['endereco'];
$complemento = $_POST['complemento'];
$telr        = $_POST['telr'];
$telc        = $_POST['telc'];
$cliente     = $_POST['cliente'];
$tipo        = $_POST['tipo'];
$prazoi      = $_POST['prazoi'];
$prazoa      = $_POST['prazoa'];
$valor       = $_POST['valor'];
$email       = trim($_POST['email']);
$emaildestinatario = 'contato@garda.net.br';
$comcopia          = trim($_POST['comcopia']);
$comcopiaoculta    = trim($_POST['comcopiaoculta']);
$assunto           = "Formulário de consórcio do website Garda.net";
$mensagem          = $_POST['mensagem'];

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<h2>Contato do Website : <b>FORMULÁRIO DE CONSÓRCIO</b></h2>
<h3><b><i>Dados Pessoais :</i></b></h3>
<p><b>E-mail:</b> '.$email.'</p>
<p>
  <b>Nome:</b> '.$name.' , <b>Data de nascimento:</b> '.$data.'
</p>
<p>
  <b>CPF:</b> '.$cpf.' , <b>RG:</b> '.$rg.' ,
</p>
<p>
  <b>Renda:</b> '.$renda.' , <b>Profissão:</b> '.$profissao.'
</p>
<p>
  <b>Telefone Residencial:</b> '.$telr.' , <b>Telefone Comercial:</b> '.$telc.'
</p>
<p>
  <b>CEP:</b> '.$cep.'
</p>
<p>
  <b><i>Endereço:</i></b> '.$estado.', '.$cidade.', '.$bairro.', '.$endereco.', '.$complemento.'
</p>
<hr>
<p><b><i>É Cliente?</i></b> '.$cliente.'</p>
<b><i>Tipo de Bem : </i></b>'.$tipo.'</p>
<p><b><i>Prazo :</i></b></p>
<p><b>Imobiliário:</b> '.$prazoi.' , <b>Automóvel:</b> '.$prazoa.'</p>
<p><b><i>Valor do Bem :</i></b></p>
<h3>'.$valor.'</h3>
<br>
<hr>';


/* Montando o cabe�alho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
// Perceba que a linha acima cont�m "text/html", sem essa linha, a mensagem n�o chegar� formatada.
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
// Esses dois "if's" abaixo s�o porque o Postfix obriga que se um cabe�alho for especificado, dever� haver um valor.
// Se n�o houver um valor, o item n�o dever� ser especificado.
if(strlen($comcopia) > 0) $headers .= "Cc: ".$comcopia.$quebra_linha;
if(strlen($comcopiaoculta) > 0) $headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
$headers .= "Reply-To: ".$email.$quebra_linha;
// Note que o e-mail do remetente ser� usado no campo Reply-To (Responder Para)

/* Enviando a mensagem */
mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender);

/* Mostrando na tela as informa��es enviadas por e-mail */
print "<h1><center>Formulário enviado com sucesso. Obrigado</center><h1><h1><center>Obrigado!</center><br>
<h2><center><a href='".$_SERVER["HTTP_REFERER"]."'>Voltar</a></center></h2>"
?>

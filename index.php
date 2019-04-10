<!DOCTYPE html>
<html>

<head>
    <title>Formulário da ETEC</title>
    <meta charset="iso-8859-1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" media="all" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <h2>Formul&aacute;rio - <a href="http://www.oficinadanet.com.br">Oficina ETEC</a></h2>

    <form method="post" onsubmit="validaForm(); return false;" class="form">
    <p class="name">
        <label for="name">Nome</label>
        <input type="text" placeholder="Seu Nome" />
    </p>
    <p class="email">
        <label for="email">E-mail</label>
        <input type="text" placeholder="mail@exemplo.com.br" />
    </p>
    <p class="text">
        <label for="mensagem">Mensagem</label>
        <textarea placeholder="Escreva sua mensagem" /></textarea>
    </p>
    <p class="submit">
        <input type="submit" value="Enviar" />
    </p>
    </form>

    <script type="text/javascript">
 function validaForm()
 {
    erro = false;
    if($('#nome').val() == '')
    {
        alert('Voc&ecirc; precisa preencher o campo Nome');erro = true;
    }
    if($('#email').val() == '' &amp;&amp; !erro)
    {
        alert('Voc&ecirc; precisa preencher o campo E-mail');erro = true;
    }
    if($('#mensagem').val() == '' &amp;&amp; !erro)
    {
        alert('Voc&ecirc; precisa preencher o campo Mensagem');erro = true;
    }

    //se nao tiver erros
    if(!erro)
    {
        $('#formulario_contato').submit();
    }
 }
</script>
</body>
</html>

<?
include "funcao.php";
if(strlen($_POST['nome']))
{
    if(sendMail($_POST['email'],'seuemail@gmail.com', $_POST['mensagem'], 
        'Formul&aacute;rio de contato'))
    {
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else
    {
        echo "Ocorreu um erro ao enviar";
    }
    echo "<br><a href='index.php'>Voltar</a>";
    exit();
}
?>

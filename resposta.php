<?
include "funcao.php";
if(strlen($_POST['nome']))
{
    if(sendMail($_POST['email'],'seuemail@gmail.com', $_POST['mensagem'], 'Formul&aacute;rio de contato'))
    {
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else
    {
        echo "Ocorreu um erro ao enviar";
    }
    echo "<br><a href='index.php'>Voltar</a>";
    exit();
}?>
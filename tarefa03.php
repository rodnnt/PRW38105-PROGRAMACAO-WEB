<?php
// Inicializando as variáveis
$classificacao = '';
$secao_favorita = '';
$outra_secao = '';
$comentarios = '';
$nome = '';
$email = '';
$telefone = '';
$notificacoes = 'Não';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $classificacao = $_POST['classificacao']; 
    $secao_favorita = $_POST['opcoes'] ; 
    $outra_secao = $_POST['outra']; 
    $comentarios = $_POST['mensagem'] ; 
    $nome = $_POST['nome']; 
    $email = $_POST['email']; 
    $telefone = $_POST['fone']; 
    if (isset($_POST['notificacoes'])) {
        $notificacoes = 'Sim';
    } else {
        $notificacoes = 'Não';
    }    

    /*
    // Exibir os dados (para testes)
    echo "<h1>Dados Recebidos</h1>";
    echo "<p><b>Classificação do site:</b> $classificacao</p>";
    echo "<p><b>Seção favorita:</b> $secao_favorita</p>";
    if (!empty($outra_secao)) {
        echo "<p><b>Outra seção favorita:</b> $outra_secao</p>";
    }
    echo "<p><b>Comentários:</b> $comentarios</p>";
    echo "<p><b>Nome:</b> $nome</p>";
    echo "<p><b>E-mail:</b> $email</p>";
    echo "<p><b>Telefone:</b> $telefone</p>";
    echo "<p><b>Deseja receber notificações:</b> $notificacoes</p>";*/
    echo "Formulário enviado com sucesso. Obrigado pelo envio!";

} else {
echo "<p>Método de requisição inválido.</p>";
}
?>
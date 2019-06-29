<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário AJAX</title>
</head>
<body>
<form action="salvar.php" method="post">
    <fieldset>
        <legend>FALE CONOSCO</legend>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" value="">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" value="">
        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" id="telefone" placeholder="Digite seu telefone" value="">
        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" id="mensagem" placeholder="Digite sua mensagem"></textarea>
    </fieldset>
    <button id="but_salvar">Salvar</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="all.js"></script>
<style>
body {
    font-family: Arial, sans-serif;
}
form {
    width: 100%;
    margin-top: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
form fieldset {
    width: 100%;
    max-width: 500px;
    border: 1px solid #CCC;
    padding: 10px 20px 20px 20px;
}
form fieldset legend {
    font-weight: bold;
}
form fieldset label {
    width: 100%;
}
form fieldset input {
    width: calc(100% - 22px);
    height: 40px;
    font-size: 12px;
    background-color: #FFF;
    border: 1px solid #CCC;
    margin-bottom: 10px;
    padding: 0 10px;
}
form fieldset textarea {
    width: calc(100% - 22px);
    height: 120px;
    font-size: 12px;
    background-color: #FFF;
    border: 1px solid #CCC;
    padding: 10px;
}
form button {
    height: 40px;
    background-color: green;
    color: #FFF;
    font-size: 14px;
    margin-top: 10px;
    padding: 0 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
</style>
</body>
</html>
$(function(){
    // Executa assim que o botão de salvar for clicado
    $('#but_salvar').click(function(e){
        
        // Cancela o envio do formulário
        e.preventDefault();

        // Pega os valores dos inputs e coloca nas variáveis
        var nome = $('#nome').val();
        var email = $('#email').val();
        var telefone = $('#telefone').val();
        var mensagem = $('#mensagem').val();

        // Método post do Jquery
        $.post('salvar.php', {
            nome:nome,
            email:email,
            telefone:telefone,
            mensagem:mensagem
        }, function(resposta){
            // Valida a resposta
            if(resposta == 1){
                // Limpa os inputs
                $('input, textarea').val('');
                alert('Mensagem enviada com sucesso.');
            }else {
                alert(resposta);
            }
        });
        
    });
});
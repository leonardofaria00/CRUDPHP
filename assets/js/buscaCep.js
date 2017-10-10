$(document).ready(function () {
    $("#IdBuscarCep").on('click', function () {
        $.ajax({
            url: "buscaCep.php",
            type: 'POST',
            dataType: 'json',
            data: {cep: $('#cep').val()},
            success: function (res) {
                alert('Criou o Objeto');
                $('#end').val(res.logradouro);
                $('#cidade').val(res.cidade);
                $('#bairro').val(res.bairro);
                $('#uf').val(res.uf);

//                  Cidade: <input type="text" id="cidade" value=""/>
//        Bairro: <input type="text" id="bairro" value=""/>
//        UF: <input type="text" id="uf" value=""/>
//                       
//                $dados['logradouro'] = $xml - > tipo_logradouro;
//                $dados['cidade'] = $xml - > cidade;
//                $dados['bairro'] = $xml - > bairro;
//                $dados['uf'] = $xml - > uf;
            }
        })

    })
})
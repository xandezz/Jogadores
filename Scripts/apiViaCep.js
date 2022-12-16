$( "#cep-cadastro" ).blur(_ => {    
    $(document).ready(function(){
    //busca do CEP
        var Dados = $(this).serialize();
        var Cep = $('#cep-cadastro').val();
        
        $.ajax({
            url:'https://viacep.com.br/ws/'+Cep+'/json/',
            method:'get',
            dataType:'json',
            data: Dados,
            
            success:function(Dados){
            if(Dados.logradouro == undefined & Dados.bairro == undefined & Dados.localidade == undefined & Dados.uf == undefined){
                var logradouro = document.getElementById('logradouro-cadastro');
                logradouro.setAttribute("value", "Digite um cep valido!");
                logradouro.setAttribute("disabled", "");
                logradouro.classList.add("vermelho");

                var bairro = document.getElementById('bairro-cadastro');
                bairro.setAttribute("value", "Digite um cep valido!");
                bairro.setAttribute("disabled", "");
                bairro.classList.add("vermelho");

                var cidade = document.getElementById('cidade-cadastro');
                cidade.setAttribute("value", "Digite um cep valido!");
                cidade.setAttribute("disabled", "");
                cidade.classList.add("vermelho");

                var uf = document.getElementById('uf-cadastro');
                uf.setAttribute("value", "Digite um cep valido!");
                uf.setAttribute("disabled", "");
                uf.classList.add("vermelho");

                var botao = document.getElementById('botao-cadastro');
                botao.setAttribute("value", "Digite um cep valido para cadastrar");
                botao.setAttribute("disabled", "");
                botao.classList.add("dado-errado","botao-error");
            }else{
                var logradouro = document.getElementById('logradouro-cadastro');
                logradouro.setAttribute("value", Dados.logradouro);
                logradouro.removeAttribute("disabled", "");
                logradouro.classList.remove("vermelho");
    
                var bairro = document.getElementById
                ('bairro-cadastro');
                bairro.setAttribute("value", Dados.bairro);
                bairro.removeAttribute("disabled", "");
                bairro.classList.remove("vermelho");
    
                var cidade = document.getElementById('cidade-cadastro');
                cidade.setAttribute("value", Dados.localidade);
                cidade.removeAttribute("disabled", "");
                cidade.classList.remove("vermelho");
    
                var uf = document.getElementById('uf-cadastro');
                uf.setAttribute("value", Dados.uf);
                uf.removeAttribute("disabled", "");
                uf.classList.remove("vermelho");
    
                var botao = document.getElementById('botao-cadastro');
                botao.setAttribute("value", "Cadastrar");
                botao.removeAttribute("disabled", "");
                botao.classList.remove("dado-errado","botao-error");
                
            }
            },

            error:function(){
                var logradouro = document.getElementById('logradouro-cadastro');
                logradouro.setAttribute("value", "Digite um cep valido!");
                logradouro.setAttribute("disabled", "");
                logradouro.classList.add("vermelho");

                var bairro = document.getElementById('bairro-cadastro');
                bairro.setAttribute("value", "Digite um cep valido!");
                bairro.setAttribute("disabled", "");
                bairro.classList.add("vermelho");

                var cidade = document.getElementById('cidade-cadastro');
                cidade.setAttribute("value", "Digite um cep valido!");
                cidade.setAttribute("disabled", "");
                cidade.classList.add("vermelho");

                var uf = document.getElementById('uf-cadastro');
                uf.setAttribute("value", "Digite um cep valido!");
                uf.classList.add("vermelho");

                var botao = document.getElementById('botao-cadastro');
                botao.setAttribute("value", "Digite um cep valido para cadastrar");
                botao.setAttribute("disabled", "");
                botao.classList.add("dado-errado","botao-error");
            }
        });   
    });
});

 


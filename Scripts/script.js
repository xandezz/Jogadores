$( "#usuario-cadastro" ).blur(_ => {    
        $(document).ready(function(){

    
    var Dados = $(this).serialize();
    var usuario = $("#usuario-cadastro").val();

    $.ajax({
       url: "script.php?usuario="+usuario, 
       data: Dados, 
       type: "POST",
       success: function (data) {
        var usuario = document.getElementById("usuario-cadastro");
       
           if(data.length > 0){ 
                var usuario = document.getElementById('usuario-cadastro');
                usuario.classList.add("dado-errado");

               var botao = document.getElementById('botao-cadastro');
                botao.setAttribute("value", "Usuario já cadastrado");
                botao.setAttribute("disabled", "");
                botao.classList.add("dado-errado","botao-error");
            }else{
                var usuario = document.getElementById('usuario-cadastro');
                usuario.classList.remove("dado-errado");

                var botao = document.getElementById('botao-cadastro');
                botao.removeAttribute("value", "Usuario já cadastrado");
                botao.setAttribute("value", "Cadastrar");
                botao.removeAttribute("disabled", "");
                botao.classList.remove  ("dado-errado","botao-error");
       }
     }
  });
});
})


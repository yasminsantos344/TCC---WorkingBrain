function SolicitaProfessor(){
    var resultado                      = document.querySelector(".resultado");
   

    try{
        var Nome_Professor             = document.querySelector("#Nome_Professor").value;
        var Data_Nascimento_Professor  = document.querySelector("#Data_Nascimento_Professor").value;
        var CPF_Professor              = document.querySelector("#CPF_Professor").value;
        var Celular_Professor          = document.querySelector("#Celular_Professor").value;
        var Email_Professor            = document.querySelector("#Email_Professor").value;

        const divPai                     = document.getElementById("box-solicitacoes");

        let DivSolicitacao = `<div class="DivSolicitao">
             <h4>${Nome_Professor}</h4><br>
             <p>${Data_Nascimento_Professor}</p><br>
             <p>${Data_Nascimento_Professor}</p><br>
             <p>${CPF_Professor}</p><br>
             <p>${Celular_Professor}</p><br>
             <p>${Email_Professor}</p><br>
        </div>`;

        let div = DivSolicitacao;
        console.log(div);
        console.log(divPai);

        divPai.innerHTML = div;

        

        resultado.classList.add("ativo");
        resultado.innerHTML = 'Solicitação realizada com sucesso!';
    }

    catch(error){
        resultado.classList.add("ativo");
        resultado.innerHTML = 'Ocorreu algum problema!'
        resultado.innerHTML = '<br>' + error;
    }  
   
} 


//mandando para a pagina de controller do mesmo diretório
function excluir(id){
    confirmar = confirm("Deseja realmente excluir este perfil?");

    if(confirmar){
        location.href = "./perfilController.php?acao=excluir&id="+id;
    }
}
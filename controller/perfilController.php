<?php

    require "./dao/conection.php";
    require "./dao/perfilService.php";
    require "./model/perfil.php";

    $acao =  isset($_GET['acao']) ? $_GET['acao'] : $acao;

    // print_r($_POST);

    if($acao == 'inserir'){
        $perfil = new Perfil();
        $perfil->__set('nome', $_POST['nome']);
        $perfil->__set('sobrenome', $_POST['sobrenome']);
        $perfil->__set('data', $_POST['idade']);
        $perfil->__set('foto', $_FILES['imagem']['name']);
        

        // print_r($_POST);
        // echo $perfil->__get('foto');
        
        $formatosPermitidos = array("JPG", "png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosPermitidos)){
            $pasta = './public/assets/imagensPerfil/';
            $temporario = $_FILES['imagem']['tmp_name'];
            $novoNome = $_FILES['imagem']['name'];

            if(move_uploaded_file($temporario, $pasta.$novoNome)){
                $mensagem="upload feito com sucesso";
            }else{
                $mensagem="Não foi possivel fazer upload";
            }
        }else{
            $mensagem="não existe";
        }

        // echo $mensagem;

        $conexao = new Conexao();

        $perfilService = new perfilService($conexao,$perfil);
        $perfilService->inserir();

        header('Location: ./index.php');

    }else if ($acao == 'listagem'){
        $conexao = new Conexao();
        $perfil = new Perfil();

        $perfilService = new PerfilService($conexao, $perfil);
        $perfis = $perfilService->recuperar();

    }else if($acao = 'excluir'){
        $conexao = new Conexao();
        $perfil = new Perfil();

        $perfil->__set('id', $_GET['id']);

        $perfilService = new PerfilService($conexao, $perfil);
        $perfis = $perfilService->remover();

        header('Location: ./index.php');
    }
?>

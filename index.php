<?php
    $acao = "listagem";
    require "controller/perfilController.php";

    /*echo '<pre>';
        print_r($perfis);
    echo '</pre>';*/
   
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/estilo.css">
    <title>Cadastro e listagem</title>
</head>
<body>
    <header>
        <div class="cabecalho">
            <h1>Cadastramento</h1>
        </div>
    </header>
    <!-- enctype="multipart/form-data" -->
    <main>
        <form class="formulario" method="POST" action="perfilController.php?acao=inserir"
        enctype="multipart/form-data">
            <div class="formEsquerdo">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">

                <label for="sobrenome">Sobrenome:</label>
                <input type="text" name="sobrenome">

                <label for="idade">Idade:</label>
                <input type="date" name="idade">
            </div>
            <div class="formDireito">
                <div class="foto">
                    Imagem: <input type="file" name="imagem">
                </div>
            </div>
            <br/>
            <button class="botao">Enviar</button>
        </form>

        <table border="1">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>sobrenome</th>
                    <th>Nascimento</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?foreach($perfis as $indice=>$perfil){?>
                <tr>
                    <td > 
                        <img src="public//assets//imagensPerfil/<?=$perfil->foto?>" alt="foto" class="imagemPerfilFoto">  
                        
                    </td>
                    <td><?=$perfil->nome?></td>
                    <td><?=$perfil->sobrenome?></td>
                    <td><?=$perfil->data?></td>
                    <td>
                        <button>Editar</button>
                        <button onclick="excluir(<?=$perfil->id?>)">Excluir</button>
                    </td>
                </tr>
                <?}?>
            </tbody>
        </table>
        

        <div class="lista"></div>
    </main>

    <script src="public/js/script.js"></script>

</body>
</html>
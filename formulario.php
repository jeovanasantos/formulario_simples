<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Formulario de cadastro</title>
    </head>

<!--Campos de preenchimentos com dados de usuarios-->
    <body>
        
        <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de cadastro</b></legend>
           
            <div class="campo">
                <label><strong>Nome:</strong></label>
                <input type="text"  name="nome" id="nome" required/>
                <br><br>
            </div>

            <div class="campo">
                <label><strong>Email:</strong></label>
                <input type="email" name="email" id="email" />
                <br><br>
            </div>

            <div class="campo">
                <label><strong>Data de nascimento:</strong></label>
                <input type="date" name="data_nasc" id="data_nasc" />
                <br><br>
            </div >

            <div class="campo">
                <label><strong>Senha:</strong></label>
                <input type="password" name="senha" id="senha" />
                <br><br>

            <button class= "btn" type="submit">Cadastrar</button>       
         </form>
        </div>
        </fieldset>
        </div>

    <?php 
        include ("conexao.php");/*referenciamento da conexao com o BD*/

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES('$nome','$email','$senha','$data_nasc')";/*Pegando valores inseridos nas váriaveis e colocando no Banco de dados */

        /**DEU TUDO ERRADO DAQUI PRA BAIXO */
        if (isset($_POST['nome'], $_POST['email'], $_POST['data_nasc'], $_POST['senha'])){/*isset verifica se a variavel existe */
            if (!empty($_POST['nome'])){/**o empty verifica se a variavel esta vazia */
            echo " O formulário foi preenchido com sucesso! <br/>";
        }else{
            die();
        }
        }

        /*Não faço a mínima ideia do que eu fiz aqui, tenho que pesquisar */
        if ($mysqli->query($sql) === TRUE) {
            echo "Usuario cadastrado!";
        }else{
            echo "erro: ".$sql ."<br>". $mysqli->error;
        }

    
    ?>
    </body>
</html>
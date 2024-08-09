<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $temp = "";
        $velo = "";
    ?>

    <h1>Cadastro</h1>
    <form method="post">
        <label>nome: </label>
        <input type="number" id="nome" name="nome"><br><br>

        <label>telefone: </label>
        <input type="number" id="telefone" name="telefone"><br><br>
    
        <label>endereço: </label>
        <input type="number" id="endereço" name="endereço"><br><br>

        <label>cpf: </label>
        <input type="number" id="cpf" name="cpf"><br><br>

        <label>email: </label>
        <input type="number" id="email" name="email"><br><br>

        <label>nascimento: </label>
        <input type="number" id="nascimento" name="nascimento"><br><br>

        <label>login: </label>
        <input type="number" id="login" name="login"><br><br>

        <label>senha: </label>
        <input type="number" id="senha" name="senha"><br><br>


        <button>Calcular
        <?php
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $endereço = $_POST['endereço'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $nascimento = $_POST['nascimento'];
            $login = $_POST['login'];
            $senha = $_POST['senha'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($nome == "" || $telefone == "" || $endereço == "" || $cpf == "" || $email == "" || $nascimento == "" || $login == "" || $senha == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo cadastro($nome,$telefone,$endereço,$cpf,$email,$nascimento,$login,$senha);
                }
            ?>
        </textArea>
    </form>
</body>
</html>
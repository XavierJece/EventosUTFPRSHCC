<?php
    header("Content-type: text/html; charset=utf-8");
	require_once '../php/Conecta.php';

    session_start();
    if(!empty($_SESSION['logado']) == "sim"){
		header('Location: adm.php');
	}

    if(isset($_POST['logar'])){
        $con = new Conecta();
        $con->logar($_POST);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../css/styleLogin.css">
</head>

<body>
<!--  -->
    <div class="Box">
        <h2>ENTRAR</h2>
        <form action="" method="POST">

            <label class="field a-field a-field_a2 page__field">
                <input class="field__input a-field__input" placeholder="a123456" required name="login">
                <span class="a-field__label-wrap">
                    <span class="a-field__label">Login</span>
                </span>
            </label>

            <label class="field a-field a-field_a2 page__field">
                <input class="field__input a-field__input" placeholder="Senha do sistema..." required type="password" name="senha">
                <span class="a-field__label-wrap">
                    <span class="a-field__label">Senha</span>
                </span>
            </label>

            <input class="input-submit" type="submit" name="logar" value="Entrar">
        </form>
    </div>

    <?php
        if(!empty($_GET['login']) == 'error'){
            echo '
                <div class="Box-error">
                    <h2>OPS! Algo de errado não está certo :(</h2>
                </div>
            '; 
        }
    ?>

</body>
</html>
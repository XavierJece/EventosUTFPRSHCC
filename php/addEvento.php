<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<pre>

    <?php

    require_once('Conecta.php');
    require_once('Evento.php');

    if((isset($_POST['Adicinar']) || isset($_POST['Editar']))  && !empty($_POST)){
        
        $con = new Conecta();

        $titulo = $_POST['titulo'];
        $tipo = $_POST['tipoEvento'];
        $data = $_POST['dateEvento'];
        $previa = $_POST['previa'];
        $texto = $_POST['texto'];


        //Condição para saber se é um updade ou um insert
        if(isset($_POST['Adicinar'])){

            //Adicionando no campo os atributos do evento;
            //$con->insertEventos($titulo, $previa, $texto, $tipo, $data);

            //Criando a pasta onde as fotos seram armazenadas;
            $id = $con->getUltimoEventoAdicionado();
            $newPasta = "../image/" . $tipo . "/" . $id;

            if(!is_dir($newPasta)){
                mkdir($newPasta);   
            }
            
            $erros = array();
            $msgError = null;
            $flagErro = false;

            $fotos = $_FILES['foto'];
            $qtdFotosSelecionadas = count($fotos['name']);

            echo " qtdFotosSelecionadas = " . $qtdFotosSelecionadas;

            for($i = 0; $i < $qtdFotosSelecionadas; $i++){
                //Tratamentos de erros
                
                //Tipo do arquivo
                if(!preg_match('/^(image)\/(jpeg|png)$/', $fotos['type'][$i])){
                    $msg = "Foto: " . $fotos['name'][$i] . " não do tipo permitido (<b>jpg</b> ou <b>png</b>).";
                    array_push($erros, $msgError);
                    $flagErro = true;  
                }

                //Error no upload
                if($fotos['error'][$i] != 0){
                    $msg = "Foto: " . $fotos['name'][$i] . " teve o erro: <b>" .$fotos['error'][$i] . "</b>.";
                    array_push($erros, $msgError);
                    $flagErro = true;   
                }

                //Condição para saber se posso upar essa foto ou não
                if (!$flagErro) {
                    //Arrumando a foto para fazer enviada ao servidor
                    $extensao = pathinfo($fotos['name'][$i]);
                    $extensao = $extensao['extension'];
                    $newNameFoto = ($i + 1);
                    $destinoFoto = $newPasta . "/" . $newNameFoto . "." . $extensao;
                    $descricao = null;

                    if(move_uploaded_file($fotos['tmp_name'][$i], $destinoFoto)){
                        $con->insertFotos($newNameFoto, $extensao, $descricao, $id);
                    }
                }   
                $flagErro = false;  
            }

        }else{
            $idEvento = base64_decode($_POST['idEvento']);
            
            echo"EDITAR";


        }


    }else{
        header('Location:' . $urlRaiz . '../painel/adm.php');
    }
    echo "<br>";
    print_r($_POST);
    //print_r($fotos);

    ?>
</pre>
    
</body>
</html>
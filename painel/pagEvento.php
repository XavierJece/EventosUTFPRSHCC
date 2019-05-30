<?php

    //Requisições
    require_once "../php/Evento.php";
    require_once '../php/Elementos.php';
    require_once "../php/Conecta.php";

    $con = new Conecta();

	session_start();
	if($_SESSION['logado'] == "sim"){
		$con->userLogado($_SESSION['user']);
	}else{
		header('Location: ../');
    }
    
    if(!empty($_GET['sair']) == "sim"){
		session_destroy();
		header('Location: ../');
	}

    $evento = new Evento();   



    if(isset($_GET['e'])){
        if($_GET['e'] == -1){
            $tituloPage = "Adicinar novo Evento!";
            $nameButton = "Adicinar";
            
        }else{
            if(gettype($con->getEvento($_GET['e'])) != 'object'){
                header('Location:' . $urlRaiz . '/painel/pagEvento.php?e=-1');
            }else{
                $evento = $con->getEvento($_GET['e']);

                $tituloPage = "Editar " . $evento->getTipo() . "!";
                $nameButton = "Editar";
                $date = explode(" ", $evento->getData());
                $date = $date[0];

            }
        }
    }else{
        header('Location:' . $urlRaiz . '/painel/adm.php?');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $tituloPage?></title>		
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<!-- Icone -->
	<link rel="shortcut icon" href="/image/Logo/favicon.ico" type="image/x-icon" />
		
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- Font Awesome's Free -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Galeria -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.css">
        
    <!-- My CSS -->
        <link rel="stylesheet" type="text/css" href="../css/gallery-grid.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        
		
</head>
<body>
    <!-- ************ FOOTER ************  -->
    <?php echo $header?>
	<!-- ************ FIM FOOTER ************  -->
	

	<!-- ************ MIAN ************  -->
	<main class="main-pagEvento">

            <div class="row">
                <div class="col-12 text-midle">
                    <h2><?=$tituloPage;?></h2>
                </div>
            </div>
            <form  id="fileupload" method="POST" enctype="multipart/form-data" action="../php/addEvento.php">
            <input name="idEvento" type="hidden"value="<?=  base64_encode($_GET['e']);?>">


                <div class="row">
                    <div class="col-md-6">
                        <label for="txtTitulo">Titulo:</label>
                        <input  name="titulo" type="text" class="form-control" id="txtTitulo" aria-describedby="" placeholder="Titulo" required value="<?=$evento->getTitulo();?>">
                    </div>
                    <div class="col-md-3">
                        <label  for="exampleFormControlSelect1">Tipo: </label>
                        <select name="tipoEvento" class="form-control" id="sleTipo" required>
                            <?php 
                                if($evento->getTipo() == "evento"){
                                    echo '
                                        <option value = "evento" selected >Participação em Evento</option>
                                        <option value = "visita">Visita Técnica</option>
                                    ';
                                }else{
                                    echo '
                                        <option value = "evento" >Participação em Evento</option>
                                        <option value = "visita" selected >Visita Técnica</option>
                                    ';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="validationTextarea">Quando ocorreu: </label>
                        <input name="dateEvento" type="date" class="form-control" id="validationTextarea" aria-describedby="" required value="<?=$date;?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="validationTextarea">Previa:</label>
                        <textarea name="previa" class="form-control" id="txtPrevia" placeholder="Previa do que foi o evento ou visita" required><?=$evento->getPrevia();?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="validationTextarea">Texto: </label>
                        <textarea name="texto" class="form-control" id="txtConteudo" placeholder="Texto do que foi o evento ou visita" required><?=strip_tags($evento->getTexto()) ?></textarea>
                    </div>
                </div>
                
                <div class="row row-fotos">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="titulo">Fotos</h3>
                        </div>
                    </div>

                    <div class="row ">
                            <div class="col-md-4 row-inputAddFoto"> 
                                <label for="txtUparFotos" class="txtTitulo">Adicionar Fotos: </label>
                                <input type="file" id="txtUparFotos " class="" name="foto[]" multiple/>
                            </div>
                    

                        <div class="col-md-8">

                            <div class="row lista-fotos">
                                <div class="tz-gallery">
                                    
                                    <div class="row ">
                                            

                                        <?php
                                        
                                            if($_GET['e'] == -1){
                                                echo "<h1>Após adicionar as fotos, elas serão exibidas aqui.</h1>";
                                            }else{
                                                foreach($con->getFotos($evento->getId()) as $foto ){
                                                
                                                    $pathFoto = "../image/";
                                                    $pathFoto = $pathFoto . $evento->getTipo() . "/" . $evento->getId() . "/";
                                                    $pathFoto = $pathFoto . $foto['nome'] . "." . $foto["extensao"];
        
        
                                                    echo "
                                                    
                                                    <div class='col-sm-6 col-md-4'>
                                                        <a class='lightbox' href='" . $pathFoto . "'>
                                                            <img src='" . $pathFoto . "' alt='" . $foto['descricao'] . "'> 
                                                        </a>
                                                        <button class='btn btn-danger btn-Excluir'  >Excluir</button>
                                                    </div>
        
        
                                                    ";
        
                                                }
                                            }
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <button type="submit" class="btn btn-primary" name="<?=$nameButton;?>">Salvar</button>
                </div>
            </form>
	</main>
	<!-- ************ FIM MAIN ************  -->
	
	
	<!-- ************ FOOTER ************  -->
	<?php echo $footer?>
	<!-- ************ FIM FOOTER ************  -->


    <!-- JQUERY AND BOOTSTRAP  -->
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script src="//cdn.datatables.net/plug-ins/1.10.19/sorting/date-euro.js"></script>

	<!-- Galeria -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>

	<!-- My JS -->
        <script type="text/javascript" src="../js/myjs.js"></script>
    

</body>
</html>
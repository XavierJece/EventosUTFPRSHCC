<?php


$url = explode('/',$_SERVER['SCRIPT_NAME']);
$urlRaiz = "http://sh.utfpr.edu.br/curso-cc";


$active = array();
$active[0] = null;
$active[1] = null;
$active[2] = null;

if(count($url) == 2){
    if($url[1] == 'index.php'){
        $active[0] = 'active';
    }else if($url[1] == 'visitasTecnicas.php'){
        $active[1] = 'active';
    }else if($url[1] == 'evento.php'){
        $active[2] = 'active';
    }

    //Header
    $header = '
        <nav class="navbar navbar-expand-lg mb-4 top-bar top-bar-Paginas navbar-static-top sps sps--abv">
            <div class="container">
                <a class="navbar-brand mx-auto" href="' . $urlRaiz . '">
                    <!-- Gra<span>freez</span> -->
                    <img src="' . $urlRaiz . '/image/Logo/utfpr.png" alt="UTFPR Santa Helena" class="logoHead">
                </a>
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarCollapse1">
                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ' . $active[0] . '" id="nav-item-HOME">
                            <a class="nav-link" href="' . $urlRaiz . '">Home <span class="sr-only">(current)</span></a> 
                        </li>

                        <li class="nav-item ' . $active[1] . '" id="nav-item-VT"> <a class="nav-link" href="' . $urlRaiz . '/visitasTecnicas.php">Visitas Técnicas</a> </li>
                        <li class="nav-item ' . $active[2] . '" id="nav-item-EVENTOS"> <a class="nav-link" href="' . $urlRaiz . '/evento.php">Eventos</a> </li>
                        <li class="nav-item " id="nav-item-EVENTOS"> <a class="nav-link" href="' . $urlRaiz . '/painel/">Login</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    ';
}else{

    //Header
    $header = '
        <nav class="navbar navbar-expand-lg mb-4 top-bar top-bar-Paginas navbar-static-top sps sps--abv">
            <div class="container">
                <a class="navbar-brand mx-auto" href="' . $urlRaiz . '">
                    <!-- Gra<span>freez</span> -->
                    <img src="' . $urlRaiz . '/image/Logo/utfpr.png" alt="UTFPR Santa Helena" class="logoHead">
                </a>
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarCollapse1">
                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ' . $active[0] . '" id="nav-item-HOME">
                            <a class="nav-link" href="' . $urlRaiz . '">Home <span class="sr-only">(current)</span></a> 
                        </li>

                        <li class="nav-item ' . $active[1] . '" id="nav-item-VT"> <a class="nav-link" href="' . $urlRaiz . '/visitasTecnicas.php">Visitas Técnicas</a> </li>
                        <li class="nav-item ' . $active[2] . '" id="nav-item-EVENTOS"> <a class="nav-link" href="' . $urlRaiz . '/evento.php">Eventos</a> </li>
                        <li class="nav-item " id="nav-item-EVENTOS"> <a class="nav-link" href="' . $urlRaiz . '">Sair</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    ';

}




//Footer
$footer = '
    <footer class="footer-painel">
        <div class="row">
            <div class="col-lg-4 footer-utfpr"><p><a href="http://portal.utfpr.edu.br/cursos/coordenacoes/graduacao/santa-helena/sh-ciencia-da-computacao" target="_blank"> UTFPR - Santa Helena </br> Ciências da Computação</a></p>	</div>
            <hr class="separador-modal">
            <div class="col-lg-4 footer-copyright"><p><i class="far fa-copyright"></i> 2019 Copyright Text </p></div>
            <hr class="separador-modal">
            <div class="col-lg-4 footer-desveoper"><p>Developer by </br> Professor Xavier</p></div>
        </div>
    </footer>
';

?>
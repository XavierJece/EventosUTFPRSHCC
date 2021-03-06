<?php 
    include_once 'Config.php';

class Conecta extends Config{
    /**Atributos */
    var $pdo;

    /**Constructor */
    function __construct(){
        $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db, $this->user, $this->pass, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    /**My Functions */
    function logar($info){

        $usuario = $info['login'];
        $senha = $info['senha'];

        $stmt = $this->pdo->prepare("SELECT id FROM usuario WHERE user = :a AND senha = :b");
        $stmt->bindValue(":a", $usuario);
        $stmt->bindValue(":b", $senha);

        $stmt->execute();

        if($stmt->rowCount() == 0){
            header('location: index.php?login=error');
        }else{
            session_start();
            $rs = $stmt->fetch();
            $_SESSION['logado'] = "sim";
            $_SESSION['user'] = $rs['id'];
            header('location: adm.php');
        }

    }

    function userLogado($info){

        $id = $info;

        $stmt = $this->pdo->prepare("SELECT nome FROM usuario WHERE id = :a");
        $stmt->bindValue(":a", $id);

        $stmt->execute();

        $rs = $stmt->fetch();
        $_SESSION['nome'] = $rs['nome'];



    }


    function getEventos($tipo){
        $stmt = $this->pdo->prepare("SELECT * FROM eventos WHERE tipo = :a ORDER BY  `data` desc");
        $stmt->bindValue(":a", $tipo);
        $run = $stmt->execute();

        $lista = array();
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($lista, $rs);
        }

        return $lista;
    }

    function getEvento($id){
        $stmt = $this->pdo->prepare("SELECT * FROM eventos WHERE id = :a");
        $stmt->bindValue(":a", $id);
        $run = $stmt->execute();

        $lista = array();
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($lista, $rs);
        }

       if( count($lista) != 1){
            return -1;
        }else{
            $evento = new Evento();

            $evento->setId( $lista[0]['id']);
            $evento->setTitulo($lista[0]['titulo']);
            $evento->setPrevia($lista[0]['previa']);
            $evento->setTexto($lista[0]['texto']);
            $evento->setTipo($lista[0]['tipo']);
            $evento->setData($lista[0]['data']);

            return $evento;
        }
        
    }

    function getFotos($evento){
        $stmt = $this->pdo->prepare("SELECT * FROM fotos WHERE evento = :a");
        $stmt->bindValue(":a", $evento);
        $run = $stmt->execute();

        $lista = array();
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($lista, $rs);
        }

        return $lista;
    }

    function getQtdFotos($evento){
        $stmt = $this->pdo->prepare("SELECT COUNT(`id`) AS 'total' FROM `fotos` WHERE `evento` = :a");
        $stmt->bindValue(":a", $evento);
        $run = $stmt->execute();

        $result = $stmt->fetchAll();

        return $result[0]['total'];
    }

    function getCapa($evento){
        $foto = rand(01, $this->getQtdFotos($evento));

        $stmt = $this->pdo->prepare("SELECT `extensao` FROM `fotos` WHERE `evento` = :idEvento AND `nome` = :nomeFoto");
        
        $stmt->bindValue(":idEvento", $evento);
        $stmt->bindValue(":nomeFoto", $foto);
        
        $run = $stmt->execute();
        $result = $stmt->fetchAll();

        return $foto . '.' . $result[0]['extensao'];
    }

    function getUltimoEvento($tipo){
        $stmt = $this->pdo->prepare("SELECT * FROM `eventos` WHERE `data` = (SELECT MAX(`data`) FROM `eventos` WHERE `tipo` = :a)");
        $stmt->bindValue(":a", $tipo);
        $run = $stmt->execute();

        $lista = array();
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($lista, $rs);
        }
        
        return $lista;
    }

    function deleteFotos($foto){
        $stmt = $this->pdo->prepare("DELETE FROM fotos WHERE id = :a");
        $stmt->bindValue(":a", $foto);
        $run = $stmt->execute();

    }

    function deleteEvento($evento){
        $stmt = $this->pdo->prepare("DELETE FROM eventos WHERE id = :a");
        $stmt->bindValue(":a", $evento);
        $run = $stmt->execute();
        
    }

    function insertFotos($nome, $extensao, $descricao, $evento){
        $stmt = $this->pdo->prepare("INSERT INTO `fotos`(`nome`, `extensao`, `descricao`, `evento`) VALUES (:a,:b,:c,:d)");
        $stmt->bindValue(":a", $nome);
        $stmt->bindValue(":b", $extensao);
        $stmt->bindValue(":c", $descricao);
        $stmt->bindValue(":s", $evento);
        $run = $stmt->execute();

    }

    function insertEventos($titulo, $previa, $texto, $tipo, $data){
        $stmt = $this->pdo->prepare("INSERT INTO `eventos`(`titulo`, `previa`, `texto`, `tipo`, `data`) VALUES (:a,:b,:c,:d,:e)");
        $stmt->bindValue(":a", $titulo);
        $stmt->bindValue(":b", $previa);
        $stmt->bindValue(":c", $texto);
        $stmt->bindValue(":d", $tipo);
        $stmt->bindValue(":e", $data);
        $run = $stmt->execute();

    }



}

?>
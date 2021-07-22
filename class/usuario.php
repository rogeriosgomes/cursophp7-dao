<?php



class Usuario {

    private $idusuario;
    private $login;
    private $senha;
    private $dtcadastro;

    public function getIdusuario(){
         return $this->idusuario;
    }
    
    public function setIdusuario($value){
         $this->idusuario=$value;
    }

    public function getLogin(){
     return $this->login;
    }

    public function setLogin($value){
    $this->login=$value;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($value){
    $this->senha=$value;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;   
    }

    public function setDtcadastro($value){
    $this->dtcadastro=$value;
    }

    public function loadByid($id){

        $sql = new Sql();

        $results = $sql ->select("SELECT * FROM Tb_usuarios WHERE idusuario=:ID", array(":ID"=>$id));

         if(count($results) > 0){

            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setLogin($row['login']);
            $this->setSenha($row['senha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));

         }
         
    }

    public function __toString(){

        return json_encode(array("idusuario" =>$this->getIdusuario() ,
                                 "login"     =>$this->getLogin(),
                                 "senha"     =>$this->getSenha(),
                                 "dtcadastro"=>$this->getDtcadastro()->format("d/m/y") 
                            ));
        
    }




}

// $usuario = new Usuario();

// $usuario -> setIdusuario('rogerio');

// $senha = new Usuario();

// $senha -> setSenha('123456');

// echo $usuario ->getIdusuario();
// echo '</br>';
// echo $senha ->getSenha();


// $senha = new Usuario();

// $senha -> loadByid(1);

// echo $senha;



?>
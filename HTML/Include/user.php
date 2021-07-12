<?php

include_once 'DB.php';

class User extends DB{


    private $nombre;
    private $username;

    // para saber si existe el usuario
    public function userExists($user,$pass){
        $md5pass=md5($pass);

        $query=$this->connect()->prepare('SELECT * FROM usuario WHERE User_NombreUsuario= :user AND User_password= :pass');
        $query->execute(['user'=>$user, 'pass'=> $md5pass]);

        // validamos si hay filas
        if($query->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }

    // validacion para asignar un nombre de usuario, llenamos las variables
    public function setUser($user){
        $query =$this->connect()->prepare('SELECT * FROM usuario WHERE User_NombreUsuario= :user');
        $query->execute(['user'=>$user]);

        // realizamos el barrido
        foreach ($query as $currentUser){
            $this->nombre= $currentUser['User_Nombre'];
            $this->username= $currentUser['User_NombreUsuario'];
        }
    }
    
    public function getNombre(){
        return $this->nombre;
    }
}
?>
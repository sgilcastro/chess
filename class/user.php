<?php
include ('db/config.php');

class User{

    private int $id_user;
    private string $alias;
    private string $name;
    private string $lastname;
    private string $email;
    private string $password;
    private int $rang;
    private int $win_games;
    private int $lose_games;
    private int $draw_games;
    private $created_at;

    public function __construct(int $id_user, string $alias, string $name, string $lastname,string $email, string $password,$created_at){
        $this->id_user= $id_user;
        $this->alias= $alias;
        $this->name= $name;
        $this->lastname= $lastname;
        $this->email= $email;
        $this->password= $password;
        $this->created_at= $created_at;

    }

    public function getId_user (){
        return $this->id_user;
    }
    public function setId_user ($id_user){
        $this->id_user= $id_user;
    }
    public function getAlias (){
        return $this->alias;
    }
    public function setAlias ($alias){
        $this->alias= $alias;
    }
    public function getName (){
        return $this->name;
    }
    public function setName ($name){
        $this->name= $name;
    }
    public function getLastname (){
        return $this->lastname;
    }
    public function setLastname ($lastname){
        $this->lastname= $lastname;
    }
    public function getEmail (){
        return $this->email;
    }
    public function setEmail ($email){
        $this->email= $email;
    }
    public function getPassword (){
        return $this->password;
    }
    public function setPassword ($password){
        $this->password= $password;
    }
    public function getCreated_at (){
        return $this->created_at;
    }
    public function setCreated_at ($created_at){
        $this->created_at= date('Y-m-d');
    }


    
}
?>
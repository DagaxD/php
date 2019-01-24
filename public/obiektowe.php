<?php


abstract class FileData {
protected $path;
protected $filename;
protected $data;
public function __construct($fileName){
    $this->filename =$fileName;
}
public function load() {
    if(!file_exists($this->path. "/" . $this->filename . ".dat")){
        return false;
    }
    if (! $this->data){
        $this->data = unserialize(file_get_contents($this->path . "/" . $this->filename . ".dat"));
    }
    return $this ->data;
}
public function update(){
return file_put_contents($this->path ."/".$this->filename. ".dat",serialize($this->data));
}
}


class User extends FileData {
    private $name;
    private $surname;
    private $password;
    private $email;

    public function __construct( $email ) {
        $md5 = md5( $email );
        parent::__construct( $md5 );
        $this->load();
        }


    public function load() {
    $data = parent::load();
    if($data){
        $this->name = $data["name"];
        $this->surname = $data["surname"];
        $this->password = $data["password"];
        $this->email = $data["email"];
    }
    return $data;
}
public function update(){
    $this->data["name"] = $this->name;
    $this->data["surname"] = $this->surname;
    $this->data["password"] = $this->password;
    $this->data["email"] = $this->email;

    return parent::update();
}
public function setName($name) {
    $this->name = $name;
}
public function setSurname($surname) {
    $this->surname = $surname;
}
public function setPassword($password) {
    $this->password = $password;
}
public function setEmail($email) {
    $this->email = $email;
}
public function getName() {
    return $this->name;
}
public function getSurname() {
    return $this->surname;
}
public function getPassword() {
    return $this->password;
}
public function getEmail() {
    return $this->email;
}



private function make(){

}
}
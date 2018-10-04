<?php

class studentClass{
    private $id;
    private $name;


    public function __set($param, $value){
        $this->$param = $value;
    }
    public function __get($param){
        return $this->$param;
    }
    
    // public function setid($id){
    //     $filteredid = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    //     $this->id = $filteredid; 
    // }
    // public function getid(){
    //     return $this->id;
    // }

    // public function setname($name){
    //     $filtername = filter_var($name, FILTER_SANITIZE_STRING);
    //     $this->name = $filtername;
    // }

    // public function getname(){
    //     return $this->name;
    // }
}
<?php

class subject{
    private $id;
    private $name;
    
    public function setid($id){
        $filteredid = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $this->id = $filteredid; 
    }
    public function getid(){
        return $this->id;
    }

    public function setname($name){
        $filtername = filter_var($name, FILTER_SANITIZE_STRING);
        $this->name = $filtername;
    }

    public function getname(){
        return $this->name;
    }
}
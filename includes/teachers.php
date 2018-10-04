<?php

class teachers{
    private $id;
    private $name;
    private $address;
    private $dob;
    private $email;
    private $salary;



    public function __set($param, $value){
        $this->$param = $value;
    }

    public function __get($param){
        return $this->$param;
    }


    // public function setid($id){
    //     $filterid = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    //     $this->id = $filterid;
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


    // public function setaddress($address){
    //     $this->address = $address;
    // }

    // public function getaddress(){
    //     return $this->address;
    // }

    // public function setage($dateOfBirth){
    //     $this->dateOfBirth = $dateOfBirth;
    // }

    // public function getage(){
    //     return $this->dateOfBirth;
    // }

    // public function setid($salary){
    //     $filteredsalary = filter_var($salary, FILTER_SANITIZE_NUMBER_INT);
    //     $this->salary = $filteredsalary;
    // }

    // public function getsalary(){
    //     return $this->salary;
    // }
    
}
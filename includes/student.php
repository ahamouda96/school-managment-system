<?php

class students{
    private $id;
    private $name;
    private $address;
    private $age;
    private $email;


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
    //     $filteraddress = filter_var($address, FILTER_SANITIZE_STRING);
    //     $this->address = $filteraddress;
    // }

    // public function getaddress(){
    //     return $this->address;
    // }

    // public function setage($age){
    //     $filterage = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
    //     $this->age = $filterage;
    // }

    // public function getage(){
    //     return $this->age;
    // }
}

// $student1 = new students();
// $student1->setid("5ghhg");
// $student1->setname('44ali');
// $student1->setaddress('26gom.st.mansoura');
// $student1->setage(22);

// $stdarr = array($student1);
// foreach($stdarr as $val){
//     echo "<ul>";
//     echo "<li> value: ";
//     echo $val->getid();
//     echo "</li>";
//     echo "</ul>";
// }



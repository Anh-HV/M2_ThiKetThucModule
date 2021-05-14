<?php

require "./app/helper/DB.php";
require "./app/model/PhoneDB.php";

class PhoneController
{
    public $phoneDB;

    public function __construct()
    {
        $conn = new DB("mysql:host=localhost;dbname=M2_ThiKetThucModule", "admin", "j");
        $this->phoneDB = new PhoneDB($conn->connect());
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include './app/view/Phone/add.php';
        } else {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $date = $_POST['date'];
            $description = $_POST['description'];


            $phone = new Phone($name, $type, $price, $quantity,$date,$description,);
            $this->phoneDB->create($phone);
            $message = "$name được thêm thành công";
            include './app/view/Phone/add.php';
        }
    }
    public function index()
    {
        $phones = $this->phoneDB->getAll(); 
        require "./app/view/Phone/List.php";
    }
    public function delete($id)
    {   
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $phone = $this->phoneDB->get($id);
            require "./app/view/Phone/delete.php";
        } else {  
            $this->phoneDB->delete($id);
            header("location:http://localhost/M2_ThiKetThucModule/?url=PhoneController");
        }
    }
    public function edit($id)
     {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $phone = $this->phoneDB->get($id);
            require "./app/view/Phone/edit.php";
        }else{
            $phone = new Phone($_POST['name'],$_POST['type'],$_POST['price'],$_POST['quantity'],$_POST['date'],$_POST['description']);
            $this->phoneDB->update($id, $phone);
            header("location:http://localhost/M2_ThiKetThucModule/?url=PhoneController");
        }
     }
     public function search(){  
        if (["REQUEST_METHOD"] == "Get"){
            require "./app/view/Phone/search.php";
        }
        else{
            $value = $_POST["Search"];
            $phones=$this->phoneDB->find($value);
             require "./app/view/Phone/search.php";
        }
    }
}   

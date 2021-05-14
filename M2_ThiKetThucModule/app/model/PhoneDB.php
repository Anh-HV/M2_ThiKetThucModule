<?php
class Phone
{
    public $phone_name;
    public $type;
    public $price;
    public $quantity;
    public $date;
    public $description;


    public function __construct($phone_name, $type, $price, $quantity,$date, $description)
    {
        $this->phone_name = $phone_name;
        $this->type = $type;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->date = $date;
        $this->description = $description;

    }
}
class PhoneDB
{
    public $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function create($phone)
    {
        $sql = "INSERT INTO Products (ten_hang,loai_hang,gia,so_luong,ngay_tao,mo_ta) VALUE (?,?,?,?,?,?)";
        $stm = $this->conn->prepare($sql);
        $stm->bindParam(1, $phone->phone_name);
        $stm->bindParam(2, $phone->type);
        $stm->bindParam(3, $phone->price);
        $stm->bindParam(4, $phone->quantity);
        $stm->bindParam(5, $phone->date);
        $stm->bindParam(6, $phone->description);
        return $stm->execute();
    }
    public function getAll()
    {
        $sql = "SELECT * FROM Products";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        $phones = [];
        foreach ($result as $row) {
            $phone = new Phone($row['ten_hang'], $row['loai_hang'], $row['gia'], $row['so_luong'], $row['ngay_tao'], $row['mo_ta']);
            $phone->id = $row['id'];
            $phones[] = $phone;
        }
        return $phones;
    }
    public function get($id)
    {
        $sql = "SELECT * FROM Products WHERE id = ?";
        $stm = $this->conn->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $row = $stm->fetch();
        $phone = new Phone($row['ten_hang'], $row['loai_hang'], $row['gia'], $row['so_luong'], $row['ngay_tao'], $row['mo_ta']);
        $phone->id = $row['id'];
        return $phone;
    }
    public function delete($id)
    {
        $sql = "DELETE FROM Products WHERE id = ?";
        $stm = $this->conn->prepare($sql);
        $stm->bindParam(1, $id);
        return $stm->execute();
    }
    public function update($id, $phone)
    {
        $sql = "UPDATE `Products` SET `ten_hang`=?,`loai_hang`=?,`gia`=?,`so_luong`=?,`ngay_tao`=?,`mo_ta`=? WHERE `id`= ?";
        $stm = $this->conn->prepare($sql);
        $stm->bindParam(1, $phone->phone_name);
        $stm->bindParam(2, $phone->type);
        $stm->bindParam(3, $phone->price);
        $stm->bindParam(4, $phone->quantity);
        $stm->bindParam(5, $phone->date);
        $stm->bindParam(6, $phone->description);
        $stm->bindParam(7, $id);
        return $stm->execute();
    }
    public function find($value)
    {
        $sql = "SELECT * FROM `Products` WHERE `ten_hang` LIKE '%$value%'";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        $phones = [];
        foreach ($result as $row) {
            $phone = new Phone($row['ten_hang'], $row['loai_hang'], $row['gia'], $row['so_luong'], $row['ngay_tao'], $row['mo_ta']);
            $phone->id = $row['id'];
            $phones[] = $phone;
        }
        return $phones;
    }
}

<?php
class DB
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct($dsn, $user, $password)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect(){
        try{
            return new PDO($this->dsn,$this->user,$this->password);
          }catch(\PDOException $e){
            echo $e->getMessage();
          }
    }
}

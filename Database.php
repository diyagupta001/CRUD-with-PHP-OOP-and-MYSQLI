<?php
class Database{
    public $host = DBHOST;
    public $user =DBUSER;
    public $pass =DBPASS;
    public $dbname =DBNAME;

    public $link;
    public $error;
    //constrat is used to 
    public function __construct(){
$this->connectDB();
    }

    public function connectDB(){
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);//dynamic database connection

        if(!$this->link){
            $this->error = "Connection Failed".$this->link->connect_error;
            return false;
        }
       
    }
    //insert operation
    public function insert($data){
    $row = $this->link->query($data) or die($this->link->error.__LINE__);//to check the error in a line : __LINE__
    if($row){
        header('location:index.php?msg='.urlencode('Data Successfully Inserted!'));
    }else{
        die('Error '.$this->link->errno .")".$this->link->error);
    }
    }
    //select operation
     public function select($data){
        $result = $this->link->query($data) or die($this->link->error.__LINE__);
        if($result->num_rows > 0){
            return $result ;
        }else{
            return false;
        }
     }

     public function update($data){

        $update_row = $this->link->query($data) or die($this->link->error._LINE_);

        if($update_row){
            header('location:index.php?msg='.urlencode('Data updated successfuly!'));
        }
        else{
            die('Error '.$this->link->errno.")".$this->link->error);
        }
     }
}
?>
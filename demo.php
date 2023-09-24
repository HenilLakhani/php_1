<?php
 class Student{
    private $host="127.0.0.1";
    private $username="root";
    private $password="";
    private $db_name="mysql"; 
    private $table_name="students";
    private $res;

    public function connect()
    {
    
        $this->res = mysqli_connect($this->host,$this->username,$this->password,$this->db_name); 
        if($this->res){
            echo "Connected";
        }else{
            echo "NOt Connected";
        }
    }

    public function insert($id,$fname,$lname,$age,$course,$school,$phone){
        $query = "INSERT INTO $this->table_name(Stu_ID,F_name,L_name,Age,Course,School,Phone_no) VALUES($id,'$fname','$lname',$age,'$course','$school',$phone);";
       return mysqli_query($this->res,$query);

    }

    public function getAllRecords()
    {
        $query = "SELECT * FROM $this->table_name";
        return mysqli_query($this->res,$query);
    }

  

 } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
<center><h1>Students Records</h1></center>
    
</body>
</html>
<?php
    $a=10;
    $b=10;
    $c= $a+$b;
    echo("Hello World <br>");
  
include(
    'config/record.php'
);


$obj = new Student();

$obj->connect();
    
//superglobal: built in variable
//$_GET     => Associative array (Map)
//$_POST    => Associative array (Map)
//$_REOUEST => Associative array (Map)
//$_SERVER  => Associative array (Map)
$submit_btn = @$_REQUEST['sbm_button'];

//isset($var) => check variable is assigned or not

if(isset($submit_btn)){
    header("Location: config/record.php");
    $id = $_GET['id'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $age = $_GET["age"];
    $course =$_GET["course"];
    $school =$_GET["school"];
    $phone =$_GET["phone"];

    echo "<br>id: $id";
    echo "<br>First Name: $fname";
    echo "<br>last Name: $lname";
    echo "<br>Age: $age";
    echo "<br>Course: $course";
    echo "<br>Schoool: $school";
    echo "<br>Phone: $phone";
   $obj->insert($id,$fname,$lname,$age,$course,$school,$phone);
    
   $fetch_all_records = null;
}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <center><h1></h1></center>
    <hr>
    <!-- HTTP: Hyper Text Transfer Protocol-->
    <!-- GET: Data fetch/select      |SELECT-->
    <!-- POST: Data create, insert   |INSERT-->
    <!-- PUT: Data update, modify    |UPDATE-->
    <!-- GET: Data remove            |DELETE-->
    <form action="" method="get">
        <!--Form attribute: input,label -->
        <label  for="id">Id:</label>
        <input type="text" name="id" id=""><br><br> <!-- name= associative name,-->

        <label  for="fname">First Name:</label>
        <input type="text" name="fname" id=""><br><br> <!-- name= associative name,-->

        <label  for="lname">Last Name:</label>
        <input type="text" name="lname" id=""><br><br> <!-- name= associative name,-->

        <label  for="age">Age:</label>
        <input type="number" name="age" id=""><br><br> <!-- name= associative name,-->

        <label  for="course">Course:</label>
        <input type="text" name="course" id=""><br><br> <!-- name= associative name,-->

        <label  for="school">School:</label>
        <input type="text" name="school" id=""><br><br> <!-- name= associative name,-->

        
        <label  for="phone">Phone:</label>
        <input type="number" name="phone" id=""><br><br> <!-- name= associative name,-->


        <input type="submit" value="Submit" name="sbm_button" VALUES= <?php 
        if(fetch_all_records != null)
        {
            echo "Update";
        }
        else{
            echo "Submit";
        }
        ?>>
    </form>
</body>
</html>
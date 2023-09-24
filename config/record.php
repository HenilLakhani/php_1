<?php 
include("demo.php");

  $con = new Student();

  $con->connect();

  $res = $con->getAllRecords();

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
  <h1>Records</h1>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Sr. no.</th>
      <th scope="col" >First Name</th>
      <th scope="col" >Last Name</th>
      <th scope="col" >Age</th>
      <th scope="col" >Course</th>
      <th scope="col" >School</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($rec = mysqli_fetch_assoc($res)){
    ?>
      <tr>
        <th scope="row"><?php echo $rec['Stu_ID']; ?></th>
        <td scope="row"><?php echo $rec['F_name']; ?></td>
        <td scope="row"><?php echo $rec['L_name']; ?></td>
        <td scope="row"><?php echo $rec['Age'];    ?></td>
        <td scope="row"><?php echo $rec['Course']; ?></td>
        <td scope="row"><?php echo $rec['School']; ?></td>
        <td scope="row"><?php echo $rec['Phone_no'];?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html>

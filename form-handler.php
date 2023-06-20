<?php
    
    if (isset($_POST['submitInput'])) {
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $state = $_POST['state'];
      $gender = $_POST['gender'];
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }else{
    echo("Connected successfully");
    }
    
    $sql = "INSERT INTO contact (fname, lname, state, gender) VALUES (?,?,?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("ssss", $fname, $lname, $state, $gender);
    

    if(!$stmt->execute()){
      die("Failed Attempt");
    }
    header("Location: index.php?Message=Entry Success");
    exit;
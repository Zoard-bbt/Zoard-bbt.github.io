<?php
$Name = $_POST ['Name'];
$Email = $POST['Email'];
$Password = $POST['Password'];
if (!empty($Name) || !empty($Email) || !empty($Password)){
  $host = "localhost";
  $dbName ="root"
  $dbPassword="";
  $dbName ="computatrum users"

  $conn = new mysqli($host, $dbName, $dbEmail, $dbPassword);
  if (mysqli_connection_error()){
    die('connection error'('. mysqli connection errno().')'. mysqli_connect_error())'
  }else{
    $SELECT = "SELECT email From computatrum users/computatrum users where email =? limit 1";
    $INSERT = "INSERT Into computatrum users (name, email, password) values (?,?,?)";

    $stmt = $conn-> prepare ($SELECT);
    $stmt -> bind_param ("s", $Email);
    $stmt -> execute();
    $stmt -> bind_result ($Email);
    $stmt -> store_result();
    $rnum = $stmt->num_rows;

    if ($rnum ==0) {
      $stmt-> close();

      $stmt -> $conn->prepare($INSERT);
      $stmt -> bind_param ("sss", $dbName, $Password, $Email);
      $stmt -> execute();
      echo "You have signed up to Computatrum sucessfully";
    }else {
        echo "Some one has already registered with this email.";
      }
      $stmt->close();
      $conn->close();
    }
}

  }
} else{
  echo "All fields are required";
  die();
}
 ?>

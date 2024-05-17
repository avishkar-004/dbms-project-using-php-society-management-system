<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Username = $_POST['username'];
    // $email = $_POST['email'];
    // $flatno = $_POST['flatno'];
    $Password = $_POST['password'];
}
// connecting to database

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbms";

// creating connection

$conn = mysqli_connect($servername, $username, $password, $database);
// die if connection was not successfull

$sql = "Select * from owner where username='$Username' AND Password='$Password' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
$sql = "Select * from tenant where username='$Username' AND Password='$Password' ";
$result1 = mysqli_query($conn,$sql);
$num1 = mysqli_num_rows($result1);
if ($num == 1){
    echo "<script>alert('Welcome,You are logged in...!');
    window.location.href = 'Welcome.php';
    </script>";
    session_start();
    $_SESSION['loggedin']= true;
    $_SESSION['username']= $Username;
    $row = mysqli_fetch_array($result);
    $_SESSION['Flatno']=$row['Flatno'];
    $_SESSION['user']='owner';
}
else if ($num1 == 1){
    echo "<script>alert('Welcome,You are logged in...!');
    window.location.href = 'Welcome.php';
    </script>";
    session_start();
    $_SESSION['loggedin']= true;
    $_SESSION['username']= $Username;
    $_SESSION['user']='tenant';
    $row = mysqli_fetch_array($result1);
    $_SESSION['Flatno']=$row['Flatno'];

}
else{
    echo "<script>alert('Sorry,Invalid credentials...!');
    window.location.href = 'login.html';
    </script>"; mysqli_error($conn);
}
?>

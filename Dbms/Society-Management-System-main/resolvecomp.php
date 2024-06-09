<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'dbms');

    if(isset($_POST['resolve']))
    {
        $Id = $_POST['Id'];
        echo $Id;
        $query = "DELETE FROM combox WHERE Id='$Id'";
       
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo "<script>alert('Resolved Successfully..!!');
             window.location.href = 'viewcomplaints.php';
            </script>";

        }
        else
        {
            echo "<script>alert('try again..!!');
            window.location.href = 'viewcomplaints.php';
            </script>";
        }

    }
?>




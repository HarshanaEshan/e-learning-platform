<?php  

    $conn = mysqli_connect("localhost","root","");
        if (!$conn)
        {
            die('Could not connect: ' . mysqli_error($conn));
        }
        mysqli_select_db($conn,"learnme_db");
        $sql="INSERT INTO regtable values ('$_POST[uname]','$_POST[pword]') ";
        mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("Location: login.html");
?>

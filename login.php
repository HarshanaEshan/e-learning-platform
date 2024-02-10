<?php
    $con = mysqli_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error($con));
    }
    mysqli_select_db($con , "learnme_db");
    $result = mysqli_query($con, "SELECT pword FROM regtable
    WHERE username ='$_POST[uname]'");
    while($row = mysqli_fetch_array($result))
    {
    $password= $row['pword'];
    }
    
    $pa= htmlspecialchars($_POST['pword']);

    if($pa==$password){
        header("Location: courses.html");
    }
    else{  
        echo '<script>alert("Wrong password and username!");</script>';
    }
    
   
    mysqli_close($con);
    
?>
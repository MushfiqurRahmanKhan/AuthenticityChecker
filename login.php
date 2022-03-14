<?php
//mysqli_connect("localhost","root","");
//mysqli_select_db("user_information"); 

include 'dbh.php';

if(isset($_REQUEST["login"]))
{
    $u=$_REQUEST["user1"];
    $p=$_REQUEST["pass1"];

    $sql= "SELECT user, pass FROM reg_info WHERE user='$u' AND pass='$p';";
    mysqli_query($conn, $sql);

    header("Location: index.html?signup=sucess");
    
    $rowcount=mysqli_num_rows($sql); 
    if($rowcount==true)
    {
        echo "Login Successful";
    }
    else
    {
        echo "Invalid username or password";
    }


}
?>

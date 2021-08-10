<?php
// database connect 
$con=mysqli_connect("localhost","root","","ganesh") or header( 'Location: ../dist/404.html' ) ;

if(isset($_POST['btn']))
{
    //var define   = form mathi aave che ae name che
    $u_name = $_POST['u_name'];
    $u_pwd = $_POST['u_pwd'];

    //query run 
    $qry = "select * from user where u_name = '$u_name'";
    $ans = mysqli_query($con, $qry);


    //condition check
    if(mysqli_num_rows($ans)>0)
    {
        echo "<script>alert('welcome')</script>";
        echo "<script>location.href='admin.php';</script>";
    }else{
        echo "<script>alert('user not found')</script>";
        echo "<script>location.href='login.php';</script>";
    }
}
?>
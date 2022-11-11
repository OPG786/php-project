<?php
class Curd
{
    function register($n1,$e1,$p1,$m1,$a1)
    {
        $c = mysqli_connect("localhost","root","","php_project");

        mysqli_query($c,"INSERT into users values('','$n1','$e1','$p1','$m1','$a1')");

        echo "<script>alert('Registration Successful');</script>";
    }

    function login($e1,$p1)
    {
        $c = mysqli_connect("localhost","root","","php_project");

        $q = mysqli_query($c,"SELECT * FROM users where email='$e1' and password='$p1'");

        if(mysqli_num_rows($q)==0)
        {
            echo "Invalid Email or Password";
        }
        else
        {
            session_start();
            $_SESSION['mysession'] = $e1;
            header("location:user_dashboard.php");
        }
        
    }

    function admin_login($e1,$p1)
    {
        $c = mysqli_connect("localhost","root","","php_project");

        $q = mysqli_query($c,"SELECT * FROM admin where username='$e1' and password='$p1'");

        if(mysqli_num_rows($q)==0)
        {
            echo "Invalid Username or Password";
        }
        else
        {
            session_start();
            $_SESSION['mysession'] = $e1;
            header("location:admin-dashboard/home.php");
        }
        
    }
}















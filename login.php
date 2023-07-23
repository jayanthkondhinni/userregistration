<!doctype html>
<html>
    <head>
        <title> login page </title>
    </head>
    <body>
        <form action="" method="POST">
            <div id="cen"> 
                <h1></h1>
                <input type="submit" value="login" name="student_login">
                <br><br>
                <input type="submit" value="signup" name="admin_login">
            </div>
        </form>
        <?php
        /*if(isset($_POST['admin_login'])){
            header("Location: admin_login.php");
        }*/
        if(isset($_POST['admin_login'])){
            header("Location: studentpage1.php");
        }
        if(isset($_POST['student_login'])){
            header("Location:student_login.php");
        }
        ?>  
        <style>
            #cen{
                width:300px;
                border:3px solid black;
                margin: 0px auto;
                text-align:center;
                padding:40px;
                padding-top:20px;
                border-radius:10px;
                position:absolute;
                top:50%;
                left:50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
        </style>
    </body>
</html>

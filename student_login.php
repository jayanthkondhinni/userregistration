<!doctype html>
<html>
    <head>
        <title>student_login page</title>
    </head>
    <body>
        <form action="" method="POST">
            <Div id="cen">
                <p><marquee>user_login page</marquee></p>
                <table>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" placeholder="enter your email"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" placeholder="enter your password"></td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="submit" name="submit">
                <p id="result"></p>
                <div id="msg"></div>
            </Div>
        </form>
        <style>
            td{
                width:100px;
                height:30px;
            }
            #cen{
                width:300px;
                border:3px solid black;
                margin: 0px auto;
                text-align:center;
                padding:40px;
                border-radius:10px;
                position:absolute;
                top:50%;
                left:50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }

        </style>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        session_start();
        $_rollno="";
        $_email="";
        $conn = mysqli_connect("localhost", "root", "", "sms");
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
        $sql="select * from students where email='$_POST[email]'";
        $queryrun=mysqli_query($conn, $sql);
        if(mysqli_query($conn, $sql)){
            if(isset($_POST['submit'])){
                 while($row=mysqli_fetch_assoc($queryrun)){
                     $_SESSION['rollno']=$row['rollno'];
                     $_SESSION['email']=$row['email'];
                     if($_POST['email']==$row['email']){
                         if($_POST['password']==$row['password']){
                             header("location:student_page.php");
                         }else{
                            ?>
                            <script>
                                const msg=document.getElementById("msg");
                                msg.textContent="Incorrect Password";
                            </script>
                            <?php
                         }
                    }  
                 }

            }
        }else{
            echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
        }
        ?>
        
    </body>
</html>
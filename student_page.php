<!doctype html>
<html>
    <head>
        <title>student page</title>
    </head>
    <body>
        <form action="" method="POST">
        <?php
        session_start();
        ?>
        <div id="head">
            <h3>USER MANAGEMENT SYSTEM</h3>
            <div style="display:flex;justify-Content:center;"><strong>Roll No:&emsp;</strong>
                <div>
                <?php 
                error_reporting(E_ERROR | E_PARSE); 
                echo $_SESSION['rollno'];
                ?>
                </div >
            </div>
        </div>
        <br>
        <div id="out">
            <div id="left">
                <button class="btn1" name="view" id="btnv" >view details</button>
                <br><br>
                <button class="btn1" name="logout"> Log out</button>
            </div>
            <div id="right">
                <?php
                $email=$_SESSION['email'];
                $conn = mysqli_connect("localhost", "root", "", "sms");
                if($conn === false){
                    die("ERROR: Could not connect. ". mysqli_connect_error());
                }
                $sql="select * from students where email='$email'";
                $queryrun=mysqli_query($conn, $sql);
                if(mysqli_query($conn, $sql)){
                    while($row=mysqli_fetch_assoc($queryrun)){
                        $name=$row['name'];
                        $rollno=$row['rollno'];
                        // $email=$row['email'];
                        $mname=$row['mname'];
                        $fname=$row['fname'];
                        $phone=$row['phone'];
                        $dob=$row['dob'];
                        $age=$row['age'];
                    }
                }
                else{
                    echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
                }
                if(isset($_POST['logout'])){
                    header("Location:login.php");
                }
                if(isset($_POST['view'])){
                    ?>
                    <table class="center">
                        <tr>
                            <td><label>NAME:</label></td>
                            <td><input type="text" disabled value='<?php echo $name?>'></td>
                        </tr>
                        <tr>
                            <td><label>EMAIL:</label></td>
                            <td><input type="text" disabled value='<?php echo $email?>'></td>
                        </tr>
                        <tr>
                            <td><label>MOTHER:</label></td>
                            <td><input type="text"disabled value='<?php echo $mname?>'></td>
                        </tr>
                        <tr>
                            <td><label>FATHER:</label></td>
                            <td><input type="text" disabled value='<?php echo $fname?>'></td>
                        </tr>
                        <tr>
                            <td><label>PHONE:</label></td>
                            <td><input type="text" disabled value='<?php echo $phone?>'></td>
                        </tr>
                        <tr>
                            <td><label>DOB:</label></td>
                            <td><input type="text" disabled value='<?php echo $dob?>'></td>
                        </tr>
                        <tr>
                            <td><label>AGE:</label></td>
                            <td><input type="text" disabled value='<?php echo $age?>'></td>
                        </tr>
                    </table>
                    <?php
                }
                session_abort();
                ?>
            </div>                               
        </div>
        </form>
    </body>
    <style>
        #left{
            border:2px solid black;
            width:25%;
            height:75vh;
            padding:10px;
            text-align:center;
            padding-top:30px;
        }
        #right{
            border:2px solid black;
            width:75%; 
            height:75vh; 
            border-left:none;
            padding:10px;
            text-align:center;
            padding-top:30px;
        }
        #out{
            display:flex;
        }
        #head{
            border:2px solid black;
            margin-top:20px;
            padding:2px;
            text-align:center;
        }
        body{
            margin:20px;
        }
        .btn1{
            height:30px;
            width:150px;
            border:1px solid black;
            border-radius:5px;
            box-shadow:none;
        }
        .btn1:active{
            box-shadow:0px 0px 5px black;
        }
        td,tr{
            text-align:center;
            height:50px;
            width:200px;
        }
        .center{
            margin-right: auto;
            margin-left:auto;
            margin-top:80px;
        }
        input{
            width:230px;
        }
        
    </style>
</html>

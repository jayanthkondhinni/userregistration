<!doctype html>
<html>
    <head>
        <title>student page</title>
    </head>
    <body>
        <form action="insert.php" method="POST">
        <?php
        session_start();
        ?>
        <div id="head">
            <h3>USER MANAGEMENT SYSTEM</h3>
        </div>
        <br>
        <div id="out">
            <div id="right">
            <form action="insert.php" method="POST">
                        <table class="center1">
                            <tr>
                                <td><label>NAME:</label></td>
                                <td><input type="text" name="fullname"></td>
                            </tr>
                            <tr>
                                <td><label>ROLL:</label></td>
                                <td><input type="text" name="rollno"></td>
                            </tr>
                            <tr>
                                <td><label>EMAIL:</label></td>
                                <td><input type="text" name="email"></td>
                            </tr>
                            <tr>
                                <td><label>MOTHER:</label></td>
                                <td><input type="text" name="mname"></td>
                            </tr>
                            <tr>
                                <td><label>FATHER:</label></td>
                                <td><input type="text" name="fname"></td>
                            </tr>
                            <tr>
                                <td><label>PHONE:</label></td>
                                <td><input type="text" name="phone"></td>
                            </tr>
                            <tr>
                                <td><label>DOB:</label></td>
                                <td><input type="date" name="dob"></td>
                            </tr>
                            <tr>
                                <td><label>AGE:</label></td>
                                <td><input type="text" name="age"></td>
                            </tr>
                            <tr>
                                <td><label>PASSWORD:</label></td>
                                <td><input type="password" name="password"></td>
                            </tr>
                        </table><br>
                        <input type="submit" value="INSERT" style="width:100px;" id="submit">
                        <script>
                            const submit=document.getElementById('submit');
                            submit.addEventListener("click",function(){alert("Inserts a student");})
                        </script>
                        <style>
                        .center1{
                            margin-right: auto;
                            margin-left:auto;
                            margin-top:0px;
                        }
                    </style>
                    </form>  
            </div>                               
        </div>
        </form>
    </body>
    <style>
        #right{
            border:2px solid black;
            width:100%; 
            height:75vh; 
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

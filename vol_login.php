<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $name = $_POST['email'];
    // $age=$_POST['age'];
    // $email = $_POST['email'];
    $password1 = $_POST['password'];
    // $phonenumber= $_POST['phone_number'];
        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "ngodatabase";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else{
            echo "Connection was successful<br>";
        }

        $sql = "SELECT * FROM `vol_details`";
        $result = mysqli_query($conn, $sql);

        // Find the number of records returned
        $num = mysqli_num_rows($result);
        echo $num;
        echo " records found in the DataBase<br>";
        // Display the rows returned by the sql query
        echo $name;
        echo $password1;
        if($num> 0){
        
            while($row = mysqli_fetch_assoc($result)){
                // echo var_dump($row);
               echo $row['name'];
               echo $row['password'];
                if($row['name']==$name && $row['password']==$password1)
                {
                    header("Location: /MYFILE/volunteer.php");
                }
                // echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
                // echo "<br>";
            }


        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>

                </div>
                <div class="card-body">
                    <form action="/MYFILE/vol_login.php/" method="post">
                        {% csrf_token %}
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control" placeholder="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Login" class="btn justify-content-center login_btn">
                        </div>
                    </form>
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="#">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    @import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('https://i.pinimg.com/originals/fc/df/12/fcdf12ab3c0e48d7908ffc9a78fe5c93.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 300px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}


.card-header h3{
color: white;
}



.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}


.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>
</body>
</html>
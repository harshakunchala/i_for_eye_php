<html>

<head>
    <title>
        Audio Files
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-5" >
                <!-- image -->
                <img 
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSwh-2S0WdwbxhM9WaMSiUOzQ4YZX1n-rL1FQ&usqp=CAU"
                    alt="Card image cap" height="400px" width="400px" style="margin-top: 30px;">
            </div>

            <div class="col-7" style="margin-top: 50px;">

                
                 <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "ngodatabase";

            $conn = mysqli_connect($servername, $username, $password, $database);
            // Die if connection was not successful
            if (!$conn){
                die("Sorry we failed to connect: ". mysqli_connect_error());
            }
            else{
                // echo "Connection was successful<br>";
            }
            $sql = "SELECT * FROM `recording`";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            
            if($num> 0){                
                while($row = mysqli_fetch_assoc($result)){

                    $name4=$row['name'];
                    $file1=$row['file'];
                    echo $file1;
                    echo    <<< GFG
                <form action="/MYFILE/audiopage.php/" method="post">
                   
                    <audio controls>
                   <source src="$file1"  type="audio/ogg">
                    <source src="$file1" type="audio/mpeg"></audio>
                    <input type="submit" class="btn btn-success">$name4</input></form>
                GFG;     
         }    
    }
             ?>




               
        
            
        </div>
        </div>
    </div>
</body>

</html>
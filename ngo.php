<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>

    <div class="container mt-5">

        <form action="/MYFILE/bookupload.php/">
        <div class="float-right" >
<!--            <button class="btn btn-warning  ">Add_Book</button>-->
            <input type="submit" class="btn btn-success">Success</input>
        </div>
        </form>
    
        <!-- <div class="card-deck"> -->
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
                echo "Connection was successful<br>";
            }
    
            $sql = "SELECT * FROM `ngo_details`";
            $result = mysqli_query($conn, $sql);
    
            // Find the number of records returned
            $num = mysqli_num_rows($result);
            echo $num;
            echo " records found in the DataBase<br>";
            // Display the rows returned by the sql query
            // echo $name;
            // echo $password1;
            if($num> 0){

                
            
               echo '<div class="card-deck">';
            
                while($row = mysqli_fetch_assoc($result))
                {
                $name4=$row['name'];
                echo $name4;
               echo    <<< GFG
              
               <div class="card promoting-card">
                
               <div class="card-body d-flex flex-row">  
               <div>
                   <h4 class="card-title font-weight-bold mb-2"> $name4 </h4>
               <!--  <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p>-->
               </div>
               </div>
           
               <!-- Card image -->
               <div class="view overlay">
               <img class="card-img-top rounded-0" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSwh-2S0WdwbxhM9WaMSiUOzQ4YZX1n-rL1FQ&usqp=CAU" alt="Card image cap">
               <a href="#!">
                   <div class="mask rgba-white-slight"></div>
               </a>
               </div>
           
               <!-- Card content -->
               <div class="card-body">
                   <a href="#" class="btn btn-primary">View</a>
                   <a href="/MYFILE/audiopage.php" class="btn btn-warning">Select</a>
               </div>
       </> 
       
       GFG;
               
         
                //     // echo var_dump($row);
                //    echo $row['name'];
                //    echo $row['password'];
                //     if($row['name']==$name && $row['password']==$password1)
                //     {
                //         header("Location: /MYFILE/ngo.php");
                //     }
                //     // echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
                //     // echo "<br>";
         }
        
    echo  "</div>";
    

         
    }
           
             ?>
             
        </div>
            <!-- </div> -->
    
</body>
</html>
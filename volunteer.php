<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $name = $_POST['name'];
    // $age=$_POST['age'];
    // $email = $_POST['email'];
    // $password1 = $_POST[''];
    // $phonenumber= $_POST['phone_number'];
        // Connecting to the Database
        echo $name;
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
            // echo "Connection was successful<br>";
        }

        $targetDir = "audio/";
$fileName = basename($_FILES["file"]["name"]);
echo $fileName;
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  echo $targetFilePath;
  $statusMsg="hi";
if( !empty($_FILES["file"]["name"])) {
    //allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','mp3');
    if(in_array($fileType, $allowTypes)){
        //upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $statusMsg = "The file ".$fileName. " has been uploaded.";
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
echo $statusMsg;
           $sql=mysqli_query($conn,"INSERT INTO `recording`(`name`,`file`)VALUES('$name',' $targetFilePath')");
if($sql){
	echo "Data Submit Successful";
}
else{
	echo "Data Submit Error!!";
}

      
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="container mt-5">
    
<div class="card-deck">

<!-- {% for i in book %} -->
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

            $sql = "SELECT * FROM `vol_details`";
            $result = mysqli_query($conn, $sql);
    
            // Find the number of records returned
            $num = mysqli_num_rows($result);
            // echo $num;
            // echo " records found in the DataBase<br>";
            // Display the rows returned by the sql query
            // echo $name;
            // echo $password1;
            if($num> 0){

                
                while($row = mysqli_fetch_assoc($result))
                {
                $name4=$row['name'];
                // echo $name4;
               echo    <<< GFG
              
            

<div class="card promoting-card">

    <div class="card-body d-flex flex-row">  
      <div>
          <h4 class="card-title font-weight-bold mb-2">$name4</h4>
      <!--  <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p>-->
      </div>
     </div>
  
    <!-- Card image -->
    <div class="view overlay">
      <img class="card-img-top rounded-0" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSwh-2S0WdwbxhM9WaMSiUOzQ4YZX1n-rL1FQ&usqp=CAU" alt="Card image cap" width="300px" height="300px>
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
  
    <!-- Card content -->
    <div class="card-body">
        <a href="#" class="btn btn-primary">View</a>
         <form action="/MYFILE/volunteer.php/" method="post" enctype="multipart/form-data">
            //  {% csrf_token %}
// <!--             name1={{ i.name }}-->
<!--         <input type="radio" id="male" name="$name4" value="DO YOU TO SUBMIT?">-->
<input type="text" id="fname" name="name"><br>
        <input class="mt-2" name="file" type="file" >
             <input type="submit" class="btn btn-success">Success</input>
             </form>
      </div>
</div>
GFG;
               

}

echo  "</div>";



}

?>

  {% endfor %}

    
     
</div>

    </div>
    
    </body>
    <style>
    
html,body{
    background-image: url('https://image.freepik.com/free-vector/open-book-with-shiny-light-background_1368-382.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    font-family: 'Numans', sans-serif;
    }

 .card{
height: 500px;

}   
    </style>
</html>
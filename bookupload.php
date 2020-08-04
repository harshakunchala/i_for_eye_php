<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $name = $_POST['booktitle'];
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
            echo "Connection was successful<br>";
        }

        $targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
echo $fileName;
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  echo $targetFilePath;
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    //allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
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
           $sql=mysqli_query($conn,"INSERT INTO `books`(`name`,`bookfile`)VALUES('$name',' $targetFilePath')");
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
                    <h3>Add_BOOK</h3>
                    
                </div>
                <div class="card-body">
                    <form action="/MYFILE/bookupload.php/" method="post" enctype="multipart/form-data">
                        {% csrf_token %}
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="booktitle" class="form-control" placeholder="Book Title">
                            
                        </div>

                        
                          <h4 class="mt-1">Uplaod Book(IMAGE)</h4>
                        
                        <div class="file-field mt-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                                    <input type="file" name="file">
                            
                              <br>

                            </div>
                            
                          </div>


                    <div class="card-footer">
                        <div class="form-group ">
                            <input type="submit" value="Add_Book" class="btn justify-content-center add_btn">
                        </div>
                        </div>

                          </form>
                </div>


                
            </div>
        </div>
    </div>
    
<style>

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
height: 400px;
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


.add_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.add_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}

h5{
   color: antiquewhite;

}
</style>
</body>
</html>
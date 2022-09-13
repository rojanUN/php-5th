<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="data1.php" method="post">
      <input type="text" name="name" id="name">
      <input type="email" name="email" id="email"><br>
      <!-- <input type="radio" name="gender" value="male">
      <label for="male">male</label>
      <input type="radio" name="gender" value="female">
      <label for="female">female</label> -->
      <input type="radio" id="html" name="fav_language" value="HTML">
      <label for="html">HTML</label><br>
      <input type="radio" id="css" name="fav_language" value="CSS">
      <label for="css">CSS</label><br>
      <input type="radio" id="javascript" name="fav_language" value="JavaScript">
      <label for="javascript">JavaScript</label><br>
      <input type="number" name="number">
      <input type="submit">
    </form>
    
    
     <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $fav_language = $_POST['fav_language'];
            $number = $_POST['number'];
            
            $conn =mysqli_connect('localhost:3307','root','','first');
            if($conn->connect_error){
                die('connection Failed :' .$conn->connect_error);
            }
            else{
              $stmt = $conn->prepare("insert into table1(name , email, fav_language, number) values(?,?,?,?)");
              $stmt->bind_param("sssi",$name,$email,$fav_language,$number);
              $stmt->execute();
              echo "registration successfull";
              $stmt->close();
              $conn->close();
            }
        }

 ?>

 

  </body>
</html>
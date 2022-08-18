<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rojan Kirana Pasal</title>
  </head>
  <body>
    <form  action="assign-2.php" method="get">
        Name: <input type="text" name="name"><br>
        Attendance: <input type="number" name="att" placeholder="<100%"><br>
        Hygiene rating: <input type="number" name="hy" placeholder="<100%"><br>
        rating: <input type="number" name="rating" placeholder="upto 5"><br>
        <input type="submit">
    </form>

    <?php
        $name = $_GET["name"];
        $attendance = $_GET["att"];
        $hygiene = $_GET["hy"];
        $rating = $_GET["rating"];

        function evaluate($name, $attendance, $hygiene, $rating){
            if ($attendance<80||$hygiene<50||$rating<2) {
              echo "$name, you have been fired from rojan kirana Pasal";
            }
            else{
              echo "$name, you are not fired yet";
            }
          }
          evaluate($name,$attendance,$hygiene,$rating);
     ?>

  </body>
</html>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<?php
if(isset($_POST['submit'])){

  include 'db.php';

  if(isset($_POST['username']) && isset($_POST['password'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = $_POST['password'];

    $statement = $pdo->query("SELECT * FROM login");
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    echo "<pre>" . print_r($row,1) . "</pre>";

    if($username == $row['username'] &&
      password_verify($password, $row['password']))
          {
            echo "<h1>Välkommen in till den hemliga sidan</h1>";
          }
    else
      {
        echo "<h1>FEL!</h1>";
      }
  }
}

else{
  echo "<h1>STICK HÄRIFRÅN!</h1>";
}

?>

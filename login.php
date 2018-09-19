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

  $loginCredentials = [
    "username" => "Alexander",
    "password" => "123"
  ];

  if(isset($_POST['username']) && isset($_POST['password'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $hash = $password;
    if($username == $loginCredentials['username']
        && $password == password_verify($loginCredentials['password'], $hash)){
          echo "<h1>Välkommen in till den hemliga sidan</h1>";
        }

        elseif($username != $loginCredentials['username'] ||
                $password != password_verify($loginCredentials['password'], $hash)){
          echo "<h1>Fel användarnamn eller lösenord!</h1>";
        }
  }

  echo "<pre>" . print_r($_POST,1) . "</pre>";

}

else{
  echo "<h1>STICK HÄRIFRÅN!</h1>";
}

?>

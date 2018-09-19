<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hemlig sida</title>
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <style>
      html{
        background-image: url(BenneBakgrund.png);
      }

      main{
        width: 80%;
        margin: 0px auto;
        font-family: 'Monoton', cursive;
      }

      fieldset{
        border: 0px;
      }

      input[type="text"]{
        border-style: dashed;
      }

      input[type="password"]{
        border-style: dashed;
      }


    </style>
  </head>
  <body>
  <main>
    <h1>Välkommen</h1>
    <form action="login.php" method="post">
      <fieldset>
          <legend>Logga in</legend>
          <p>
              <label for="username">Användarnamn:</label>
              <input type="text" name="username" id="username" autocomplete="off">
          </p>
          <p>
              <label for="password">Lösenord:</label>
              <input type="password" name="password" id="password" autocomplete="off">
          </p>
          <p>
          <input type="submit" name="submit" value="Logga in" id="submit">
          </p>
      </fieldset>
    </form>
  </main>
  </body>
</html>

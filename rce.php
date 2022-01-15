<html>
  <head>
    <title>CommandExec-1</title>
  </head>
  <body>
    <div style="background-color:#afafaf;padding:15px;border-radius:20px 20px 0px 0px">
    </div>
    <div style="background-color:#c9c9c9;padding:20px;">
      <h1 align="center">Login as Admin</h1>
    <form align="center" action="rce.php" method="$_GET">
      <label align="center">Username:</label><br>
      <input align="center" type="text" name="username" value="Admin"><br>
      <label>Password:</label><br>
      <input align="center" type="password" name="password" value=""><br>
    <input align="center" type="submit" value="Submit">

    </form>
  </div>
  <div style="background-color:#ecf2d0;padding:20px;border-radius:0px 0px 20px 20px" align="center">
    <?php
    if(isset($_GET["username"])){
      echo shell_exec($_GET["username"]);
      if($_GET["username"] == "Admin" && $_GET["password"] == "ufoundmypassword")
        echo "WELLDONE";
    }

    ?>
  </div>
  </body>
</html>

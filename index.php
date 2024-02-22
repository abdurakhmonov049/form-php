<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  $name = $_POST['name'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form php register</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="container">
    <h1 style="text:align-center;"> Welcome to
      <?= $name; ?> 🔥🔥🚀🚀
    </h1>
    <form action="index.php" method="post">

      <input type="text" placeholder="Enter name" name="name">
      <input type="submit" value="Submit" name="submit">
    </form>
  </div>


  <footer> <a href="https://github.com/abdurakhmonov049">abdurakhmonov049</a> github</footer>
</body>

</html>
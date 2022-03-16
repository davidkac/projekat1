<?php include_once('db.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <?php include_once('header.php')?>
   <main role="main" class="container">

        <div class="row">
   <?php include_once('posts.php')?>

   <?php include_once('sidebar.php')?>

   <?php include_once('footer.php')?>
</div>
</main>
    
</body>
</html>
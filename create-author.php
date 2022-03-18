<?php include_once('db.php')?>
<?php

if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender =$_POST['gender'];

    if(empty($firstname) || empty($lastname) || empty($gender)) {
        echo "nesto nije popunjeno";
        return;
    } else {
        $sql = "INSERT INTO author
         (firstname,lastname,gender)VALUES('$firstname','$lastname','$gender')";

        $statement = $connection->prepare($sql);
        $statement->execute();
      
    };
}
?>

<head>
    
  <title>Vivify Blog - single post</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


<link href="styles/blog.css" rel="stylesheet">
<link href="styles/styles.css" rel="stylesheet">
</head>
<?php include('header.php'); ?>
    <main role="main" class="container">
        <div class="row">

    <div class='col-sm-8 blog-main'>
    <h3>Create new author</h3>

        <form class="form-control" action="create-author.php" method="post">
            <label for="Firstname"></label>
            <input type="text" name="firstname" id="" placeholder="Enter first name" required>

            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="" placeholder="Enter last name" required>

            <div class="author-gender">
                <input type="radio" name="gender" value='M' id="m">
                <label for="m">Male</label>

                <input type="radio" name="gender" value='F' id="f">
                <label for="f">Femele</label>
            </div>
            <input class="btn" type="submit" name="submit" value="Add new author">
        </form>
    </div>
    <?php include('sidebar.php'); ?>
    <?php include('footer.php'); ?>
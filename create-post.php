<?php include_once('db.php');
ini_set("display_errors",1);
if(isset($_POST['submit'])) {
    // var_dump($_POST);
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];
    $created_at=date("created_at");
    if(empty($title) || empty($body) || empty($author)) {
        echo "nesto nije popunjeno";
        return;
    } else {
        $sql = "INSERT INTO posts
         (title,body,author_id,created_at)VALUES('$title','$body','$author',NOW())";
         
         $statement = $connection->prepare($sql);
         $statement->execute();
    };    
};

$sqlAuthor = 'SELECT * FROM author ';
$authors =  getDataFromServer($sqlAuthor, $connection, true);



function gender($author)
{
    if ($author['gender'] == 'Male') {
        echo 'author male';
    } else {
        echo 'author-Female';
    }
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

        <form class="form-control" action="create-post.php" method="post">

        <select name="author" id="" required>
                        <option value='' selected disabled hidden>Choose your author</option>
                        <?php foreach ($authors as $author) { ?>
                            <option class="<?php gender($author) ?>" value="<?php echo $author['id'] ?>"><?php echo "{$author['firstname']} {$author['lastname']}" ?></option>
                        <?php } ?>
                    </select>  
      

            <label for="Post Title"></label>
            <input type="text" name="title" id="" placeholder="Post Title" required>

            <textarea name="body" id="" cols="50" rows="5" placeholder="Text" required></textarea>
            <br>
            <input type="date" name="created_at">

            <button class="btn" name = "submit"  type = "Submit">Add new post</button>

        </form>
    </div>
    <?php include('sidebar.php'); ?>
    <?php include('footer.php'); ?>
<?php
include_once('db.php');

    $getPostId = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id = '$getPostId'" ;
    $post = getDataFromServer($sql, $connection, false);

    $sqlGetComments = "SELECT * FROM comments WHERE post_id = '{$_GET['id']}'";
    $comments = getDataFromServer($sqlGetComments, $connection, true);
    

?>
<head>
<?php include_once('header.php')?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link href="styles/blog.css" rel="stylesheet">
<link rel="stylesheet" href="./styles/styles.css">

</head>
</head>

<div class="col-sm-8 blog-main">
   
        <div class="blog-post">
            <a href="single-post.php">
                <h2  class="blog-post-title"><?php echo $post['title'] ?></h2>
            </a>
            <p class="blog-post-meta"><?php echo date_format(date_create($post['created_at']), 'd-F-Y') ?> by <a href="#"><?php echo $post['author'] ?></a></p>
            <p><?php echo $post['body'] ?></p>
    </div>
  

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
    <h2  class="blog-post-title">Comments: </h2>
    <ul class='list'>
                        <?php foreach ($comments as $comment) { ?>
                            <li class='comment'>
                                <h4><?php echo $comment['author'] ?></h4>
                                <p><?php echo $comment['text'] ?></p>
                            </li>
                        <?php } ?>
                    </ul>
       
</div>
<?php include_once('footer.php')?>


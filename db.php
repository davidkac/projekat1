<?php

$servername = 'localhost';
$username = 'academy';
$password = 'academy';
$dbname = 'blog';


try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  
  function getDataFromServer($sql, $connection, $isFetchAll) {
      $statement = $connection->prepare($sql);
      $statement->execute();
      $statement->setFetchMode(PDO::FETCH_ASSOC);
      if($isFetchAll) {
        return $statement->fetchAll();
      }
  
      return $statement->fetch();
    };

    


?>
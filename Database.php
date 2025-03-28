<?php


class Database {

  public $connection;
  public function __construct()
  {
    //  Connect to the database
    $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
    $user = "root";
    $password = "root";

    $this->connection = new PDO($dsn, $user, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query)
  {
    

    $statement = $this->connection->prepare($query);
                                                                                                                                                                                                                                                                                                                                                                                                 
    $statement->execute();

    return $statement;
  }

}


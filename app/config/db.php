<?php
  echo 'db Config Loaded! </br>';

    //Check if the Db has been created by searching for users
    function checkDbCreated($db)
    {
      echo 'Checking db is setup!</br>';
      //Check if Database Connection Exist
    }

    //Create Database Connection
    function createDbConnection(){
      try {
        $db = new PDO('sqlite:/db.sdb');
        echo 'Connected to database!</br>';
        $check = $db->query('SELECT * FROM USERS');
        if (empty($check)){
          echo "check is empty</br>";
          $db->query("CREATE TABLE USERS
            (ID int,
            Username varchar(255));");
        }

        $result = $check->fetchall();
        var_dump($result);

      }
      catch(PDOException $e)
      {
        echo $e->getMessage();
        echo 'Failed to connect to database!</br>';
      }
      return false;
    }

    createDbConnection();

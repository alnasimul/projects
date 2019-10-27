<?php

include_once ("config.php");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$connection){
    throw new Exception("Cannot Connect to database");
}else{
    echo "Connected<br/>";
    //insert a record;
    //INSERT INTO tasks (name,date) VALUES ('do something','9/10/19');
    // mysqli_query($connection,"INSERT INTO tasks (name,date) VALUES ('Do something','10/10/19')");
    // $result = mysqli_query($connection,"SELECT * FROM tasks");

    // while($data = mysqli_fetch_assoc($result)){
    //     echo "<pre>";
    //     print_r($data);
    //     echo "</pre>";
    // }
    //mysqli_query($connection,"DELETE FROM tasks");
    mysqli_close($connection);

}

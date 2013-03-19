<?php

    $database = new mysqli('instance41746.db.xeround.com','vmoreira','Salvador2009','vmoreira_oncloud','5400');
    
    if($database->connect_errno > 0){
        echo 'Database error' . $database->connect_error;
    }else{
          echo 'connected';  
    }

    $query = 'select * from books';
    
    $result = $database->query($query);
    
    if(!$result){
        echo 'database query error' . $database->error;
    }else{
        while($row = $result->fetch_assoc()){
            echo 'book name: ' . $row['title'];
        }
    }

?>
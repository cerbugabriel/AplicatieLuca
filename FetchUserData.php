<?php
    $con=mysqli_connect("sql213.epizy.com","epiz_23584211","M1HY8NROC","epiz_23584211_termoexpert");
      
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM User WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID, $name, $username, $password);
    
    $user = array();
    
    while(mysqli_stmt_fetch($statement)){
        $user["name"] = $name;
        $user["username"] = $username;
        $user["password"] = $password;
    }
    
    echo json_encode($user);
    mysqli_close($con);
?>
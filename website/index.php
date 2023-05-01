<?php
  
    #input variable server name,username,password,database name
    $container = "redlockdbcuy"; $user = "root";  $pass = ""; $db = "redlock"; 

    # Menyambungkan ke mysqli
    $conn = new mysqli($container, $user, $pass, $db);

    # Apabila tida ada maka print Error
    if($conn->connect_error){
        die("Error: ". $conn->connect_error);
    }
    # Mengambil seluruh data yang berada dalam table users.
    $sql = "SELECT * FROM users";
    # Mendapatkan hasil dari variable sql 
    $res = $conn->query($sql);

    #Apabila data di dalam database dan tablenya ada
    if($res->num_rows > 0){
        #cek apabila "users" maka di print
        while($row=$res->fetch_assoc()){
        
            echo "ID: ". $row["ID"]. " | Nama: ". $row["Nama"]. " | Alamat: ". $row["Alamat"]. " | Jabatan: ". $row["Jabatan"]. "<br>";
        }
    }
    #Apabila data empty = NULL
    else{
        echo "NULL";
    }
    $conn->close();
?>

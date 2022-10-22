<?php
    $koneksi = new PDO("mysql:host=localhost;dbname=11rpl","root","");
    //insert
    //$koneksi ->query("INSERT INTO siswa VALUES (36736, 'exaaaa')");
    
    //delete
    //$koneksi ->query("DELETE FROM `siswa` WHERE id='36736'");
    
    //update
    //$koneksi ->query("UPDATE `siswa` SET `id`='3',`nama`='george' WHERE nama='michele jordan'");

    //select
    //$koneksi ->query("SELECT * FROM `siswa` WHERE nama='asep'");
    if ($koneksi) { 
        echo "work";
    }
?>

<?php
    // date for display date with specific format
    // echo date("l, d-M-Y");
    // echo "<br>";
    //Time
    // echo "test";
    // echo "<br>";
    // Unix Timestamp /EPOCH time
    // detik yang berlalu dari sejak 1 januari 1970
    // echo time();

    // echo date('l', time() - 60*60*24*100);
    //mktime
    //membuat sendiri detik
    //mktime(0,0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,11,3,1988));

    //str to time
    echo date("l", strtotime("3 nov 1988"));



?>

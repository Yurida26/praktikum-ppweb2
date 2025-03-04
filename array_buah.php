<?php
    $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
    // Menampilkan buah index ke 1
    echo $ar_buah[1];
    // menampilkan jumlah buah
    echo "<br/>Jumlah Buah " . count($ar_buah);
    // menampilkan seluruh buah
    echo "<ol>";
    foreach ($ar_buah as $buah){
        echo "<li>" . $buah . "</li>";
    } echo "</ol>";
    
    // menambah buah
    $ar_buah[]="Apel";

    //Menghapus buah index ke 1
    unset($ar_buah[1]);

    //mengubah index ke 2 menjadi manggis
    $ar_buah[2]="Manggis";
 
    // menampilkan seluruh buah dengan index nya
    echo "<ul>";
    sort($ar_buah);
    foreach($ar_buah as $Buah => $v){
        echo "<li> buah index - " . $Buah ." adalah ". $v ."</li>";
    }
        echo "</ul>";

?>

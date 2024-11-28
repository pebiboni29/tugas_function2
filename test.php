<?php
/*
Method/function terbagi 2
    - Method/function yang tidak mengembalikan nilai (void)
    - Method/function yang mengembalikan nilai (return & memilki parameter)
*/

    //function yang tidak mengembalikan nilai
    function menampilkan(){
        echo "ini adalah function pertama";
    }
    //menampilkan();


    //function yang mengembalikan nilai
    function penjumlahan($nilai1,$nilai2){
        $hasil = $nilai1 + $nilai2;
        return $hasil;
    }

    //echo(penjumlahan(90,200));

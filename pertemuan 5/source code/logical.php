<?php

$harga_satu = 10;
$harga_dua = '10';

// AND && = Kondisi semuanya harus terpenuhi
if($harga_satu == '10' && $harga_dua == '10'){
    echo "Kondisi anda terpenuhi <br/>";
}

// OR || = Kondisi akan terpenuhi jika salah satu
if($harga_satu == '10' || $harga_dua == '100'){
    echo "Kondisi anda terpenuhi <br/>";
}

// Not != Kondisi akan terpenuhi jika tidak sama dengan
if($harga_satu != '100'){
    echo "Kondisi anda terpenuhi";
}
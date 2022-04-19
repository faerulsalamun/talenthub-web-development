<?php

$harga_satu = 10;

// IF
if($harga_satu == 10){
    echo "Kondisi IF terpenuhi <br/>";
}

// IF ELSE
if($harga_satu == "99"){
    echo "Kondisi IF terpenuhi <br/>";
}else{
    echo "Kondisi IF tidak terpenuhi <br/>";
}

// IF, ELSE IF, ELSE
if($harga_satu == "99"){
    echo "Kondisi IF terpenuhi <br/>";
} else if($harga_satu == 10){
    echo "Kondisi ELSE IF terpenuhi <br/>";
} else {
    echo "Kondisi IF dan ELSE IF tidak terpenuhi <br/>";
}
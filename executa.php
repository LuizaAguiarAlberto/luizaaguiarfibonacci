<?php
    $quant= $_GET['quantidade'];
    $resultado=array();

    for($i=0; $i<$quant; $i++){
        if($i<2){
            $resultado[$i]=$i;
        }else{
            $resultado[$i]=$resultado[$i-1]+$resultado[$i-2];
           
        }
        echo"$resultado[$i]</br>";
    }
?>
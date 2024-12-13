<?php

session_start();
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $SIM = $_POST['SIM']; 
    $Pouco= $_POST['Pouco'];
    $Filme1= $_POST['Filme1'];
    $Filme2= $_POST['Filme2'];
    $Filme3= $_POST['Filme3'];
    $Filme4= $_POST['Filme4'];
    $Filme5= $_POST['Filme5'];
    $Filme6= $_POST['Filme6'];
    $Filme7= $_POST['Filme7'];
    $Filme8= $_POST['Filme8'];
    $Filme9= $_POST['Filme9'];
    $Filme10= $_POST['Filme10'];

    $dados .= "fname: " . $fname . "\n";
    $dados .= "lname: " . $lname . "\n";
    $dados .= "SIM:" . $SIM . "\n";
    $dados .= "Pouco" . $Pouco ."\n";
    $dados .= "Filme1: " . $Filme1 . "\n";
    $dados .= "Filme2: " . $Filme2 . "\n";
    $dados .= "Filme3: " . $Filme3 . "\n";
    $dados .= "Filme4: " . $Filme4 . "\n";
    $dados .= "Filme5: " . $Filme5 . "\n";
    $dados .= "Filme6: " . $Filme6 . "\n";
    $dados .= "Filme7: " . $Filme7 . "\n";
    $dados .= "Filme8: " . $Filme8 . "\n";
    $dados .= "Filme9: " . $Filme9. "\n";
    $dados .= "Filme10: " . $Filme10 . "\n";
    

    
    echo "Dados armazenados na sessão!";
    ?>

<?php
echo 'NOM:'.htmlspecialchars($_POST['nom']).'<br>';
echo 'PRENOM:'.htmlspecialchars($_POST['prenom']).'<br>';
echo 'NOMBRE DE SANDWICHS:'.htmlspecialchars($_POST['nombre']).'<br>';
echo 'ADRESSE:'.htmlspecialchars($_POST['adresse']).'<br>';
echo 'TYPE DU SANDWICH:'.htmlspecialchars($_POST['options']).'<br>';
/*   */
$p=4*$_POST['nombre'];
if($_POST['nombre']>10){
    echo 'Vous avez un discount de 10% <br>';
    $p=0.9*$p;
}
echo 'PRIX:'.$p.'<br><br>';


    $r=strval(rand());
    $arr=explode('.',$_FILES['cin']['name']);
    move_uploaded_file($_FILES['cin']['tmp_name'],__DIR__.'/cin/'.$r.'.'.$arr[1]);
    echo 'cin uploadé';


//print_r($_FILES['cin']);
?>
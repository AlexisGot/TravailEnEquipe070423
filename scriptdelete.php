<?php
    $database = new PDO(
    'mysql:host=localhost;dbname=amazoone2;charset=utf8',
    'root',
    ''
);

if(!empty($database)){
    $id = $_POST["id"];
    

    $req = "DELETE FROM products WHERE id=$id";
    $execution = $database->query($req);
    if($execution != false){
        echo " Supression OK";
    }
    else{
        echo "erreur de supression";
    }
}
else{

}
?>
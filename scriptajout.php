<?php
    $database = new PDO(
    'mysql:host=localhost;dbname=amazoone2;charset=utf8',
    'root',
    ''
);
if(!empty($database)){
    $nom = $_POST["designation"];
    $image = $_POST["urlimg"];
    $prix = $_POST["price"];

    $req = "INSERT INTO products (designation, img, prix) VALUES ('$nom','$image','$prix')";
    $execution = $database->query($req);
    var_dump($req);
}
else{

}
?>
<?php
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$password = $_POST["password"];
$password1 = $_POST["password1"];

var_dump($_POST);
if(empty($name)||empty($surname)||empty($email) ||empty($password) ||empty($password1)  ){
    exit ("Błędne dane");
}
if ($password != $password1){
    exit ("Hasła się nie zgadzają");
}

$filename = "data/".md5($email);

if(file_exists($filename)){
	echo "Podane konto już istnieje, aktualizuję dane";
}

if (file_exists("data/") == false){
	mkdir(data);
}
if ($filename){
    $existing_content = file_get_contents($filename);
    $user = unserialize($existing_content);

    var_dump($user);
}
$user["name"] = $name;
$user["surname"] = $surname;
$user["email"] = $email;
$user["password"] = $password;
$user["password1"] = $password1;
$content = serialize($user);

$result = file_put_contents ( $filename,$content);

if($result > 0){
	echo "Sukces!";
    header('Location: logowanie.html');
}
else {
    echo "Coś poszło nie tak";
}

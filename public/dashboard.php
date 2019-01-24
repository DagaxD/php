<?php
session_start();
if ( isset($_SESSION['is_auth']) && $_SESSION['is_auth'] == 1){
    echo "Jesteś zalogowany";
} else {echo "Nie jesteś zalogowany";
 header('Location: logowanie.html');
    exit;}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="dashboard">
    <title>Dashboard</title>
</head>
<body>
<h1>Witaj, <?php
    $user = $_SESSION['user'];
    echo $user['name']." ".$user['surname'];
    ?> </h1>

</body>
</html>
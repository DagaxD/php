<?php
session_start();
$_SESSION['test']='Test';
file_put_contents('sess.txt',session_encode());

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if($_POST['inlognaam'] == ""){
echo "Je moet nog een naam invullen!";
};
if($_POST['adres'] == ""){
echo "Je moet nog een adres invullen!";
};

if($_POST['email'] == ""){
echo "Je moet nog een email invullen!";
};

  if($_POST['wachtwoord'] == ""){
echo "Je moet nog een password invullen!";
  };
  ?>
</body>
</html>
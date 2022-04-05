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
  $word = "omar";
  $andereword = "";

  woordOmdraai($word, $andereword);

  function woordOmdraai($word, $andereword){
    for($i = 1; $i <= strlen($word);$i++){
      $temp = substr($word, -$i, 1);
      $andereword .= $temp;
    } 
    echo($andereword);
  };
  ?>
</body>
</html>
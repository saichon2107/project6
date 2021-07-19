<!doctype html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Multiplication formula with while statement</title>
    <div class="p-3 mb-2 bg-info text-dark">
  
</style></head>

</head>

<body>

<div align="center"> 
<form action="Ex4.php "method= "post">

<p>Please enter the desired multiplication table. :
<input name= "multi">
<input name= "submit" type= "submit" value= "select">
</p>
</form>
<?php
$multi = $_POST['multi'] ;
$i=1;

echo "<center>multiplication table $multi <br>";
while ($i<=12)
{
echo "$i x $multi = ".$i*$multi."<br>";
$i++;
}
   
 ?>
</body>

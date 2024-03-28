 <?php 
    $title = 'PRAKTIKUM 1 PHP'
    $nama = 'rizal';
    $umur =  19 ;
    
    // echo ' WELCOME ' . $nama . ' dengan umur ' . $umur ;

    define('PHI', 3.14 );
    $jari = 8;

    $keliling = 2 * $PHI * $Jari;
    $luas = $PHI * $jari * $jari

    echo $keliling;
    echo  '<br>' . $luas;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <h1> <?php  echo $title ?> </h1>

  <p>Luas Lingkaran : <?php echo $keliling ?> </p>
  <p>keliling Luas: <?php echo $luas?> </p>

</body>
</html>
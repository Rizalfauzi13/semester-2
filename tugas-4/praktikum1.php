<?php
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<?php

  $title = ' Data Mahasiswa ';

  $nama = 'Rizal';
  $jurusan = 'Teknik Informatika';
  $rombel = 'TI01';
  $mahasiswa = array(
    array(
        'nama' => 'rizal',
        'jurusan' => 'Teknik Informatika',
        'rombel' => 'TI01'
    ),
    array(
        'nama' => 'Jane Doe',
        'jurusan' => 'Sistem Informasi',
        'rombel' => 'SI02'
    ),
    array(
        'nama' => 'Alice Smith',
        'jurusan' => 'Teknik Komputer',
        'rombel' => 'TK03'
    ),
    array(
        'nama' => 'Bob Johnson',
        'jurusan' => 'Manajemen Informatika',
        'rombel' => 'MI04'
    ),
    array(
        'nama' => 'Eva Green',
        'jurusan' => 'Sistem Informasi',
        'rombel' => 'SI05'
    )
);
?>

<body>
    <tr>
    <h1 style="text-align center"> <?php echo $title ?> </h1>
      
     <table style="widht 50%" border="1">
     <td>nama</td>
     <td>Jurusan</td>
     <td>Rombel</td>

     </tr>
     
       <?php foreach ($mahasiswa as $mhs) :?>
        
     <tr>
      <td> <?= $mhs['nama'] ?> </td>
      <td> <?= $mhs['jurusan'] ?> </td>
      <td> <?= $mhs['rombel'] ?> </td>
      </tr>
      <?php endforeach ; ?>
     </table>

</body> 

<?php
require_once 'footer.html';

?>
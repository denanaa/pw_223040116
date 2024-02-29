<?php 
  require('functions.php');
  $title= 'Home';
  $students= [
    [
      "nama" => "Dena Astia",
      "npm" => "223040116",
      "email" => "denanaw30@gmail.com"
    ],
    [
      "nama" => "Syerly Aryanti",
      "npm" => "223040100",
      "email" => "syrlyaryanti@gmail.com"
    ],
  ];


  // echo $_SERVER["REQUEST_URI"];
  // /pw2023_223040116/kuliah/pertemuan9/index.php



  
    require('views/index.view.php');

?>

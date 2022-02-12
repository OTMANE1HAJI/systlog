<?php
session_start(); 
?>
<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="welcome to my page">
 <title>OTMANE HAJI</title>
 <style> 
  thead {color:red}
  </style>
<body>
<div>
    <p>name : <? $_GET["Username"] ;?></p>
</div>    
<table border="1" > 
<caption style="color:black"> AFFICHAGE 1 </caption>  <!-- titre de tableau -->
<thead>
  <tr>  <!--table row / les lignes de tableau -->
     <!-- table columns/ les colonnes de tableau -->  
  <th>  MODULE </th>   <!-- th permer de changer la taille(prenom nom ...) et sa position(milieu) -->
  <th>  MATIERE </th>
  <th>  NOTE  </th>
  </tr>
  </thead>
  <tr>
  <td>Ginf1</td>
  <td>Matiere1</td>
  <td>12</td>

  </tr>
  <tr>
  <td>Ginf1</td>
  <td>Matiere2</td>
  <td>14</td>

  </tr><tr>
  <td>Ginf1</td>
  <td>Matiere3</td>
  <td>15</td>
  </tr>
</table>
</body>
</html>  
  
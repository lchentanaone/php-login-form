<?php



?>




<h1> welcome <?php 
    echo $_POST['name1'];
?></h1>

<table style="width:50%" border="1">
  
  <tr>
    <td> Email: </td> 
    <td><?php 
    echo $_POST['email']; ?> </td>
  </tr>

  <tr>
     <td> Age:</td>
     <td>   <?php  echo  $_POST['age'];?> </td>     
  </tr>

  <tr>
    <td> password:</td>
    <td> <?php  echo  $_POST['password']; ?> </td> 
  </tr>
</table




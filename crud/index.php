<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
?>
<title>Simple Firebase RDB CRUD</title>
<link rel="stylesheet" href="style.css">
<a href="add.php"><button>ADD DATA</button></a><br><br>
<table border="1" width="500">
   <tr align="center" bgcolor="#dddddd";>
      <td>Thumbnail</td>
      <td>Title</td>
      <td>Year</td>
      <td>Rating</td>
      <td colspan="2">Action</td>
   </tr>
   <?php
   $data = $db->retrieve("film");
   $data = json_decode($data, 1);
   
   if(is_array($data)){
      foreach($data as $id => $film){
         echo "<tr>
         <td><img src='{$film['thumbnail']}'></td>
         <td>{$film['title']}</td>
         <td>{$film['year']}</td>
         <td>{$film['rating']}</td>
         <td><a href='edit.php?id=$id'>EDIT</a></td>
         <td><a href='delete.php?id=$id'>DELETE</a></td>
      </tr>";
      }
   }
   ?>
</table>

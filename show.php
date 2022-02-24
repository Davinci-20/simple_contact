<?php $pdo = new PDO("mysql:host=localhost;dbname=job_test", "root", "password");?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
   <div class="head">
  <h2>Contact Data</h2>
</div>
<div class="fortable">
<table class="tab" border=0>
  <tr>
      <th>ID</th>
      <th>User Name</th>
      <th>Email</th>
      <th>Message</th>
</tr>
 <?php
$sql = "select * from user";
$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $d) {?>

<tr class="tr1">
                                        <td><?=$d['id'];?></td>
                                        <td><?=$d['name'];?></td>
                                        <td><?=$d['email'];?></td>
                                        <td><?=$d['message'];?></td>
</tr>

                                    <?php
}
?>
</table>
</div>
 </body>
</html>

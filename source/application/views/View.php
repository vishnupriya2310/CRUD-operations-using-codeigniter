<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>

<body>
    <a href="<?php echo base_url() ;?>Welcome/add">Add</a>
    <a href="<?php echo base_url() ;?>Welcome/search">Search</a>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Address</th>
    <th>Option</th>
  </tr>
  <?php
  //$i=1;
//  print_r($record);
  if(is_array($record)):
  foreach($record as $row)
  {
      ?>
  <tr>
  <td><?php echo $row->Student_id; ?></td>
  <td><?php echo $row->Student_Name; ?></td>
  <td><?php echo $row->Student_Email; ?></td>
  <td> <?php echo $row->Student_Mobile; ?></td>
   <td><?php echo $row->Student_Address; ?></td>
   <td><a href="<?php echo base_url() ;?>Welcome/Edit/<?php echo $row->Student_id; ?>">Edit</a>
   |
   <a href="<?php echo base_url() ;?>Welcome/delete/<?php echo $row->Student_id; ?>">Delete</a>
   </td>
   
  <?php
  }
  endif;
   ?>
</table>

</body>
</html>



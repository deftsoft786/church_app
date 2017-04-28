
<?php

mysql_connect('localhost','root','123456');
mysql_select_db('church');



$query = "SELECT * FROM company_performance ";
  $result = mysql_query($query);

  while ($row = mysql_fetch_array($result)){



    $fname= $row['year'];
    $sname= $row['sales'];
    $tname= $row['expense'];



    $results[] = array("year" => $fname, "sales" => $sname,"expense"=>$tname);

  }
  header('Content-type:application/json');
  echo json_encode($results);

  ?>

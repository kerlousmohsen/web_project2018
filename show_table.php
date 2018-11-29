
<?php
      include("DB.php");
	$sorce=$_GET["1"];
	$distnation=$_GET['2'];
	//if($_GET['3']==4)
		
	$type=$_GET['3'];
if($type=='5')
{
    $q= "select *  from t1 where sorce=? and distnation=? ";
    $w=$db->getRows($q,array($sorce,$distnation));
}
else{
	
	$q= "select *  from t1 where sorce=? and distnation=? and type=?";
    $w=$db->getRows($q,array($sorce,$distnation,$type));}
?>
<html>
    <head><title>available trains</title>
    <link rel="stylesheet" type="text/css" href="style.css"></head>
    <body background="4.jpeg" >
        <div class="header"><h1>EgyptTrains - قطارات مصر</h1></div>
<div style="text-align: center;">
	  <div class="head" ><h3 align="center"><?php echo "from ".$sorce." to ".$distnation ?> </h3></div></div>
	  <table  align="center" width="800px" border="0" colspan="4">
          <tr class="fr">
	 
	 
	 
	 
        <?php
          $i=0;
  if($w)
  {
      echo "<td>name</td>
      <td>time start</td>
	 <td>time end</td>
    <td>time token</td>
	 <td>speed</td>
	 <td>type</td>
	 </tr>";
      $i++;
	  foreach($w as $row)
	  {
		  echo "<tr class=\"sr\"><th>";echo $row['name'];
		  
		   echo "</th><th>";echo $row['time_start'];
		  echo "</th><th>";echo $row['time_end'];
          echo "</th><th>";echo $row['time_token'];
		  echo "</th><th>";echo $row['speed'];
		 echo "</th><th>";switch($row['type']){case '1':echo "VIP"; break; case '2':echo "مكيق"; break; case '3':echo "نوم"; break; case '4':echo "اكسبريس بعربيات مطوره"; break;};
		echo "</th></tr>";
		}
		echo "</table >";

	  
  }else 
	  echo "<div class=\"error\">there is no data to show!!</div>";
 

?>
         
        
        
</body>
</html>
<?php
    include("DB.php");
  $q= "select distnation from t1";
  $w=$db->getRows($q,array());
  if($w)
  {
	  $i=0;
	 
	  foreach($w as $row)
	  {
		  $arr[$i]=$row['distnation'];
		  $i++;
	  }
  }
 $arr=array_unique($arr);
$q=("select sorce from t1 ");
 $r=$db->getRows($q,array());
 
  if($r)
  {
	  $i=0;
	 
	  foreach($r as $row1)
	  {
		  $arr1[$i]=$row1['sorce'];
		  $i++;
	  }
  }
 $arr1=array_unique($arr1);
?>
<html>
    <head><title>Egypt trains</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body background="1.jpg">
        <div class="header"><h1>EgyptTrains - قطارات مصر</h1></div>
        
     <form method='get' action='show_table.php?' align="center">
    <select name='1' class="select" id="select1" >
         <?php
      foreach($arr as $x)
	  
	  {
		  echo "<option value=$x name=1>$x</option>";
	  }
          ?>
	   </select> <br>
         <select name='2' class="select" id="select2">
         <?php
      foreach($arr1 as $y)
	  {
          echo "<option value=$y name=2>$y</option>";
	  }
           ?>
	  </select><br>
	  <select name='3' class="select" >
          <?php
	   echo "<option value=5>show all </option>
       <option value=1>VIP </option>
	    <option value=2>مكيف </option>
	    <option value=3>نوم </option>
	    <option value=4>اكسبريس بعربيات مطوره</option>"
        ?>
		</select>
	   <br><input type='submit' value='show the trains' class='sub'>
	   
	   
	   
	   </form>
	

</table>
</div>
</body>
</html>
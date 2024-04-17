<!DOCTYPE html>
<html>
<body>

 <?php 

 ?>
 <form action="lab8.php" method="post">
Ad:  <input type="text" name="ad"> <br> <br>

Soyad:  <input type="text" name="soyad"> <br><br>

Qiymet1:  <input type="number" name="q1" id="q1id"><br><br>

Qiymet2:  <input type="number" name="q2" id="q2d"><br><br>
Qiymet3:  <input type="number" name="q3" id="q3d"><br><br>


<input type="submit" name="btn" value="Gonder" > <br><br>
</form>

<?php
function hesab($a,$b,$c){
 $cavab=($a+$b+$c)/3;
 return $cavab;
 }
 
 if( (isset($_POST['btn'])))
 {
 $q1=$_POST["q1"];
   $q2=$_POST["q2"];
     $q3=$_POST["q3"];
   if (hesab($q1,$q2,$q3)>1)
   {
 if(hesab($q1,$q2,$q3)>=45)
echo "Kechib";
else
  echo "Kesilib";

   }

}
?>



 

</body>
</html>


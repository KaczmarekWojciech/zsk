<?php
//date()
echo "dzień-miesiąc-rok: " .date('d-m-Y').'<br>';
echo date('m-d-y').'<br>';
echo date('d-M-Y').'<br>';
echo date('d-F-Y').'<br>';
setlocale(LC_ALL, 'polish');
echo strftime('%d %B %Y'),'<br>';

echo date('G:i:s'),'<br>';
echo date('G:i:sa'),'<br>';
echo date('H:i:s'),'<br>';
 ?>
 <script>
   setTimeout(function(){
     //window.location.reload();
   }, 1000)
 </script>

 <?php
 // getdate()
 $date=getdate();
 //echo $date; //Warning
 echo "<pre>";
 print_r($date);
echo "</pre>";

echo $date['wday'],'<br>'; //4
echo $date['yday'],'<br>'; //293
echo $date['0'],'<br>'; //293
// rok przesępny
echo date('L'),'<br>'; //0- rok nie jest przestępny
//mktime()
//$today=mktime(0,0,0,10,21,2021);
$today=mktime(0,0,0,date('m'),date('d'),date('y'));
echo $today,'<br>';

//ile lat minęło od 1 stycznia 1970
$year = $today/(60*60*24*365);
echo (int)$year,'<br>';

// poperzedni rok
$lastYear=mktime(0,0,0,date('m'),date('d'),date('y')-1);
$year = $lastYear/(60*60*24*365);
echo (int)$year,'<br>';
  ?>

<?php
 echo "delete cookies<br>";

 setcookie("category","samir",time()+50,"/");

 setcookie("category","",time()-3600,"/");

 echo "the cookis is delete successfully <br>";

 ?>
<?php
 echo file_get_contents("https://aed.azure-mobile.net/api/nearaed?lat=".$_GET['lat']."&lng=".$_GET['lon']."&r=300");
 ?>
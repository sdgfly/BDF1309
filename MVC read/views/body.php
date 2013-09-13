<?php

//$data comming from the model
echo "<center";

foreach($data as $d){

	echo $d["first"];
	echo " ";
	echo $d["last"];
	echo " <a href=?action=details$id=".$d["id"].">details</a>";
	echo "<br />";

}
echo "</center>";
?>
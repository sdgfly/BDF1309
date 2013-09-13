<?php

//$data comming from the model
echo "<center";

foreach($data as $d){

	echo $d["Headline"];
	echo " ";
	echo $d["body"];
	echo " <a href=?action=details$id=".$d["id"].">details</a>";
	echo "<br />";

}
echo "</center>";
?>
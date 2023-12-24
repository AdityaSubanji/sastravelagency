<?php
$file =$_['file'] . ".pdf" ;

header("content-disposition:attachment;filename=" . urlencode($file));

$fb = fopen($file,"r");

while(!feof($fb))
{
	echo fread($fb,8192);
	flush();
}
fclose($fb);

<!--------downdlod.php?file=ticket.pdf--------------->

?>
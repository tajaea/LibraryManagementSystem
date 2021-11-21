<?php
	$handle = fopen("files\HSbookdata.txt", "w+");
	
	$bookinfo = $_SESSION['title']."\n".$_SESSION['author']."\n".$_SESSION['year']."\n".$_SESSION['isbn']."\n".$_SESSION['call_number']."\n".$_SESSION['subject_area']."\n".$_SESSION['num_of_copies']."\n".$_SESSION['file'];
	
	fwrite($handle, $bookinfo);
		
	fclose($handle);

?>
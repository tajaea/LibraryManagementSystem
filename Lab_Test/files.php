<?php
    $demographicshandle = fopen("files\Demographics.txt", "w+");
	$demographicsinfo = $_SESSION['id_number']."\n".$_SESSION['first_name']."\n".$_SESSION['last_name']."\n".$_SESSION['gender']."\n".$_SESSION['ac_year'];
	
	fwrite($demographicshandle, $demographicsinfo);
		
	fclose($demographicshandle);

    $contacthandle = fopen("files\Contact.txt", "w+");
	$contactinfo = $_SESSION['id_number']."\n".$_SESSION['cellphone']."\n".$_SESSION['email'];
	
	fwrite($contacthandle, $contactinfo);
		
	fclose($contacthandle);

    $studyhandle = fopen("files\Study.txt", "w+");
	$studyinfo = $_SESSION['id_number']."\n".$_SESSION['degree'];
	
	fwrite($studyhandle, $studyinfo);
		
	fclose($studyhandle);
?>
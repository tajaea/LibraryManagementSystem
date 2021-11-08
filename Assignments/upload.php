<?php
// Check if $_FILE contain a file 
if(isset($_FILES['file']))
{
    $file = $_FILES['file'];
    //see information in the file uploaded
    print_r($file);

    //File Propertites
    //file name
   $filename = $file['name'];
    //file location
    $fileloc = $file['tmp_name'];
    //file size
    $filesize = $file['size'];
    //file error
    $fileerror = $file['error'];
    
    echo"</br>";
    echo"File explode operation</br>";
    //Get file extension
    $filext= explode(".",$filename);
    print_r($filext);

    //get the last element of the array - file extension
    $filext_end = strtolower(end($filext));
    echo"</br>";
    echo"File extension </br>";
    print_r($filext_end);
    echo"</br>";

    //Check which file is allowed
    $allowed = array('txt', 'jpg', 'pdf');

    //check if txt is in the file extension
    if(in_array($filext_end,$allowed))
    {  
        //check if file as an error
        if($fileerror == 0)
        {
               //check size of file - 2 megabyte
            if($filesize <= 2097152) 
            {
                //create a unique id for the file to prevent overwriting
                $filename_new = uniqid('',true). '.'.$filext_end;
                
                echo"</br>";
                echo"<File unique id created /br>";
                echo $filename_new;
                //save file destination
                $filedes ='upload/'.$filename_new;
                echo"File upload successful location </br>";
                echo $filedes;

                echo"</br>";
                echo"</br>";

                //the moveuplaoded file function check if the file is uploaded via an http request
                //move the file from a temporary location to the location you define
                //
                if(move_uploaded_file($fileloc,$filedes))
                {
                    echo $filedes;
                }    
            }
        }
    }
}
?>
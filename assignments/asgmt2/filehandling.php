<?php
    $fptr=fopen("hello.txt", "w");
    fwrite($fptr, "hello");
    fwrite($fptr, "there");
    fclose($fptr);
    
    $fptr=fopen("read.txt", "r");
    check($fptr);
    $content=fread($fptr,filesize("hello.txt"));
    echo $content;

    function check($fptr)
    {
    	if(!$fptr) {
    		echo("Error Opening File");
    	}
    }
?>

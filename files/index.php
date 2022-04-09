<?php

 $path = 'dir0/dir1/test.php';
 $file = 'file1.txt';

/*
< -- return filename/path/ -->

 echo basename($path);
 echo basename($path,'.php');
 echo dirname($path);


< - -check if file exist - ->

echo file_exist($file);


< - - Get absolute path- ->

echo realpath($file);


<- -  check to see if file- - >

echo is_file($file);


<- -  check if file writable/readable- - >

echo is_writable($file);

echo is_readable($file);



< - - filesize- ->

echo filesize($file);

*/

//---------------------------------------------

/*

 #1 . create a directory

  mkdir('testing');

 #2 . Remove a directory
 
  rmdir('testing');

 #3 . Copy file
 
  echo copy('file1.txt' , 'file2.txt');
 
 #4 . Rename file
 
  rename('file1.txt','file2.txt');

 #5 . Delete file
 
  unlink('myFile.txt');

*/


// -------------------------------------------


/*

 #1 write from file to string

  echo file_get_contents($file);

 #2.  write string to file

  echo file_put_contents($file,'Hello world');

 eg : 
 
   $current = file_get_contents($file);
   $current .= 'Goodbye world!';
   file_put_contents($file,$current);

 #3 . open file for reading 
 
   $handle = fopen($file, 'r');
   $data = fread($handle, filesize($file));
   echo data;   
   
 #4 . open file for writing 
 
  $handle = fopen($file , 'w');
  $txt = 'Supun Akalanka';
  fwrite($handle , $txt);
  fclose($handle);

*/
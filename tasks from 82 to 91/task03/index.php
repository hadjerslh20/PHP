<?php
    // creating directories
    if(!file_exists("C:\wamp643\www\\elzero\Programming\PHP")){
        mkdir("Programming/PHP",0711,true);
        echo "Directories are created succesfully"."<br>";
    }else {
        echo "Directory is already exist".'<br>';
    }
    

    // deleting directories 
    if(file_exists("C:\wamp643\www\\elzero\Programming\PHP")) {
        rmdir("C:\wamp643\www\\elzero\Programming\PHP");
        rmdir("C:\wamp643\www\\elzero\Programming");
        echo "Directories are deleted succesfully";
    }
?>

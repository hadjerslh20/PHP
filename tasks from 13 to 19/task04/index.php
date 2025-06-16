<?php 
    print_r ($_SERVER);
    echo $_SERVER['DOCUMENT_ROOT'];
    echo '<br>';
    echo $_SERVER['SERVER_NAME'];
    echo '<br>';
    echo $_SERVER['SystemRoot'];
    # there's no open ssl configuration in my server
    /* 
    echo $_SERVER['OPENSSL_CONF'];
    */
?>

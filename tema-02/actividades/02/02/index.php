<?php
    /**
     * Función: is_null()
     */

    var_dump(value: is_null(value: $var));
    echo "<BR>";

    $var1 = NULL;
    var_dump( is_null($var1) );
    echo "<BR>";

    $var5=5;
    unset( $var5 );
    var_dump( is_null($var5) );
    echo "<BR>";

    $var2 = 5;
    var_dump( is_null($var2) );
    echo "<BR>";

    $var3="";
    var_dump( is_null($var3) );
    echo "<BR>";

    $var4="0";
    var_dump( is_null($var4) );
    echo "<BR>";

    
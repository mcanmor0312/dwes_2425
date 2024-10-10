<?php
    /**
     * Función: isset()
     */

     var_dump( isset($var));
     echo "<BR>";
 
     $var1 = NULL;
     var_dump( isset($var1));
     echo "<BR>";
 
     $var5=5;
     unset( $var5 );
     var_dump( isset($var5));
     echo "<BR>";
 
     $var2 = 5;
     var_dump( isset($var2));
     echo "<BR>";
 
     $var3="";
     var_dump( isset($var3));
     echo "<BR>";
 
     $var4="0";
     var_dump( isset($var4));
     echo "<BR>";
 
     
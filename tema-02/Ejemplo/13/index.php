<?php

/**
 * Conversiones de tipos
 */
$var=3;

var_dump(value: $var);

//Conversion mediante funciones 
$var1=strval(value: $var);
echo "<BR>";
var_dump(value: $var1);

//Conversion mediante funciones 
$var2=intval(value: $var1);
echo "<BR>";
var_dump(value: $var2);

//Conversion mediante funciones 
$var2=floatval(value: $var);
echo "<BR>";
var_dump(value: $var3);

//Conversion mediante funciones 
$var4=7.89;
$var4=(int) $var4;
echo "<BR>";
var_dump(value: $var4);

//Conversion mediante funciones 
$var5=89;
$var5=(float) $var5;
echo "<BR>";
var_dump(value: $var5);

//Conversion mediante funciones 
$var6=89;
$var6=(string) $var6;
echo "<BR>";
var_dump(value: $var6);

//Conversion mediante funciones 
$var7=100;
$var7=(array) $var7;
echo "<BR>";
var_dump(value: $var7);

//Conversion mediante funciones 
$var8=45;
settype(var:$var8,type:"string");
echo "<BR>";
var_dump(value: $var8);
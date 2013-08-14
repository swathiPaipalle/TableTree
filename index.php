<?php
 /**
 * Table Tree Application

 * @package Table Tree
 */

require('libs/smarty/Smarty.class.php');

$smarty = new Smarty;

$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


$collection = array(
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "2","1" => "orange","2" => "yellow","3" => "red","4" => "green","5" => "green"),
  array("0" => "2","1" => "orange","2" => "yellow","3" => "red","4" => "green","5" => "green"),
  array("0" => "3","1" => "pulp","2" => "creamy","3" => "juicy","4" => "creamy","5" => "juicy"),
  array("0" => "3","1" => "pulp","2" => "creamy","3" => "juicy","4" => "creamy","5" => "juicy"),
  array("0" => "3","1" => "pulp","2" => "creamy","3" => "juicy","4" => "creamy","5" => "juicy"),
  array("0" => "3","1" => "pulp","2" => "creamy","3" => "juicy","4" => "creamy","5" => "juicy"),
  array("0" => "4","1" => "water","2" => "tea","3" => "coffee","4" => "milk","5" => "soda"),
  array("0" => "4","1" => "water","2" => "tea","3" => "coffee","4" => "milk","5" => "soda"),
  array("0" => "4","1" => "water","2" => "tea","3" => "coffee","4" => "milk","5" => "soda"),
  array("0" => "5","1" => "carrot","2" => "turnip","3" => "beet","4" => "yam","5" => "potato"),
  array("0" => "6","1" => "parrot","2" => "peacock","3" => "hawk","4" => "eagle","5" => "kingfisher"),
  array("0" => "7","1" => "tiger","2" => "cat","3" => "elephant","4" => "dog","5" => "lion"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),  
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape"),
  array("0" => "2","1" => "orange","2" => "yellow","3" => "red","4" => "green","5" => "green"),
  array("0" => "2","1" => "orange","2" => "yellow","3" => "red","4" => "green","5" => "green"),
  array("0" => "2","1" => "orange","2" => "yellow","3" => "red","4" => "green","5" => "green"),
  array("0" => "2","1" => "orange","2" => "yellow","3" => "red","4" => "green","5" => "green"),
  array("0" => "2","1" => "orange","2" => "yellow","3" => "red","4" => "green","5" => "green"),
  array("0" => "2","1" => "orange","2" => "yellow","3" => "red","4" => "green","5" => "green"),
array("0" => "3","1" => "pulp","2" => "creamy","3" => "juicy","4" => "creamy","5" => "juicy"),
  array("0" => "3","1" => "pulp","2" => "creamy","3" => "juicy","4" => "creamy","5" => "juicy"),
  array("0" => "3","1" => "pulp","2" => "creamy","3" => "juicy","4" => "creamy","5" => "juicy"),
  
  array("0" => "1","1" => "orange","2" => "banana","3" => "cherry","4" => "avacado","5" => "grape")
);

$smarty->assign("volume",$collection);


$smarty->display('index.html');
?>

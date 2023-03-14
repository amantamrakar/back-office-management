<?php
function my_arr($arr)
{
   echo '<pre>';
   print_r($arr);
   echo '</pre>';
}

function replace_key($data, $key_array)
{
   $k = array();
   foreach ($data as $ke => $value) {
      $k[$ke] = array();
      foreach ($value as $key => $v) {
         $k[$ke][$key_array[$key]] = $v;
      }
   }
   return $k;
}

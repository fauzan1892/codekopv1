<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
  |--------------------------------------------------------------------------
  | Function Helpers default
  |--------------------------------------------------------------------------
  | 
  |
 */

   function redirect($url = null)
   {
      if($url)
      {
         // return header('Location:'.$url);
         echo '<script>window.location="'.$url.'";</script>';
      }else{
         // return header('Location:'.base_url);
         echo '<script>window.location="'.base_url.'";</script>';
      }
   }

   function base_url($url = null)
   {
      return base_url.$url;
   }

   function getSegments($segment)
   {
      $explode_url = explode('/',$_SERVER['REQUEST_URI']);
      $rowurl = count(explode('/',base_url));
      $row_url = count(parse_url(base_url));
      $urlc = $rowurl-$row_url;
      $rurl = $urlc-1;
      $cont = $segment + $rurl;
      $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
      return $uriSegments[$cont];
   }

   function page_rendered()
   {
      $start_time = microtime(TRUE);
      $end_time = microtime(TRUE);
      $time_taken =($end_time - $start_time)*1000;
      $time_taken = round($time_taken,5);
      
      return ''.$time_taken.'';
   }
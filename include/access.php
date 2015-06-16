<?php
/*
 *  Database, Websetting and Path Setting
 *  untuk multiple selection di def di init.php
 */
$serverpath = "localhost";
$db_username = "root";
$db_password = "1qay2wsx";
$db_name = "c1nt466_mhstk";
$db_prefix = '';
//init db setting
$DbSetting = array("serverpath"=>$serverpath,"db_username"=>$db_username,"db_password"=>$db_password,"db_name"=>$db_name,"db_prefix"=>$db_prefix);
//Websetting
$domain = "localhost";
$folder = '/mhssd/';
$title = 'Leap System';
$metakey = 'Leap Key';
$metadescription = 'Leap Description';
$lang = 'en';
$currency = 'IDR';
$photo_path = 'D:/xampp/htdocs/static/mhstk/'; //kalau untuk multiple selection di def di init.php
$photo_url = 'http://localhost/static/mhstk/';
//themepath
$themepath = 'adminlte';
// init web setting
$WebSetting = array("domain"=>$domain,"folder"=>$folder,"title"=>$title,"metakey"=>$metakey,"metadescription"=>$metadescription,"lang"=>$lang,"currency"=>$currency,"photopath"=>$photo_path,"photourl"=>$photo_url,"themepath"=>$themepath);
//timezone
$timezone = 'Asia/Jakarta';

//javascript files
$js = "loader_js.php";
//css files
$css = "loader_css.php";

//main class MUST BE subclass of Apps
$mainClass = "Leap";
//set namespace for apps
$nameSpaceForApps = array("");
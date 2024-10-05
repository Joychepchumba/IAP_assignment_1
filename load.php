<?php

// Class Auto Load 
session_start();
require "includes/constants.php";
require "includes/dbConnection.php";
require "lang/en.php";
function classAutoLoad($classname){

    $directories = ["contents", "layouts", "menus","Processes","global"];

    foreach($directories AS $dir){
        $filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $classname . ".php";
        if(file_exists($filename) AND is_readable($filename)){
            require_once $filename;
        }
    }
}

spl_autoload_register('classAutoLoad');
    $ObjGlob = new fnc();
    $ObjSendMail = new SendMail();

// Create instances of all classes
    $ObjLayouts = new layouts();
    $ObjMenus = new menus();
    $ObjHeadings = new headings();
    $ObjCont = new contents();
    $ObjForm= new form();
    $ObjAuth = new auth();
   


$conn = new dbConnection(DBTYPE, HOSTNAME, DBPORT, HOSTUSER, HOSTPASS, DBNAME);
$ObjAuth->signup($conn, $ObjGlob, $ObjSendMail, $lang, $conf);
$ObjAuth->verify_code($conn, $ObjGlob, $ObjSendMail, $lang, $conf);



// print 
// print "<br>";
// print "<br>";
// print $_SERVER["PHP_SELF"];
// print "<br>";
// print "<br>";
// print basename($_SERVER["PHP_SELF"]);
// print "<br>";
// print "<br>";
// if(file_exists("index.php") AND is_readable("index.php")){
//     print "yes";
// }else{
//     print "no";
// }

<?php
 require_once "load.php";
 $ObjLayouts->heading();
 $ObjMenus->main_menu();
 $ObjHeadings-> main_banner();
$ObjForm->sign_up( $ObjGlob);
$ObjLayouts->footer();

?>
<?php

class menus{

public function main_menu(){
    ?>
    <div class="topnav">
        <a href= "./">Home</a>
        <a href= "about.php">About Us</a>
        <a href= "">Our Projects</a>
        <a href= "">Our portfolio</a>
        <a href= "">Contact us</a>
        <?php $this->main_right_menu(); ?>

</div>
<?php
}
public function main_right_menu(){
?>
    <div class="topnav-right">
        <a href= "signup.php">Sign up</a>
        <a href= "">Sign in</a>

</div>

<?php
}

}

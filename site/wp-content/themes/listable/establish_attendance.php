<?php
//get_the_ID();
//get_the_guid();  Both can be helpful to get the ip post
function establish_attendance() {
    $cu = wp_get_current_user();
    $id_post = get_the_ID();
    $var = "insert into participants values ( null,  " . $cu -> ID . " , " . $id_post . " ); " ;
    global $wpdb;
    $wpdb->query($wpdb->prepare($var));
}
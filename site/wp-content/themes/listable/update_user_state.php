<?php
function update_user_state(WP_REST_Request $request) {
    $cu = wp_get_current_user();
    $var = "UPDATE wp_fema_users set user_status = " . $state . " where ID = " . $cu->ID . " " ;
    global $wpdb;
    $user_count = $wpdb->get_var($var);
    echo "<p>User state is {$user_count}</p>";
}
?>
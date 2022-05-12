<?php

function connection() {
    $link = mysqli_connect("localhost", "root", "", "hrm_physiotherapy_portal",'3308');
    return $link;
}

?>

<?php
function check_sid($sid) {
    if (!preg_match("/^s\d{7}$/", $sid)) {
        echo '<div style="color: red; text-align: center">Student ID: Must start with s and be followed by 7 digits.</div>';
        return false;
    }
    return true;
}

function check_name($name) {
    if (!preg_match("/^[A-Z][a-z]+$/", $name)) {
        echo '<div style="color: red; text-align: center">Name: Must start with an upper-case letter and only contain letters.</div>';
        return false;
    }
    return true;
}

function check_phone($phone) {
    if (!preg_match("/^04\d{8}$/", $phone)) {
        echo '<div style="color: red; text-align: center">Mobile Phone: Must start with 04 and be followed by 8 digits.</div>';
        return false;
    }
    return true;
}
?>
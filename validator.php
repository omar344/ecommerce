<?php
function validate($input){
    $input=trim($input);
    $input=strip_tags($input);
    $input=htmlspecialchars($input);
    return $input;
}
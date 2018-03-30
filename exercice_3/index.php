<?php
function getAjaxRequest(){
    $result = ajax.responseText;
    if(empty($result)){
        $fail= "Ajax request failed!";
        return $fail;
    }
        $success="Ajax request succeeded!";
        return $success;
}
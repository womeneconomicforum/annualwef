<?php

define('SITE_NAME', 'WEF');
define('PROFILE_IMG_DIR', 'uploads/images/');


function checkImageExt($filename) {
    $validExt = array('jpg', 'jpeg', 'png', 'gif');
    $ext = getExt($filename);
    if (in_array(strtolower($ext), $validExt))
        return true;
    else
        return false;
}


function getExt($file_name = '') {
    return substr($file_name, strrpos($file_name, '.') + 1, strlen($file_name) - (strrpos($file_name, '.') + 1));
}



?>

<?php
function formatDate($value){
    return date('H:i:s - D M Y', strtotime($value));
}

?>

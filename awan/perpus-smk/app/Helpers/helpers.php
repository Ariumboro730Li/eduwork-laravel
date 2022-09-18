<?php
function format_tanggal($value)
{
    return date('H:i:s - d M Y', strtotime($value));
}

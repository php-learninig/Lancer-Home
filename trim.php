<?php
ob_end_flush();
ob_start();
echo 'Anna';
$out1=ob_get_contents();
echo 'Hello';
$out2=ob_get_contents();
ob_clean();





}

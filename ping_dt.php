<?php
$ip =   "192.168.8.172";
exec("ping $ip", $output, $status);
print_r($status);

?>
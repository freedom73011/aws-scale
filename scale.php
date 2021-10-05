<?php

shell_exec('echo "<?php while(1);" | php > /dev/null 2>&1 &');

@date_default_timezone_set("Asia/Taipei");
$current_datetime = @date('Y-m-d H:i:s', @time());
echo "Service @ $current_datetime:" . file_get_contents('/etc/hostname') . "\n";
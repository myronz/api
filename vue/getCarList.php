<?php

    // 从文件中读取数据到PHP变量
    $json_string = file_get_contents('carData.json'); 
	echo ($json_string);

?>
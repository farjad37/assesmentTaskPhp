<?php
$output = '';
if (isset($argc)) {
	for ($i = 0; $i < $argc; $i++) {
         $fileName =  $argv[1];
         $columnIndex = $argv[2];
         $valueName = $argv[3];
            $result  = [];
            if (($handle = fopen("$fileName", "r")) !== FALSE) {
                
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    
                if($data[$columnIndex] == "$valueName") 
                    $output = implode(",", $data);
                    echo $output;
                }
                fclose($handle);
            die;            
	}
}
}
else {
	echo "argc and argv disabled\n";
}




?>
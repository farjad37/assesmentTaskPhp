<?php
$outPut = '';
if (isset($argc)) {
	for ($i = 0; $i < $argc; $i++) {
		 //echo "Argument #" . $i . " - " . $argv[0] . "\n";
         $fileName =  $argv[1];
         $columnIndex = $argv[2];
         $valueName = $argv[3];
            $result  = [];
            if (($handle = fopen("$fileName", "r")) !== FALSE) {                
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {                    
                if($data[$columnIndex] == "$valueName")          
                    $outPut = implode(",", $data);
                    echo $outPut;
                }
                fclose($handle);

            
	}
}
}
else {
	echo "discribe the file path";
}




?>
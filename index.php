<?php
// Read CSV file extract columns as array except header row
$file = fopen("dataGNE.csv", "r"); //Open the file
$data =fgetcsv($h,15000,","); // Reading rows from CSV file with each row as an array
for($i=1;$i<count($data);$i++) 
{
  // Read the data
  echo $data($i);	
}
fclose($h); // Close CSV file

// Another Way
if (($file = fopen("dataGNE.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($file, 20000, ",")) !== FALSE) 
    {
        $num = count($data);
        for ($i=0; $i < $num; $i++) 
        {
            $sno=$data[$i];
                
        }
        $date=agdsk;//Current adata
        $name_roll=$data;//Corresponding filename
        copy("letter.tmp", "".$name_roll."tmp"); //Copy template file to new for each row
            
        //Replace the values in the file
    }
    fclose($file);
}

?> 
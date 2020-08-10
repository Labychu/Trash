<?php

$search= $_POST['search_entered'];

$searchoriginal= $search;

$search= strtolower($search);

$search= trim($search);



$search= explode(" ", $search);

$countsearchterms= count($search);

$submitbutton= $_POST['submit'];

?>


<?php

$directory = "./articles/";




if (!empty($searchoriginal)) 
{
    
if (is_dir($directory)){

  $open = opendir($directory);      // open the test directory
  $arraycount = 0;
    
    while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$file= str_replace("-", " ", $file);
	$file= str_replace("_", " ", $file);
	$position= strpos($file, ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	$file= substr($file, 0, $position);
        
	
        //$file contain the file's name in readable form
        
        for ($i = 0; $i < $countsearchterms; $i++) {
        
            if ((strpos($file,  $search[$i]) !== false))
              {
              $file= ucwords($file);
              $arraycount++;
               echo "<a href='$directory" . "$fileoriginal'>$file</a>"."<br>";
                }
        }
	
    }

closedir($open);
    

  }//while loop


if ($arraycount == 0)
{
echo "No results for this search entered";
}
}
?>
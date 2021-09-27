<?php
/**
* Setting the execution time
**/
ini_set('max_execution_time', '600'); //300 seconds = 5 minutes
// ini_set('max_execution_time', '0'); // for infinite time of execution

/**
* Looping every image to download
**/
for ($i=0; $i < 10000; $i++) {
  $newFilePath = 'downloads/'.$i.".png";
  if ( !file_exists($newFilePath) ) {
    $imageUrl = "https://ipfs.io/ipfs/QmQ6VgRFiVTdKbiebxGvhW3Wa3Lkhpe6SkWBPjGnPkTttS/$i.png";
    $fileData = file_get_contents($imageUrl);
    $response = file_put_contents( $newFilePath, $fileData );
  }
  else {
    $response = "File already exists";
  }

  echo "<pre>";
  print_r($response);
  echo "</pre>";
}
?>

<?php
  $langs = array(
    'en',
    'fr',
    'tr',
    'pt-br',
    'el'
  );

  foreach ($langs as $language){

    ob_start(); 


    include ('index.php');

    if ($language == "en") {
      $cachefile = "index.html";
    } else {
      $cachefile = $language.".html";
    }


    $fp = fopen('../'.$cachefile, 'w');
    
    fwrite($fp, ob_get_contents());

    fclose($fp);

    ob_end_flush();
  }
?>

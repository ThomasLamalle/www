<?php
/*informations site, links, scripts*/
include("../res.php");
echo('<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">');


echo('<link rel="stylesheet" type="text/css" href=' . CSS_PATH . '>');
echo('<script src="' . JS_PATH . '"></script>');
echo('text du header'.'</br>');

/*

Ne fonctionne pas pour le moment

$('.ui.sticky')
  .sticky({
    context: '#example1'
  })
;
*/

?>

Hello <?=$data['name']?>
<?php

        function headerModal(){

          ob_start();
          echo(" Hello there!"); //would normally get printed to the screen/output to browser
          $output = ob_get_contents();
          ob_get_clean();

          return $output;
        }

        echo headerModal();

 ?>

 <?php
ob_start();
?>
<div>
    <span>text</span>
    <a href="#">link</a>
</div>
<?php
$content = ob_get_clean(); 
echo $content;
?>

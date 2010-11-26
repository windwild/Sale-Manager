
<?php
$bar = new Bar(1000, 600, array(600, 300, 30, 500, 400, 250), array('AAAAA', 'BBBBB', 'CCCCC', 'DDDDD', 'EEEEEE', 'FFFFFF'));
$str = "SHIT";
$bar->setTitle($str);
$bar->stroke();
?>
<?php
  $id = get_the_ID();
  $field1 = get_field('sub_title_2', $id);
?>

<div><?php echo $field1; ?></div>
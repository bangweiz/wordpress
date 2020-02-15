<?php
  $id = get_the_ID();
  var_dump($id);
  die();

  $field0 = get_field('enable_upload_image', 'option');
  if ($field0) {
    $field1 = get_field('field_textarea', $id);
    $field2 = get_field('field_url', $id);
    $field3 = get_field('field_add_image', $id);
  }
  
  
?>

<div>
  <a href="<?php var_dump($field2); ?>">
    <img src="<?php echo $field3; ?>" alt="">
  </a>
</div>
<div><p><?php echo $field1; ?></p></div>
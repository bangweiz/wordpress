<?php
  $id = get_the_ID();

  $field0 = get_field('enable_upload_image', $id);
  if ($field0){
    $field1 = get_field('field_textarea', $id);
    $field2 = get_field('field_url', $id);
    $field3 = get_field('field_add_image', $id);
  }
  
  
?>

<div>
<<<<<<< HEAD
  <a href="<?php echo$field2['url']; ?>">
    <img src="<?php echo $field3['url']; ?>" alt="">
=======
  <a href="<?php var_dump($field2); ?>">
    <img src="<?php echo $field3; ?>" alt="">
>>>>>>> 554646f74656e1f8b60991b12b69232449ebc029
  </a>
</div>
<div><p><?php echo $field1; ?></p></div>
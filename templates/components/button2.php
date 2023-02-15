<?php
function my_custom_button2($text, $type) {?>
  <?php $class = 'py-2 px-4 font-semibold rounded';
  if ($type === 'main') {
    $class .= ' bg-blue-500 text-white hover:bg-blue-700';
  } elseif ($type === 'outlined') {
    $class .= ' border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white';
  } elseif ($type === 'transparent') {
    $class .= 'text-blue-500 hover:text-blue-800';
  }?>
  <button class="<?php echo $class ?>"><?php echo $text ?></button>
<?php } ?>
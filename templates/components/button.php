<?php
function my_custom_button($text, $type) {
  $class = 'py-2 px-4 font-semibold rounded ';

  if ($type === 'main') {
    $class .= 'text-black bg-blue-500 hover:bg-blue-700';
  } elseif ($type === 'outlined') {
    $class .= ' border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white';
  } elseif ($type === 'transparent') {
    $class .= ' text-blue-500 hover:text-black';
  }

  echo '<button class="' . $class . ' ">' . $text . '</button>';
}
?>


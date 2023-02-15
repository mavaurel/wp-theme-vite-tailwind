<?php 
function my_custom_card($title, $image_url, $button_text, $button_type) {
  echo '<div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="' . $image_url . '" alt="' . $title . '">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">' . $title . '</div>';
        my_custom_button($button_text, $button_type);
        my_custom_button2($button_text, $button_type);
  echo '</div>
        </div>';
}
?>
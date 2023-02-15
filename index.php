<?php get_header() ?>
<?php
$cards = array(
    array(
        'title' => 'Card 1',
        'image_url' => 'https://picsum.photos/800/600',
        'button_text' => 'Learn more',
        'button_type' => 'main'
    ),
    array(
        'title' => 'Card 2',
        'image_url' => 'https://picsum.photos/800/600',
        'button_text' => 'Buy now',
        'button_type' => 'outlined'
    ),
    array(
        'title' => 'Card 3',
        'image_url' => 'https://picsum.photos/800/600',
        'button_text' => 'Sign up',
        'button_type' => 'transparent'
    ),
);
?>

<div class="flex flex-wrap -mx-4">
  <?php foreach ($cards as $card) { ?>
    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 py-4">
      <?php my_custom_card($card['title'], $card['image_url'], $card['button_text'], $card['button_type']); ?>
    </div>
  <?php } ?>
</div>
<div class="flex flex-wrap -mx-4">
  <?php foreach ($cards as $card) { ?>
    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 py-4">
      <?php my_custom_card($card['title'], $card['image_url'], $card['button_text'], $card['button_type']); ?>
    </div>
  <?php } ?>
</div>
Example button
<?php include 'inc/button.php' ?>

<div class="place-content-center flex items-center h-full max-w-screen-lg mx-auto">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-black">Hello World!</h1>
        <h2 class="text-xl font-bold text-black">Wordpress Theme rapid development using Vite & Tailwindcss</h2>
        <div class="text-md mt-4">
            <a class="hover:opacity-90 inline-block px-4 py-1 my-1 text-white bg-purple-700 rounded-lg"
                href="https://vitejs.dev/" target="_blank">ViteJS</a>
            <a class="hover:opacity-90 inline-block px-4 py-1 my-1 text-white bg-green-600 rounded-lg"
                href="https://tailwindcss.com/" target="_blank">TailwindCSS</a>
        </div>

        <p class="mt-4 text-sm">To test browser sync in development mode ensure the following:</p>
        <code class="bg-slate-800 inline-block px-4 py-1 mt-1 text-xs text-left text-gray-200">
            <p class="my-2">
                <span class="block text-gray-500">// define IS_VITE_DEVELOPMENT in functions or wp-config.php</span>
                define('IS_VITE_DEVELOPMENT', TRUE);
            </p>
            <p class="my-2">
                <span class="block text-gray-500">// run first time in your <strong>theme folder</strong> (node.js required)</span>
                npm install
            </p>
            <p class="my-2">
                <span class="block text-gray-500">// start development & refresh your browser</span>
                npm run dev
            </p>
        </code>

        <p class="mt-1 text-xs"><a class="hover:underline" href="https://github.com/blonestar/wp-theme-vite-tailwind"
                target="_blank">More instructions here</a>.</p>

    </div>

</div>



<!-- <?php get_footer() ?> -->
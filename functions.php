<?php
// style、scriptの読み込み
// index.phpのhead内に、pp wp_head(); を記述
// footer.phpのbody末尾に、pp wp_footer(); を記述
function my_script_init()
{
  wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/style.css", array(), filemtime(get_theme_file_path("assets/css/style.css")), "all");
  wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), filemtime(get_theme_file_path("assets/js/script.js")), true);
}

add_action("wp_enqueue_scripts", "my_script_init");

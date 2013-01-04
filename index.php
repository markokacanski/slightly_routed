<?php
require_once('system/Router.php');

//Adding the routes
require_once('system/routes.php');

//Running the routing
Router::run();


// main renderer
function render_page($file, $inner_file = null)
{
  # we build the full path, so we can use render_page in all pages
  $dir = dirname($_SERVER['PHP_SELF']);
  $server = $_SERVER['DOCUMENT_ROOT'];
  $full_path =  $server.$dir."/".$file;
  
  if (!empty($inner_file)) {
    $inner_file = implode("",$inner_file);
    if (file_exists($inner_file.".php")) {
      $yield = render_page($inner_file.".php");
    } elseif(file_exists($inner_file."index.php")) {
      $yield = render_page($inner_file."index.php");
    } else {
      # no such inner file, display 404
      $yield = render_page("site/404.php");
    }
  } else {
    $yield = null;
  }
  
  ob_start();
  // echo $full_path;
  require $full_path;
  return ob_get_clean();
}

# function used to render stuff inside the pages
# such as sidebars, headers, footers etc.
function render($file)
{
  echo render_page($file);
}

# we start the rendering stack here, by rendering site/layout
# with a path to "inner file" in $args
function index($args) {
  echo render_page('site/layout.php', Array('frontpage'));

}//index()


function page($args)
{
   echo render_page('site/layout.php', $args);
   
}//other pages()
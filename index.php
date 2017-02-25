<?php
global $layout;
global $title;
global $mode;
$layout = true;
$title = "CSI";
$mode = 1;
$path = $_SERVER['REQUEST_URI']."/";
$path = substr($path, 1, strlen($path));
set_error_handler(function($errno, $errstr) {
  ob_end_clean();
  global $mode;
  if ($mode == 1)
	echo "<b>Error:</b> [$errno] $errstr";
  else
	require "404.php";
  exit();
});
$parametres_tmp = explode("/",  $path);
 
$parametres_tmp = array_filter($parametres_tmp, create_function('$value', 'return $value !== "";'));
if (empty($parametres_tmp)) $parametres_tmp = array_push($parametres_tmp,"");
$json = file_get_contents('routes.json');
$routes = json_decode($json, true);
foreach ($routes as $key => $value) {
	if (!(strcmp($value["url"], "/".$parametres_tmp[0])) && $_SERVER['REQUEST_METHOD'] == $value["method"]) {
		$b = explode('#',$key);
		
		ob_start();
		require "controllers/application.class.php";
		require "controllers/".$b[0].".class.php";
		eval('$object = new '.$b[0].'();');
		eval('$object->'.$b[1].'();');
		ob_end_flush();
		if ($layout == true) {
			require "/view/Layout/header.php";
		}
		require "/view/".$b[0]."/".$b[1].".php";
		if ($layout == true) {
			require "/view/Layout/footer.php";
		}

		$content = ob_get_clean();
		echo $content;
		exit();
	}
}
require "404.php";
?>
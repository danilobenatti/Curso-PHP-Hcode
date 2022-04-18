<?php
require_once '../tpl/vendor/autoload.php';

use Rain\Tpl;

$config = array(
	"tpl_dir" => "tpl/",
	"cache_dir" => "cache/"
);

Tpl::configure($config);

$tpl = new Tpl;

$tpl->assign('title','Code by RainTPL');
$tpl->assign('subject','Hello by RainTPL!');
$tpl->assign('text','Teste Template RainTPL!');
$tpl->assign('version', PHP_VERSION);

$tpl->draw('page_inicial');

?>

<?php

require_once('Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = 'C:\Users\uuu_min\Desktop\illust-contest.site\templates';
$smarty->compile_dir  = 'C:\Users\uuu_min\Desktop\illust-contest.site\templates_c';
$smarty->config_dir   = 'C:\Users\uuu_min\Desktop\illust-contest.site\configs';
$smarty->cache_dir    = 'C:\Users\uuu_min\Desktop\illust-contest.site\cache';

$smarty->assign('content','Hello World!');
$smarty->display('main.tpl');

?>
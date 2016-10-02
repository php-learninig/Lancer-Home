<?php
//константы для обращения к контроллерам
define('PasthPrefix', '../controllers/');
define('PastPostfix', 'Controller.php');

//используемый шаблон

$template = 'default';

//пути к файлам

define('TemplatePrefix', "..views/($template)/");
define('TemplatePostfix', '.tpl');

//пути к файлам шаблонов в вебпространстве

define('TemplateWebPath', "/templates/{$template}/");

require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty ->setTemplateDir(TemplatePrefix);
$smarty -> setCompileDir('../tmp/smarty/templates_c');
$smarty ->setCacheDir('../tmp/smarty/cache');
$smarty ->setConfigDir('../library/Smarty/configs');

$smarty ->assign('templateWebPath',TemplateWebPath);


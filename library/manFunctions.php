<?php
function LoadPage($smarty, $ControllerName, $actionName = 'index')
{

    include_once PasthPrefix . $ControllerName . PastPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * @param $smarty
 * @param $templateName
 */
function loadTemplate ($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}

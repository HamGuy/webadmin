<?php
/**
 * controller: default page
 * create by lane
 * @2012-01-01
 */
$pageName = 'index';

/**----------------
 * include common files
 */
$incPath = dirname(__FILE__);
require_once "{$incPath}/inc/init.php";


/**----------------
 * controll logical code here
 */


/**----------------
 * config title, description, keywords
*/
$pageTitle = '微信公众平台数据管理系统';
$pageDescription = '微信公众平台数据管理系统';
$pageKeywords = '通微信公众平台数据管理系统';

/**----------------
 * render views
 * layout and views
*/
$layoutName = 'main';
$viewGroup = 'default';
$viewName = 'index';

$layoutPath = "{$incPath}/views/layout/";
include_once "{$layoutPath}/{$layoutName}.php";

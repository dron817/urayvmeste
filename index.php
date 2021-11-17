<?php
function __autoload($class_name) {
	$filename = strtolower($class_name) . '.php';
	$file = site_path . 'classes' . DIRSEP . $filename;	
	//print_r(realpath(dirname(__FILE__));
	//$file = 'http:'. DIRSEP . DIRSEP .'89cargotaxi.mcdir.ru'. DIRSEP .'classes'. DIRSEP .'registry.php';
	if (file_exists($file) == false) {
			return false;
	}
	include ($file);
}

	
error_reporting (E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// Константы:
define ('DIRSEP', DIRECTORY_SEPARATOR);
// Узнаём путь до файлов сайта
$site_path = realpath(dirname(__FILE__) . DIRSEP . '..' . DIRSEP) . DIRSEP . 'urayvmeste' . DIRSEP; //TODO при переезде возможны ошибки с 'www'
//print_r($site_path);
define ('site_path', $site_path);
# Создаём регистратуру
$registry = new Registry;
$registry->set ('site_path', $site_path);
# Соединяемся с БД
$db = new db($registry);
$registry->set ('db', $db);
# Создаём объект шаблонов
$template = new Template($registry);
$registry->set ('template', $template);

# Создаём коннектор помощьников
$helpers = new helpers($registry);
$registry->set ('helpers', $helpers);
# Создаём коннектор просителей
$needs = new needs($registry);
$registry->set ('needs', $needs);
# Создаём коннектор организаций
$organizations = new organizations($registry);
$registry->set ('organizations', $organizations);
//functions
session_start();

if (isset($_POST["addHelper"])){
	$manage = new Manege ($registry);
	$r = $manage->addHelper();
	$manage->redirect($r);
}
elseif (isset($_POST["addNeed"])){
	$manage = new Manege ($registry);
	$r = $manage->addNeed();
	$manage->redirect($r);
}
elseif (isset($_POST["addOrganization"])){
	$manage = new Manege ($registry);
	$r = $manage->addOrganization();
//	$manage->redirect($r);
}


# Загружаем router
$router = new Router($registry);
$registry->set ('router', $router);
$router->setPath (site_path . 'controllers');
$router->delegate();
?>
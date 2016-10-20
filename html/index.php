<?php

$dir = '../views/';

require_once '../includes/helpers.php';

//Determine which page to render
if (isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = 'index';

//Render page
switch($page)
{
	case 'index':
		render($dir . 'templates/primary/header', array('title' => 'Programming Help | Free Programming Tutorials Online', 'css' => 'home'));
		render($dir . 'index');
		render($dir . 'templates/primary/footer');
		break;
	default:
		break;
}
?>
<?php
use Core\Auth\DBAuth;
define('ROOT', dirname(__DIR__)); // On indique que l'on veux le dossier parent de celui où on est
require ROOT.'/app/App.php'; // On fait appelle au fichier 'App.php' dans le dossier 'app'
App::load();

if(isset($_GET['p'])){ // Si la variable 'p' est définie
	$page = $_GET['p']; // Alors on attribue à la variable 'page', la variable 'p'
}else{
	$page = 'home'; // Sinon 'page' est égale à 'home'
}


##################################
#        BOUTON CONNEXION        #
##################################

$app = App::getInstance();
$auth = new DBAuth($app->getDb());
if($auth->logged()){
    $connect = 'Deconnexion';
    $test = '<li><a href="admin.php">Administration</a></li>';
}else{
	$connect = 'Connexion';
	$test = '';
}

##################################

ob_start();

if($page === 'home'){ // Si la variable 'page' est égale à 'home'
	require ROOT.'/pages/posts/home.php'; // Alors on fait appelle au fichier 'home.php'
}elseif($page === 'posts.category'){ // Sinon si la variable 'page' est égale à 'posts.category'
	require ROOT.'/pages/posts/category.php'; // Alors on fait appelle au fichier 'category.php'
}elseif($page === 'posts.single'){ // Sinon si la variable 'page' est égale à 'posts.single'
	require ROOT.'/pages/posts/single.php'; // Alors on fait appelle au fichier 'single.php'
}elseif($page === 'Connexion'){
	require ROOT.'/pages/users/login.php'; // Connection zone admin
}elseif($page === 'Deconnexion'){
	require ROOT.'/pages/users/disconnect.php'; // Deconnection zone admin
}elseif($page === '403'){ // Erreur 403
	require ROOT.'/pages/errors/403.php';
}elseif($page === '404'){ // Erreur 404
	require ROOT.'/pages/errors/404.php';
}

$content = ob_get_clean(); // On décharge/supprime le cache
require ROOT.'/pages/templates/default.php'; // On charge le fichier template par défaut
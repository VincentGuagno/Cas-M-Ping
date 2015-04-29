<html>
<head>
</head>
<?php
	include_once('dependencies/twig/lib/Twig/Autoloader.php');
    Twig_Autoloader::register();
    
    $loader = new Twig_Loader_Filesystem('views/customers/templates'); // Template folders 
    $twig = new Twig_Environment($loader, array(
      'cache' => false
    ));
    $template = $twig->loadTemplate('display.tpl');
	
	$customers[0]->renting_Id = 13;
	$customers[0]->firstName = 'Liechti';
	$customers[0]->lastName = 'Jeremie';
	$customers[0]->zipCode = '12000';
	$customers[0]->city = 'Rodez';
	$customers[0]->telephone = 'chatte';

	$customers[1]->renting_Id = 14;
	$customers[1]->firstName = 'Guagno';
	$customers[1]->lastName = 'Vincent';
	$customers[1]->zipCode = '12000';
	$customers[1]->city = 'Rodez';
	$customers[1]->telephone = 'AAAAAAAAAAAAAiiiiiiiiiiiiiiiiiigggggggggggghhhhhhhhhhhhhhhhhht';
	
    echo $template->render(array('customers' => $customers));
?>
</html>
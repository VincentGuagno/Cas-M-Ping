<?php
	
	if (file_exists('conf_loader.php')) {
		require('conf_loader.php');
		
		try {
			$timeStart = microtime(true);
			
			Dispatcher::getInstance()->dispatch();
			
			$timeEnd = microtime(true);
			$globalTime = $timeEnd - $timeStart;
			echo 'Script executé en '.number_format($globalTime, 3) .'s';
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	} else {
		echo 'Le fichier de chargement de configuration "conf_loader" n\'existe pas!';
	}
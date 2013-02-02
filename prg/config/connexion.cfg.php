<?php 
				
/**
 * Projet : gestassophp_sa [GestAssoPhp+Pg]
 *  Directory :  /ROOT_DIR_GESTASSO/config/
 *  Fichier : config.cfg.php
 *  Page connexion - configuation   
 * @author : JC Etiemble - http://jc.etiemble.free.fr
 * @version :  2013
 * @copyright 2007-2013  (c) JC Etiemble
 * @package   GestAssoPhp+Pg
 */


// Définition de la base de données - Paramètres de connexion	
			
define("TYPE_BD", "mysql"); //Type de la BD			
define("NOMUTILISATEUR_BD", "root"); //Nom d'utilisateur de la BD
define("MOTPASSE_BD", ""); // Mot de passe de la BD
define("SERVEUR_BD", "localhost"); // Serveur de la BD
define("NOM_BD", "gestasssosimpl"); // Nom de la BD

//define("DB_PREFIX", "gs0_"); // Modifiable pour la bases de donnée test cele de gestasso site Master
define("DB_PREFIX", "gsa1_"); // Modifiable pour la bases de donnée  avec autobus mod UTF8  Branche Version future

?>
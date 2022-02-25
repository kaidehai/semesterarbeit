<?php
/**
 * Plugin Name:       Mandatsverwaltung
 * Description:       Kundenverwaltung
 * Version:           1.1.1
 * Requires PHP:      7.2
 * Author:            Kai Fuchs
 * Author URI:        https://webdesignthurgau.ch
 */

$sname= "localhost";
$unmae= "wp_Admin";
$password = "FYP2PFWSzS45dbS1";

$db_name = "sa_wordpress";

$conn = mysqli_connect($user_name, $unmae, $password, $db_name, $uname);

if (!$conn) {
	echo "Connection failed!";
}

$sql = "CREATE TABLE `users` if not exists ( 
  `id` INT NOT NULL AUTO_INCREMENT ,
  'user_name' VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL ,
  `uname` VARCHAR(255)'' ,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4_unicode_ci COLLATE=utf8_unicode_ci";

$sql = "CREATE TABLE `costumer` if not exists ( 
  `id` INT NOT NULL AUTO_INCREMENT ,
  'kundenname' VARCHAR(100) NOT NULL,
  `fristen` datetime ,
  `arbeiten` ('Buchhaltung', 'Lohnbuchhaltung','Steuern', 'Beratung') ,
  `Mitarbeiter` ('Herbert', 'Kai','Franz', 'Daniel') ,
  `status` ('Offen', 'In Bearbeitung','Erledigt') ,
  `note` text ,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4_unicode_ci COLLATE=utf8_unicode_ci";


if ($conn->query($sql) === TRUE) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$conn->close();
?>

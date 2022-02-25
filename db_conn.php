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
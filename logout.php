<?php 
/**
 * Plugin Name:       Mandatsverwaltung
 * Description:       Kundenverwaltung
 * Version:           1.1.1
 * Requires PHP:      7.2
 * Author:            Kai Fuchs
 * Author URI:        https://webdesignthurgau.ch
 */
session_start();

session_unset();
session_destroy();

header("Location: index.php");
?>
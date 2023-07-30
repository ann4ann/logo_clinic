<?php
require_once dirname(__FILE__, 1) . '/dbConfig.php';

$page = 3;
$checkUps = $db->query("SELECT * FROM `checkups`")->fetchAll(PDO::FETCH_ASSOC);
$checkUp = $db->query("SELECT * FROM `checkups` LIMIT $page, 1")->fetchAll(PDO::FETCH_ASSOC)[0];
$checkUpCount = $db->query("SELECT count(*) FROM `checkups`")->fetchColumn();

?>

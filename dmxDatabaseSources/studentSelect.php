<?php
$base = realpath(dirname(__FILE__)) . '/';
require($base.'../dmxConnections/designsuu.php');
require_once($base.'../ScriptLibrary/dmxDatabaseConnector/sqlBuilder.php');
require_once($base.'../ScriptLibrary/dmxDatabaseConnector/adapters/mysql/sqlBuilder.php');

$cfg = <<<JSON
{"type": "select", "table": "students", "columns": [], "wheres": [], "orders": [], "joins": []}
JSON;

$conn = new SqlConnection();
$conn->execute(SqlBuilder($cfg), TRUE);
?>
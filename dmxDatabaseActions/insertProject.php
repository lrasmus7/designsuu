<?php
$base = realpath(dirname(__FILE__)) . '/';
require($base.'../dmxConnections/designsuu.php');
require_once($base.'../ScriptLibrary/dmxDatabaseConnector/sqlBuilder.php');
require_once($base.'../ScriptLibrary/dmxDatabaseConnector/adapters/mysql/sqlBuilder.php');
require_once($base.'../ScriptLibrary/dmxDatabaseConnector/sqlBuilderEx.php');

$cfg = <<<JSON
{"type": "insert", "table": "projects", "values": [{"table": "projects", "column": "projectNum", "value": {"from": "form", "value": "projectNum", "required": false, "default": ""}}, {"table": "projects", "column": "projectFilename", "value": {"from": "form", "value": "projectFilename", "required": false, "default": ""}}, {"table": "projects", "column": "projectURL", "value": {"from": "form", "value": "projectURL", "required": false, "default": ""}}, {"table": "projects", "column": "studentID", "value": {"from": "form", "value": "studentID", "required": false, "default": ""}}], "wheres": []}
JSON;

$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

$conn = new SqlConnectionEx();
$conn->execute(SqlBuilderEx($cfg), $isAjax);

if (!$isAjax) {
	header('Location: ' . (isset($_GET['redirectUrl']) ? $_GET['redirectUrl'] : $_SERVER['HTTP_REFERER']));
}
?>
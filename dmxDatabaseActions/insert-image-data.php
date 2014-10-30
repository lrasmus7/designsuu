<?php
$base = realpath(dirname(__FILE__)) . '/';
require($base.'../dmxConnections/designsuu.php');
require_once($base.'../ScriptLibrary/dmxDatabaseConnector/sqlBuilder.php');
require_once($base.'../ScriptLibrary/dmxDatabaseConnector/adapters/mysql/sqlBuilder.php');
require_once($base.'../ScriptLibrary/dmxDatabaseConnector/sqlBuilderEx.php');

$cfg = <<<JSON
{"type": "insert", "table": "images", "values": [{"table": "images", "column": "filename", "value": {"from": "form", "value": "filename", "required": false, "default": ""}}, {"table": "images", "column": "link", "value": {"from": "form", "value": "link", "required": false, "default": ""}}, {"table": "images", "column": "projectID", "value": {"from": "form", "value": "projectID", "required": false, "default": ""}}, {"table": "images", "column": "studentID", "value": {"from": "form", "value": "studentID", "required": false, "default": ""}}, {"table": "images", "column": "courseID", "value": {"from": "form", "value": "courseID", "required": false, "default": ""}}], "wheres": []}
JSON;

$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

$conn = new SqlConnectionEx();
$conn->execute(SqlBuilderEx($cfg), $isAjax);

if (!$isAjax) {
	header('Location: ' . (isset($_GET['redirectUrl']) ? $_GET['redirectUrl'] : $_SERVER['HTTP_REFERER']));
}
?>
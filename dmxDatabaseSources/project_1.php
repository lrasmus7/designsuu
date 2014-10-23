<?php
$base = realpath(dirname(__FILE__)) . '/';
require($base.'../dmxConnections/designsuu.php');
require_once($base.'../ScriptLibrary/dmxDatabaseConnector/sqlBuilder.php');
require_once($base.'../ScriptLibrary/dmxDatabaseConnector/adapters/mysql/sqlBuilder.php');

$cfg = <<<JSON
{"type": "select", "table": "images", "columns": [{"table": "images", "column": "*", "alias": "", "sortable": false}, {"table": "course", "column": "*", "alias": "", "sortable": false}, {"table": "projects", "column": "*", "alias": "", "sortable": false}], "wheres": [{"table": "course", "column": "id", "bool": "and", "operator": "=", "value": {"from": "url", "value": "id", "required": true, "default": ""}}, {"table": "projects", "column": "id", "bool": "and", "operator": "=", "value": "1"}], "orders": [], "joins": [{"type": "inner", "table": "projects", "clauses": [{"table": "projects", "column": "id", "bool": "and", "operator": "=", "value": {"table": "images", "column": "projectID"}}]}, {"type": "inner", "table": "course", "clauses": [{"table": "course", "column": "id", "bool": "and", "operator": "=", "value": {"table": "images", "column": "courseID"}}]}]}
JSON;

$conn = new SqlConnection();
$conn->execute(SqlBuilder($cfg), TRUE);
?>
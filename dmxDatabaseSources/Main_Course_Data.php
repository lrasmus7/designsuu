<?php
$base = realpath(dirname(__FILE__)) . '/';
require($base.'../dmxConnections/designsuu.php');
require_once($base.'../ScriptLibrary/dmxDatabaseConnector/sqlBuilder.php');
require_once($base.'../ScriptLibrary/dmxDatabaseConnector/adapters/mysql/sqlBuilder.php');

$cfg = <<<JSON
{"type": "select", "table": "course_season_year", "columns": [{"table": "course_season_year", "column": "*", "alias": "", "sortable": false}, {"table": "course", "column": "*", "alias": "", "sortable": false}, {"table": "season", "column": "*", "alias": "", "sortable": false}, {"table": "year", "column": "*", "alias": "", "sortable": false}, {"table": "instructor", "column": "*", "alias": "", "sortable": false}], "wheres": [{"table": "course", "column": "id", "bool": "and", "operator": "=", "value": {"from": "url", "value": "id", "required": true, "default": ""}}], "orders": [], "joins": [{"type": "inner", "table": "course", "clauses": [{"table": "course", "column": "id", "bool": "and", "operator": "=", "value": {"table": "course_season_year", "column": "courseID"}}]}, {"type": "inner", "table": "season", "clauses": [{"table": "season", "column": "id", "bool": "and", "operator": "=", "value": {"table": "course_season_year", "column": "seasonID"}}]}, {"type": "inner", "table": "year", "clauses": [{"table": "year", "column": "id", "bool": "and", "operator": "=", "value": {"table": "course_season_year", "column": "yearID"}}]}, {"type": "inner", "table": "instructor", "clauses": [{"table": "instructor", "column": "id", "bool": "and", "operator": "=", "value": {"table": "course_season_year", "column": "professorID"}}]}]}
JSON;

$conn = new SqlConnection();
$conn->execute(SqlBuilder($cfg), TRUE);
?>
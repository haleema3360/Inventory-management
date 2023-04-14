<?php
/**
 * This script is to list the comments in a nested order.
 */
use Phppot\DataSource;
require_once __DIR__ . '/DataSource.php';
$database = new DataSource();
$sql = "SELECT * FROM tbl_comment ORDER BY parent_comment_id desc, comment_id desc";
$result = $database->select($sql);
echo json_encode($result);
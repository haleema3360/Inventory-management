<?php 
// Database connection info 
$dbDetails = array( 
    'host' => 'localhost', 
    'user' => 'id20085752_users1', 
    'pass' => '0E%*7*/Y|=cu?>55', 
    'db'   => 'id20085752_users' 
); 
 
// DB table to use 
$table = 'users'; 
 
// Table's primary key 
$primaryKey = 'product_id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 'db' => 'product_id', 'dt' => 0 ), 
    array( 'db' => 'product_name',  'dt' => 1 ), 
    array( 'db' => 'materials_req',      'dt' => 2 ), 
    array( 'db' => 'quantity',     'dt' => 3 ), 
    array( 'db' => 'unit',    'dt' => 4 ), 
    array( 'db' => 'workbench_id',    'dt' => 5 ), 
    array( 
        'db'        => 'created', 
        'dt'        => 6, 
        'formatter' => function( $d, $row ) { 
            return date( 'jS M Y', strtotime($d)); 
        } 
    ), 
    array( 
        'db'        => 'status', 
        'dt'        => 7, 
        'formatter' => function( $d, $row ) { 
            return ($d == 1)?'Active':'Inactive'; 
        } 
    ) 
); 
 
$searchFilter = array(); 
if(!empty($_GET['search_keywords'])){ 
    $searchFilter['search'] = array( 
        'product_id' => $_GET['search_keywords'], 
        'product_name' => $_GET['search_keywords'], 
        'materials_req' => $_GET['search_keywords'], 
        'quantity' => $_GET['search_keywords'],
        'unit' => $_GET['search_keywords'],
        'workbench_id' => $_GET['search_keywords'],
    ); 
} 

 
// Include SQL query processing class 
require 'ssp.class.php'; 
 
// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns, $searchFilter ) 
);
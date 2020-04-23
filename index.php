<?php
$dbh = new PDO (
    'mysql: host=localhost;port:3306;dbname= Netland',
    'root',
    ''
);
echo 'connected to Netland';
echo $dbh -> query('select version()') -> fetchcolumn();

?>
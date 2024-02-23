<?php
/*This file is only used to establish a connection with the cms' database */

/*Connect to database*/

// Create an array with the information needed to establish the connection. This is a safer method.
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pwd'] = "";
$db['db_name'] = "cms";

/*Convert all data in the array into a constant with a foreach() loop. Reminder, syntax for declaring constant: define(NAME, value)*/
foreach ($db as $key => $value) {
    // Constants need to be in caps, loop converts each key into upper and defines as constant.
    define(strtoupper($key), $value);

}

// Ignore undefined constant warning, loop works properly and connects to database.
$connection = (mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME ));

/*Check connection status*/
/*if(!isset($connection)) {
    echo "Error connecting to database";
} else {
    echo "YOU ARE CONNECTED DUMMY HAHAHAHA";
}*/

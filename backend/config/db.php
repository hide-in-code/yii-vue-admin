<?php

return [
    'db' => [
        'class'    => 'yii\db\Connection',
        'dsn'      => 'mysql:host=db;dbname=train',
        'username' => 'root',
        'password' => 'root',
        'charset'  => 'utf8',
        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ],
];

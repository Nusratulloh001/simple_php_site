<?php

class DB {
    private PDO $connection;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=simple_site';
        $this -> connection = new PDO($dsn, 'root', '1234', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,        
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]);
    }
    
    public function query (string $query, array $params = []) : object 
    {
        $statement = $this -> connection -> prepare($query);
        $statement -> execute($params);
        return $statement;
    }
}
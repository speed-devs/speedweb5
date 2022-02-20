<?php

class m0001_users
{

    public function up()
    {
        $db = \speedweb\core\Application::$application->db;
        $sql = "CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
        ) ENGINE=INNODB;";
        $db->pdo->exec($sql);
    }

    public function down()
    {
        $db = \speedweb\core\Application::$application->db;
        $sql = "DROP TABLE users";
        $db->pdo->exec($sql);
    }
}
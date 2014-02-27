<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class DoctrineMigrationsTemplate extends AbstractMigration
{//Tue Nov 26 11:17:51 2013

    public function up(Schema $schema)
    {
        if ($this->connection->getDatabasePlatform()->getName() === "postgresql") {
            
        } else if ($this->connection->getDatabasePlatform()->getName() === "oracle") {
            
        } else if ($this->connection->getDatabasePlatform()->getName() === "mysql") {
            
        } else if ($this->connection->getDatabasePlatform()->getName() === "sqlite") {
            $this->abortIf(true,
                'The database type "sqlite" isn\'t supported (missing ALTER TABLE statement).');
        } else {
            $this->abortIf(true,
                'The database type "' . $this->connection->getDatabasePlatform()->getName() . " isn't supoorted.");
        }
    }

    public function down(Schema $schema)
    {
        if ($this->connection->getDatabasePlatform()->getName() === "postgresql") {
            
        } else if ($this->connection->getDatabasePlatform()->getName() === "oracle") {
            
        } else if ($this->connection->getDatabasePlatform()->getName() === "mysql") {
            
        } else if ($this->connection->getDatabasePlatform()->getName() === "sqlite") {
            $this->abortIf(true,
                'The database type "sqlite" isn\'t supported (missing ALTER TABLE statement).');
        } else {
            $this->abortIf(true,
                'The database type "' . $this->connection->getDatabasePlatform()->getName() . " isn't supoorted.");
        }
    }

}

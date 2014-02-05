<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version3_0_2_0_20140205145513 extends AbstractMigration
{

    public function up(Schema $schema)
    {
        if ($this->connection->getDatabasePlatform()->getName() === "postgresql") {
            $this->addSql("CREATE SEQUENCE mb_core_regionproperties_id_seq INCREMENT BY 1 MINVALUE 1 START 1");
            $this->addSql("CREATE TABLE mb_core_regionproperties (id INT NOT NULL, application_id INT DEFAULT NULL, name VARCHAR(128) NOT NULL, properties TEXT DEFAULT NULL, PRIMARY KEY(id))");
            $this->addSql("CREATE INDEX IDX_A9299ACF3E030ACD ON mb_core_regionproperties (application_id)");
            $this->addSql("COMMENT ON COLUMN mb_core_regionproperties.properties IS '(DC2Type:array)'");
            $this->addSql("ALTER TABLE mb_core_regionproperties ADD CONSTRAINT FK_A9299ACF3E030ACD FOREIGN KEY (application_id) REFERENCES mb_core_application (id) NOT DEFERRABLE INITIALLY IMMEDIATE");
        } else if ($this->connection->getDatabasePlatform()->getName() === "oracle") {
            $this->addSql("CREATE SEQUENCE mb_core_regionproperties_id_se START WITH 1 MINVALUE 1 INCREMENT BY 1");
            $this->addSql("CREATE TABLE mb_core_regionproperties (id NUMBER(10) NOT NULL, application_id NUMBER(10) DEFAULT NULL, name VARCHAR2(128) NOT NULL, properties CLOB DEFAULT NULL, PRIMARY KEY(id))");
            $this->addSql("CREATE INDEX IDX_A9299ACF3E030ACD ON mb_core_regionproperties (application_id)");
            $this->addSql("COMMENT ON COLUMN mb_core_regionproperties.properties IS '(DC2Type:array)'");
            $this->addSql("ALTER TABLE mb_core_regionproperties ADD CONSTRAINT FK_A9299ACF3E030ACD FOREIGN KEY (application_id) REFERENCES mb_core_application (id)");
        } else if ($this->connection->getDatabasePlatform()->getName() === "mysql") {
            $this->addSql("CREATE TABLE mb_core_regionproperties (id INT AUTO_INCREMENT NOT NULL,"
                . "application_id INT DEFAULT NULL,"
                . "name VARCHAR(128) NOT NULL,"
                . "properties LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)',"
                . "INDEX IDX_A9299ACF3E030ACD (application_id),"
                . "PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
            $this->addSql("ALTER TABLE mb_core_regionproperties ADD CONSTRAINT FK_A9299ACF3E030ACD FOREIGN KEY (application_id) REFERENCES mb_core_application (id)");
        } else {
            $this->abortIf(true,
                'The database type "' . $this->connection->getDatabasePlatform()->getName() . " isn't supoorted.");
        }
    }

    public function down(Schema $schema)
    {
        if ($this->connection->getDatabasePlatform()->getName() === "postgresql") {
            $this->addSql("DROP SEQUENCE mb_core_regionproperties_id_seq CASCADE");
            $this->addSql("DROP TABLE mb_core_regionproperties");
        } else if ($this->connection->getDatabasePlatform()->getName() === "oracle") {
            $this->addSql("DROP SEQUENCE mb_core_regionproperties_id_se");
            $this->addSql("DROP TABLE mb_core_regionproperties");
        } else if ($this->connection->getDatabasePlatform()->getName() === "mysql") {
            $this->addSql("DROP TABLE mb_core_regionproperties");
        } else {
            $this->abortIf(true,
                'The database type "' . $this->connection->getDatabasePlatform()->getName() . " isn't supoorted.");
        }
    }

}

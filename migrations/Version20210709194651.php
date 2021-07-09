<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210709194651 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('
                CREATE TABLE sessions (
                 sess_id int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
                 sess_data BLOB NOT NULL,
                 sess_lifetime int(100) unsigned NOT NULL,
                 sess_time int(100) unsigned NOT NULL
                ) 
            ');
    }

    public function down(Schema $schema): void
    {
    }
}

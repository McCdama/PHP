<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210708092258 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'The description of my awesome migration!';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->write('Doing some cool migration!');
        $this->skipIf(true, 'Skipping this migration.');
        //$this->warnIf(true, 'Something might be going wrong');
        //$this->abortIf(true, 'Something went wrong. Aborting.');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        // I'll drop the table here .. Warning 
        //$this->addSql('DROP TABLE product'); // php bin/console doctrine:migrations:execute 'DoctrineMigrations\Version20210708092258' --down
        // ich bin soo goooood :=)
    }
}

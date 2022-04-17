<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220417005637 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire CHANGE id_guest id_guest INT NOT NULL, CHANGE id_even id_even INT NOT NULL, CHANGE nom nom VARCHAR(100) NOT NULL, CHANGE comment comment VARCHAR(255) NOT NULL, CHANGE date_com date_com DATETIME DEFAULT NULL, CHANGE note note INT NOT NULL');
        $this->addSql('ALTER TABLE evenement ADD photo VARCHAR(255) DEFAULT NULL, CHANGE prix prix INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire CHANGE id_guest id_guest INT DEFAULT NULL, CHANGE id_even id_even INT DEFAULT NULL, CHANGE nom nom VARCHAR(100) DEFAULT NULL, CHANGE comment comment VARCHAR(255) DEFAULT NULL, CHANGE date_com date_com DATE DEFAULT NULL, CHANGE note note INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement DROP photo, CHANGE prix prix INT NOT NULL');
    }
}

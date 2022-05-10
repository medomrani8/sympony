<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220504083819 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE foot (idMatchh INT AUTO_INCREMENT NOT NULL, typeMatchh VARCHAR(255) NOT NULL, dateMatchh VARCHAR(30) NOT NULL, idArb INT NOT NULL, PRIMARY KEY(idMatchh)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE `match`');
        $this->addSql('ALTER TABLE arbitre_match CHANGE nomArb nomArb VARCHAR(30) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `match` (idMatchh INT AUTO_INCREMENT NOT NULL, typeMatchh VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, dateMatchh DATE NOT NULL, idArb INT NOT NULL, PRIMARY KEY(idMatchh)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE foot');
        $this->addSql('ALTER TABLE arbitre_match CHANGE nomArb nomArb VARCHAR(255) NOT NULL');
    }
}

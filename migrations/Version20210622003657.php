<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210622003657 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE planning_entrainement (id INT AUTO_INCREMENT NOT NULL, equipe VARCHAR(20) NOT NULL, nbr_joueurs VARCHAR(2) NOT NULL, stade VARCHAR(20) NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, commentaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning_match (id INT AUTO_INCREMENT NOT NULL, equipe1 VARCHAR(20) NOT NULL, equipe2 VARCHAR(20) NOT NULL, stade VARCHAR(20) NOT NULL, type VARCHAR(20) NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, adversaire VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning_test (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(20) NOT NULL, type VARCHAR(20) NOT NULL, lieu VARCHAR(20) NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE planning_entrainement');
        $this->addSql('DROP TABLE planning_match');
        $this->addSql('DROP TABLE planning_test');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210725191121 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, niveau VARCHAR(255) DEFAULT NULL, entraineur VARCHAR(255) DEFAULT NULL, medecin VARCHAR(255) DEFAULT NULL, joueurs VARCHAR(255) DEFAULT NULL, log VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE events (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, nbrequipe INT NOT NULL, nbrparticipants INT NOT NULL, datedebut VARCHAR(255) NOT NULL, datefin VARCHAR(255) NOT NULL, datelimite VARCHAR(255) NOT NULL, categories VARCHAR(255) NOT NULL, likes INT NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matcch (id INT AUTO_INCREMENT NOT NULL, equipe VARCHAR(255) DEFAULT NULL, stade VARCHAR(255) DEFAULT NULL, date DATE DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, res VARCHAR(255) DEFAULT NULL, adversaire VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning_entrainement (id INT AUTO_INCREMENT NOT NULL, equipe VARCHAR(20) NOT NULL, nbr_joueurs VARCHAR(2) NOT NULL, stade VARCHAR(20) NOT NULL, date VARCHAR(255) NOT NULL, heure VARCHAR(255) NOT NULL, commentaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning_match (id INT AUTO_INCREMENT NOT NULL, equipe1 VARCHAR(20) NOT NULL, equipe2 VARCHAR(20) NOT NULL, stade VARCHAR(20) NOT NULL, type VARCHAR(20) NOT NULL, date VARCHAR(255) NOT NULL, heure VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning_test (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(20) NOT NULL, type VARCHAR(20) NOT NULL, lieu VARCHAR(20) NOT NULL, date VARCHAR(255) NOT NULL, heure VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, string VARCHAR(255) NOT NULL, nationalite VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, etat_civil VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE events');
        $this->addSql('DROP TABLE matcch');
        $this->addSql('DROP TABLE planning_entrainement');
        $this->addSql('DROP TABLE planning_match');
        $this->addSql('DROP TABLE planning_test');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE `user`');
    }
}

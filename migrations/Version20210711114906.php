<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210711114906 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE events ADD id INT AUTO_INCREMENT NOT NULL, ADD nom VARCHAR(255) NOT NULL, ADD lieu VARCHAR(255) NOT NULL, ADD nbrequipe INT NOT NULL, ADD nbrparticipants INT NOT NULL, ADD datedebut VARCHAR(255) NOT NULL, ADD datefin VARCHAR(255) NOT NULL, ADD datelimite VARCHAR(255) NOT NULL, ADD categories VARCHAR(255) NOT NULL, CHANGE likes likes INT NOT NULL, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE events MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE events DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE events DROP id, DROP nom, DROP lieu, DROP nbrequipe, DROP nbrparticipants, DROP datedebut, DROP datefin, DROP datelimite, DROP categories, CHANGE likes likes INT DEFAULT 0 NOT NULL');
    }
}

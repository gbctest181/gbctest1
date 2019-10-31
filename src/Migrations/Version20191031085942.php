<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191031085942 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE client_intervention ADD fk_client_final_id INT NOT NULL');
        $this->addSql('ALTER TABLE client_intervention ADD CONSTRAINT FK_6012B6AAE4917FDD FOREIGN KEY (fk_client_final_id) REFERENCES client_final (id)');
        $this->addSql('CREATE INDEX IDX_6012B6AAE4917FDD ON client_intervention (fk_client_final_id)');
        $this->addSql('ALTER TABLE formation ADD formation_id INT NOT NULL');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF5200282E FOREIGN KEY (formation_id) REFERENCES client_intervention (id)');
        $this->addSql('CREATE INDEX IDX_404021BF5200282E ON formation (formation_id)');
        $this->addSql('ALTER TABLE proces_verbal ADD proces_verbal_id INT NOT NULL');
        $this->addSql('ALTER TABLE proces_verbal ADD CONSTRAINT FK_5B95250B2829DA6 FOREIGN KEY (proces_verbal_id) REFERENCES client_intervention (id)');
        $this->addSql('CREATE INDEX IDX_5B95250B2829DA6 ON proces_verbal (proces_verbal_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE client_intervention DROP FOREIGN KEY FK_6012B6AAE4917FDD');
        $this->addSql('DROP INDEX IDX_6012B6AAE4917FDD ON client_intervention');
        $this->addSql('ALTER TABLE client_intervention DROP fk_client_final_id');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BF5200282E');
        $this->addSql('DROP INDEX IDX_404021BF5200282E ON formation');
        $this->addSql('ALTER TABLE formation DROP formation_id');
        $this->addSql('ALTER TABLE proces_verbal DROP FOREIGN KEY FK_5B95250B2829DA6');
        $this->addSql('DROP INDEX IDX_5B95250B2829DA6 ON proces_verbal');
        $this->addSql('ALTER TABLE proces_verbal DROP proces_verbal_id');
    }
}

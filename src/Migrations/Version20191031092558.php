<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191031092558 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE alimentation ADD materiel_ve_id INT NOT NULL');
        $this->addSql('ALTER TABLE alimentation ADD CONSTRAINT FK_8E65DFA0F7E55BD5 FOREIGN KEY (materiel_ve_id) REFERENCES materiel_ve (id)');
        $this->addSql('CREATE INDEX IDX_8E65DFA0F7E55BD5 ON alimentation (materiel_ve_id)');
        $this->addSql('ALTER TABLE formation ADD formation_id INT NOT NULL');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF5200282E FOREIGN KEY (formation_id) REFERENCES client_intervention (id)');
        $this->addSql('CREATE INDEX IDX_404021BF5200282E ON formation (formation_id)');
        $this->addSql('ALTER TABLE intervention ADD fk_client_intervention_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814ABF217B6D1 FOREIGN KEY (fk_client_intervention_id) REFERENCES client_intervention (id)');
        $this->addSql('CREATE INDEX IDX_D11814ABF217B6D1 ON intervention (fk_client_intervention_id)');
        $this->addSql('ALTER TABLE materiel_bi ADD intervention_id INT NOT NULL');
        $this->addSql('ALTER TABLE materiel_bi ADD CONSTRAINT FK_8BCDAFD98EAE3863 FOREIGN KEY (intervention_id) REFERENCES intervention (id)');
        $this->addSql('CREATE INDEX IDX_8BCDAFD98EAE3863 ON materiel_bi (intervention_id)');
        $this->addSql('ALTER TABLE materiel_ve ADD intervention_id INT NOT NULL');
        $this->addSql('ALTER TABLE materiel_ve ADD CONSTRAINT FK_ACD534A78EAE3863 FOREIGN KEY (intervention_id) REFERENCES intervention (id)');
        $this->addSql('CREATE INDEX IDX_ACD534A78EAE3863 ON materiel_ve (intervention_id)');
        $this->addSql('ALTER TABLE piece_bi ADD materiel_bi_id INT NOT NULL');
        $this->addSql('ALTER TABLE piece_bi ADD CONSTRAINT FK_594A6ADE2853D52F FOREIGN KEY (materiel_bi_id) REFERENCES materiel_bi (id)');
        $this->addSql('CREATE INDEX IDX_594A6ADE2853D52F ON piece_bi (materiel_bi_id)');
        $this->addSql('ALTER TABLE piece_ve ADD materiel_ve_id INT NOT NULL');
        $this->addSql('ALTER TABLE piece_ve ADD CONSTRAINT FK_7E52F1A0F7E55BD5 FOREIGN KEY (materiel_ve_id) REFERENCES materiel_ve (id)');
        $this->addSql('CREATE INDEX IDX_7E52F1A0F7E55BD5 ON piece_ve (materiel_ve_id)');
        $this->addSql('ALTER TABLE proces_verbal ADD proces_verbal_id INT NOT NULL');
        $this->addSql('ALTER TABLE proces_verbal ADD CONSTRAINT FK_5B95250B2829DA6 FOREIGN KEY (proces_verbal_id) REFERENCES client_intervention (id)');
        $this->addSql('CREATE INDEX IDX_5B95250B2829DA6 ON proces_verbal (proces_verbal_id)');
        $this->addSql('ALTER TABLE technicien ADD intervention_id INT NOT NULL');
        $this->addSql('ALTER TABLE technicien ADD CONSTRAINT FK_96282C4C8EAE3863 FOREIGN KEY (intervention_id) REFERENCES intervention (id)');
        $this->addSql('CREATE INDEX IDX_96282C4C8EAE3863 ON technicien (intervention_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE alimentation DROP FOREIGN KEY FK_8E65DFA0F7E55BD5');
        $this->addSql('DROP INDEX IDX_8E65DFA0F7E55BD5 ON alimentation');
        $this->addSql('ALTER TABLE alimentation DROP materiel_ve_id');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BF5200282E');
        $this->addSql('DROP INDEX IDX_404021BF5200282E ON formation');
        $this->addSql('ALTER TABLE formation DROP formation_id');
        $this->addSql('ALTER TABLE intervention DROP FOREIGN KEY FK_D11814ABF217B6D1');
        $this->addSql('DROP INDEX IDX_D11814ABF217B6D1 ON intervention');
        $this->addSql('ALTER TABLE intervention DROP fk_client_intervention_id');
        $this->addSql('ALTER TABLE materiel_bi DROP FOREIGN KEY FK_8BCDAFD98EAE3863');
        $this->addSql('DROP INDEX IDX_8BCDAFD98EAE3863 ON materiel_bi');
        $this->addSql('ALTER TABLE materiel_bi DROP intervention_id');
        $this->addSql('ALTER TABLE materiel_ve DROP FOREIGN KEY FK_ACD534A78EAE3863');
        $this->addSql('DROP INDEX IDX_ACD534A78EAE3863 ON materiel_ve');
        $this->addSql('ALTER TABLE materiel_ve DROP intervention_id');
        $this->addSql('ALTER TABLE piece_bi DROP FOREIGN KEY FK_594A6ADE2853D52F');
        $this->addSql('DROP INDEX IDX_594A6ADE2853D52F ON piece_bi');
        $this->addSql('ALTER TABLE piece_bi DROP materiel_bi_id');
        $this->addSql('ALTER TABLE piece_ve DROP FOREIGN KEY FK_7E52F1A0F7E55BD5');
        $this->addSql('DROP INDEX IDX_7E52F1A0F7E55BD5 ON piece_ve');
        $this->addSql('ALTER TABLE piece_ve DROP materiel_ve_id');
        $this->addSql('ALTER TABLE proces_verbal DROP FOREIGN KEY FK_5B95250B2829DA6');
        $this->addSql('DROP INDEX IDX_5B95250B2829DA6 ON proces_verbal');
        $this->addSql('ALTER TABLE proces_verbal DROP proces_verbal_id');
        $this->addSql('ALTER TABLE technicien DROP FOREIGN KEY FK_96282C4C8EAE3863');
        $this->addSql('DROP INDEX IDX_96282C4C8EAE3863 ON technicien');
        $this->addSql('ALTER TABLE technicien DROP intervention_id');
    }
}

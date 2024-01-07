<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240106232026 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE workflow (id INT AUTO_INCREMENT NOT NULL, workflow_blueprint_id INT NOT NULL, start_date DATETIME DEFAULT NULL, complition_date DATETIME DEFAULT NULL, INDEX IDX_65C5981683BFF6BF (workflow_blueprint_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE workflow ADD CONSTRAINT FK_65C5981683BFF6BF FOREIGN KEY (workflow_blueprint_id) REFERENCES workflow_blueprint (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE workflow DROP FOREIGN KEY FK_65C5981683BFF6BF');
        $this->addSql('DROP TABLE workflow');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220907120756 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE data_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, unit VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, module_id INT NOT NULL, date DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', log VARCHAR(190) NOT NULL, INDEX IDX_3BAE0AA7AFC2B591 (module_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE history (id INT AUTO_INCREMENT NOT NULL, sensor_id INT NOT NULL, date DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', value DOUBLE PRECISION NOT NULL, INDEX IDX_27BA704BA247991F (sensor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE module (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, details VARCHAR(190) NOT NULL, is_on TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sensor (id INT AUTO_INCREMENT NOT NULL, data_type_id INT NOT NULL, module_id INT NOT NULL, value_min INT NOT NULL, value_max INT NOT NULL, INDEX IDX_BC8617B0A147DA62 (data_type_id), INDEX IDX_BC8617B0AFC2B591 (module_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7AFC2B591 FOREIGN KEY (module_id) REFERENCES module (id)');
        $this->addSql('ALTER TABLE history ADD CONSTRAINT FK_27BA704BA247991F FOREIGN KEY (sensor_id) REFERENCES sensor (id)');
        $this->addSql('ALTER TABLE sensor ADD CONSTRAINT FK_BC8617B0A147DA62 FOREIGN KEY (data_type_id) REFERENCES data_type (id)');
        $this->addSql('ALTER TABLE sensor ADD CONSTRAINT FK_BC8617B0AFC2B591 FOREIGN KEY (module_id) REFERENCES module (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7AFC2B591');
        $this->addSql('ALTER TABLE history DROP FOREIGN KEY FK_27BA704BA247991F');
        $this->addSql('ALTER TABLE sensor DROP FOREIGN KEY FK_BC8617B0A147DA62');
        $this->addSql('ALTER TABLE sensor DROP FOREIGN KEY FK_BC8617B0AFC2B591');
        $this->addSql('DROP TABLE data_type');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE history');
        $this->addSql('DROP TABLE module');
        $this->addSql('DROP TABLE sensor');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

CREATE TABLE `dados_exercicio` (
            `id` INT(11) NOT NULL AUTO_INCREMENT,
            `valor` VARCHAR(255) NOT NULL,
            PRIMARY KEY (`id`))
          ENGINE = InnoDB;
          
CREATE TABLE `resultado` (
            `id` INT(11) NOT NULL AUTO_INCREMENT,
            `tentativa` VARCHAR(255) NOT NULL,
            `correto` CHAR(1) NOT NULL,
            PRIMARY KEY (`id`))
          ENGINE = InnoDB;

-- Dados iniciais de apoio para exercicio
INSERT INTO `dados_exercicio` (`valor`) VALUES ('amigos');
INSERT INTO `dados_exercicio` (`valor`) VALUES ('todos');
INSERT INTO `dados_exercicio` (`valor`) VALUES ('meus');
INSERT INTO `dados_exercicio` (`valor`) VALUES ('bom');
INSERT INTO `dados_exercicio` (`valor`) VALUES ('a');
INSERT INTO `dados_exercicio` (`valor`) VALUES ('dia');
INSERT INTO `dados_exercicio` (`valor`) VALUES ('programador');
INSERT INTO `dados_exercicio` (`valor`) VALUES ('asp');
INSERT INTO `dados_exercicio` (`valor`) VALUES ('.net');
INSERT INTO `dados_exercicio` (`valor`) VALUES ('java');
INSERT INTO `dados_exercicio` (`valor`) VALUES ('php7');

-- (Opcional) Exemplo de CRUD do CodeIgniter
CREATE TABLE `stud` (`roll_no` INT(11), `name` VARCHAR(30)) ENGINE = InnoDB;
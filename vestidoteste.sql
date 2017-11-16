create database vestidoteste;
CREATE TABLE `usuario` (
	`rg` INT(11) NULL DEFAULT NULL,
	`password` INT(11) NULL DEFAULT NULL
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;

INSERT INTO `vestidoteste`.`usuario` (`rg`, `password`) VALUES ('453545342', '4342');
SELECT `rg`, `password` FROM `vestidoteste`.`usuario` WHERE  `rg`=453545342 AND `password`=4342 LIMIT 1;
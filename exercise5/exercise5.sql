CREATE DATABASE `dbtuts` ;
CREATE TABLE `dbtuts`.`users` ( `user_id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY , 
`Name` VARCHAR( 25 ) NOT NULL , `Email` VARCHAR( 25 ) NOT NULL , 
`HomeAddress` VARCHAR( 45 ) NOT NULL,
`CellNo` INT( 11 ),
`Gender` VARCHAR( 45 ) NOT NULL, 
`Comment` VARCHAR( 45 )) ENGINE = InnoDB 
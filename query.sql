CREATE TABLE `hrm_physiotherapy_portal`.`admin` 
( `id` INT(11) NOT NULL AUTO_INCREMENT , `username` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `email` VARCHAR(50) NOT NULL , `phone_no` VARCHAR(11) NOT NULL , `created_at` DATETIME NULL , `created_by` VARCHAR(10) NOT NULL , `is_deleted` INT(1) NOT NULL DEFAULT '0' , `deleted_at` DATETIME NULL , `updated_at` DATETIME NULL , `updated_by` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;


ALTER TABLE `admin` ADD `role` INT(50) NOT NULL AFTER `updated_by`;

ALTER TABLE `payrolls` CHANGE `employee_id` `regno` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

CREATE TABLE `hrm_physiotherapy_portal`.`staff_leaves` ( `id` INT(11) NULL , `created_at` DATETIME NULL , `created_by` VARCHAR(50) NULL , `employee_id` VARCHAR(50) NOT NULL , `extra_leaves` INT(11) NOT NULL DEFAULT '0' , `half_day_leaves` INT(11) NOT NULL DEFAULT '0' , `full_day_leaves` INT(11) NOT NULL DEFAULT '0' , `total_leaves` INT(11) NOT NULL DEFAULT '0' ) ENGINE = MyISAM;

CREATE TABLE `hrm_physiotherapy_portal`.`leaves_count` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `leave_type` VARCHAR(50) NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

INSERT INTO `leaves_count` (`id`, `leave_type`) VALUES (NULL, 'medical_leaves'), (NULL, 'casual_leaves'), (NULL, 'earned_leaves')
ALTER TABLE `leaves_count` ADD `leaves` INT(50) NOT NULL AFTER `leave_type`;

RENAME TABLE `hrm_physiotherapy_portal`.`leaves_count` TO `hrm_physiotherapy_portal`.`leave_count`;

ALTER TABLE `staff_leaves` ADD `medical_leaves` INT(50) NOT NULL DEFAULT '0' AFTER `created_by`, ADD `casual_leaves` INT(50) NOT NULL DEFAULT '0' AFTER `medical_leaves`, ADD `earned_leaves` INT(50) NOT NULL DEFAULT '0' AFTER `casual_leaves`;


ALTER TABLE `staff_leaves` ADD `leave_id` INT(11) NULL AFTER `earned_leaves`;

ALTER TABLE `payrolls` ADD `is_deleted` INT(1) NOT NULL DEFAULT '0' AFTER `updated_at`;

CREATE TABLE `hrm_physiotherapy_portal`.`awards` ( `id` INT(50) NOT NULL , `recognise` VARCHAR(255) NOT NULL , `achievement` VARCHAR(255) NOT NULL , `prize` VARCHAR(255) NULL , `created_at` DATETIME NOT NULL , `status` INT(1) NOT NULL DEFAULT '1' ) ENGINE = MyISAM;
ALTER TABLE `awards` ADD `employee_id` INT(11) NOT NULL AFTER `status`;
ALTER TABLE `awards` CHANGE `recognise` `recognize` VARCHAR(255) NOT NULL;
ALTER TABLE `awards` CHANGE `employee_id` `employee_id` VARCHAR(50) NOT NULL;


CREATE TABLE `hrm_physiotherapy_portal`.`reg_prof_council` ( `id` INT NOT NULL AUTO_INCREMENT , `type_of_reg` VARCHAR(50) NOT NULL , `state_council` VARCHAR(50) NOT NULL , `renew_upto_date` DATE NULL , `regno` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;
ALTER TABLE `reg_prof_council` ADD `no` INT NOT NULL AFTER `state_council`;


// 5may 

CREATE TABLE `hrm_physiotherapy_portal`.`last_emp_details` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `sector` VARCHAR(50) NOT NULL , `duration` VARCHAR(50) NOT NULL , `designation` VARCHAR(255) NOT NULL , `reason_of_leave` VARCHAR(255) NOT NULL , `created_at` DATETIME NULL , `is_deleted` BIT(1) NOT NULL DEFAULT b'0' COMMENT '1- deleted , 0 -not deleted' , `updated_ay` DATETIME NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

ALTER TABLE `last_emp_details` ADD `regno` VARCHAR(50) NOT NULL AFTER `id`;

CREATE TABLE `hrm_physiotherapy_portal`.`present_emp_details` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `created_at` DATE NOT NULL , `updated_at` DATE NOT NULL , `regno` VARCHAR(50) NOT NULL , `date-of_joining` DATE NULL , `designation` VARCHAR(50) NOT NULL , `job_type` VARCHAR(50) NOT NULL , `appointment_no` VARCHAR(255) NOT NULL , `muhs_approval_no` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `hrm_physiotherapy_portal`.`prof_conference_attended` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `regno` VARCHAR(255) NOT NULL , `state_level` VARCHAR(50) NOT NULL , `national_level` VARCHAR(50) NOT NULL , `international_level` VARCHAR(50) NOT NULL , `created_at` DATE NULL , `updated_at` DATE NULL , `is_deleted` BIT(1) NOT NULL DEFAULT b'0' COMMENT '0- not deleted , 1 - deleted' , PRIMARY KEY (`id`)) ENGINE = MyISAM;
RENAME TABLE `hrm_physiotherapy_portal`.`prof_conference_attended` TO `hrm_physiotherapy_portal`.`proff_growths`;
ALTER TABLE `proff_growths` ADD `growth_type` VARCHAR(50) NOT NULL AFTER `regno`;
CREATE TABLE `hrm_physiotherapy_portal`.`research_conducted` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `regno` VARCHAR(50) NOT NULL , `first_author` VARCHAR(50) NOT NULL , `second_author` VARCHAR(50) NOT NULL , `third_author` VARCHAR(50) NOT NULL , `created_at` DATE NULL , `updated_at` DATE NULL , `is_deleted` BIT(1) NOT NULL DEFAULT b'0' COMMENT '1- deleted,0-not deleted' , PRIMARY KEY (`id`)) ENGINE = MyISAM;


CREATE TABLE `hrm_physiotherapy_portal`.`guided_student` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `regno` VARCHAR(50) NOT NULL , `undergraduate` VARCHAR(50) NOT NULL , `postgraduate` VARCHAR(50) NOT NULL , `phd` VARCHAR(50) NOT NULL , `created_at` DATE NULL , `updated_at` DATE NULL , `is_deleted` BIT(1) NOT NULL DEFAULT b'0' , PRIMARY KEY (`id`)) ENGINE = MyISAM;
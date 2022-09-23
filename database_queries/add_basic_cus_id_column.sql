 ALTER TABLE `customer_coat_size` ADD `cus_basic_id` INT NULL DEFAULT NULL AFTER `cus_id`;
 ALTER TABLE `customer_pant_size` ADD `cus_basic_id` INT NULL DEFAULT NULL AFTER `cus_id`;
 ALTER TABLE `customer_kmz_shl` ADD `cus_basic_id` INT NULL DEFAULT NULL AFTER `cus_id`;
 ALTER TABLE `geopos_invoices` ADD `cus_basic_id` INT NULL DEFAULT NULL AFTER `csd`;
 ALTER TABLE `geopos_stiching_items` ADD `cus_basic_id` INT NULL DEFAULT NULL AFTER `cus_id`;
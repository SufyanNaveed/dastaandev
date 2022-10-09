ALTER TABLE `customer_kmz_shl`
  ADD `is_design` tinyint(1) NOT NULL DEFAULT 0,
  ADD `is_kanta` tinyint(1) NOT NULL DEFAULT 0,
  ADD `is_stitch` tinyint(1) NOT NULL DEFAULT 0,
  ADD `is_thread` tinyint(1) NOT NULL DEFAULT 0,
  ADD `is_bookrum` tinyint(1) NOT NULL DEFAULT 0,
  ADD `collar_ins` varchar(255) DEFAULT NULL,
  ADD `front_pocket_ins` varchar(255) DEFAULT NULL,
  ADD `is_shirt_cuff` tinyint(4) NOT NULL DEFAULT 0,
  ADD `is_shirt_collar` tinyint(1) NOT NULL DEFAULT 0,
  ADD `is_shirt_collar_type` tinyint(1) NOT NULL DEFAULT 0,
  ADD `shirt_collar_ins` varchar(255) DEFAULT NULL,
  ADD `shalwar_pocket_ins` varchar(255) DEFAULT NULL
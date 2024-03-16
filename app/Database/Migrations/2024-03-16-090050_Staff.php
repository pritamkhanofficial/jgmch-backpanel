<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Staff extends Migration
{
    public function up()
    {
        $this->db->query("CREATE TABLE `staff` (
            `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            `department_id` bigint(20) unsigned DEFAULT NULL,
            `designation_id` bigint(20) unsigned DEFAULT NULL,
            `committee_id` bigint(20) unsigned DEFAULT NULL,
            `label` varchar(100) NOT NULL,
            `type` enum('TS','NTS') NOT NULL COMMENT 'TS for Teaching staff, NTS for Non-teaching staff',
            `description` text DEFAULT NULL,
            `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 for no 1 for yes',
            `created_at` datetime DEFAULT current_timestamp(),
            `created_by` bigint(20) unsigned NOT NULL,
            `updated_at` datetime DEFAULT NULL,
            `updated_by` bigint(20) unsigned DEFAULT NULL,
            `deleted_at` datetime DEFAULT NULL,
            PRIMARY KEY (`id`),
            KEY `fk_staff_department_id` (`department_id`),
            KEY `fk_staff_designation_id` (`designation_id`),
            CONSTRAINT `fk_staff_department_id` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
            CONSTRAINT `fk_staff_designation_id` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
            CONSTRAINT `fk_staff_committee_id` FOREIGN KEY (`committee_id`) REFERENCES `committee` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");
    }

    public function down()
    {
        $this->forge->dropTable('staff', true);
    }
}

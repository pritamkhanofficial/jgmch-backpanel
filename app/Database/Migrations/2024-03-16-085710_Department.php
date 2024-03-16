<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Department extends Migration
{
    public function up()
    {
        $this->db->query("CREATE TABLE `department` (
            `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            `label` varchar(100) NOT NULL,
            `image` varchar(100) DEFAULT NULL,
            `description` text DEFAULT NULL,
            `type` enum('PRECLINICAL','PARACLINICAL','CLINICAL') NOT NULL,
            `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 for no 1 for yes',
            `title_1` varchar(255) DEFAULT NULL,
            `file_1` varchar(255) DEFAULT NULL,
            `title_2` varchar(255) DEFAULT NULL,
            `file_2` varchar(255) DEFAULT NULL,
            `title_3` varchar(255) DEFAULT NULL,
            `file_3` varchar(255) DEFAULT NULL,
            `file_4` varchar(255) DEFAULT NULL,
            `title_4` varchar(255) DEFAULT NULL,
            `title_5` varchar(255) DEFAULT NULL,
            `file_5` varchar(255) DEFAULT NULL,
            `title_6` varchar(255) DEFAULT NULL,
            `file_6` varchar(255) DEFAULT NULL,
            `title_7` varchar(255) DEFAULT NULL,
            `file_7` varchar(255) DEFAULT NULL,
            `title_8` varchar(255) DEFAULT NULL,
            `file_8` varchar(255) DEFAULT NULL,
            `created_at` datetime DEFAULT current_timestamp(),
            `created_by` bigint(20) unsigned NOT NULL,
            `updated_at` datetime DEFAULT NULL,
            `updated_by` bigint(20) unsigned DEFAULT NULL,
            `deleted_at` datetime DEFAULT NULL,
            PRIMARY KEY (`id`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");
    }

    public function down()
    {
        $this->forge->dropTable('department', true);
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ContentTable extends Migration
{
    public function up()
    {
        $this->db->query("CREATE TABLE IF NOT EXISTS `content` (
            `id` bigint(20) NOT NULL AUTO_INCREMENT,
            `page_type` tinyint(4) NOT NULL COMMENT '1 for Administrative staff\r\n2 for OPD SCHEDULE\r\n3 for Check List\r\n4 for Admission Fees',
            `banner` varchar(255) DEFAULT NULL,
            `content` longtext NOT NULL,
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
            `created_at` datetime NOT NULL DEFAULT current_timestamp(),
            `created_by` bigint(20) NOT NULL,
            `updated_at` datetime DEFAULT NULL,
            `updated_by` bigint(20) DEFAULT NULL,
            PRIMARY KEY (`id`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci");
    }

    public function down()
    {
        $this->forge->dropTable('content', true);
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PageTable extends Migration
{
    public function up()
    {
        $this->db->query("CREATE TABLE `page` (
            `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
            `label` varchar(255) NOT NULL,
            `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 for no 1 for yes',
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
        $this->forge->dropTable('page', true);
    }
}

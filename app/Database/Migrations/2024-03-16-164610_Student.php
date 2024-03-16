<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Student extends Migration
{
    public function up()
    {
        $this->db->query("CREATE TABLE `student` (
            `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            `department_id` bigint(20) unsigned DEFAULT NULL,
            `label` varchar(100) NOT NULL,
            `gender` enum('male','female','others') DEFAULT NULL,
            `physically_handicapped` enum('YES','NO') NOT NULL DEFAULT 'NO',
            `DOB` date DEFAULT NULL,
            `year_of_admission` year(4) DEFAULT NULL,
            `description` text DEFAULT NULL,
            `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 for no 1 for yes',
            `created_at` datetime DEFAULT current_timestamp(),
            `created_by` bigint(20) unsigned NOT NULL,
            `updated_at` datetime DEFAULT NULL,
            `updated_by` bigint(20) unsigned DEFAULT NULL,
            `deleted_at` datetime DEFAULT NULL,
            PRIMARY KEY (`id`),
            KEY `fk_student_department_id` (`department_id`),
            CONSTRAINT `fk_student_department_id` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");
    }

    public function down()
    {
        $this->forge->dropTable('student', true);
    }
}

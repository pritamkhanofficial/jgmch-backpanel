<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ContentPageTypeColumnModify extends Migration
{
    public function up()
    {
        $this->db->query("ALTER TABLE `content` CHANGE `page_id` `page_id` INT(10) UNSIGNED NULL DEFAULT NULL");
    }

    public function down()
    {
        //
    }
}

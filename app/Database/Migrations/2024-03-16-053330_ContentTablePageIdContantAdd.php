<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ContentTablePageIdContantAdd extends Migration
{
    public function up()
    {
        $this->db->query("ALTER TABLE `content` ADD  CONSTRAINT `fk_content_page_id` FOREIGN KEY (`page_id`) REFERENCES `page`(`id`) ON DELETE RESTRICT ON UPDATE NO ACTION;");
    }

    public function down()
    {
        $this->db->query("ALTER TABLE content DROP FOREIGN KEY fk_content_page_id");
    }
}

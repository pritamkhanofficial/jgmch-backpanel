<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GalleryTableShowOnHomePageFieldAdd extends Migration
{
    public function up()
    {
        $fields = [
            'show_on_home' => [
                'type' => 'TINYINT',
                'default'    => 0,
                'constraint'    => 1,
                'null'    => false,
                'after'    => 'is_active',
                'comment'    => '0 for no 1 for yes'
            ],
        ];
        $this->forge->addColumn('gallery', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('gallery', 'show_on_home');

    }
}

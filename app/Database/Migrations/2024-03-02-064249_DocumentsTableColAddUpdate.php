<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DocumentsTableColAddUpdate extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('documents', 'deleted_by');

        $fields = [
            'end_date' => [
                'type'           => 'DATETIME',
                'null'           => true,
                'after'           => 'is_active',
            ],
        ];
        $this->forge->addColumn('documents', $fields);
        $fields = [
            'description' => [
                'type'           => 'TEXT',
                'null'           => true,
                'after'           => 'file',
            ],
        ];
        $this->forge->addColumn('documents', $fields);
    }

    public function down()
    {
        $fields = [
            'deleted_by' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'null'           => true
            ],
        ];
        $this->forge->addColumn('documents', $fields);

        $this->forge->dropColumn('documents', 'end_date');
        $this->forge->dropColumn('documents', 'description');

    }
}

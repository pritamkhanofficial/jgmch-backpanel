<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HospitalHead extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'sub_title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'address' => [
                'type'       => 'TEXT',
                'null' => true
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'default'    => 'default.png'
            ],
            'is_active' => [
                'type' => 'TINYINT',
                'default'    => 1,
                'constraint' => 1,
                'comment'    => '0 for no 1 for yes'
            ],
            'created_at datetime default current_timestamp',
            'created_by' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true
            ],
            'updated_at datetime default null on update current_timestamp',
            'updated_by' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'null'           =>true
            ],
            'deleted_at datetime default null',
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('hospital_head', true);

    }

    public function down()
    {
        $this->forge->dropTable('hospital_head', true);
    }
}

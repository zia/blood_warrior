<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Districts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 3,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_bn' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'name_en' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('districts');
    }

    public function down()
    {
        $this->forge->dropTable('districts');
    }
}

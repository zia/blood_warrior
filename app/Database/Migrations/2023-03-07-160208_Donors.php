<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Donors extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'mobile' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'district' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'blood_group' => [
                'type'       => 'VARCHAR',
                'constraint' => '4',
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('donors');
    }

    public function down()
    {
        $this->forge->dropTable('donors');
    }
}

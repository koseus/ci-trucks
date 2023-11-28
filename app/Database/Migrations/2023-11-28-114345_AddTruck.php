<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTruck extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'constraint' => 255,
                'unsigned' => true,
                'auto_increment' => true

            ],
            'make' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'model' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'year' => [
                'type' => 'INT',

            ],
            'mileage' => [
                'type' => 'INT',
            ],
            'price' => [
                'type' => 'INT',
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('trucks');
    }

    public function down()
    {
        $this->forge->dropTable('trucks');
    }
}

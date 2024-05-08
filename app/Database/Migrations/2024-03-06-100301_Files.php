<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Files extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT','constraint'=> 5,'unsigned'=> true,'auto_increment' => true],
            'path' => ['type'=> 'VARCHAR','constraint' => '100'],
            'name' => ['type'=> 'VARCHAR','constraint' => '50'],
            'created_at' => ['type' => 'DATETIME','null' => true],
            'updated_at' => ['type' => 'DATETIME','null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('files');
    }

    public function down()
    {
        //
    }
}

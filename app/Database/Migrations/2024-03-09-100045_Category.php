<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT','constraint'=> 5,'unsigned'=> true,'auto_increment' => true],
            'title' => ['type'=> 'VARCHAR','constraint' => '100'],
            'slug' => ['type' => 'VARCHAR','constraint' => '150',],
            'image' => ['type' => 'VARCHAR','constraint' => '255','null' => true,],


            'created_at' => ['type' => 'DATETIME','null' => true],
            'updated_at' => ['type' => 'DATETIME','null' => true],
            'deleted_at' => ['type' => 'DATETIME','null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('categories');
    }

    public function down()
    {
        $this->forge->dropTable('categories');
    }
}

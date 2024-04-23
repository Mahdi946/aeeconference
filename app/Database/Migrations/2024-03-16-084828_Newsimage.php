<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Newsimage extends Migration
{
    public function up()
    {
        $fields = [
            'image' => ['type' => 'VARCHAR','constraint' => '255',],
        ];
        $this->forge->addColumn('news', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('news', 'image');
    }
}

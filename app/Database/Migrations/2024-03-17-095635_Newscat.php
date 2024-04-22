<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Newscat extends Migration
{
    public function up()
    {
        $fields = [
            'category' => ['type' => 'INT','constraint' => '5',],
        ];
        $this->forge->addColumn('news', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('news', 'category');
    }
}

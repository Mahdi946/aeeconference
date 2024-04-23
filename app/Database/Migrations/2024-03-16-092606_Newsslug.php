<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Newsslug extends Migration
{
    public function up()
    {
        $fields = [
            'slug' => ['type' => 'VARCHAR','constraint' => '255',],
        ];
        $this->forge->addColumn('news', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('news', 'slug');
    }
}

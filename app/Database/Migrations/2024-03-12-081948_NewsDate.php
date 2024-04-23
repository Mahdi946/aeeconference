<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NewsDate extends Migration
{
    public function up()
    {
        $fields = [
            'date' => ['type' => 'DATETIME'],
        ];
        $this->forge->addColumn('news', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('news', 'date');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Newscat extends Migration
{
    public function up()
    {
        $fields = [
            'category' => ['type' => 'INT','constraint' => '5','unsigned' => true,],
            'CONSTRAINT category FOREIGN KEY(`category`) REFERENCES `category`(`id`)'
        ];
        $this->forge->addColumn('news', $fields);

    }

    public function down()
    {
        $this->forge->dropForeignKey('category','category');
        $this->forge->dropColumn('news', 'category');
    }
}

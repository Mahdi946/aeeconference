<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Newsimage extends Migration
{
    public function up()
    {
        $fields = [
            'image' => ['type' => 'INT','constraint' => '5','unsigned' => true,'null' => true,],
            'CONSTRAINT image FOREIGN KEY(`image`) REFERENCES `files`(`id`) ON DELETE CASCADE ON UPDATE CASCADE'

        ];
        $this->forge->addColumn('news', $fields);

    
    }

    public function down()
    {
        $this->forge->dropColumn('news', 'image');
    }
}

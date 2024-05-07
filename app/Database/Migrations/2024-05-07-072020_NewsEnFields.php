<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NewsEnFields extends Migration
{
    public function up()
    {
        $fields = [
            'title_en' => [
                'type'  => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'content_en' => [
                'type' => 'TEXT',
                'null' => true,
            ],
         ];

        $this->forge->addColumn('news', $fields);
    }

    public function down()
    {
         $this->forge->dropColumn('news', 'title_en');
         $this->forge->dropColumn('news', 'content_en');
    }
}

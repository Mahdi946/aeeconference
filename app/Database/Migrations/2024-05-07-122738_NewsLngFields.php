<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NewsLngFields extends Migration
{
    public function up()
    {
        $fields = [
            'lng' => [
                'type' => 'ENUM("fa","en")',
                'default' => 'fa',
 
            ] 
         ];

        $this->forge->addColumn('news', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('news', 'lng');

    }
}

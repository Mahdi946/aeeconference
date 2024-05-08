<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NewslangFields extends Migration
{
    public function up()
    {
        $fields = [
            'lang' => [
                'type' => 'ENUM("fa","en")',
                'default' => 'fa',
 
            ] 
         ];

        $this->forge->addColumn('news', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('news', 'lang');

    }
}

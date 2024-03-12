<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NewsDate extends Migration
{
    public function up()
    {
        $fields = [
            'blog_date' => ['type' => 'DATETIME'],
        ];
        $this->forge->addColumn('blog', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('blog', 'blog_date');
    }
}

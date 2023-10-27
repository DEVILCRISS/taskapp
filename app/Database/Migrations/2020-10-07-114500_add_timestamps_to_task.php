<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampsToTask extends Migration
{
    public function up()
	{
        $this->forge->addColumn('task', [
            'Creado' => [
                'type'     => 'DATETIME',
                'null'     => true,
                'default'  => null
            ],
            'Actualizado' => [
                'type'     => 'DATETIME',
                'null'     => true,
                'default'  => null
            ]
        ]);
    }
    
    public function down()
	{
        $this->forge->dropColumn('task', 'Creado');
        $this->forge->dropColumn('task', 'Actualizado');
    }
}
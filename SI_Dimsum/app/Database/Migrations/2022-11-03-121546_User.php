<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'member_id_user'=> [
                'type'=> 'INT',
                'constraint'=> 11,
                'unsigned'=> true,
                'auto_increment'=>true,
            ],
            'member_username_user'=> [
                'type'=> 'VARCHAR',
                'constraint'=>'200',
            ],
            'member_password_user'=> [
                'type'=> 'VARCHAR',
                'constraint'=> '200',
            ],
            'is_admin'=> [
                'type'=> 'ENUM',
                'constraint'=>['0','1'],
            ],
            
        ]);
        $this->forge->addKey('member_id_user', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        //
    }
}

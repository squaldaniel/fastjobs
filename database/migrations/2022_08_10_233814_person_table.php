<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $strTableName = "persons";
    public function up()
    {
        $strSql = 'create table '.$this->strTableName.'(
            id int unsigned auto_increment primary key,
            email varchar(150) unique not null              comment "email dos usuarios",
            nome varchar(200) not null                      comment "nome do usuario",
            cep varchar(10) not null                        comment "o cep da pessoa",
            active boolean default false                    comment "para ativar e desativar usuarios",
            password text                                   comment "inicialmente gerado token para o email. depois a senha"
        ) engine=innodb charset=utf8mb4';
        DB::select(DB::raw($strSql));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $strSql = 'drop table '.$this->strTableName;
        DB::select(DB::raw($strSql));
    }
};

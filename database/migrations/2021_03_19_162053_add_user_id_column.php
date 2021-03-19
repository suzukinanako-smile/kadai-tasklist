<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            // user_idカラム追加
            $table->unsignedBigInteger('user_id');
            
            // 外部キー制約追加
            $table->foreign('user_id')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            // user_idカラム消去の追加
            $table->dropColumn('user_id');
            
            // 外部キー制約消去の追加
            $table->dropForeign(['user_id']);
        });
    }
}

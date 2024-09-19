<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //追加したい列、テーブル
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            $table->string('title', 50)->after('name'); //どの列の後に列を追加するか[after]を使う
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  //ロールバック
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }
};

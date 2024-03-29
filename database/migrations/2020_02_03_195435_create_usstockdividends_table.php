<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsstockdividendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usstockdividends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ticker');
            $table->string('announceday');     // 発表日
            $table->string('exrights');        // 権利落日
            $table->string('paymentday');      // 支払日
            $table->decimal('dividend',7,6); // 配当内容
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usstockdividends');
    }
}

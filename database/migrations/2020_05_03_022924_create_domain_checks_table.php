<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* id, domain_id, status_code, h1, keywords, description, updated_at, created_at */
        Schema::create('domain_checks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('domain_id');
            $table->integer('status_code');
            $table->string('h1');
            $table->string('keywords');
            $table->string('description');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domain_checks');
    }
}

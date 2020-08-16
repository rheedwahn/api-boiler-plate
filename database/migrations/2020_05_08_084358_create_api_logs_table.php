<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_logs', function (Blueprint $table) {
            $table->id();
            $table->string('api_reference');
            $table->string('request_method');
            $table->string('request_url');
            $table->text('request_header')->nullable();
            $table->text('request_data')->nullable();
            $table->text('response_data')->nullable();
            $table->string('response_code');
            $table->string('ip_address');
            $table->string('user_agent');
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_logs');
    }
}

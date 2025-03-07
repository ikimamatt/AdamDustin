<?php
// database/migrations/xxxx_xx_xx_create_signature_news_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignatureNewsTable extends Migration
{
    public function up()
    {
        Schema::create('signature', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('thumbnail');
            $table->string('judul');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down()
    {
        
    }
}

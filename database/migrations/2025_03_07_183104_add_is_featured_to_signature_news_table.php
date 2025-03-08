<?php
// database/migrations/xxxx_xx_xx_add_is_featured_to_signature_news_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsFeaturedToSignatureNewsTable extends Migration
{
    public function up()
    {
        Schema::table('signature_news', function (Blueprint $table) {
            $table->boolean('is_featured')->default(false);
        });
    }

    public function down()
    {
        Schema::table('signature_news', function (Blueprint $table) {
            $table->dropColumn('is_featured');
        });
    }
}

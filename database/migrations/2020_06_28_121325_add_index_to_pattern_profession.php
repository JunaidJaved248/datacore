<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToPatternProfession extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pattern_profession', function (Blueprint $table) {
            $table->index(['pattern_id', 'profession_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pattern_profession', function (Blueprint $table) {
            $table->dropIndex(['pattern_id', 'profession_id']);
        });
    }
}

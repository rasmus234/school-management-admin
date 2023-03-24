<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// this migration handles all foreign key constraints for the database schema
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->foreignId("level_id")->constrained("levels");
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }

};

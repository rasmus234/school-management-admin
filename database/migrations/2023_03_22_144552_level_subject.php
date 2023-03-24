<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
//        Schema::create('levels', function (Blueprint $table) {
//            $table->unique(["subject_id","level_id"]);
//            $table->foreignId("subject_id")->constrained("subjects");
//            $table->foreignId("level_id")->constrained("levels");
//            $table->timestamps();
//        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

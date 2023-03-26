<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('statement_visibility', function (Blueprint $table) {
            $table->foreignId('statement_id')->constrained();
            $table->foreignId('parent_id')->constrained('users');
            $table->timestamp('seen_timestamp')->nullable();
            $table->primary(['statement_id', 'parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statement_visibility');
    }
};

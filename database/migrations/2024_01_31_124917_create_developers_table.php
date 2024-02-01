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
        Schema::create('developer', function (Blueprint $table) {
            $table->id();
            $table->string('staffId'); 
            $table->string('name'); 
            $table->string('mail'); 
            $table->string('LeadDeveloper');
            $table->string('project');
            $table->softDeletes(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developer');
    }
};
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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("project_id")->nullable(true);
            $table->unsignedBigInteger("config_id")->nullable(true);
            $table->string("image");
            $table->timestamps();

            $table->foreign("project_id")->references("id")->on("projects");
            $table->foreign("config_id")->references("id")->on("configs");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};

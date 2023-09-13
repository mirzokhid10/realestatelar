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
        Schema::create('agent', function (Blueprint $table) {
            $table->id();
            $table->mediumText("firstname");
            $table->mediumText("lastname");
            $table->integer("mobilephone");
            $table->integer("website");
            $table->mediumText("facebook");
            $table->mediumText("twitter");
            $table->mediumText("instagram");
            $table->string("photo");
            $table->mediumText("address");
            $table->text("bio");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent');
    }
};

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
        Schema::table('users', function (Blueprint $table) {
            $table->string("logo_link")->nullable();
            $table->string("cover_link")->nullable();
            $table->date("established")->nullable();
            $table->string("phone")->nullable(); 
            $table->string("description")->nullable();
            $table->string("address")->nullable();
            $table->string("google_form_link")->nullable();
            $table->json("social_media")->nullable();
            $table->string("second_email")->nullable();
            $table->string("second_description")->nullable();
            $table->string("category")->nullable();
            $table->string("university_name")->nullable();
            $table->string("university_address")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

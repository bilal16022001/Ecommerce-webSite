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
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->ForeignId("user_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->string("FirstName");
            $table->string("LastName");
            $table->string("Address");
            $table->string("country");
            $table->string("city");
            $table->string("zipcode");
            $table->string("phone");
            $table->string("email");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adresses');
    }
};

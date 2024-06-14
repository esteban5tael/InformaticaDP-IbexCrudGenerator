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
        Schema::create('contacts', function (Blueprint $table) {

            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('name',100);
            $table->string('email',100);
            $table->string('phone',100);
            $table->string('city',100);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};

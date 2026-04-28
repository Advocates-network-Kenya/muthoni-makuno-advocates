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
        Schema::create('advocates', function (Blueprint $table) {
            $table->id();
             $table->string('name');
            $table->string('email');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('slug');
            $table->string('image');
            //qualifications
            $table->text('qualifications'); 
            //content
            $table->longText('content');
            //role : partner ,associate ,paralegal,lawyer,accountant and ict
            $table->string('role');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advocates');
    }
};

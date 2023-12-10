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
        Schema::create('posty', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tytul',200);
            $table->string('autor',100);
            $table->string('email',100);
            $table->text('tresc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posty');
    }
};

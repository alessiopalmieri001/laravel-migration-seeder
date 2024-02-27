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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 64);
            $table->string('stazione di partenza' , 64);
            $table->string('stazione di arrivo' , 64);
            $table->smallInteger('orario di partenza');
            $table->smallInteger('orario di arrivo');
            $table->string('codice treno' , 64);
            $table->smallInteger('numero carrozze');
            $table->boolean('in orario');
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};

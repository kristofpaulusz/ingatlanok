<?php

use App\Models\Kategoriak;
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
        Schema::create('kategoriak', function (Blueprint $table) {
            $table->id();
            $table->string('nev')->unique();
            $table->timestamps();
        });

        Kategoriak::create(['nev' => 'Ház']);
        Kategoriak::create(['nev' => 'Lakás']);
        Kategoriak::create(['nev' => 'Építési telek']);
        Kategoriak::create(['nev' => 'Garázs']);
        Kategoriak::create(['nev' => 'Mezőgazdasági terület']);
        Kategoriak::create(['nev' => 'Ipari ingatlan']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoriak');
    }
};

<?php
use App\Models\Artist;
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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });




        $artists = [ 'Pablo Picasso', 'Van Gogh', 'Salvator Dalì', 'Henri Matisse', 'Paul Cezanne','Paul Gauguin'];



    foreach($artists as $artist){



    Artist::create([
        'name' => $artist
    ]);

    }



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};

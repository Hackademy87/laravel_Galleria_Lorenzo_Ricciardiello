<?php

namespace App\Models;

use App\Models\Artist;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','img','category','category_id'];


    public function category(){

        return $this->belongsTo(Category::class);

    }

    public function artists(){
        return $this->belongsToMany(Artist::class);
        }

        public function getArtists(){

            $artists = "";

            foreach($this->artists as $artist){

            $artists = $artists . "#$artist->name ";

            }

            if (empty($artists)) {
                return "Nessun artista collegato a questo prodotto.";
            }

            return $artists;
}
}

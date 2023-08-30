<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'surface',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'city',
        'address',
        'postal_code',
        'sold',
    ];

    public function options(): BelongsToMany
    {
        return $this->belongsToMany(Option::class);
    }

    public function getSlug(): string
    {
        return Str::slug($this->title);
    }

    public function getLastProperties()
    {
        $properties = Property::query()->where('sold', '=', '0')->orderBy('created_at', 'desc')->limit(4)->get();
        return $properties;
    }

    public static function getProperties($price, $surface, $rooms, $title)
    {
        $query = self::query()->where('sold', '=', '0')->orderBy('created_at', 'desc');
        if ($price) {
            $query = $query->where('price', '<', $price);
        }
        if ($surface) {
            $query = $query->where('surface', '>', $surface);
        }
        if ($rooms) {
            $query = $query->where('rooms', '>', $rooms);
        }
        if ($title) {
            $query = $query->where('title', 'like', "%{$title}%");
        }
        return $query;
    }
}
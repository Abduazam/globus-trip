<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Package extends Model
{
    use HasFactory;

    public const INACTIVE = 0;
    public const ACTIVE = 1;

    protected $table = 'packages';

    protected $primaryKey = 'id';

    protected $fillable = ['category_id', 'title', 'destination', 'description', 'image', 'price', 'people_count', 'status'];

    public function toActive(): void
    {
        $this->status = $this->status === 1 ? self::INACTIVE : self::ACTIVE;
        $this->save();
    }

    public function parent(): HasOne
    {
        return $this->hasOne(Category::class, 'id');
    }
}

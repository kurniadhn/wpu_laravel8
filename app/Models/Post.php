<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['title','excerpt','body']; // Choose one $fillable or $guarded
    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    //--------------------- Relationship ------------------//

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //------------------------ End ------------------------//


    //---------------------- Filtering --------------------//

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters['search'] : false)
        // {
        //     return $query->where('title', 'like', '%' . 
        //                   $filters['search'] . '%')
        //                  ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        // Callback Function ver.

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use($category) {
                $query->where('slug', $category);
            });
        });

        // Arrow Function ver.
        
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    //------------------------ End ------------------------//


    //------------------- Specify Route -------------------//

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //------------------------ End ------------------------//


    //--------------------- Sluggable ---------------------//

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    //------------------------ End ------------------------//

}
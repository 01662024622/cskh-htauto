<?php

namespace App\Models\HT00;

use App\Models\HT20\Apartment;
use App\Models\HT20\Group;
use App\Models\HT20\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'title', 'avata', 'slug', 'content', 'embed', 'role','status', 'create_by', 'modify_by'
    ];
    public $fillable_store = [
        'title', 'content', 'embed', 'role'
    ];
    public $fillable_update = [
        'title', 'content', 'embed', 'role'
    ];
    protected $table = "ht00_posts";
    protected $hidden = [
        'laravel_through_key'
    ];
    public function categories()
    {
        return $this->hasManyThrough(Category::class, PostCategory::class, 'post_id', 'id', 'id', 'category_id')
            ->where('ht00_post_category.status',0)
            ->select(['ht00_categories.id']);
    }
    public function users()
    {
        return $this->hasManyThrough(User::class, PostUser::class, 'post_id', 'id', 'id', 'user_id')
            ->select(['ht20_users.id','ht20_users.name','ht00_post_user.role']);
    }
    public function apartments()
    {
        return $this->hasManyThrough(Apartment::class, PostApartment::class, 'post_id', 'id', 'id', 'apartment_id')
            ->select(['ht20_apartments.id','ht20_apartments.name','ht00_post_apartment.role']);
    }
    public function groups()
    {
        return $this->hasManyThrough(Group::class, PostGroup::class, 'post_id', 'id', 'id', 'group_id')->where('ht00_post_group.role',0)
            ->select(['ht20_groups.id','ht20_groups.name']);
    }

}

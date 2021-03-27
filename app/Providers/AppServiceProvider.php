<?php

namespace App\Providers;

use App\Models\HT00\Category;
use App\Models\HT20\Apartment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('*', function ($view) {
            if (Auth::check()) {
                $apartment_user = Apartment::select('id')->where('status', 0)->where('user_id', Auth::id())->get()->pluck('id')->toArray();
                $view->with('apartment_user', $apartment_user);
                $user = Auth::user();
                $categoriesId = DB::select('SELECT id FROM ht00_categories ct WHERE role = 0 AND id NOT IN(
                SELECT DISTINCT(category_id) as id FROM ht00_category_user us where us.role=2 AND us.user_id=' . $user->id . ' UNION
                SELECT ap.category_id as id FROM ht00_category_apartment ap where ap.role=2 and ap.apartment_id=' . $user->apartment_id . ' AND ap.category_id NOT IN(
                SELECT us.category_id as id FROM ht00_category_user us WHERE us.role=0 and us.user_id=' . $user->id . '))
                UNION
                SELECT id FROM ht00_categories WHERE role = 2 AND id IN(
                SELECT DISTINCT(category_id) as id FROM ht00_category_user us where us.role=0 AND us.user_id=' . $user->id . ' UNION
                SELECT ap.category_id as id FROM ht00_category_apartment ap where ap.role=0 and ap.apartment_id=' . $user->apartment_id . ' AND ap.category_id NOT IN(
                SELECT us.category_id as id FROM ht00_category_user us WHERE us.role=2 and us.user_id=' . $user->id . '))');
                $array = [];
                foreach ($categoriesId as $id) {
                    array_push($array, (int)$id->id);
                }
                $categoryGroupId = DB::select('SELECT cg.category_id as id FROM ht00_category_group cg JOIN ht20_group_user gu ON cg.group_id=gu.group_id JOIN ht20_groups g ON cg.group_id=g.id WHERE cg.role=0 AND gu.`status`=0 AND g.`status`=0 AND gu.user_id=' . $user->id . ' AND cg.category_id NOT IN(
                        SELECT category_id FROM ht00_category_user cu WHERE cu.user_id=' . $user->id . ' AND cu.role=2)');
                foreach ($categoryGroupId as $id) {
                    array_push($array, (int)$id->id);
                }
                $categories = Category::where('status', 0)->where('type', '>=', 5)->whereIn('id', $array)->orderBy('sort')
                    ->get(['id', 'title', 'slug', 'type', 'sort', 'icon', 'header']);
                $nav = '';
                foreach ($categories as $category) {
                    $sub = Category::where('status', 0)->where('parent_id', $category->id)->whereIn('id', $array)->orderBy('sort')
                        ->get(['id', 'title', 'parent_id', 'slug', 'url', 'sort', 'icon', 'header']);
                    if (count($sub) > 0) {
                        if ($category->type == 5) {
                            $nav = $nav . '<hr class="sidebar-divider">
            <li class="nav-item" id="' . $category->slug . '">
                <a class="nav-link" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapsePages' . $category->slug . '"
                   aria-controls="collapsePages' . $category->slug . '">
                    <i class="' . $category->icon . '"> </i> <span> ' . $category->title . '
                </a>
                <div id="collapsePages' . $category->slug . '" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">';
                            foreach ($sub as $element) {
                                if (!$element->header == "") {
                                    $nav = $nav . '<h6 class="collapse-header">' . $element->header . '</h6>';
                                }
                                $nav = $nav . '<a id="' . $element->slug . '" class="collapse-item"  href="' . $element->url . '">
                                <i class="' . $element->icon . '"> </i> <span> ' . $element->title . '</span>
                            </a>';
                            }
                            $nav = $nav . '</div>
                </div>
            </li>';
                        } else {
                            $nav = $nav . '<hr class="sidebar-divider">';
                            foreach ($sub as $element) {
                                $nav = $nav . '<li class="nav-item" id="' . $element->slug . '">
            <a class="nav-link" href="' . $element->url . '">
                <i class="' . $element->icon . '"> </i> <span> ' . $element->title . '</span></a>
        </li>';
                            }
                        }
                    }
                }
                $view->with('nav', $nav);
            }
        });
    }
}

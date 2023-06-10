<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

 Route::group(['namespace' => 'api\v1', 'prefix' => 'v1'], function () {

    Route::group(['prefix' => 'posts'], function () {
        // Route::get('latest', 'ProductController@get_latest_products');
        // Route::get('search', 'ProductController@get_searched_products');
        // Route::get('details/{id}', 'ProductController@get_product');
        // Route::get('related-products/{product_id}', 'ProductController@get_related_products');
        // Route::get('reviews/{product_id}', 'ProductController@get_product_reviews');
        // Route::get('rating/{product_id}', 'ProductController@get_product_rating');
        // Route::get('counter/{product_id}', 'ProductController@counter');
        // Route::get('shipping-methods', 'ProductController@get_shipping_methods');
        // Route::get('social-share-link/{product_id}', 'ProductController@social_share_link');
        // Route::post('reviews/submit', 'ProductController@submit_product_review')->middleware('auth:api');

        Route::get('/latest', [PostController::class, 'get_latest_posts']);
    });
});
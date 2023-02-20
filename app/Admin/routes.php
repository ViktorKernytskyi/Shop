<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
	return AdminSection::view($content, 'Dashboard');
}]);

Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Define your information here.';
	return AdminSection::view($content, 'Information');
}]);
//Route::get('products', ['as' => 'admin.products', function () {
//    $content = 'Define your information here.';
//    return AdminSection::view($content, 'products');
//}]);




Route::get('my-url', function () {
    $content = 'my page content';
    return AdminSection::view($content, 'My Page Title');
});

//Route::post('category/my-url', '\App\Http\Controllers\MyController@postMyUrl');

//Route::any('my-page', [
//    'as' => 'admin.my-page',
//    'uses' => '\App\Http\Controllers\MyPageController@myPage',
//]);

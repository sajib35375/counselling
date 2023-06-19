<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/logout',[App\Http\Controllers\AdminController::class,'AdminLogout'])->name('admin.logout');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('admin/dashboard',[App\Http\Controllers\AdminController::class,'adminDash'])->name('adminDash');
    Route::get('slider',[App\Http\Controllers\SliderController::class,'slider'])->name('slider');
    Route::post('slider/store',[App\Http\Controllers\SliderController::class,'sliderStore'])->name('slider.store');
    Route::get('slider/delete/{id}',[App\Http\Controllers\SliderController::class,'sliderDelete'])->name('slider.delete');
    Route::get('slider/edit/{id}',[App\Http\Controllers\SliderController::class,'sliderEdit'])->name('slider.edit');
    Route::post('slider/update/{id}',[App\Http\Controllers\SliderController::class,'sliderUpdate'])->name('slider.update');

    Route::get('header/image',[App\Http\Controllers\SliderController::class,'headerImage'])->name('header.image');
    Route::post('header/image/update',[App\Http\Controllers\SliderController::class,'headerImageUpdate'])->name('header.image.update');
    Route::get('home/section',[App\Http\Controllers\HomeController::class,'homeSection'])->name('home.section');
    Route::post('home/update',[App\Http\Controllers\HomeController::class,'homeUpdate'])->name('home.update');

    Route::get('add/new/issue',[App\Http\Controllers\IssueController::class,'addNewIssue'])->name('add.new.issue');
    Route::post('issue/store',[App\Http\Controllers\IssueController::class,'IssueStore'])->name('issue.store');
    Route::get('issue/view',[App\Http\Controllers\IssueController::class,'IssueView'])->name('issue.view');
    Route::get('issue/delete/{id}',[App\Http\Controllers\IssueController::class,'IssueDelete'])->name('issue.delete');
    Route::get('issue/edit/{id}',[App\Http\Controllers\IssueController::class,'IssueEdit'])->name('issue.edit');
    Route::post('issue/update/{id}',[App\Http\Controllers\IssueController::class,'IssueUpdate'])->name('issue.update');

    Route::get('slider/comment',[App\Http\Controllers\CommentSliderController::class,'CommentSlider'])->name('comment.slider');
    Route::post('slider/comment/store',[App\Http\Controllers\CommentSliderController::class,'CommentSliderStore'])->name('comment.slider.store');
    Route::get('slider/comment/edit/{id}',[App\Http\Controllers\CommentSliderController::class,'CommentSliderEdit'])->name('comment.slider.edit');
    Route::post('slider/comment/update/{id}',[App\Http\Controllers\CommentSliderController::class,'CommentSliderUpdate'])->name('comment.slider.update');
    Route::get('slider/comment/delete/{id}',[App\Http\Controllers\CommentSliderController::class,'CommentSliderDelete'])->name('comment.slider.delete');

    Route::get('add/new/therapy',[App\Http\Controllers\TherapyController::class,'addTherapy'])->name('add.therapy');
    Route::post('therapy/store',[App\Http\Controllers\TherapyController::class,'storeTherapy'])->name('store.therapy');
    Route::get('therapy/view',[App\Http\Controllers\TherapyController::class,'viewTherapy'])->name('view.therapy');
    Route::get('therapy/delete/{id}',[App\Http\Controllers\TherapyController::class,'deleteTherapy'])->name('delete.therapy');
    Route::get('therapy/edit/{id}',[App\Http\Controllers\TherapyController::class,'EditTherapy'])->name('edit.therapy');
    Route::post('therapy/update/{id}',[App\Http\Controllers\TherapyController::class,'UpdateTherapy'])->name('update.therapy');

    Route::get('menu/view',[App\Http\Controllers\MenuController::class,'menuView'])->name('menu.view');
    Route::post('menu/store',[App\Http\Controllers\MenuController::class,'menuStore'])->name('menu.store');
    Route::get('menu/status/active/{id}',[App\Http\Controllers\MenuController::class,'menuStatusActive'])->name('menu.status.active');
    Route::get('menu/status/inactive/{id}',[App\Http\Controllers\MenuController::class,'menuStatusInActive'])->name('menu.status.inactive');
    Route::get('menu/delete/{id}',[App\Http\Controllers\MenuController::class,'menuDelete'])->name('menu.delete');
    Route::get('menu/edit/{id}',[App\Http\Controllers\MenuController::class,'menuEdit'])->name('menu.edit');
    Route::post('menu/update',[App\Http\Controllers\MenuController::class,'menuUpdate'])->name('menu.update');

    Route::get('post/view',[App\Http\Controllers\MenuController::class,'PostView'])->name('post.view');
    Route::get('post/add',[App\Http\Controllers\MenuController::class,'PostAdd'])->name('post.add');
    Route::post('post/store',[App\Http\Controllers\MenuController::class,'PostStore'])->name('post.store');

    Route::get('site/setting',[App\Http\Controllers\SiteSettingController::class,'siteSetting'])->name('site.setting');
    Route::post('site/setting/update',[App\Http\Controllers\SiteSettingController::class,'siteSettingUpdate'])->name('site.setting.update');

    Route::get('admin/register',[App\Http\Controllers\RegisterController::class,'adminReg'])->name('admin.reg');
    Route::get('edit/register/{id}',[App\Http\Controllers\RegisterController::class,'editReg'])->name('edit.reg');
    Route::post('update/register/{id}',[App\Http\Controllers\RegisterController::class,'updateReg'])->name('update.reg');
    Route::get('delete/register/{id}',[App\Http\Controllers\RegisterController::class,'deleteReg'])->name('delete.reg');

    Route::get('user/status/active/{id}',[App\Http\Controllers\RegisterController::class,'statusActive'])->name('status.active');
    Route::get('user/status/inactive/{id}',[App\Http\Controllers\RegisterController::class,'statusInactive'])->name('status.inactive');
});
Route::get('/',[App\Http\Controllers\UserController::class,'index'])->name('index');
Route::get('single/page/{id}',[App\Http\Controllers\SinglePageController::class,'SinglePage'])->name('single.page');
Route::get('therapy/single/page/{id}',[App\Http\Controllers\SinglePageController::class,'TherapySinglePage'])->name('therapy.single.page');
Route::get('menu/page/view/{id}',[App\Http\Controllers\UserController::class,'menuPageView'])->name('menu.page.view');
Route::get('menu/single/view/{id}',[App\Http\Controllers\SinglePageController::class,'menuSingleView'])->name('menu.single.view');
//register
Route::get('register/page',[App\Http\Controllers\RegisterController::class,'registerView'])->name('reg.view');
Route::post('register/store',[App\Http\Controllers\RegisterController::class,'registerStore'])->name('reg.store');

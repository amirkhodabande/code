
<?php
Route::get('/series/create', 'SeriesController@create');

Route::post('/series/create', 'SeriesController@store')->name('store-ser');

Route::get('/series/{series}', 'SeriesController@show');

Route::post('{series_by_id}/lesson', 'LessonController@store')->name('store-lesson');

Route::get('lesson/{lesson}', 'LessonController@delete')->name('delete-lesson');

Route::get('/source/create', 'SourceController@create');

Route::post('/source/create', 'SourceController@store')->name('store-sour');

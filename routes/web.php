<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/****************************************************************************
* Page resource
*****************************************************************************/
#Home page
Route::get('/', 'PageController@home')->name('page.home');

#Contact page
Route::get('/contact', 'PageController@contact')->name('page.contact');
Route::post('/contact', 'PageController@contactPost')->name('page.contactPost');



/****************************************************************************
* Glossary resource
*****************************************************************************/
# Index page to show all the glossary terms
Route::get('/glossaries', 'GlossaryController@index')->name('glossaries.index');

# Show a form to create a new glossary term
Route::get('/glossaries/create', 'GlossaryController@create')->name('glossaries.create');

# Process the form to create a new glossary term
Route::post('/glossaries', 'GlossaryController@store')->name('glossaries.store');

# Show an individual glossary term
Route::get('/glossaries/{title}', 'GlossaryController@show')->name('glossaries.show');

# Show form to edit a glossary term
Route::get('/glossaries/{id}/edit', 'GlossaryController@edit')->name('glossaries.edit');

# Process form to edit a glossary term
Route::put('/glossaries/{id}', 'GlossaryController@update')->name('glossaries.update');

# Get route to confirm deletion of a glossary term
Route::get('/glossaries/{id}/delete', 'GlossaryController@delete')->name('glossaries.destroy');

# Delete route to actually destroy the glossary term
Route::delete('/glossaries/{id}', 'GlossaryController@destroy')->name('glossaries.destroy');

# The above Glossary routes *could* all be replaced with this one line:
# Route::resource('glossaries', 'GlossaryController');

Auth::routes();

Route::get('/home', 'HomeController@index');

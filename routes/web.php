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

#Show a form to create a new contact mail
Route::get('/contact', 'PageController@contact')->name('page.contact');

#Process the contact form to send the message
Route::post('/contact', 'PageController@contactPost')->name('page.contactPost');



/****************************************************************************
* Report resource
*****************************************************************************/
# Index page to show all the reports
Route::get('/reports', 'ReportController@index')->name('reports.index')->middleware('auth');

# Index page to show a user's favorite reports
Route::get('/reports-fav', 'ReportController@index_fav')->name('reports.index_fav')->middleware('auth');

# Index page to show report list with login user comments
Route::get('/comments', 'ReportController@comments')->name('reports.comments')->middleware('auth');

# Show individual report
Route::get('/reports/{title}', 'ReportController@show')->name('reports.show')->middleware('auth');



/****************************************************************************
* Glossary resource
*****************************************************************************/
# Index page to show all the glossary terms
Route::get('/glossaries', 'GlossaryController@index')->name('glossaries.index')->middleware('auth');

# Show a form to create a new glossary term
Route::get('/glossaries/create', 'GlossaryController@create')->name('glossaries.create')->middleware('auth');

# Process the form to create a new glossary term
Route::post('/glossaries', 'GlossaryController@store')->name('glossaries.store')->middleware('auth');

# Show an individual glossary term
Route::get('/glossaries/{title}', 'GlossaryController@show')->name('glossaries.show')->middleware('auth');

# Show form to edit a glossary term
Route::get('/glossaries/{id}/edit', 'GlossaryController@edit')->name('glossaries.edit')->middleware('auth');

# Process form to edit a glossary term
Route::put('/glossaries/{id}', 'GlossaryController@update')->name('glossaries.update')->middleware('auth');

# Get route to confirm deletion of a glossary term
Route::get('/glossaries/{id}/delete', 'GlossaryController@delete')->name('glossaries.destroy')->middleware('auth');

# Delete route to actually destroy the glossary term
Route::delete('/glossaries/{id}', 'GlossaryController@destroy')->name('glossaries.destroy')->middleware('auth');

# The above Glossary routes *could* all be replaced with this one line:
# Route::resource('glossaries', 'GlossaryController');

/****************************************************************************
* Auth resource
*****************************************************************************/
# All auth routes
Auth::routes();

#Auto generated home routes by auth
//Route::get('/home', 'HomeController@index');
Route::get('/home', 'PageController@home'); //Temp solution. Actual solution: Find and override reset password method
                                            //in appropriate controller to redirect to route '/' instead of '/home'
                                            //and commented out this line


/****************************************************************************
* Test Routes
*****************************************************************************/
# To check plural of a word in Laravel way
//Route::get('plural/{word}', function ($word) {return str_plural($word);});

#To check mail configuration
//Route::get('/mailconfig', function() {dump(Config::get('mail'));});

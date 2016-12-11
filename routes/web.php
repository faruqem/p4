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

# Show individual report with general information for a user
Route::get('/reports/{id}', 'ReportController@show')->name('reports.show')->middleware('auth');

# Index page to show a user's favorite reports
Route::get('/my-fav-reports', 'ReportController@my_fav_reports')->name('reports.my_fav_reports')->middleware('auth');

# Index page to show report list with logged-in user comments
Route::get('/my-comments', 'ReportController@my_comments')->name('reports.my_comments')->middleware('auth');

# Index page to show report list with logged-in user ratings
Route::get('/my-ratings', 'ReportController@my_ratings')->name('reports.my_ratings')->middleware('auth');



/****************************************************************************
* Report resource - Developers version
*****************************************************************************/
# Index page to show all the reports
Route::get('/reports-dev', 'ReportDevController@index')->name('reports-dev.index')->middleware('auth');

# Show a form to create a new report item
Route::get('/reports-dev/create', 'ReportDevController@create')->name('reports-dev.create')->middleware('auth');

# Process the form to create the new report item
Route::post('/reports-dev', 'ReportDevController@store')->name('reports-dev.store')->middleware('auth');

# Show individual report with technical information for a developer
Route::get('/reports-dev/{id}', 'ReportDevController@show')->name('reports-dev.show')->middleware('auth');

# Show form to edit a report
Route::get('/reports-dev/{id}/edit', 'ReportDevController@edit')->name('reports_dev.edit')->middleware('auth');

# Process form to update the report item
Route::put('/reports-dev/{id}', 'ReportDevController@update')->name('reports_dev.update')->middleware('auth');

# Get route to confirm deletion of a report item
Route::get('/reports-dev/{id}/delete', 'ReportDevController@delete')->name('reports_dev.delete')->middleware('auth');

# Delete route to actually destroy the glossary term
Route::delete('/reports-dev/{id}', 'ReportDevController@destroy')->name('reports_dev.destroy')->middleware('auth');

# Index page to show logged-in developer revisions
Route::get('/my-revisions', 'ReportDevController@my_revisions')->name('reports.my-revisions')->middleware('auth');

# Show individual report
//Route::get('/reports/{title}', 'ReportController@show')->name('reports.show')->middleware('auth');



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
Route::get('/glossaries/{id}', 'GlossaryController@show')->name('glossaries.show')->middleware('auth');

# Show form to edit a glossary term
Route::get('/glossaries/{id}/edit', 'GlossaryController@edit')->name('glossaries.edit')->middleware('auth');

# Process form to edit a glossary term
Route::put('/glossaries/{id}', 'GlossaryController@update')->name('glossaries.update')->middleware('auth');

# Get route to confirm deletion of a glossary term
Route::get('/glossaries/{id}/delete', 'GlossaryController@delete')->name('glossaries.delete')->middleware('auth');

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

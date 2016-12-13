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
# To start search
Route::get('/search', 'ReportController@search')->name('reports.search')->middleware('auth');
# To show the search result
Route::post('/search-result', 'ReportController@search_result')->name('reports.search_result')->middleware('auth');


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

# Show individual report
//Route::get('/reports/{title}', 'ReportController@show')->name('reports.show')->middleware('auth');



/****************************************************************************
* User Comment
*****************************************************************************/
# Index page to show report list with logged-in user comments
Route::get('/my-comments', 'CommentController@my_comments')->name('comments.my_comments')->middleware('auth');
# Show a form to let a user make a comment on a report
Route::get('/comments/create', 'CommentController@create')->name('comments.create')->middleware('auth');
# Process the form to save the new comment
Route::post('/comments', 'CommentController@store')->name('comments.store')->middleware('auth');
# Show an individual comment
Route::get('/comments/{id}', 'CommentController@show')->name('comments.show')->middleware('auth');
# Show form to edit a comment
Route::get('/comments/{id}/edit', 'CommentController@edit')->name('comments.edit')->middleware('auth');
# Process form to edit a comment
Route::put('/comments/{id}', 'CommentController@update')->name('comments.update')->middleware('auth');
# Get route to confirm deletion of a comment
Route::get('/comments/{id}/delete', 'CommentController@delete')->name('comments.delete')->middleware('auth');
# Delete route to actually destroy the comment
Route::delete('/comments/{id}', 'CommentController@destroy')->name('comments.destroy')->middleware('auth');


/****************************************************************************
* User Rating
*****************************************************************************/
# Index page to show report list with logged-in user ratings
Route::get('/my-ratings', 'RatingController@my_ratings')->name('ratings.my_ratings')->middleware('auth');
# Show a form to let a user rate a report
Route::get('/ratings/create', 'RatingController@create')->name('ratings.create')->middleware('auth');
# Process the form to save the new rating
Route::post('/ratings', 'RatingController@store')->name('ratings.store')->middleware('auth');
# Show an individual rating
Route::get('/ratings/{id}', 'CommentController@show')->name('ratings.show')->middleware('auth');
# Show form to edit a rating
Route::get('/ratings/{id}/edit', 'RatingController@edit')->name('ratings.edit')->middleware('auth');
# Process form to edit a rating
Route::put('/ratings/{id}', 'RatingController@update')->name('ratings.update')->middleware('auth');
# Get route to confirm deletion of a rating
Route::get('/ratings/{id}/delete', 'RatingController@delete')->name('ratings.delete')->middleware('auth');
# Delete route to actually destroy the rating
Route::delete('/ratings/{id}', 'RatingController@destroy')->name('ratings.destroy')->middleware('auth');


/****************************************************************************
* Developer Revisions
*****************************************************************************/
# Index page to show logged-in developer revisions
Route::get('/my-revisions', 'RevisionController@my_revisions')->name('revisions.my-revisions')->middleware('auth');
# Show a form to let a developer add a revision to a report
Route::get('/revisions/create', 'RevisionController@create')->name('revisions.create')->middleware('auth');
# Process the form to save the new revision
Route::post('/revisions', 'RevisionController@store')->name('revisions.store')->middleware('auth');
# Show an individual revision
Route::get('/revisions/{id}', 'RevisionController@show')->name('revisions.show')->middleware('auth');
# Show form to edit a revision
Route::get('/revisions/{id}/edit', 'RevisionController@edit')->name('revisions.edit')->middleware('auth');
# Process form to edit a revision
Route::put('/revisions/{id}', 'RevisionController@update')->name('revisions.update')->middleware('auth');
# Get route to confirm deletion of a revision
Route::get('/revisions/{id}/delete', 'RevisionController@delete')->name('revisions.delete')->middleware('auth');
# Delete route to actually destroy the revision
Route::delete('/revisions/{id}', 'RevisionController@destroy')->name('revisions.destroy')->middleware('auth');


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

#Checking user role
//Route::get('/userrole',function(){dump(App\User::find(Auth::id())->roles->whereIn('id',array(2,3))->count());});

Route::get('/debugbar', function() {

    $data = Array('foo' => 'bar');
    Debugbar::info($data);
    Debugbar::info('Current environment: '.App::environment());
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    return 'Just demoing some of the features of Debugbar';

});

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';
});

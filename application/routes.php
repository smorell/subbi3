<?php



/*
|--------------------------------------------------------------------------
| The Homepage Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function()
{
	return View::make('front.welcome');
});


Route::post('/', function()
{

	$data = Input::all();
	
	$mail = View::make('front.mail')->with(array('data' => $data))->render();
	
	Bundle::start('swiftmailer');
	
	// Get the Swift Mailer instance
	$mailer = IoC::resolve('mailer');
	
	// Construct the message
	$message = Swift_Message::newInstance('Anmeldung auf Website')
	    ->setFrom(array('info@subbis.de'=>'Subbis Anmeldeformular'))
	    ->setTo(array('info@subbis.de'=>''))
	    ->setBody($mail,'text/html');

	
	// Send the email
	$mailer->send($message);
	
	// save the data
	Subbi::create($data);

	// show something
	return View::make('front.welcome');

	
});


/*
|--------------------------------------------------------------------------
| The Office Routes - RESTful
|--------------------------------------------------------------------------
*/

// ============================> subbis <==================================


Route::get('office/subbi/new','office.subbi@subbi_new');
Route::get('office/subbi','office.subbi@subbi_list');
Route::post('office/subbi', function()
{
	// create a new subbi
	Subbi::create(Input::all());
	return Redirect::to('office/subbi');
});
Route::put('office/subbi/(:num)','office.subbi@subbi_update');
Route::get('office/subbi/(:num)', function($id)
{ 
	echo "Show subbi with ID ". $id;
});
Route::get('office/subbi/(:num)/edit','office.subbi@subbi_edit');


// ============================> Sellers <==================================

Route::get('office/seller/new','office.seller@seller_new');
Route::get('office/seller','office.seller@seller_list');
Route::post('office/seller', function()
{
	// create a new seller
	Seller::create(Input::all());
	return Redirect::to('office/seller');
});
Route::put('office/seller/(:num)','office@seller_update');
Route::get('office/seller/(:num)/edit','office@seller_edit');

// ===============================> Misc <==================================


Route::get('office', 'office@index');

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});
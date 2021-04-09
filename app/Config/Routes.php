<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('panel', ['namespace' => 'App\Controllers\Panel'], function($routes){
	$routes->get('dashboard', 'Dashboard::index');

	$routes->get('skill/json', 'Skill::json', ['as' => 'skill-json']);
	$routes->resource('skill', ['except' => 'show']);

	$routes->get('resume/json', 'Resume::json', ['as' => 'resume-json']);
	$routes->resource('resume');

	$routes->get('portfolio/json', 'Portfolio::json', ['as' => 'portfolio-json']);
	$routes->resource('portfolio');

	$routes->get('category/json', 'Category::json', ['as' => 'category-json']);
	$routes->resource('category');

	$routes->get('service/json', 'Service::json', ['as' => 'service-json']);
	$routes->resource('service');

	$routes->get('contact', 'Contact::index', ['as' => 'contact']);
	$routes->post('contact', 'Contact::store', ['as' => 'contact-post']);

	$routes->get('about', 'About::index', ['as' => 'about']);
	$routes->get('about/biodata', 'About::biodata', ['as' => 'about-bio']);
	$routes->get('about/general', 'About::general', ['as' => 'about-general']);
	$routes->get('about/social-account', 'About::social', ['as' => 'about-social']);

	$routes->post('about/general', 'About::saveGeneral', ['as' => 'about-save-general']);
	$routes->post('about/social-account', 'About::saveSocial', ['as' => 'about-save-social']);
	$routes->post('about/biodata', 'About::saveBiodata', ['as' => 'about-save-bio']);
	$routes->post('about/profile', 'About::saveProfile', ['as' => 'about-profile']);

	$routes->get('inbox/json', 'Inbox::json', ['as' => 'inbox-json']);
	$routes->resource('inbox');

	$routes->get('settings', 'Setting::index', ['as' => 'settings']);
	$routes->get('settings/general', 'Setting::general', ['as' => 'settings-general']);
	$routes->get('settings/page', 'Setting::page', ['as' => 'settings-page']);

	$routes->post('settings/general', 'Setting::saveGeneral', ['as' => 'settings-save-general']);
	$routes->post('settings/page', 'Setting::savePage', ['as' => 'settings-save-page']);
	
	$routes->get('change-password', 'Setting::changePassword', ['as' => 'change-password']);
	$routes->post('change-password', 'Setting::saveChangePassword', ['as' => 'save-change-password']);
});

$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
    // Login/out
  $routes->get('login', 'AuthController::login', ['as' => 'login']);
  $routes->post('login', 'AuthController::attemptLogin');
  $routes->get('logout', 'AuthController::logout', ['as' => 'logout']);

  $routes->get('portfolio/(:segment)', 'Portfolio::detail/$1', ['as' => 'portfolio-detail']);
  $routes->post('inbox/save', 'Inbox::save');
});
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

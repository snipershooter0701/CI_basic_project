<?php

namespace Config;

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Index 
$routes->get('/', 'Home::index');

// Language
$routes->get('/lang/{locale}', 'Language::index');

$routes->get('index-2', 'Home::show_index_2');

// Vertical Layout Pages Routes
$routes->get('layouts-compact-sidebar', 'Home::show_layouts_compact_sidebar');
$routes->get('layouts-icon-sidebar', 'Home::show_layouts_icon_sidebar');
$routes->get('layouts-boxed', 'Home::show_layouts_boxed');
$routes->get('layouts-preloader', 'Home::show_layouts_preloader');

// Horizontal Layout Pages Routes
$routes->get('layouts-horizontal', 'Home::show_layouts_horizontal');
$routes->get('layouts-hori-topbarlight', 'Home::show_layouts_hori_topbarlight');
$routes->get('layouts-hori-boxed', 'Home::show_layouts_hori_boxed');
$routes->get('layouts-hori-preloader', 'Home::show_layouts_hori_preloader');

// Calender
$routes->get('calendar', 'Home::show_calendar');

// Email
$routes->get('email-inbox', 'Home::show_email_inbox');
$routes->get('email-read', 'Home::show_email_read');

// Tasks
$routes->get('tasks-list', 'Home::show_tasks_list');
$routes->get('tasks-kanban', 'Home::show_tasks_kanban');
$routes->get('tasks-create', 'Home::show_tasks_create');

// Pages
$routes->get('pages-login', 'Home::show_pages_login');
$routes->get('pages-register', 'Home::show_pages_register');
$routes->get('pages-recoverpw', 'Home::show_pages_recoverpw');
$routes->get('pages-lock-screen', 'Home::show_pages_lock_screen');
$routes->get('pages-starter', 'Home::show_pages_starter');
$routes->get('pages-invoice', 'Home::show_pages_invoice');
$routes->get('pages-profile', 'Home::show_pages_profile');
$routes->get('pages-maintenance', 'Home::show_pages_maintenance');
$routes->get('pages-comingsoon', 'Home::show_pages_comingsoon');
$routes->get('pages-timeline', 'Home::show_pages_timeline');
$routes->get('pages-faqs', 'Home::show_pages_faqs');
$routes->get('pages-pricing', 'Home::show_pages_pricing');
$routes->get('pages-404', 'Home::show_pages_404');
$routes->get('pages-500', 'Home::show_pages_500');

// UI Elements
$routes->get('ui-alerts', 'Home::show_ui_alerts');
$routes->get('ui-buttons', 'Home::show_ui_buttons');
$routes->get('ui-cards', 'Home::show_ui_cards');
$routes->get('ui-carousel', 'Home::show_ui_carousel');
$routes->get('ui-dropdowns', 'Home::show_ui_dropdowns');
$routes->get('ui-grid', 'Home::show_ui_grid');
$routes->get('ui-images', 'Home::show_ui_images');
$routes->get('ui-lightbox', 'Home::show_ui_lightbox');
$routes->get('ui-modals', 'Home::show_ui_modals');
$routes->get('ui-rangeslider', 'Home::show_ui_rangeslider');
$routes->get('ui-session-timeout', 'Home::show_ui_session_timeout');
$routes->get('ui-progressbars', 'Home::show_ui_progressbars');
$routes->get('ui-sweet-alert', 'Home::show_ui_sweet_alert');
$routes->get('ui-tabs-accordions', 'Home::show_ui_tabs_accordions');
$routes->get('ui-typography', 'Home::show_ui_typography');
$routes->get('ui-video', 'Home::show_ui_video');
$routes->get('ui-general', 'Home::show_ui_general');
$routes->get('ui-colors', 'Home::show_ui_colors');
$routes->get('ui-rating', 'Home::show_ui_rating');

// Forms
$routes->get('form-elements', 'Home::show_form_elements');
$routes->get('form-validation', 'Home::show_form_validation');
$routes->get('form-advanced', 'Home::show_form_advanced');
$routes->get('form-editors', 'Home::show_form_editors');
$routes->get('form-uploads', 'Home::show_form_uploads');
$routes->get('form-xeditable', 'Home::show_form_xeditable');
$routes->get('form-repeater', 'Home::show_form_repeater');
$routes->get('form-wizard', 'Home::show_form_wizard');
$routes->get('form-mask', 'Home::show_form_mask');

// Tables
$routes->get('tables-basic', 'Home::show_tables_basic');
$routes->get('tables-datatable', 'Home::show_tables_datatable');
$routes->get('tables-responsive', 'Home::show_tables_responsive');
$routes->get('tables-editable', 'Home::show_tables_editable');

// Charts
$routes->get('charts-apex', 'Home::show_charts_apex');
$routes->get('charts-chartjs', 'Home::show_charts_chartjs');
$routes->get('charts-flot', 'Home::show_charts_flot');
$routes->get('charts-knob', 'Home::show_charts_knob');
$routes->get('charts-sparkline', 'Home::show_charts_sparkline');

// Icons
$routes->get('icons-boxicons', 'Home::show_icons_boxicons');
$routes->get('icons-materialdesign', 'Home::show_icons_materialdesign');
$routes->get('icons-dripicons', 'Home::show_icons_dripicons');
$routes->get('icons-fontawesome', 'Home::show_icons_fontawesome');

// Maps
$routes->get('maps-google', 'Home::show_maps_google');
$routes->get('maps-vector', 'Home::show_maps_vector');


/*
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

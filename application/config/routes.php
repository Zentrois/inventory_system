<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/validate-login'] = 'admin/validate_login_details';

// Admin routes
$route['admin/dashboard'] = '';
$route['admin/categories'] = 'category/list_categories';
$route['admin/brands'] = 'brand/list_brands';
$route['admin/products'] = 'product/list_products';
$route['admin/orders'] = 'order/list_orders';
$route['admin/reports'] = 'report/report_dashboard';
$route['admin/profile-settings'] = 'settings/profile_settings';
$route['admin/currency-settings'] = 'settings/currency_settings';
$route['admin/products-image-settings'] = 'settings/product_image_settings';
$route['admin/footer-settings'] = 'settings/footer_settings';

// Handle Ajax Request
$route["inventory-ajax"] = "ajax/handle_ajax_request";

// APC Module Routes
$route['admin/update-apc'] = 'apc/update_apc';
$route['admin/publication-details'] = 'apc/publications_details';
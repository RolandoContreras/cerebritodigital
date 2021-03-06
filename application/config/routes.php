<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';

$route['blog'] = 'blog';
$route['blog/([0-9]+)'] = 'blog/index/$1';
$route['blog/([0-9a-z_-]+)'] = 'blog/category/$1';
$route['blog/([0-9a-z_-]+)/([0-9]+)'] = 'blog/category/$1';
$route['blog/([0-9a-z_-]+)/([0-9a-z_-]+)'] = 'blog/detail/$1';

$route['404_override'] = 'home/error';

$route['terminos-condiciones'] = 'home/term';
$route['policy-cookies'] = 'home/policy';

$route['courses'] = 'courses';
$route['courses/([0-9]+)'] = 'courses/index/$1';
$route['courses/([0-9a-z_-]+)'] = 'courses/category/$1';
$route['courses/([0-9a-z_-]+)/([0-9]+)'] = 'courses/category/$1';
$route['courses/([0-9a-z_-]+)/([0-9a-z_-]+)'] = 'courses/detail/$1';

$route['register/validate_username'] = "register/validate_username";
$route['register/validate'] = "register/validate";
$route['register/([0-9a-z_-]+)'] = "register/index/$1";

$route['forget/recover_pass'] = "forget/recover_pass";

$route['backoffice'] = "b_home";
$route['backoffice/side_binary'] = "b_home/side_binary";

$route['backoffice/profile'] = "b_profile";
$route['backoffice/profile/update_password'] = "b_profile/update_password";
$route['backoffice/profile/update_bank'] = "b_profile/update_bank";

$route['backoffice/plan'] = "b_plan";
$route['backoffice/plan/create_invoice'] = "b_plan/create_invoice";
$route['backoffice/recompra'] = "b_plan/recompra";
$route['backoffice/plan/create_invoice_recompra'] = "b_plan/create_invoice_recompra";


$route['backoffice/referred'] = "b_network";
$route['backoffice/unilevel'] = "b_network/unilevel";
$route['backoffice/unilevel/([0-9a-z_A-Z-=+/]+)'] = "b_network/unilevel/unilevel/$1";

$route['backoffice/binario'] = "b_network/binario";
$route['backoffice/binario/([0-9a-z_A-Z-=+/]+)'] = "b_network/binario/$1";


$route['backoffice/history'] = "b_finance";
$route['backoffice/invoice'] = "b_finance/invoice";
$route['backoffice/invoice/upload'] = "b_finance/upload";
$route['backoffice/invoice_detail/([0-9]+)'] = "b_finance/invoice_detail/$1";


$route['backoffice/files'] = "b_files";

$route['backoffice/carrera'] = "b_carrera";

$route['backoffice/pay'] = "b_pay";
$route['backoffice/pay/validate_amount'] = "b_pay/validate_amount";
$route['backoffice/pay/make_pay'] = "b_pay/make_pay";

$route['course'] = "c_home";
$route['course/([0-9]+)'] = 'c_home/index/$1';
$route['course/([0-9a-z_-]+)'] = 'c_home/category/$1';
$route['course/([0-9a-z_-]+)/([0-9]+)'] = 'c_home/category/$1';
$route['course/([0-9a-z_-]+)/([0-9a-z_-]+)'] = 'c_home/detail/$1';

$route['dashboard'] = "dashboard";
$route['dashboard/panel'] = "panel";
$route['dashboard/panel/save_video_home'] = "panel/save_video_home";

$route['dashboard/panel/guardar_btc'] = "panel/guardar_btc";
$route['dashboard/panel/cambiar_status'] = "panel/cambiar_status";
$route['dashboard/panel/masive_messages'] = "panel/masive_messages";

$route['dashboard/comisiones'] = "d_comission";
$route['dashboard/comisiones/load/([0-9]+)'] = "d_comission/load/$1";
$route['dashboard/comisiones/validate_customer'] = "d_comission/validate_customer";
$route['dashboard/comisiones/validate'] = "d_comission/validate";

$route['dashboard/blog'] = "d_blog";
$route['dashboard/blog/load'] = "d_blog/load";
$route['dashboard/blog/load/([0-9]+)'] = "d_blog/load/$1";
$route['dashboard/blog/validate'] = "d_blog/validate";

$route['dashboard/noticias'] = "d_news";
$route['dashboard/noticias/load'] = "d_news/load";
$route['dashboard/noticias/load/([0-9]+)'] = "d_news/load/$1";
$route['dashboard/noticias/validate'] = "d_news/validate";

$route['dashboard/catalogo'] = "d_catalog";
$route['dashboard/catalogo/load'] = "d_catalog/load";
$route['dashboard/catalogo/load/([0-9]+)'] = "d_catalog/load/$1";
$route['dashboard/catalogo/validate'] = "d_catalog/validate";

$route['dashboard/videos'] = "d_videos";
$route['dashboard/videos/load'] = "d_videos/load";
$route['dashboard/videos/load/([0-9]+)'] = "d_videos/load/$1";
$route['dashboard/videos/validate'] = "d_videos/validate";

$route['dashboard/bonos'] = "d_bonus"; 
$route['dashboard/bonos/load/([0-9]+)'] = "d_bonus/load/$1";
$route['dashboard/bonos/validate'] = "d_bonus/validate";

$route['dashboard/facturas'] = "d_invoices"; 
$route['dashboard/facturas/load/([0-9]+)'] = "d_invoices/load/$1";
$route['dashboard/facturas/validate'] = "d_invoices/validate";

$route['dashboard/facturas_catalogo'] = "d_invoices/catalogo"; 
$route['dashboard/facturas_catalogo/load/([0-9]+)'] = "d_invoices/catalogo_load/$1";
$route['dashboard/facturas_catalogo/validate'] = "d_invoices/catalogo_validate";
$route['dashboard/facturas/ver/([0-9]+)'] = "d_invoices/ver_invoice/$1"; 

$route['dashboard/correos'] = "d_messages_masive"; 

$route['dashboard/rangos'] = "d_ranges";
$route['dashboard/rangos/load'] = "d_ranges/load";
$route['dashboard/rangos/load/([0-9]+)'] = "d_ranges/load/$1";
$route['dashboard/rangos/validate'] = "d_ranges/validate";

$route['dashboard/membresias'] = "d_kit";
$route['dashboard/membresias/load'] = "d_kit/load";
$route['dashboard/membresias/load/([0-9]+)'] = "d_kit/load/$1";
$route['dashboard/membresias/validate'] = "d_kit/validate";

$route['dashboard/clientes'] = "d_customer";
$route['dashboard/financiados'] = "d_customer/financiados";
$route['dashboard/clientes/active_customer'] = "d_customer/active_customer";
$route['dashboard/clientes/no_active_customer'] = "d_customer/no_active_customer";
$route['dashboard/clientes/load/([0-9]+)'] = "d_customer/load/$1";
$route['dashboard/clientes/validate'] = "d_customer/validate";

$route['dashboard/categorias'] = "d_category";
$route['dashboard/categorias/load'] = "d_category/load";
$route['dashboard/categorias/load/([0-9]+)'] = "d_category/load/$1";
$route['dashboard/categorias/validate'] = "d_category/validate";

$route['dashboard/comentarios'] = "d_comments";
$route['dashboard/comentarios/cambiar_status'] = "d_comments/change_status";
$route['dashboard/comentarios/cambiar_status_no'] = "d_comments/change_status_no";

$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios/load'] = "d_users/load";
$route['dashboard/usuarios/load/([0-9]+)'] = "d_users/load/$1";
$route['dashboard/usuarios/validate'] = "d_users/validate";

$route['dashboard/confirmation_activaciones'] = "d_activate/confirmation";

$route['dashboard/activaciones'] = "d_activate";
$route['dashboard/activaciones/active'] = "d_activate/active";
$route['dashboard/activaciones/update_confirmation'] = "d_activate/update_confirmation";

$route['dashboard/activaciones_recompra'] = "d_activate/recompra";
$route['dashboard/activaciones_recompra/active_catalogo'] = "d_activate/active_catalogo";

$route['dashboard/activar_pagos'] = "d_active_pays";
$route['dashboard/activar_pagos/pagado'] = "d_active_pays/pagado";
$route['dashboard/activar_pagos/devolver'] = "d_active_pays/devolver";

$route['dashboard/pagos'] = "d_pays";
$route['dashboard/pagos/pagado'] = "d_pays/pagado";
$route['dashboard/pagos/load/([0-9]+)'] = "d_pays/load/$1";
$route['dashboard/pagos/devolver'] = "d_pays/devolver";
$route['dashboard/pagos/load/([0-9]+)'] = "d_pays/load/$1";
$route['dashboard/pagos/validate_customer'] = "d_pays/validate_customer";
$route['dashboard/pagos/validate'] = "d_pays/validate";

$route['dashboard/comentarios'] = "d_comments";
$route['dashboard/comentarios/cambiar_status'] = "d_comments/change_status";
$route['dashboard/comentarios/cambiar_status_no'] = "d_comments/change_status_no";

$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios/load'] = "d_users/load";
$route['dashboard/usuarios/load/([0-9]+)'] = "d_users/load/$1";
$route['dashboard/usuarios/validate'] = "d_users/validate";

$route['dashboard/puntos_binario'] = "d_point_binary";
$route['dashboard/puntos_binario/load/([0-9]+)'] = "d_point_binary/load/$1";
$route['dashboard/puntos_binario/validate'] = "d_point_binary/validate";

$route['dashboard/report_customer'] = "d_report_customer";
$route['dashboard/report_customer/load'] = "d_report_customer/load";
$route['dashboard/report_customer/export'] = "d_report_customer/export";

$route['dashboard/report_invoice'] = "d_report_invoice";
$route['dashboard/report_invoice/load'] = "d_report_invoice/load";
$route['dashboard/report_invoice/export'] = "d_report_invoice/export";

$route['dashboard/report_pay'] = "d_report_pay";
$route['dashboard/report_pay/load'] = "d_report_pay/load";
$route['dashboard/report_pay/export'] = "d_report_pay/export";

$route['dashboard/report_global'] = "d_report_global";




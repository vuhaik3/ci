<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/


$route['admin']                     = "login/loginform";
$route['admin/login-action']        = "login/loginaction";
$route['admin/login-ok']            = "admin/index";
$route['admin/logout']              = "login/logout";
$route['admin/delaction-(:any)-(:num)-(:any)']  =  "action/deleteaction/$1/$2/$3";
$route['admin/del_article/(:num)']  =  "article/deletearticle/$1";
$route['admin/view-session/(:num)'] = "session/viewsession/$1";
$route['admin/view-session']        = "session/viewsession/0";
$route['admin/addnewsession']       = "session/addnewaction";
$route['admin/editactionsess(:num)']= "session/editaction/$1";
$route['admin/editsess(:num)']      = "session/vieweditform/$1";
$route['admin/view-category']       = "category/viewcategory/0";
$route['admin/view-category/(:num)']= "category/viewcategory/$1";
$route['admin/view-contact']        = "contactweb/viewcontact/0";
$route['admin/view-contact/(:num)'] = "contactweb/viewcontact/$1";
$route['admin/add-new-cat']         = "category/addnewcategory";
$route['admin/addnewcataction']     = "category/addnewaction";
$route['admin/editcat(:num)']       = "category/vieweditform/$1";
$route['admin/edicataction(:num)']  = "category/editaction/$1";
$route['admin/view-article/(:num)'] = "article/viewarticle/$1";
$route['admin/view-article']        = "article/viewarticle/0";
$route['admin/add-new-article']     = "article/addnewarticle";
$route['admin/addnewarticle']       = "article/addnewaction";
$route['admin/editarticle(:num)']   = "article/vieweditarticle/$1";
$route['admin/editarticleaction(:num)']   = "article/editaction/$1";
$route['admin/deleteall/(:any)/(:any)']   = "action/deleteall/$1/$2";
$route['admin/dashboard']           = "admin/editdashboard/1";
$route['admin/updatedashboard/(:num)']    = "admin/editaction/$1";
$route['admin/profile']             = "admin/viewprofile";
$route['admin/profile(:num)']       = "admin/viewprofileedit/$1";
$route['admin/editaction(:num)']    = "admin/edit_action/$1";
$route['admin/changepassword']      = "admin/viewchangepassword";
$route['admin/changepassaction(:num)']    =  "admin/changepassaction/$1";
$route['admin/addnewuser']          = "admin/add_new_user";
$route['admin/view-listuser']       = "admin/view_list_user";
$route['admin/view-support']        = "contact/onlinesupport";
$route['admin/addnickname']         = "contact/add_nick_support";
$route['admin/editnickname(:num)']  = "contact/edit_form/$1";
$route['admin/editsupportaction(:num)']   =  "contact/ediaction/$1";
$route['admin/view-banner']         = "banner/view_banner";
$route['admin/addbanneraction']     = "banner/addnewaction";
$route['admin/vieweditbanner/(:num)']     =  "banner/view_ediform/$1";
$route['admin/editbanneraction/(:num)']   =  "banner/editaction/$1";
$route['admin/view-pages']          = "pages/view_pages/0";
$route['admin/view-pages/(:num)']   = "pages/view_pages/$1";
$route['admin/addnewpage']          = "pages/addnewaction";
$route['admin/vieweditpage/(:num)'] = "pages/view_edit_page/$1";
$route['admin/editpages/(:num)']    = "pages/editaction/$1";
$route['admin/view-news']           = "news/view_news/0";
$route['admin/view-news/(:num)']    = "news/view_news/$1";
$route['admin/addnews']             = "news/addnewaction";
$route['admin/editnews/(:num)']     = "news/view_editnews/$1";
$route['admin/editnewsaction/(:num)']  =  "news/editaction/$1";
$route['admin/changepublic/(:any)-(:num)-(:num)-(:num)'] = "action/changepublic/$1/$2/$3/$4";
$route['admin/searcharticle']       = "article/searcharticle/0";
$route['admin/searcharticle/(:num)']= "article/searcharticle/$1";

/*
 * list category
 */



/* End of file routes.php */
/* Location: ./application/config/routes.php */
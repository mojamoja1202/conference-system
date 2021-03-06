<?php
$modversion = array();

//---模組基本資訊---//
$modversion['name']        = "投稿系統";
$modversion['version']     = '1.3';
$modversion['description'] = "高師大工教系投稿統整用";
$modversion['author']      = "炮管很大的大炮";
$modversion['credits']     = "當然屬於大炮";
$modversion['help']        = 'page=help';
$modversion['license']     = 'GPL see LICENSE';
$modversion['image']       = "images/logo.png";
$modversion['dirname']     = basename(__DIR__);

//---模組狀態資訊---//
$modversion['status_version']      = '1.0';
$modversion['release_date']        = '2019-04-30';
$modversion['module_website_url']  = 'http://localhost';
$modversion['module_website_name'] = "投稿系統";
$modversion['module_status']       = 'release';
$modversion['author_website_url']  = 'http://localhost';
$modversion['author_website_name'] = "投稿系統";
$modversion['min_php']             = '5.4';
$modversion['min_xoops']           = '2.5';

//---paypal資訊---//
$modversion['paypal']                  = array();
$modversion['paypal']['business']      = 'mojamoja1202@gmail.com';
$modversion['paypal']['item_name']     = 'Donation : 葉大炮';
$modversion['paypal']['amount']        = 0;
$modversion['paypal']['currency_code'] = 'USD';

//---安裝設定---//
$modversion['onInstall']   = "include/onInstall.php";
$modversion['onUpdate']    = "include/onUpdate.php";
$modversion['onUninstall'] = "include/onUninstall.php";

//---啟動後台管理界面選單---//
$modversion['system_menu'] = 1;

//---資料表架構---//
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][]         = "";
$modversion['tables'][]         = "kw_club_cate";
$modversion['tables'][]         = "kw_club_place";
$modversion['tables'][]         = "kw_club_teacher";
$modversion['tables'][]         = "kw_club_class";
$modversion['tables'][]         = "kw_club_reg";
$modversion['tables'][]         = "kw_club_files_center";

//---管理介面設定---//
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu']  = "admin/menu.php";

//---前台主選單設定---//
$modversion['hasMain'] = 1;
$i                     = 0;
$i++;
$modversion['sub'][$i]['name'] = _MI_KWCLUB_SMNAME2;
$modversion['sub'][$i]['url']  = "index.php?op=teacher";
$i++;
$modversion['sub'][$i]['name'] = _MI_KWCLUB_SMNAME3;
$modversion['sub'][$i]['url']  = "index.php?op=myclass";
// $i++;
// $modversion['sub'][$i]['name'] = _MI_KWCLUB_SMNAME4;
// $modversion['sub'][$i]['url']  = "index.php?op=statistic";

//---樣板設定---//
$modversion['templates']                    = array();
$i                                          = 1;
$modversion['templates'][$i]['file']        = 'kw_club_config.tpl';
$modversion['templates'][$i]['description'] = 'kw_club_config.tpl';

$i++;
$modversion['templates'][$i]['file']        = 'kw_club_register.tpl';
$modversion['templates'][$i]['description'] = 'kw_club_register.tpl';

$i++;
$modversion['templates'][$i]['file']        = 'kw_club_index.tpl';
$modversion['templates'][$i]['description'] = 'kw_club_index.tpl';

$i++;
$modversion['templates'][$i]['file']        = 'kw_club_club.tpl';
$modversion['templates'][$i]['description'] = 'kw_club_club.tpl';

$i++;
$modversion['templates'][$i]['file']        = 'kw_club_cate.tpl';
$modversion['templates'][$i]['description'] = 'kw_club_cate.tpl';

$i++;
$modversion['templates'][$i]['file']        = 'kw_club_adm_main.tpl';
$modversion['templates'][$i]['description'] = 'kw_club_adm_main.tpl';

//---區塊設定---//
$i = 0;
$i++;
$modversion['blocks'][$i]['file']        = 'kw_club_show.php';
$modversion['blocks'][$i]['name']        = _MI_KW_CLUB_SHOW_BLOCK_NAME;
$modversion['blocks'][$i]['description'] = _MI_KW_CLUB_SHOW_BLOCK_DESC;
$modversion['blocks'][$i]['show_func']   = 'kw_club_show';
$modversion['blocks'][$i]['template']    = 'kw_club_show.tpl';

//---搜尋設定---//
$modversion['hasSearch']      = 1;
$modversion['search']['file'] = "include/search.php";
$modversion['search']['func'] = "kw_club_search";

//---偏好設定---//
$modversion['config'] = array();
$i                    = 0;

$modversion['config'][$i]['name']        = 'school_grade';
$modversion['config'][$i]['title']       = '_MI_KWCLUB_SCHOOL_GRADE';
$modversion['config'][$i]['description'] = '_MI_KWCLUB_SCHOOL_GRADE_DESC';
$modversion['config'][$i]['formtype']    = 'select_multi';
$modversion['config'][$i]['valuetype']   = 'array';
$modversion['config'][$i]['default']     = array(_MI_KWCLUB_SCHOOL_GV0, _MI_KWCLUB_SCHOOL_GV1, _MI_KWCLUB_SCHOOL_GV2, _MI_KWCLUB_SCHOOL_GV3, _MI_KWCLUB_SCHOOL_GV4, _MI_KWCLUB_SCHOOL_GV5, _MI_KWCLUB_SCHOOL_GV6);
$modversion['config'][$i]['options']     = array(

    _MI_KWCLUB_SCHOOL_GK0  => _MI_KWCLUB_SCHOOL_GV0,
    _MI_KWCLUB_SCHOOL_GK1  => _MI_KWCLUB_SCHOOL_GV1,
    _MI_KWCLUB_SCHOOL_GK2  => _MI_KWCLUB_SCHOOL_GV2,
    _MI_KWCLUB_SCHOOL_GK3  => _MI_KWCLUB_SCHOOL_GV3,
    _MI_KWCLUB_SCHOOL_GK4  => _MI_KWCLUB_SCHOOL_GV4,
    _MI_KWCLUB_SCHOOL_GK5  => _MI_KWCLUB_SCHOOL_GV5,
    _MI_KWCLUB_SCHOOL_GK6  => _MI_KWCLUB_SCHOOL_GV6,
    _MI_KWCLUB_SCHOOL_GK7  => _MI_KWCLUB_SCHOOL_GV7,
    _MI_KWCLUB_SCHOOL_GK8  => _MI_KWCLUB_SCHOOL_GV8,
    _MI_KWCLUB_SCHOOL_GK9  => _MI_KWCLUB_SCHOOL_GV9,
    _MI_KWCLUB_SCHOOL_GK10 => _MI_KWCLUB_SCHOOL_GV10,
    _MI_KWCLUB_SCHOOL_GK11 => _MI_KWCLUB_SCHOOL_GV11,
    _MI_KWCLUB_SCHOOL_GK12 => _MI_KWCLUB_SCHOOL_GV12);

$i++;
$modversion['config'][$i]['name']        = 'school_class';
$modversion['config'][$i]['title']       = '_MI_KWCLUB_SCHOOL_CLASS';
$modversion['config'][$i]['description'] = '_MI_KWCLUB_SCHOOL_CLASS_DESC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = _MI_KWCLUB_SCHOOL_CLASS_DEFAULT;

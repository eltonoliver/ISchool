<?php
include_once('menu_dashboard_session.php');
session_start();
$tmp_useragent                           = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['scriptcase']['device_mobile'] = preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$tmp_useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($tmp_useragent,0,4));
if ($_SESSION['scriptcase']['device_mobile'])
{
    if (!isset($_SESSION['scriptcase']['display_mobile']))
    {
        $_SESSION['scriptcase']['display_mobile'] = true;
    }
    if ($_SESSION['scriptcase']['display_mobile'] && isset($_POST['_sc_force_mobile']) && 'out' == $_POST['_sc_force_mobile'])
    {
        $_SESSION['scriptcase']['display_mobile'] = false;
    }
    elseif (!$_SESSION['scriptcase']['display_mobile'] && isset($_POST['_sc_force_mobile']) && 'in' == $_POST['_sc_force_mobile'])
    {
        $_SESSION['scriptcase']['display_mobile'] = true;
    }
}
else
{
    $_SESSION['scriptcase']['display_mobile'] = false;
}
    $_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod'] = "/scriptcase/prod";
    $_SESSION['scriptcase']['menu_dashboard']['glo_nm_perfil']    = "";
    $_SESSION['scriptcase']['menu_dashboard']['glo_nm_conexao']   = "conn_mysql";
    $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] = "S";

ob_start();

class menu_dashboard_class
{
  var $Db;

 function sc_Include($path, $tp, $name)
 {
     if ((empty($tp) && empty($name)) || ($tp == "F" && !function_exists($name)) || ($tp == "C" && !class_exists($name)))
     {
         include_once($path);
     }
 } // sc_Include

 function menu_dashboard_menu()
 {
    global $menu_dashboard_menuData;
     if (isset($_POST["nmgp_idioma"]))  
     { 
         $Temp_lang = explode(";" , $_POST["nmgp_idioma"]);  
         if (isset($Temp_lang[0]) && !empty($Temp_lang[0]))  
          { 
             $_SESSION['scriptcase']['str_lang'] = $Temp_lang[0];
         } 
         if (isset($Temp_lang[1]) && !empty($Temp_lang[1])) 
         { 
             $_SESSION['scriptcase']['str_conf_reg'] = $Temp_lang[1];
         } 
     } 
   
     if (isset($_POST["nmgp_schema"]))  
     { 
         $_SESSION['scriptcase']['str_schema_all'] = $_POST["nmgp_schema"] . "/" . $_POST["nmgp_schema"];
     } 
   
           $nm_versao_sc  = "" ; 
           $_SESSION['scriptcase']['menu_dashboard']['contr_erro'] = 'off';
           $Campos_Mens_erro = "";
           $sc_site_ssl   = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? true : false;
           $NM_dir_atual = getcwd();
           if (empty($NM_dir_atual))
           {
               $str_path_sys          = (isset($_SERVER['SCRIPT_FILENAME'])) ? $_SERVER['SCRIPT_FILENAME'] : $_SERVER['ORIG_PATH_TRANSLATED'];
               $str_path_sys          = str_replace("\\", '/', $str_path_sys);
           }
           else
           {
               $sc_nm_arquivo         = explode("/", $_SERVER['PHP_SELF']);
               $str_path_sys          = str_replace("\\", "/", getcwd()) . "/" . $sc_nm_arquivo[count($sc_nm_arquivo)-1];
           }
      //check publication with the prod
      $str_path_apl_url = $_SERVER['PHP_SELF'];
      $str_path_apl_url = str_replace("\\", '/', $str_path_apl_url);
      $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/"));
      $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/")+1);
      $str_path_apl_dir = substr($str_path_sys, 0, strrpos($str_path_sys, "/"));
      $str_path_apl_dir = substr($str_path_apl_dir, 0, strrpos($str_path_apl_dir, "/")+1);
      //check prod
      if(empty($_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod']))
      {
              /*check prod*/$_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod'] = $str_path_apl_url . "_lib/prod";
      }
$this->sc_charset['UTF-8'] = 'utf-8';
$this->sc_charset['ISO-8859-1'] = 'iso-8859-1';
$this->sc_charset['SJIS'] = 'shift-jis';
$this->sc_charset['ISO-8859-14'] = 'iso-8859-14';
$this->sc_charset['ISO-8859-7'] = 'iso-8859-7';
$this->sc_charset['ISO-8859-10'] = 'iso-8859-10';
$this->sc_charset['ISO-8859-3'] = 'iso-8859-3';
$this->sc_charset['ISO-8859-15'] = 'iso-8859-15';
$this->sc_charset['WINDOWS-1252'] = 'windows-1252';
$this->sc_charset['ISO-8859-13'] = 'iso-8859-13';
$this->sc_charset['ISO-8859-4'] = 'iso-8859-4';
$this->sc_charset['ISO-8859-2'] = 'iso-8859-2';
$this->sc_charset['ISO-8859-5'] = 'iso-8859-5';
$this->sc_charset['KOI8-R'] = 'koi8-r';
$this->sc_charset['WINDOWS-1251'] = 'windows-1251';
$this->sc_charset['BIG-5'] = 'big5';
$this->sc_charset['EUC-CN'] = 'EUC-CN';
$this->sc_charset['EUC-JP'] = 'euc-jp';
$this->sc_charset['ISO-2022-JP'] = 'iso-2022-jp';
$this->sc_charset['EUC-KR'] = 'euc-kr';
$this->sc_charset['ISO-2022-KR'] = 'iso-2022-kr';
$this->sc_charset['ISO-8859-9'] = 'iso-8859-9';
$this->sc_charset['ISO-8859-6'] = 'iso-8859-6';
$this->sc_charset['ISO-8859-8'] = 'iso-8859-8';
$this->sc_charset['ISO-8859-8-I'] = 'iso-8859-8-i';
$str_path_web   = $_SERVER['PHP_SELF'];
$str_path_web   = str_replace("\\", '/', $str_path_web);
$str_path_web   = str_replace('//', '/', $str_path_web);
$str_root       = substr($str_path_sys, 0, -1 * strlen($str_path_web));
$path_link      = substr($str_path_web, 0, strrpos($str_path_web, '/'));
$path_link      = substr($path_link, 0, strrpos($path_link, '/')) . '/';
$path_btn       = $str_root . $path_link . "_lib/buttons/";
$path_imag_cab  = $path_link . "_lib/img";
$this->force_mobile = false;
$this->path_botoes    = '../_lib/img';
$this->path_imag_apl  = $str_root . $path_link . "_lib/img";
$path_help      = $path_link . "_lib/webhelp/";
$path_libs      = $str_root . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod'] . "/lib/php";
$path_third     = $str_root . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod'] . "/third";
$path_adodb     = $str_root . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod'] . "/third/adodb";
$path_apls      = $str_root . substr($path_link, 0, strrpos($path_link, '/'));
$path_img_old   = $str_root . $path_link . "menu_dashboard/img";
$this->path_css = $str_root . $path_link . "_lib/css/";
$this->url_css = "../_lib/css/";
$path_lib_php   = $str_root . $path_link . "_lib/lib/php";
$menu_mobile_hide          = 'S';
$menu_mobile_inicial_state = 'aberto';
$menu_mobile_hide_onclick  = 'N';
$menutree_mobile_float     = 'S';
$menu_mobile_hide_icon     = 'N';
$menu_mobile_hide_icon_menu_position     = 'below';
$mobile_menu_mobile_hide          = 'S';
$mobile_menu_mobile_inicial_state = 'aberto';
$mobile_menu_mobile_hide_onclick  = 'S';
$mobile_menutree_mobile_float     = 'N';
$mobile_menu_mobile_hide_icon     = 'N';
$mobile_menu_mobile_hide_icon_menu_position     = 'right';

$this->sc_Include($path_libs . "/nm_ini_perfil.php", "F", "perfil_lib") ; 
 if(function_exists('set_php_timezone')) set_php_timezone('menu_dashboard');
if (isset($_SESSION['scriptcase']['user_logout']))
{
    foreach ($_SESSION['scriptcase']['user_logout'] as $ind => $parms)
    {
        if (isset($_SESSION[$parms['V']]) && $_SESSION[$parms['V']] == $parms['U'])
        {
            unset($_SESSION['scriptcase']['user_logout'][$ind]);
            $nm_apl_dest = $parms['R'];
            $dir = explode("/", $nm_apl_dest);
            if (count($dir) == 1)
            {
                $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
                $nm_apl_dest = $path_link . SC_dir_app_name($nm_apl_dest) . "/";
            }
?>
            <html>
            <body>
            <form name="FRedirect" method="POST" action="<?php echo $nm_apl_dest; ?>" target="<?php echo $parms['T']; ?>">
            </form>
            <script>
             document.FRedirect.submit();
            </script>
            </body>
            </html>
<?php
            exit;
        }
    }
}
if (!defined("SC_ERROR_HANDLER"))
{
    define("SC_ERROR_HANDLER", 1);
    include_once(dirname(__FILE__) . "/menu_dashboard_erro.php");
}
include_once(dirname(__FILE__) . "/menu_dashboard_erro.class.php"); 
$this->Erro = new menu_dashboard_erro();
$str_path = substr($_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod'], 0, strrpos($_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod'], '/') + 1);
if (!is_file($str_root . $str_path . 'devel/class/xmlparser/nmXmlparserIniSys.class.php'))
{
    unset($_SESSION['scriptcase']['nm_sc_retorno']);
    unset($_SESSION['scriptcase']['menu_dashboard']['glo_nm_conexao']);
}

/* Definição dos Caminhos */
$menu_dashboard_menuData         = array();
$menu_dashboard_menuData['path'] = array();
$menu_dashboard_menuData['url']  = array();
$NM_dir_atual = getcwd();
if (empty($NM_dir_atual))
{
    $menu_dashboard_menuData['path']['sys'] = (isset($_SERVER['SCRIPT_FILENAME'])) ? $_SERVER['SCRIPT_FILENAME'] : $_SERVER['ORIG_PATH_TRANSLATED'];
    $menu_dashboard_menuData['path']['sys'] = str_replace("\\", '/', $str_path_sys);
    $menu_dashboard_menuData['path']['sys'] = str_replace('//', '/', $str_path_sys);
}
else
{
    $sc_nm_arquivo                                   = explode("/", $_SERVER['PHP_SELF']);
    $menu_dashboard_menuData['path']['sys'] = str_replace("\\", "/", str_replace("\\\\", "\\", getcwd())) . "/" . $sc_nm_arquivo[count($sc_nm_arquivo)-1];
}
$menu_dashboard_menuData['url']['web']   = $_SERVER['PHP_SELF'];
$menu_dashboard_menuData['url']['web']   = str_replace("\\", '/', $menu_dashboard_menuData['url']['web']);
$menu_dashboard_menuData['path']['root'] = substr($menu_dashboard_menuData['path']['sys'],  0, -1 * strlen($menu_dashboard_menuData['url']['web']));
$menu_dashboard_menuData['path']['app']  = substr($menu_dashboard_menuData['path']['sys'],  0, strrpos($menu_dashboard_menuData['path']['sys'],  '/'));
$menu_dashboard_menuData['path']['link'] = substr($menu_dashboard_menuData['path']['app'],  0, strrpos($menu_dashboard_menuData['path']['app'],  '/'));
$menu_dashboard_menuData['path']['link'] = substr($menu_dashboard_menuData['path']['link'], 0, strrpos($menu_dashboard_menuData['path']['link'], '/')) . '/';
$menu_dashboard_menuData['path']['app'] .= '/';
$menu_dashboard_menuData['url']['app']   = substr($menu_dashboard_menuData['url']['web'],  0, strrpos($menu_dashboard_menuData['url']['web'],  '/'));
$menu_dashboard_menuData['url']['link']  = substr($menu_dashboard_menuData['url']['app'],  0, strrpos($menu_dashboard_menuData['url']['app'],  '/'));
if ($_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] == "S")
{
    $menu_dashboard_menuData['url']['link']  = substr($menu_dashboard_menuData['url']['link'], 0, strrpos($menu_dashboard_menuData['url']['link'], '/'));
}
$menu_dashboard_menuData['url']['link']  .= '/';
$menu_dashboard_menuData['url']['app']   .= '/';

$nm_img_fun_menu = ""; 
if (!isset($_SESSION['scriptcase']['str_lang']) || empty($_SESSION['scriptcase']['str_lang']))
{
    $_SESSION['scriptcase']['str_lang'] = "pt_br";
}
if (!isset($_SESSION['scriptcase']['str_conf_reg']) || empty($_SESSION['scriptcase']['str_conf_reg']))
{
    $_SESSION['scriptcase']['str_conf_reg'] = "pt_br";
}
$this->str_lang        = $_SESSION['scriptcase']['str_lang'];
$this->str_conf_reg    = $_SESSION['scriptcase']['str_conf_reg'];
if (!function_exists("NM_is_utf8"))
{
   include_once("menu_dashboard_nmutf8.php");
}
if (!function_exists("SC_dir_app_ini"))
{
    include_once("../_lib/lib/php/nm_ctrl_app_name.php");
}
SC_dir_app_ini('ISchool');
if ($_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] == "S")
{
    $path_apls     = substr($path_apls, 0, strrpos($path_apls, '/'));
}
$path_apls     .= "/";
$this->str_schema_all = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "Sc8_Saphir/Sc8_Saphir";
include("../_lib/lang/". $this->str_lang .".lang.php");
include("../_lib/css/" . $this->str_schema_all . "_menuH.php");
$this->img_sep_toolbar = trim($str_toolbar_separator);
include("../_lib/lang/config_region.php");
include("../_lib/lang/lang_config_region.php");
$this->regionalDefault();
$Str_btn_menu = trim($str_button) . "/" . trim($str_button) . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".php";
$Str_btn_css  = trim($str_button) . "/" . trim($str_button) . ".css";
include($path_btn . $Str_btn_menu);
if (!function_exists("nmButtonOutput"))
{
   include_once("../_lib/lib/php/nm_gp_config_btn.php");
}
asort($this->Nm_lang_conf_region);
$this->sc_Include($path_lib_php . "/nm_data.class.php", "C", "nm_data") ; 
$this->sc_Include($path_lib_php . "/nm_functions.php", "", "") ; 
$this->nm_data = new nm_data("pt_br");
include_once("menu_dashboard_toolbar.php");

$this->tab_grupo[0] = "ISchool/";
if ($_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] != "S")
{
    $this->tab_grupo[0] = "";
}

     if (isset($_SESSION['scriptcase']['sc_connection']) && !empty($_SESSION['scriptcase']['sc_connection']))
     {
         foreach ($_SESSION['scriptcase']['sc_connection'] as $NM_con_orig => $NM_con_dest)
         {
             if (isset($_SESSION['scriptcase']['menu_dashboard']['glo_nm_conexao']) && $_SESSION['scriptcase']['menu_dashboard']['glo_nm_conexao'] == $NM_con_orig)
             {
/*NM*/           $_SESSION['scriptcase']['menu_dashboard']['glo_nm_conexao'] = $NM_con_dest;
             }
             if (isset($_SESSION['scriptcase']['menu_dashboard']['glo_nm_perfil']) && $_SESSION['scriptcase']['menu_dashboard']['glo_nm_perfil'] == $NM_con_orig)
             {
/*NM*/           $_SESSION['scriptcase']['menu_dashboard']['glo_nm_perfil'] = $NM_con_dest;
             }
             if (isset($_SESSION['scriptcase']['menu_dashboard']['glo_con_' . $NM_con_orig]))
             {
                 $_SESSION['scriptcase']['menu_dashboard']['glo_con_' . $NM_con_orig] = $NM_con_dest;
             }
         }
     }
$_SESSION['scriptcase']['charset'] = (isset($this->Nm_lang['Nm_charset']) && !empty($this->Nm_lang['Nm_charset'])) ? $this->Nm_lang['Nm_charset'] : "UTF-8";
$_SESSION['scriptcase']['charset_html']  = (isset($this->sc_charset[$_SESSION['scriptcase']['charset']])) ? $this->sc_charset[$_SESSION['scriptcase']['charset']] : $_SESSION['scriptcase']['charset'];
foreach ($this->Nm_conf_reg[$this->str_conf_reg] as $ind => $dados)
{
    if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
    {
        $this->Nm_conf_reg[$this->str_conf_reg][$ind] = mb_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
    }
}
foreach ($this->Nm_lang as $ind => $dados)
{
    if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($ind))
    {
        $ind = mb_convert_encoding($ind, $_SESSION['scriptcase']['charset'], "UTF-8");
        $this->Nm_lang[$ind] = $dados;
    }
    if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
    {
        $this->Nm_lang[$ind] = mb_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
    }
}
if (isset($this->Nm_lang['lang_errm_dbcn_conn']))
{
    $_SESSION['scriptcase']['db_conn_error'] = $this->Nm_lang['lang_errm_dbcn_conn'];
}
$_SESSION['scriptcase']['erro']['str_schema'] = $this->str_schema_all . "_error.css";
$_SESSION['scriptcase']['erro']['str_schema_dir'] = $this->str_schema_all . "_error" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
$_SESSION['scriptcase']['erro']['str_lang']   = $this->str_lang;
if (is_dir($path_img_old))
{
    $Res_dir_img = @opendir($path_img_old);
    if ($Res_dir_img)
    {
        while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
        {
           $Str_arquivo = "/" . $Str_arquivo;
           if (@is_file($path_img_old . $Str_arquivo) && '.' != $Str_arquivo && '..' != $path_img_old . $Str_arquivo)
           {
               @unlink($path_img_old . $Str_arquivo);
           }
        }
    }
    @closedir($Res_dir_img);
    rmdir($path_img_old);
}
//
if (isset($_GET) && !empty($_GET))
{
    foreach ($_GET as $nmgp_var => $nmgp_val)
    {
         $$nmgp_var           = $nmgp_val;
    }
}
if (isset($_POST) && !empty($_POST))
{
    foreach ($_POST as $nmgp_var => $nmgp_val)
    {
         $$nmgp_var           = $nmgp_val;
    }
}
if (isset($script_case_init))
{
    $_SESSION['sc_session'][1]['menu_dashboard']['init'] = $script_case_init;
}
else
if (!isset($_SESSION['sc_session'][1]['menu_dashboard']['init']))
{
    $_SESSION['sc_session'][1]['menu_dashboard']['init'] = "";
}
$script_case_init = $_SESSION['sc_session'][1]['menu_dashboard']['init'];
if (isset($nmgp_parms) && !empty($nmgp_parms)) 
{ 
    $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
    $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
    $todo = explode("?@?", $nmgp_parms);
    $ix = 0;
    while (!empty($todo[$ix]))
    {
       $cadapar = explode("?#?", $todo[$ix]);
       $$cadapar[0] = $cadapar[1];
       $_SESSION[$cadapar[0]] = $cadapar[1];
       $ix++;
     }
} 
$nm_url_saida = "";
if (isset($nmgp_url_saida))
{
    $nm_url_saida = $nmgp_url_saida;
    if (isset($script_case_init))
    {
        $nm_url_saida .= "?script_case_init=" . NM_encode_input($script_case_init) . "&script_case_session=" . session_id();
    }
}
if (isset($_POST["nmgp_idioma"]) || isset($_POST["nmgp_schema"]))  
{ 
    $nm_url_saida = $_SESSION['scriptcase']['sc_saida_menu_dashboard'];
}
elseif (!empty($nm_url_saida))
{
    $_SESSION['scriptcase']['sc_url_saida'][$script_case_init]  = $nm_url_saida;
    $_SESSION['scriptcase']['sc_saida_menu_dashboard'] = $nm_url_saida;
}
else
{
    $_SESSION['scriptcase']['sc_saida_menu_dashboard'] = (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : "javascript:window.close()";
}
$this->str_schema_all = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "Sc8_Saphir/Sc8_Saphir";
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['menu_dashboard'] = "on";
} 
if (!isset($_SESSION['scriptcase']['sc_apl_seg']['menu_dashboard']) || $_SESSION['scriptcase']['sc_apl_seg']['menu_dashboard'] != "on")
{ 
    $NM_Mens_Erro = $this->Nm_lang['lang_errm_unth_user'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

    <HTML>
     <HEAD>
      <TITLE></TITLE>
     <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
      <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>      <META http-equiv="Pragma" content="no-cache"/>
      <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $str_schema_all ?>_menuH.css" /> 
      <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $str_schema_all ?>_menuH<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
      <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->str_schema_all ?>_grid.css" /> 
      <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->str_schema_all ?>_grid<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
     </HEAD>
     <body>
       <table align="center" class="scGridBorder"><tr><td style="padding: 0">
       <table style="width: 100%" class="scGridTabela"><tr class="scGridFieldOdd"><td class="scGridFieldOddFont" style="padding: 15px 30px; text-align: center">
        <?php echo $NM_Mens_Erro; ?>
        <br />
        <form name="Fseg" method="post" target="_self">
         <input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($script_case_init) ?>"/> 
         <input type=hidden name="script_case_session" value="<?php echo NM_encode_input(session_id()) ?>"> 
         <input type="button" name="sc_sai_seg" value="OK" onclick="nm_saida()"> 
        </form> 
       </td></tr></table>
       </td></tr></table>
<?php
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']))
              {
?>
<br /><br /><br />
<table align="center" class="scGridBorder" style="width: 450px"><tr><td style="padding: 0">
 <table style="width: 100%" class="scGridTabela">
  <tr class="scGridFieldOdd">
   <td class="scGridFieldOddFont" style="padding: 15px 30px">
    <?php echo $this->Nm_lang['lang_errm_unth_hwto']; ?>
   </td>
  </tr>
 </table>
</td></tr></table>
<?php
              }
?>
     </body>
     <?php
     if ((isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true') || (isset($_SESSION['scriptcase']['sc_outra_jan']) && ($_SESSION['scriptcase']['sc_outra_jan'] == 'menutree' || $_SESSION['scriptcase']['sc_outra_jan'] == 'menu')))
     {
       $saida_final = 'window.close();';
     }
     else
     {
       $saida_final = 'history.back();';
     }
     ?>
    <script type="text/javascript">
      function nm_saida()
      {
<?php 
             echo $saida_final;
?> 
      }
     </script> 
<?php
    exit;
} 
$this->sc_Include($path_libs . "/nm_sec_prod.php", "F", "nm_reg_prod") ; 
include_once($path_adodb . "/adodb.inc.php"); 
$this->sc_Include($path_libs . "/nm_ini_perfil.php", "F", "perfil_lib") ; 
 if(function_exists('set_php_timezone')) set_php_timezone('menu_dashboard'); 
perfil_lib($path_libs);
if (!isset($_SESSION['sc_session'][1]['SC_Check_Perfil']))
{
    if(function_exists("nm_check_perfil_exists")) nm_check_perfil_exists($path_libs, $_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod']);
    $_SESSION['sc_session'][1]['SC_Check_Perfil'] = true;
}
$nm_falta_var    = ""; 
$nm_falta_var_db = ""; 
if (isset($_SESSION['scriptcase']['menu_dashboard']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['menu_dashboard']['glo_nm_conexao']))
{
    db_conect_devel($_SESSION['scriptcase']['menu_dashboard']['glo_nm_conexao'], $str_root . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod'], 'ISchool', 2); 
}
if (isset($_SESSION['scriptcase']['menu_dashboard']['glo_nm_perfil']) && !empty($_SESSION['scriptcase']['menu_dashboard']['glo_nm_perfil']))
{
   $_SESSION['scriptcase']['glo_perfil'] = $_SESSION['scriptcase']['menu_dashboard']['glo_nm_perfil'];
}
if (isset($_SESSION['scriptcase']['glo_perfil']) && !empty($_SESSION['scriptcase']['glo_perfil']))
{
    $_SESSION['scriptcase']['glo_senha_protect'] = "";
    carrega_perfil($_SESSION['scriptcase']['glo_perfil'], $path_libs, "");
    if (empty($_SESSION['scriptcase']['glo_senha_protect']))
    {
        $nm_falta_var .= "Perfil=" . $_SESSION['scriptcase']['glo_perfil'] . "; ";
    }
}
if (!isset($_SESSION['scriptcase']['glo_tpbanco']))
{
    $nm_falta_var_db .= "glo_tpbanco; ";
}
else
{
    $nm_tpbanco = $_SESSION['scriptcase']['glo_tpbanco']; 
}
if (!isset($_SESSION['scriptcase']['glo_servidor']))
{
    $nm_falta_var_db .= "glo_servidor; ";
}
else
{
    $nm_servidor = $_SESSION['scriptcase']['glo_servidor']; 
}
if (!isset($_SESSION['scriptcase']['glo_banco']))
{
    $nm_falta_var_db .= "glo_banco; ";
}
else
{
    $nm_banco = $_SESSION['scriptcase']['glo_banco']; 
}
if (!isset($_SESSION['scriptcase']['glo_usuario']))
{
    $nm_falta_var_db .= "glo_usuario; ";
}
else
{
    $nm_usuario = $_SESSION['scriptcase']['glo_usuario']; 
}
if (!isset($_SESSION['scriptcase']['glo_senha']))
{
    $nm_falta_var_db .= "glo_senha; ";
}
else
{
    $nm_senha = $_SESSION['scriptcase']['glo_senha']; 
}
$nm_con_db2 = array();
$nm_database_encoding = "";
if (isset($_SESSION['scriptcase']['glo_database_encoding']))
{
    $nm_database_encoding = $_SESSION['scriptcase']['glo_database_encoding']; 
}
$nm_con_persistente = "";
$nm_con_use_schema  = "";
if (isset($_SESSION['scriptcase']['glo_use_persistent']))
{
    $nm_con_persistente = $_SESSION['scriptcase']['glo_use_persistent']; 
}
if (isset($_SESSION['scriptcase']['glo_use_schema']))
{
    $nm_con_use_schema = $_SESSION['scriptcase']['glo_use_schema']; 
}
if (!empty($nm_falta_var) || !empty($nm_falta_var_db))
{
    if (empty($nm_falta_var_db))
    {
        echo "<table width=\"80%\"  border=\"1\" height=\"117\">";
        echo "<tr>";
        echo "   <td class=\"css_menu_sel\">";
        echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_glob'] . "</font>";
        echo "  " . $nm_falta_var;
        echo "   </b></td>";
        echo " </tr>";
        echo "</table>";
    }
    else
    {
        echo "<table width=\"80%\"  border=\"1\" height=\"117\">";
        echo "<tr>";
        echo "   <td class=\"css_menu_sel\">";
        echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_data'] . "</font>";
        echo "   </b></td>";
        echo " </tr>";
        echo "</table>";
    }
    if (isset($_SESSION['scriptcase']['nm_ret_exec']) && '' != $_SESSION['scriptcase']['nm_ret_exec'])
    { 
        if (isset($_SESSION['sc_session'][1]['menu_dashboard']['sc_outra_jan']) && $_SESSION['sc_session'][1]['menu_dashboard']['sc_outra_jan'])
        {
            echo "<a href='javascript:window.close()'><img border='0' src='" . $path_imag_cab . "/scriptcase__NM__exit.gif' title='" . $this->Nm_lang['lang_btns_menu_rtrn_hint'] . "' align=absmiddle></a> \n" ; 
        } 
        else 
        { 
            echo "<a href='" . $_SESSION['scriptcase']['nm_ret_exec'] . "><img border='0' src='" . $path_imag_cab . "/scriptcase__NM__exit.gif' title='" . $this->Nm_lang['lang_btns_menu_rtrn_hint'] . "' align=absmiddle></a> \n" ; 
        } 
    } 
    exit ;
} 
if (isset($_SESSION['scriptcase']['glo_db_master_usr']) && !empty($_SESSION['scriptcase']['glo_db_master_usr']))
{
    $nm_usuario = $_SESSION['scriptcase']['glo_db_master_usr']; 
}
if (isset($_SESSION['scriptcase']['glo_db_master_pass']) && !empty($_SESSION['scriptcase']['glo_db_master_pass']))
{
    $nm_senha = $_SESSION['scriptcase']['glo_db_master_pass']; 
}
if (isset($_SESSION['scriptcase']['glo_db_master_cript']) && !empty($_SESSION['scriptcase']['glo_db_master_cript']))
{
    $_SESSION['scriptcase']['glo_senha_protect'] = $_SESSION['scriptcase']['glo_db_master_cript']; 
}
$sc_tem_trans_banco = false;
$this->nm_bases_access    = array("access", "ado_access");
$this->nm_bases_ibase     = array("ibase", "firebird", "borland_ibase");
$this->nm_bases_mysql     = array("mysql", "mysqlt", "maxsql", "pdo_mysql");
$this->nm_bases_postgres  = array("postgres", "postgres64", "postgres7", "pdo_pgsql");
$this->nm_bases_sqlite    = array("sqlite", "sqlite3", "pdosqlite");
$this->nm_bases_sybase    = array("sybase");
$this->nm_bases_vfp       = array("vfp");
$this->nm_bases_odbc      = array("odbc");
$_SESSION['scriptcase']['sc_num_page'] = 1;
$_SESSION['scriptcase']['nm_bases_security']  = "enc_nm_enc_v1HQNwDuFaD1veHQBOHuBYVcBODWF/HIFGDcFYH9BqDSNOZMBOHgNOHEFiDWr/HIJeHQJeDuFaHIBeV5BqDMvmVcFKV5BmVoBqD9BsZkFGHAvsD5BOHgvsHArsHEXCHMBiDcBiH9FUHANOHuJeDMvOZSrCV5FYHIrqHQBsZSBOHIveHuB/HgNODkBsV5FqHIFUHQNwH9BiD1veHuJeDMvsVcFiV5X/VENUHQJmZSBOHINKZMBqHgNODkBsH5FYVoX7D9JKDQX7D1BOV5FGDMBYV9BUHEF/HMX7HQJmH9BODSrYHQX7HgBeDkFeV5B7ZuBqHQFYDQFaD1BeHuX7HgvOZSrCV5FYHMB/HQBiZSBqDSNOHuXGHgvsDkFeV5FqHIFUDcBiH9BiDSN7HuraDMrYZSJ3H5FqDoJeD9JmZ1B/D1NaD5rqHgvsHArsHEB3DoJeHQXsDQB/HAveHuB/HgrwZSJ3V5FYHIrqHQJmH9BqDSNOHQFaHgNODkBsV5FqHIJeHQFYZSBiDSrwHuB/DMBOV9FiV5FYHMFGDcFYZSBqZ1rYHQFUHgNODkFeH5FYVoX7D9JKDQX7D1BOV5FGDMBYV9BUHEF/HMX7HQBsZ1X7HArKHuFGDMveHAFKV5B7DoJeHQFYZSBiDSN7HuJeHgrwVcFiV5FYVoBiHQXGH9BOHIBOZMFaHgvsHEFKV5FqHMFGHQJKH9BiD1BOV5BODMzGZSJ3H5FqDoJeD9JmZ1B/D1NaD5rqHgvsHArsHEXCHMBqHQJeDQFUHIvsV5BqDMrYVcFiV5FYHMFaHQXOZ1BiHANOHQX7HgBYHEFKV5FqHIX7HQNwDQB/HANKVWXGHgrwZSJ3V5X/VENUDcFYH9BqHAN7HuB/HgBODkFeH5FYVoX7D9JKDQX7D1BOV5FGDMNaZSrCHEBmDoBiDcBwZ1FGDSrYV5BqDMrYHEFiV5FqZuB/D9XsDQJwD1veD5BqHuzGVcFKDuFqDoraDcBwZ1FGDSrYHQFUDErKDkBsDWF/DoraD9NwH9X7D1vOV5BiHuzGDkBODur/VoraD9BiH9B/Z1vmV5FGDMrYHEBUHEFqDoB/D9NmDuBOHAveV5FGHgvsVcBOV5BmVoFaD9BiZ1FaD1rwV5FaDMrYHEFiDWFqVoXGD9NmDQJsHIrKD5JwHuzGZSrCDWXCVoraDcJUVIraHArKZMB/DEBeHEFiDWFqVoFGDcJUDQJsHAN7V5JwHuzGZSrCDWXCDoJeD9JmZ1B/D1rwV5FaDEBOVkJGH5FYVoXGD9XsH9X7HINaD5NUHgNKDkBODuFqDoFGDcBqVIJwD1rwHQrqHgBYVkJ3DWXCHMBqHQFYDuFaHIrwHuX7DMrwV9FeDuFqHIX7DcNmVINUHIBeHuJwHgvCHArCH5F/HMX7DcBiDQB/HIrwHQBODMrwV9FeDuFqHMJeHQXOH9BOHArKHuJsDMrYZSXeDuFYVoXGDcJeZ9rqD1BeV5BqHgvsDkB/V5X7VorqDcBqZ1FaD1rKV5XGDMNKDkBsV5FaHIJwD9NwDQJwHAveD5rqHuvmVcBOH5FqVoB/D9BiZ1F7DSrYD5FaDEBOVkJGH5X/DoB/HQNmH9X7HABYVWJsDMBYVcBODWFaDoFUDcJUZkFUZ1BeZMBqHgBYHEFKV5FaZuBqD9NmZSFGHIrwV5BOHuNODkBOV5X7VENUHQFYH9FaD1rwD5rqDErKVkXeHEFqDoBOD9NmDQJsD1BeV5FUHuzGDkBOH5XKVoraDcBwH9B/HIrwV5JeDMBYDkBsH5FYDoXGDcJeZSFUZ1rwD5BOHuNODkFCH5FqVENUDcNwH9BqZ1rYD5NUDMBYZSJ3DWr/DoB/D9XsZSX7DSNaD5F7DMvmVcBOHEFYVoX7HQFYZ1B/D1rKV5FaHgvCHArCDWFqVoX7D9NmDQJsZ1rwD5NUDMrwVIBODuFqVoraDcBqH9B/HABYV5FGHgBeHEFiV5B3DoF7D9XsDuFaHAveHQJeHgrKVcB/DWF/VorqHQXOH9BOHIBOZMFaDMzGZSXeHEXCHMBiDcXGZSFGHANOV5raDMvmVcFKV5BmVoBqD9BsZkFGHAvsD5FaDEBOHEXeDWFqVoBiD9NmDQFUZ1rwD5JsHgvsVcFCH5FqDoX7DcBqZSB/Z1BeD5NUDErKVkXeH5BmVoBiD9NwDQJsHIrKV5JeDMvmVcFKV5BmVoBqD9BsZkFGHArKHQraHgveHArsDWFGDoBqHQNwDQBqHAvOV5XGDMvOVcB/DurGVoF7HQNmZkBiD1rwHQX7HgvsHENiHEFqHMBOHQJKDQJsZ1vCV5FGHuNOV9FeDWXCDoX7HQNwZSBOHIBeHuFUHgNKHEJqDWX7HMXGD9NwDuBqD1BeD5BODMvOVIB/DWJeHMBiD9BsVIraD1rwV5X7HgBeHEBUDWF/VoB/DcXOZSX7HANOV5BOHuNODkBOV5F/VEBiDcJUZkFGHArKV5FUDMrYZSXeV5FqHIJsHQBiZ9XGHANKV5XGDMrYV9BUDWB3VENUHQNmVINUDSrYHQJwDEBODkFeH5FYVoFGHQJKDQFaHABYHuBOHgrwVcXKH5XCDoJsDcJUZkBiHArYHQBqHgBeDkXKDWF/HMBOHQJKDQJsZ1vCV5FGHuNOV9FeDWXCHMJwHQBiZ1X7D1rKHuJeHgvsDkFeDWF/HMFaHQNmZSBiHIrKHQBOHgNKVcFeH5XCHMJwDcBwZ1FGZ1BeHuBqHgrKHEJqDWXCHIFUHQNwDQFUHANOHuB/HgNKVcXKDWXCHMJwHQXGZSBqHArYHQrqHgNOVkJ3DWX7HIJsD9XsZ9JeD1BeD5F7DMvmVcBUDurGDoJsHQNmZ1XGZ1veZMNU";
 $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && isset($_SESSION['scriptcase']['menu_dashboard']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['menu_dashboard']['glo_nm_conexao']))
{ 
   $this->Db = db_conect_devel($_SESSION['scriptcase']['menu_dashboard']['glo_nm_conexao'], $str_root . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod'], 'ISchool'); 
} 
else 
{ 
   $this->Db = db_conect($nm_tpbanco, $nm_servidor, $nm_usuario, $nm_senha, $nm_banco, $glo_senha_protect, "S", $nm_con_persistente, $nm_con_db2, $nm_database_encoding); 
} 
$this->nm_tpbanco = $nm_tpbanco; 
if (in_array(strtolower($nm_tpbanco), $this->nm_bases_ibase) && function_exists('ibase_timefmt'))
{
    ibase_timefmt('%Y-%m-%d %H:%M:%S');
} 
if (in_array(strtolower($nm_tpbanco), $this->nm_bases_sybase))
{
   $this->Db->fetchMode = ADODB_FETCH_BOTH;
   $this->Db->Execute("set dateformat ymd");
} 
//
      $_SESSION['scriptcase']['menu_dashboard']['contr_erro'] = 'on';
 ?>
<style type="text/css">
	
	.scMenuHHeaderFont img{
		
	   margin-left:50px;
	   margin-top:10px;
	   margin-right:5px;
	   margin-bottom:10px;
	   width:70px;	
	   
	}
</style>
<?php
$_SESSION['scriptcase']['menu_dashboard']['contr_erro'] = 'off';
$this->NM_gera_log_insert("Scriptcase", "access");
/* Dados do menu em sessao */
$_SESSION['nm_menu'] = array('prod' => $str_root . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod'] . '/third/COOLjsMenu/',
                              'url' => $_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod'] . '/third/COOLjsMenu/');

if ((isset($nmgp_outra_jan) && $nmgp_outra_jan == "true") || (isset($_SESSION['scriptcase']['sc_outra_jan']) && $_SESSION['scriptcase']['sc_outra_jan'] == 'menu_dashboard'))
{
    $_SESSION['sc_session'][1]['menu_dashboard']['sc_outra_jan'] = true;
     unset($_SESSION['scriptcase']['sc_outra_jan']);
    $_SESSION['scriptcase']['sc_saida_menu_dashboard'] = "javascript:window.close()";
}
/* Variáveis de Configuração do Menu */
$menu_dashboard_menuData['iframe'] = TRUE;

if (!isset($_SESSION['scriptcase']['sc_apl_seg']))
{
    $_SESSION['scriptcase']['sc_apl_seg'] = array();
}
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("dashboard") . "/dashboard_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['dashboard']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['dashboard'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['dashboard'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("dashboard") . "/dashboard_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['dashboard']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['dashboard'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['dashboard'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("grid_tbl_aluno") . "/grid_tbl_aluno_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_aluno']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_aluno'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_aluno'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("form_tbl_curso") . "/form_tbl_curso_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['form_tbl_curso']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['form_tbl_curso'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['form_tbl_curso'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("form_tbl_disciplina") . "/form_tbl_disciplina_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['form_tbl_disciplina']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['form_tbl_disciplina'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['form_tbl_disciplina'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("grid_tbl_turma") . "/grid_tbl_turma_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_turma']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_turma'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_turma'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("calendar_tbl_tmk") . "/calendar_tbl_tmk_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['calendar_tbl_tmk']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['calendar_tbl_tmk'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['calendar_tbl_tmk'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("ischool_grid_sec_users") . "/ischool_grid_sec_users_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_users']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_users'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_users'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("ischool_grid_sec_apps") . "/ischool_grid_sec_apps_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_apps']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_apps'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_apps'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("ischool_grid_sec_groups") . "/ischool_grid_sec_groups_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_groups']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_groups'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_groups'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("ischool_search_sec_groups") . "/ischool_search_sec_groups_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_search_sec_groups']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['ischool_search_sec_groups'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['ischool_search_sec_groups'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("ischool_sync_apps") . "/ischool_sync_apps_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_sync_apps']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['ischool_sync_apps'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['ischool_sync_apps'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("ischool_change_pswd") . "/ischool_change_pswd_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_change_pswd']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['ischool_change_pswd'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['ischool_change_pswd'] = "on";
} 
$sc_teste_seg = file($path_apls . $this->tab_grupo[0] . SC_dir_app_name("ischool_Login") . "/ischool_Login_ini.txt");
if ((!isset($sc_teste_seg[3]) || trim($sc_teste_seg[3]) == "NAO") || (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N")) 
{
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_Login']))
    {
        $_SESSION['scriptcase']['sc_apl_seg']['ischool_Login'] = "on";
    }
}
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
    $_SESSION['scriptcase']['sc_apl_seg']['ischool_Login'] = "on";
} 
/* Itens do Menu */

$sOutputBuffer = ob_get_contents();
ob_end_clean();

 $nm_var_lab[0] = "Ínicio";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_lab[0]))
{
    $nm_var_lab[0] = mb_convert_encoding($nm_var_lab[0], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_lab[1] = "Alunos";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_lab[1]))
{
    $nm_var_lab[1] = mb_convert_encoding($nm_var_lab[1], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_lab[2] = "Cadastrar";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_lab[2]))
{
    $nm_var_lab[2] = mb_convert_encoding($nm_var_lab[2], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_lab[3] = "Cursos";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_lab[3]))
{
    $nm_var_lab[3] = mb_convert_encoding($nm_var_lab[3], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_lab[4] = "Cadastrar";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_lab[4]))
{
    $nm_var_lab[4] = mb_convert_encoding($nm_var_lab[4], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_lab[5] = "Cadastrar Disciplina";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_lab[5]))
{
    $nm_var_lab[5] = mb_convert_encoding($nm_var_lab[5], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_lab[6] = "Turma";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_lab[6]))
{
    $nm_var_lab[6] = mb_convert_encoding($nm_var_lab[6], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_lab[7] = "Cadastrar";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_lab[7]))
{
    $nm_var_lab[7] = mb_convert_encoding($nm_var_lab[7], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_lab[8] = "CRM";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_lab[8]))
{
    $nm_var_lab[8] = mb_convert_encoding($nm_var_lab[8], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_lab[9] = "Agendamento TMK";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_lab[9]))
{
    $nm_var_lab[9] = mb_convert_encoding($nm_var_lab[9], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_hint[0] = "";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_hint[0]))
{
    $nm_var_hint[0] = mb_convert_encoding($nm_var_hint[0], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_hint[1] = "";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_hint[1]))
{
    $nm_var_hint[1] = mb_convert_encoding($nm_var_hint[1], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_hint[2] = "Cadastrar Aluno";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_hint[2]))
{
    $nm_var_hint[2] = mb_convert_encoding($nm_var_hint[2], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_hint[3] = "";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_hint[3]))
{
    $nm_var_hint[3] = mb_convert_encoding($nm_var_hint[3], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_hint[4] = "Cadastrar Curso";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_hint[4]))
{
    $nm_var_hint[4] = mb_convert_encoding($nm_var_hint[4], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_hint[5] = "Cadastrar Disciplina";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_hint[5]))
{
    $nm_var_hint[5] = mb_convert_encoding($nm_var_hint[5], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_hint[6] = "";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_hint[6]))
{
    $nm_var_hint[6] = mb_convert_encoding($nm_var_hint[6], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_hint[7] = "Cadastrar Turma";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_hint[7]))
{
    $nm_var_hint[7] = mb_convert_encoding($nm_var_hint[7], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_hint[8] = "";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_hint[8]))
{
    $nm_var_hint[8] = mb_convert_encoding($nm_var_hint[8], $_SESSION['scriptcase']['charset'], "UTF-8");
}
 $nm_var_hint[9] = "";
if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($nm_var_hint[9]))
{
    $nm_var_hint[9] = mb_convert_encoding($nm_var_hint[9], $_SESSION['scriptcase']['charset'], "UTF-8");
}
$saida_apl = $_SESSION['scriptcase']['sc_saida_menu_dashboard'];
if (isset($_SESSION['scriptcase']['sc_apl_seg']['dashboard']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['dashboard']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_1|.|" . $nm_var_lab[0] . "|menu_dashboard_form_php.php?sc_item_menu=item_1&sc_apl_menu=dashboard&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $nm_var_hint[0] . "||" . $this->menu_dashboard_target('_self') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_1|.|" . $nm_var_lab[0] . "||||_self|disabled\n";
}
$menu_dashboard_menuData['data'] .= "item_2|.|" . $nm_var_lab[1] . "||" . $nm_var_hint[1] . "||_self|\n";
if (isset($_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_aluno']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_aluno']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_3|..|" . $nm_var_lab[2] . "|menu_dashboard_form_php.php?sc_item_menu=item_3&sc_apl_menu=grid_tbl_aluno&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $nm_var_hint[2] . "||" . $this->menu_dashboard_target('_self') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_3|..|" . $nm_var_lab[2] . "||||_self|disabled\n";
}
$menu_dashboard_menuData['data'] .= "item_13|.|" . $nm_var_lab[3] . "||" . $nm_var_hint[3] . "||_self|\n";
if (isset($_SESSION['scriptcase']['sc_apl_seg']['form_tbl_curso']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['form_tbl_curso']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_20|..|" . $nm_var_lab[4] . "|menu_dashboard_form_php.php?sc_item_menu=item_20&sc_apl_menu=form_tbl_curso&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $nm_var_hint[4] . "||" . $this->menu_dashboard_target('_self') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_20|..|" . $nm_var_lab[4] . "||||_self|disabled\n";
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['form_tbl_disciplina']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['form_tbl_disciplina']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_17|..|" . $nm_var_lab[5] . "|menu_dashboard_form_php.php?sc_item_menu=item_17&sc_apl_menu=form_tbl_disciplina&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $nm_var_hint[5] . "||" . $this->menu_dashboard_target('_self') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_17|..|" . $nm_var_lab[5] . "||||_self|disabled\n";
}
$menu_dashboard_menuData['data'] .= "item_15|.|" . $nm_var_lab[6] . "||" . $nm_var_hint[6] . "||_self|\n";
if (isset($_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_turma']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_turma']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_16|..|" . $nm_var_lab[7] . "|menu_dashboard_form_php.php?sc_item_menu=item_16&sc_apl_menu=grid_tbl_turma&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $nm_var_hint[7] . "||" . $this->menu_dashboard_target('_self') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_16|..|" . $nm_var_lab[7] . "||||_self|disabled\n";
}
$menu_dashboard_menuData['data'] .= "item_18|.|" . $nm_var_lab[8] . "||" . $nm_var_hint[8] . "||_self|\n";
if (isset($_SESSION['scriptcase']['sc_apl_seg']['calendar_tbl_tmk']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['calendar_tbl_tmk']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_19|..|" . $nm_var_lab[9] . "|menu_dashboard_form_php.php?sc_item_menu=item_19&sc_apl_menu=calendar_tbl_tmk&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $nm_var_hint[9] . "||" . $this->menu_dashboard_target('_self') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_19|..|" . $nm_var_lab[9] . "||||_self|disabled\n";
}
$menu_dashboard_menuData['data'] .= "item_5|.|" . $this->Nm_lang['lang_menu_security'] . "||" . $this->Nm_lang['lang_menu_security'] . "||_self|\n";
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_users']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_users']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_6|..|" . $this->Nm_lang['lang_list_users'] . "|menu_dashboard_form_php.php?sc_item_menu=item_6&sc_apl_menu=ischool_grid_sec_users&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $this->Nm_lang['lang_list_users'] . "||" . $this->menu_dashboard_target('_self') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_6|..|" . $this->Nm_lang['lang_list_users'] . "||||_self|disabled\n";
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_apps']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_apps']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_8|..|" . $this->Nm_lang['lang_list_apps'] . "|menu_dashboard_form_php.php?sc_item_menu=item_8&sc_apl_menu=ischool_grid_sec_apps&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $this->Nm_lang['lang_list_apps'] . "||" . $this->menu_dashboard_target('_self') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_8|..|" . $this->Nm_lang['lang_list_apps'] . "||||_self|disabled\n";
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_groups']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_groups']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_9|..|" . $this->Nm_lang['lang_list_groups'] . "|menu_dashboard_form_php.php?sc_item_menu=item_9&sc_apl_menu=ischool_grid_sec_groups&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $this->Nm_lang['lang_list_groups'] . "||" . $this->menu_dashboard_target('_self') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_9|..|" . $this->Nm_lang['lang_list_groups'] . "||||_self|disabled\n";
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_search_sec_groups']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_search_sec_groups']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_10|..|" . $this->Nm_lang['lang_list_apps_x_groups'] . "|menu_dashboard_form_php.php?sc_item_menu=item_10&sc_apl_menu=ischool_search_sec_groups&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $this->Nm_lang['lang_list_apps_x_groups'] . "||" . $this->menu_dashboard_target('_self') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_10|..|" . $this->Nm_lang['lang_list_apps_x_groups'] . "||||_self|disabled\n";
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_sync_apps']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_sync_apps']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_11|..|" . $this->Nm_lang['lang_list_sync_apps'] . "|menu_dashboard_form_php.php?sc_item_menu=item_11&sc_apl_menu=ischool_sync_apps&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $this->Nm_lang['lang_list_sync_apps'] . "||" . $this->menu_dashboard_target('_self') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_11|..|" . $this->Nm_lang['lang_list_sync_apps'] . "||||_self|disabled\n";
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_change_pswd']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_change_pswd']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_12|..|" . $this->Nm_lang['lang_change_pswd'] . "|menu_dashboard_form_php.php?sc_item_menu=item_12&sc_apl_menu=ischool_change_pswd&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $this->Nm_lang['lang_change_pswd'] . "||" . $this->menu_dashboard_target('_self') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_12|..|" . $this->Nm_lang['lang_change_pswd'] . "||||_self|disabled\n";
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_Login']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_Login']) == "on")
{
    $menu_dashboard_menuData['data'] .= "item_7|..|" . $this->Nm_lang['lang_exit'] . "|menu_dashboard_form_php.php?sc_item_menu=item_7&sc_apl_menu=ischool_Login&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "|" . $this->Nm_lang['lang_exit'] . "||" . $this->menu_dashboard_target('_parent') . "|" . "\n";
}
else
{
    $menu_dashboard_menuData['data'] .= "item_7|..|" . $this->Nm_lang['lang_exit'] . "||||_parent|disabled\n";
}

$menu_dashboard_menuData['data'] = array();
if (isset($_SESSION['scriptcase']['sc_apl_seg']['dashboard']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['dashboard']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $nm_var_lab[0] . "",
        'level'    => "0",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_1&sc_apl_menu=dashboard&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $nm_var_hint[0] . "",
        'id'       => "item_1",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_self') . "\"",
        'sc_id'    => "item_1",
        'disabled' => "N",
    );
}
$menu_dashboard_menuData['data'][] = array(
    'label'    => "" . $nm_var_lab[1] . "",
    'level'    => "0",
    'link'     => "#",
    'hint'     => "" . $nm_var_hint[1] . "",
    'id'       => "item_2",
    'icon'     => "",
    'target'   => "",
    'sc_id'    => "item_2",
    'disabled' => "N",
);
if (isset($_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_aluno']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_aluno']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $nm_var_lab[2] . "",
        'level'    => "1",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_3&sc_apl_menu=grid_tbl_aluno&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $nm_var_hint[2] . "",
        'id'       => "item_3",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_self') . "\"",
        'sc_id'    => "item_3",
        'disabled' => "N",
    );
}
$menu_dashboard_menuData['data'][] = array(
    'label'    => "" . $nm_var_lab[3] . "",
    'level'    => "0",
    'link'     => "#",
    'hint'     => "" . $nm_var_hint[3] . "",
    'id'       => "item_13",
    'icon'     => "",
    'target'   => "",
    'sc_id'    => "item_13",
    'disabled' => "N",
);
if (isset($_SESSION['scriptcase']['sc_apl_seg']['form_tbl_curso']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['form_tbl_curso']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $nm_var_lab[4] . "",
        'level'    => "1",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_20&sc_apl_menu=form_tbl_curso&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $nm_var_hint[4] . "",
        'id'       => "item_20",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_self') . "\"",
        'sc_id'    => "item_20",
        'disabled' => "N",
    );
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['form_tbl_disciplina']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['form_tbl_disciplina']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $nm_var_lab[5] . "",
        'level'    => "1",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_17&sc_apl_menu=form_tbl_disciplina&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $nm_var_hint[5] . "",
        'id'       => "item_17",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_self') . "\"",
        'sc_id'    => "item_17",
        'disabled' => "N",
    );
}
$menu_dashboard_menuData['data'][] = array(
    'label'    => "" . $nm_var_lab[6] . "",
    'level'    => "0",
    'link'     => "#",
    'hint'     => "" . $nm_var_hint[6] . "",
    'id'       => "item_15",
    'icon'     => "",
    'target'   => "",
    'sc_id'    => "item_15",
    'disabled' => "N",
);
if (isset($_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_turma']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_turma']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $nm_var_lab[7] . "",
        'level'    => "1",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_16&sc_apl_menu=grid_tbl_turma&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $nm_var_hint[7] . "",
        'id'       => "item_16",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_self') . "\"",
        'sc_id'    => "item_16",
        'disabled' => "N",
    );
}
$menu_dashboard_menuData['data'][] = array(
    'label'    => "" . $nm_var_lab[8] . "",
    'level'    => "0",
    'link'     => "#",
    'hint'     => "" . $nm_var_hint[8] . "",
    'id'       => "item_18",
    'icon'     => "",
    'target'   => "",
    'sc_id'    => "item_18",
    'disabled' => "N",
);
if (isset($_SESSION['scriptcase']['sc_apl_seg']['calendar_tbl_tmk']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['calendar_tbl_tmk']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $nm_var_lab[9] . "",
        'level'    => "1",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_19&sc_apl_menu=calendar_tbl_tmk&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $nm_var_hint[9] . "",
        'id'       => "item_19",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_self') . "\"",
        'sc_id'    => "item_19",
        'disabled' => "N",
    );
}
$menu_dashboard_menuData['data'][] = array(
    'label'    => "" . $this->Nm_lang['lang_menu_security'] . "",
    'level'    => "0",
    'link'     => "#",
    'hint'     => "" . $this->Nm_lang['lang_menu_security'] . "",
    'id'       => "item_5",
    'icon'     => "",
    'target'   => "",
    'sc_id'    => "item_5",
    'disabled' => "N",
);
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_users']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_users']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $this->Nm_lang['lang_list_users'] . "",
        'level'    => "1",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_6&sc_apl_menu=ischool_grid_sec_users&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $this->Nm_lang['lang_list_users'] . "",
        'id'       => "item_6",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_self') . "\"",
        'sc_id'    => "item_6",
        'disabled' => "N",
    );
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_apps']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_apps']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $this->Nm_lang['lang_list_apps'] . "",
        'level'    => "1",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_8&sc_apl_menu=ischool_grid_sec_apps&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $this->Nm_lang['lang_list_apps'] . "",
        'id'       => "item_8",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_self') . "\"",
        'sc_id'    => "item_8",
        'disabled' => "N",
    );
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_groups']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_grid_sec_groups']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $this->Nm_lang['lang_list_groups'] . "",
        'level'    => "1",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_9&sc_apl_menu=ischool_grid_sec_groups&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $this->Nm_lang['lang_list_groups'] . "",
        'id'       => "item_9",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_self') . "\"",
        'sc_id'    => "item_9",
        'disabled' => "N",
    );
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_search_sec_groups']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_search_sec_groups']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $this->Nm_lang['lang_list_apps_x_groups'] . "",
        'level'    => "1",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_10&sc_apl_menu=ischool_search_sec_groups&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $this->Nm_lang['lang_list_apps_x_groups'] . "",
        'id'       => "item_10",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_self') . "\"",
        'sc_id'    => "item_10",
        'disabled' => "N",
    );
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_sync_apps']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_sync_apps']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $this->Nm_lang['lang_list_sync_apps'] . "",
        'level'    => "1",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_11&sc_apl_menu=ischool_sync_apps&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $this->Nm_lang['lang_list_sync_apps'] . "",
        'id'       => "item_11",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_self') . "\"",
        'sc_id'    => "item_11",
        'disabled' => "N",
    );
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_change_pswd']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_change_pswd']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $this->Nm_lang['lang_change_pswd'] . "",
        'level'    => "1",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_12&sc_apl_menu=ischool_change_pswd&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $this->Nm_lang['lang_change_pswd'] . "",
        'id'       => "item_12",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_self') . "\"",
        'sc_id'    => "item_12",
        'disabled' => "N",
    );
}
if (isset($_SESSION['scriptcase']['sc_apl_seg']['ischool_Login']) && strtolower($_SESSION['scriptcase']['sc_apl_seg']['ischool_Login']) == "on")
{
    $menu_dashboard_menuData['data'][] = array(
        'label'    => "" . $this->Nm_lang['lang_exit'] . "",
        'level'    => "1",
        'link'     => "menu_dashboard_form_php.php?sc_item_menu=item_7&sc_apl_menu=ischool_Login&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . "",
        'hint'     => "" . $this->Nm_lang['lang_exit'] . "",
        'id'       => "item_7",
        'icon'     => "",
        'target'   => " item-target=\"" . $this->menu_dashboard_target('_parent') . "\"",
        'sc_id'    => "item_7",
        'disabled' => "N",
    );
}

if (isset($_SESSION['scriptcase']['sc_def_menu']['menu_dashboard']))
{
    $arr_menu_usu = $this->nm_arr_menu_recursiv($_SESSION['scriptcase']['sc_def_menu']['menu_dashboard']);
    $this->nm_gera_menus($str_menu_usu, $arr_menu_usu, 1, 'menu_dashboard');
    $menu_dashboard_menuData['data'] = $str_menu_usu;
}
if (is_file("menu_dashboard_help.txt"))
{
    $Arq_WebHelp = file("menu_dashboard_help.txt"); 
    if (isset($Arq_WebHelp[0]) && !empty($Arq_WebHelp[0]))
    {
        $Arq_WebHelp[0] = str_replace("\r\n" , "", trim($Arq_WebHelp[0]));
        $Tmp = explode(";", $Arq_WebHelp[0]); 
        foreach ($Tmp as $Cada_help)
        {
            $Tmp1 = explode(":", $Cada_help); 
            if (!empty($Tmp1[0]) && isset($Tmp1[1]) && !empty($Tmp1[1]) && $Tmp1[0] == "menu" && is_file($str_root . $path_help . $Tmp1[1]))
            {
                $menu_dashboard_menuData['data'][] = array(
                    'label'    => "" . $this->Nm_lang['lang_btns_help_hint'] . "",
                    'level'    => "0",
                    'link'     => "" . $path_help . $Tmp1[1] . "",
                    'hint'     => "" . $this->Nm_lang['lang_btns_help_hint'] . "",
                    'id'       => "item_Help",
                    'icon'     => "",
                    'target'   => "" . $this->menu_dashboard_target('_blank') . "",
                    'sc_id'    => "item_Help",
                    'disabled' => "N",
                );
            }
        }
    }
}

if (isset($_SESSION['scriptcase']['sc_menu_del']['menu_dashboard']) && !empty($_SESSION['scriptcase']['sc_menu_del']['menu_dashboard']))
{
    $nivel = 0;
    $exclui_menu = false;
    foreach ($menu_dashboard_menuData['data'] as $i_menu => $cada_menu)
    {
       if (in_array($cada_menu['id'], $_SESSION['scriptcase']['sc_menu_del']['menu_dashboard']))
       {
          $nivel = $cada_menu['level'];
          $exclui_menu = true;
          unset($menu_dashboard_menuData['data'][$i_menu]);
       }
       elseif ( empty($cada_menu) || ($exclui_menu && $nivel < $cada_menu['level']))
       {
          unset($menu_dashboard_menuData['data'][$i_menu]);
       }
       else
       {
          $exclui_menu = false;
       }
    }
    $Temp_menu = array();
    foreach ($menu_dashboard_menuData['data'] as $i_menu => $cada_menu)
    {
        $Temp_menu[] = $cada_menu;
    }
    $menu_dashboard_menuData['data'] = $Temp_menu;
}

if (isset($_SESSION['scriptcase']['sc_menu_disable']['menu_dashboard']) && !empty($_SESSION['scriptcase']['sc_menu_disable']['menu_dashboard']))
{
    $disable_menu = false;
    foreach ($menu_dashboard_menuData['data'] as $i_menu => $cada_menu)
    {
       if (in_array($cada_menu['id'], $_SESSION['scriptcase']['sc_menu_disable']['menu_dashboard']))
       {
          $nivel = $cada_menu['level'];
          $disable_menu = true;
          $menu_dashboard_menuData['data'][$i_menu]['disabled'] = 'Y';
       }
       elseif (!empty($cada_menu) && $disable_menu && $nivel < $cada_menu['level'])
       { 
          $menu_dashboard_menuData['data'][$i_menu]['disabled'] = 'Y';
       }
       elseif (!empty($cada_menu))
       {
          $disable_menu = false;
       }
    }
}

/* Cabeçalho HTML */
if ($menu_dashboard_menuData['iframe'])
{
    $menu_dashboard_menuData['height'] = '100%';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?> style="height: 100%">
<head>
 <title>menu_dashboard</title>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <?php
 if ($_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
 {
  ?>
   <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' />
  <?php
 }
 ?>
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->str_schema_all ?>_btngrp.css<?php if (@is_file($this->path_css . $this->str_schema_all . '_btngrp.css')) { echo '?scp=' . md5($this->path_css . $this->str_schema_all . '_btngrp.css'); } ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->str_schema_all ?>_menuH.css<?php if (@is_file($this->path_css . $this->str_schema_all . '_menuH.css')) { echo '?scp=' . md5($this->path_css . $this->str_schema_all . '_menuH.css'); } ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->str_schema_all ?>_menuH<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $Str_btn_css ?>" /> 
<link rel="stylesheet" type="text/css" href="../_lib/css/_menuTheme/scriptcase_Scriptcase_ScriptCase5_Blue_vert_<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir']; ?>.css<?php if (@is_file($this->path_css . '_menuTheme/' . scriptcase_Scriptcase_ScriptCase5_Blue . '_' . vert . '.css')) { echo '?scp=' . md5($this->path_css . '_menuTheme/' . scriptcase_Scriptcase_ScriptCase5_Blue . '_' . vert . '.css'); } ?>" />
</head>
<body style="margin: 0px; height: 100%" scroll="no">
<?php

if ('' != $sOutputBuffer)
{
    echo $sOutputBuffer;
}

    $NM_scr_iframe = (isset($_POST['hid_scr_iframe'])) ? $_POST['hid_scr_iframe'] : "";   
}
else
{
    $menu_dashboard_menuData['height'] = '30px';
}

/* Arquivos JS */
?>
<script type="text/javascript" src="<?php echo $_SESSION['scriptcase']['menu_dashboard']['glo_nm_path_prod']; ?>/third/jquery/js/jquery.js"></script>
<?php
$Str_date = strtolower($_SESSION['scriptcase']['reg_conf']['date_format']);
$Lim   = strlen($Str_date);
$Ult   = "";
$Arr_D = array();
for ($I = 0; $I < $Lim; $I++)
{
    $Char = substr($Str_date, $I, 1);
    if ($Char != $Ult)
    {
        $Arr_D[] = $Char;
    }
    $Ult = $Char;
}
$Prim = true;
$Str  = "";
foreach ($Arr_D as $Cada_d)
{
    $Str .= (!$Prim) ? $_SESSION['scriptcase']['reg_conf']['date_sep'] : "";
    $Str .= $Cada_d;
    $Prim = false;
}
$Str = str_replace("a", "Y", $Str);
$Str = str_replace("y", "Y", $Str);
$nm_data_fixa = date($Str); 
?>
<?php
$qtd_col = 2;
if(is_array($bg_line_degrade) && count($bg_line_degrade)>0)
{
    $qtd_col = $qtd_col + count($bg_line_degrade);
}
$larg_table = "100%";
$col_span   = ' colspan="'. $qtd_col .'"';
$strAlign = ($_SESSION['scriptcase']['reg_conf']['css_dir']=='RTL')?'':'align=\'center\'';
?>
<?php
$str_bmenu = nmButtonOutput($this->arr_buttons, "bmenu", "showMenu();", "showMenu();", "bmenu", "", "" . $this->Nm_lang['lang_btns_menu'] . "", "position:absolute; top:0px; left:0px; z-index:9999;", "absmiddle", "", "0px", $this->path_botoes, "", "" . $this->Nm_lang['lang_btns_menu_hint'] . "", "", "", "", "only_text", "text_right", "", "");
if($this->force_mobile || ($_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile']))
{
    $menu_mobile_hide          = $mobile_menu_mobile_hide;
    $menu_mobile_inicial_state = $mobile_menu_mobile_inicial_state;
    $menu_mobile_hide_onclick  = $mobile_menu_mobile_hide_onclick;
    $menutree_mobile_float     = $mobile_menutree_mobile_float;
    $menu_mobile_hide_icon     = $mobile_menu_mobile_hide_icon;
    $menu_mobile_hide_icon_menu_position     = $mobile_menu_mobile_hide_icon_menu_position;
}
if($menu_mobile_hide == 'S')
{
    if($menu_mobile_inicial_state =='escondido')
    {
            $str_menu_display="hide";
            $str_btn_display="show";
    }
    else
    {
        $str_menu_display="show";
        $str_btn_display="hide";
    }
    if($menu_mobile_hide_icon != 'S')
    {
        $str_btn_display="show";
    }
?>
<script>
    $( document ).ready(function() {
        $('#bmenu').<?php echo $str_btn_display; ?>();
        $('#idMenuCell').<?php echo $str_menu_display; ?>();
        <?php
        if($menutree_mobile_float != 'S')
        {
        ?>
            $('#id_toolbar').<?php echo $str_menu_display; ?>();
        <?php
        }
        ?>
        if($('.scMenuHHeader').length)
        {
                  $(".scMenuHHeader").css("padding-left", $('#bmenu').outerWidth());
        }
        else if($('.scMenuToolbar').length)
        {
                  $(".scMenuToolbar").css("padding-left", $('#bmenu').outerWidth());
        }
        <?php
                if($menutree_mobile_float == 'S')
                {
                ?>
                    str_html_menu = $('#idMenuCell').html();
                    $('#idMenuCell').remove()
                    $( 'body' ).prepend( "<div id='idMenuCell' style='position:absolute; top:0px; left:0px;display:<?php echo (($menu_mobile_inicial_state =='escondido')?'none':''); ?>'>"+ str_html_menu +"</div>" );
              <?php
              if($menu_mobile_hide_icon != 'S')
              {
                  if($menu_mobile_hide_icon_menu_position == 'right')
                  {
                          ?>
                          $('#idMenuCell').css('left', $('#bmenu').outerWidth());
                          <?php
                      }
                  else
                  {
                          ?>
                          $('#idMenuCell').css('top', $('#bmenu').outerHeight());
                          <?php
                      }
              }
                }
        ?>
    });
    function showMenu()
    {
      <?php
      if($menu_mobile_hide_icon == 'S')
      {
      ?>
                $('#bmenu').hide();
      <?php
      }
      ?>
            $('#idMenuCell').fadeToggle();
      <?php
      if($menutree_mobile_float != 'S')
      {
      ?>
                $('#id_toolbar').fadeToggle();
      <?php
      }
      ?>
    }
    function HideMenu()
    {
      <?php
      if($menu_mobile_hide_icon == 'S')
      {
      ?>
                $('#bmenu').show();
      <?php
      }
      ?>
            $('#idMenuCell').fadeToggle();
      <?php
      if($menutree_mobile_float != 'S')
      {
      ?>
                $('#id_toolbar').fadeToggle();
      <?php
      }
      ?>
    }
</script>
<?php
echo $str_bmenu;
}
?>
<script>
function openMenuItem(str_id)
{
        str_link   = $('#' + str_id).attr('item-href');
        str_target = $('#' + str_id).attr('item-target');
        //test link type
        if(str_link != '' && str_link != '#')
        {
                if(str_link.substring(0, 11) == 'javascript:')
                {
                        eval(str_link.substring(11));
                }
                else if(str_link != '#' && str_target != '_parent')
                {
                        window.open(str_link, str_target);
                }
                else if(str_link != '#' && str_target == '_parent')
                {
                        document.location = str_link;
                }
                <?php
                if($menu_mobile_hide == 'S' && $menu_mobile_hide_onclick == 'S')
                {
                ?>
                        HideMenu();
                <?php
                }
                ?>
        }
}
</script>
<table <?php echo $strAlign; ?> style="border-collapse: collapse; border-width: 0px; height: 100%; width: <?php echo $larg_table; ?>">
  <tr>
    <td style="padding: 0px" valign="top" <?php echo $col_span; ?>>
<style>
#lin1_col1 { font-size:22px; width:500px; color: #FFFFFF; }
#lin1_col2 { font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:right; color: #FFFFFF;  }
#lin2_col1 { font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:15px; }
#lin2_col2 { font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:right; color: #FFFFFF;  }

</style>

<table width="100%" height="67px" class="scMenuHHeader">
        <tr>
                <td width="5px"></td>
        <td width="67px" class="scMenuHHeaderFont">   <IMG SRC="<?php echo $path_imag_cab ?>/grp__NM__bg__NM__1427262874_Tablet-Chart-128.png" BORDER="0"/></td>
               <td class="scMenuHHeaderFont"><span id="lin1_col1"><?php echo "iSchool - ERP" ?></span><br /><span id="lin2_col1"></span></td>
               <td align="right" class="scMenuHHeaderFont"><span  id="lin1_col2"><?php echo "Usuário : " . $_SESSION['usr_name'] . "" ?></span><br /><span id="lin2_col2"></span></td>
        <td width="5px"></td>
    </tr>
</table>
    </td>
  </tr>
<?php echo $this->nm_show_toolbarmenu($col_span, $saida_apl, $menu_dashboard_menuData); ?>  <tr class="scMenuHTableCssAlt" id='idMenuLine'>
      <td <?php echo $strAlign; ?> valign="middle" class="scMenuLine" id='idMenuCell'>
       <table style="border-collapse: collapse; border-width: 0"><tr><td style="padding: 0">
<div id="scScrollFix" style="height: 1px"></div>
<script type="text/javascript">
function fnScrollFix() {
 var txt = document.getElementById("scScrollFix").innerHTML;
 if ("&nbsp;" == txt) { txt = "&nbsp;&nbsp;"; } else { txt = "&nbsp;"; }
 document.getElementById("scScrollFix").innerHTML = txt;
 setTimeout("fnScrollFix()", 500);
}
setTimeout("fnScrollFix()", 500);
</script>
<div id="idDivMenu">
<?php
echo $this->menu_dashboard_escreveMenu($menu_dashboard_menuData['data']);
?>
</div>
       </td></tr></table>
<?php
/* Controle de Iframe */
if ($menu_dashboard_menuData['iframe'])
{
?>
    </td>
<?php echo $this->nm_gera_degrade(2, $bg_line_degrade, $path_imag_cab); ?>    <td style="border-width: 1px; width: 100%; height: 100%; padding: 0px">
<?php
if (isset($_SESSION['scriptcase']['sc_apl_seg']['dashboard']) && $_SESSION['scriptcase']['sc_apl_seg']['dashboard'] == "on") 
{ 
    $SCR  = ($NM_scr_iframe != "" ? $NM_scr_iframe : $menu_dashboard_menuData['url']['link'] . $this->tab_grupo['0']);
    $SCR .= ($NM_scr_iframe != "" ? "" :"" . SC_dir_app_name('dashboard') . "/?nm_run_menu=1&nm_apl_menu=menu_dashboard&script_case_init=1&script_case_session=" . session_id() );
} 
else
{ 
    $SCR  = ($NM_scr_iframe != "" ? $NM_scr_iframe : "menu_dashboard_pag_ini.php");
} 
?>
      <iframe id="iframe_menu_dashboard" name="menu_dashboard_iframe" frameborder="0" class="scMenuIframe"  src="<?php echo $SCR; ?>" ></iframe><?php
}
?></td>
  </tr>
</table>
</body>
</html>
<?php


}

/* Controle de Target */
function menu_dashboard_escreveMenu($arr_menu)
{
    $last      = '';
    $itemClass = ' topfirst';
    $subSize   = 2;
    $subCount  = array();
    $tabSpace  = 1;
    $intMult   = 2;
    $aMenuItemList = array();
    foreach ($arr_menu as $ind => $resto)
    {
        $aMenuItemList[] = $resto;
    }
?>
<ul id="css3menu1" class="topmenu">
<?php
    for ($i = 0; $i < sizeof($aMenuItemList); $i++) {
        if (0 == $aMenuItemList[$i]['level']) {
            $last = $aMenuItemList[$i]['id'];
        }
    }
    for ($i = 0; $i < sizeof($aMenuItemList); $i++) {
        if ($last == $aMenuItemList[$i]['id']) {
            $itemClass = ' toplast';
        }
        $htmlClass = '';
        if (0 == $aMenuItemList[$i]['level']) {
            $htmlClass = ' class="topmenu' . $itemClass;
            if ($aMenuItemList[$i + 1] && $aMenuItemList[$i]['level'] < $aMenuItemList[$i + 1]['level']) {
                $htmlClass .= ' toproot';
            }
            $htmlClass .= '"';
        }
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?><li<?php echo $htmlClass; ?>>
<?php
        $tabSpace++;
        if ('' != $aMenuItemList[$i]['icon'] && file_exists($this->path_imag_apl . "/" . $aMenuItemList[$i]['icon'])) {
            $iconHtml = '<img src="../_lib/img/' . $aMenuItemList[$i]['icon'] . '" border="0" />';
        }
        else {
            $iconHtml = '';
        }
        $sDisabledClass = '';
        if ('Y' == $aMenuItemList[$i]['disabled']) {
            $aMenuItemList[$i]['link']   = '#';
            $aMenuItemList[$i]['target'] = '';
            $sDisabledClass               = 0 == $aMenuItemList[$i]['level'] ? ' class="scdisabledmain"' : ' class="scdisabledsub"';
        }
        if (empty($aMenuItemList[$i]['link'])) {
            $aMenuItemList[$i]['link']   = '#';
        }
        if ($aMenuItemList[$i + 1] && $aMenuItemList[$i]['level'] < $aMenuItemList[$i + 1]['level']) {
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?><a href="#" onclick="openMenuItem('<?php echo $aMenuItemList[$i]['id']; ?>');" item-href="<?php echo $aMenuItemList[$i]['link']; ?>" id="<?php echo $aMenuItemList[$i]['id']; ?>" title="<?php echo $aMenuItemList[$i]['hint']; ?>" <?php echo $aMenuItemList[$i]['target']; ?> <?php echo $sDisabledClass; ?>><span><?php echo $iconHtml . $aMenuItemList[$i]['label']; ?></span></a>
<?php
            if (0 != $subSize && 0 < $aMenuItemList[$i + 1]['level']) {
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?><!--div class="submenu" abre-->
<?php
                $tabSpace++;
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?><!--div class="column" abre-->
<?php
                $tabSpace++;
            }
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?><ul>
<?php
            $tabSpace++;
        }
        else {
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?><a href="#" onclick="openMenuItem('<?php echo $aMenuItemList[$i]['id']; ?>');" item-href="<?php echo $aMenuItemList[$i]['link']; ?>" id="<?php echo $aMenuItemList[$i]['id']; ?>" title="<?php echo $aMenuItemList[$i]['hint']; ?>"<?php echo $aMenuItemList[$i]['target'] . $sDisabledClass; ?>><?php echo $iconHtml . $aMenuItemList[$i]['label']; ?></a>
<?php
        }
        if (($aMenuItemList[$i + 1] && $aMenuItemList[$i]['level'] == $aMenuItemList[$i + 1]['level']) || 
            ($aMenuItemList[$i + 1] && $aMenuItemList[$i]['level'] > $aMenuItemList[$i + 1]['level']) ||
            (!$aMenuItemList[$i + 1] && $aMenuItemList[$i]['level'] > 0) ||
            (!$aMenuItemList[$i + 1] && $aMenuItemList[$i]['level'] == 0)) {
            $tabSpace--;
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?></li>
<?php
            if (0 != $subSize && 0 < $aMenuItemList[$i]['level']) {
                if (!isset($subCount[ $aMenuItemList[$i]['level'] ])) {
                    $subCount[ $aMenuItemList[$i]['level'] ] = 0;
                }
                $subCount[ $aMenuItemList[$i]['level'] ]++;
            }
            if ($aMenuItemList[$i + 1] && $aMenuItemList[$i]['level'] > $aMenuItemList[$i + 1]['level']) {
                for ($j = 0; $j < $aMenuItemList[$i]['level'] - $aMenuItemList[$i + 1]['level']; $j++) {
                    unset($subCount[ $aMenuItemList[$i]['level'] - $j]);
                    $tabSpace--;
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?></ul>
<?php
                    if (0 != $subSize && 0 < $aMenuItemList[$i]['level']) {
                        $tabSpace--;
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?><!--/div class="column" fecha-->
<?php
                        $tabSpace--;
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?><!--/div class="submenu" fecha-->
<?php
                    }
                    $tabSpace--;
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?></li>
<?php
                }
            }
            elseif (!$aMenuItemList[$i + 1] && $aMenuItemList[$i]['level'] > 0) {
                for ($j = 0; $j < $aMenuItemList[$i]['level']; $j++) {
                    unset($subCount[ $aMenuItemList[$i]['level'] - $j]);
                    $tabSpace--;
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?></ul>
<?php
                    if (0 != $subSize && 0 < $aMenuItemList[$i]['level']) {
                        $tabSpace--;
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?><!--/div class="column" fecha-->
<?php
                        $tabSpace--;
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?><!--/div class="submenu" fecha-->
<?php
                    }
                    $tabSpace--;
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?></li>
<?php
                }
            }
            if ($subSize == $subCount[ $aMenuItemList[$i]['level'] ]) {
                $subCount[ $aMenuItemList[$i]['level'] ] = 0;
?>
<?php echo str_repeat(' ', $tabSpace * $intMult); ?><!--quebra-->
<?php
            }
        }
        $itemClass = '';
    }
?>
</ul>
<?php
}
function menu_dashboard_target($str_target)
{
    global $menu_dashboard_menuData;
    if ('_blank' == $str_target)
    {
        return '_blank';
    }
    elseif ('_parent' == $str_target)
    {
        return '_parent';
    }
    elseif ($menu_dashboard_menuData['iframe'])
    {
        return 'menu_dashboard_iframe';
    }
    else
    {
        return $str_target;
    }
}

function nm_show_toolbarmenu($col_span, $saida_apl, $menu_dashboard_menuData)
{
}

   function nm_prot_aspas($str_item)
   {
       return str_replace('"', '\"', $str_item);
   }

   function nm_gera_menus(&$str_line_ret, $arr_menu_usu, $int_level, $nome_aplicacao)
   {
       global $menu_dashboard_menuData; 
       foreach ($arr_menu_usu as $arr_item)
       {
           $str_line   = array();
           $str_line['label']    = $this->nm_prot_aspas($arr_item['label']);
           $str_line['level']    = $int_level - 1;
           $str_line['link']     = "";
           $nome_apl = $arr_item['link'];
           $pos = strrpos($nome_apl, "/");
           if ($pos !== false)
           {
               $nome_apl = substr($nome_apl, $pos + 1);
           }
           if ('' != $arr_item['link'])
           {
               if ($arr_item['target'] == '_parent')
               {
                    $str_line['link'] = "menu_dashboard_form_php.php?sc_item_menu=" . $arr_item['id'] . "&sc_apl_menu=" . $nome_apl . "&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . ""; 
               }
               else
               {
                    $str_line['link'] = "menu_dashboard_form_php.php?sc_item_menu=" . $arr_item['id'] . "&sc_apl_menu=" . $nome_apl . "&sc_apl_link=" . urlencode($menu_dashboard_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu_dashboard']['glo_nm_usa_grupo'] . ""; 
               }
           }
           elseif ($arr_item['target'] == '_parent')
           {
           }
           $str_line['hint']     = ('' != $arr_item['hint']) ? $this->nm_prot_aspas($arr_item['hint']) : '';
           $str_line['id']       = $arr_item['id'];
           $str_line['icon']     = ('' != $arr_item['icon_on']) ? $arr_item['icon_on'] : '';
           if ('' == $arr_item['link'] && $arr_item['target'] == '_parent')
           {
               $str_line['target'] = '_parent';
           }
           else
           {
                $str_line['target'] = ('' != $arr_item['target'] && '' != $arr_item['link']) ?  $this->menu_dashboard_target( $arr_item['target']) : "_self"; 
           }
           $str_line['target']   = ' item-target="' . $str_line['target']  . '" ';
           $str_line['sc_id']    = $arr_item['id'];
           $str_line['disabled'] = "N";
           $str_line_ret[] = $str_line;
           if (!empty($arr_item['menu_itens']))
           {
               $this->nm_gera_menus($str_line_ret, $arr_item['menu_itens'], $int_level + 1, $nome_aplicacao);
           }
       }
   }

   function nm_arr_menu_recursiv($arr, $id_pai = '')
   {
         $arr_return = array();
         foreach ($arr as $id_menu => $arr_menu)
         {
             if ($id_pai == $arr_menu['pai']) 
             {
                 $arr_return[] = array('label'      => $arr_menu['label'],
                                        'link'       => $arr_menu['link'],
                                        'target'     => $arr_menu['target'],
                                        'icon_on'    => $arr_menu['icon'],
                                        'hint'       => $arr_menu['hint'],
                                        'id'         => $id_menu,
                                        'menu_itens' => $this->nm_arr_menu_recursiv($arr, $id_menu));
             }
         }
         return $arr_return;
   }
   //1 horizontal
   //2 vertical
   function nm_gera_degrade($menu_opc, $bg_line_degrade, $path_imag_cab)
   {
       $str_retorno = "";
       //have bg color degrade
       if(!empty($bg_line_degrade) && count($bg_line_degrade)>0)
       {
           if($menu_opc == 1)
           {
               foreach($bg_line_degrade as $bg_color)
               {
                   if(!empty($bg_color))
                   {
                       $str_retorno .= "<tr style=\"height:1px; padding: 0px;\">\r\n";
                       $str_retorno .= "  <td style=\"height:1px; padding: 0px;\" bgcolor=\"". $bg_color ."\"><img src='<?php echo $path_imag_cab; ?>/transparent.png' border=\"0\" style=\"height:1px;\"></td>\r\n";
                       $str_retorno .= "</tr>\r\n";
                   }
               }
           }
           elseif($menu_opc == 2)
           {
               foreach($bg_line_degrade as $bg_color)
               {
                   if(!empty($bg_color))
                   {
                       $str_retorno .= "<td style=\"width:1px; padding: 0px;\" bgcolor=\"". $bg_color ."\">\r\n";
                       $str_retorno .= "<img src='<?php echo $path_imag_cab; ?>/transparent.png' border=\"0\" style=\"width:1px;\">\r\n";
                       $str_retorno .= "</td>\r\n";
                   }
               }
           }
       }
       return $str_retorno;
   }
   function regionalDefault()
   {
       $_SESSION['scriptcase']['reg_conf']['date_format']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['data_format']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['data_format'] : "ddmmyyyy";
       $_SESSION['scriptcase']['reg_conf']['date_sep']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['data_sep']))                 ?  $this->Nm_conf_reg[$this->str_conf_reg]['data_sep'] : "/";
       $_SESSION['scriptcase']['reg_conf']['date_week_ini'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['prim_dia_sema']))            ?  $this->Nm_conf_reg[$this->str_conf_reg]['prim_dia_sema'] : "SU";
       $_SESSION['scriptcase']['reg_conf']['time_format']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_format']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_format'] : "hhiiss";
       $_SESSION['scriptcase']['reg_conf']['time_sep']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_sep']))                 ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_sep'] : ":";
       $_SESSION['scriptcase']['reg_conf']['time_pos_ampm'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_pos_ampm']))            ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_pos_ampm'] : "right_without_space";
       $_SESSION['scriptcase']['reg_conf']['time_simb_am']  = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_am']))          ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_am'] : "am";
       $_SESSION['scriptcase']['reg_conf']['time_simb_pm']  = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_pm']))          ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_pm'] : "pm";
       $_SESSION['scriptcase']['reg_conf']['simb_neg']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_sinal_neg']))            ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_sinal_neg'] : "-";
       $_SESSION['scriptcase']['reg_conf']['grup_num']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_sep_agr']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_sep_agr'] : ".";
       $_SESSION['scriptcase']['reg_conf']['dec_num']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_sep_dec']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_sep_dec'] : ",";
       $_SESSION['scriptcase']['reg_conf']['neg_num']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_format_num_neg']))       ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_format_num_neg'] : 2;
       $_SESSION['scriptcase']['reg_conf']['monet_simb']    = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_simbolo']))        ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_simbolo'] : "R$";
       $_SESSION['scriptcase']['reg_conf']['monet_f_pos']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_pos'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_pos'] : 3;
       $_SESSION['scriptcase']['reg_conf']['monet_f_neg']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_neg'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_neg'] : 13;
       $_SESSION['scriptcase']['reg_conf']['grup_val']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_agr']))        ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_agr'] : ".";
       $_SESSION['scriptcase']['reg_conf']['dec_val']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_dec']))        ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_dec'] : ",";
       $_SESSION['scriptcase']['reg_conf']['html_dir']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl']))              ?  " DIR='" . $this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl'] . "'" : "";
       $_SESSION['scriptcase']['reg_conf']['css_dir']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl'] : "LTR";
       $_SESSION['scriptcase']['reg_conf']['html_dir_only'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl'] : "";
       $_SESSION['scriptcase']['reg_conf']['num_group_digit']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_group_digit']))       ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_group_digit'] : "1";
       $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_group_digit'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_group_digit'] : "1";
   }
//
   function NM_gera_log_insert($orig="Scriptcase", $evento="", $texto="")
   {
       $dt  = "'" . date('Y-m-d H:i:s') . "'";
       $usr = isset($_SESSION['usr_login']) ? $_SESSION['usr_login'] : "";
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->nm_bases_access))
       { 
           $dt  = "#" . date('Y-m-d H:i:s') . "#";
       } 
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->nm_bases_access))
       { 
           $comando = "INSERT INTO sc_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'menu_dashboard', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sc_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'menu_dashboard', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sc_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'menu_dashboard', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
       }
   }

}
if ((isset($_POST['nmgp_opcao']) && $_POST['nmgp_opcao'] == "force_lang") || (isset($_GET['nmgp_opcao']) && $_GET['nmgp_opcao'] == "force_lang"))
{
    if (isset($_POST['nmgp_opcao']) && $_POST['nmgp_opcao'] == "force_lang")
    {
        $nmgp_opcao  = $_POST['nmgp_opcao'];
        $nmgp_idioma = $_POST['nmgp_idioma'];
    }
    else
    {
        $nmgp_opcao  = $_GET['nmgp_opcao'];
        $nmgp_idioma = $_GET['nmgp_idioma'];
    }
    $Temp_lang = explode(";" , $nmgp_idioma);
    if (isset($Temp_lang[0]) && !empty($Temp_lang[0]))
    {
        $_SESSION['scriptcase']['str_lang'] = $Temp_lang[0];
    }
    if (isset($Temp_lang[1]) && !empty($Temp_lang[1]))
    {
        $_SESSION['scriptcase']['str_conf_reg'] = $Temp_lang[1];
    }
}
$contr_menu_dashboard = new menu_dashboard_class;
$contr_menu_dashboard->menu_dashboard_menu();

?>

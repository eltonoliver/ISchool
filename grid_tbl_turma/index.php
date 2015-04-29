<?php
   include_once('grid_tbl_turma_session.php');
   @session_start() ;
   $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_perfil']          = "";
   $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_prod']       = "/scriptcase/prod";
   $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_conf']       = "/Applications/NetMake/v8/wwwroot/scriptcase/conf";
   $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_imagens']    = "/scriptcase/file/img";
   $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_imag_temp']  = "/scriptcase/tmp";
   $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_doc']        = "/Applications/NetMake/v8/wwwroot/scriptcase/file/doc";
   $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_conexao']         = "conn_mysql";
//
class grid_tbl_turma_ini
{
   var $nm_cod_apl;
   var $nm_nome_apl;
   var $nm_seguranca;
   var $nm_grupo;
   var $nm_autor;
   var $nm_versao_sc;
   var $nm_tp_lic_sc;
   var $nm_dt_criacao;
   var $nm_hr_criacao;
   var $nm_autor_alt;
   var $nm_dt_ult_alt;
   var $nm_hr_ult_alt;
   var $nm_timestamp;
   var $nm_app_version;
   var $cor_link_dados;
   var $root;
   var $server;
   var $java_protocol;
   var $server_pdf;
   var $Arr_result;
   var $sc_protocolo;
   var $path_prod;
   var $path_link;
   var $path_aplicacao;
   var $path_embutida;
   var $path_botoes;
   var $path_img_global;
   var $path_img_modelo;
   var $path_icones;
   var $path_imagens;
   var $path_imag_cab;
   var $path_imag_temp;
   var $path_libs;
   var $path_doc;
   var $str_lang;
   var $str_conf_reg;
   var $str_schema_all;
   var $Str_btn_grid;
   var $path_cep;
   var $path_secure;
   var $path_js;
   var $path_help;
   var $path_adodb;
   var $path_grafico;
   var $path_atual;
   var $Gd_missing;
   var $sc_site_ssl;
   var $link_form_tbl_turma;
   var $nm_cont_lin;
   var $nm_limite_lin;
   var $nm_limite_lin_prt;
   var $nm_limite_lin_res;
   var $nm_limite_lin_res_prt;
   var $nm_falta_var;
   var $nm_falta_var_db;
   var $nm_tpbanco;
   var $nm_servidor;
   var $nm_usuario;
   var $nm_senha;
   var $nm_database_encoding;
   var $nm_con_db2 = array();
   var $nm_con_persistente;
   var $nm_con_use_schema;
   var $nm_tabela;
   var $nm_col_dinamica   = array();
   var $nm_order_dinamico = array();
   var $nm_hidden_blocos  = array();
   var $sc_tem_trans_banco;
   var $nm_bases_all;
   var $nm_bases_access;
   var $nm_bases_ibase;
   var $nm_bases_mysql;
   var $nm_bases_postgres;
   var $nm_bases_sqlite;
   var $nm_bases_sybase;
   var $nm_bases_vfp;
   var $nm_bases_odbc;
   var $sc_page;
//
   function init($Tp_init = "")
   {
       global
             $nm_url_saida, $nm_apl_dependente, $script_case_init, $nmgp_opcao;

      $_SESSION['scriptcase']['proc_mobile'] = false;
      $tmp_useragent = $_SERVER['HTTP_USER_AGENT'];
      if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$tmp_useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($tmp_useragent,0,4)))
      {
          $_SESSION['scriptcase']['proc_mobile'] = true;
      }
      @ini_set('magic_quotes_runtime', 0);
      $this->sc_page = $script_case_init;
      $_SESSION['scriptcase']['sc_num_page'] = $script_case_init;
      $_SESSION['scriptcase']['sc_cnt_sql']  = 0;
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
      $_SESSION['scriptcase']['trial_version'] = 'N';
      $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['decimal_db'] = "."; 

      $this->nm_cod_apl      = "grid_tbl_turma"; 
      $this->nm_nome_apl     = ""; 
      $this->nm_seguranca    = ""; 
      $this->nm_grupo        = "ISchool"; 
      $this->nm_grupo_versao = "2"; 
      $this->nm_autor        = "admin"; 
      $this->nm_versao_sc    = "v8"; 
      $this->nm_tp_lic_sc    = "pe_bronze"; 
      $this->nm_dt_criacao   = "20150405"; 
      $this->nm_hr_criacao   = "212912"; 
      $this->nm_autor_alt    = "admin"; 
      $this->nm_dt_ult_alt   = ""; 
      $this->nm_hr_ult_alt   = ""; 
      $temp_bug_list         = explode(" ", microtime()); 
      list($NM_usec, $NM_sec) = $temp_bug_list; 
      $this->nm_timestamp    = (float) $NM_sec; 
      $this->nm_app_version  = "1.1.0";
// 
// 
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
      if(empty($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_prod']))
      {
              /*check prod*/$_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_prod'] = $str_path_apl_url . "_lib/prod";
      }
      //check img
      if(empty($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_imagens']))
      {
              /*check img*/$_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_imagens'] = $str_path_apl_url . "_lib/file/img";
      }
      //check tmp
      if(empty($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_imag_temp']))
      {
              /*check tmp*/$_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_imag_temp'] = $str_path_apl_url . "_lib/tmp";
      }
      //check doc
      if(empty($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_doc']))
      {
              /*check doc*/$_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_doc'] = $str_path_apl_dir . "_lib/file/doc";
      }
      //end check publication with the prod
      $this->sc_site_ssl     = (isset($_SERVER['HTTP_REFERER']) && strtolower(substr($_SERVER['HTTP_REFERER'], 0, 5)) == 'https') ? true : false;
      $this->sc_protocolo    = ($this->sc_site_ssl) ? 'https://' : 'http://';
      $this->sc_protocolo    = "";
      $this->path_prod       = $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_prod'];
      $this->path_conf       = $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_conf'];
      $this->path_imagens    = $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_imagens'];
      $this->path_imag_temp  = $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_imag_temp'];
      $this->path_doc        = $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_path_doc'];
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
      $this->str_schema_all    = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "iSchool-form/iSchool-form";
      $_SESSION['scriptcase']['erro']['str_schema'] = $this->str_schema_all . "_error.css";
      $_SESSION['scriptcase']['erro']['str_lang']   = $this->str_lang;
      $this->server          = (!isset($_SERVER['HTTP_HOST'])) ? $_SERVER['SERVER_NAME'] : $_SERVER['HTTP_HOST'];
      if (!isset($_SERVER['HTTP_HOST']) && isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != 80 && !$this->sc_site_ssl )
      {
          $this->server         .= ":" . $_SERVER['SERVER_PORT'];
      }
      $this->java_protocol   = (isset($_SERVER['SERVER_PROTOCOL']) && stripos($_SERVER['SERVER_PROTOCOL'],'https') === true) ? 'https://' : 'http://';
      $this->server_pdf      = $this->server;
      $this->server          = "";
      $str_path_web          = $_SERVER['PHP_SELF'];
      $str_path_web          = str_replace("\\", '/', $str_path_web);
      $str_path_web          = str_replace('//', '/', $str_path_web);
      $this->root            = substr($str_path_sys, 0, -1 * strlen($str_path_web));
      $this->path_aplicacao  = substr($str_path_sys, 0, strrpos($str_path_sys, '/'));
      $this->path_aplicacao  = substr($this->path_aplicacao, 0, strrpos($this->path_aplicacao, '/')) . '/grid_tbl_turma';
      $this->path_embutida   = substr($this->path_aplicacao, 0, strrpos($this->path_aplicacao, '/') + 1);
      $this->path_aplicacao .= '/';
      $this->path_link       = substr($str_path_web, 0, strrpos($str_path_web, '/'));
      $this->path_link       = substr($this->path_link, 0, strrpos($this->path_link, '/')) . '/';
      $this->path_botoes     = $this->path_link . "_lib/img";
      $this->path_img_global = $this->path_link . "_lib/img";
      $this->path_img_modelo = $this->path_link . "_lib/img";
      $this->path_icones     = $this->path_link . "_lib/img";
      $this->path_imag_cab   = $this->path_link . "_lib/img";
      $this->path_help       = $this->path_link . "_lib/webhelp/";
      $this->path_font       = $this->root . $this->path_link . "_lib/font/";
      $this->path_btn        = $this->root . $this->path_link . "_lib/buttons/";
      $this->path_css        = $this->root . $this->path_link . "_lib/css/";
      $this->path_lib_php    = $this->root . $this->path_link . "_lib/lib/php";
      $this->path_lib_js     = $this->root . $this->path_link . "_lib/lib/js";
      $this->path_lang       = "../_lib/lang/";
      $this->path_lang_js    = "../_lib/js/";
      $this->path_chart_theme = $this->root . $this->path_link . "_lib/chart/";
      $this->path_cep        = $this->path_prod . "/cep";
      $this->path_cor        = $this->path_prod . "/cor";
      $this->path_js         = $this->path_prod . "/lib/js";
      $this->path_libs       = $this->root . $this->path_prod . "/lib/php";
      $this->path_third      = $this->root . $this->path_prod . "/third";
      $this->path_secure     = $this->root . $this->path_prod . "/secure";
      $this->path_adodb      = $this->root . $this->path_prod . "/third/adodb";
      $_SESSION['scriptcase']['dir_temp'] = $this->root . $this->path_imag_temp;
      if (!isset($_SESSION['scriptcase']['fusioncharts_new']))
      {
          $_SESSION['scriptcase']['fusioncharts_new'] = @is_dir($this->path_third . '/fusioncharts_xt_ol');
      }
      if (!isset($_SESSION['scriptcase']['phantomjs_charts']))
      {
          $_SESSION['scriptcase']['phantomjs_charts'] = @is_dir($this->path_third . '/phantomjs');
      }
      if (isset($_SESSION['scriptcase']['phantomjs_charts']))
      {
          $aTmpOS = $this->getRunningOS();
          $_SESSION['scriptcase']['phantomjs_charts'] = @is_dir($this->path_third . '/phantomjs/' . $aTmpOS['os']);
      }
      if (!class_exists('Services_JSON'))
      {
          include_once("grid_tbl_turma_json.php");
      }
      $this->SC_Link_View = (isset($_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['SC_Link_View'])) ? $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['SC_Link_View'] : false;
      if (isset($_GET['SC_Link_View']) && !empty($_GET['SC_Link_View']) && is_numeric($_GET['SC_Link_View']))
      {
          if ($_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['embutida'])
          {
              $this->SC_Link_View = true;
              $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['SC_Link_View'] = true;
          }
      }
      if (isset($_POST['nmgp_opcao']) && $_POST['nmgp_opcao'] == "ajax_add_dyn_search")
      {
          $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['dyn_search_add']['cmp'] = $_POST['parm'];
          $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['dyn_search_add']['seq'] = $_POST['seq'];
          $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['opcao'] = $_POST['origem'];
          $nmgp_opcao = $_POST['origem'];
      }
      if (isset($_GET['nmgp_opcao']) && $_GET['nmgp_opcao'] == "ajax_aut_comp_dyn_search")
      {
          $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['dyn_search_aut_comp']['cmp'] = $_GET['field'];
          $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['opcao'] = $_GET['origem'];
          $nmgp_opcao = $_GET['origem'];
      }
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
                      $nm_apl_dest = $this->path_link . SC_dir_app_name($nm_apl_dest) . "/";
                  }
                  if (isset($_POST['nmgp_opcao']) && ($_POST['nmgp_opcao'] == "ajax_event" || $_POST['nmgp_opcao'] == "ajax_navigate"))
                  {
                      $this->Arr_result = array();
                      $this->Arr_result['redirInfo']['action']              = $nm_apl_dest;
                      $this->Arr_result['redirInfo']['target']              = $parms['T'];
                      $this->Arr_result['redirInfo']['metodo']              = "post";
                      $this->Arr_result['redirInfo']['script_case_init']    = $this->sc_page;
                      $this->Arr_result['redirInfo']['script_case_session'] = session_id();
                      $oJson = new Services_JSON();
                      echo $oJson->encode($this->Arr_result);
                      exit;
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
      $this->link_form_tbl_turma =  $this->sc_protocolo . $this->server . $this->path_link . "" . SC_dir_app_name('form_tbl_turma') . "/" ; 
      if ($Tp_init == "Path_sub")
      {
          return;
      }
      $str_path = substr($this->path_prod, 0, strrpos($this->path_prod, '/') + 1);
      if (!is_file($this->root . $str_path . 'devel/class/xmlparser/nmXmlparserIniSys.class.php'))
      {
          unset($_SESSION['scriptcase']['nm_sc_retorno']);
          unset($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_conexao']);
      }
      include($this->path_lang . $this->str_lang . ".lang.php");
      include($this->path_lang . "config_region.php");
      include($this->path_lang . "lang_config_region.php");
      asort($this->Nm_lang_conf_region);
      $_SESSION['scriptcase']['charset']  = (isset($this->Nm_lang['Nm_charset']) && !empty($this->Nm_lang['Nm_charset'])) ? $this->Nm_lang['Nm_charset'] : "UTF-8";
      $_SESSION['scriptcase']['charset_html']  = (isset($this->sc_charset[$_SESSION['scriptcase']['charset']])) ? $this->sc_charset[$_SESSION['scriptcase']['charset']] : $_SESSION['scriptcase']['charset'];
      if (!function_exists("mb_convert_encoding"))
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_xtmb'] . "</font></div>";exit;
      } 
      foreach ($this->Nm_lang_conf_region as $ind => $dados)
      {
         if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
         {
             $this->Nm_lang_conf_region[$ind] = mb_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
         }
      }
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
      $PHP_ver = str_replace(".", "", phpversion()); 
      if (substr($PHP_ver, 0, 3) < 434)
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_phpv'] . "</font></div>";exit;
      } 
      if (file_exists($this->path_libs . "/ver.dat"))
      {
          $SC_ver = file($this->path_libs . "/ver.dat"); 
          $SC_ver = str_replace(".", "", $SC_ver[0]); 
          if (substr($SC_ver, 0, 5) < 40015)
          {
              echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_incp'] . "</font></div>";exit;
          } 
      } 
      $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['path_doc'] = $this->path_doc; 
      $_SESSION['scriptcase']['nm_path_prod'] = $this->root . $this->path_prod . "/"; 
      if (empty($this->path_imag_cab))
      {
          $this->path_imag_cab = $this->path_img_global;
      }
      if (!is_dir($this->root . $this->path_prod))
      {
          echo "<style type=\"text/css\">";
          echo ".scButton_default { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #65a3b8; border-style: solid; border-width: 0px; padding: 5px 8px;  }";
          echo ".scButton_onmouseover { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #317b94; border-style: solid; border-width: 0px; padding: 5px 8px;  }";
          echo ".scButton_onmousedown { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #0a5770; border-style: solid; border-width: 0px; padding: 5px 8px;  }";
          echo ".scButton_disabled { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #d1d1d1; font-weight: normal; background-color: #808080; border-style: solid; border-width: 0px; padding: 5px 8px;  }";
          echo ".scLink_default { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:visited { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:active { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:hover { text-decoration: none; font-size: 12px; color: #0000AA;  }";
          echo "</style>";
          echo "<table width=\"80%\" border=\"1\" height=\"117\">";
          echo "<tr>";
          echo "   <td bgcolor=\"\">";
          echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_cmlb_nfnd'] . "</font>";
          echo "  " . $this->root . $this->path_prod;
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          if (!$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_outra_jan']) || !$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_outra_jan'])) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
               $btn_value = "" . $this->Ini->Nm_lang['lang_btns_back'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_value))
               {
                   $btn_value = mb_convert_encoding($btn_value, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
               $btn_hint = "" . $this->Ini->Nm_lang['lang_btns_back_hint'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_hint))
               {
                   $btn_hint = mb_convert_encoding($btn_hint, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
?>
                   <input type="button" id="sai" onClick="window.location='<?php echo $_SESSION['scriptcase']['nm_sc_retorno'] ?>'; return false" class="scButton_default" value="<?php echo $btn_value ?>" title="<?php echo $btn_hint ?>" style="vertical-align: middle;">

<?php
              } 
              else 
              { 
               $btn_value = "" . $this->Ini->Nm_lang['lang_btns_exit'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_value))
               {
                   $btn_value = mb_convert_encoding($btn_value, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
               $btn_hint = "" . $this->Ini->Nm_lang['lang_btns_exit_hint'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_hint))
               {
                   $btn_hint = mb_convert_encoding($btn_hint, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
?>
                   <input type="button" id="sai" onClick="window.location='<?php echo $nm_url_saida ?>'; return false" class="scButton_default" value="<?php echo $btn_value ?>" title="<?php echo $btn_hint ?>" style="vertical-align: middle;">

<?php
              } 
          } 
          exit ;
      }

      $this->path_atual  = getcwd();
      $opsys = strtolower(php_uname());

      $this->nm_cont_lin           = 0;
      $this->nm_limite_lin         = 0;
      $this->nm_limite_lin_prt     = 0;
      $this->nm_limite_lin_res     = 0;
      $this->nm_limite_lin_res_prt = 0;
// 
      include_once($this->path_aplicacao . "grid_tbl_turma_erro.class.php"); 
      $this->Erro = new grid_tbl_turma_erro();
      include_once($this->path_adodb . "/adodb.inc.php"); 
      $this->sc_Include($this->path_libs . "/nm_sec_prod.php", "F", "nm_reg_prod") ; 
      $this->sc_Include($this->path_libs . "/nm_ini_perfil.php", "F", "perfil_lib") ; 
// 
 if(function_exists('set_php_timezone')) set_php_timezone('grid_tbl_turma'); 
// 
      $this->sc_Include($this->path_lib_php . "/nm_functions.php", "", "") ; 
      $this->sc_Include($this->path_lib_php . "/nm_edit.php", "F", "nmgp_Form_Num_Val") ; 
      $this->sc_Include($this->path_lib_php . "/nm_conv_dados.php", "F", "nm_conv_limpa_dado") ; 
      $this->sc_Include($this->path_lib_php . "/nm_data.class.php", "C", "nm_data") ; 
      $this->nm_data = new nm_data("pt_br");
      include("../_lib/css/" . $this->str_schema_all . "_grid.php");
      $this->Tree_img_col    = trim($str_tree_col);
      $this->Tree_img_exp    = trim($str_tree_exp);
      $_SESSION['scriptcase']['nmamd'] = array();
      perfil_lib($this->path_libs);
      if (!isset($_SESSION['sc_session'][$this->sc_page]['SC_Check_Perfil']))
      {
          if(function_exists("nm_check_perfil_exists")) nm_check_perfil_exists($this->path_libs, $this->path_prod);
          $_SESSION['sc_session'][$this->sc_page]['SC_Check_Perfil'] = true;
      }
      if (function_exists("nm_check_pdf_server")) $this->server_pdf = nm_check_pdf_server($this->path_libs, $this->server_pdf);
      if (!isset($_SESSION['scriptcase']['sc_num_img']))
      { 
          $_SESSION['scriptcase']['sc_num_img'] = 1;
      } 
      $this->regionalDefault();
      $this->Str_btn_grid    = trim($str_button) . "/" . trim($str_button) . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".php";
      $this->Str_btn_css     = trim($str_button) . "/" . trim($str_button) . ".css";
      include($this->path_btn . $this->Str_btn_grid);
      $_SESSION['scriptcase']['erro']['str_schema_dir'] = $this->str_schema_all . "_error" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
      $this->sc_tem_trans_banco = false;
      $this->nm_bases_access     = array("access", "ado_access");
      $this->nm_bases_ibase      = array("ibase", "firebird", "borland_ibase");
      $this->nm_bases_mysql      = array("mysql", "mysqlt", "maxsql", "pdo_mysql");
      $this->nm_bases_postgres   = array("postgres", "postgres64", "postgres7", "pdo_pgsql");
      $this->nm_bases_sqlite     = array("sqlite", "sqlite3", "pdosqlite");
      $this->nm_bases_sybase     = array("sybase");
      $this->nm_bases_vfp        = array("vfp");
      $this->nm_bases_odbc       = array("odbc");
      $this->nm_bases_all        = array_merge($this->nm_bases_access, $this->nm_bases_ibase, $this->nm_bases_mysql, $this->nm_bases_postgres, $this->nm_bases_sqlite, $this->nm_bases_sybase, $this->nm_bases_vfp, $this->nm_bases_odbc);
      $this->nm_font_ttf = array("ar", "ja", "pl", "ru", "sk", "thai", "zh_cn", "zh_hk", "cz", "el", "ko", "mk");
      $this->nm_ttf_arab = array("ar");
      $this->nm_ttf_jap  = array("ja");
      $this->nm_ttf_rus  = array("pl", "ru", "sk", "cz", "el", "mk");
      $this->nm_ttf_thai = array("thai");
      $this->nm_ttf_chi  = array("zh_cn", "zh_hk", "ko");
      $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['seq_dir'] = 0; 
      $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['sub_dir'] = array(); 
      $_SESSION['scriptcase']['nm_bases_security']  = "enc_nm_enc_v1D9FYDQX7HIrKVWBODMvmDkBOHEFYVoJwDcFYZSBODSrYV5JsDErKVkXeDWX7DoB/HQFYDQFaHAveD5NUHgNKDkBOV5FYHMBiHQNmZkFGZ1vOZMJwDMvCHENiHEXCHMX7DcXGZ9XGHAvmD5F7DMBYVcFeDWF/HMX7HQXOZSBOD1NaV5X7HgBOHArCHEXCHIBiDcXGZ9XGHIvsD5F7DMrYVcFeDWJeHMX7HQNwZSBOD1NaD5rqDEBOHEFiHEFqDoF7DcJUZSBiZ1zGVWFaHgvOVcFeH5FqHMFGHQJmH9BqHAvCV5X7HgNKZSJqDWF/HIFGHQNwDQB/DSvCD5F7DMNODkBsV5F/HINUHQBiZSBqZ1vmV5X7HgBOHEJqHEXCHMFaHQXsDuBqHINaV5FGHuNOVcFKHEFYVoBqDcBwH9BqZ1vOZMJwHgveVkJ3H5F/HMJsHQJKDQFUHINaD5F7DMBYVcFeH5FqHINUDcFYZ1BOD1NaV5X7DMveHENiH5FYHMB/HQJKDQFUHAvOD5F7HgvOVcB/DWF/HIF7HQBsZ1X7HAvCD5rqDEBOHEFiHEFqDoF7DcJUZSBiZ1zGVWFaHgvOVcFeH5XCHIBiHQXGZSBODSvOV5X7HgveVkJqH5FYHMFaDcXGH9FUD1NKD5F7HgvOVIB/H5FqHMF7HQNwZkFGHINaV5X7HgNOZSJ3DWr/HIFGHQBiH9BiDSNaV5FGHuNOVcFKHEFYVoBqDcBwH9BqZ1vOZMJwHgvsHArsHEFqHIJeHQBiZ9F7D1NKD5F7DMNOVIBsDurGVErqHQJmVIJsHINKV5X7HgBeVkJ3DuJeHMJsHQXOZSFUHINaD5F7DMrYVcXKDuX7HMJeHQXOZSBqHAvmD5rqDEBOHEFiHEFqDoF7DcJUZ9rqDSvCD5FaDMNaZSrCDWXCHMBqDcJUVIraHArKV5X7DEvsHEXeDuFYZuFaD9JKDQFGHAveD5rqHgrKV9FiDWXCHMBqHQBsZ1rqD1NaD5raDMBYHEJGDWr/VoB/DcJUDQJwD1BeD5BOHuNODkFCDuX7DoJsHQFYZ1FUHArKZMJeDEBOZSJGH5FGDoNUDcJeZSX7HArYD5NUHgNKVcrsDWFYVoFGDcJUZkFUHArKV5FaDEBeHEJGH5F/VoJeDcBwDQFGHAvmV5BiHuNODkBODWBmVoFaD9BiZ1F7HIveV5FaDEBOHAFKDWF/VoBOD9XsZSFGHAvmV5BiHuNOVcFKHEFYVoBqDcJUZ1B/Z1NOD5JeDEBeHEXeV5XCVoBqHQXGZ9JeD1BeD5rqHuvmVcBOH5B7VoBqHQXOZkBiDSNOHQraHgvsHEJqDWX7HIraHQNwDQBOZ1BYHQJeDMBYVIB/HEBmVEF7HQXGZ1FUZ1rYHQFUHgNOVkJqDuJeHIBqHQNmZ9JeZ1BYHQJeDMvmVIBsHEX7HIBiHQXGZkFUD1rwV5FGDEBeHEXeH5X/DoF7D9NwZSX7D1BeV5raHuzGVcFKDWFaVENUD9JmZ1X7Z1BOD5FaHgBeHEJGDWF/DoBOD9XsDQJsDSBYV5FGHgvsVcFCH5XCDoFGD9BsH9B/Z1NOD5JeHgvCZSJ3V5XCVoB/D9NmDQFaZ1BYV5FUHuvmDkBOH5XKVoraD9BiVINUHINKD5FaDEvsZSJGDuFaZuBqD9NwH9X7Z1rwV5JwHuBYVcFiV5X7VoFGDcBqH9FaHAN7V5JeDErKHEBUH5F/DoF7DcJeDQFGD1BeD5JwDMrwZSJ3H5FqDoJeD9JmZ1B/D1NaD5rqDErKZSXeH5FYDoFUD9JKDQJsZ1rwV5BqHuBYVcXKV5X7HIF7DcBqZ1B/D1rwHQFGDEBOZSXeV5FaVoJwHQXGDuFaHArYD5BqHuzGZSrCV5FYDoNUDcJUZkFUZ1rYHQBiDEBOHEBUH5F/DoB/D9XsZ9JeZ1N7D5rqHuNODkBOH5FqVoB/D9BsZ1FGHArKV5FUDMrYZSXeV5FqHIJsD9JKZSFUHArYD5NUDMNOVIB/DWF/HMJeD9BiZSBqD1rwHQX7HgvCHArCDWF/VoBiDcJUZSX7Z1BYHuFaDMrwDkBODuX7VoX7D9JmZ1B/D1rKD5BiDEvsHEFiDWr/VoX7DcXOZSFGD1veVWJwHuzGVIBOV5FYVoB/HQFYZSFaHArKV5XGDErKHErCDWF/VoBiDcJUZSX7Z1BYHuFaDMvmVcFKV5BmVoBqD9BsZkFGHArKV5XGDMveVkXeDuFaDoBOD9XsDQFaDSN7HuB/DMBYVcBOV5F/VENUDcBqH9BqHArKV5FUDMrYZSXeV5FqHIJsD9NwDQJsHABYV5raHgvsVIFCDWJeVoraD9BsZSFaDSNOV5FaHgBeHEFiV5B3DoF7D9XsDuFaHANKV5BODMvOVcBUDWXKVEraHQNmZ1BiD1vsD5XGHgBYHArCDWF/VoBiDcJUZSX7Z1BYHuFaDMBOVIBOH5XCVoF7D9JmZ1FGHAN7HuFGDMveVkJ3DuFaHMJeD9NmZ9F7HANOHuFaHuNOZSrCH5FqDoXGHQJmZ1FGHArYHuBqDMvCHErCV5FaHMJeDcJUDQFaDSN7HQBqDMzGVcFeV5BmVoFaHQBsZ1FGD1zGD5raHgvsZSJ3DuFYHIF7DcXGH9BiHABYHuFGDMBOVIBsDWXKVoFaHQXGZ1FGHArYHuFGHgBOHArCHEFqHMX7HQJKDuFaHAveD5NUHgNKDkBOV5FYHMBiHQBqZ1FUZ1vmD5Bq";
      ob_start();
      $this->prep_conect();
      if (isset($_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['initialize']) && $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['initialize'])  
      { 
          $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['Gera_log_access'] = true;
          $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['initialize']      = false;
      } 
      $this->conectDB();
      if (!in_array(strtolower($this->nm_tpbanco), $this->nm_bases_all))
      {
          echo "<tr>";
          echo "   <td bgcolor=\"\">";
          echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_nspt'] . "</font>";
          echo "  " . $perfil_trab;
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          if (!$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_outra_jan']) || !$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_outra_jan'])) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
                  echo "<a href='" . $_SESSION['scriptcase']['nm_sc_retorno'] . "' target='_self'><img border='0' src='" . $this->path_botoes . "/nm_scriptcase8_saphir_bvoltar.gif' title='" . $this->Nm_lang['lang_btns_rtrn_scrp_hint'] . "' align=absmiddle></a> \n" ; 
              } 
              else 
              { 
                  echo "<a href='$nm_url_saida' target='_self'><img border='0' src='" . $this->path_botoes . "/nm_scriptcase8_saphir_bsair.gif' title='" . $this->Nm_lang['lang_btns_exit_appl_hint'] . "' align=absmiddle></a> \n" ; 
              } 
          } 
          exit ;
      } 
      $this->Ajax_result_set = ob_get_contents();
      ob_end_clean();
      if (empty($this->nm_tabela))
      {
          $this->nm_tabela = "tbl_turma"; 
      }
   }

   function getRunningOS()
   {
       $aOSInfo = array();

       if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
       {
           $aOSInfo['os'] = 'win';
       }
       elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
       {
           $aOSInfo['os'] = 'linux-i386';
           if(strpos(strtolower(php_uname()), 'x86_64') !== FALSE) 
            {
               $aOSInfo['os'] = 'linux-amd64';
            }
       }
       elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
       {
           $aOSInfo['os'] = 'macos';
       }

       return $aOSInfo;
   }

   function prep_conect()
   {
      if (isset($_SESSION['scriptcase']['sc_connection']) && !empty($_SESSION['scriptcase']['sc_connection']))
      {
          foreach ($_SESSION['scriptcase']['sc_connection'] as $NM_con_orig => $NM_con_dest)
          {
              if (isset($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_conexao']) && $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_conexao'] == $NM_con_orig)
              {
/*NM*/            $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_conexao'] = $NM_con_dest;
              }
              if (isset($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_perfil']) && $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_perfil'] == $NM_con_orig)
              {
/*NM*/            $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_perfil'] = $NM_con_dest;
              }
              if (isset($_SESSION['scriptcase']['grid_tbl_turma']['glo_con_' . $NM_con_orig]))
              {
                  $_SESSION['scriptcase']['grid_tbl_turma']['glo_con_' . $NM_con_orig] = $NM_con_dest;
              }
          }
      }
      $con_devel             = (isset($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_conexao'])) ? $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_conexao'] : ""; 
      $perfil_trab           = ""; 
      $this->nm_falta_var    = ""; 
      $this->nm_falta_var_db = ""; 
      $nm_crit_perfil        = false;
      if (isset($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_conexao']))
      {
          db_conect_devel($con_devel, $this->root . $this->path_prod, 'ISchool', 2); 
          if (empty($_SESSION['scriptcase']['glo_tpbanco']) && empty($_SESSION['scriptcase']['glo_banco']))
          {
              $nm_crit_perfil = true;
          }
      }
      if (isset($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_perfil']) && !empty($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_perfil']))
      {
          $perfil_trab = $_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_perfil'];
      }
      elseif (isset($_SESSION['scriptcase']['glo_perfil']) && !empty($_SESSION['scriptcase']['glo_perfil']))
      {
          $perfil_trab = $_SESSION['scriptcase']['glo_perfil'];
      }
      if (!empty($perfil_trab))
      {
          $_SESSION['scriptcase']['glo_senha_protect'] = "";
          carrega_perfil($perfil_trab, $this->path_libs, "S", $this->path_conf);
          if (empty($_SESSION['scriptcase']['glo_senha_protect']))
          {
              $nm_crit_perfil = true;
          }
      }
      else
      {
          $perfil_trab = $con_devel;
      }
      if (!isset($_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['embutida_init']) || !$_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['embutida_init']) 
      {
      }
// 
      if (isset($_SESSION['scriptcase']['glo_decimal_db']) && !empty($_SESSION['scriptcase']['glo_decimal_db']))
      {
         $_SESSION['sc_session'][$this->sc_page]['grid_tbl_turma']['decimal_db'] = $_SESSION['scriptcase']['glo_decimal_db']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_tpbanco']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_tpbanco; ";
          }
      }
      else
      {
          $this->nm_tpbanco = $_SESSION['scriptcase']['glo_tpbanco']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_servidor']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_servidor; ";
          }
      }
      else
      {
          $this->nm_servidor = $_SESSION['scriptcase']['glo_servidor']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_banco']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_banco; ";
          }
      }
      else
      {
          $this->nm_banco = $_SESSION['scriptcase']['glo_banco']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_usuario']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_usuario; ";
          }
      }
      else
      {
          $this->nm_usuario = $_SESSION['scriptcase']['glo_usuario']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_senha']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_senha; ";
          }
      }
      else
      {
          $this->nm_senha = $_SESSION['scriptcase']['glo_senha']; 
      }
      if (isset($_SESSION['scriptcase']['glo_database_encoding']))
      {
          $this->nm_database_encoding = $_SESSION['scriptcase']['glo_database_encoding']; 
      }
      if (isset($_SESSION['scriptcase']['glo_use_persistent']))
      {
          $this->nm_con_persistente = $_SESSION['scriptcase']['glo_use_persistent']; 
      }
      if (isset($_SESSION['scriptcase']['glo_use_schema']))
      {
          $this->nm_con_use_schema = $_SESSION['scriptcase']['glo_use_schema']; 
      }
// 
      if (!empty($this->nm_falta_var) || !empty($this->nm_falta_var_db) || $nm_crit_perfil)
      {
          echo "<style type=\"text/css\">";
          echo ".scButton_default { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #65a3b8; border-style: solid; border-width: 0px; padding: 5px 8px;  }";
          echo ".scButton_onmouseover { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #317b94; border-style: solid; border-width: 0px; padding: 5px 8px;  }";
          echo ".scButton_onmousedown { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #0a5770; border-style: solid; border-width: 0px; padding: 5px 8px;  }";
          echo ".scButton_disabled { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #d1d1d1; font-weight: normal; background-color: #808080; border-style: solid; border-width: 0px; padding: 5px 8px;  }";
          echo ".scLink_default { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:visited { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:active { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:hover { text-decoration: none; font-size: 12px; color: #0000AA;  }";
          echo "</style>";
          echo "<table width=\"80%\" border=\"1\" height=\"117\">";
          if (empty($this->nm_falta_var_db))
          {
              if (!empty($this->nm_falta_var))
              {
                  echo "<tr>";
                  echo "   <td bgcolor=\"\">";
                  echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_glob'] . "</font>";
                  echo "  " . $this->nm_falta_var;
                  echo "   </b></td>";
                  echo " </tr>";
              }
              if ($nm_crit_perfil)
              {
                  echo "<tr>";
                  echo "   <td bgcolor=\"\">";
                  echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_nfnd'] . "</font>";
                  echo "  " . $perfil_trab;
                  echo "   </b></td>";
                  echo " </tr>";
              }
          }
          else
          {
              echo "<tr>";
              echo "   <td bgcolor=\"\">";
              echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_data'] . "</font></b>";
              echo "   </td>";
              echo " </tr>";
          }
          echo "</table>";
          if (!$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_outra_jan']) || !$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_outra_jan'])) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
               $btn_value = "" . $this->Ini->Nm_lang['lang_btns_back'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_value))
               {
                   $btn_value = mb_convert_encoding($btn_value, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
               $btn_hint = "" . $this->Ini->Nm_lang['lang_btns_back_hint'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_hint))
               {
                   $btn_hint = mb_convert_encoding($btn_hint, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
?>
                   <input type="button" id="sai" onClick="window.location='<?php echo $_SESSION['scriptcase']['nm_sc_retorno'] ?>'; return false" class="scButton_default" value="<?php echo $btn_value ?>" title="<?php echo $btn_hint ?>" style="vertical-align: middle;">

<?php
              } 
              else 
              { 
               $btn_value = "" . $this->Ini->Nm_lang['lang_btns_exit'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_value))
               {
                   $btn_value = mb_convert_encoding($btn_value, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
               $btn_hint = "" . $this->Ini->Nm_lang['lang_btns_exit_hint'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_hint))
               {
                   $btn_hint = mb_convert_encoding($btn_hint, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
?>
                   <input type="button" id="sai" onClick="window.location='<?php echo $nm_url_saida ?>'; return false" class="scButton_default" value="<?php echo $btn_value ?>" title="<?php echo $btn_hint ?>" style="vertical-align: middle;">

<?php
              } 
          } 
          exit ;
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_usr']) && !empty($_SESSION['scriptcase']['glo_db_master_usr']))
      {
          $this->nm_usuario = $_SESSION['scriptcase']['glo_db_master_usr']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_pass']) && !empty($_SESSION['scriptcase']['glo_db_master_pass']))
      {
          $this->nm_senha = $_SESSION['scriptcase']['glo_db_master_pass']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_cript']) && !empty($_SESSION['scriptcase']['glo_db_master_cript']))
      {
          $_SESSION['scriptcase']['glo_senha_protect'] = $_SESSION['scriptcase']['glo_db_master_cript']; 
      }
   }
   function conectDB()
   {
      global $glo_senha_protect;
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && isset($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_conexao']))
      { 
          $this->Db = db_conect_devel($_SESSION['scriptcase']['grid_tbl_turma']['glo_nm_conexao'], $this->root . $this->path_prod, 'ISchool'); 
      } 
      else 
      { 
          $this->Db = db_conect($this->nm_tpbanco, $this->nm_servidor, $this->nm_usuario, $this->nm_senha, $this->nm_banco, $glo_senha_protect, "S", $this->nm_con_persistente, $this->nm_con_db2, $this->nm_database_encoding); 
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_ibase))
      {
          if (function_exists('ibase_timefmt'))
          {
              ibase_timefmt('%Y-%m-%d %H:%M:%S');
          } 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_sybase))
      {
          $this->Db->fetchMode = ADODB_FETCH_BOTH;
          $this->Db->Execute("set dateformat ymd");
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_postgres))
      {
          $this->Db->Execute("SET DATESTYLE TO ISO");
      } 
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
       $_SESSION['scriptcase']['reg_conf']['num_group_digit']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_group_digit']))       ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_group_digit'] : "1";
       $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_group_digit'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_group_digit'] : "1";
   }
// 
   function sc_Include($path, $tp, $name)
   {
       if ((empty($tp) && empty($name)) || ($tp == "F" && !function_exists($name)) || ($tp == "C" && !class_exists($name)))
       {
           include_once($path);
       }
   } // sc_Include
   function sc_Sql_Protect($var, $tp, $conex="")
   {
       if (empty($conex) || $conex == "conn_mysql")
       {
           $TP_banco = $_SESSION['scriptcase']['glo_tpbanco'];
       }
       else
       {
           eval ("\$TP_banco = \$this->nm_con_" . $conex . "['tpbanco'];");
       }
       if ($tp == "date")
       {
           if (in_array(strtolower($TP_banco), $this->nm_bases_access))
           {
               return "#" . $var . "#";
           }
           else
           {
               return "'" . $var . "'";
           }
       }
       else
       {
           return $var;
       }
   } // sc_Sql_Protect
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
           $comando = "INSERT INTO sc_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'grid_tbl_turma', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sc_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'grid_tbl_turma', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sc_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'grid_tbl_turma', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
       }
   }
   function dyn_convert_date($val)
   {
       $val_ok = array();
       foreach ($val as $Part_date)
       {
           if (substr($Part_date, 0, 1) == "Y")
           {
               $val_ok['ano'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "M")
           {
               $val_ok['mes'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "D")
           {
               $val_ok['dia'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "H")
           {
               $val_ok['hor'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "I")
           {
               $val_ok['min'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "S")
           {
               $val_ok['seg'] = substr($Part_date, 2);
           }
       }
       return $val_ok;
   }
}
//===============================================================================
//
class grid_tbl_turma_sub_css
{
   function grid_tbl_turma_sub_css()
   {
      global $script_case_init;
      $str_schema_all = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "iSchool-form/iSchool-form";
      if ($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['SC_herda_css'] == "N")
      {
          $_SESSION['sc_session'][$script_case_init]['SC_sub_css']['grid_tbl_turma']    = $str_schema_all . "_grid.css";
          $_SESSION['sc_session'][$script_case_init]['SC_sub_css_bw']['grid_tbl_turma'] = $str_schema_all . "_grid_bw.css";
      }
   }
}
//
class grid_tbl_turma_apl
{
   var $Ini;
   var $Erro;
   var $Db;
   var $Lookup;
   var $nm_location;
   var $NM_ajax_flag  = false;
   var $NM_ajax_opcao = '';
   var $grid;
   var $det;
   var $Res;
   var $Graf;
   var $pdf;
   var $xls;
   var $xml;
   var $csv;
   var $rtf;
//
//----- 
   function prep_modulos($modulo)
   {
      $this->$modulo->Ini = $this->Ini;
      $this->$modulo->Db = $this->Db;
      $this->$modulo->Erro = $this->Erro;
      $this->$modulo->Lookup = $this->Lookup;
      $this->$modulo->arr_buttons = $this->arr_buttons;
   }
//
//----- 
   function controle($linhas = 0)
   {
      global $nm_saida, $nm_url_saida, $script_case_init, $nmgp_parms_pdf, $nmgp_graf_pdf, $nm_apl_dependente, $nmgp_navegator_print, $nmgp_tipo_print, $nmgp_cor_print, $nmgp_cor_word, $NMSC_conf_apl, $NM_contr_var_session, $NM_run_iframe,
             $glo_senha_protect, $nmgp_opcao, $nm_call_php, $nmgp_chave_det, $nmgp_parm_acum, $rec, $nmgp_quant_linhas, $nmgp_fast_search, $nmgp_cond_fast_search, $nmgp_arg_fast_search, $nmgp_ordem;

      if ($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida'])
      { 
          if (!empty($GLOBALS['nmgp_parms'])) 
          { 
              $GLOBALS['nmgp_parms'] = str_replace("@aspass@", "'", $GLOBALS['nmgp_parms']);
              $todo = explode("?@?", $GLOBALS["nmgp_parms"]);
              foreach ($todo as $param)
              {
                   $cadapar = explode("?#?", $param);
                   if (1 < sizeof($cadapar))
                   {
                       if (isset($GLOBALS['sc_conv_var'][$cadapar[0]]))
                       {
                           $cadapar[0] = $GLOBALS['sc_conv_var'][$cadapar[0]];
                       }
                       elseif (isset($GLOBALS['sc_conv_var'][strtolower($cadapar[0])]))
                       {
                           $cadapar[0] = $GLOBALS['sc_conv_var'][strtolower($cadapar[0])];
                       }
                       nm_limpa_str_grid_tbl_turma($cadapar[1]);
                       nm_protect_num_grid_tbl_turma($cadapar[0], $cadapar[1]);
                       $$cadapar[0] = $cadapar[1];
                   }
              }
          } 
      } 
      $_SESSION['scriptcase']['sc_ctl_ajax'] = 'part';
      if (!$this->Ini) 
      { 
          $this->Ini = new grid_tbl_turma_ini(); 
          $this->Ini->init();
      } 
      $this->Db = $this->Ini->Db; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['nm_tpbanco'] = $this->Ini->nm_tpbanco;
      $this->nm_data = new nm_data("pt_br");
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
      { 
          include_once($this->Ini->path_embutida . "grid_tbl_turma/grid_tbl_turma_erro.class.php"); 
      } 
      else 
      { 
          include_once($this->Ini->path_aplicacao . "grid_tbl_turma_erro.class.php"); 
      } 
      $this->Erro      = new grid_tbl_turma_erro();
      $this->Erro->Ini = $this->Ini;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
      { 
          require_once($this->Ini->path_embutida . "grid_tbl_turma/grid_tbl_turma_lookup.class.php"); 
      } 
      else 
      { 
          require_once($this->Ini->path_aplicacao . "grid_tbl_turma_lookup.class.php"); 
      } 
      $this->Lookup       = new grid_tbl_turma_lookup();
      $this->Lookup->Db   = $this->Db;
      $this->Lookup->Ini  = $this->Ini;
      $this->Lookup->Erro = $this->Erro;
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
      {
          $_SESSION['scriptcase']['saida_var'] = false;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['ajax_nav'] = false;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['scroll_navigate'] = false;
          if (isset($_POST['nmgp_opcao']) && $_POST['nmgp_opcao'] == "ajax_navigate")
          {
              ob_start();
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['ajax_nav'] = true;
              $_SESSION['scriptcase']['saida_var']  = true;
              $_SESSION['scriptcase']['saida_html'] = "";
              $this->Ini->Arr_result = array();
              $nmgp_opcao = $_POST['opc'];
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = $nmgp_opcao;
              if (isset($_POST['parm']) && $_POST['parm'] == "save_grid")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['save_grid'] = true;
              }
              if ($nmgp_opcao == "edit" && isset($_POST['parm']) && $_POST['parm'] == "fim")
              {
                  $rec = $_POST['parm'];
              }
              if ($nmgp_opcao == "rec" || $nmgp_opcao == "muda_rec_linhas")
              {
                  $rec = $_POST['parm'];
              }
              if ($nmgp_opcao == "muda_qt_linhas")
              {
                  $nmgp_quant_linhas  = strtolower($_POST['parm']);
              }
              if ($nmgp_opcao == "fast_search")
              {
                  $temp = explode("_SCQS_", $_POST['parm']);
                  $nmgp_fast_search      = (isset($temp[0])) ? $temp[0] : "";
                  $nmgp_cond_fast_search = (isset($temp[1])) ? $temp[1] : "";
                  $nmgp_arg_fast_search  = (isset($temp[2])) ? $temp[2] : "";
              }
              if ($nmgp_opcao == "ordem")
              {
                  $nmgp_ordem = $_POST['parm'];
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['Gera_log_access'])
      {
          $this->Ini->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['Gera_log_access'] = false;
      }
      $_SESSION['sc_session']['path_third'] = $this->Ini->path_prod . "/third";
      $_SESSION['sc_session']['path_img']   = $this->Ini->path_img_global;
      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_det'] = false;
      if ($nmgp_opcao == 'pdf_det')
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_det'] = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = 'pdf';
          $nmgp_opcao = 'pdf';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida']      = false;
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida_grid']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida_grid'] = false;
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida_init']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida_init'] = false;
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida_label']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida_label'] = false;
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cab_embutida']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cab_embutida'] = "";
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida_pdf']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida_pdf'] = "";
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida_treeview']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida_treeview'] = false;
      } 
      include("../_lib/css/" . $this->Ini->str_schema_all . "_grid.php");
      $this->Ini->Tree_img_col    = trim($str_tree_col);
      $this->Ini->Tree_img_exp    = trim($str_tree_exp);
      $this->Ini->Str_btn_grid    = trim($str_button) . "/" . trim($str_button) . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".php";
      $this->Ini->Str_btn_css     = trim($str_button) . "/" . trim($str_button) . ".css";
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      $this->arr_buttons['group_group_1']= array(
          'value'            => "" . $this->Ini->Nm_lang['lang_btns_expt'] . "",
          'hint'             => "" . $this->Ini->Nm_lang['lang_btns_expt'] . "",
          'type'             => "button",
          'display'          => "text_img",
          'display_position' => "text_right",
          'image'            => "scriptcase__NM__gear.png",
          'style'            => "default",
      );

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
      { 
      $this->Ini->Color_bg_ajax            = (!isset($str_ajax_bg)       || "" == trim($str_ajax_bg))         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax            = (!isset($str_ajax_border_c) || "" == trim($str_ajax_border_c))   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax            = (!isset($str_ajax_border_s) || "" == trim($str_ajax_border_s))   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax            = (!isset($str_ajax_border_w) || "" == trim($str_ajax_border_w))   ? ""     : $str_ajax_border_w;
      $this->Ini->Img_sep_grid             = "/" . trim($str_toolbar_separator);
      $this->Ini->Label_sort_pos           = trim($str_label_sort_pos);
      $this->Ini->Label_sort               = trim($str_label_sort);
      $this->Ini->Label_sort_asc           = trim($str_label_sort_asc);
      $this->Ini->Label_sort_desc          = trim($str_label_sort_desc);
      $this->Ini->Sum_ico_line             = trim($sum_ico_line);
      $this->Ini->Sum_ico_column           = trim($sum_ico_column);
      $this->Ini->Str_toolbarnav_separator = '/' . trim($str_toolbarnav_separator);
      $this->Ini->Img_qs_search            = '' != trim($img_qs_search)        ? trim($img_qs_search)        : 'scriptcase__NM__qs_lupa.png';
      $this->Ini->Img_qs_clean             = '' != trim($img_qs_clean)         ? trim($img_qs_clean)         : 'scriptcase__NM__qs_close.png';
      $this->Ini->Str_qs_image_padding     = '' != trim($str_qs_image_padding) ? trim($str_qs_image_padding) : '0';
      $this->Ini->App_div_tree_img_col     = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp     = trim($app_div_str_tree_exp);
          $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_config_btn.php", "F", "nmButtonOutput") ; 
          $_SESSION['scriptcase']['css_popup']                 = $this->Ini->str_schema_all . "_grid.css";
          $_SESSION['scriptcase']['css_popup_dir']             = $this->Ini->str_schema_all . "_grid" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
          $_SESSION['scriptcase']['css_btn_popup']             = $this->Ini->Str_btn_css;
          $_SESSION['scriptcase']['css_popup_tab']             = $this->Ini->str_schema_all . "_tab.css";
          $_SESSION['scriptcase']['css_popup_tab_dir']         = $this->Ini->str_schema_all . "_tab" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
          $_SESSION['scriptcase']['css_popup_div']             = $this->Ini->str_schema_all . "_appdiv.css";
          $_SESSION['scriptcase']['css_popup_div_dir']         = $this->Ini->str_schema_all . "_appdiv" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
          $_SESSION['scriptcase']['bg_btn_popup']['bok']       = nmButtonOutput($this->arr_buttons, "bok", "processa()", "processa()", "bok", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "");
          $_SESSION['scriptcase']['bg_btn_popup']['bsair']     = nmButtonOutput($this->arr_buttons, "bsair", "window.close()", "window.close()", "bsair", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "");
          $_SESSION['scriptcase']['bg_btn_popup']['btbremove'] = nmButtonOutput($this->arr_buttons, "bsair", "self.parent.tb_remove()", "self.parent.tb_remove()", "bsair", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "");
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['field_order']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['field_order'][] = "id";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['field_order'][] = "tbl_curso_id";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['field_order'][] = "nivel";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['field_order'][] = "periodoletivo";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['field_order'][] = "nome";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['field_order'][] = "abreviacao";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['field_order'][] = "turno";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['field_order'][] = "qtdvagas";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['field_order_orig'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['field_order'];
      } 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_tbl_turma']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['grid_tbl_turma']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['grid_tbl_turma']['exit'];
      }

      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      nm_gc($this->Ini->path_libs);
      if (!$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida'])
      { 
          $_SESSION['scriptcase']['sc_page_process'] = $this->Ini->sc_page;
      } 
      $_SESSION['scriptcase']['sc_idioma_pivot']['pt_br'] = array(
          'smry_ppup_titl'      => $this->Ini->Nm_lang['lang_othr_smry_ppup_titl'],
          'smry_ppup_fild'      => $this->Ini->Nm_lang['lang_othr_smry_ppup_fild'],
          'smry_ppup_posi'      => $this->Ini->Nm_lang['lang_othr_smry_ppup_posi'],
          'smry_ppup_sort'      => $this->Ini->Nm_lang['lang_othr_smry_ppup_sort'],
          'smry_ppup_posi_labl' => $this->Ini->Nm_lang['lang_othr_smry_ppup_posi_labl'],
          'smry_ppup_posi_data' => $this->Ini->Nm_lang['lang_othr_smry_ppup_posi_data'],
          'smry_ppup_sort_labl' => $this->Ini->Nm_lang['lang_othr_smry_ppup_sort_labl'],
          'smry_ppup_sort_vlue' => $this->Ini->Nm_lang['lang_othr_smry_ppup_sort_vlue'],
          'smry_ppup_chek_tabu' => $this->Ini->Nm_lang['lang_othr_smry_ppup_chek_tabu'],
      );
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                  $this->Ini->Nm_lang['lang_mnth_janu'],
                                  $this->Ini->Nm_lang['lang_mnth_febr'],
                                  $this->Ini->Nm_lang['lang_mnth_marc'],
                                  $this->Ini->Nm_lang['lang_mnth_apri'],
                                  $this->Ini->Nm_lang['lang_mnth_mayy'],
                                  $this->Ini->Nm_lang['lang_mnth_june'],
                                  $this->Ini->Nm_lang['lang_mnth_july'],
                                  $this->Ini->Nm_lang['lang_mnth_augu'],
                                  $this->Ini->Nm_lang['lang_mnth_sept'],
                                  $this->Ini->Nm_lang['lang_mnth_octo'],
                                  $this->Ini->Nm_lang['lang_mnth_nove'],
                                  $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                  $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                  $this->Ini->Nm_lang['lang_days_sund'],
                                  $this->Ini->Nm_lang['lang_days_mond'],
                                  $this->Ini->Nm_lang['lang_days_tued'],
                                  $this->Ini->Nm_lang['lang_days_wend'],
                                  $this->Ini->Nm_lang['lang_days_thud'],
                                  $this->Ini->Nm_lang['lang_days_frid'],
                                  $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                  $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                  $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                  $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                  $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                  $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                  $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                  $this->Ini->Nm_lang['lang_shrt_days_satd']);
      if (!$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida'])
      { 
          $_SESSION['scriptcase']['sc_tp_pdf'] = "wkhtmltopdf";
          $_SESSION['scriptcase']['sc_idioma_pdf'] = array();
          $_SESSION['scriptcase']['sc_idioma_pdf']['pt_br'] = array('titulo' => $this->Ini->Nm_lang['lang_pdff_titl'], 'tp_imp' => $this->Ini->Nm_lang['lang_pdff_type'], 'color' => $this->Ini->Nm_lang['lang_pdff_colr'], 'econm' => $this->Ini->Nm_lang['lang_pdff_bndw'], 'tp_pap' => $this->Ini->Nm_lang['lang_pdff_pper'], 'carta' => $this->Ini->Nm_lang['lang_pdff_letr'], 'oficio' => $this->Ini->Nm_lang['lang_pdff_legl'], 'customiz' => $this->Ini->Nm_lang['lang_pdff_cstm'], 'alt_papel' => $this->Ini->Nm_lang['lang_pdff_pper_hgth'], 'larg_papel' => $this->Ini->Nm_lang['lang_pdff_pper_wdth'], 'orient' => $this->Ini->Nm_lang['lang_pdff_pper_orie'], 'retrato' => $this->Ini->Nm_lang['lang_pdff_prtr'], 'paisag' => $this->Ini->Nm_lang['lang_pdff_lnds'], 'book' => $this->Ini->Nm_lang['lang_pdff_bkmk'], 'grafico' => $this->Ini->Nm_lang['lang_pdff_chrt'], 'largura' => $this->Ini->Nm_lang['lang_pdff_wdth'], 'fonte' => $this->Ini->Nm_lang['lang_pdff_font'], 'sim' => $this->Ini->Nm_lang['lang_pdff_chrt_yess'], 'nao' => $this->Ini->Nm_lang['lang_pdff_chrt_nooo'], 'cancela' => $this->Ini->Nm_lang['lang_pdff_cncl']);
      } 
      $_SESSION['scriptcase']['sc_idioma_graf_flash'] = array();
      $_SESSION['scriptcase']['sc_idioma_graf_flash']['pt_br'] = array(
          'titulo' => $this->Ini->Nm_lang['lang_chrt_titl'],
          'tipo_g' => $this->Ini->Nm_lang['lang_chrt_type'],
          'tp_barra' => $this->Ini->Nm_lang['lang_flsh_chrt_bars'],
          'tp_pizza' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie'],
          'tp_linha' => $this->Ini->Nm_lang['lang_flsh_chrt_line'],
          'tp_area' => $this->Ini->Nm_lang['lang_flsh_chrt_area'],
          'tp_marcador' => $this->Ini->Nm_lang['lang_flsh_chrt_mrks'],
          'tp_gauge' => $this->Ini->Nm_lang['lang_flsh_chrt_gaug'],
          'tp_radar' => $this->Ini->Nm_lang['lang_flsh_chrt_radr'],
          'tp_polar' => $this->Ini->Nm_lang['lang_flsh_chrt_polr'],
          'tp_funil' => $this->Ini->Nm_lang['lang_flsh_chrt_funl'],
          'tp_pyramid' => $this->Ini->Nm_lang['lang_flsh_chrt_pyrm'],
          'largura' => $this->Ini->Nm_lang['lang_chrt_wdth'],
          'altura' => $this->Ini->Nm_lang['lang_chrt_hgth'],
          'modo_gera' => $this->Ini->Nm_lang['lang_chrt_gtmd'],
          'sintetico' => $this->Ini->Nm_lang['lang_chrt_smzd'],
          'analitico' => $this->Ini->Nm_lang['lang_chrt_anlt'],
          'order' => $this->Ini->Nm_lang['lang_chrt_ordr'],
          'order_none' => $this->Ini->Nm_lang['lang_chrt_ordr_none'],
          'order_asc' => $this->Ini->Nm_lang['lang_chrt_ordr_asc'],
          'order_desc' => $this->Ini->Nm_lang['lang_chrt_ordr_desc'],
          'barra_orien' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_layo'],
          'barra_orien_horiz' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_horz'],
          'barra_orien_verti' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_vrtc'],
          'barra_forma' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_shpe'],
          'barra_forma_barra' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_bars'],
          'barra_forma_cilin' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_cyld'],
          'barra_forma_cone' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_cone'],
          'barra_forma_piram' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_pyrm'],
          'barra_dimen' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_dmns'],
          'barra_dimen_2d' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_2ddm'],
          'barra_dimen_3d' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_3ddm'],
          'barra_sobre' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_3ovr'],
          'barra_sobre_nao' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_3ont'],
          'barra_sobre_sim' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_3oys'],
          'barra_empil' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_stck'],
          'barra_empil_desat' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_stan'],
          'barra_empil_ativa' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_stay'],
          'barra_empil_perce' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_stap'],
          'barra_inver' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_invr'],
          'barra_inver_norma' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_invn'],
          'barra_inver_inver' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_invi'],
          'barra_agrup' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_srgr'],
          'barra_agrup_conju' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_srst'],
          'barra_agrup_serie' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_srbs'],
          'barra_funil' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_funl'],
          'barra_funil_nao' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_3ont'],
          'barra_funil_sim' => $this->Ini->Nm_lang['lang_flsh_chrt_bars_3oys'],
          'pizza_forma' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_shpe'],
          'pizza_forma_pizza' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_fpie'],
          'pizza_forma_donut' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_dnts'],
          'pizza_dimen' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_dmns'],
          'pizza_dimen_2d' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_2ddm'],
          'pizza_dimen_3d' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_3ddm'],
          'pizza_orden' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_srtn'],
          'pizza_orden_desat' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_nsrt'],
          'pizza_orden_ascen' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_asrt'],
          'pizza_orden_desce' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_dsrt'],
          'pizza_explo' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_expl'],
          'pizza_explo_desat' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_dxpl'],
          'pizza_explo_ativa' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_axpl'],
          'pizza_explo_click' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_cxpl'],
          'pizza_valor' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_fval'],
          'pizza_valor_valor' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_fvlv'],
          'pizza_valor_perce' => $this->Ini->Nm_lang['lang_flsh_chrt_fpie_fvlp'],
          'linha_forma' => $this->Ini->Nm_lang['lang_flsh_chrt_line_shpe'],
          'linha_forma_linha' => $this->Ini->Nm_lang['lang_flsh_chrt_line_line'],
          'linha_forma_splin' => $this->Ini->Nm_lang['lang_flsh_chrt_line_spln'],
          'linha_forma_degra' => $this->Ini->Nm_lang['lang_flsh_chrt_line_step'],
          'linha_inver' => $this->Ini->Nm_lang['lang_flsh_chrt_line_invr'],
          'linha_inver_norma' => $this->Ini->Nm_lang['lang_flsh_chrt_line_invn'],
          'linha_inver_inver' => $this->Ini->Nm_lang['lang_flsh_chrt_line_invi'],
          'linha_agrup' => $this->Ini->Nm_lang['lang_flsh_chrt_line_srgr'],
          'linha_agrup_conju' => $this->Ini->Nm_lang['lang_flsh_chrt_line_srst'],
          'linha_agrup_serie' => $this->Ini->Nm_lang['lang_flsh_chrt_line_srbs'],
          'area_forma' => $this->Ini->Nm_lang['lang_flsh_chrt_area_shpe'],
          'area_forma_area' => $this->Ini->Nm_lang['lang_flsh_chrt_area_area'],
          'area_forma_splin' => $this->Ini->Nm_lang['lang_flsh_chrt_area_spln'],
          'area_empil' => $this->Ini->Nm_lang['lang_flsh_chrt_area_stak'],
          'area_empil_desat' => $this->Ini->Nm_lang['lang_flsh_chrt_area_stan'],
          'area_empil_ativa' => $this->Ini->Nm_lang['lang_flsh_chrt_area_stay'],
          'area_empil_perce' => $this->Ini->Nm_lang['lang_flsh_chrt_area_stap'],
          'area_inver' => $this->Ini->Nm_lang['lang_flsh_chrt_area_invr'],
          'area_inver_norma' => $this->Ini->Nm_lang['lang_flsh_chrt_area_invn'],
          'area_inver_inver' => $this->Ini->Nm_lang['lang_flsh_chrt_area_invi'],
          'area_agrup' => $this->Ini->Nm_lang['lang_flsh_chrt_area_srgr'],
          'area_agrup_conju' => $this->Ini->Nm_lang['lang_flsh_chrt_area_srst'],
          'area_agrup_serie' => $this->Ini->Nm_lang['lang_flsh_chrt_area_srbs'],
          'marca_inver' => $this->Ini->Nm_lang['lang_flsh_chrt_mrks_invr'],
          'marca_inver_norma' => $this->Ini->Nm_lang['lang_flsh_chrt_mrks_invn'],
          'marca_inver_inver' => $this->Ini->Nm_lang['lang_flsh_chrt_mrks_invi'],
          'marca_agrup' => $this->Ini->Nm_lang['lang_flsh_chrt_mrks_srgr'],
          'marca_agrup_conju' => $this->Ini->Nm_lang['lang_flsh_chrt_mrks_srst'],
          'marca_agrup_serie' => $this->Ini->Nm_lang['lang_flsh_chrt_mrks_srbs'],
          'gauge_forma' => $this->Ini->Nm_lang['lang_flsh_chrt_gaug_shpe'],
          'gauge_forma_circular' => $this->Ini->Nm_lang['lang_flsh_chrt_gaug_circ'],
          'gauge_forma_semi' => $this->Ini->Nm_lang['lang_flsh_chrt_gaug_semi'],
          'pyram_slice' => $this->Ini->Nm_lang['lang_flsh_chrt_pyrm_slic'],
          'pyram_slice_s' => $this->Ini->Nm_lang['lang_flsh_chrt_pyrm_opcs'],
          'pyram_slice_n' => $this->Ini->Nm_lang['lang_flsh_chrt_pyrm_opcn'],
      );
      if (!$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida'])
      { 
          $_SESSION['scriptcase']['sc_idioma_prt'] = array();
          $_SESSION['scriptcase']['sc_idioma_prt']['pt_br'] = array('titulo' => $this->Ini->Nm_lang['lang_btns_prtn_titl_hint'], 'modoimp' => $this->Ini->Nm_lang['lang_btns_mode_prnt_hint'], 'curr' => $this->Ini->Nm_lang['lang_othr_curr_page'], 'total' => $this->Ini->Nm_lang['lang_othr_full'], 'cor' => $this->Ini->Nm_lang['lang_othr_prtc'], 'pb' => $this->Ini->Nm_lang['lang_othr_bndw'], 'color' => $this->Ini->Nm_lang['lang_othr_colr'], 'cancela' => $this->Ini->Nm_lang['lang_btns_cncl_prnt_hint']);
      } 
      if (!$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida'])
      { 
          $_SESSION['scriptcase']['sc_idioma_word'] = array();
          $_SESSION['scriptcase']['sc_idioma_word']['pt_br'] = array('titulo' => $this->Ini->Nm_lang['lang_btns_prtn_titl_hint'], 'cor' => $this->Ini->Nm_lang['lang_othr_prtc'], 'pb' => $this->Ini->Nm_lang['lang_othr_bndw'], 'color' => $this->Ini->Nm_lang['lang_othr_colr'], 'cancela' => $this->Ini->Nm_lang['lang_btns_cncl_prnt_hint']);
      } 
      $this->Ini->Gd_missing  = true;
      if (function_exists("getProdVersion"))
      {
          $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
      }
      if (function_exists("gd_info"))
      {
          $this->Ini->Gd_missing = false;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig']))  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = "inicio" ;  
      }   
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_tbl_turma']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['grid_tbl_turma']['start'] == 'filter')
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "inicio" || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "grid")  
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = "busca";
          }   
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida_form']) && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida_form'] && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "busca")
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = "inicio";
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig']) || !empty($nmgp_parms) || !empty($GLOBALS["nmgp_parms"]))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opc_liga'] = array();  
          if (isset($NMSC_conf_apl) && !empty($NMSC_conf_apl))
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opc_liga'] = $NMSC_conf_apl;  
          }   
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'] && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "busca")
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = "grid" ;  
      }   
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao_print']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao_print']))  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao_print'] = "inicio" ;  
      }   
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['print_all'] = false;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "res_print")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao']     = "resumo";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['print_all'] = true;
      } 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['det_print'] = "";
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "det_print")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao']     = "detalhe";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['det_print'] = "print";
      } 
      if (substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'], 0, 7) == "grafico")  
      { 
          $_SESSION['scriptcase']['sc_ctl_ajax'] = 'part';
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "pdf")
      { 
          $this->Ini->path_img_modelo = $this->Ini->path_img_modelo;
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "fast_search")  
      { 
          $this->SC_fast_search($GLOBALS["nmgp_fast_search"], $GLOBALS["nmgp_cond_fast_search"], $GLOBALS["nmgp_arg_fast_search"]);
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_ant'] == $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq'])
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = 'igual';
          } 
          else 
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_ant'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq'];
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['contr_array_resumo'] = "NAO";
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['contr_total_geral']  = "NAO";
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['tot_geral']);
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = 'pesq';
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['orig_pesq'] = 'grid';
          } 
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "dyn_search" || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "dyn_search_clear")
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "dyn_search_clear")
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_clear'] = true;
          } 
          $this->SC_proc_dyn_search($_POST['parm']);
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_ant'] == $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq'])
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = 'igual';
          } 
          else 
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_ant'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq'];
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['contr_array_resumo'] = "NAO";
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['contr_total_geral']  = "NAO";
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['tot_geral']);
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['orig_pesq'] = 'grid';
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = 'pesq';
          } 
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == 'pesq' && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['orig_pesq']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['orig_pesq']))  
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['orig_pesq'] == "res")  
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = 'resumo';
          } 
          elseif ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['orig_pesq'] == "grid") 
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = 'inicio';
          } 
      } 
//
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['prim_cons'] = false;  
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig']) || !empty($nmgp_parms) || !empty($GLOBALS["nmgp_parms"]))  
      { 
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['prim_cons'] = true;  
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig'] = "";
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq']       = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig'];  
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_ant']   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig'];  
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cond_pesq'] = ""; 
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_filtro'] = "";
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_fast'] = "";
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['contr_total_geral'] = "NAO";
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['tot_geral']);
      } 
   $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig'];
   $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq'];
   $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_filtro'];
      $nm_flag_pdf   = true;
      $nm_vendo_pdf  = ("pdf" == $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao']);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['graf_pdf'] = "S";
      if (isset($nmgp_graf_pdf) && !empty($nmgp_graf_pdf))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['graf_pdf'] = $nmgp_graf_pdf;
      }
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
      {
         $this->Ini->sc_Include($this->Ini->path_libs . "/nm_trata_saida.php", "C", "nm_trata_saida") ; 
         $nm_saida = new nm_trata_saida();
         if ($nm_flag_pdf && $nm_vendo_pdf)
         {
            $nm_arquivo_htm_temp = $this->Ini->root . $this->Ini->path_imag_temp . "/sc_grid_tbl_turma_html_" . session_id() . "_2.html";
            if (isset($_GET['pdf_base']) && isset($_GET['pdf_url']))
            {
                $nm_arquivo_pdf_base = "/" . str_replace("_NMPLUS_", "+", $_GET['pdf_base']);
                $nm_arquivo_pdf_url  = $_GET['pdf_url'] . $nm_arquivo_pdf_base;
            }
            else
            {
                $nm_arquivo_pdf_base = "/sc_pdf_" . date("YmdHis") . "_" . rand(0, 1000) . "_grid_tbl_turma.pdf";
                $nm_arquivo_pdf_url  = $this->Ini->path_imag_temp . $nm_arquivo_pdf_base;
            }
            $nm_arquivo_pdf_serv = $this->Ini->root . $nm_arquivo_pdf_url;
            $nm_arquivo_de_saida = $this->Ini->root . $this->Ini->path_imag_temp . "/sc_grid_tbl_turma_html_" . session_id() . ".html";
            $nm_url_de_saida = $this->Ini->java_protocol . $this->Ini->server_pdf . $this->Ini->path_imag_temp . "/sc_grid_tbl_turma_html_" . session_id() . ".html";
            if (in_array(trim($this->Ini->str_lang), $this->Ini->nm_font_ttf) && strtolower($_SESSION['scriptcase']['charset']) != "utf-8")
            { 
                $nm_saida->seta_arquivo($nm_arquivo_de_saida, $_SESSION['scriptcase']['charset']);
                $_SESSION['scriptcase']['charset_html'] = "utf-8";
            }
            else
            { 
                $nm_saida->seta_arquivo($nm_arquivo_de_saida);
            }
         }
      }
//----------------------------------->
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "doc_word_res")
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['print_navigator'] = "Microsoft Internet Explorer";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['print_all'] = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['doc_word']  = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao']     = "resumo";
          $_SESSION['scriptcase']['saida_word'] = true;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['word_name']))
          {
              $nm_arquivo_doc_word = "/" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['word_name'];
          }
          else
          {
              $nm_arquivo_doc_word = "/sc_grid_tbl_turma_res_" . session_id() . ".doc";
          }
          $nm_saida->seta_arquivo($this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_doc_word);
          $this->ret_word = "resumo";
          $this->Ini->nm_limite_lin_res_prt = 0;
          $GLOBALS['nmgp_cor_print']        = $nmgp_cor_word;
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "xls")  
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
          { 
              require_once($this->Ini->path_embutida . "grid_tbl_turma/grid_tbl_turma_xls.class.php"); 
          } 
          else 
          { 
              require_once($this->Ini->path_aplicacao . "grid_tbl_turma_xls.class.php"); 
          } 
          $this->xls  = new grid_tbl_turma_xls();
          $this->prep_modulos("xls");
          $this->xls->monta_xls();
      }
      else
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "xml")  
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
          { 
              require_once($this->Ini->path_embutida . "grid_tbl_turma/grid_tbl_turma_xml.class.php"); 
          } 
          else 
          { 
              require_once($this->Ini->path_aplicacao . "grid_tbl_turma_xml.class.php"); 
          } 
          $this->xml  = new grid_tbl_turma_xml();
          $this->prep_modulos("xml");
          $this->xml->monta_xml();
      }
      else
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "csv")  
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
          { 
              require_once($this->Ini->path_embutida . "grid_tbl_turma/grid_tbl_turma_csv.class.php"); 
          } 
          else 
          { 
              require_once($this->Ini->path_aplicacao . "grid_tbl_turma_csv.class.php"); 
          } 
          $this->csv  = new grid_tbl_turma_csv();
          $this->prep_modulos("csv");
          $this->csv->monta_csv();
      }
      else   
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "rtf")  
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
          { 
              require_once($this->Ini->path_embutida . "grid_tbl_turma/grid_tbl_turma_rtf.class.php"); 
          } 
          else 
          { 
              require_once($this->Ini->path_aplicacao . "grid_tbl_turma_rtf.class.php"); 
          } 
          $this->rtf  = new grid_tbl_turma_rtf();
          $this->prep_modulos("rtf");
          $this->rtf->monta_rtf();
      }
      else
      if (substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'], 0, 7) == "grafico")  
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
          { 
              require_once($this->Ini->path_embutida . " . grid_tbl_turma . /" . $this->Ini->Apl_grafico); 
          } 
          else 
          { 
              require_once($this->Ini->path_aplicacao . $this->Ini->Apl_grafico); 
          } 
          $this->Graf  = new grid_tbl_turma_grafico();
          $this->prep_modulos("Graf");
          if (substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'], 7, 1) == "_")  
          { 
              $this->Graf->grafico_col(substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'], 8));
          }
          else
          { 
              $this->Graf->monta_grafico();
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = "grid";
      }
      else 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "busca")  
      { 
          if (!$_SESSION['scriptcase']['proc_mobile']) 
          { 
              require_once($this->Ini->path_aplicacao . "grid_tbl_turma_pesq.class.php"); 
          } 
          else 
          { 
              require_once($this->Ini->path_aplicacao . "grid_tbl_turma_mobile_pesq.class.php"); 
          } 
          $this->pesq  = new grid_tbl_turma_pesq();
          $this->prep_modulos("pesq");
          $this->pesq->NM_ajax_flag    = $this->NM_ajax_flag;
          $this->pesq->NM_ajax_opcao   = $this->NM_ajax_opcao;
          $this->pesq->monta_busca();
      }
      else 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "resumo")  
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
          { 
              require_once($this->Ini->path_embutida . "grid_tbl_turma/" . $this->Ini->Apl_resumo); 
          } 
          else 
          { 
              require_once($this->Ini->path_aplicacao . $this->Ini->Apl_resumo); 
          } 
          $this->Res = new grid_tbl_turma_resumo("out");
          $this->prep_modulos("Res");
          $this->Res->monta_resumo();
      }
      else 
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "print" && $nmgp_tipo_print == "RC")
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['print_navigator'] = $nmgp_navegator_print;
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['print_all'] = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao']     = "pdf";
              $GLOBALS['nmgp_tipo_pdf'] = strtolower($nmgp_cor_print);
          } 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "doc_word")
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['print_navigator'] = "Microsoft Internet Explorer";
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['print_all'] = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['doc_word']  = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao']     = "pdf";
              $_SESSION['scriptcase']['saida_word'] = true;
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['word_name']))
              {
                  $nm_arquivo_doc_word =  "/" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['word_name'];
              }
              else
              {
                  $nm_arquivo_doc_word = "/sc_grid_tbl_turma_" . session_id() . ".doc";
              }
              $nm_saida->seta_arquivo($this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_doc_word);
              $this->ret_word = "volta_grid";
              $this->Ini->nm_limite_lin_prt = 0;
              $GLOBALS['nmgp_tipo_pdf'] = $nmgp_cor_word;
          } 
          if (isset($nmgp_chave_det))  
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['chave_det'] = $nmgp_chave_det;
          } 
          if (isset($nmgp_parm_acum))  
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cmp_acum'] = $nmgp_parm_acum;
          } 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] == "detalhe" || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_det'])  
          { 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
              { 
                  require_once($this->Ini->path_embutida . "grid_tbl_turma/grid_tbl_turma_det.class.php"); 
              } 
              else 
              { 
                  require_once($this->Ini->path_aplicacao . "grid_tbl_turma_det.class.php"); 
              } 
              $this->det  = new grid_tbl_turma_det();
              $this->prep_modulos("det");
              $this->det->monta_det();
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['opcao'] = "grid";
          } 
          else  
          { 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
              { 
                  require_once($this->Ini->path_embutida . "grid_tbl_turma/grid_tbl_turma_grid.class.php"); 
              } 
              else 
              { 
                  require_once($this->Ini->path_aplicacao . "grid_tbl_turma_grid.class.php"); 
              } 
              $this->grid  = new grid_tbl_turma_grid();
              $this->prep_modulos("grid");
              $this->grid->monta_grid($linhas);
          } 
      }   
//--- 
      if (!$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida'])
      {
           $this->Db->Close(); 
      }
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['embutida'])
      {
         $nm_saida->finaliza();
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['ajax_nav'])
         {
             $this->Ini->Arr_result['setVar'][] = array('var' => 'scQtReg', 'value' => $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['qt_reg_grid']);
             $Temp = ob_get_clean();
             if ($Temp !== false && trim($Temp) != "")
             {
                 $this->Ini->Arr_result['htmOutput'] = $Temp;
             }
             $_SESSION['scriptcase']['saida_var'] = false;
             $oJson = new Services_JSON();
             echo $oJson->encode($this->Ini->Arr_result);
             exit;
         }
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['doc_word'])
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['word_file'] = $this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_doc_word;
             $this->html_doc_word($nm_arquivo_doc_word);
         }
         if ($nm_flag_pdf && $nm_vendo_pdf)
         {
            if (isset($nmgp_parms_pdf) && !empty($nmgp_parms_pdf))
            {
                $str_pd4ml    = $nmgp_parms_pdf;
            }
            else
            {
                $str_pd4ml    = " --page-size Letter --orientation Portrait --outline-depth 0";
            }
            if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_det'])
            {
                if (-1 < $this->grid->progress_grid && $this->grid->progress_fp)
                {
                    $lang_protect = $this->Ini->Nm_lang['lang_pdff_gnrt'];
                    if (!NM_is_utf8($lang_protect))
                    {
                        $lang_protect = mb_convert_encoding($lang_protect, "UTF-8", $_SESSION['scriptcase']['charset']);
                    }
                    fwrite($this->grid->progress_fp, ($this->grid->progress_tot) . "_#NM#_" . $lang_protect . "...\n");
                    fclose($this->grid->progress_fp);
                }
            }
            if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_name']))
            {
                $nm_arquivo_pdf_serv = $this->Ini->root .  $this->Ini->path_imag_temp . "/" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_name'];
                $nm_arquivo_pdf_url  = $this->Ini->path_imag_temp . "/" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_name'];
                $nm_arquivo_pdf_base = "/" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_name'];
                unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_name']);
            }
            $arq_pdf_out  = (FALSE !== strpos($nm_arquivo_pdf_serv, ' ')) ? " \"" . $nm_arquivo_pdf_serv . "\"" :  $nm_arquivo_pdf_serv;
            $arq_pdf_in   = (FALSE !== strpos($nm_url_de_saida, ' '))     ? " \"" . $nm_url_de_saida . "\""     :  $nm_url_de_saida;
            if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
            {
                chdir($this->Ini->path_third . "/wkhtmltopdf/win");
                $Win_autentication = "";
                if (isset($_SESSION['sc_pdf_usr']) && !empty($_SESSION['sc_pdf_usr']))
                {
                    $_SESSION['sc_iis_usr'] = $_SESSION['sc_pdf_usr'];
                }
                if (isset($_SESSION['sc_iis_usr']) && !empty($_SESSION['sc_iis_usr']))
                {
                    $Win_autentication .= " --username " . $_SESSION['sc_iis_usr'];
                }
                if (isset($_SESSION['sc_pdf_pw']) && !empty($_SESSION['sc_pdf_pw']))
                {
                    $_SESSION['sc_iis_pw'] = $_SESSION['sc_pdf_pw'];
                }
                if (isset($_SESSION['sc_iis_pw']) && !empty($_SESSION['sc_iis_pw']))
                {
                    $Win_autentication .= " --password " . $_SESSION['sc_iis_pw'];
                }
                $str_execcmd2 = 'wkhtmltopdf ' . $str_pd4ml . $Win_autentication . ' --header-right "[page]"';
            }
            elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
            {
                if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                {
                    chdir($this->Ini->path_third . "/wkhtmltopdf/linux-i386");
                    $str_execcmd2 = './wkhtmltopdf-i386 ' . $str_pd4ml . ' --header-right "[page]"';
                }
                else
                {
                    chdir($this->Ini->path_third . "/wkhtmltopdf/linux-amd64");
                    $str_execcmd2 = './wkhtmltopdf-amd64 ' . $str_pd4ml . ' --header-right "[page]"';
                }
            }
            elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
            {
                chdir($this->Ini->path_third . "/wkhtmltopdf/osx/Contents/MacOS");
                $str_execcmd2 = './wkhtmltopdf ' . $str_pd4ml . ' --header-right "[page]"';
            }

            if (!isset($_SESSION['scriptcase']['phantomjs_charts']) || !$_SESSION['scriptcase']['phantomjs_charts'])
            {
                $str_execcmd2 .= ' --javascript-delay ' . 2000;
            }

            $str_execcmd2 .= ' ' . $arq_pdf_in . ' ' . $arq_pdf_out;

            $arr_execcmd = array();
            $str_execcmd = $str_execcmd2;
            exec($str_execcmd2);
            // ----- PDF log
            $fp = @fopen($this->Ini->root . $this->Ini->path_imag_temp . str_replace(".pdf", "", $nm_arquivo_pdf_base) . '.log', 'w');
            if ($fp)
            {
                @fwrite($fp, $str_execcmd . "\r\n\r\n");
                @fwrite($fp, implode("\r\n", $arr_execcmd));
                @fclose($fp);
            }
            if (in_array(trim($this->Ini->str_lang), $this->Ini->nm_font_ttf) && strtolower($_SESSION['scriptcase']['charset']) != "utf-8")
            { 
               $_SESSION['scriptcase']['charset_html'] = (isset($this->Ini->sc_charset[$_SESSION['scriptcase']['charset']])) ? $this->Ini->sc_charset[$_SESSION['scriptcase']['charset']] : $_SESSION['scriptcase']['charset'];
            }
            if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_det'])
            {
                if (-1 < $this->grid->progress_grid && $this->grid->progress_fp)
                {
                    $this->grid->progress_fp = fopen($_GET['pbfile'], 'a');
                    if ($this->grid->progress_fp)
                    {
                         $lang_protect = $this->Ini->Nm_lang['lang_pdff_fnsh'];
                         if (!NM_is_utf8($lang_protect))
                         {
                             $lang_protect = mb_convert_encoding($lang_protect, "UTF-8", $_SESSION['scriptcase']['charset']);
                          }
                        fwrite($this->grid->progress_fp, ($this->grid->progress_now + 1 + $this->grid->progress_pdf) . "_#NM#_" . $lang_protect . "...\n");
                        fwrite($this->grid->progress_fp, "off\n");
                        fclose($this->grid->progress_fp);
                    }
                }
            }
unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_file']);
if (is_file($nm_arquivo_pdf_serv))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_file'] = $nm_arquivo_pdf_serv;
}
if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['pdf_det'])
{
    $this->html_pdf_detalhe($nm_arquivo_pdf_url);
    return;
}
$NM_volta  = "volta_grid";
$NM_target = "_parent";
if (!is_file($nm_arquivo_pdf_serv))
{
?>
  <br><b><?php echo $this->Ini->Nm_lang['lang_pdff_errg']; ?></b></td></tr></table>
<?php
}
else
{
?>
<?php echo $this->Ini->Nm_lang['lang_pdff_file_loct']; ?>
<BR>
<A href="<?php echo $nm_arquivo_pdf_url; ?>" target="_blank" class="scGridPageLink"><B><?php echo $nm_arquivo_pdf_url; ?></B></A>.
<BR>
<?php echo $this->Ini->Nm_lang['lang_pdff_clck_mesg']; ?>
</td></tr></table>
<?php
}
   echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "sc_b_sai", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "");
?>
<FORM name="F0" method=post action="./" target="<?php echo $NM_target; ?>"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="<?php echo NM_encode_input($NM_volta); ?>"> 
</FORM>
</td></tr></table>
</BODY>
</HTML>
<?php
         }
      }
   } 
   function nm_conv_data_db($dt_in, $form_in, $form_out)
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out);
       return $dt_out;
   }
  function close_emb()
  {
      if ($this->Db)
      {
          $this->Db->Close(); 
      }
  }
   function SC_fast_search($field, $arg_search, $data_search)
   {
      if (empty($data_search)) 
      {
          $tmp_cmd = "";
          if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig'])) 
          {
              $tmp_cmd = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig']; 
          }
          if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_filtro'])) 
          {
              if (!empty($tmp_cmd)) 
              {
                  $tmp_cmd .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_filtro'] . ")"; 
              }
              else
              {
                  $tmp_cmd = " where (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_filtro'] . ")"; 
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq'] = $tmp_cmd;
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['fast_search']);
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_tbl_curso_id($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "tbl_curso_id", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nivel", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "periodoLetivo", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nome", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "abreviacao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_turno($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "turno", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "dataInicio", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "dataFim", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "dataFimMatricula", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "horaEntrada", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "horaSaida", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "qtdVagas", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "observacoes", $arg_search, $data_search);
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_fast'] = $comando;
      $tmp_cmd = "";
      if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig'])) 
      {
          $tmp_cmd = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig']; 
      }
      if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_filtro'])) 
      {
          if (!empty($tmp_cmd)) 
          {
              $tmp_cmd .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_filtro'] . ")"; 
          }
          else
          {
              $tmp_cmd = " where (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_filtro'] . ")"; 
          }
      }
      if (!empty($tmp_cmd)) 
      {
          $comando = $tmp_cmd . " and (" . $comando . ")"; 
      }
      else
      {
          $comando = " where (" . $comando . ")"; 
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['fast_search'][2] = $sv_data;
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "id";$nm_numeric[] = "tbl_curso_id";$nm_numeric[] = "nivel";$nm_numeric[] = "turno";$nm_numeric[] = "qtdvagas";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['decimal_db'] == ".")
         {
             $nm_aspas = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
      if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
      {
          $nome     = "CAST ($nome AS TEXT)";
          $nm_aspas = "'";
      }
      $Nm_datas['datainicio'] = "date";$Nm_datas['datafim'] = "date";$Nm_datas['datafimmatricula'] = "date";$Nm_datas['horaentrada'] = "time";$Nm_datas['horasaida'] = "time";
      if (isset($Nm_datas[$campo_join]))
      {
          for ($x = 0; $x < strlen($campo); $x++)
          {
              $tst = substr($campo, $x, 1);
              if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
              {
                  return;
              }
          }
      }
      if (isset($Nm_datas[$campo_join]) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
         $nm_aspas = "#";
      }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
          if (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
          elseif ($Nm_datas[$campo_join] == "time" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'hh24:mi:ss')";
          }
          elseif (substr($Nm_datas[$campo_join], 0, 4) == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          {
              $nome = "str_replace (convert(char(10)," . $nome . ",102), '.', '-') + ' ' + convert(char(8)," . $nome . ",20)";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_aspas . $Cmp . $nm_aspas;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         switch (strtoupper($condicao))
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_aspas . $campo . $nm_aspas;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " like '" . $campo . "%'";
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." like '%" . $campo . "%'";
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." not like '%" . $campo . "%'";
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_aspas . $campo . $nm_aspas;
            break;
            case "GT":     // 
               $comando        .= " $nome > " . $nm_aspas . $campo . $nm_aspas;
            break;
            case "GE":     // 
               $comando        .= " $nome >= " . $nm_aspas . $campo . $nm_aspas;
            break;
            case "LT":     // 
               $comando        .= " $nome < " . $nm_aspas . $campo . $nm_aspas;
            break;
            case "LE":     // 
               $comando        .= " $nome <= " . $nm_aspas . $campo . $nm_aspas;
            break;
         }
   }
   function SC_lookup_tbl_curso_id($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT nome, id FROM tbl_curso WHERE (nome LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_turno($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['1'] = "Manhã";
       $data_look['2'] = "Tarde";
       $data_look['3'] = "Noite";
       $data_look['4'] = "Integral";
       $result = array();
       foreach ($data_look as $chave => $label) 
       {
           if ($condicao == "eq" && $campo == $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
           {
               $result[] = $chave;
           }
           if ($condicao == "qp" && strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "np" && !strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "df" && $campo != $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "gt" && $label > $campo )
           {
               $result[] = $chave;
           }
           if ($condicao == "ge" && $label >= $campo)
            {
               $result[] = $chave;
           }
           if ($condicao == "lt" && $label < $campo)
           {
               $result[] = $chave;
           }
           if ($condicao == "le" && $label <= $campo)
           {
               $result[] = $chave;
           }
          
       }
       return $result;
   }
   function SC_proc_dyn_search($Parms)
   {
       $ix     = 0;
       $fields = array();
       if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($Parms))
       {
           $Parms = NM_conv_charset($Parms, $_SESSION['scriptcase']['charset'], "UTF-8");
       }
       $tmp    = explode("_FDYN_", $Parms);
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search'] = array();
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_refresh'] = array();
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['tmp_busca'] = array();
       foreach ($tmp as $cada_f)
       {
           $dats = explode("_DYN_", $cada_f);
           $fields[$ix]['field']  = $dats[0];
           $fields[$ix]['cond']   = $dats[1];
           $sep_bw                 = explode("_VLS2_", $dats[2]);
           $fields[$ix]['vls'][0] = explode("_VLS_",  $sep_bw[0]);
           $fields[$ix]['vls'][1] = isset($sep_bw[1]) ? explode("_VLS_",  $sep_bw[1]) : "";
           $val_sv = array();
           foreach ($fields[$ix]['vls'] as $i => $dados)
           {
               if (is_array($dados))
               {
                   foreach ($dados as $ind => $str)
                   {
                       $str = NM_charset_decode($str);
                       $tmp_pos = strpos($str, "##@@");
                       if ($tmp_pos === false)
                       {
                          $val_sv[$i][] = $str;
                       }
                       else
                       {
                         $val_sv[$i][] = substr($str, 0, $tmp_pos);
                       }
                   }
               }
               else
               {
                   $dados = NM_charset_decode($dados);
                   $tmp_pos = strpos($dados, "##@@");
                   if ($tmp_pos === false)
                   {
                      $val_sv[$i] = $dados;
                   }
                   else
                   {
                      $val_sv[$i] = substr($dados, 0, $tmp_pos);
                   }
               }
           }
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search'][] = array('cmp' => $dats[0], 'opc' => $dats[1], 'val' => $val_sv);
           $ix++;
       }
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['tmp_busca'] = NM_conv_charset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['tmp_busca'], "UTF-8", $_SESSION['scriptcase']['charset']);
      }
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['tmp_busca'] as $ind => $dados)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['campos_busca'][$ind] = $dados;
      }
       $this->Dyn_Serarch_and_or = "and";
       $this->Cmd_Dyn_Search    = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cond_dyn_search'] = "";
       foreach ($fields as $ind => $dados)
       {
           $this->Date_part          = false;
           $this->Operador_date_part = "";
           $this->Lang_date_part     = "";
           $dados['cond'] = strtoupper($dados['cond']);
           if (empty($dados['vls']) && ($dados['cond'] == "NU" || $dados['cond'] == "NN" || $dados['cond'] == "EP" || $dados['cond'] == "NE"))
           {
               $dados['vls'][0][0] = "";
           }
           if ($dados['field'] == "id" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['id'];
               $dados['vls'][0] = $dados['vls'][0][0];
               if ($dados['cond'] == "BW")
               {
                   $dados['vls'][1] = $dados['vls'][1][0];
                   if (empty($dados['vls'][1]))
                   {
                       $dados['vls'][1] = $dados['vls'][0];
                   }
               }
               if ($dados['cond'] != "IN")
               {
                   $dados['vls'][0] = str_replace(".", "", $dados['vls'][0]);
                   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['decimal_db'] == ".")
                   {
                       $dados['vls'][0] = str_replace(",", ".", $dados['vls'][0]);
                   }
                   if ($dados['cond'] == "BW")
                   {
                       $dados['vls'][1] = str_replace(".", "", $dados['vls'][1]);
                       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['decimal_db'] == ".")
                       {
                           $dados['vls'][1] = str_replace(",", ".", $dados['vls'][1]);
                       }
                   }
               }
               if ($dados['vls'][0] == "" || (!is_numeric($dados['vls'][0]) && $dados['cond'] != "IN"))
               {
                   $dados['vls'] = array();
               }
               if ($dados['cond'] == "BW" && ($dados['vls'][1] == "" || (!is_numeric($dados['vls'][1]) && $dados['cond'] != "IN")))
               {
                   $dados['vls'] = array();
               }
               $this->Val_format_1 = $dados['vls'][0];
               if ($dados['cond'] == "BW")
               {
                   $this->Val_format_2 = $dados['vls'][1];
                   $this->Val_BW_2     = $dados['vls'][1];
               }
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "id", 'N', 'INT', $Label_cmp);
           }
           if ($dados['field'] == "tbl_curso_id" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['tbl_curso_id'];
               $dados['vls'][0] = $dados['vls'][0][0];
               if ($dados['cond'] == "BW")
               {
                   $dados['vls'][1] = $dados['vls'][1][0];
                   if (empty($dados['vls'][1]))
                   {
                       $dados['vls'][1] = $dados['vls'][0];
                   }
               }
               if ($dados['cond'] != "IN")
               {
                   $dados['vls'][0] = str_replace(".", "", $dados['vls'][0]);
                   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['decimal_db'] == ".")
                   {
                       $dados['vls'][0] = str_replace(",", ".", $dados['vls'][0]);
                   }
                   if ($dados['cond'] == "BW")
                   {
                       $dados['vls'][1] = str_replace(".", "", $dados['vls'][1]);
                       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['decimal_db'] == ".")
                       {
                           $dados['vls'][1] = str_replace(",", ".", $dados['vls'][1]);
                       }
                   }
               }
               if ($dados['vls'][0] == "" || (!is_numeric($dados['vls'][0]) && $dados['cond'] != "IN"))
               {
                   $dados['vls'] = array();
               }
               if ($dados['cond'] == "BW" && ($dados['vls'][1] == "" || (!is_numeric($dados['vls'][1]) && $dados['cond'] != "IN")))
               {
                   $dados['vls'] = array();
               }
               $this->Val_format_1 = $dados['vls'][0];
               if ($dados['cond'] == "BW")
               {
                   $this->Val_format_2 = $dados['vls'][1];
                   $this->Val_BW_2     = $dados['vls'][1];
               }
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "tbl_curso_id", 'N', 'INT', $Label_cmp);
           }
           if ($dados['field'] == "nivel" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['nivel'];
               $dados['vls'][0] = $dados['vls'][0][0];
               if ($dados['cond'] == "BW")
               {
                   $dados['vls'][1] = $dados['vls'][1][0];
                   if (empty($dados['vls'][1]))
                   {
                       $dados['vls'][1] = $dados['vls'][0];
                   }
               }
               if ($dados['cond'] != "IN")
               {
                   $dados['vls'][0] = str_replace(".", "", $dados['vls'][0]);
                   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['decimal_db'] == ".")
                   {
                       $dados['vls'][0] = str_replace(",", ".", $dados['vls'][0]);
                   }
                   if ($dados['cond'] == "BW")
                   {
                       $dados['vls'][1] = str_replace(".", "", $dados['vls'][1]);
                       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['decimal_db'] == ".")
                       {
                           $dados['vls'][1] = str_replace(",", ".", $dados['vls'][1]);
                       }
                   }
               }
               if ($dados['vls'][0] == "" || (!is_numeric($dados['vls'][0]) && $dados['cond'] != "IN"))
               {
                   $dados['vls'] = array();
               }
               if ($dados['cond'] == "BW" && ($dados['vls'][1] == "" || (!is_numeric($dados['vls'][1]) && $dados['cond'] != "IN")))
               {
                   $dados['vls'] = array();
               }
               $this->Val_format_1 = $dados['vls'][0];
               if ($dados['cond'] == "BW")
               {
                   $this->Val_format_2 = $dados['vls'][1];
                   $this->Val_BW_2     = $dados['vls'][1];
               }
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "nivel", 'N', 'INT', $Label_cmp);
           }
           if ($dados['field'] == "periodoletivo" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['periodoletivo'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "periodoLetivo", 'A', 'YEAR', $Label_cmp);
           }
           if ($dados['field'] == "nome" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['nome'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "nome", 'A', 'VARCHAR', $Label_cmp);
           }
           if ($dados['field'] == "abreviacao" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['abreviacao'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "abreviacao", 'A', 'VARCHAR', $Label_cmp);
           }
           if ($dados['field'] == "turno" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['turno'];
               $dados['vls'][0] = $dados['vls'][0][0];
               if ($dados['cond'] == "BW")
               {
                   $dados['vls'][1] = $dados['vls'][1][0];
                   if (empty($dados['vls'][1]))
                   {
                       $dados['vls'][1] = $dados['vls'][0];
                   }
               }
               if ($dados['cond'] != "IN")
               {
                   $dados['vls'][0] = str_replace(".", "", $dados['vls'][0]);
                   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['decimal_db'] == ".")
                   {
                       $dados['vls'][0] = str_replace(",", ".", $dados['vls'][0]);
                   }
                   if ($dados['cond'] == "BW")
                   {
                       $dados['vls'][1] = str_replace(".", "", $dados['vls'][1]);
                       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['decimal_db'] == ".")
                       {
                           $dados['vls'][1] = str_replace(",", ".", $dados['vls'][1]);
                       }
                   }
               }
               if ($dados['vls'][0] == "" || (!is_numeric($dados['vls'][0]) && $dados['cond'] != "IN"))
               {
                   $dados['vls'] = array();
               }
               if ($dados['cond'] == "BW" && ($dados['vls'][1] == "" || (!is_numeric($dados['vls'][1]) && $dados['cond'] != "IN")))
               {
                   $dados['vls'] = array();
               }
               $this->Val_format_1 = $dados['vls'][0];
               if ($dados['cond'] == "BW")
               {
                   $this->Val_format_2 = $dados['vls'][1];
                   $this->Val_BW_2     = $dados['vls'][1];
               }
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "turno", 'N', 'INT', $Label_cmp);
           }
           if ($dados['field'] == "datainicio" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['datainicio'];
               if ($dados['cond'] != "TP")
               {
                   $val[0] = $this->Ini->dyn_convert_date($dados['vls'][0]);
                   if ($dados['cond'] == "BW")
                   {
                       $val[1] = $this->Ini->dyn_convert_date($dados['vls'][1]);
                   }
                   $this->nm_prep_date($val, "DT", "DATE", $dados['cond'] , "");
                   $this->Val_format_1 = $val[0];
                   $this->nm_data->SetaData($this->Val_format_1, "YYYY-MM-DD");
                   $this->Val_format_1 = $this->nm_data->FormataSaida($this->Nm_date_format("DT", "ddmmaaaa"));
                   if ($dados['cond'] == "BW")
                   {
                       $this->Val_BW_2     = $val[1];
                       $this->Val_format_2 = $val[1];
                       $this->nm_data->SetaData($this->Val_format_2, "YYYY-MM-DD");
                       $this->Val_format_2 = $this->nm_data->FormataSaida($this->Nm_date_format("DT", "ddmmaaaa"));
                   }
                   $this->SC_proc_dyn_search_all($dados['cond'], $val, "dataInicio", 'DT', 'DATE', $Label_cmp);
               }
           }
           if ($dados['field'] == "datafim" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['datafim'];
               if ($dados['cond'] != "TP")
               {
                   $val[0] = $this->Ini->dyn_convert_date($dados['vls'][0]);
                   if ($dados['cond'] == "BW")
                   {
                       $val[1] = $this->Ini->dyn_convert_date($dados['vls'][1]);
                   }
                   $this->nm_prep_date($val, "DT", "DATE", $dados['cond'] , "");
                   $this->Val_format_1 = $val[0];
                   $this->nm_data->SetaData($this->Val_format_1, "YYYY-MM-DD");
                   $this->Val_format_1 = $this->nm_data->FormataSaida($this->Nm_date_format("DT", "ddmmaaaa"));
                   if ($dados['cond'] == "BW")
                   {
                       $this->Val_BW_2     = $val[1];
                       $this->Val_format_2 = $val[1];
                       $this->nm_data->SetaData($this->Val_format_2, "YYYY-MM-DD");
                       $this->Val_format_2 = $this->nm_data->FormataSaida($this->Nm_date_format("DT", "ddmmaaaa"));
                   }
                   $this->SC_proc_dyn_search_all($dados['cond'], $val, "dataFim", 'DT', 'DATE', $Label_cmp);
               }
           }
           if ($dados['field'] == "datafimmatricula" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['datafimmatricula'];
               if ($dados['cond'] != "TP")
               {
                   $val[0] = $this->Ini->dyn_convert_date($dados['vls'][0]);
                   if ($dados['cond'] == "BW")
                   {
                       $val[1] = $this->Ini->dyn_convert_date($dados['vls'][1]);
                   }
                   $this->nm_prep_date($val, "DT", "DATE", $dados['cond'] , "");
                   $this->Val_format_1 = $val[0];
                   $this->nm_data->SetaData($this->Val_format_1, "YYYY-MM-DD");
                   $this->Val_format_1 = $this->nm_data->FormataSaida($this->Nm_date_format("DT", "ddmmaaaa"));
                   if ($dados['cond'] == "BW")
                   {
                       $this->Val_BW_2     = $val[1];
                       $this->Val_format_2 = $val[1];
                       $this->nm_data->SetaData($this->Val_format_2, "YYYY-MM-DD");
                       $this->Val_format_2 = $this->nm_data->FormataSaida($this->Nm_date_format("DT", "ddmmaaaa"));
                   }
                   $this->SC_proc_dyn_search_all($dados['cond'], $val, "dataFimMatricula", 'DT', 'DATE', $Label_cmp);
               }
           }
           if ($dados['field'] == "horaentrada" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['horaentrada'];
               if ($dados['cond'] != "TP")
               {
                   $val[0] = $this->Ini->dyn_convert_date($dados['vls'][0]);
                   $this->nm_prep_date($val, "HH", "TIME", $dados['cond'] , "");
                   $this->Val_format_1 = $val[0];
                   $this->nm_data->SetaData($this->Val_format_1, "HH:II:SS");
                   $this->Val_format_1 = $this->nm_data->FormataSaida($this->Nm_date_format("HH", "hhiiss"));
                   $this->SC_proc_dyn_search_all($dados['cond'], $val, "horaEntrada", 'HH', 'TIME', $Label_cmp);
               }
           }
           if ($dados['field'] == "horasaida" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['horasaida'];
               if ($dados['cond'] != "TP")
               {
                   $val[0] = $this->Ini->dyn_convert_date($dados['vls'][0]);
                   $this->nm_prep_date($val, "HH", "TIME", $dados['cond'] , "");
                   $this->Val_format_1 = $val[0];
                   $this->nm_data->SetaData($this->Val_format_1, "HH:II:SS");
                   $this->Val_format_1 = $this->nm_data->FormataSaida($this->Nm_date_format("HH", "hhiiss"));
                   $this->SC_proc_dyn_search_all($dados['cond'], $val, "horaSaida", 'HH', 'TIME', $Label_cmp);
               }
           }
           if ($dados['field'] == "qtdvagas" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['qtdvagas'];
               $dados['vls'][0] = $dados['vls'][0][0];
               if ($dados['cond'] == "BW")
               {
                   $dados['vls'][1] = $dados['vls'][1][0];
                   if (empty($dados['vls'][1]))
                   {
                       $dados['vls'][1] = $dados['vls'][0];
                   }
               }
               if ($dados['cond'] != "IN")
               {
                   $dados['vls'][0] = str_replace(".", "", $dados['vls'][0]);
                   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['decimal_db'] == ".")
                   {
                       $dados['vls'][0] = str_replace(",", ".", $dados['vls'][0]);
                   }
                   if ($dados['cond'] == "BW")
                   {
                       $dados['vls'][1] = str_replace(".", "", $dados['vls'][1]);
                       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['decimal_db'] == ".")
                       {
                           $dados['vls'][1] = str_replace(",", ".", $dados['vls'][1]);
                       }
                   }
               }
               if ($dados['vls'][0] == "" || (!is_numeric($dados['vls'][0]) && $dados['cond'] != "IN"))
               {
                   $dados['vls'] = array();
               }
               if ($dados['cond'] == "BW" && ($dados['vls'][1] == "" || (!is_numeric($dados['vls'][1]) && $dados['cond'] != "IN")))
               {
                   $dados['vls'] = array();
               }
               $this->Val_format_1 = $dados['vls'][0];
               if ($dados['cond'] == "BW")
               {
                   $this->Val_format_2 = $dados['vls'][1];
                   $this->Val_BW_2     = $dados['vls'][1];
               }
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "qtdVagas", 'N', 'INT', $Label_cmp);
           }
           if ($dados['field'] == "observacoes" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['dyn_search_label']['observacoes'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "observacoes", 'A', 'TEXT', $Label_cmp);
           }
       }
       if (empty($this->Cmd_Dyn_Search)) 
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_filtro'] = "";
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq']        = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig'];
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cond_pesq']         = "";
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cond_dyn_search']   = "";
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['campos_busca']      = array();
           if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_fast'])) 
           {
               if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq'])) 
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq'] .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_fast'] . ")";
               }
               else 
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq'] = " where (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_fast'] . ")";
               }
           }
           return;
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_filtro'] = "( " . $this->Cmd_Dyn_Search . " )";
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig'])) 
       {
           $this->Cmd_Dyn_Search = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_orig'] . " and (" . $this->Cmd_Dyn_Search . ")"; 
       }
       else
       {
           $this->Cmd_Dyn_Search = " where " . $this->Cmd_Dyn_Search; 
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq'] = $this->Cmd_Dyn_Search;
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cond_pesq'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cond_dyn_search'] . $this->Dyn_Serarch_and_or;
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_fast'])) 
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq'] .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['where_pesq_fast'] . ")";
       }
       if (NM_is_utf8($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cond_pesq']) && $_SESSION['scriptcase']['charset'] != "UTF-8")
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cond_pesq'] = mb_convert_encoding($_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cond_pesq'], $_SESSION['scriptcase']['charset'], "UTF-8");
       }
   }
   function SC_proc_dyn_search_lookup($cond, $vls, $sql, $tp, $tsql, $lab)
   {
       $nm_aspas = ($tp == 'A') ? "'" : "";
       $nm_cond = "";
       $nm_cmd  = "";
       foreach ($vls as $i => $dados)
       {
           $dados = NM_charset_decode($dados);
           if (!empty($nm_cond))
           {
               $nm_cmd .= ",";
               $nm_cond .= " " . $this->Ini->Nm_lang['lang_srch_orr_cond'] . " ";
           }
           $tmp_pos = strpos($dados, "##@@");
           if ($tmp_pos === false)
           {
              $res_lookup = $dados;
           }
           else
           {
               $res_lookup = substr($dados, $tmp_pos + 4);
               $dados = substr($dados, 0, $tmp_pos);
           }
           if (trim($dados) != "")
           {
               $nm_cmd .= $nm_aspas . $dados . $nm_aspas;
               $nm_cond .= $res_lookup;
           }
       }
       if (!empty($nm_cmd))
       {
           if (!empty($this->Cmd_Dyn_Search))
           {
               $this->Cmd_Dyn_Search .= " " . $this->Dyn_Serarch_and_or . " ";
           }
           if ($cond == "DF")
           {
               $this->Cmd_Dyn_Search .= "(" . $sql . " not in (" . $nm_cmd . "))";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cond_dyn_search'] .= $lab . " " . $this->Ini->Nm_lang['lang_srch_not_like'] . " " . $nm_cond . "##*@@";
           }
           else
           {
               $this->Cmd_Dyn_Search .= "(" . $sql . " in (" . $nm_cmd . "))";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cond_dyn_search'] .= $lab . " " . $this->Ini->Nm_lang['lang_srch_like'] . " " . $nm_cond . "##*@@";
           }
       }
   }
   function SC_proc_dyn_search_all($cond, $vls, $sql, $tp, $tsql, $lab)
   {
       $nm_aspas = "'";
       if ($tp == "N" && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['decimal_db'] == ".")
       {
           $nm_aspas = "";
       }
      if (($tp == "DT" || $tp == "DH" || $tp == "HH") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
         $nm_aspas = "#";
      }
       $ini_lower = "";
       $end_lower = "";
       $nm_cond = "";
       $nm_cmd  = "";
       $dados   = $vls[0];
           if ($dados == "" && $cond != "NU" && $cond != "NN" && $cond != "EP" && $cond != "NE")
           {
               return;
           }
           if ($tp == 'N' && ($cond == "EP" || $cond == "NE"))
           {
               return;
           }
           $dados  = substr($this->Db->qstr($dados), 1, -1);
           if ($cond != "NU" && $cond != "NN" && $cond != "EP" && $cond != "NE")
           {
               if ($tsql == "TIMESTAMP")
               {
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                   {
                       $tsql = "DATETIME";
                   }
                   else
                   {
                       $tsql = "DATETIME";
                   }
               }
               if ($tp == 'N' && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($cond == "II" || $cond == "QP" || $cond == "NP"))
               {
                  $sql = "CAST (" . $sql . " AS TEXT)";
               }
               if (substr($tsql, 0, 8) == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && !$this->Date_part)
               {
                   $sql = "to_char (" . $sql . ", 'YYYY-MM-DD hh24:mi:ss')";
               }
               elseif (substr($tsql, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && !$this->Date_part)
               {
                   $sql = "to_char (" . $sql . ", 'YYYY-MM-DD')";
               }
               elseif (substr($tsql, 0, 4) == "TIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && !$this->Date_part)
               {
                   $sql = "to_char (" . $sql . ", 'hh24:mi:ss')";
               }
               if (substr($tsql, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase) && !$this->Date_part)
               {
                   $sql = "str_replace (convert(char(10)," . $sql . ",102), '.', '-') + ' ' + convert(char(8)," . $sql . ",20)";
               }
           }
           switch ($cond)
           {
              case "EQ":     // 
                 $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " = " . $nm_aspas . $dados . $nm_aspas;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_equl'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "II":     // 
                 $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " like '" . $dados . "%'";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_strt'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "QP";     // 
              case "NP";     // 
                 $concat = " " . $this->Dyn_Serarch_and_or . " ";
                 if ($cond == "QP")
                 {
                     $op_all    = " like ";
                     $lang_like = $this->Ini->Nm_lang['lang_srch_like'];
                 }
                 else
                 {
                     $op_all    = " not like ";
                     $lang_like = $this->Ini->Nm_lang['lang_srch_not_like'];
                 }
                 $tmp_cond = "";
                 if (substr($tsql, 0, 4) == "DATE" && $this->Date_part)
                 {
                     if ($this->NM_data_qp['ano'] != "____")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_year'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['ano'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%Y', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(year from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             $nm_cmd .= $this->Ini_date_char . "extract('year' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(year from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "year(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['mes'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_mnth'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['mes'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%m', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(month from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             $nm_cmd .= $this->Ini_date_char . "extract('month' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(month from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "month(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['dia'] != "__")
                     {
                         $tmp_cond .= (empty($nm_cmd)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_days'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['dia'];
                         $nm_cmd  .= (empty($nm_cmd)) ? "" : $concat;
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%d', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(day from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             $nm_cmd .= $this->Ini_date_char . "extract('day' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(day from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "day(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                     }
                 }
                 if (strpos($tsql, "TIME") !== false && $this->Date_part)
                 {
                     if ($this->NM_data_qp['hor'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_time'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['hor'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%H', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(hour from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             $nm_cmd .= $this->Ini_date_char . "extract('hour' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(hour from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "hour(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['min'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_mint'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['min'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%M', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(minute from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             $nm_cmd .= $this->Ini_date_char . "extract('minute' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(minute from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "minute(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['seg'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_scnd'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['seg'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%S', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(second from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             $nm_cmd .= $this->Ini_date_char . "extract('second' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(second from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "second(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                     }
                 }
                 if (!$this->Date_part)
                 {
                     $nm_cmd  .= $nm_ini_lower . $sql . $nm_fim_lower . $op_all . "'%" . $dados . "%'";
                     $nm_cond  = $lab . " " . $lang_like . " " . $this->Val_format_1 . "##*@@";
                 }
                 else
                 {
                     if (!empty($tmp_cond))
                     {
                         $nm_cond = $lab . ": " . $tmp_cond . "##*@@";
                     }
                 }
              break;
              case "DF":     // 
                 if ($tp == "DT" || $tp == "DH" || $tp == "HH")
                 {
                     $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " not like '%" . $dados . "%'";
                 }
                 else
                 {
                     $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " <> " . $nm_aspas . $dados . $nm_aspas;
                 }
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_diff'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "GT":     // 
                 $nm_cmd  = $sql . " > " . $nm_aspas . $dados . $nm_aspas;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_grtr'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "GE":     // 
                 $nm_cmd  = $sql . " >= " . $nm_aspas . $dados . $nm_aspas;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_grtr_equl'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "LT":     // 
                 $nm_cmd  = $sql . " < " . $nm_aspas . $dados . $nm_aspas;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_less'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "LE":     // 
                 $nm_cmd  = $sql . " <= " . $nm_aspas . $dados . $nm_aspas;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_less_equl'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "BW":     // 
                 $this->Val_BW_2  = substr($this->Db->qstr($this->Val_BW_2), 1, -1);
                 $nm_cmd = $sql . " between " . $nm_aspas . $dados . $nm_aspas . " and " . $nm_aspas . $this->Val_BW_2 . $nm_aspas;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_betw'] . " " . $this->Val_format_1 . " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " " . $this->Val_format_2 . "##*@@";
              break;
              case "IN":     // 
                 $nm_sc_valores = explode(",", $dados);
                 $cond_str = "";
                 $nm_condX  = "";
                 $ini_mult  = "";
                 $end_mult  = "";
                 if (!empty($nm_sc_valores))
                 {
                     foreach ($nm_sc_valores as $nm_sc_valor)
                     {
                        if ($tp == "N" && substr_count($nm_sc_valor, ".") > 1)
                        {
                           $nm_sc_valor = str_replace(".", "", $nm_sc_valor);
                        }
                        if ("" != $cond_str)
                        {
                           $ini_mult  = "(";
                           $end_mult  = ")";
                           $cond_str .= ",";
                           $nm_condX  .= " " . $this->Ini->Nm_lang['lang_srch_orr_cond'] . " ";
                        }
                        $cond_str .= $nm_aspas . $nm_sc_valor . $nm_aspas;
                        $nm_condX .= $nm_aspas . $nm_sc_valor . $nm_aspas;
                     }
                     $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " IN (" . $cond_str . ")";
                     $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_like'] . " " . $ini_mult . $nm_condX . $end_mult . "##*@@";
                 }
            break;
              case "NU":     // 
                 $nm_cmd  = $sql . " IS NULL ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_null'] ."##*@@";
              break;
              case "NN":     // 
                 $nm_cmd = $sql . " IS NOT NULL ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_nnul'] . "##*@@";
              break;
              case "EP":     // 
                 $nm_cmd  = $sql . " = '' ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_empty'] ."##*@@";
              break;
              case "NE":     // 
                 $nm_cmd = $sql . " <> '' ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_nempty'] . "##*@@";
              break;
           }
           if (!empty($nm_cmd))
           {
               if (!empty($this->Cmd_Dyn_Search))
               {
                   $this->Cmd_Dyn_Search .= " " . $this->Dyn_Serarch_and_or . " ";
               }
               $this->Cmd_Dyn_Search .= "(" . $nm_cmd . ")";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_tbl_turma']['cond_dyn_search'] .= $nm_cond;
           }
   }

   function nm_prep_date(&$val, $tp, $tsql, &$cond, $format_nd)
   {
       $fill_dt = false;
       if ($tsql == "TIMESTAMP")
       {
           $tsql = "DATETIME";
       }
       $cond = strtoupper($cond);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && $tp != "ND")
       {
           if ($cond == "EP")
           {
               $cond = "NU";
           }
           if ($cond == "NE")
           {
               $cond = "NN";
           }
       }
       if ($cond == "NU" || $cond == "NN" || $cond == "EP" || $cond == "NE")
       {
           $val    = array();
           $val[0] = "";
           return;
       }
       if ($cond != "II" && $cond != "QP" && $cond != "NP")
       {
           $fill_dt = true;
       }
       if ($fill_dt)
       {
           $val[0]['dia'] = (!empty($val[0]['dia']) && strlen($val[0]['dia']) == 1) ? "0" . $val[0]['dia'] : $val[0]['dia'];
           $val[0]['mes'] = (!empty($val[0]['mes']) && strlen($val[0]['mes']) == 1) ? "0" . $val[0]['mes'] : $val[0]['mes'];
           if ($tp == "DH")
           {
               $val[0]['hor'] = (!empty($val[0]['hor']) && strlen($val[0]['hor']) == 1) ? "0" . $val[0]['hor'] : $val[0]['hor'];
               $val[0]['min'] = (!empty($val[0]['min']) && strlen($val[0]['min']) == 1) ? "0" . $val[0]['min'] : $val[0]['min'];
               $val[0]['seg'] = (!empty($val[0]['seg']) && strlen($val[0]['seg']) == 1) ? "0" . $val[0]['seg'] : $val[0]['seg'];
           }
           if ($cond == "BW")
           {
               $val[1]['dia'] = (!empty($val[1]['dia']) && strlen($val[1]['dia']) == 1) ? "0" . $val[1]['dia'] : $val[1]['dia'];
               $val[1]['mes'] = (!empty($val[1]['mes']) && strlen($val[1]['mes']) == 1) ? "0" . $val[1]['mes'] : $val[1]['mes'];
               if ($tp == "DH")
               {
                   $val[1]['hor'] = (!empty($val[1]['hor']) && strlen($val[1]['hor']) == 1) ? "0" . $val[1]['hor'] : $val[1]['hor'];
                   $val[1]['min'] = (!empty($val[1]['min']) && strlen($val[1]['min']) == 1) ? "0" . $val[1]['min'] : $val[1]['min'];
                   $val[1]['seg'] = (!empty($val[1]['seg']) && strlen($val[1]['seg']) == 1) ? "0" . $val[1]['seg'] : $val[1]['seg'];
               }
           }
       }
       if ($cond == "BW")
       {
           $this->NM_data_1 = array();
           $this->NM_data_1['ano'] = (isset($val[0]['ano']) && !empty($val[0]['ano'])) ? $val[0]['ano'] : "____";
           $this->NM_data_1['mes'] = (isset($val[0]['mes']) && !empty($val[0]['mes'])) ? $val[0]['mes'] : "__";
           $this->NM_data_1['dia'] = (isset($val[0]['dia']) && !empty($val[0]['dia'])) ? $val[0]['dia'] : "__";
           $this->NM_data_1['hor'] = (isset($val[0]['hor']) && !empty($val[0]['hor'])) ? $val[0]['hor'] : "__";
           $this->NM_data_1['min'] = (isset($val[0]['min']) && !empty($val[0]['min'])) ? $val[0]['min'] : "__";
           $this->NM_data_1['seg'] = (isset($val[0]['seg']) && !empty($val[0]['seg'])) ? $val[0]['seg'] : "__";
           $this->data_menor($this->NM_data_1);
           $this->NM_data_2 = array();
           $this->NM_data_2['ano'] = (isset($val[1]['ano']) && !empty($val[1]['ano'])) ? $val[1]['ano'] : "____";
           $this->NM_data_2['mes'] = (isset($val[1]['mes']) && !empty($val[1]['mes'])) ? $val[1]['mes'] : "__";
           $this->NM_data_2['dia'] = (isset($val[1]['dia']) && !empty($val[1]['dia'])) ? $val[1]['dia'] : "__";
           $this->NM_data_2['hor'] = (isset($val[1]['hor']) && !empty($val[1]['hor'])) ? $val[1]['hor'] : "__";
           $this->NM_data_2['min'] = (isset($val[1]['min']) && !empty($val[1]['min'])) ? $val[1]['min'] : "__";
           $this->NM_data_2['seg'] = (isset($val[1]['seg']) && !empty($val[1]['seg'])) ? $val[1]['seg'] : "__";
           $this->data_maior($this->NM_data_2);
           $val = array();
           if ($tp == "ND")
           {
               $out_dt1 = $format_nd;
               $out_dt1 = str_replace("yyyy", $this->NM_data_1['ano'], $out_dt1);
               $out_dt1 = str_replace("mm",   $this->NM_data_1['mes'], $out_dt1);
               $out_dt1 = str_replace("dd",   $this->NM_data_1['dia'], $out_dt1);
               $out_dt1 = str_replace("hh",   "", $out_dt1);
               $out_dt1 = str_replace("ii",   "", $out_dt1);
               $out_dt1 = str_replace("ss",   "", $out_dt1);
               $out_dt2 = $format_nd;
               $out_dt2 = str_replace("yyyy", $this->NM_data_2['ano'], $out_dt2);
               $out_dt2 = str_replace("mm",   $this->NM_data_2['mes'], $out_dt2);
               $out_dt2 = str_replace("dd",   $this->NM_data_2['dia'], $out_dt2);
               $out_dt2 = str_replace("hh",   "", $out_dt2);
               $out_dt2 = str_replace("ii",   "", $out_dt2);
               $out_dt2 = str_replace("ss",   "", $out_dt2);
               $val[0] = $out_dt1;
               $val[1] = $out_dt2;
               return;
           }
           if ($tsql == "TIME")
           {
               $val[0] = $this->NM_data_1['hor'] . ":" . $this->NM_data_1['min'] . ":" . $this->NM_data_1['seg'];
               $val[1] = $this->NM_data_2['hor'] . ":" . $this->NM_data_2['min'] . ":" . $this->NM_data_2['seg'];
           }
           elseif (substr($tsql, 0, 4) == "DATE")
           {
               $val[0] = $this->NM_data_1['ano'] . "-" . $this->NM_data_1['mes'] . "-" . $this->NM_data_1['dia'];
               $val[1] = $this->NM_data_2['ano'] . "-" . $this->NM_data_2['mes'] . "-" . $this->NM_data_2['dia'];
               if (strpos($tsql, "TIME") !== false)
               {
                   $val[0] .= " " . $this->NM_data_1['hor'] . ":" . $this->NM_data_1['min'] . ":" . $this->NM_data_1['seg'];
                   $val[1] .= " " . $this->NM_data_2['hor'] . ":" . $this->NM_data_2['min'] . ":" . $this->NM_data_2['seg'];
               }
           }
           return;
       }
       $this->NM_data_qp = array();
       $this->NM_data_qp['ano'] = (isset($val[0]['ano']) && $val[0]['ano'] != "") ? $val[0]['ano'] : "____";
       $this->NM_data_qp['mes'] = (isset($val[0]['mes']) && $val[0]['mes'] != "") ? $val[0]['mes'] : "__";
       $this->NM_data_qp['dia'] = (isset($val[0]['dia']) && $val[0]['dia'] != "") ? $val[0]['dia'] : "__";
       $this->NM_data_qp['hor'] = (isset($val[0]['hor']) && $val[0]['hor'] != "") ? $val[0]['hor'] : "__";
       $this->NM_data_qp['min'] = (isset($val[0]['min']) && $val[0]['min'] != "") ? $val[0]['min'] : "__";
       $this->NM_data_qp['seg'] = (isset($val[0]['seg']) && $val[0]['seg'] != "") ? $val[0]['seg'] : "__";
       foreach ($this->NM_data_qp as $x => $tx)
       {
           if (substr($tx, 0, 2) == "__" && ($x == "dia" || $x == "mes" || $x == "ano"))
           {
               if (substr($tsql, 0, 4) == "DATE")
               {
                   $this->Date_part = true;
                   break;
               }
           }
           if (substr($tx, 0, 2) == "__" && ($x == "hor" || $x == "min" || $x == "seg"))
           {
               if (strpos($tsql, "TIME") !== false && ($tp == "DH" || ($tp == "DT" && $cond != "LE"  && $cond != "LT"  && $cond != "GE"  && $cond != "GT")))
               {
                   $this->Date_part = true;
                   break;
               }
           }
       }
       if ($this->Date_part)
       {
           $this->Ini_date_part = "";
           $this->End_date_part = "";
           $this->Ini_date_char = "";
           $this->End_date_char = "";
           if ($tp != "ND")
           {
               if ($cond == "EQ")
               {
                   $this->Operador_date_part = " = ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_equl'];
               }
               elseif ($cond == "II")
               {
                   $this->Operador_date_part = " like ";
                   $this->Ini_date_part = "'";
                   $this->End_date_part = "%'";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_strt'];
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                   {
                       $this->Ini_date_char = "CAST (";
                       $this->End_date_char = " AS TEXT)";
                   }
               }
               elseif ($cond == "DF")
               {
                   $this->Operador_date_part = " <> ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_diff'];
               }
               elseif ($cond == "GT")
               {
                   $this->Operador_date_part = " > ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['pesq_cond_maior'];
               }
               elseif ($cond == "GE")
               {
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_grtr_equl'];
                   $this->Operador_date_part = " >= ";
               }
               elseif ($cond == "LT")
               {
                   $this->Operador_date_part = " < ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_less'];
               }
               elseif ($cond == "LE")
               {
                   $this->Operador_date_part = " <= ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_less_equl'];
               }
               elseif ($cond == "NP")
               {
                   $this->Operador_date_part = " not like ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_diff'];
                   $this->Ini_date_part = "'%";
                   $this->End_date_part = "%'";
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                   {
                       $this->Ini_date_char = "CAST (";
                       $this->End_date_char = " AS TEXT)";
                   }
               }
               else
               {
                   $this->Operador_date_part = " like ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_equl'];
                   $this->Ini_date_part = "'%";
                   $this->End_date_part = "%'";
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                   {
                       $this->Ini_date_char = "CAST (";
                       $this->End_date_char = " AS TEXT)";
                   }
               }
           }
           if ($cond == "DF")
           {
               $cond = "NP";
           }
           if ($cond != "NP")
           {
               $cond = "QP";
           }
       }
       $val = array();
       if ($tp != "ND" && ($cond == "QP" || $cond == "NP"))
       {
           $val[0] = "";
           if (substr($tsql, 0, 4) == "DATE")
           {
               $val[0] .= $this->NM_data_qp['ano'] . "-" . $this->NM_data_qp['mes'] . "-" . $this->NM_data_qp['dia'];
               if (strpos($tsql, "TIME") !== false)
               {
                   $val[0] .= " ";
               }
           }
           if (strpos($tsql, "TIME") !== false)
           {
               $val[0] .= $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
           }
           return;
       }
       if ($cond == "II" || $cond == "DF" || $cond == "EQ" || $cond == "LT" || $cond == "GE")
       {
           $this->data_menor($this->NM_data_qp);
       }
       else
       {
           $this->data_maior($this->NM_data_qp);
       }
       if ($tsql == "TIME")
       {
           $val[0] = $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
           return;
       }
       $format_sql = "";
       if (substr($tsql, 0, 4) == "DATE")
       {
           $format_sql .= $this->NM_data_qp['ano'] . "-" . $this->NM_data_qp['mes'] . "-" . $this->NM_data_qp['dia'];
           if (strpos($tsql, "TIME") !== false)
           {
               $format_sql .= " ";
           }
       }
       if (strpos($tsql, "TIME") !== false)
       {
           $format_sql .=  $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
       }
       if ($tp != "ND")
       {
           $val[0] = $format_sql;
           return;
       }
       if ($tp == "ND")
       {
           $format_nd = str_replace("yyyy", $this->NM_data_qp['ano'], $format_nd);
           $format_nd = str_replace("mm",   $this->NM_data_qp['mes'], $format_nd);
           $format_nd = str_replace("dd",   $this->NM_data_qp['dia'], $format_nd);
           $format_nd = str_replace("hh",   $this->NM_data_qp['hor'], $format_nd);
           $format_nd = str_replace("ii",   $this->NM_data_qp['min'], $format_nd);
           $format_nd = str_replace("ss",   $this->NM_data_qp['seg'], $format_nd);
           $val[0] = $format_nd;
           return;
       }
   }
   function data_menor(&$data_arr)
   {
       $data_arr["ano"] = ("____" == $data_arr["ano"]) ? "0001" : $data_arr["ano"];
       $data_arr["mes"] = ("__" == $data_arr["mes"])   ? "01" : $data_arr["mes"];
       $data_arr["dia"] = ("__" == $data_arr["dia"])   ? "01" : $data_arr["dia"];
       $data_arr["hor"] = ("__" == $data_arr["hor"])   ? "00" : $data_arr["hor"];
       $data_arr["min"] = ("__" == $data_arr["min"])   ? "00" : $data_arr["min"];
       $data_arr["seg"] = ("__" == $data_arr["seg"])   ? "00" : $data_arr["seg"];
   }

   function data_maior(&$data_arr)
   {
       $data_arr["ano"] = ("____" == $data_arr["ano"]) ? "9999" : $data_arr["ano"];
       $data_arr["mes"] = ("__" == $data_arr["mes"])   ? "12" : $data_arr["mes"];
       $data_arr["hor"] = ("__" == $data_arr["hor"])   ? "23" : $data_arr["hor"];
       $data_arr["min"] = ("__" == $data_arr["min"])   ? "59" : $data_arr["min"];
       $data_arr["seg"] = ("__" == $data_arr["seg"])   ? "59" : $data_arr["seg"];
       if ("__" == $data_arr["dia"])
       {
           $data_arr["dia"] = "31";
           if ($data_arr["mes"] == "04" || $data_arr["mes"] == "06" || $data_arr["mes"] == "09" || $data_arr["mes"] == "11")
           {
               $data_arr["dia"] = 30;
           }
           elseif ($data_arr["mes"] == "02")
           { 
                if  ($data_arr["ano"] % 4 == 0)
                {
                     $data_arr["dia"] = 29;
                }
                else 
                {
                     $data_arr["dia"] = 28;
                }
           }
       }
   }

 function Nm_date_format($Type, $Format)
 {
     $Form_base = str_replace("/", "", $Format);
     $Form_base = str_replace("-", "", $Form_base);
     $Form_base = str_replace(":", "", $Form_base);
     $Form_base = str_replace(";", "", $Form_base);
     $Form_base = str_replace(" ", "", $Form_base);
     $Form_base = str_replace("a", "Y", $Form_base);
     $Form_base = str_replace("y", "Y", $Form_base);
     $Form_base = str_replace("h", "H", $Form_base);
     $date_format_show = "";
     if ($Type == "DT" || $Type == "DH")
     {
         $Str_date = str_replace("a", "y", strtolower($_SESSION['scriptcase']['reg_conf']['date_format']));
         $Str_date = str_replace("y", "Y", $Str_date);
         $Str_date = str_replace("h", "H", $Str_date);
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
         foreach ($Arr_D as $Cada_d)
         {
             if (strpos($Form_base, $Cada_d) !== false)
             {
                 $date_format_show .= (!$Prim) ? $_SESSION['scriptcase']['reg_conf']['date_sep'] : "";
                 $date_format_show .= $Cada_d;
                 $Prim = false;
             }
         }
     }
     if ($Type == "DH" || $Type == "HH")
     {
         if ($Type == "DH")
         {
             $date_format_show .= " ";
         }
         $Str_time = strtolower($_SESSION['scriptcase']['reg_conf']['time_format']);
         $Str_time = str_replace("h", "H", $Str_time);
         $Lim   = strlen($Str_time);
         $Ult   = "";
         $Arr_T = array();
         for ($I = 0; $I < $Lim; $I++)
         {
              $Char = substr($Str_time, $I, 1);
              if ($Char != $Ult)
              {
                  $Arr_T[] = $Char;
              }
              $Ult = $Char;
         }
         $Prim = true;
         foreach ($Arr_T as $Cada_t)
         {
             if (strpos($Form_base, $Cada_t) !== false)
             {
                 $date_format_show .= (!$Prim) ? $_SESSION['scriptcase']['reg_conf']['time_sep'] : "";
                 $date_format_show .= $Cada_t;
                 $Prim = false;
             }
         }
     }
     return $date_format_show;
 }

  function html_doc_word($nm_arquivo_doc_word)
  {
      global $nm_url_saida;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE>Turmas :: Doc</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
   <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}
?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">WORD</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . $nm_arquivo_doc_word ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_tbl_turma_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="nm_tit_doc" value="grid_tbl_turma.doc"> 
<input type="hidden" name="nm_name_doc" value="<?php echo NM_encode_input($this->Ini->path_imag_temp . $nm_arquivo_doc_word) ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="<?php echo NM_encode_input($this->ret_word) ?>"> 
</FORM> 
</BODY>
</HTML>
<?php
  }
  function html_pdf_detalhe($nm_arquivo_pdf_det)
  {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE>Turmas :: Doc</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
   <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}
?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">PDF</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo  NM_encode_input($nm_arquivo_pdf_det) ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_tbl_turma_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="nm_tit_doc" value="grid_tbl_turma_det.pdf"> 
<input type="hidden" name="nm_name_doc" value="<?php echo NM_encode_input($nm_arquivo_pdf_det) ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="detalhe"> 
</FORM> 
</BODY>
</HTML>
<?php
  }
} 
// 
//======= =========================
   if (!function_exists("NM_is_utf8"))
   {
       include_once("grid_tbl_turma_nmutf8.php");
   }
   if (!function_exists("SC_dir_app_ini"))
   {
       include_once("../_lib/lib/php/nm_ctrl_app_name.php");
   }
   SC_dir_app_ini('ISchool');
   $_SESSION['scriptcase']['grid_tbl_turma']['contr_erro'] = 'off';
   $sc_conv_var = array();
   if (!empty($_POST))
   {
       foreach ($_POST as $nmgp_var => $nmgp_val)
       {
            if (isset($sc_conv_var[$nmgp_var]))
            {
                $nmgp_var = $sc_conv_var[$nmgp_var];
            }
            elseif (isset($sc_conv_var[strtolower($nmgp_var)]))
            {
                $nmgp_var = $sc_conv_var[strtolower($nmgp_var)];
            }
            nm_limpa_str_grid_tbl_turma($nmgp_val);
            nm_protect_num_grid_tbl_turma($nmgp_var, $nmgp_val);
            $$nmgp_var = $nmgp_val;
       }
   }
   if (!empty($_GET))
   {
       foreach ($_GET as $nmgp_var => $nmgp_val)
       {
            if (isset($sc_conv_var[$nmgp_var]))
            {
                $nmgp_var = $sc_conv_var[$nmgp_var];
            }
            elseif (isset($sc_conv_var[strtolower($nmgp_var)]))
            {
                $nmgp_var = $sc_conv_var[strtolower($nmgp_var)];
            }
            nm_limpa_str_grid_tbl_turma($nmgp_val);
            nm_protect_num_grid_tbl_turma($nmgp_var, $nmgp_val);
            $$nmgp_var = $nmgp_val;
       }
   }
   if (!empty($glo_perfil))  
   { 
      $_SESSION['scriptcase']['glo_perfil'] = $glo_perfil;
   }   
   if (isset($glo_servidor)) 
   {
       $_SESSION['scriptcase']['glo_servidor'] = $glo_servidor;
   }
   if (isset($glo_banco)) 
   {
       $_SESSION['scriptcase']['glo_banco'] = $glo_banco;
   }
   if (isset($glo_tpbanco)) 
   {
       $_SESSION['scriptcase']['glo_tpbanco'] = $glo_tpbanco;
   }
   if (isset($glo_usuario)) 
   {
       $_SESSION['scriptcase']['glo_usuario'] = $glo_usuario;
   }
   if (isset($glo_senha)) 
   {
       $_SESSION['scriptcase']['glo_senha'] = $glo_senha;
   }
   if (isset($glo_senha_protect)) 
   {
       $_SESSION['scriptcase']['glo_senha_protect'] = $glo_senha_protect;
   }
   if (isset($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida_form']) && $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida_form'] && !isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['master_pai']))
   {
       $SC_init_ant = $script_case_init;
       $script_case_init = rand(2, 10000);
       if (isset($_SESSION['sc_session'][$SC_init_ant]['grid_tbl_turma']['embutida_pai']))
       {
           $_SESSION['sc_session'][$SC_init_ant][$_SESSION['sc_session'][$SC_init_ant]['grid_tbl_turma']['embutida_pai']]['embutida_filho'][] = $script_case_init;
       }
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['master_pai'] = $SC_init_ant;
   }
   if (isset($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['master_pai']))
   {
       $SC_init_ant = $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['master_pai'];
       if (!isset($_SESSION['sc_session'][$SC_init_ant]['grid_tbl_turma']['embutida_form_parms']))
       {
           $_SESSION['sc_session'][$SC_init_ant]['grid_tbl_turma']['embutida_form_parms'] = "";
       }
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida_form_parms'] = $_SESSION['sc_session'][$SC_init_ant]['grid_tbl_turma']['embutida_form_parms'];
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida_form'] = true;
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['reg_start'] = "";
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opcao'] = "inicio";
       unset($_SESSION['sc_session'][$SC_init_ant]['grid_tbl_turma']['embutida_form']);
       unset($_SESSION['sc_session'][$SC_init_ant]['grid_tbl_turma']['embutida_form_parms']);
   }
   if (isset($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida_form_parms'])) 
   {
       if (!empty($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida_form_parms'])) 
       {
           $nmgp_parms = $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida_form_parms'];
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida_form_parms'] = "";
       }
   }
   elseif (isset($script_case_init))
   {
       unset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida_form']);
       unset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida_form_parms']);
   }
   if (!isset($nmgp_opcao) || !isset($script_case_init) || ((!isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida']) || !$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida']) && $nmgp_opcao != "formphp"))
   { 
       if (!empty($nmgp_parms)) 
       { 
           $nmgp_parms = NM_decode_input($nmgp_parms);
           $nmgp_parms = str_replace("@aspass@", "'", $nmgp_parms);
           $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
           $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
           $todo = explode("?@?", $nmgp_parms);
           foreach ($todo as $param)
           {
                $cadapar = explode("?#?", $param);
                if (1 < sizeof($cadapar))
                {
                    if (isset($sc_conv_var[$cadapar[0]]))
                    {
                        $cadapar[0] = $sc_conv_var[$cadapar[0]];
                    }
                    elseif (isset($sc_conv_var[strtolower($cadapar[0])]))
                    {
                        $cadapar[0] = $sc_conv_var[strtolower($cadapar[0])];
                    }
                    nm_limpa_str_grid_tbl_turma($cadapar[1]);
                    nm_protect_num_grid_tbl_turma($cadapar[0], $cadapar[1]);
                    $$cadapar[0] = $cadapar[1];
                }
           }
           $NMSC_conf_apl = array();
           if (isset($NMSC_inicial))
           {
               $NMSC_conf_apl['inicial'] = $NMSC_inicial;
           }
           if (isset($NMSC_rows))
           {
               $NMSC_conf_apl['rows'] = $NMSC_rows;
           }
           if (isset($NMSC_cols))
           {
               $NMSC_conf_apl['cols'] = $NMSC_cols;
           }
           if (isset($NMSC_paginacao))
           {
               $NMSC_conf_apl['paginacao'] = $NMSC_paginacao;
           }
           if (isset($NMSC_cab))
           {
               $NMSC_conf_apl['cab'] = $NMSC_cab;
           }
           if (isset($NMSC_nav))
           {
               $NMSC_conf_apl['nav'] = $NMSC_nav;
           }
           if (isset($NM_run_iframe) && $NM_run_iframe == 1) 
           { 
               unset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']);
               $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['b_sair'] = false;
           }   
       } 
   } 
   $ini_embutida = "";
   if (isset($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida']) && $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida'])
   {
       $nmgp_outra_jan = "";
   }
   if (isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true')
   {
       $script_case_init = "";
   }
   if (isset($GLOBALS["script_case_init"]) && !empty($GLOBALS["script_case_init"]))
   {
       $ini_embutida = $GLOBALS["script_case_init"];
        if (!isset($_SESSION['sc_session'][$ini_embutida]['grid_tbl_turma']['embutida']))
        { 
           $_SESSION['sc_session'][$ini_embutida]['grid_tbl_turma']['embutida'] = false;
        }
        if (!$_SESSION['sc_session'][$ini_embutida]['grid_tbl_turma']['embutida'])
        { 
           $script_case_init = $ini_embutida;
        }
   }
   if (isset($_SESSION['scriptcase']['grid_tbl_turma']['protect_modal']) && !empty($_SESSION['scriptcase']['grid_tbl_turma']['protect_modal']))
   {
       $script_case_init = $_SESSION['scriptcase']['grid_tbl_turma']['protect_modal'];
   }
   if (!isset($script_case_init) || empty($script_case_init))
   {
       $script_case_init = rand(2, 10000);
   }
   $salva_emb    = false;
   $salva_iframe = false;
   $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['doc_word'] = false;
   $_SESSION['scriptcase']['saida_word'] = false;
   if (isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['iframe_menu']))
   {
       $salva_iframe = $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['iframe_menu'];
       unset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['iframe_menu']);
   }
   if (isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida']))
   {
       $salva_emb = $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida'];
       unset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida']);
   }
   if (isset($nm_run_menu) && $nm_run_menu == 1 && !$salva_emb)
   {
        if (isset($_SESSION['scriptcase']['sc_aba_iframe']) && isset($_SESSION['scriptcase']['sc_apl_menu_atual']) && $script_case_init == 1)
        {
            foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
            {
                if ($aba == $_SESSION['scriptcase']['sc_apl_menu_atual'])
                {
                    unset($_SESSION['scriptcase']['sc_aba_iframe'][$aba]);
                    break;
                }
            }
        }
        if ($script_case_init == 1)
        {
            $_SESSION['scriptcase']['sc_apl_menu_atual'] = "grid_tbl_turma";
        }
        $achou = false;
        if (isset($_SESSION['sc_session'][$script_case_init]))
        {
            foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
            {
                if ($nome_apl == 'grid_tbl_turma' || $achou)
                {
                    unset($_SESSION['sc_session'][$script_case_init][$nome_apl]);
                }
            }
            if (!$achou && isset($nm_apl_menu))
            {
                foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
                {
                    if ($nome_apl == $nm_apl_menu || $achou)
                    {
                        $achou = true;
                        if ($nome_apl != $nm_apl_menu)
                        {
                            unset($_SESSION['sc_session'][$script_case_init][$nome_apl]);
                        }
                    }
                }
            }
        }
        $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['iframe_menu'] = true;
   }
   else
   {
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['iframe_menu'] = $salva_iframe;
   }
   $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida'] = $salva_emb;

   if (!isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['initialize']))
   {
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['initialize'] = true;
   }
   elseif (!isset($_SERVER['HTTP_REFERER']))
   {
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['initialize'] = false;
   }
   elseif (false === strpos($_SERVER['HTTP_REFERER'], '/grid_tbl_turma/'))
   {
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['initialize'] = true;
   }
   else
   {
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['initialize'] = false;
   }
   if ($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['initialize'])
   {
       unset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['tot_geral']);
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['contr_total_geral'] = "NAO";
   }

   $_POST['script_case_init'] = $script_case_init;
   if (isset($nmgp_opcao) && $nmgp_opcao == "busca" && isset($nmgp_orig_pesq))
   {
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['orig_pesq'] = $nmgp_orig_pesq;
   }
   if (!isset($nmgp_opcao) || empty($nmgp_opcao) || $nmgp_opcao == "grid" && (!isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['b_sair'])))
   {
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['b_sair'] = true;
   }
   $STR_lang    = (isset($_SESSION['scriptcase']['str_lang']) && !empty($_SESSION['scriptcase']['str_lang'])) ? $_SESSION['scriptcase']['str_lang'] : "pt_br";
   $STR_schema_all = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "iSchool-form/iSchool-form";
   $NM_arq_lang = "../_lib/lang/" . $STR_lang . ".lang.php";
   $Nm_lang = array();
   if (is_file($NM_arq_lang))
   {
       $Lixo = file($NM_arq_lang);
       foreach ($Lixo as $Cada_lin) 
       {
           if (strpos($Cada_lin, "array()") === false && (trim($Cada_lin) != "<?php")  && (trim($Cada_lin) != "?" . ">"))
           {
               eval (str_replace("\$this->", "\$", $Cada_lin));
           }
       }
   }
   $_SESSION['scriptcase']['charset'] = (isset($Nm_lang['Nm_charset']) && !empty($Nm_lang['Nm_charset'])) ? $Nm_lang['Nm_charset'] : "UTF-8";
   foreach ($Nm_lang as $ind => $dados)
   {
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
      {
          $Nm_lang[$ind] = mb_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
   }
   if (isset($_SESSION['scriptcase']['sc_outra_jan']) && $_SESSION['scriptcase']['sc_outra_jan'] == 'grid_tbl_turma')
   {
       $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_outra_jan'] = true;
        unset($_SESSION['scriptcase']['sc_outra_jan']);
   }
   $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['menu_desenv'] = false;   
   if (!defined("SC_ERROR_HANDLER"))
   {
       define("SC_ERROR_HANDLER", 1);
       include_once(dirname(__FILE__) . "/grid_tbl_turma_erro.php");
   }
   $salva_tp_saida  = (isset($_SESSION['scriptcase']['sc_tp_saida']))  ? $_SESSION['scriptcase']['sc_tp_saida'] : "";
   $salva_url_saida  = (isset($_SESSION['scriptcase']['sc_url_saida'][$script_case_init])) ? $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] : "";
   if (!$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida'] && $nmgp_opcao != "formphp")
   { 
       if ($nmgp_opcao == "change_lang" || $nmgp_opcao == "change_lang_res" || $nmgp_opcao == "change_lang_fil" || $nmgp_opcao == "force_lang")  
       { 
           if ($nmgp_opcao == "change_lang_fil")  
           { 
               $nmgp_opcao  = "busca";  
           } 
           elseif ($nmgp_opcao == "change_lang_res")  
           { 
               $nmgp_opcao  = "resumo";  
           } 
           else 
           { 
               $nmgp_opcao  = "igual";  
           } 
           unset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['tot_geral']);
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['contr_total_geral'] = "NAO";
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
       if ($nmgp_opcao == "change_schema" || $nmgp_opcao == "change_schema_fil" || $nmgp_opcao == "change_schema_res")  
       { 
           if ($nmgp_opcao == "change_schema_fil")  
           { 
               $nmgp_opcao  = "busca";  
           } 
           elseif ($nmgp_opcao == "change_schema_res")  
           { 
               $nmgp_opcao  = "resumo";  
           } 
           else 
           { 
               $nmgp_opcao  = "igual";  
           } 
           $nmgp_schema = $nmgp_schema . "/" . $nmgp_schema;  
           $_SESSION['scriptcase']['str_schema_all'] = $nmgp_schema;
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['num_css'] = rand(0, 1000);
       } 
       if ($nmgp_opcao == "volta_grid")  
       { 
           $nmgp_opcao = "igual";  
       }   
       if (!empty($nmgp_opcao))  
       { 
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opcao'] = $nmgp_opcao ;  
       }   
       if ($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opcao'] == "detalhe" && isset($nmgp_chave_det))  
       { 
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['chave_det'] = $nmgp_chave_det;
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['cmp_acum']  = $nmgp_parm_acum;
       }   
       if (!isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['mostra_edit'])) 
       {
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['mostra_edit'] = "S";
       }
       if (isset($nmgp_lig_edit_lapis)) 
       {
          $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['mostra_edit'] = $nmgp_lig_edit_lapis;
           unset($GLOBALS["nmgp_lig_edit_lapis"]) ;  
           if (isset($_SESSION['nmgp_lig_edit_lapis'])) 
           {
               unset($_SESSION['nmgp_lig_edit_lapis']);
           }
       }
       if (isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true')
       {
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_outra_jan'] = true;
       }
       $nm_saida = "";
       if (isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['volta_redirect_apl']) && !empty($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['volta_redirect_apl']))
       {
           $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['volta_redirect_apl']; 
           $nm_apl_dependente = $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['volta_redirect_tp']; 
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['volta_redirect_apl'] = "";
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['volta_redirect_tp'] = "";
           $nm_url_saida = "grid_tbl_turma_fim.php"; 
       
       }
       elseif (substr($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opcao'], 0, 7) != "grafico" && $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opcao'] != "pdf" ) 
       {
           if (isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_outra_jan']) && $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_outra_jan'])
           {
               if ($nmgp_url_saida == "modal")
               {
                   $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_modal'] = true;
               }
               $nm_url_saida = "grid_tbl_turma_fim.php"; 
           }
           else
           {
               $nm_url_saida = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ""; 
               $nm_url_saida = str_replace("_fim.php", ".php", $nm_url_saida);
               if (!empty($nmgp_url_saida)) 
               { 
                   $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['retorno_cons'] = $nmgp_url_saida ; 
               } 
               if (!empty($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['retorno_cons'])) 
               { 
                   $nm_url_saida = $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['retorno_cons']  . "?script_case_init=" . NM_encode_input($script_case_init);  
                   $nm_apl_dependente = 1 ; 
               } 
               if (!empty($nm_url_saida)) 
               { 
                   $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $nm_url_saida ; 
               } 
               $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $nm_url_saida; 
               $nm_url_saida = "grid_tbl_turma_fim.php"; 
               $_SESSION['scriptcase']['sc_tp_saida'] = "P"; 
               if ($nm_apl_dependente == 1) 
               { 
                   $_SESSION['scriptcase']['sc_tp_saida'] = "D"; 
               } 
           } 
       }
// 
       if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && substr($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opcao'], 0, 7) != "grafico" && $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opcao'] != "pdf" ) 
       { 
            $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['menu_desenv'] = true;   
       } 
       if (isset($_GET["nmgp_parms_ret"])) 
       {
           $todo = explode(",", $nmgp_parms_ret);
           if (isset($sc_conv_var[$todo[2]]))
           {
               $todo[2] = $sc_conv_var[$todo[2]];
           }
           elseif (isset($sc_conv_var[strtolower($todo[2])]))
           {
               $todo[2] = $sc_conv_var[strtolower($todo[2])];
           }
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['form_psq_ret']  = $todo[0];
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['campo_psq_ret'] = $todo[1];
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['dado_psq_ret']  = $todo[2];
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['js_apos_busca'] = $nm_evt_ret_busca;
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opc_psq'] = true ;   
       } 
       elseif (!isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opc_psq']))
       {
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opc_psq'] = false ;   
       } 
       if ($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida_form'])
       {
           $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['mostra_edit'] = "N";   
           $_SESSION['scriptcase']['sc_tp_saida']  = $salva_tp_saida;
           $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $salva_url_saida;
       } 
       $GLOBALS["NM_ERRO_IBASE"] = 0;  
       if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
       { 
           $_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_turma'] = "on";
       } 
       if (isset($_GET['SC_Link_View']) && !empty($_GET['SC_Link_View']) && is_numeric($_GET['SC_Link_View']))
       { 
           $_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_turma'] = "on";
       } 
       if (!$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opc_psq']) 
       { 
          if (!isset($_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_turma']) || $_SESSION['scriptcase']['sc_apl_seg']['grid_tbl_turma'] != "on")
          { 
              $NM_Mens_Erro = $Nm_lang['lang_errm_unth_user'];
              $nm_botao_ok = ($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['iframe_menu']) ? false : true;
              if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
              {
                  foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
                  {
                      if (in_array("grid_tbl_turma", $apls_aba))
                      {
                          $nm_botao_ok = false;
                           break;
                      }
                  }
              }
?>
             <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
              <HTML>
               <HEAD>
                <TITLE></TITLE>
               <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
   <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}
?>
                <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>                <META http-equiv="Pragma" content="no-cache"/>
                <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $STR_schema_all ?>_grid.css" /> 
                <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $STR_schema_all ?>_grid<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
               </HEAD>
               <body class="scGridPage">
                <table align="center"><tr><td style="padding: 0"><div class="scGridBorder">
                <table style="width: 100%" class="scGridTabela"><tr class="scGridFieldOdd"><td class="scGridFieldOddFont" style="padding: 15px 30px; text-align: center">
                 <?php echo $NM_Mens_Erro; ?>
<?php
              if ($nm_botao_ok)
              {
?>
                <br />
                <form name="Fseg" method="post" 
                                    action="<?php echo $nm_url_saida; ?>" 
                                    target="_self"> 
                 <input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($script_case_init) ?>"/> 
                 <input type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id());?>"/>
                 <input type="submit" name="sc_sai_seg" value="OK"> 
                </form> 
<?php
              }
?>
                </td></tr></table>
                </div></td></tr></table>
<?php
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']))
              {
?>
<br /><br /><br />
<table align="center" style="width: 450px"><tr><td style="padding: 0"><div class="scGridBorder">
 <table style="width: 100%" class="scGridTabela">
  <tr class="scGridFieldOdd">
   <td class="scGridFieldOddFont" style="padding: 15px 30px">
    <?php echo $Nm_lang['lang_errm_unth_hwto']; ?>
   </td>
  </tr>
 </table>
</div></td></tr></table>
<?php
              }
?>
               </body>
              </HTML>
<?php
              exit;
          } 
       } 
       if (isset($_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_outra_jan']) && $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['sc_outra_jan'])
       {
           $nm_apl_dependente = 0;
       }
       $contr_grid_tbl_turma = new grid_tbl_turma_apl();

      if ('ajax_autocomp' == $nmgp_opcao)
      {
          $nmgp_opcao = 'busca';
          $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opcao'] = "busca";
          $contr_grid_tbl_turma->NM_ajax_flag = true;
          $contr_grid_tbl_turma->NM_ajax_opcao = $NM_ajax_opcao;
      }
      if ('ajax_filter_save' == $nmgp_opcao)
      {
          $nmgp_opcao = 'busca';
          $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opcao'] = "busca";
          $contr_grid_tbl_turma->NM_ajax_flag = true;
          $contr_grid_tbl_turma->NM_ajax_opcao = "ajax_filter_save";
      }
      if ('ajax_filter_delete' == $nmgp_opcao)
      {
          $nmgp_opcao = 'busca';
          $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opcao'] = "busca";
          $contr_grid_tbl_turma->NM_ajax_flag = true;
          $contr_grid_tbl_turma->NM_ajax_opcao = "ajax_filter_delete";
      }
      if ('ajax_filter_select' == $nmgp_opcao)
      {
          $nmgp_opcao = 'busca';
          $_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['opcao'] = "busca";
          $contr_grid_tbl_turma->NM_ajax_flag = true;
          $contr_grid_tbl_turma->NM_ajax_opcao = "ajax_filter_select";
      }
       $contr_grid_tbl_turma->controle();
   } 
   if (!$_SESSION['sc_session'][$script_case_init]['grid_tbl_turma']['embutida'] && $nmgp_opcao == "formphp")
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 0;  
       $contr_grid_tbl_turma = new grid_tbl_turma_apl();
       $contr_grid_tbl_turma->controle();
   } 
//
   function nm_limpa_str_grid_tbl_turma(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               foreach ($str as $x => $cada_str)
               {
                   $str[$x] = str_replace("@aspasd@", '"', $str[$x]);
                   $str[$x] = stripslashes($str[$x]);
               }
           }
           else
           {
               $str = str_replace("@aspasd@", '"', $str);
               $str = stripslashes($str);
           }
       }
   }
   function nm_protect_num_grid_tbl_turma($name, &$val)
   {
       if (empty($val))
       {
          return;
       }
       $Nm_numeric = array();
       $Nm_numeric[] = "id";
       $Nm_numeric[] = "tbl_curso_id";
       $Nm_numeric[] = "nivel";
       $Nm_numeric[] = "turno";
       $Nm_numeric[] = "qtdvagas";
       if (in_array($name, $Nm_numeric))
       {
           if (is_array($val))
           {
               foreach ($val as $cada_val)
               {
                  $tmp_pos = strpos($cada_val, "##@@");
                  if ($tmp_pos !== false)
                   {
                      $cada_val = substr($cada_val, 0, $tmp_pos);
                  }
                  for ($x = 0; $x < strlen($cada_val); $x++)
                  {
                      if (($cada_val[$x] < 0 || $cada_val[$x] > 9) && $cada_val[$x] != "."  && $cada_val[$x] != "," && $cada_val[$x] != "-")
                      {
                          $val = array();
                          return;
                      }
                   }
               }
               return;
           }
           $cada_val = $val;
           $tmp_pos = strpos($cada_val, "##@@");
           if ($tmp_pos !== false)
            {
               $cada_val = substr($cada_val, 0, $tmp_pos);
           }
           for ($x = 0; $x < strlen($cada_val); $x++)
           {
               if (($cada_val[$x] < 0 || $cada_val[$x] > 9) && $cada_val[$x] != "."  && $cada_val[$x] != "," && $cada_val[$x] != "-")
               {
                   $val = 0;
                   return;
               }
           }
       }
   }
   function grid_tbl_turma_pack_protect_string($sString)
   {
      $sString = (string) $sString;
      if (!empty($sString))
      {
         if (function_exists('NM_is_utf8') && NM_is_utf8($sString))
         {
             return $sString;
         }
         else
         {
             return htmlentities($sString, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         }
      }
      elseif ('0' === $sString || 0 === $sString)
      {
         return '0';
      }
      else
      {
         return '';
      }
   }
?>

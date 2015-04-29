<?php
//
class form_tbl_aluno_mob_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'         => '',
                                'param'          => array(),
                                'autoComp'       => '',
                                'rsSize'         => '',
                                'msgDisplay'     => '',
                                'errList'        => array(),
                                'fldList'        => array(),
                                'focus'          => '',
                                'navStatus'      => array(),
                                'navSummary'     => array(),
                                'redir'          => array(),
                                'blockDisplay'   => array(),
                                'fieldDisplay'   => array(),
                                'fieldLabel'     => array(),
                                'readOnly'       => array(),
                                'btnVars'        => array(),
                                'ajaxAlert'      => '',
                                'ajaxMessage'    => '',
                                'ajaxJavascript' => array(),
                                'buttonDisplay'  => array(),
                                'calendarReload' => false,
                                'quickSearchRes' => false,
                                'displayMsg'     => false,
                                'displayMsgTxt'  => '',
                                'dyn_search'     => array(),
                                'empty_filter'   => '',
                               );
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $id;
   var $matricula;
   var $nome;
   var $foto;
   var $foto_scfile_name;
   var $foto_ul_name;
   var $foto_scfile_type;
   var $foto_ul_type;
   var $foto_limpa;
   var $foto_salva;
   var $out_foto;
   var $out1_foto;
   var $sexo;
   var $sexo_1;
   var $estadocivil;
   var $estadocivil_1;
   var $datanascimento;
   var $cpf;
   var $rg;
   var $orgaoexpedidor;
   var $dataexpedicao;
   var $pne;
   var $formaingresso;
   var $formaingresso_1;
   var $dataformatura;
   var $login;
   var $senha;
   var $nomemae;
   var $nomepai;
   var $numerocel;
   var $numerotel;
   var $numeroprof;
   var $emailpessoal;
   var $emailprofissional;
   var $cep;
   var $logradouro;
   var $numero;
   var $complemento;
   var $bairro;
   var $observacao;
   var $anexos;
   var $anexos_scfile_name;
   var $anexos_ul_name;
   var $anexos_ul_type;
   var $anexos_limpa;
   var $anexos_salva;
   var $estados_id_nasc;
   var $estados_id_nasc_1;
   var $cidades_id_nasc;
   var $cidades_id_nasc_1;
   var $estados_id_res;
   var $estados_id_res_1;
   var $cidades_id_res;
   var $cidades_id_res_1;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $sc_insert_on;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['anexos']))
          {
              $this->anexos = $this->NM_ajax_info['param']['anexos'];
          }
          if (isset($this->NM_ajax_info['param']['anexos_limpa']))
          {
              $this->anexos_limpa = $this->NM_ajax_info['param']['anexos_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['anexos_salva']))
          {
              $this->anexos_salva = $this->NM_ajax_info['param']['anexos_salva'];
          }
          if (isset($this->NM_ajax_info['param']['anexos_ul_name']))
          {
              $this->anexos_ul_name = $this->NM_ajax_info['param']['anexos_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['anexos_ul_type']))
          {
              $this->anexos_ul_type = $this->NM_ajax_info['param']['anexos_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['bairro']))
          {
              $this->bairro = $this->NM_ajax_info['param']['bairro'];
          }
          if (isset($this->NM_ajax_info['param']['cep']))
          {
              $this->cep = $this->NM_ajax_info['param']['cep'];
          }
          if (isset($this->NM_ajax_info['param']['cidades_id_nasc']))
          {
              $this->cidades_id_nasc = $this->NM_ajax_info['param']['cidades_id_nasc'];
          }
          if (isset($this->NM_ajax_info['param']['cidades_id_res']))
          {
              $this->cidades_id_res = $this->NM_ajax_info['param']['cidades_id_res'];
          }
          if (isset($this->NM_ajax_info['param']['complemento']))
          {
              $this->complemento = $this->NM_ajax_info['param']['complemento'];
          }
          if (isset($this->NM_ajax_info['param']['cpf']))
          {
              $this->cpf = $this->NM_ajax_info['param']['cpf'];
          }
          if (isset($this->NM_ajax_info['param']['dataexpedicao']))
          {
              $this->dataexpedicao = $this->NM_ajax_info['param']['dataexpedicao'];
          }
          if (isset($this->NM_ajax_info['param']['dataformatura']))
          {
              $this->dataformatura = $this->NM_ajax_info['param']['dataformatura'];
          }
          if (isset($this->NM_ajax_info['param']['datanascimento']))
          {
              $this->datanascimento = $this->NM_ajax_info['param']['datanascimento'];
          }
          if (isset($this->NM_ajax_info['param']['emailpessoal']))
          {
              $this->emailpessoal = $this->NM_ajax_info['param']['emailpessoal'];
          }
          if (isset($this->NM_ajax_info['param']['emailprofissional']))
          {
              $this->emailprofissional = $this->NM_ajax_info['param']['emailprofissional'];
          }
          if (isset($this->NM_ajax_info['param']['estadocivil']))
          {
              $this->estadocivil = $this->NM_ajax_info['param']['estadocivil'];
          }
          if (isset($this->NM_ajax_info['param']['estados_id_nasc']))
          {
              $this->estados_id_nasc = $this->NM_ajax_info['param']['estados_id_nasc'];
          }
          if (isset($this->NM_ajax_info['param']['estados_id_res']))
          {
              $this->estados_id_res = $this->NM_ajax_info['param']['estados_id_res'];
          }
          if (isset($this->NM_ajax_info['param']['formaingresso']))
          {
              $this->formaingresso = $this->NM_ajax_info['param']['formaingresso'];
          }
          if (isset($this->NM_ajax_info['param']['foto']))
          {
              $this->foto = $this->NM_ajax_info['param']['foto'];
          }
          if (isset($this->NM_ajax_info['param']['foto_limpa']))
          {
              $this->foto_limpa = $this->NM_ajax_info['param']['foto_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['foto_salva']))
          {
              $this->foto_salva = $this->NM_ajax_info['param']['foto_salva'];
          }
          if (isset($this->NM_ajax_info['param']['foto_ul_name']))
          {
              $this->foto_ul_name = $this->NM_ajax_info['param']['foto_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['foto_ul_type']))
          {
              $this->foto_ul_type = $this->NM_ajax_info['param']['foto_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['id']))
          {
              $this->id = $this->NM_ajax_info['param']['id'];
          }
          if (isset($this->NM_ajax_info['param']['login']))
          {
              $this->login = $this->NM_ajax_info['param']['login'];
          }
          if (isset($this->NM_ajax_info['param']['logradouro']))
          {
              $this->logradouro = $this->NM_ajax_info['param']['logradouro'];
          }
          if (isset($this->NM_ajax_info['param']['matricula']))
          {
              $this->matricula = $this->NM_ajax_info['param']['matricula'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_fields']))
          {
              $this->nmgp_refresh_fields = $this->NM_ajax_info['param']['nmgp_refresh_fields'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['nome']))
          {
              $this->nome = $this->NM_ajax_info['param']['nome'];
          }
          if (isset($this->NM_ajax_info['param']['nomemae']))
          {
              $this->nomemae = $this->NM_ajax_info['param']['nomemae'];
          }
          if (isset($this->NM_ajax_info['param']['nomepai']))
          {
              $this->nomepai = $this->NM_ajax_info['param']['nomepai'];
          }
          if (isset($this->NM_ajax_info['param']['numero']))
          {
              $this->numero = $this->NM_ajax_info['param']['numero'];
          }
          if (isset($this->NM_ajax_info['param']['numerocel']))
          {
              $this->numerocel = $this->NM_ajax_info['param']['numerocel'];
          }
          if (isset($this->NM_ajax_info['param']['numeroprof']))
          {
              $this->numeroprof = $this->NM_ajax_info['param']['numeroprof'];
          }
          if (isset($this->NM_ajax_info['param']['numerotel']))
          {
              $this->numerotel = $this->NM_ajax_info['param']['numerotel'];
          }
          if (isset($this->NM_ajax_info['param']['observacao']))
          {
              $this->observacao = $this->NM_ajax_info['param']['observacao'];
          }
          if (isset($this->NM_ajax_info['param']['orgaoexpedidor']))
          {
              $this->orgaoexpedidor = $this->NM_ajax_info['param']['orgaoexpedidor'];
          }
          if (isset($this->NM_ajax_info['param']['pne']))
          {
              $this->pne = $this->NM_ajax_info['param']['pne'];
          }
          if (isset($this->NM_ajax_info['param']['rg']))
          {
              $this->rg = $this->NM_ajax_info['param']['rg'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['senha']))
          {
              $this->senha = $this->NM_ajax_info['param']['senha'];
          }
          if (isset($this->NM_ajax_info['param']['sexo']))
          {
              $this->sexo = $this->NM_ajax_info['param']['sexo'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todo = explode("?@?", $nmgp_parms);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_tbl_aluno_mob($cadapar[1]);
                 $this->$cadapar[0] = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todo = explode("?@?", $_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['parms']);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 $this->$cadapar[0] = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_tbl_aluno_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_tbl_aluno_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("pt_br");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['initialize'];
          $this->Db = $this->Ini->Db; 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['initialize']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['initialize'])
          {
              $_SESSION['scriptcase']['form_tbl_aluno_mob']['contr_erro'] = 'on';
 ?>
<script type="text/javascript">
jQuery(function($){
   $("#id_sc_field_cep").change(function(){
      var cep_code = $(this).val();
      if( cep_code.length <= 0 ) return;
      $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
         function(result){
            if( result.status!=1 ){
               alert(result.message || "Houve um erro desconhecido");
               return;
            }
            $("input#cep").val( result.code );
            $("input#id_sc_field_estados_id_res").val( result.state );
            $("input#cidade").val( result.city );
            $("input#id_sc_field_bairro").val( result.district );
            $("input#id_sc_field_logradouro").val( result.address );
            $("input#id_sc_field_estados_id_res").val( result.state );
         });
   });
});
</script>
<?php
$_SESSION['scriptcase']['form_tbl_aluno_mob']['contr_erro'] = 'off';
          }
          $this->Ini->init2();
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      $this->nm_data = new nm_data("pt_br");
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $this->Db = $this->Ini->Db; 
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status      = "scFormInputError";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);


      $this->arr_buttons['group_group_2']= array(
          'value'            => "" . $this->Ini->Nm_lang['lang_btns_options'] . "",
          'hint'             => "" . $this->Ini->Nm_lang['lang_btns_options'] . "",
          'type'             => "button",
          'display'          => "text_img",
          'display_position' => "text_right",
          'image'            => "scriptcase__NM__gear.png",
          'style'            => "default",
      );


      $_SESSION['scriptcase']['error_icon']['form_tbl_aluno_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_tbl_aluno_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_call'] : $this->Embutida_call;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      if (isset($this->NM_ajax_info['param']['foto_ul_name']) && '' != $this->NM_ajax_info['param']['foto_ul_name'])
      {
          $this->foto         = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['foto_ul_name'];
          $this->foto_scfile_name    = substr($this->NM_ajax_info['param']['foto_ul_name'], 12);
          $this->foto_scfile_type    = $this->NM_ajax_info['param']['foto_ul_type'];
          $this->foto_ul_name = $this->NM_ajax_info['param']['foto_ul_name'];
          $this->foto_ul_type = $this->NM_ajax_info['param']['foto_ul_type'];
      }
      elseif (isset($this->foto_ul_name) && '' != $this->foto_ul_name)
      {
          $this->foto      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->foto_ul_name;
          $this->foto_scfile_name = substr($this->foto_ul_name, 12);
          $this->foto_scfile_type = $this->foto_ul_type;
      }
      if (isset($this->NM_ajax_info['param']['anexos_ul_name']) && '' != $this->NM_ajax_info['param']['anexos_ul_name'])
      {
          $this->anexos         = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['anexos_ul_name'];
          $this->anexos_scfile_name    = substr($this->NM_ajax_info['param']['anexos_ul_name'], 12);
          $this->anexos_scfile_type    = $this->NM_ajax_info['param']['anexos_ul_type'];
          $this->anexos_ul_name = $this->NM_ajax_info['param']['anexos_ul_name'];
          $this->anexos_ul_type = $this->NM_ajax_info['param']['anexos_ul_type'];
      }
      elseif (isset($this->anexos_ul_name) && '' != $this->anexos_ul_name)
      {
          $this->anexos      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->anexos_ul_name;
          $this->anexos_scfile_name = substr($this->anexos_ul_name, 12);
          $this->anexos_scfile_type = $this->anexos_ul_type;
      }

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "on";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_tbl_aluno_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['exit'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['dados_form'];
          if (!isset($this->id)){$this->id = $this->nmgp_dados_form['id'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_tbl_aluno_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
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
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'aluno/form_tbl_aluno_mob_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_tbl_aluno_mob_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_tbl_aluno_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_tbl_aluno_mob_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

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

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'aluno/form_tbl_aluno_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_tbl_aluno_mob_erro.class.php"); 
      }
      $this->Erro      = new form_tbl_aluno_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opcao']))
         { 
             if ($this->id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_tbl_aluno_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
      $this->sc_insert_on = false;
      if (isset($this->matricula)) { $this->nm_limpa_alfa($this->matricula); }
      if (isset($this->nome)) { $this->nm_limpa_alfa($this->nome); }
      if (isset($this->sexo)) { $this->nm_limpa_alfa($this->sexo); }
      if (isset($this->estadocivil)) { $this->nm_limpa_alfa($this->estadocivil); }
      if (isset($this->cpf)) { $this->nm_limpa_alfa($this->cpf); }
      if (isset($this->rg)) { $this->nm_limpa_alfa($this->rg); }
      if (isset($this->orgaoexpedidor)) { $this->nm_limpa_alfa($this->orgaoexpedidor); }
      if (isset($this->pne)) { $this->nm_limpa_alfa($this->pne); }
      if (isset($this->formaingresso)) { $this->nm_limpa_alfa($this->formaingresso); }
      if (isset($this->login)) { $this->nm_limpa_alfa($this->login); }
      if (isset($this->senha)) { $this->nm_limpa_alfa($this->senha); }
      if (isset($this->nomemae)) { $this->nm_limpa_alfa($this->nomemae); }
      if (isset($this->nomepai)) { $this->nm_limpa_alfa($this->nomepai); }
      if (isset($this->numerocel)) { $this->nm_limpa_alfa($this->numerocel); }
      if (isset($this->numerotel)) { $this->nm_limpa_alfa($this->numerotel); }
      if (isset($this->numeroprof)) { $this->nm_limpa_alfa($this->numeroprof); }
      if (isset($this->emailpessoal)) { $this->nm_limpa_alfa($this->emailpessoal); }
      if (isset($this->emailprofissional)) { $this->nm_limpa_alfa($this->emailprofissional); }
      if (isset($this->cep)) { $this->nm_limpa_alfa($this->cep); }
      if (isset($this->logradouro)) { $this->nm_limpa_alfa($this->logradouro); }
      if (isset($this->numero)) { $this->nm_limpa_alfa($this->numero); }
      if (isset($this->complemento)) { $this->nm_limpa_alfa($this->complemento); }
      if (isset($this->bairro)) { $this->nm_limpa_alfa($this->bairro); }
      if (isset($this->observacao)) { $this->nm_limpa_alfa($this->observacao); }
      if (isset($this->estados_id_nasc)) { $this->nm_limpa_alfa($this->estados_id_nasc); }
      if (isset($this->cidades_id_nasc)) { $this->nm_limpa_alfa($this->cidades_id_nasc); }
      if (isset($this->estados_id_res)) { $this->nm_limpa_alfa($this->estados_id_res); }
      if (isset($this->cidades_id_res)) { $this->nm_limpa_alfa($this->cidades_id_res); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- datanascimento
      $this->field_config['datanascimento']                 = array();
      $this->field_config['datanascimento']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['datanascimento']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['datanascimento']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'datanascimento');
      //-- dataexpedicao
      $this->field_config['dataexpedicao']                 = array();
      $this->field_config['dataexpedicao']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['dataexpedicao']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['dataexpedicao']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'dataexpedicao');
      //-- dataformatura
      $this->field_config['dataformatura']                 = array();
      $this->field_config['dataformatura']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['dataformatura']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['dataformatura']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'dataformatura');
      //-- id
      $this->field_config['id']               = array();
      $this->field_config['id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['id']['symbol_dec'] = '';
      $this->field_config['id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Gera_log_access'] = false;
      }

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_matricula' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'matricula');
          }
          if ('validate_nome' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nome');
          }
          if ('validate_foto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'foto');
          }
          if ('validate_sexo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sexo');
          }
          if ('validate_estadocivil' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estadocivil');
          }
          if ('validate_datanascimento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'datanascimento');
          }
          if ('validate_cpf' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cpf');
          }
          if ('validate_rg' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'rg');
          }
          if ('validate_orgaoexpedidor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'orgaoexpedidor');
          }
          if ('validate_dataexpedicao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dataexpedicao');
          }
          if ('validate_estados_id_nasc' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estados_id_nasc');
          }
          if ('validate_cidades_id_nasc' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cidades_id_nasc');
          }
          if ('validate_pne' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pne');
          }
          if ('validate_formaingresso' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'formaingresso');
          }
          if ('validate_dataformatura' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dataformatura');
          }
          if ('validate_login' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'login');
          }
          if ('validate_senha' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'senha');
          }
          if ('validate_nomemae' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nomemae');
          }
          if ('validate_nomepai' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nomepai');
          }
          if ('validate_numerocel' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'numerocel');
          }
          if ('validate_numerotel' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'numerotel');
          }
          if ('validate_numeroprof' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'numeroprof');
          }
          if ('validate_emailpessoal' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emailpessoal');
          }
          if ('validate_emailprofissional' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emailprofissional');
          }
          if ('validate_cep' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cep');
          }
          if ('validate_logradouro' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'logradouro');
          }
          if ('validate_numero' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'numero');
          }
          if ('validate_complemento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'complemento');
          }
          if ('validate_bairro' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bairro');
          }
          if ('validate_estados_id_res' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estados_id_res');
          }
          if ('validate_cidades_id_res' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cidades_id_res');
          }
          if ('validate_observacao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'observacao');
          }
          if ('validate_anexos' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'anexos');
          }
          form_tbl_aluno_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form") 
      {
          $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_tbl_aluno_mob_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_tbl_aluno_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_tbl_aluno_mob_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && $this->nmgp_opcao != "menu_link")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_tbl_aluno_mob_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_tbl_aluno_mob_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
   }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
       if ($this->SC_log_atv)
       {
           $this->NM_gera_log_output();
       }
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_gera_log_insert($orig="Scriptcase", $evento="", $texto="")
   {
       $dt  = "'" . date('Y-m-d H:i:s') . "'";
       $usr = isset($_SESSION['usr_login']) ? $_SESSION['usr_login'] : "";
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_access))
       { 
           $dt  = "#" . date('Y-m-d H:i:s') . "#";
       } 
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_access))
       { 
           $comando = "INSERT INTO sc_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_tbl_aluno_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sc_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_tbl_aluno_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sc_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_tbl_aluno_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_tbl_aluno_mob_pack_ajax_response();
               exit; 
           }
       }
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'matricula':
               return "Matrícula";
               break;
           case 'nome':
               return "Nome";
               break;
           case 'foto':
               return "Foto";
               break;
           case 'sexo':
               return "Sexo";
               break;
           case 'estadocivil':
               return "Estado Civil";
               break;
           case 'datanascimento':
               return "Data de Nascimento";
               break;
           case 'cpf':
               return "CPF";
               break;
           case 'rg':
               return "RG";
               break;
           case 'orgaoexpedidor':
               return "Orgão Expedidor";
               break;
           case 'dataexpedicao':
               return "Data de Expedição";
               break;
           case 'estados_id_nasc':
               return "UF Nascimento";
               break;
           case 'cidades_id_nasc':
               return "Cidade";
               break;
           case 'pne':
               return "Necessidades Especiais";
               break;
           case 'formaingresso':
               return "Forma de Ingresso";
               break;
           case 'dataformatura':
               return "Data de Formatura";
               break;
           case 'login':
               return "Login";
               break;
           case 'senha':
               return "Senha";
               break;
           case 'nomemae':
               return "Nome da Mae";
               break;
           case 'nomepai':
               return "Nome do Pai";
               break;
           case 'numerocel':
               return "Número do Celular";
               break;
           case 'numerotel':
               return "Número do Telefone";
               break;
           case 'numeroprof':
               return "Número Profissional";
               break;
           case 'emailpessoal':
               return "E-mail Pessoal";
               break;
           case 'emailprofissional':
               return "E-mail Profissional";
               break;
           case 'cep':
               return "CEP";
               break;
           case 'logradouro':
               return "Logradouro";
               break;
           case 'numero':
               return "Número";
               break;
           case 'complemento':
               return "Complemento";
               break;
           case 'bairro':
               return "Bairro";
               break;
           case 'estados_id_res':
               return "Estado";
               break;
           case 'cidades_id_res':
               return "Cidade";
               break;
           case 'observacao':
               return "Observação";
               break;
           case 'anexos':
               return "Anexo";
               break;
           case 'id':
               return "Código";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();
      if ('' == $filtro || 'matricula' == $filtro)
        $this->ValidateField_matricula($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nome' == $filtro)
        $this->ValidateField_nome($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'foto' == $filtro)
        $this->ValidateField_foto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sexo' == $filtro)
        $this->ValidateField_sexo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estadocivil' == $filtro)
        $this->ValidateField_estadocivil($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'datanascimento' == $filtro)
        $this->ValidateField_datanascimento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cpf' == $filtro)
        $this->ValidateField_cpf($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'rg' == $filtro)
        $this->ValidateField_rg($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'orgaoexpedidor' == $filtro)
        $this->ValidateField_orgaoexpedidor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'dataexpedicao' == $filtro)
        $this->ValidateField_dataexpedicao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estados_id_nasc' == $filtro)
        $this->ValidateField_estados_id_nasc($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cidades_id_nasc' == $filtro)
        $this->ValidateField_cidades_id_nasc($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'pne' == $filtro)
        $this->ValidateField_pne($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'formaingresso' == $filtro)
        $this->ValidateField_formaingresso($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'dataformatura' == $filtro)
        $this->ValidateField_dataformatura($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'login' == $filtro)
        $this->ValidateField_login($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'senha' == $filtro)
        $this->ValidateField_senha($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nomemae' == $filtro)
        $this->ValidateField_nomemae($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nomepai' == $filtro)
        $this->ValidateField_nomepai($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'numerocel' == $filtro)
        $this->ValidateField_numerocel($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'numerotel' == $filtro)
        $this->ValidateField_numerotel($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'numeroprof' == $filtro)
        $this->ValidateField_numeroprof($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'emailpessoal' == $filtro)
        $this->ValidateField_emailpessoal($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'emailprofissional' == $filtro)
        $this->ValidateField_emailprofissional($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cep' == $filtro)
        $this->ValidateField_cep($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'logradouro' == $filtro)
        $this->ValidateField_logradouro($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'numero' == $filtro)
        $this->ValidateField_numero($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'complemento' == $filtro)
        $this->ValidateField_complemento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'bairro' == $filtro)
        $this->ValidateField_bairro($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estados_id_res' == $filtro)
        $this->ValidateField_estados_id_res($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cidades_id_res' == $filtro)
        $this->ValidateField_cidades_id_res($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'observacao' == $filtro)
        $this->ValidateField_observacao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'anexos' == $filtro)
        $this->ValidateField_anexos($Campos_Crit, $Campos_Falta, $Campos_Erros);
      $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
//-- converter datas   
      $this->nm_converte_datas();
//---
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_matricula(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->matricula) > 25) 
          { 
              $Campos_Crit .= "Matrícula " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['matricula']))
              {
                  $Campos_Erros['matricula'] = array();
              }
              $Campos_Erros['matricula'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['matricula']) || !is_array($this->NM_ajax_info['errList']['matricula']))
              {
                  $this->NM_ajax_info['errList']['matricula'] = array();
              }
              $this->NM_ajax_info['errList']['matricula'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_matricula

    function ValidateField_nome(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['nome']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['nome'] == "on")) 
      { 
          if ($this->nome == "")  
          { 
              $Campos_Falta[] =  "Nome" ; 
              if (!isset($Campos_Erros['nome']))
              {
                  $Campos_Erros['nome'] = array();
              }
              $Campos_Erros['nome'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['nome']) || !is_array($this->NM_ajax_info['errList']['nome']))
                  {
                      $this->NM_ajax_info['errList']['nome'] = array();
                  }
                  $this->NM_ajax_info['errList']['nome'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nome) > 45) 
          { 
              $Campos_Crit .= "Nome " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nome']))
              {
                  $Campos_Erros['nome'] = array();
              }
              $Campos_Erros['nome'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nome']) || !is_array($this->NM_ajax_info['errList']['nome']))
              {
                  $this->NM_ajax_info['errList']['nome'] = array();
              }
              $this->NM_ajax_info['errList']['nome'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_nome

    function ValidateField_foto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        if ($this->nmgp_opcao != "excluir")
        {
            if ("" != $this->foto && "S" != $this->foto_limpa && !$teste_validade->ArqExtensao($this->foto, array('jpg', 'jpeg', 'png')))
            {
                $Campos_Crit .= "Foto: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['foto']))
                {
                    $Campos_Erros['foto'] = array();
                }
                $Campos_Erros['foto'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['foto']) || !is_array($this->NM_ajax_info['errList']['foto']))
                {
                    $this->NM_ajax_info['errList']['foto'] = array();
                }
                $this->NM_ajax_info['errList']['foto'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
    } // ValidateField_foto

    function ValidateField_sexo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->sexo == "" && $this->nmgp_opcao != "excluir")
      { 
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['sexo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['sexo'] == "on")
        { 
          $Campos_Falta[] = "Sexo" ;
          if (!isset($Campos_Erros['sexo']))
          {
              $Campos_Erros['sexo'] = array();
          }
          $Campos_Erros['sexo'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['sexo']) || !is_array($this->NM_ajax_info['errList']['sexo']))
                  {
                      $this->NM_ajax_info['errList']['sexo'] = array();
                  }
                  $this->NM_ajax_info['errList']['sexo'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
        } 
      } 
    } // ValidateField_sexo

    function ValidateField_estadocivil(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->estadocivil == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      if ($this->estadocivil == "")  
      { 
          $this->estadocivil = 0;
          $this->sc_force_zero[] = 'estadocivil';
      } 
    } // ValidateField_estadocivil

    function ValidateField_datanascimento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->datanascimento, $this->field_config['datanascimento']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['datanascimento']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['datanascimento']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['datanascimento']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['datanascimento']['date_sep']) ; 
          if (trim($this->datanascimento) != "")  
          { 
              if ($teste_validade->Data($this->datanascimento, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Data de Nascimento; " ; 
                  if (!isset($Campos_Erros['datanascimento']))
                  {
                      $Campos_Erros['datanascimento'] = array();
                  }
                  $Campos_Erros['datanascimento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['datanascimento']) || !is_array($this->NM_ajax_info['errList']['datanascimento']))
                  {
                      $this->NM_ajax_info['errList']['datanascimento'] = array();
                  }
                  $this->NM_ajax_info['errList']['datanascimento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_datanascimento' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['datanascimento']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['datanascimento'] == "on")) 
           { 
              $Campos_Falta[] = "Data de Nascimento" ; 
              if (!isset($Campos_Erros['datanascimento']))
              {
                  $Campos_Erros['datanascimento'] = array();
              }
              $Campos_Erros['datanascimento'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['datanascimento']) || !is_array($this->NM_ajax_info['errList']['datanascimento']))
                  {
                      $this->NM_ajax_info['errList']['datanascimento'] = array();
                  }
                  $this->NM_ajax_info['errList']['datanascimento'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
          $this->field_config['datanascimento']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_datanascimento

    function ValidateField_cpf(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_ciccnpj($this->cpf) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->cpf) != "")  
          { 
              if ($teste_validade->CIC($this->cpf) == false)  
              { 
                  $Campos_Crit .= "CPF; " ; 
                  if (!isset($Campos_Erros['cpf']))
                  {
                      $Campos_Erros['cpf'] = array();
                  }
                  $Campos_Erros['cpf'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['cpf']) || !is_array($this->NM_ajax_info['errList']['cpf']))
                  {
                      $this->NM_ajax_info['errList']['cpf'] = array();
                  }
                  $this->NM_ajax_info['errList']['cpf'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_cpf

    function ValidateField_rg(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->rg) > 15) 
          { 
              $Campos_Crit .= "RG " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['rg']))
              {
                  $Campos_Erros['rg'] = array();
              }
              $Campos_Erros['rg'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['rg']) || !is_array($this->NM_ajax_info['errList']['rg']))
              {
                  $this->NM_ajax_info['errList']['rg'] = array();
              }
              $this->NM_ajax_info['errList']['rg'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_rg

    function ValidateField_orgaoexpedidor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->orgaoexpedidor) > 15) 
          { 
              $Campos_Crit .= "Orgão Expedidor " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['orgaoexpedidor']))
              {
                  $Campos_Erros['orgaoexpedidor'] = array();
              }
              $Campos_Erros['orgaoexpedidor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['orgaoexpedidor']) || !is_array($this->NM_ajax_info['errList']['orgaoexpedidor']))
              {
                  $this->NM_ajax_info['errList']['orgaoexpedidor'] = array();
              }
              $this->NM_ajax_info['errList']['orgaoexpedidor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_orgaoexpedidor

    function ValidateField_dataexpedicao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->dataexpedicao, $this->field_config['dataexpedicao']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['dataexpedicao']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['dataexpedicao']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['dataexpedicao']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['dataexpedicao']['date_sep']) ; 
          if (trim($this->dataexpedicao) != "")  
          { 
              if ($teste_validade->Data($this->dataexpedicao, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Data de Expedição; " ; 
                  if (!isset($Campos_Erros['dataexpedicao']))
                  {
                      $Campos_Erros['dataexpedicao'] = array();
                  }
                  $Campos_Erros['dataexpedicao'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dataexpedicao']) || !is_array($this->NM_ajax_info['errList']['dataexpedicao']))
                  {
                      $this->NM_ajax_info['errList']['dataexpedicao'] = array();
                  }
                  $this->NM_ajax_info['errList']['dataexpedicao'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['dataexpedicao']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_dataexpedicao

    function ValidateField_estados_id_nasc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->estados_id_nasc == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['estados_id_nasc']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['estados_id_nasc'] == "on"))
      {
          $Campos_Falta[] = "UF Nascimento" ; 
          if (!isset($Campos_Erros['estados_id_nasc']))
          {
              $Campos_Erros['estados_id_nasc'] = array();
          }
          $Campos_Erros['estados_id_nasc'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['estados_id_nasc']) || !is_array($this->NM_ajax_info['errList']['estados_id_nasc']))
          {
              $this->NM_ajax_info['errList']['estados_id_nasc'] = array();
          }
          $this->NM_ajax_info['errList']['estados_id_nasc'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->estados_id_nasc) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc']) && !in_array($this->estados_id_nasc, $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['estados_id_nasc']))
              {
                  $Campos_Erros['estados_id_nasc'] = array();
              }
              $Campos_Erros['estados_id_nasc'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['estados_id_nasc']) || !is_array($this->NM_ajax_info['errList']['estados_id_nasc']))
              {
                  $this->NM_ajax_info['errList']['estados_id_nasc'] = array();
              }
              $this->NM_ajax_info['errList']['estados_id_nasc'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_estados_id_nasc

    function ValidateField_cidades_id_nasc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->cidades_id_nasc) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc']) && !in_array($this->cidades_id_nasc, $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['cidades_id_nasc']))
                   {
                       $Campos_Erros['cidades_id_nasc'] = array();
                   }
                   $Campos_Erros['cidades_id_nasc'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['cidades_id_nasc']) || !is_array($this->NM_ajax_info['errList']['cidades_id_nasc']))
                   {
                       $this->NM_ajax_info['errList']['cidades_id_nasc'] = array();
                   }
                   $this->NM_ajax_info['errList']['cidades_id_nasc'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_cidades_id_nasc

    function ValidateField_pne(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->pne) > 45) 
          { 
              $Campos_Crit .= "Necessidades Especiais " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pne']))
              {
                  $Campos_Erros['pne'] = array();
              }
              $Campos_Erros['pne'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pne']) || !is_array($this->NM_ajax_info['errList']['pne']))
              {
                  $this->NM_ajax_info['errList']['pne'] = array();
              }
              $this->NM_ajax_info['errList']['pne'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_pne

    function ValidateField_formaingresso(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->formaingresso == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      if ($this->formaingresso == "")  
      { 
          $this->formaingresso = 0;
          $this->sc_force_zero[] = 'formaingresso';
      } 
    } // ValidateField_formaingresso

    function ValidateField_dataformatura(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->dataformatura, $this->field_config['dataformatura']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['dataformatura']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['dataformatura']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['dataformatura']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['dataformatura']['date_sep']) ; 
          if (trim($this->dataformatura) != "")  
          { 
              if ($teste_validade->Data($this->dataformatura, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Data de Formatura; " ; 
                  if (!isset($Campos_Erros['dataformatura']))
                  {
                      $Campos_Erros['dataformatura'] = array();
                  }
                  $Campos_Erros['dataformatura'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dataformatura']) || !is_array($this->NM_ajax_info['errList']['dataformatura']))
                  {
                      $this->NM_ajax_info['errList']['dataformatura'] = array();
                  }
                  $this->NM_ajax_info['errList']['dataformatura'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['dataformatura']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_dataformatura

    function ValidateField_login(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->login) > 45) 
          { 
              $Campos_Crit .= "Login " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['login']))
              {
                  $Campos_Erros['login'] = array();
              }
              $Campos_Erros['login'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['login']) || !is_array($this->NM_ajax_info['errList']['login']))
              {
                  $this->NM_ajax_info['errList']['login'] = array();
              }
              $this->NM_ajax_info['errList']['login'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_login

    function ValidateField_senha(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->senha) > 45) 
          { 
              $Campos_Crit .= "Senha " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['senha']))
              {
                  $Campos_Erros['senha'] = array();
              }
              $Campos_Erros['senha'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['senha']) || !is_array($this->NM_ajax_info['errList']['senha']))
              {
                  $this->NM_ajax_info['errList']['senha'] = array();
              }
              $this->NM_ajax_info['errList']['senha'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_senha

    function ValidateField_nomemae(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nomemae) > 45) 
          { 
              $Campos_Crit .= "Nome da Mae " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nomemae']))
              {
                  $Campos_Erros['nomemae'] = array();
              }
              $Campos_Erros['nomemae'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nomemae']) || !is_array($this->NM_ajax_info['errList']['nomemae']))
              {
                  $this->NM_ajax_info['errList']['nomemae'] = array();
              }
              $this->NM_ajax_info['errList']['nomemae'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_nomemae

    function ValidateField_nomepai(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nomepai) > 45) 
          { 
              $Campos_Crit .= "Nome do Pai " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nomepai']))
              {
                  $Campos_Erros['nomepai'] = array();
              }
              $Campos_Erros['nomepai'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nomepai']) || !is_array($this->NM_ajax_info['errList']['nomepai']))
              {
                  $this->NM_ajax_info['errList']['nomepai'] = array();
              }
              $this->NM_ajax_info['errList']['nomepai'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_nomepai

    function ValidateField_numerocel(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->nm_tira_mask($this->numerocel, "(99) 99999-9999", "(){}[].,;:-+/ "); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->numerocel) > 45) 
          { 
              $Campos_Crit .= "Número do Celular " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['numerocel']))
              {
                  $Campos_Erros['numerocel'] = array();
              }
              $Campos_Erros['numerocel'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['numerocel']) || !is_array($this->NM_ajax_info['errList']['numerocel']))
              {
                  $this->NM_ajax_info['errList']['numerocel'] = array();
              }
              $this->NM_ajax_info['errList']['numerocel'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_numerocel

    function ValidateField_numerotel(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->nm_tira_mask($this->numerotel, "(99) 9999-9999", "(){}[].,;:-+/ "); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->numerotel) > 45) 
          { 
              $Campos_Crit .= "Número do Telefone " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['numerotel']))
              {
                  $Campos_Erros['numerotel'] = array();
              }
              $Campos_Erros['numerotel'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['numerotel']) || !is_array($this->NM_ajax_info['errList']['numerotel']))
              {
                  $this->NM_ajax_info['errList']['numerotel'] = array();
              }
              $this->NM_ajax_info['errList']['numerotel'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_numerotel

    function ValidateField_numeroprof(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->nm_tira_mask($this->numeroprof, "(99) 9999-9999", "(){}[].,;:-+/ "); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->numeroprof) > 45) 
          { 
              $Campos_Crit .= "Número Profissional " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['numeroprof']))
              {
                  $Campos_Erros['numeroprof'] = array();
              }
              $Campos_Erros['numeroprof'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['numeroprof']) || !is_array($this->NM_ajax_info['errList']['numeroprof']))
              {
                  $this->NM_ajax_info['errList']['numeroprof'] = array();
              }
              $this->NM_ajax_info['errList']['numeroprof'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_numeroprof

    function ValidateField_emailpessoal(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->emailpessoal) != "")  
          { 
              if ($teste_validade->Email($this->emailpessoal) == false)  
              { 
                      $Campos_Crit .= "E-mail Pessoal; " ; 
                  if (!isset($Campos_Erros['emailpessoal']))
                  {
                      $Campos_Erros['emailpessoal'] = array();
                  }
                  $Campos_Erros['emailpessoal'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                      if (!isset($this->NM_ajax_info['errList']['emailpessoal']) || !is_array($this->NM_ajax_info['errList']['emailpessoal']))
                      {
                          $this->NM_ajax_info['errList']['emailpessoal'] = array();
                      }
                      $this->NM_ajax_info['errList']['emailpessoal'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_emailpessoal

    function ValidateField_emailprofissional(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->emailprofissional) != "")  
          { 
              if ($teste_validade->Email($this->emailprofissional) == false)  
              { 
                      $Campos_Crit .= "E-mail Profissional; " ; 
                  if (!isset($Campos_Erros['emailprofissional']))
                  {
                      $Campos_Erros['emailprofissional'] = array();
                  }
                  $Campos_Erros['emailprofissional'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                      if (!isset($this->NM_ajax_info['errList']['emailprofissional']) || !is_array($this->NM_ajax_info['errList']['emailprofissional']))
                      {
                          $this->NM_ajax_info['errList']['emailprofissional'] = array();
                      }
                      $this->NM_ajax_info['errList']['emailprofissional'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_emailprofissional

    function ValidateField_cep(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cep) > 15) 
          { 
              $Campos_Crit .= "CEP " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cep']))
              {
                  $Campos_Erros['cep'] = array();
              }
              $Campos_Erros['cep'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cep']) || !is_array($this->NM_ajax_info['errList']['cep']))
              {
                  $this->NM_ajax_info['errList']['cep'] = array();
              }
              $this->NM_ajax_info['errList']['cep'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cep

    function ValidateField_logradouro(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->logradouro) > 45) 
          { 
              $Campos_Crit .= "Logradouro " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['logradouro']))
              {
                  $Campos_Erros['logradouro'] = array();
              }
              $Campos_Erros['logradouro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['logradouro']) || !is_array($this->NM_ajax_info['errList']['logradouro']))
              {
                  $this->NM_ajax_info['errList']['logradouro'] = array();
              }
              $this->NM_ajax_info['errList']['logradouro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_logradouro

    function ValidateField_numero(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->numero) > 5) 
          { 
              $Campos_Crit .= "Número " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['numero']))
              {
                  $Campos_Erros['numero'] = array();
              }
              $Campos_Erros['numero'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['numero']) || !is_array($this->NM_ajax_info['errList']['numero']))
              {
                  $this->NM_ajax_info['errList']['numero'] = array();
              }
              $this->NM_ajax_info['errList']['numero'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_numero

    function ValidateField_complemento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->complemento) > 5) 
          { 
              $Campos_Crit .= "Complemento " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['complemento']))
              {
                  $Campos_Erros['complemento'] = array();
              }
              $Campos_Erros['complemento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['complemento']) || !is_array($this->NM_ajax_info['errList']['complemento']))
              {
                  $this->NM_ajax_info['errList']['complemento'] = array();
              }
              $this->NM_ajax_info['errList']['complemento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_complemento

    function ValidateField_bairro(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->bairro) > 45) 
          { 
              $Campos_Crit .= "Bairro " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['bairro']))
              {
                  $Campos_Erros['bairro'] = array();
              }
              $Campos_Erros['bairro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['bairro']) || !is_array($this->NM_ajax_info['errList']['bairro']))
              {
                  $this->NM_ajax_info['errList']['bairro'] = array();
              }
              $this->NM_ajax_info['errList']['bairro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_bairro

    function ValidateField_estados_id_res(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->estados_id_res) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res']) && !in_array($this->estados_id_res, $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['estados_id_res']))
                   {
                       $Campos_Erros['estados_id_res'] = array();
                   }
                   $Campos_Erros['estados_id_res'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['estados_id_res']) || !is_array($this->NM_ajax_info['errList']['estados_id_res']))
                   {
                       $this->NM_ajax_info['errList']['estados_id_res'] = array();
                   }
                   $this->NM_ajax_info['errList']['estados_id_res'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_estados_id_res

    function ValidateField_cidades_id_res(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->cidades_id_res) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res']) && !in_array($this->cidades_id_res, $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['cidades_id_res']))
                   {
                       $Campos_Erros['cidades_id_res'] = array();
                   }
                   $Campos_Erros['cidades_id_res'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['cidades_id_res']) || !is_array($this->NM_ajax_info['errList']['cidades_id_res']))
                   {
                       $this->NM_ajax_info['errList']['cidades_id_res'] = array();
                   }
                   $this->NM_ajax_info['errList']['cidades_id_res'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_cidades_id_res

    function ValidateField_observacao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->observacao) > 32767) 
          { 
              $Campos_Crit .= "Observação " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['observacao']))
              {
                  $Campos_Erros['observacao'] = array();
              }
              $Campos_Erros['observacao'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['observacao']) || !is_array($this->NM_ajax_info['errList']['observacao']))
              {
                  $this->NM_ajax_info['errList']['observacao'] = array();
              }
              $this->NM_ajax_info['errList']['observacao'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_observacao

    function ValidateField_anexos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        if ($this->nmgp_opcao != "excluir")
        {
            if ("" != $this->anexos && "S" != $this->anexos_limpa && !$teste_validade->ArqExtensao($this->anexos, array('doc', 'docsx', 'xls', 'xlsx', 'docx', '')))
            {
                $Campos_Crit .= "Anexo: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['anexos']))
                {
                    $Campos_Erros['anexos'] = array();
                }
                $Campos_Erros['anexos'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['anexos']) || !is_array($this->NM_ajax_info['errList']['anexos']))
                {
                    $this->NM_ajax_info['errList']['anexos'] = array();
                }
                $this->NM_ajax_info['errList']['anexos'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
    } // ValidateField_anexos
//
//--------------------------------------------------------------------------------------
   function upload_img_doc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros) 
   {
     global $nm_browser;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->foto == "none") 
          { 
              $this->foto = ""; 
          } 
          if ($this->foto != "") 
          { 
              if ($nm_browser == "Opera")  
              { 
                  $this->foto_scfile_type = substr($this->foto_scfile_type, 0, strpos($this->foto_scfile_type, ";")) ; 
              } 
              if ($this->foto_scfile_type == "image/pjpeg" || $this->foto_scfile_type == "image/jpeg" || $this->foto_scfile_type == "image/gif" ||  
                  $this->foto_scfile_type == "image/png" || $this->foto_scfile_type == "image/x-png" || $this->foto_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->foto))  
                  { 
                      if ($this->nmgp_opcao == "incluir")
                      { 
                          $this->SC_IMG_foto = $this->foto;
                      } 
                      else 
                      { 
                          $arq_foto = fopen($this->foto, "r") ; 
                          $reg_foto = fread($arq_foto, filesize($this->foto)) ; 
                          fclose($arq_foto) ;  
                      } 
                      $this->foto =  trim($this->foto_scfile_name) ;  
                      $dir_img = $this->Ini->root . $this->Ini->path_imagens . "imagensAluno" . "/"; 
                     if ($this->nmgp_opcao != "incluir")
                     { 
                      if (nm_mkdir($dir_img))  
                      { 
                          $arq_foto = fopen($dir_img . trim($this->foto_scfile_name), "w") ; 
                          fwrite($arq_foto, $reg_foto) ;  
                          fclose($arq_foto) ;  
                      } 
                      else 
                      { 
                          $Campos_Crit .= "Foto: " . $this->Ini->Nm_lang['lang_errm_ivdr']; 
                          $this->foto = "";
                          if (!isset($Campos_Erros['foto']))
                          {
                              $Campos_Erros['foto'] = array();
                          }
                          $Campos_Erros['foto'][] = $this->Ini->Nm_lang['lang_errm_ivdr'];
                          if (!isset($this->NM_ajax_info['errList']['foto']) || !is_array($this->NM_ajax_info['errList']['foto']))
                          {
                              $this->NM_ajax_info['errList']['foto'] = array();
                          }
                          $this->NM_ajax_info['errList']['foto'][] = $this->Ini->Nm_lang['lang_errm_ivdr'];
                      } 
                     } 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Foto " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->foto = "";
                      if (!isset($Campos_Erros['foto']))
                      {
                          $Campos_Erros['foto'] = array();
                      }
                      $Campos_Erros['foto'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['foto']) || !is_array($this->NM_ajax_info['errList']['foto']))
                      {
                          $this->NM_ajax_info['errList']['foto'] = array();
                      }
                      $this->NM_ajax_info['errList']['foto'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->foto = "" ; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Foto " . $this->Ini->Nm_lang['lang_errm_ivtp']; 
                      if (!isset($Campos_Erros['foto']))
                      {
                          $Campos_Erros['foto'] = array();
                      }
                      $Campos_Erros['foto'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                      if (!isset($this->NM_ajax_info['errList']['foto']) || !is_array($this->NM_ajax_info['errList']['foto']))
                      {
                          $this->NM_ajax_info['errList']['foto'] = array();
                      }
                      $this->NM_ajax_info['errList']['foto'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                  } 
              } 
          } 
          elseif (!empty($this->foto_salva) && $this->foto_limpa != "S")
          {
              $this->foto = $this->foto_salva;
          }
      } 
      elseif (!empty($this->foto_salva) && $this->foto_limpa != "S")
      {
          $this->foto = $this->foto_salva;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->anexos == "none") 
          { 
              $this->anexos = ""; 
          } 
          if ($this->anexos != "") 
          { 
              if (is_file($this->anexos))  
              { 
                  if ($this->nmgp_opcao == "incluir")
                  { 
                      $this->SC_DOC_anexos = $this->anexos;
                  } 
                  else 
                  { 
                      $arq_anexos = fopen($this->anexos, "r") ; 
                      $reg_anexos = fread($arq_anexos, filesize($this->anexos)) ; 
                      fclose($arq_anexos) ;  
                  } 
                  $this->anexos =  trim($this->anexos_scfile_name) ;  
                  $dir_doc = $this->Ini->path_doc . "anexosAlunos" . "/"; 
                 if ($this->nmgp_opcao != "incluir")
                 { 
                  if (nm_mkdir($dir_doc))  
                  { 
                      $arq_anexos = fopen($dir_doc . trim($this->anexos_scfile_name), "w") ; 
                      fwrite($arq_anexos, $reg_anexos) ;  
                      fclose($arq_anexos) ;  
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Anexo: " . $this->Ini->Nm_lang['lang_errm_ivdr']; 
                      if (!isset($Campos_Erros['anexos']))
                      {
                          $Campos_Erros['anexos'] = array();
                      }
                      $Campos_Erros['anexos'][] = $this->Ini->Nm_lang['lang_errm_ivdr'];
                      if (!isset($this->NM_ajax_info['errList']['anexos']) || !is_array($this->NM_ajax_info['errList']['anexos']))
                      {
                          $this->NM_ajax_info['errList']['anexos'] = array();
                      }
                      $this->NM_ajax_info['errList']['anexos'][] = $this->Ini->Nm_lang['lang_errm_ivdr'];
                  } 
                 } 
              } 
              else 
              { 
                  $Campos_Crit .= "Anexo " . $this->Ini->Nm_lang['lang_errm_upld']; 
                  $this->anexos = "";
                  if (!isset($Campos_Erros['anexos']))
                  {
                      $Campos_Erros['anexos'] = array();
                  }
                  $Campos_Erros['anexos'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  if (!isset($this->NM_ajax_info['errList']['anexos']) || !is_array($this->NM_ajax_info['errList']['anexos']))
                  {
                      $this->NM_ajax_info['errList']['anexos'] = array();
                  }
                  $this->NM_ajax_info['errList']['anexos'][] = $this->Ini->Nm_lang['lang_errm_upld'];
              } 
          } 
          elseif (!empty($this->anexos_salva) && $this->anexos_limpa != "S")
          {
              $this->anexos = $this->anexos_salva;
          }
      } 
      elseif (!empty($this->anexos_salva) && $this->anexos_limpa != "S")
      {
          $this->anexos = $this->anexos_salva;
      }
   }

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['matricula'] = $this->matricula;
    $this->nmgp_dados_form['nome'] = $this->nome;
    if (empty($this->foto))
    {
        $this->foto = $this->nmgp_dados_form['foto'];
    }
    $this->nmgp_dados_form['foto'] = $this->foto;
    $this->nmgp_dados_form['foto_limpa'] = $this->foto_limpa;
    $this->nmgp_dados_form['sexo'] = $this->sexo;
    $this->nmgp_dados_form['estadocivil'] = $this->estadocivil;
    $this->nmgp_dados_form['datanascimento'] = $this->datanascimento;
    $this->nmgp_dados_form['cpf'] = $this->cpf;
    $this->nmgp_dados_form['rg'] = $this->rg;
    $this->nmgp_dados_form['orgaoexpedidor'] = $this->orgaoexpedidor;
    $this->nmgp_dados_form['dataexpedicao'] = $this->dataexpedicao;
    $this->nmgp_dados_form['estados_id_nasc'] = $this->estados_id_nasc;
    $this->nmgp_dados_form['cidades_id_nasc'] = $this->cidades_id_nasc;
    $this->nmgp_dados_form['pne'] = $this->pne;
    $this->nmgp_dados_form['formaingresso'] = $this->formaingresso;
    $this->nmgp_dados_form['dataformatura'] = $this->dataformatura;
    $this->nmgp_dados_form['login'] = $this->login;
    $this->nmgp_dados_form['senha'] = $this->senha;
    $this->nmgp_dados_form['nomemae'] = $this->nomemae;
    $this->nmgp_dados_form['nomepai'] = $this->nomepai;
    $this->nmgp_dados_form['numerocel'] = $this->numerocel;
    $this->nmgp_dados_form['numerotel'] = $this->numerotel;
    $this->nmgp_dados_form['numeroprof'] = $this->numeroprof;
    $this->nmgp_dados_form['emailpessoal'] = $this->emailpessoal;
    $this->nmgp_dados_form['emailprofissional'] = $this->emailprofissional;
    $this->nmgp_dados_form['cep'] = $this->cep;
    $this->nmgp_dados_form['logradouro'] = $this->logradouro;
    $this->nmgp_dados_form['numero'] = $this->numero;
    $this->nmgp_dados_form['complemento'] = $this->complemento;
    $this->nmgp_dados_form['bairro'] = $this->bairro;
    $this->nmgp_dados_form['estados_id_res'] = $this->estados_id_res;
    $this->nmgp_dados_form['cidades_id_res'] = $this->cidades_id_res;
    $this->nmgp_dados_form['observacao'] = $this->observacao;
    if (empty($this->anexos))
    {
        $this->anexos = $this->nmgp_dados_form['anexos'];
    }
    $this->nmgp_dados_form['anexos'] = $this->anexos;
    $this->nmgp_dados_form['anexos_limpa'] = $this->anexos_limpa;
    $this->nmgp_dados_form['id'] = $this->id;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_data($this->datanascimento, $this->field_config['datanascimento']['date_sep']) ; 
      nm_limpa_ciccnpj($this->cpf) ; 
      nm_limpa_data($this->dataexpedicao, $this->field_config['dataexpedicao']['date_sep']) ; 
      nm_limpa_data($this->dataformatura, $this->field_config['dataformatura']['date_sep']) ; 
      $this->nm_tira_mask($this->numerocel, "(99) 99999-9999", "(){}[].,;:-+/ "); 
      $this->nm_tira_mask($this->numerotel, "(99) 9999-9999", "(){}[].,;:-+/ "); 
      $this->nm_tira_mask($this->numeroprof, "(99) 9999-9999", "(){}[].,;:-+/ "); 
      nm_limpa_numero($this->id, $this->field_config['id']['symbol_grp']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~ei', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "cpf")
      {
          nm_limpa_ciccnpj($this->cpf) ; 
      }
      if ($Nome_Campo == "numerocel")
      {
          $this->nm_tira_mask($this->numerocel, "(99) 99999-9999", "(){}[].,;:-+/ "); 
      }
      if ($Nome_Campo == "numerotel")
      {
          $this->nm_tira_mask($this->numerotel, "(99) 9999-9999", "(){}[].,;:-+/ "); 
      }
      if ($Nome_Campo == "numeroprof")
      {
          $this->nm_tira_mask($this->numeroprof, "(99) 9999-9999", "(){}[].,;:-+/ "); 
      }
      if ($Nome_Campo == "id")
      {
          nm_limpa_numero($this->id, $this->field_config['id']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if ((!empty($this->datanascimento) && 'null' != $this->datanascimento) || (!empty($format_fields) && isset($format_fields['datanascimento'])))
      {
          nm_volta_data($this->datanascimento, $this->field_config['datanascimento']['date_format']) ; 
          nmgp_Form_Datas($this->datanascimento, $this->field_config['datanascimento']['date_format'], $this->field_config['datanascimento']['date_sep']) ;  
      }
      elseif ('null' == $this->datanascimento || '' == $this->datanascimento)
      {
          $this->datanascimento = '';
      }
      if (!empty($this->cpf) || (!empty($format_fields) && isset($format_fields['cpf'])))
      {
          nmgp_Form_CicCnpj($this->cpf) ; 
      }
      if ((!empty($this->dataexpedicao) && 'null' != $this->dataexpedicao) || (!empty($format_fields) && isset($format_fields['dataexpedicao'])))
      {
          nm_volta_data($this->dataexpedicao, $this->field_config['dataexpedicao']['date_format']) ; 
          nmgp_Form_Datas($this->dataexpedicao, $this->field_config['dataexpedicao']['date_format'], $this->field_config['dataexpedicao']['date_sep']) ;  
      }
      elseif ('null' == $this->dataexpedicao || '' == $this->dataexpedicao)
      {
          $this->dataexpedicao = '';
      }
      if ((!empty($this->dataformatura) && 'null' != $this->dataformatura) || (!empty($format_fields) && isset($format_fields['dataformatura'])))
      {
          nm_volta_data($this->dataformatura, $this->field_config['dataformatura']['date_format']) ; 
          nmgp_Form_Datas($this->dataformatura, $this->field_config['dataformatura']['date_format'], $this->field_config['dataformatura']['date_sep']) ;  
      }
      elseif ('null' == $this->dataformatura || '' == $this->dataformatura)
      {
          $this->dataformatura = '';
      }
      if (!empty($this->numerocel) || (!empty($format_fields) && isset($format_fields['numerocel'])))
      {
          $this->nm_gera_mask($this->numerocel, "(99) 99999-9999"); 
      }
      if (!empty($this->numerotel) || (!empty($format_fields) && isset($format_fields['numerotel'])))
      {
          $this->nm_gera_mask($this->numerotel, "(99) 9999-9999"); 
      }
      if (!empty($this->numeroprof) || (!empty($format_fields) && isset($format_fields['numeroprof'])))
      {
          $this->nm_gera_mask($this->numeroprof, "(99) 9999-9999"); 
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
//
//-- 
   function nm_converte_datas($use_null = true)
   {
       $guarda_format_hora = $this->field_config['datanascimento']['date_format'];
      if ($this->datanascimento != "")  
      { 
          nm_conv_data($this->datanascimento, $this->field_config['datanascimento']['date_format']) ; 
          $this->datanascimento_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->datanascimento_hora = substr($this->datanascimento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->datanascimento_hora = substr($this->datanascimento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->datanascimento_hora = substr($this->datanascimento_hora, 0, -4);
          }
          $this->datanascimento .= " " . $this->datanascimento_hora ; 
      } 
      if ($this->datanascimento == "" && $use_null)  
      { 
          $this->datanascimento = "null" ; 
      } 
       $this->field_config['datanascimento']['date_format'] = $guarda_format_hora;
       $guarda_format_hora = $this->field_config['dataexpedicao']['date_format'];
      if ($this->dataexpedicao != "")  
      { 
          nm_conv_data($this->dataexpedicao, $this->field_config['dataexpedicao']['date_format']) ; 
          $this->dataexpedicao_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->dataexpedicao_hora = substr($this->dataexpedicao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dataexpedicao_hora = substr($this->dataexpedicao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->dataexpedicao_hora = substr($this->dataexpedicao_hora, 0, -4);
          }
          $this->dataexpedicao .= " " . $this->dataexpedicao_hora ; 
      } 
      if ($this->dataexpedicao == "" && $use_null)  
      { 
          $this->dataexpedicao = "null" ; 
      } 
       $this->field_config['dataexpedicao']['date_format'] = $guarda_format_hora;
       $guarda_format_hora = $this->field_config['dataformatura']['date_format'];
      if ($this->dataformatura != "")  
      { 
          nm_conv_data($this->dataformatura, $this->field_config['dataformatura']['date_format']) ; 
          $this->dataformatura_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->dataformatura_hora = substr($this->dataformatura_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dataformatura_hora = substr($this->dataformatura_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->dataformatura_hora = substr($this->dataformatura_hora, 0, -4);
          }
          $this->dataformatura .= " " . $this->dataformatura_hora ; 
      } 
      if ($this->dataformatura == "" && $use_null)  
      { 
          $this->dataformatura = "null" ; 
      } 
       $this->field_config['dataformatura']['date_format'] = $guarda_format_hora;
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
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
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_matricula();
          $this->ajax_return_values_nome();
          $this->ajax_return_values_foto();
          $this->ajax_return_values_sexo();
          $this->ajax_return_values_estadocivil();
          $this->ajax_return_values_datanascimento();
          $this->ajax_return_values_cpf();
          $this->ajax_return_values_rg();
          $this->ajax_return_values_orgaoexpedidor();
          $this->ajax_return_values_dataexpedicao();
          $this->ajax_return_values_estados_id_nasc();
          $this->ajax_return_values_cidades_id_nasc();
          $this->ajax_return_values_pne();
          $this->ajax_return_values_formaingresso();
          $this->ajax_return_values_dataformatura();
          $this->ajax_return_values_login();
          $this->ajax_return_values_senha();
          $this->ajax_return_values_nomemae();
          $this->ajax_return_values_nomepai();
          $this->ajax_return_values_numerocel();
          $this->ajax_return_values_numerotel();
          $this->ajax_return_values_numeroprof();
          $this->ajax_return_values_emailpessoal();
          $this->ajax_return_values_emailprofissional();
          $this->ajax_return_values_cep();
          $this->ajax_return_values_logradouro();
          $this->ajax_return_values_numero();
          $this->ajax_return_values_complemento();
          $this->ajax_return_values_bairro();
          $this->ajax_return_values_estados_id_res();
          $this->ajax_return_values_cidades_id_res();
          $this->ajax_return_values_observacao();
          $this->ajax_return_values_anexos();
          $this->ajax_return_values_id();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['id']['keyVal'] = form_tbl_aluno_mob_pack_protect_string($this->nmgp_dados_form['id']);
          }
   } // ajax_return_values

          //----- matricula
   function ajax_return_values_matricula($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("matricula", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->matricula);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['matricula'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nome
   function ajax_return_values_nome($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nome", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nome);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nome'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- foto
   function ajax_return_values_foto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("foto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->foto);
              $aLookup = array();
   $out_foto = '';
   $out1_foto = '';
   if ($this->foto != "" && $this->foto != "none")   
   { 
       $path_foto = $this->Ini->root . $this->Ini->path_imagens . "imagensAluno" . "/" . $this->foto;
       $md5_foto  = md5("imagensAluno" . $this->foto);
       if (is_file($path_foto))  
       { 
           $NM_ler_img = true;
           $out_foto = $this->Ini->path_imag_temp . "/sc_foto_" . $md5_foto . ".gif" ;  
           $out1_foto = $out_foto; 
           if (is_file($this->Ini->root . $out_foto))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_foto) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_foto = fopen($path_foto, "r") ; 
               $reg_foto = fread($tmp_foto, filesize($path_foto)) ; 
               fclose($tmp_foto) ;  
               $arq_foto = fopen($this->Ini->root . $out_foto, "w") ;  
               fwrite($arq_foto, $reg_foto) ;  
               fclose($arq_foto) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_foto);
           $this->nmgp_return_img['foto'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['foto'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $md5_foto  = md5($this->foto);
           $out_foto = $this->Ini->path_imag_temp . "/sc_foto_168168" . $md5_foto . ".gif" ;  
           if (is_file($this->Ini->root . $out_foto))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_foto) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_foto);
                   $sc_obj_img->setWidth(168);
                   $sc_obj_img->setHeight(168);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_foto);
               } 
               else 
               { 
                   $out_foto = $out1_foto;
               } 
           } 
       } 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['foto'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($sTmpValue),
               'imgFile' => $out_foto,
               'imgOrig' => $out1_foto,
               'keepImg' => $sKeepImage,
              );
          }
   }

          //----- sexo
   function ajax_return_values_sexo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sexo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sexo);
              $aLookup = array();
              $this->_tmp_lookup_sexo = $this->sexo;

$aLookup[] = array(form_tbl_aluno_mob_pack_protect_string('1') => form_tbl_aluno_mob_pack_protect_string("Masculino"));
$aLookup[] = array(form_tbl_aluno_mob_pack_protect_string('2') => form_tbl_aluno_mob_pack_protect_string("Feminino"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_sexo'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_sexo'][] = '2';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"sexo\"";
          if (isset($this->NM_ajax_info['select_html']['sexo']) && !empty($this->NM_ajax_info['select_html']['sexo']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['sexo'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->sexo == $sValue)
                  {
                      $this->_tmp_lookup_sexo = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['sexo'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['sexo']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['sexo']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['sexo']['labList'] = $aLabel;
          }
   }

          //----- estadocivil
   function ajax_return_values_estadocivil($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estadocivil", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estadocivil);
              $aLookup = array();
              $this->_tmp_lookup_estadocivil = $this->estadocivil;

$aLookup[] = array(form_tbl_aluno_mob_pack_protect_string('1') => form_tbl_aluno_mob_pack_protect_string("Solteiro"));
$aLookup[] = array(form_tbl_aluno_mob_pack_protect_string('2') => form_tbl_aluno_mob_pack_protect_string("Casado"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estadocivil'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estadocivil'][] = '2';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"estadocivil\"";
          if (isset($this->NM_ajax_info['select_html']['estadocivil']) && !empty($this->NM_ajax_info['select_html']['estadocivil']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['estadocivil'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->estadocivil == $sValue)
                  {
                      $this->_tmp_lookup_estadocivil = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['estadocivil'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['estadocivil']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['estadocivil']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['estadocivil']['labList'] = $aLabel;
          }
   }

          //----- datanascimento
   function ajax_return_values_datanascimento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("datanascimento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->datanascimento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['datanascimento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- cpf
   function ajax_return_values_cpf($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cpf", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cpf);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cpf'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- rg
   function ajax_return_values_rg($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("rg", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->rg);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['rg'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- orgaoexpedidor
   function ajax_return_values_orgaoexpedidor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("orgaoexpedidor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->orgaoexpedidor);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['orgaoexpedidor'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- dataexpedicao
   function ajax_return_values_dataexpedicao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dataexpedicao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dataexpedicao);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dataexpedicao'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- estados_id_nasc
   function ajax_return_values_estados_id_nasc($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estados_id_nasc", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estados_id_nasc);
              $aLookup = array();
              $this->_tmp_lookup_estados_id_nasc = $this->estados_id_nasc;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_datanascimento = $this->datanascimento;
   $old_value_cpf = $this->cpf;
   $old_value_dataexpedicao = $this->dataexpedicao;
   $old_value_dataformatura = $this->dataformatura;
   $old_value_numerocel = $this->numerocel;
   $old_value_numerotel = $this->numerotel;
   $old_value_numeroprof = $this->numeroprof;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_datanascimento = $this->datanascimento;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dataexpedicao = $this->dataexpedicao;
   $unformatted_value_dataformatura = $this->dataformatura;
   $unformatted_value_numerocel = $this->numerocel;
   $unformatted_value_numerotel = $this->numerotel;
   $unformatted_value_numeroprof = $this->numeroprof;

   $nm_comando = "SELECT id, nome 
FROM estados 
ORDER BY nome";

   $this->datanascimento = $old_value_datanascimento;
   $this->cpf = $old_value_cpf;
   $this->dataexpedicao = $old_value_dataexpedicao;
   $this->dataformatura = $old_value_dataformatura;
   $this->numerocel = $old_value_numerocel;
   $this->numerotel = $old_value_numerotel;
   $this->numeroprof = $old_value_numeroprof;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_tbl_aluno_mob_pack_protect_string($rs->fields[0]) => form_tbl_aluno_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"estados_id_nasc\"";
          if (isset($this->NM_ajax_info['select_html']['estados_id_nasc']) && !empty($this->NM_ajax_info['select_html']['estados_id_nasc']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['estados_id_nasc'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->estados_id_nasc == $sValue)
                  {
                      $this->_tmp_lookup_estados_id_nasc = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['estados_id_nasc'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['estados_id_nasc']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['estados_id_nasc']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['estados_id_nasc']['labList'] = $aLabel;
          }
   }

          //----- cidades_id_nasc
   function ajax_return_values_cidades_id_nasc($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cidades_id_nasc", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cidades_id_nasc);
              $aLookup = array();
              $this->_tmp_lookup_cidades_id_nasc = $this->cidades_id_nasc;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc'] = array(); 
}
if ($this->estados_id_nasc != "")
{ 
   $this->nm_clear_val("estados_id_nasc");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_datanascimento = $this->datanascimento;
   $old_value_cpf = $this->cpf;
   $old_value_dataexpedicao = $this->dataexpedicao;
   $old_value_dataformatura = $this->dataformatura;
   $old_value_numerocel = $this->numerocel;
   $old_value_numerotel = $this->numerotel;
   $old_value_numeroprof = $this->numeroprof;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_datanascimento = $this->datanascimento;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dataexpedicao = $this->dataexpedicao;
   $unformatted_value_dataformatura = $this->dataformatura;
   $unformatted_value_numerocel = $this->numerocel;
   $unformatted_value_numerotel = $this->numerotel;
   $unformatted_value_numeroprof = $this->numeroprof;

   $nm_comando = "SELECT id, nome 
FROM cidades WHERE estados_id = $this->estados_id_nasc
ORDER BY nome";

   $this->datanascimento = $old_value_datanascimento;
   $this->cpf = $old_value_cpf;
   $this->dataexpedicao = $old_value_dataexpedicao;
   $this->dataformatura = $old_value_dataformatura;
   $this->numerocel = $old_value_numerocel;
   $this->numerotel = $old_value_numerotel;
   $this->numeroprof = $old_value_numeroprof;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_tbl_aluno_mob_pack_protect_string($rs->fields[0]) => form_tbl_aluno_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
} 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"cidades_id_nasc\"";
          if (isset($this->NM_ajax_info['select_html']['cidades_id_nasc']) && !empty($this->NM_ajax_info['select_html']['cidades_id_nasc']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['cidades_id_nasc'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->cidades_id_nasc == $sValue)
                  {
                      $this->_tmp_lookup_cidades_id_nasc = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['cidades_id_nasc'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['cidades_id_nasc']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['cidades_id_nasc']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['cidades_id_nasc']['labList'] = $aLabel;
          }
   }

          //----- pne
   function ajax_return_values_pne($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pne", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pne);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pne'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- formaingresso
   function ajax_return_values_formaingresso($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("formaingresso", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->formaingresso);
              $aLookup = array();
              $this->_tmp_lookup_formaingresso = $this->formaingresso;

$aLookup[] = array(form_tbl_aluno_mob_pack_protect_string('1') => form_tbl_aluno_mob_pack_protect_string("Bolsista"));
$aLookup[] = array(form_tbl_aluno_mob_pack_protect_string('2') => form_tbl_aluno_mob_pack_protect_string("Gratuíto"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_formaingresso'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_formaingresso'][] = '2';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"formaingresso\"";
          if (isset($this->NM_ajax_info['select_html']['formaingresso']) && !empty($this->NM_ajax_info['select_html']['formaingresso']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['formaingresso'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->formaingresso == $sValue)
                  {
                      $this->_tmp_lookup_formaingresso = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['formaingresso'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['formaingresso']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['formaingresso']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['formaingresso']['labList'] = $aLabel;
          }
   }

          //----- dataformatura
   function ajax_return_values_dataformatura($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dataformatura", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dataformatura);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dataformatura'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- login
   function ajax_return_values_login($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("login", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->login);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['login'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- senha
   function ajax_return_values_senha($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("senha", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->senha);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['senha'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array(''),
              );
          }
   }

          //----- nomemae
   function ajax_return_values_nomemae($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nomemae", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nomemae);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nomemae'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nomepai
   function ajax_return_values_nomepai($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nomepai", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nomepai);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nomepai'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- numerocel
   function ajax_return_values_numerocel($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("numerocel", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->numerocel);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['numerocel'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- numerotel
   function ajax_return_values_numerotel($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("numerotel", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->numerotel);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['numerotel'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- numeroprof
   function ajax_return_values_numeroprof($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("numeroprof", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->numeroprof);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['numeroprof'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- emailpessoal
   function ajax_return_values_emailpessoal($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emailpessoal", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emailpessoal);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emailpessoal'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- emailprofissional
   function ajax_return_values_emailprofissional($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emailprofissional", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emailprofissional);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emailprofissional'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- cep
   function ajax_return_values_cep($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cep", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cep);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cep'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- logradouro
   function ajax_return_values_logradouro($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("logradouro", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->logradouro);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['logradouro'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- numero
   function ajax_return_values_numero($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("numero", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->numero);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['numero'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- complemento
   function ajax_return_values_complemento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("complemento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->complemento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['complemento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- bairro
   function ajax_return_values_bairro($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("bairro", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->bairro);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['bairro'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- estados_id_res
   function ajax_return_values_estados_id_res($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estados_id_res", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estados_id_res);
              $aLookup = array();
              $this->_tmp_lookup_estados_id_res = $this->estados_id_res;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_datanascimento = $this->datanascimento;
   $old_value_cpf = $this->cpf;
   $old_value_dataexpedicao = $this->dataexpedicao;
   $old_value_dataformatura = $this->dataformatura;
   $old_value_numerocel = $this->numerocel;
   $old_value_numerotel = $this->numerotel;
   $old_value_numeroprof = $this->numeroprof;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_datanascimento = $this->datanascimento;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dataexpedicao = $this->dataexpedicao;
   $unformatted_value_dataformatura = $this->dataformatura;
   $unformatted_value_numerocel = $this->numerocel;
   $unformatted_value_numerotel = $this->numerotel;
   $unformatted_value_numeroprof = $this->numeroprof;

   $nm_comando = "SELECT id, nome 
FROM estados 
ORDER BY nome";

   $this->datanascimento = $old_value_datanascimento;
   $this->cpf = $old_value_cpf;
   $this->dataexpedicao = $old_value_dataexpedicao;
   $this->dataformatura = $old_value_dataformatura;
   $this->numerocel = $old_value_numerocel;
   $this->numerotel = $old_value_numerotel;
   $this->numeroprof = $old_value_numeroprof;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_tbl_aluno_mob_pack_protect_string($rs->fields[0]) => form_tbl_aluno_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"estados_id_res\"";
          if (isset($this->NM_ajax_info['select_html']['estados_id_res']) && !empty($this->NM_ajax_info['select_html']['estados_id_res']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['estados_id_res'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->estados_id_res == $sValue)
                  {
                      $this->_tmp_lookup_estados_id_res = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['estados_id_res'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['estados_id_res']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['estados_id_res']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['estados_id_res']['labList'] = $aLabel;
          }
   }

          //----- cidades_id_res
   function ajax_return_values_cidades_id_res($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cidades_id_res", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cidades_id_res);
              $aLookup = array();
              $this->_tmp_lookup_cidades_id_res = $this->cidades_id_res;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res'] = array(); 
}
if ($this->estados_id_res != "")
{ 
   $this->nm_clear_val("estados_id_res");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_datanascimento = $this->datanascimento;
   $old_value_cpf = $this->cpf;
   $old_value_dataexpedicao = $this->dataexpedicao;
   $old_value_dataformatura = $this->dataformatura;
   $old_value_numerocel = $this->numerocel;
   $old_value_numerotel = $this->numerotel;
   $old_value_numeroprof = $this->numeroprof;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_datanascimento = $this->datanascimento;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dataexpedicao = $this->dataexpedicao;
   $unformatted_value_dataformatura = $this->dataformatura;
   $unformatted_value_numerocel = $this->numerocel;
   $unformatted_value_numerotel = $this->numerotel;
   $unformatted_value_numeroprof = $this->numeroprof;

   $nm_comando = "SELECT id, nome 
FROM cidades WHERE estados_id = $this->estados_id_res
ORDER BY nome";

   $this->datanascimento = $old_value_datanascimento;
   $this->cpf = $old_value_cpf;
   $this->dataexpedicao = $old_value_dataexpedicao;
   $this->dataformatura = $old_value_dataformatura;
   $this->numerocel = $old_value_numerocel;
   $this->numerotel = $old_value_numerotel;
   $this->numeroprof = $old_value_numeroprof;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_tbl_aluno_mob_pack_protect_string($rs->fields[0]) => form_tbl_aluno_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
} 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"cidades_id_res\"";
          if (isset($this->NM_ajax_info['select_html']['cidades_id_res']) && !empty($this->NM_ajax_info['select_html']['cidades_id_res']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['cidades_id_res'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->cidades_id_res == $sValue)
                  {
                      $this->_tmp_lookup_cidades_id_res = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['cidades_id_res'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['cidades_id_res']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['cidades_id_res']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['cidades_id_res']['labList'] = $aLabel;
          }
   }

          //----- observacao
   function ajax_return_values_observacao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("observacao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->observacao);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['observacao'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- anexos
   function ajax_return_values_anexos($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("anexos", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->anexos);
              $aLookup = array();
              $tmp_file_anexos = trim(NM_charset_to_utf8($this->anexos));
              $tmp_icon_anexos = '';
              if ('' != $tmp_file_anexos)
              {
                  $tmp_icon_anexos = $this->gera_icone($tmp_file_anexos);
              }
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['anexos'] = array(
                       'row'    => '',
               'type'    => 'documento',
               'valList' => array($sTmpValue),
               'docLink' => "<a href=\"javascript:nm_mostra_doc('1', '" . str_replace("'", "\'", trim($tmp_file_anexos)) . "', 'form_tbl_aluno')\">" . $tmp_file_anexos . "</a>",
               'docIcon' => $tmp_icon_anexos,
              );
          }
   }

          //----- id
   function ajax_return_values_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['id'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros

   function nm_acessa_banco() 
   { 
      global  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      $this->SC_log_atv = false;
      if ("alterar" == $this->nmgp_opcao || "excluir" == $this->nmgp_opcao)
      {
          $this->NM_gera_log_key($this->nmgp_opcao);
      }
      if ("alterar" == $this->nmgp_opcao || "excluir" == $this->nmgp_opcao)
      {
          $this->NM_gera_log_old();
      }
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      $SC_tem_cmp_update = true; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Db->BeginTrans(); 
          $this->Ini->sc_tem_trans_banco = true; 
      } 
      $NM_val_form['matricula'] = $this->matricula;
      $NM_val_form['nome'] = $this->nome;
      $NM_val_form['foto'] = $this->foto;
      $NM_val_form['sexo'] = $this->sexo;
      $NM_val_form['estadocivil'] = $this->estadocivil;
      $NM_val_form['datanascimento'] = $this->datanascimento;
      $NM_val_form['cpf'] = $this->cpf;
      $NM_val_form['rg'] = $this->rg;
      $NM_val_form['orgaoexpedidor'] = $this->orgaoexpedidor;
      $NM_val_form['dataexpedicao'] = $this->dataexpedicao;
      $NM_val_form['estados_id_nasc'] = $this->estados_id_nasc;
      $NM_val_form['cidades_id_nasc'] = $this->cidades_id_nasc;
      $NM_val_form['pne'] = $this->pne;
      $NM_val_form['formaingresso'] = $this->formaingresso;
      $NM_val_form['dataformatura'] = $this->dataformatura;
      $NM_val_form['login'] = $this->login;
      $NM_val_form['senha'] = $this->senha;
      $NM_val_form['nomemae'] = $this->nomemae;
      $NM_val_form['nomepai'] = $this->nomepai;
      $NM_val_form['numerocel'] = $this->numerocel;
      $NM_val_form['numerotel'] = $this->numerotel;
      $NM_val_form['numeroprof'] = $this->numeroprof;
      $NM_val_form['emailpessoal'] = $this->emailpessoal;
      $NM_val_form['emailprofissional'] = $this->emailprofissional;
      $NM_val_form['cep'] = $this->cep;
      $NM_val_form['logradouro'] = $this->logradouro;
      $NM_val_form['numero'] = $this->numero;
      $NM_val_form['complemento'] = $this->complemento;
      $NM_val_form['bairro'] = $this->bairro;
      $NM_val_form['estados_id_res'] = $this->estados_id_res;
      $NM_val_form['cidades_id_res'] = $this->cidades_id_res;
      $NM_val_form['observacao'] = $this->observacao;
      $NM_val_form['anexos'] = $this->anexos;
      $NM_val_form['id'] = $this->id;
      if ($this->id == "")  
      { 
          $this->id = 0;
      } 
      if ($this->sexo == "")  
      { 
          $this->sexo = 0;
          $this->sc_force_zero[] = 'sexo';
      } 
      if ($this->estadocivil == "")  
      { 
          $this->estadocivil = 0;
          $this->sc_force_zero[] = 'estadocivil';
      } 
      if ($this->formaingresso == "")  
      { 
          $this->formaingresso = 0;
          $this->sc_force_zero[] = 'formaingresso';
      } 
      if ($this->estados_id_nasc == "")  
      { 
          $this->estados_id_nasc = 0;
          $this->sc_force_zero[] = 'estados_id_nasc';
      } 
      if ($this->cidades_id_nasc == "")  
      { 
          $this->cidades_id_nasc = 0;
          $this->sc_force_zero[] = 'cidades_id_nasc';
      } 
      if ($this->estados_id_res == "")  
      { 
          $this->estados_id_res = 0;
          $this->sc_force_zero[] = 'estados_id_res';
      } 
      if ($this->cidades_id_res == "")  
      { 
          $this->cidades_id_res = 0;
          $this->sc_force_zero[] = 'cidades_id_res';
      } 
      $nm_bases_lob_geral = $this->Ini->nm_bases_ibase;
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->matricula_before_qstr = $this->matricula;
          $this->matricula = substr($this->Db->qstr($this->matricula), 1, -1); 
          if ($this->matricula == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->matricula = "null"; 
              $NM_val_null[] = "matricula";
          } 
          $this->nome_before_qstr = $this->nome;
          $this->nome = substr($this->Db->qstr($this->nome), 1, -1); 
          if ($this->nome == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nome = "null"; 
              $NM_val_null[] = "nome";
          } 
          $this->foto_before_qstr = $this->foto;
          $this->foto = substr($this->Db->qstr($this->foto), 1, -1); 
          if ($this->foto == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->foto = "null"; 
              $NM_val_null[] = "foto";
          } 
          if ($this->datanascimento == "")  
          { 
              $this->datanascimento = "null"; 
              $NM_val_null[] = "datanascimento";
          } 
          $this->cpf_before_qstr = $this->cpf;
          $this->cpf = substr($this->Db->qstr($this->cpf), 1, -1); 
          if ($this->cpf == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cpf = "null"; 
              $NM_val_null[] = "cpf";
          } 
          $this->rg_before_qstr = $this->rg;
          $this->rg = substr($this->Db->qstr($this->rg), 1, -1); 
          if ($this->rg == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->rg = "null"; 
              $NM_val_null[] = "rg";
          } 
          $this->orgaoexpedidor_before_qstr = $this->orgaoexpedidor;
          $this->orgaoexpedidor = substr($this->Db->qstr($this->orgaoexpedidor), 1, -1); 
          if ($this->orgaoexpedidor == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->orgaoexpedidor = "null"; 
              $NM_val_null[] = "orgaoexpedidor";
          } 
          if ($this->dataexpedicao == "")  
          { 
              $this->dataexpedicao = "null"; 
              $NM_val_null[] = "dataexpedicao";
          } 
          $this->pne_before_qstr = $this->pne;
          $this->pne = substr($this->Db->qstr($this->pne), 1, -1); 
          if ($this->pne == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pne = "null"; 
              $NM_val_null[] = "pne";
          } 
          if ($this->dataformatura == "")  
          { 
              $this->dataformatura = "null"; 
              $NM_val_null[] = "dataformatura";
          } 
          $this->login_before_qstr = $this->login;
          $this->login = substr($this->Db->qstr($this->login), 1, -1); 
          if ($this->login == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->login = "null"; 
              $NM_val_null[] = "login";
          } 
          $this->senha_before_qstr = $this->senha;
          $this->senha = substr($this->Db->qstr($this->senha), 1, -1); 
          if ($this->senha == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->senha = "null"; 
              $NM_val_null[] = "senha";
          } 
          $this->nomemae_before_qstr = $this->nomemae;
          $this->nomemae = substr($this->Db->qstr($this->nomemae), 1, -1); 
          if ($this->nomemae == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nomemae = "null"; 
              $NM_val_null[] = "nomemae";
          } 
          $this->nomepai_before_qstr = $this->nomepai;
          $this->nomepai = substr($this->Db->qstr($this->nomepai), 1, -1); 
          if ($this->nomepai == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nomepai = "null"; 
              $NM_val_null[] = "nomepai";
          } 
          $this->numerocel_before_qstr = $this->numerocel;
          $this->numerocel = substr($this->Db->qstr($this->numerocel), 1, -1); 
          if ($this->numerocel == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->numerocel = "null"; 
              $NM_val_null[] = "numerocel";
          } 
          $this->numerotel_before_qstr = $this->numerotel;
          $this->numerotel = substr($this->Db->qstr($this->numerotel), 1, -1); 
          if ($this->numerotel == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->numerotel = "null"; 
              $NM_val_null[] = "numerotel";
          } 
          $this->numeroprof_before_qstr = $this->numeroprof;
          $this->numeroprof = substr($this->Db->qstr($this->numeroprof), 1, -1); 
          if ($this->numeroprof == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->numeroprof = "null"; 
              $NM_val_null[] = "numeroprof";
          } 
          $this->emailpessoal_before_qstr = $this->emailpessoal;
          $this->emailpessoal = substr($this->Db->qstr($this->emailpessoal), 1, -1); 
          if ($this->emailpessoal == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emailpessoal = "null"; 
              $NM_val_null[] = "emailpessoal";
          } 
          $this->emailprofissional_before_qstr = $this->emailprofissional;
          $this->emailprofissional = substr($this->Db->qstr($this->emailprofissional), 1, -1); 
          if ($this->emailprofissional == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emailprofissional = "null"; 
              $NM_val_null[] = "emailprofissional";
          } 
          $this->cep_before_qstr = $this->cep;
          $this->cep = substr($this->Db->qstr($this->cep), 1, -1); 
          if ($this->cep == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cep = "null"; 
              $NM_val_null[] = "cep";
          } 
          $this->logradouro_before_qstr = $this->logradouro;
          $this->logradouro = substr($this->Db->qstr($this->logradouro), 1, -1); 
          if ($this->logradouro == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->logradouro = "null"; 
              $NM_val_null[] = "logradouro";
          } 
          $this->numero_before_qstr = $this->numero;
          $this->numero = substr($this->Db->qstr($this->numero), 1, -1); 
          if ($this->numero == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->numero = "null"; 
              $NM_val_null[] = "numero";
          } 
          $this->complemento_before_qstr = $this->complemento;
          $this->complemento = substr($this->Db->qstr($this->complemento), 1, -1); 
          if ($this->complemento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->complemento = "null"; 
              $NM_val_null[] = "complemento";
          } 
          $this->bairro_before_qstr = $this->bairro;
          $this->bairro = substr($this->Db->qstr($this->bairro), 1, -1); 
          if ($this->bairro == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->bairro = "null"; 
              $NM_val_null[] = "bairro";
          } 
          $this->observacao_before_qstr = $this->observacao;
          $this->observacao = substr($this->Db->qstr($this->observacao), 1, -1); 
          if ($this->observacao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->observacao = "null"; 
              $NM_val_null[] = "observacao";
          } 
          $this->anexos_original_filename = $this->anexos; 
          $this->anexos_before_qstr = $this->anexos;
          $this->anexos = substr($this->Db->qstr($this->anexos), 1, -1); 
          if ($this->anexos == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->anexos = "null"; 
              $NM_val_null[] = "anexos";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_tbl_aluno_mob_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where (matricula = '" . $this->matricula . "') AND (id <> $this->id)";
              $rsUni = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where (matricula = '" . $this->matricula . "') AND (id <> $this->id)");
              if (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_ukey'] . " Matrícula"); 
                  $this->nmgp_opcao = "nada"; 
                  $aUpdateOk[] = 'matricula';
              }
              $rsUni->Close();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              $comando_oracle = "";  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET matricula = '$this->matricula', nome = '$this->nome', sexo = $this->sexo, estadoCivil = $this->estadocivil, dataNascimento = #$this->datanascimento#, cpf = '$this->cpf', rg = '$this->rg', orgaoExpedidor = '$this->orgaoexpedidor', dataExpedicao = #$this->dataexpedicao#, pne = '$this->pne', formaIngresso = $this->formaingresso, dataFormatura = #$this->dataformatura#, login = '$this->login', nomeMae = '$this->nomemae', nomePai = '$this->nomepai', numeroCel = '$this->numerocel', numeroTel = '$this->numerotel', numeroProf = '$this->numeroprof', emailPessoal = '$this->emailpessoal', emailProfissional = '$this->emailprofissional', cep = '$this->cep', logradouro = '$this->logradouro', numero = '$this->numero', complemento = '$this->complemento', bairro = '$this->bairro', observacao = '$this->observacao', estados_id_nasc = $this->estados_id_nasc, cidades_id_nasc = $this->cidades_id_nasc, estados_id_res = $this->estados_id_res, cidades_id_res = $this->cidades_id_res";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET matricula = '$this->matricula', nome = '$this->nome', sexo = $this->sexo, estadoCivil = $this->estadocivil, dataNascimento = '$this->datanascimento', cpf = '$this->cpf', rg = '$this->rg', orgaoExpedidor = '$this->orgaoexpedidor', dataExpedicao = '$this->dataexpedicao', pne = '$this->pne', formaIngresso = $this->formaingresso, dataFormatura = '$this->dataformatura', login = '$this->login', nomeMae = '$this->nomemae', nomePai = '$this->nomepai', numeroCel = '$this->numerocel', numeroTel = '$this->numerotel', numeroProf = '$this->numeroprof', emailPessoal = '$this->emailpessoal', emailProfissional = '$this->emailprofissional', cep = '$this->cep', logradouro = '$this->logradouro', numero = '$this->numero', complemento = '$this->complemento', bairro = '$this->bairro', observacao = '$this->observacao', estados_id_nasc = $this->estados_id_nasc, cidades_id_nasc = $this->cidades_id_nasc, estados_id_res = $this->estados_id_res, cidades_id_res = $this->cidades_id_res";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET matricula = '$this->matricula', nome = '$this->nome', sexo = $this->sexo, estadoCivil = $this->estadocivil, dataNascimento = '$this->datanascimento', cpf = '$this->cpf', rg = '$this->rg', orgaoExpedidor = '$this->orgaoexpedidor', dataExpedicao = '$this->dataexpedicao', pne = '$this->pne', formaIngresso = $this->formaingresso, dataFormatura = '$this->dataformatura', login = '$this->login', nomeMae = '$this->nomemae', nomePai = '$this->nomepai', numeroCel = '$this->numerocel', numeroTel = '$this->numerotel', numeroProf = '$this->numeroprof', emailPessoal = '$this->emailpessoal', emailProfissional = '$this->emailprofissional', cep = '$this->cep', logradouro = '$this->logradouro', numero = '$this->numero', complemento = '$this->complemento', bairro = '$this->bairro', observacao = '$this->observacao', estados_id_nasc = $this->estados_id_nasc, cidades_id_nasc = $this->cidades_id_nasc, estados_id_res = $this->estados_id_res, cidades_id_res = $this->cidades_id_res";  
              } 
              $temp_cmd_sql = "";
              if ($this->foto_limpa == "S") 
              { 
                  if ($this->foto != "null") 
                  { 
                      $this->foto = ''; 
                  } 
                  if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                  { 
                      $temp_cmd_sql .= ", foto = '" . $this->foto . "'"; 
                      $comando_oracle .= ", foto = '" . $this->foto . "'"; 
                  } 
                  else 
                  { 
                     $temp_cmd_sql .= " foto = '" . $this->foto . "'"; 
                     $comando_oracle .= " foto = '" . $this->foto . "'"; 
                     $SC_ex_upd_or = true; 
                     $SC_ex_update = true; 
                  } 
                  $this->foto = "";
              } 
              else 
              { 
                  if ($this->foto != "none" && $this->foto != "") 
                  { 
                      $NM_conteudo =  $this->foto;
                      if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                      { 
                          $temp_cmd_sql .= ", foto = '$NM_conteudo'" ; 
                          $comando_oracle .= ", foto = '$NM_conteudo'" ; 
                      } 
                      else 
                      { 
                          $temp_cmd_sql .= " foto = '$NM_conteudo'" ; 
                          $comando_oracle .= " foto = '$NM_conteudo'" ; 
                          $SC_ex_upd_or = true; 
                          $SC_ex_update = true; 
                      } 
                  } 
              } 
              if (!empty($temp_cmd_sql)) 
              { 
                  $comando .= $temp_cmd_sql;
              } 
              $temp_cmd_sql = "";
              if ($this->anexos_limpa == "S") 
              { 
                  if ($this->anexos != "null") 
                  { 
                      $this->anexos = ''; 
                  } 
                  if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                  { 
                      $temp_cmd_sql .= ", anexos = '" . $this->anexos . "'"; 
                      $comando_oracle .= ", anexos = '" . $this->anexos . "'"; 
                  } 
                  else 
                  { 
                     $temp_cmd_sql .= " anexos = '" . $this->anexos . "'"; 
                     $comando_oracle .= " anexos = '" . $this->anexos . "'"; 
                     $SC_ex_upd_or = true; 
                     $SC_ex_update = true; 
                  } 
                  $this->anexos = "";
              } 
              else 
              { 
                  if ($this->anexos != "none" && $this->anexos != "") 
                  { 
                      $NM_conteudo =  $this->anexos;
                      if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                      { 
                          $temp_cmd_sql .= ", anexos = '$NM_conteudo'" ; 
                          $comando_oracle .= ", anexos = '$NM_conteudo'" ; 
                      } 
                      else 
                      { 
                          $temp_cmd_sql .= " anexos = '$NM_conteudo'" ; 
                          $comando_oracle .= " anexos = '$NM_conteudo'" ; 
                          $SC_ex_upd_or = true; 
                          $SC_ex_update = true; 
                      } 
                  } 
              } 
              if (!empty($temp_cmd_sql)) 
              { 
                  $comando .= $temp_cmd_sql;
              } 
             if ($this->senha != "" && $this->senha != "null" && $this->senha != $this->nmgp_dados_select['senha']) 
             { 
                 if ($SC_ex_update || $SC_tem_cmp_update) 
                 { 
                     $comando .= ", senha = '$this->senha'" ; 
                 } 
                 else 
                 { 
                      $comando .= " senha = '$this->senha'" ; 
                      $SC_ex_update = true; 
                 } 
             } 
             if ($this->senha != "" && $this->senha != "null" && $this->senha != $this->nmgp_dados_select['senha']) 
             { 
                 if ($SC_ex_upd_or) 
                 { 
                      $comando_oracle .= ", senha = '$this->senha'" ; 
                 } 
                 else 
                 { 
                      $comando_oracle .= " senha = '$this->senha'" ; 
                      $SC_ex_upd_or = true; 
                 } 
             } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE id = $this->id ";  
              }  
              else  
              {
                  $comando .= " WHERE id = $this->id ";  
              }  
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              if ($SC_ex_update || $SC_tem_cmp_update)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg(), true); 
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $this->Db->ErrorMsg();  
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_tbl_aluno_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              if ($this->foto_limpa == "S")
              {
              }
              if ($this->anexos_limpa == "S")
              {
              }
          $this->matricula = $this->matricula_before_qstr;
          $this->nome = $this->nome_before_qstr;
          $this->foto = $this->foto_before_qstr;
          $this->cpf = $this->cpf_before_qstr;
          $this->rg = $this->rg_before_qstr;
          $this->orgaoexpedidor = $this->orgaoexpedidor_before_qstr;
          $this->pne = $this->pne_before_qstr;
          $this->login = $this->login_before_qstr;
          $this->senha = $this->senha_before_qstr;
          $this->nomemae = $this->nomemae_before_qstr;
          $this->nomepai = $this->nomepai_before_qstr;
          $this->numerocel = $this->numerocel_before_qstr;
          $this->numerotel = $this->numerotel_before_qstr;
          $this->numeroprof = $this->numeroprof_before_qstr;
          $this->emailpessoal = $this->emailpessoal_before_qstr;
          $this->emailprofissional = $this->emailprofissional_before_qstr;
          $this->cep = $this->cep_before_qstr;
          $this->logradouro = $this->logradouro_before_qstr;
          $this->numero = $this->numero_before_qstr;
          $this->complemento = $this->complemento_before_qstr;
          $this->bairro = $this->bairro_before_qstr;
          $this->observacao = $this->observacao_before_qstr;
          $this->anexos = $this->anexos_before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
              $this->NM_gera_log_new();
              $this->NM_gera_log_compress();

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['id'])) { $this->id = $NM_val_form['id']; }
              elseif (isset($this->id)) { $this->nm_limpa_alfa($this->id); }
              if     (isset($NM_val_form) && isset($NM_val_form['matricula'])) { $this->matricula = $NM_val_form['matricula']; }
              elseif (isset($this->matricula)) { $this->nm_limpa_alfa($this->matricula); }
              if     (isset($NM_val_form) && isset($NM_val_form['nome'])) { $this->nome = $NM_val_form['nome']; }
              elseif (isset($this->nome)) { $this->nm_limpa_alfa($this->nome); }
              if     (isset($NM_val_form) && isset($NM_val_form['sexo'])) { $this->sexo = $NM_val_form['sexo']; }
              elseif (isset($this->sexo)) { $this->nm_limpa_alfa($this->sexo); }
              if     (isset($NM_val_form) && isset($NM_val_form['estadocivil'])) { $this->estadocivil = $NM_val_form['estadocivil']; }
              elseif (isset($this->estadocivil)) { $this->nm_limpa_alfa($this->estadocivil); }
              if     (isset($NM_val_form) && isset($NM_val_form['cpf'])) { $this->cpf = $NM_val_form['cpf']; }
              elseif (isset($this->cpf)) { $this->nm_limpa_alfa($this->cpf); }
              if     (isset($NM_val_form) && isset($NM_val_form['rg'])) { $this->rg = $NM_val_form['rg']; }
              elseif (isset($this->rg)) { $this->nm_limpa_alfa($this->rg); }
              if     (isset($NM_val_form) && isset($NM_val_form['orgaoexpedidor'])) { $this->orgaoexpedidor = $NM_val_form['orgaoexpedidor']; }
              elseif (isset($this->orgaoexpedidor)) { $this->nm_limpa_alfa($this->orgaoexpedidor); }
              if     (isset($NM_val_form) && isset($NM_val_form['pne'])) { $this->pne = $NM_val_form['pne']; }
              elseif (isset($this->pne)) { $this->nm_limpa_alfa($this->pne); }
              if     (isset($NM_val_form) && isset($NM_val_form['formaingresso'])) { $this->formaingresso = $NM_val_form['formaingresso']; }
              elseif (isset($this->formaingresso)) { $this->nm_limpa_alfa($this->formaingresso); }
              if     (isset($NM_val_form) && isset($NM_val_form['login'])) { $this->login = $NM_val_form['login']; }
              elseif (isset($this->login)) { $this->nm_limpa_alfa($this->login); }
              if     (isset($NM_val_form) && isset($NM_val_form['senha'])) { $this->senha = $NM_val_form['senha']; }
              elseif (isset($this->senha)) { $this->nm_limpa_alfa($this->senha); }
              if     (isset($NM_val_form) && isset($NM_val_form['nomemae'])) { $this->nomemae = $NM_val_form['nomemae']; }
              elseif (isset($this->nomemae)) { $this->nm_limpa_alfa($this->nomemae); }
              if     (isset($NM_val_form) && isset($NM_val_form['nomepai'])) { $this->nomepai = $NM_val_form['nomepai']; }
              elseif (isset($this->nomepai)) { $this->nm_limpa_alfa($this->nomepai); }
              if     (isset($NM_val_form) && isset($NM_val_form['numerocel'])) { $this->numerocel = $NM_val_form['numerocel']; }
              elseif (isset($this->numerocel)) { $this->nm_limpa_alfa($this->numerocel); }
              if     (isset($NM_val_form) && isset($NM_val_form['numerotel'])) { $this->numerotel = $NM_val_form['numerotel']; }
              elseif (isset($this->numerotel)) { $this->nm_limpa_alfa($this->numerotel); }
              if     (isset($NM_val_form) && isset($NM_val_form['numeroprof'])) { $this->numeroprof = $NM_val_form['numeroprof']; }
              elseif (isset($this->numeroprof)) { $this->nm_limpa_alfa($this->numeroprof); }
              if     (isset($NM_val_form) && isset($NM_val_form['emailpessoal'])) { $this->emailpessoal = $NM_val_form['emailpessoal']; }
              elseif (isset($this->emailpessoal)) { $this->nm_limpa_alfa($this->emailpessoal); }
              if     (isset($NM_val_form) && isset($NM_val_form['emailprofissional'])) { $this->emailprofissional = $NM_val_form['emailprofissional']; }
              elseif (isset($this->emailprofissional)) { $this->nm_limpa_alfa($this->emailprofissional); }
              if     (isset($NM_val_form) && isset($NM_val_form['cep'])) { $this->cep = $NM_val_form['cep']; }
              elseif (isset($this->cep)) { $this->nm_limpa_alfa($this->cep); }
              if     (isset($NM_val_form) && isset($NM_val_form['logradouro'])) { $this->logradouro = $NM_val_form['logradouro']; }
              elseif (isset($this->logradouro)) { $this->nm_limpa_alfa($this->logradouro); }
              if     (isset($NM_val_form) && isset($NM_val_form['numero'])) { $this->numero = $NM_val_form['numero']; }
              elseif (isset($this->numero)) { $this->nm_limpa_alfa($this->numero); }
              if     (isset($NM_val_form) && isset($NM_val_form['complemento'])) { $this->complemento = $NM_val_form['complemento']; }
              elseif (isset($this->complemento)) { $this->nm_limpa_alfa($this->complemento); }
              if     (isset($NM_val_form) && isset($NM_val_form['bairro'])) { $this->bairro = $NM_val_form['bairro']; }
              elseif (isset($this->bairro)) { $this->nm_limpa_alfa($this->bairro); }
              if     (isset($NM_val_form) && isset($NM_val_form['observacao'])) { $this->observacao = $NM_val_form['observacao']; }
              elseif (isset($this->observacao)) { $this->nm_limpa_alfa($this->observacao); }
              if     (isset($NM_val_form) && isset($NM_val_form['estados_id_nasc'])) { $this->estados_id_nasc = $NM_val_form['estados_id_nasc']; }
              elseif (isset($this->estados_id_nasc)) { $this->nm_limpa_alfa($this->estados_id_nasc); }
              if     (isset($NM_val_form) && isset($NM_val_form['cidades_id_nasc'])) { $this->cidades_id_nasc = $NM_val_form['cidades_id_nasc']; }
              elseif (isset($this->cidades_id_nasc)) { $this->nm_limpa_alfa($this->cidades_id_nasc); }
              if     (isset($NM_val_form) && isset($NM_val_form['estados_id_res'])) { $this->estados_id_res = $NM_val_form['estados_id_res']; }
              elseif (isset($this->estados_id_res)) { $this->nm_limpa_alfa($this->estados_id_res); }
              if     (isset($NM_val_form) && isset($NM_val_form['cidades_id_res'])) { $this->cidades_id_res = $NM_val_form['cidades_id_res']; }
              elseif (isset($this->cidades_id_res)) { $this->nm_limpa_alfa($this->cidades_id_res); }

              $this->nm_formatar_campos();

              $bChange_anexos = false;
              if (isset($this->anexos_original_filename) && '' != $this->anexos_original_filename && $this->anexos_original_filename != $this->anexos)
              {
                  $sTmpOrig_anexos = $this->anexos;
                  $this->anexos    = $this->anexos_original_filename;
                  $bChange_anexos  = true;
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array('matricula', 'nome', 'foto', 'sexo', 'estadocivil', 'datanascimento', 'cpf', 'rg', 'orgaoexpedidor', 'dataexpedicao', 'estados_id_nasc', 'cidades_id_nasc', 'pne', 'formaingresso', 'dataformatura', 'login', 'senha', 'nomemae', 'nomepai', 'numerocel', 'numerotel', 'numeroprof', 'emailpessoal', 'emailprofissional', 'cep', 'logradouro', 'numero', 'complemento', 'bairro', 'estados_id_res', 'cidades_id_res', 'observacao', 'anexos');
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              if ($bChange_anexos)
              {
                  $this->anexos                   = $sTmpOrig_anexos;
                  $this->anexos_original_filename = '';
              }

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "id, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where matricula = '" . $this->matricula . "'";
              $rsUni = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where matricula = '" . $this->matricula . "'");
              if (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_inst_uniq'] . " Matrícula"); 
                  $this->nmgp_opcao = "nada"; 
                  $GLOBALS["erro_incl"] = 1; 
                  $aInsertOk[] = 'matricula';
              }
              $rsUni->Close();
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_tbl_aluno_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (matricula, nome, foto, sexo, estadoCivil, dataNascimento, cpf, rg, orgaoExpedidor, dataExpedicao, pne, formaIngresso, dataFormatura, login, senha, nomeMae, nomePai, numeroCel, numeroTel, numeroProf, emailPessoal, emailProfissional, cep, logradouro, numero, complemento, bairro, observacao, anexos, estados_id_nasc, cidades_id_nasc, estados_id_res, cidades_id_res) VALUES ('$this->matricula', '$this->nome', '$this->foto', $this->sexo, $this->estadocivil, #$this->datanascimento#, '$this->cpf', '$this->rg', '$this->orgaoexpedidor', #$this->dataexpedicao#, '$this->pne', $this->formaingresso, #$this->dataformatura#, '$this->login', '$this->senha', '$this->nomemae', '$this->nomepai', '$this->numerocel', '$this->numerotel', '$this->numeroprof', '$this->emailpessoal', '$this->emailprofissional', '$this->cep', '$this->logradouro', '$this->numero', '$this->complemento', '$this->bairro', '$this->observacao', '$this->anexos', $this->estados_id_nasc, $this->cidades_id_nasc, $this->estados_id_res, $this->cidades_id_res)"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "matricula, nome, foto, sexo, estadoCivil, dataNascimento, cpf, rg, orgaoExpedidor, dataExpedicao, pne, formaIngresso, dataFormatura, login, senha, nomeMae, nomePai, numeroCel, numeroTel, numeroProf, emailPessoal, emailProfissional, cep, logradouro, numero, complemento, bairro, observacao, anexos, estados_id_nasc, cidades_id_nasc, estados_id_res, cidades_id_res) VALUES (" . $NM_seq_auto . "'$this->matricula', '$this->nome', '$this->foto', $this->sexo, $this->estadocivil, '$this->datanascimento', '$this->cpf', '$this->rg', '$this->orgaoexpedidor', '$this->dataexpedicao', '$this->pne', $this->formaingresso, '$this->dataformatura', '$this->login', '$this->senha', '$this->nomemae', '$this->nomepai', '$this->numerocel', '$this->numerotel', '$this->numeroprof', '$this->emailpessoal', '$this->emailprofissional', '$this->cep', '$this->logradouro', '$this->numero', '$this->complemento', '$this->bairro', '$this->observacao', '$this->anexos', $this->estados_id_nasc, $this->cidades_id_nasc, $this->estados_id_res, $this->cidades_id_res)"; 
              }
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg(), true); 
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                      { 
                          $this->sc_erro_insert = $this->Db->ErrorMsg();  
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_tbl_aluno_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) 
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select @@identity"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_tbl_aluno_mob_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->id =  $rsy->fields[0];
                 $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select CURRVAL('')"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select gen_id(, 0) from " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total']);
              }

              $dir_img = $this->Ini->root . $this->Ini->path_imagens . "imagensAluno" . "/"; 
              if (nm_mkdir($dir_img))  
              { 
                  $arq_foto = fopen($this->SC_IMG_foto, "r") ; 
                  $reg_foto = fread($arq_foto, filesize($this->SC_IMG_foto)) ; 
                  fclose($arq_foto) ;  
                  $arq_foto = fopen($dir_img . trim($this->foto_scfile_name), "w") ; 
                  fwrite($arq_foto, $reg_foto) ;  
                  fclose($arq_foto) ;  
              } 
              $dir_doc = $this->Ini->path_doc . "anexosAlunos" . "/"; 
              if (nm_mkdir($dir_doc))  
              { 
                  $arq_anexos = fopen($this->SC_DOC_anexos, "r") ; 
                  $reg_anexos = fread($arq_anexos, filesize($this->SC_DOC_anexos)) ; 
                  fclose($arq_anexos) ;  
                  $arq_anexos = fopen($dir_doc . trim($this->anexos_scfile_name), "w") ; 
                  fwrite($arq_anexos, $reg_anexos) ;  
                  fclose($arq_anexos) ;  
              } 
              $this->sc_evento = "insert"; 
              $this->sc_insert_on = true; 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->id = substr($this->Db->qstr($this->id), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_tbl_aluno_mob_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total']);
              }

              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['parms'] = "id?#?$this->id?@?"; 
      }
      $this->nmgp_dados_form[foto] = ""; 
      $this->foto_limpa = ""; 
      $this->foto_salva = ""; 
      $this->nmgp_dados_form[anexos] = ""; 
      $this->anexos_limpa = ""; 
      $this->anexos_salva = ""; 
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->id = substr($this->Db->qstr($this->id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter'] . ")";
          }
      }
//------------ 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "R")
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['iframe_evento'] == "insert") 
          { 
               $this->nmgp_opcao = "novo"; 
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['select'] = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['iframe_evento'] = $this->sc_evento; 
      } 
      if (!isset($this->nmgp_opcao) || empty($this->nmgp_opcao)) 
      { 
          if (empty($this->id)) 
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
          else 
          { 
              $this->nmgp_opcao = "igual"; 
          } 
      } 
      if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->nmgp_opcao != "nada" && (trim($this->id) === "")) 
      { 
          if ($this->nmgp_opcao == "avanca")  
          { 
              $this->nmgp_opcao = "final"; 
          } 
          elseif ($this->nmgp_opcao != "novo")
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "F" && $this->sc_evento == "insert")
      {
          $this->nmgp_opcao = "final";
      }
      $sc_where = trim("");
      if (substr(strtolower($sc_where), 0, 5) == "where")
      {
          $sc_where  = substr($sc_where , 5);
      }
      if (!empty($sc_where))
      {
          $sc_where = " where " . $sc_where . " ";
      }
      if ('' != $sc_where_filter)
      {
          $sc_where = ('' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total']))
      { 
          $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_tbl_aluno_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total'] = $qt_geral_reg_form_tbl_aluno_mob;
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->id))
          {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $Key_Where = "id < $this->id "; 
              }  
              else  
              {
                  $Key_Where = "id < $this->id "; 
              }
              $Where_Start = (empty($sc_where)) ? " where " . $Key_Where :  $sc_where . " and (" . $Key_Where . ")";
              $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $Where_Start; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_tbl_aluno_mob = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total'];
      } 
      if ($this->nmgp_opcao == "inicio") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start']++; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] > $qt_geral_reg_form_tbl_aluno_mob)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] = $qt_geral_reg_form_tbl_aluno_mob; 
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start']--; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] = $qt_geral_reg_form_tbl_aluno_mob; 
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] = 0;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] + 1;
      $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] + 1; 
      $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_qtd']; 
      $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total'] + 1; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT id, matricula, nome, foto, sexo, estadoCivil, str_replace (convert(char(10),dataNascimento,102), '.', '-') + ' ' + convert(char(8),dataNascimento,20), cpf, rg, orgaoExpedidor, str_replace (convert(char(10),dataExpedicao,102), '.', '-') + ' ' + convert(char(8),dataExpedicao,20), pne, formaIngresso, str_replace (convert(char(10),dataFormatura,102), '.', '-') + ' ' + convert(char(8),dataFormatura,20), login, senha, nomeMae, nomePai, numeroCel, numeroTel, numeroProf, emailPessoal, emailProfissional, cep, logradouro, numero, complemento, bairro, observacao, anexos, estados_id_nasc, cidades_id_nasc, estados_id_res, cidades_id_res from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT id, matricula, nome, foto, sexo, estadoCivil, dataNascimento, cpf, rg, orgaoExpedidor, dataExpedicao, pne, formaIngresso, dataFormatura, login, senha, nomeMae, nomePai, numeroCel, numeroTel, numeroProf, emailPessoal, emailProfissional, cep, logradouro, numero, complemento, bairro, observacao, anexos, estados_id_nasc, cidades_id_nasc, estados_id_res, cidades_id_res from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "id = $this->id"; 
              }  
              else  
              {
                  $aWhere[] = "id = $this->id"; 
              }  
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start']) ;  
              } 
          } 
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->nmgp_botoes['first']   = "off";
                  $this->nmgp_botoes['back']    = "off";
                  $this->nmgp_botoes['forward'] = "off";
                  $this->nmgp_botoes['last']    = "off";
                  $this->nmgp_botoes['update']  = "off";
                  $this->nmgp_botoes['delete']  = "off";
                  $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->nmgp_botoes['first']   = "off";
                  $this->nmgp_botoes['back']    = "off";
                  $this->nmgp_botoes['forward'] = "off";
                  $this->nmgp_botoes['last']    = "off";
              }
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              if ($this->aba_iframe)
              {
                  $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->id = $rs->fields[0] ; 
              $this->nmgp_dados_select['id'] = $this->id;
              $this->matricula = $rs->fields[1] ; 
              $this->nmgp_dados_select['matricula'] = $this->matricula;
              $this->nome = $rs->fields[2] ; 
              $this->nmgp_dados_select['nome'] = $this->nome;
              $this->foto = $rs->fields[3] ; 
              $this->nmgp_dados_select['foto'] = $this->foto;
              $this->sexo = $rs->fields[4] ; 
              $this->nmgp_dados_select['sexo'] = $this->sexo;
              $this->estadocivil = $rs->fields[5] ; 
              $this->nmgp_dados_select['estadocivil'] = $this->estadocivil;
              $this->datanascimento = $rs->fields[6] ; 
              if (substr($this->datanascimento, 10, 1) == "-") 
              { 
                 $this->datanascimento = substr($this->datanascimento, 0, 10) . " " . substr($this->datanascimento, 11);
              } 
              if (substr($this->datanascimento, 13, 1) == ".") 
              { 
                 $this->datanascimento = substr($this->datanascimento, 0, 13) . ":" . substr($this->datanascimento, 14, 2) . ":" . substr($this->datanascimento, 17);
              } 
              $this->nmgp_dados_select['datanascimento'] = $this->datanascimento;
              $this->cpf = $rs->fields[7] ; 
              $this->nmgp_dados_select['cpf'] = $this->cpf;
              $this->rg = $rs->fields[8] ; 
              $this->nmgp_dados_select['rg'] = $this->rg;
              $this->orgaoexpedidor = $rs->fields[9] ; 
              $this->nmgp_dados_select['orgaoexpedidor'] = $this->orgaoexpedidor;
              $this->dataexpedicao = $rs->fields[10] ; 
              if (substr($this->dataexpedicao, 10, 1) == "-") 
              { 
                 $this->dataexpedicao = substr($this->dataexpedicao, 0, 10) . " " . substr($this->dataexpedicao, 11);
              } 
              if (substr($this->dataexpedicao, 13, 1) == ".") 
              { 
                 $this->dataexpedicao = substr($this->dataexpedicao, 0, 13) . ":" . substr($this->dataexpedicao, 14, 2) . ":" . substr($this->dataexpedicao, 17);
              } 
              $this->nmgp_dados_select['dataexpedicao'] = $this->dataexpedicao;
              $this->pne = $rs->fields[11] ; 
              $this->nmgp_dados_select['pne'] = $this->pne;
              $this->formaingresso = $rs->fields[12] ; 
              $this->nmgp_dados_select['formaingresso'] = $this->formaingresso;
              $this->dataformatura = $rs->fields[13] ; 
              if (substr($this->dataformatura, 10, 1) == "-") 
              { 
                 $this->dataformatura = substr($this->dataformatura, 0, 10) . " " . substr($this->dataformatura, 11);
              } 
              if (substr($this->dataformatura, 13, 1) == ".") 
              { 
                 $this->dataformatura = substr($this->dataformatura, 0, 13) . ":" . substr($this->dataformatura, 14, 2) . ":" . substr($this->dataformatura, 17);
              } 
              $this->nmgp_dados_select['dataformatura'] = $this->dataformatura;
              $this->login = $rs->fields[14] ; 
              $this->nmgp_dados_select['login'] = $this->login;
              $this->senha = $rs->fields[15] ; 
              $this->nmgp_dados_select['senha'] = $this->senha;
              $this->nomemae = $rs->fields[16] ; 
              $this->nmgp_dados_select['nomemae'] = $this->nomemae;
              $this->nomepai = $rs->fields[17] ; 
              $this->nmgp_dados_select['nomepai'] = $this->nomepai;
              $this->numerocel = $rs->fields[18] ; 
              $this->nmgp_dados_select['numerocel'] = $this->numerocel;
              $this->numerotel = $rs->fields[19] ; 
              $this->nmgp_dados_select['numerotel'] = $this->numerotel;
              $this->numeroprof = $rs->fields[20] ; 
              $this->nmgp_dados_select['numeroprof'] = $this->numeroprof;
              $this->emailpessoal = $rs->fields[21] ; 
              $this->nmgp_dados_select['emailpessoal'] = $this->emailpessoal;
              $this->emailprofissional = $rs->fields[22] ; 
              $this->nmgp_dados_select['emailprofissional'] = $this->emailprofissional;
              $this->cep = $rs->fields[23] ; 
              $this->nmgp_dados_select['cep'] = $this->cep;
              $this->logradouro = $rs->fields[24] ; 
              $this->nmgp_dados_select['logradouro'] = $this->logradouro;
              $this->numero = $rs->fields[25] ; 
              $this->nmgp_dados_select['numero'] = $this->numero;
              $this->complemento = $rs->fields[26] ; 
              $this->nmgp_dados_select['complemento'] = $this->complemento;
              $this->bairro = $rs->fields[27] ; 
              $this->nmgp_dados_select['bairro'] = $this->bairro;
              $this->observacao = $rs->fields[28] ; 
              $this->nmgp_dados_select['observacao'] = $this->observacao;
              $this->anexos = $rs->fields[29] ; 
              $this->nmgp_dados_select['anexos'] = $this->anexos;
              $this->estados_id_nasc = $rs->fields[30] ; 
              $this->nmgp_dados_select['estados_id_nasc'] = $this->estados_id_nasc;
              $this->cidades_id_nasc = $rs->fields[31] ; 
              $this->nmgp_dados_select['cidades_id_nasc'] = $this->cidades_id_nasc;
              $this->estados_id_res = $rs->fields[32] ; 
              $this->nmgp_dados_select['estados_id_res'] = $this->estados_id_res;
              $this->cidades_id_res = $rs->fields[33] ; 
              $this->nmgp_dados_select['cidades_id_res'] = $this->cidades_id_res;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->id = (string)$this->id; 
              $this->sexo = (string)$this->sexo; 
              $this->estadocivil = (string)$this->estadocivil; 
              $this->formaingresso = (string)$this->formaingresso; 
              $this->estados_id_nasc = (string)$this->estados_id_nasc; 
              $this->cidades_id_nasc = (string)$this->cidades_id_nasc; 
              $this->estados_id_res = (string)$this->estados_id_res; 
              $this->cidades_id_res = (string)$this->cidades_id_res; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['parms'] = "id?#?$this->id?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['sub_dir'][0]  = "imagensAluno";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['sub_dir'][1]  = "anexosAlunos";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] < $qt_geral_reg_form_tbl_aluno_mob;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opcao']   = '';
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->id = "" ;  
              $this->matricula = "" ;  
              $this->nome = "" ;  
              $this->foto = "" ;  
              $this->foto_ul_name = "" ;  
              $this->foto_ul_type = "" ;  
              $this->sexo = "" ;  
              $this->estadocivil = "" ;  
              $this->datanascimento = "" ;  
              $this->datanascimento_hora = "" ;  
              $this->cpf = "" ;  
              $this->rg = "" ;  
              $this->orgaoexpedidor = "" ;  
              $this->dataexpedicao = "" ;  
              $this->dataexpedicao_hora = "" ;  
              $this->pne = "" ;  
              $this->formaingresso = "" ;  
              $this->dataformatura = "" ;  
              $this->dataformatura_hora = "" ;  
              $this->login = "" ;  
              $this->senha = "" ;  
              $this->nomemae = "" ;  
              $this->nomepai = "" ;  
              $this->numerocel = "" ;  
              $this->numerotel = "" ;  
              $this->numeroprof = "" ;  
              $this->emailpessoal = "" ;  
              $this->emailprofissional = "" ;  
              $this->cep = "" ;  
              $this->logradouro = "" ;  
              $this->numero = "" ;  
              $this->complemento = "" ;  
              $this->bairro = "" ;  
              $this->observacao = "" ;  
              $this->anexos = "" ;  
              $this->anexos_ul_name = "" ;  
              $this->anexos_ul_type = "" ;  
              $this->estados_id_nasc = "" ;  
              $this->cidades_id_nasc = "" ;  
              $this->estados_id_res = "" ;  
              $this->cidades_id_res = "" ;  
              $this->formatado = false;
              if ($this->nmgp_clone != "S")
              {
              }
              if ($this->nmgp_clone == "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['dados_select']))
              {
                  $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['dados_select'];
                  $this->matricula = $this->nmgp_dados_select['matricula'];  
                  $this->nome = $this->nmgp_dados_select['nome'];  
                  $this->foto = $this->nmgp_dados_select['foto'];  
                  $this->sexo = $this->nmgp_dados_select['sexo'];  
                  $this->estadocivil = $this->nmgp_dados_select['estadocivil'];  
                  $this->datanascimento = $this->nmgp_dados_select['datanascimento'];  
                  $this->cpf = $this->nmgp_dados_select['cpf'];  
                  $this->rg = $this->nmgp_dados_select['rg'];  
                  $this->orgaoexpedidor = $this->nmgp_dados_select['orgaoexpedidor'];  
                  $this->dataexpedicao = $this->nmgp_dados_select['dataexpedicao'];  
                  $this->pne = $this->nmgp_dados_select['pne'];  
                  $this->formaingresso = $this->nmgp_dados_select['formaingresso'];  
                  $this->dataformatura = $this->nmgp_dados_select['dataformatura'];  
                  $this->login = $this->nmgp_dados_select['login'];  
                  $this->senha = $this->nmgp_dados_select['senha'];  
                  $this->nomemae = $this->nmgp_dados_select['nomemae'];  
                  $this->nomepai = $this->nmgp_dados_select['nomepai'];  
                  $this->numerocel = $this->nmgp_dados_select['numerocel'];  
                  $this->numerotel = $this->nmgp_dados_select['numerotel'];  
                  $this->numeroprof = $this->nmgp_dados_select['numeroprof'];  
                  $this->emailpessoal = $this->nmgp_dados_select['emailpessoal'];  
                  $this->emailprofissional = $this->nmgp_dados_select['emailprofissional'];  
                  $this->cep = $this->nmgp_dados_select['cep'];  
                  $this->logradouro = $this->nmgp_dados_select['logradouro'];  
                  $this->numero = $this->nmgp_dados_select['numero'];  
                  $this->complemento = $this->nmgp_dados_select['complemento'];  
                  $this->bairro = $this->nmgp_dados_select['bairro'];  
                  $this->observacao = $this->nmgp_dados_select['observacao'];  
                  $this->anexos = $this->nmgp_dados_select['anexos'];  
                  $this->estados_id_nasc = $this->nmgp_dados_select['estados_id_nasc'];  
                  $this->cidades_id_nasc = $this->nmgp_dados_select['cidades_id_nasc'];  
                  $this->estados_id_res = $this->nmgp_dados_select['estados_id_res'];  
                  $this->cidades_id_res = $this->nmgp_dados_select['cidades_id_res'];  
              }
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      $this->nm_proc_onload();
  }
// 
//-- 
   function nm_db_retorna($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id) from " . $this->Ini->nm_tabela . " where id < $this->id" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id) from " . $this->Ini->nm_tabela . " where id < $this->id" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id) from " . $this->Ini->nm_tabela . " where id < $this->id" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id) from " . $this->Ini->nm_tabela . " where id < $this->id" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->id = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "inicio";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_avanca($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id) from " . $this->Ini->nm_tabela . " where id > $this->id" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id) from " . $this->Ini->nm_tabela . " where id > $this->id" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id) from " . $this->Ini->nm_tabela . " where id > $this->id" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id) from " . $this->Ini->nm_tabela . " where id > $this->id" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->id = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "final";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_inicio($str_where_param = '') 
   {   
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela; 
     $rs = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela);
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if ($rs->fields[0] == 0) 
     { 
         $this->nmgp_opcao = "novo"; 
         $this->nm_flag_saida_novo = "S"; 
         $rs->Close(); 
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return;
     }
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->id = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
// 
//-- 
   function nm_db_final($str_where_param = '') 
   { 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->id = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
// 
   function NM_gera_log_key($evt) 
   {
       $this->SC_log_arr = array();
       $this->SC_log_atv = true;
       if ($evt == "incluir")
       {
           $this->SC_log_evt = "insert";
       }
       if ($evt == "alterar")
       {
           $this->SC_log_evt = "update";
       }
       if ($evt == "excluir")
       {
           $this->SC_log_evt = "delete";
       }
       $this->SC_log_arr['keys']['id'] =  $this->id;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['dados_select'];
           $this->SC_log_arr['fields']['matricula']['0'] =  $nmgp_dados_select['matricula'];
           $this->SC_log_arr['fields']['nome']['0'] =  $nmgp_dados_select['nome'];
           $this->SC_log_arr['fields']['foto']['0'] =  $nmgp_dados_select['foto'];
           $this->SC_log_arr['fields']['sexo']['0'] =  $nmgp_dados_select['sexo'];
           $this->SC_log_arr['fields']['estadoCivil']['0'] =  $nmgp_dados_select['estadocivil'];
           $this->SC_log_arr['fields']['dataNascimento']['0'] =  $nmgp_dados_select['datanascimento'];
           $this->SC_log_arr['fields']['cpf']['0'] =  $nmgp_dados_select['cpf'];
           $this->SC_log_arr['fields']['rg']['0'] =  $nmgp_dados_select['rg'];
           $this->SC_log_arr['fields']['orgaoExpedidor']['0'] =  $nmgp_dados_select['orgaoexpedidor'];
           $this->SC_log_arr['fields']['dataExpedicao']['0'] =  $nmgp_dados_select['dataexpedicao'];
           $this->SC_log_arr['fields']['pne']['0'] =  $nmgp_dados_select['pne'];
           $this->SC_log_arr['fields']['formaIngresso']['0'] =  $nmgp_dados_select['formaingresso'];
           $this->SC_log_arr['fields']['dataFormatura']['0'] =  $nmgp_dados_select['dataformatura'];
           $this->SC_log_arr['fields']['login']['0'] =  $nmgp_dados_select['login'];
           $this->SC_log_arr['fields']['senha']['0'] =  $nmgp_dados_select['senha'];
           $this->SC_log_arr['fields']['nomeMae']['0'] =  $nmgp_dados_select['nomemae'];
           $this->SC_log_arr['fields']['nomePai']['0'] =  $nmgp_dados_select['nomepai'];
           $this->SC_log_arr['fields']['numeroCel']['0'] =  $nmgp_dados_select['numerocel'];
           $this->SC_log_arr['fields']['numeroTel']['0'] =  $nmgp_dados_select['numerotel'];
           $this->SC_log_arr['fields']['numeroProf']['0'] =  $nmgp_dados_select['numeroprof'];
           $this->SC_log_arr['fields']['emailPessoal']['0'] =  $nmgp_dados_select['emailpessoal'];
           $this->SC_log_arr['fields']['emailProfissional']['0'] =  $nmgp_dados_select['emailprofissional'];
           $this->SC_log_arr['fields']['cep']['0'] =  $nmgp_dados_select['cep'];
           $this->SC_log_arr['fields']['logradouro']['0'] =  $nmgp_dados_select['logradouro'];
           $this->SC_log_arr['fields']['numero']['0'] =  $nmgp_dados_select['numero'];
           $this->SC_log_arr['fields']['complemento']['0'] =  $nmgp_dados_select['complemento'];
           $this->SC_log_arr['fields']['bairro']['0'] =  $nmgp_dados_select['bairro'];
           $this->SC_log_arr['fields']['observacao']['0'] =  $nmgp_dados_select['observacao'];
           $this->SC_log_arr['fields']['anexos']['0'] =  $nmgp_dados_select['anexos'];
           $this->SC_log_arr['fields']['estados_id_nasc']['0'] =  $nmgp_dados_select['estados_id_nasc'];
           $this->SC_log_arr['fields']['cidades_id_nasc']['0'] =  $nmgp_dados_select['cidades_id_nasc'];
           $this->SC_log_arr['fields']['estados_id_res']['0'] =  $nmgp_dados_select['estados_id_res'];
           $this->SC_log_arr['fields']['cidades_id_res']['0'] =  $nmgp_dados_select['cidades_id_res'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['matricula']['1'] =  $this->matricula;
       $this->SC_log_arr['fields']['nome']['1'] =  $this->nome;
       $this->SC_log_arr['fields']['foto']['1'] =  $this->foto;
       $this->SC_log_arr['fields']['sexo']['1'] =  $this->sexo;
       $this->SC_log_arr['fields']['estadoCivil']['1'] =  $this->estadocivil;
       $this->SC_log_arr['fields']['dataNascimento']['1'] =  $this->datanascimento;
       $this->SC_log_arr['fields']['cpf']['1'] =  $this->cpf;
       $this->SC_log_arr['fields']['rg']['1'] =  $this->rg;
       $this->SC_log_arr['fields']['orgaoExpedidor']['1'] =  $this->orgaoexpedidor;
       $this->SC_log_arr['fields']['dataExpedicao']['1'] =  $this->dataexpedicao;
       $this->SC_log_arr['fields']['pne']['1'] =  $this->pne;
       $this->SC_log_arr['fields']['formaIngresso']['1'] =  $this->formaingresso;
       $this->SC_log_arr['fields']['dataFormatura']['1'] =  $this->dataformatura;
       $this->SC_log_arr['fields']['login']['1'] =  $this->login;
       $this->SC_log_arr['fields']['senha']['1'] =  $this->senha;
       $this->SC_log_arr['fields']['nomeMae']['1'] =  $this->nomemae;
       $this->SC_log_arr['fields']['nomePai']['1'] =  $this->nomepai;
       $this->SC_log_arr['fields']['numeroCel']['1'] =  $this->numerocel;
       $this->SC_log_arr['fields']['numeroTel']['1'] =  $this->numerotel;
       $this->SC_log_arr['fields']['numeroProf']['1'] =  $this->numeroprof;
       $this->SC_log_arr['fields']['emailPessoal']['1'] =  $this->emailpessoal;
       $this->SC_log_arr['fields']['emailProfissional']['1'] =  $this->emailprofissional;
       $this->SC_log_arr['fields']['cep']['1'] =  $this->cep;
       $this->SC_log_arr['fields']['logradouro']['1'] =  $this->logradouro;
       $this->SC_log_arr['fields']['numero']['1'] =  $this->numero;
       $this->SC_log_arr['fields']['complemento']['1'] =  $this->complemento;
       $this->SC_log_arr['fields']['bairro']['1'] =  $this->bairro;
       $this->SC_log_arr['fields']['observacao']['1'] =  $this->observacao;
       $this->SC_log_arr['fields']['anexos']['1'] =  $this->anexos;
       $this->SC_log_arr['fields']['estados_id_nasc']['1'] =  $this->estados_id_nasc;
       $this->SC_log_arr['fields']['cidades_id_nasc']['1'] =  $this->cidades_id_nasc;
       $this->SC_log_arr['fields']['estados_id_res']['1'] =  $this->estados_id_res;
       $this->SC_log_arr['fields']['cidades_id_res']['1'] =  $this->cidades_id_res;
   }
// 
   function NM_gera_log_compress() 
   {
       foreach ($this->SC_log_arr['fields'] as $fild => $data_f)
       {
           if ($data_f[0] == $data_f[1] || ($data_f[0] == "" && $data_f[1] == "null"))
           {
               unset($this->SC_log_arr['fields'][$fild]);
           }
       }
   }
// 
   function NM_gera_log_output() 
   {
       $Log_output = "";
       $prim_delim = "";
       foreach ($this->SC_log_arr as $type => $dats)
       {
           if ($type == "keys")
           {
               $Log_output .= "--> keys <-- ";
               foreach ($dats as $key => $data)
               {
                   $Log_output .=  $prim_delim . $key . " : " . $data;
                   $prim_delim  = "||";
               }
           }
           if ($type == "fields")
           {
               $Log_output .= $prim_delim . "--> fields <-- ";
               $prim_delim = "";
               if (empty($dats) && $this->SC_log_evt == "update")
               {
                   return;
               }
               foreach ($dats as $key => $data)
               {
                   foreach ($data as $tp => $val)
                   {
                      $tpok = ($tp == 0) ? " (old) " : " (new) ";
                      $Log_output .= $prim_delim . $key . $tpok . " : " . $val;
                      $prim_delim  = "||";
                   }
               }
           }
       }
       $this->NM_gera_log_insert("Scriptcase", $this->SC_log_evt, $Log_output);
   }
// 
 function gera_icone($doc) 
 {
    $cam_icone = "";
    $path =  $this->Ini->root . $this->Ini->path_icones . "/";
    if (is_dir($path))
    {
        $nm_icones = nm_list_icon($path); 
        $nm_tipo = strtolower(substr($doc, strrpos($doc, ".") + 1));
        if (isset($nm_icones[$nm_tipo]) && !empty($nm_icones[$nm_tipo]))
        {
            $cam_icone = $this->Ini->path_icones . "/" . $nm_icones[$nm_tipo];
        }
        else
        {
            $cam_icone = $this->Ini->path_icones . "/" . $nm_icones["default"];
        }
    }
    return $cam_icone;
 } 
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_tbl_aluno_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
//-- 
   if ($this->nmgp_opcao == "novo")
   { 
       $out_foto = "";  
   } 
   else 
   { 
       $out_foto = $this->foto;  
   } 
   if ($this->foto != "" && $this->foto != "none")   
   { 
       $path_foto = $this->Ini->root . $this->Ini->path_imagens . "imagensAluno" . "/" . $this->foto;
       $md5_foto  = md5("imagensAluno" . $this->foto);
       if (is_file($path_foto))  
       { 
           $NM_ler_img = true;
           $out_foto = $this->Ini->path_imag_temp . "/sc_foto_" . $md5_foto . ".gif" ;  
           if (is_file($this->Ini->root . $out_foto))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_foto) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_foto = fopen($path_foto, "r") ; 
               $reg_foto = fread($tmp_foto, filesize($path_foto)) ; 
               fclose($tmp_foto) ;  
               $arq_foto = fopen($this->Ini->root . $out_foto, "w") ;  
               fwrite($arq_foto, $reg_foto) ;  
               fclose($arq_foto) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_foto);
           $this->nmgp_return_img['foto'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['foto'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $out1_foto = $out_foto; 
           $md5_foto  = md5("imagensAluno" . $this->foto);
           $out_foto = $this->Ini->path_imag_temp . "/sc_foto_168168" . $md5_foto . ".gif" ;  
           if (is_file($this->Ini->root . $out_foto))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_foto) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_foto);
                   $sc_obj_img->setWidth(168);
                   $sc_obj_img->setHeight(168);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_foto);
               } 
               else 
               { 
                   $out_foto = $out1_foto;
               } 
           } 
       } 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_foto;
       if (isset($temp_out_foto))
       {
           $out_foto = $temp_out_foto;
       }
       global $temp_out1_foto;
       if (isset($temp_out1_foto))
       {
           $out1_foto = $temp_out1_foto;
       }
   }
    include_once("form_tbl_aluno_mob_form0.php");
 }
   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile


 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

 function new_date_format($type, $field)
 {
     $new_date_format = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format .= $time_sep;
         }
         else
         {
             $new_date_format .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format;
     if ('DH' == $type)
     {
         $new_date_format                                      = explode(';', $new_date_format);
         $this->field_config[$field]['date_format_js']        = $new_date_format[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function SC_fast_search($field, $arg_search, $data_search)
   {
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_tbl_aluno_mob_pack_ajax_response();
              exit;
          }
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
          $this->SC_monta_condicao($comando, "matricula", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nome", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_sexo($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "sexo", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_estadocivil($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "estadoCivil", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "dataNascimento", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cpf", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rg", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "orgaoExpedidor", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "dataExpedicao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "pne", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_formaingresso($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "formaIngresso", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "dataFormatura", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "login", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "senha", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nomeMae", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nomePai", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numeroCel", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numeroTel", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numeroProf", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "emailPessoal", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "emailProfissional", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cep", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "logradouro", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numero", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "complemento", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "bairro", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "observacao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "anexos", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_estados_id_nasc($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "estados_id_nasc", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_cidades_id_nasc($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "cidades_id_nasc", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_estados_id_res($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "estados_id_res", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_cidades_id_res($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "cidades_id_res", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "matricula", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nome", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "foto", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_sexo($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "sexo", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_estadocivil($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "estadoCivil", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "dataNascimento", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cpf", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rg", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "orgaoExpedidor", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "dataExpedicao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_estados_id_nasc($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "estados_id_nasc", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_cidades_id_nasc($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "cidades_id_nasc", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "pne", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_formaingresso($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "formaIngresso", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "dataFormatura", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "login", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "senha", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nomeMae", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nomePai", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numeroCel", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numeroTel", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numeroProf", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "emailPessoal", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "emailProfissional", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cep", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "logradouro", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numero", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "complemento", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "bairro", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_estados_id_res($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "estados_id_res", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_cidades_id_res($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "cidades_id_res", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "observacao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "anexos", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      $sc_where = " where " . $comando;
      $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_tbl_aluno_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total'] = $qt_geral_reg_form_tbl_aluno_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_tbl_aluno_mob_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "id";$nm_numeric[] = "sexo";$nm_numeric[] = "estadocivil";$nm_numeric[] = "formaingresso";$nm_numeric[] = "estados_id_nasc";$nm_numeric[] = "cidades_id_nasc";$nm_numeric[] = "estados_id_res";$nm_numeric[] = "cidades_id_res";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['decimal_db'] == ".")
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
      $Nm_datas['datanascimento'] = "datetime";$Nm_datas['dataexpedicao'] = "datetime";$Nm_datas['dataformatura'] = "datetime";
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
   function SC_lookup_sexo($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['1'] = "Masculino";
       $data_look['2'] = "Feminino";
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
   function SC_lookup_estadocivil($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['1'] = "Solteiro";
       $data_look['2'] = "Casado";
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
   function SC_lookup_formaingresso($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['1'] = "Bolsista";
       $data_look['2'] = "Gratuíto";
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
   function SC_lookup_estados_id_nasc($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT nome, id FROM estados WHERE (nome LIKE '%$campo%')" ; 
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
   function SC_lookup_cidades_id_nasc($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT id, estados_id FROM cidades WHERE (CAST (id AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT id, estados_id FROM cidades WHERE (id LIKE '%$campo%')" ; 
       }
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
   function SC_lookup_estados_id_res($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT nome, id FROM estados WHERE (nome LIKE '%$campo%')" ; 
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
   function SC_lookup_cidades_id_res($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT id, estados_id FROM cidades WHERE (CAST (id AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT id, estados_id FROM cidades WHERE (id LIKE '%$campo%')" ; 
       }
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
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['sc_outra_jan'])
   {
       $nmgp_saida_form = "form_tbl_aluno_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opc_ant']);
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = '_self';
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_tbl_aluno_mob_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
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
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo NM_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo NM_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['sc_modal'])
   {
?>
        parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
   }
   elseif ($this->lig_edit_lookup)
   {
?>
        opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
   }
?>
      }
      if (bLigEditLookupCall)
      {
        scLigEditLookupCall();
      }
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
}
?>

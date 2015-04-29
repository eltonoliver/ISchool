<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("Cadastro Bolsa Pronate"); } else { echo strip_tags("Alteração Bolsa Pronate"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
<?php
header("X-XSS-Protection: 0");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
<?php
include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
?>

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_tbl_pesquisa_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_binicio_off = "<?php echo $this->arr_buttons['binicio_off']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bavanca_off = "<?php echo $this->arr_buttons['bavanca_off']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bretorna_off = "<?php echo $this->arr_buttons['bretorna_off']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_bfinal_off  = "<?php echo $this->arr_buttons['bfinal_off']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).show();
       $("#sc_b_ini_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ini_" + str_pos).show();
       $("#gbl_sc_b_ini_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).show();
       $("#sc_b_ret_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ret_" + str_pos).show();
       $("#gbl_sc_b_ret_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).hide();
       $("#sc_b_ini_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ini_" + str_pos).hide();
       $("#gbl_sc_b_ini_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).hide();
       $("#sc_b_ret_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ret_" + str_pos).hide();
       $("#gbl_sc_b_ret_off_" + str_pos).show();
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).show();
       $("#sc_b_fim_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_fim_" + str_pos).show();
       $("#gbl_sc_b_fim_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).show();
       $("#sc_b_avc_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_avc_" + str_pos).show();
       $("#gbl_sc_b_avc_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).hide();
       $("#sc_b_fim_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_fim_" + str_pos).hide();
       $("#gbl_sc_b_fim_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).hide();
       $("#sc_b_avc_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_avc_" + str_pos).hide();
       $("#gbl_sc_b_avc_off_" + str_pos).show();
<?php
    }
?>
 }
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_tbl_pesquisa_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).load(function() {
     scQuickSearchInit(false, '');
     $('#SC_fast_search_t').listen();
     scQuickSearchKeyUp('t', null);
     scQSInit = false;
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if ('' == sPos || 't' == sPos) scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
     }
   }
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'height': Math.max(oInput.height(), 16) + 'px',
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_tbl_pesquisa_js0.php");
?>
<script type="text/javascript" src="<?php echo str_replace("{str_idioma}", $this->Ini->str_lang, "../_lib/js/tab_erro_{str_idioma}.js"); ?>"> 
</script> 
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
 </script>
<form name="F1" method="post" 
               action="./" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo NM_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php  echo NM_encode_input(session_id()); ?>"> 
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>"> 
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$int_iframe_padding = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe']) ? 0 : "0px";
?>
<?php
$_SESSION['scriptcase']['error_span_title']['form_tbl_pesquisa'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_tbl_pesquisa'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<table id="main_table_form"  align="center" cellpadding="<?php echo $int_iframe_padding; ?>" cellspacing=0  width="50%">
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['mostra_cab'] != "N"))
  {
?>
<tr><td>
<style>
#lin1_col1 { padding-left:9px; padding-top:7px;  height:27px; overflow:hidden; text-align:left;}			 
#lin1_col2 { padding-right:9px; padding-top:7px; height:27px; text-align:right; overflow:hidden;   font-size:12px; font-weight:normal;}
</style>

<div style="width: 100%">
 <div class="scFormHeader" style="height:11px; display: block; border-width:0px; "></div>
 <div style="height:37px; border-width:0px 0px 1px 0px;  border-style: dashed; border-color:#ddd; display: block">
 	<table style="width:100%; border-collapse:collapse; padding:0;">
    	<tr>
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "Cadastro Bolsa Pronate"; } else { echo "Alteração Bolsa Pronate"; } ?></span></td>
            <td id="lin1_col2" class="scFormHeaderFont"><span><?php echo date($this->dateDefaultFormat()); ?></span></td>
        </tr>
    </table>		 
 </div>
</div>
</td></tr>
<?php
  }
?>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo');", "nm_move ('novo');", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_t", "", "Cadastrar", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo NM_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{watermark:'<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>', watermarkClass: 'scFormToolbarInputWm', maxLength: 255}">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = ''; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['empty_filter'] = true;
       }
       echo "</td></tr><tr><td align=center>";
       echo "<font face=\"" . $this->Ini->pag_fonte_tipo . "\" color=\"" . $this->Ini->cor_txt_grid . "\" size=\"2\"><b>" . $this->Ini->Nm_lang['lang_errm_empt'] . "</b></font>";
       echo "</td></tr>";
  }
  else
  {
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id']))
           {
               $this->nmgp_cmp_readonly['id'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id']))
    {
        $this->nm_new_label['id'] = "Código";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id = $this->id;
   $sStyleHidden_id = '';
   if (isset($this->nmgp_cmp_hidden['id']) && $this->nmgp_cmp_hidden['id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id']);
       $sStyleHidden_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id = 'display: none;';
   $sStyleReadInp_id = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["id"]) &&  $this->nmgp_cmp_readonly["id"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id']);
       $sStyleReadLab_id = '';
       $sStyleReadInp_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id']) && $this->nmgp_cmp_hidden['id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id" value="<?php echo NM_encode_input($id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOdd" id="hidden_field_data_id" style="<?php echo $sStyleHidden_id; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_id"><?php echo $this->nm_new_label['id']; ?></span></span><br><span id="id_read_on_id" style=";<?php echo $sStyleReadLab_id; ?>"><?php echo NM_encode_input($this->id); ?></span><span id="id_read_off_id" style="<?php echo $sStyleReadInp_id; ?>"><input type="hidden" name="id" value="<?php echo NM_encode_input($id) . "\">"?><span id="id_ajax_label_id"><?php echo nl2br($id); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }
      else
      {
         $sc_hidden_no--;
      }
?>
<?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_id_dumb = ('' == $sStyleHidden_id) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_id_dumb" style="<?php echo $sStyleHidden_id_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nomecompleto']))
    {
        $this->nm_new_label['nomecompleto'] = "Nome Completo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nomecompleto = $this->nomecompleto;
   $sStyleHidden_nomecompleto = '';
   if (isset($this->nmgp_cmp_hidden['nomecompleto']) && $this->nmgp_cmp_hidden['nomecompleto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nomecompleto']);
       $sStyleHidden_nomecompleto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nomecompleto = 'display: none;';
   $sStyleReadInp_nomecompleto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nomecompleto']) && $this->nmgp_cmp_readonly['nomecompleto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nomecompleto']);
       $sStyleReadLab_nomecompleto = '';
       $sStyleReadInp_nomecompleto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nomecompleto']) && $this->nmgp_cmp_hidden['nomecompleto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nomecompleto" value="<?php echo NM_encode_input($nomecompleto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_nomecompleto" style="<?php echo $sStyleHidden_nomecompleto; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_nomecompleto"><?php echo $this->nm_new_label['nomecompleto']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['php_cmp_required']['nomecompleto']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['php_cmp_required']['nomecompleto'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nomecompleto"]) &&  $this->nmgp_cmp_readonly["nomecompleto"] == "on") { 

 ?>
<input type="hidden" name="nomecompleto" value="<?php echo NM_encode_input($nomecompleto) . "\">" . $nomecompleto . ""; ?>
<?php } else { ?>
<span id="id_read_on_nomecompleto" class="sc-ui-readonly-nomecompleto" style=";<?php echo $sStyleReadLab_nomecompleto; ?>"><?php echo NM_encode_input($this->nomecompleto); ?></span><span id="id_read_off_nomecompleto" style="white-space: nowrap;<?php echo $sStyleReadInp_nomecompleto; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_nomecompleto" type=text name="nomecompleto" value="<?php echo NM_encode_input($nomecompleto) ?>"
 size=50 maxlength=145 alt="{datatype: 'text', maxLength: 145, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nomecompleto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nomecompleto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_nomecompleto_dumb = ('' == $sStyleHidden_nomecompleto) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nomecompleto_dumb" style="<?php echo $sStyleHidden_nomecompleto_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cel']))
    {
        $this->nm_new_label['cel'] = "Telefone Pessoal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cel = $this->cel;
   $sStyleHidden_cel = '';
   if (isset($this->nmgp_cmp_hidden['cel']) && $this->nmgp_cmp_hidden['cel'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cel']);
       $sStyleHidden_cel = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cel = 'display: none;';
   $sStyleReadInp_cel = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cel']) && $this->nmgp_cmp_readonly['cel'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cel']);
       $sStyleReadLab_cel = '';
       $sStyleReadInp_cel = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cel']) && $this->nmgp_cmp_hidden['cel'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cel" value="<?php echo NM_encode_input($cel) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cel" style="<?php echo $sStyleHidden_cel; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_cel"><?php echo $this->nm_new_label['cel']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['php_cmp_required']['cel']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['php_cmp_required']['cel'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cel"]) &&  $this->nmgp_cmp_readonly["cel"] == "on") { 

 ?>
<input type="hidden" name="cel" value="<?php echo NM_encode_input($cel) . "\">" . $cel . ""; ?>
<?php } else { ?>
<span id="id_read_on_cel" class="sc-ui-readonly-cel" style=";<?php echo $sStyleReadLab_cel; ?>"><?php echo NM_encode_input($this->cel); ?></span><span id="id_read_off_cel" style="white-space: nowrap;<?php echo $sStyleReadInp_cel; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_cel" type=text name="cel" value="<?php echo NM_encode_input($cel) ?>"
 size=45 maxlength=60 alt="{datatype: 'mask', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', maskList: '(99) 99999-9999', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cel_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cel_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_cel_dumb = ('' == $sStyleHidden_cel) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cel_dumb" style="<?php echo $sStyleHidden_cel_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['telefonecasa']))
    {
        $this->nm_new_label['telefonecasa'] = "Telefone Resindêncial";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $telefonecasa = $this->telefonecasa;
   $sStyleHidden_telefonecasa = '';
   if (isset($this->nmgp_cmp_hidden['telefonecasa']) && $this->nmgp_cmp_hidden['telefonecasa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['telefonecasa']);
       $sStyleHidden_telefonecasa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_telefonecasa = 'display: none;';
   $sStyleReadInp_telefonecasa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['telefonecasa']) && $this->nmgp_cmp_readonly['telefonecasa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['telefonecasa']);
       $sStyleReadLab_telefonecasa = '';
       $sStyleReadInp_telefonecasa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['telefonecasa']) && $this->nmgp_cmp_hidden['telefonecasa'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="telefonecasa" value="<?php echo NM_encode_input($telefonecasa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_telefonecasa" style="<?php echo $sStyleHidden_telefonecasa; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_telefonecasa"><?php echo $this->nm_new_label['telefonecasa']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["telefonecasa"]) &&  $this->nmgp_cmp_readonly["telefonecasa"] == "on") { 

 ?>
<input type="hidden" name="telefonecasa" value="<?php echo NM_encode_input($telefonecasa) . "\">" . $telefonecasa . ""; ?>
<?php } else { ?>
<span id="id_read_on_telefonecasa" class="sc-ui-readonly-telefonecasa" style=";<?php echo $sStyleReadLab_telefonecasa; ?>"><?php echo NM_encode_input($this->telefonecasa); ?></span><span id="id_read_off_telefonecasa" style="white-space: nowrap;<?php echo $sStyleReadInp_telefonecasa; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_telefonecasa" type=text name="telefonecasa" value="<?php echo NM_encode_input($telefonecasa) ?>"
 size=45 maxlength=59 alt="{datatype: 'mask', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', maskList: '(99) 9999-9999', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_telefonecasa_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_telefonecasa_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_telefonecasa_dumb = ('' == $sStyleHidden_telefonecasa) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_telefonecasa_dumb" style="<?php echo $sStyleHidden_telefonecasa_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['cursos']))
   {
       $this->nm_new_label['cursos'] = "Treinamentos Preferêncais";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cursos = $this->cursos;
   $sStyleHidden_cursos = '';
   if (isset($this->nmgp_cmp_hidden['cursos']) && $this->nmgp_cmp_hidden['cursos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cursos']);
       $sStyleHidden_cursos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cursos = 'display: none;';
   $sStyleReadInp_cursos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cursos']) && $this->nmgp_cmp_readonly['cursos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cursos']);
       $sStyleReadLab_cursos = '';
       $sStyleReadInp_cursos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cursos']) && $this->nmgp_cmp_hidden['cursos'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cursos" value="<?php echo NM_encode_input($this->cursos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cursos" style="<?php echo $sStyleHidden_cursos; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_cursos"><?php echo $this->nm_new_label['cursos']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['php_cmp_required']['cursos']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['php_cmp_required']['cursos'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cursos"]) &&  $this->nmgp_cmp_readonly["cursos"] == "on") { 

$cursos_look = "";
 if ($this->cursos == "Atendente de Farmácia e Drogaria") { $cursos_look .= "Atendente de Farmácia e Drogaria" ;} 
 if ($this->cursos == "Departamento de Pessoal") { $cursos_look .= "Departamento de Pessoal" ;} 
 if ($this->cursos == "Controle Diário e Fluxo de Caixa") { $cursos_look .= "Controle Diário e Fluxo de Caixa" ;} 
 if ($this->cursos == "Recursos Humanos – Gerenciando Pessoas") { $cursos_look .= "Recursos Humanos – Gerenciando Pessoas" ;} 
 if ($this->cursos == "Programa 5S – Qualidade Total nas Empresas") { $cursos_look .= "Programa 5S – Qualidade Total nas Empresas" ;} 
 if ($this->cursos == "Sistema de Gestão Ambiental") { $cursos_look .= "Sistema de Gestão Ambiental" ;} 
 if ($this->cursos == "Secretariado e Assessoria Administrativa") { $cursos_look .= "Secretariado e Assessoria Administrativa" ;} 
 if ($this->cursos == "Técnicas de Administração – Gestão da Empresa Moderna") { $cursos_look .= "Técnicas de Administração – Gestão da Empresa Moderna" ;} 
 if ($this->cursos == "Microsoft Excel") { $cursos_look .= "Microsoft Excel" ;} 
 if ($this->cursos == "Microsoft Word") { $cursos_look .= "Microsoft Word" ;} 
 if ($this->cursos == "Microsoft PowerPoint") { $cursos_look .= "Microsoft PowerPoint" ;} 
 if ($this->cursos == "Conhecendo o Windows 8") { $cursos_look .= "Conhecendo o Windows 8" ;} 
 if ($this->cursos == "Gestão de Pessoas") { $cursos_look .= "Gestão de Pessoas" ;} 
 if ($this->cursos == "English") { $cursos_look .= "English" ;} 
 if ($this->cursos == "Gestão de Crédito e Cobrança") { $cursos_look .= "Gestão de Crédito e Cobrança" ;} 
 if ($this->cursos == "Gestão de Vendas") { $cursos_look .= "Gestão de Vendas" ;} 
 if ($this->cursos == "Empreendedorismo – Passo a Passo") { $cursos_look .= "Empreendedorismo – Passo a Passo" ;} 
 if ($this->cursos == "Operador de Caixa – Qualificando a Linha de Frente") { $cursos_look .= "Operador de Caixa – Qualificando a Linha de Frente" ;} 
 if ($this->cursos == "Técnicas de Vendas") { $cursos_look .= "Técnicas de Vendas" ;} 
 if ($this->cursos == "Estoque e Compras – Introdução ás Práticas de Gestão Estratégica de Compras & Suprimentos") { $cursos_look .= "Estoque e Compras – Introdução ás Práticas de Gestão Estratégica de Compras & Suprimentos" ;} 
 if ($this->cursos == "Marketing, Telemarketing & E-commerce") { $cursos_look .= "Marketing, Telemarketing & E-commerce" ;} 
 if ($this->cursos == "Programação com PHP") { $cursos_look .= "Programação com PHP" ;} 
 if ($this->cursos == "Programação com Linguagem Java") { $cursos_look .= "Programação com Linguagem Java" ;} 
 if ($this->cursos == "Desenvolvimento de Aplicativos para Android") { $cursos_look .= "Desenvolvimento de Aplicativos para Android" ;} 
?>
<input type="hidden" name="cursos" value="<?php echo NM_encode_input($cursos) . "\">" . $cursos_look . ""; ?>
<?php } else { ?>
<?php

$cursos_look = "";
 if ($this->cursos == "Atendente de Farmácia e Drogaria") { $cursos_look .= "Atendente de Farmácia e Drogaria" ;} 
 if ($this->cursos == "Departamento de Pessoal") { $cursos_look .= "Departamento de Pessoal" ;} 
 if ($this->cursos == "Controle Diário e Fluxo de Caixa") { $cursos_look .= "Controle Diário e Fluxo de Caixa" ;} 
 if ($this->cursos == "Recursos Humanos – Gerenciando Pessoas") { $cursos_look .= "Recursos Humanos – Gerenciando Pessoas" ;} 
 if ($this->cursos == "Programa 5S – Qualidade Total nas Empresas") { $cursos_look .= "Programa 5S – Qualidade Total nas Empresas" ;} 
 if ($this->cursos == "Sistema de Gestão Ambiental") { $cursos_look .= "Sistema de Gestão Ambiental" ;} 
 if ($this->cursos == "Secretariado e Assessoria Administrativa") { $cursos_look .= "Secretariado e Assessoria Administrativa" ;} 
 if ($this->cursos == "Técnicas de Administração – Gestão da Empresa Moderna") { $cursos_look .= "Técnicas de Administração – Gestão da Empresa Moderna" ;} 
 if ($this->cursos == "Microsoft Excel") { $cursos_look .= "Microsoft Excel" ;} 
 if ($this->cursos == "Microsoft Word") { $cursos_look .= "Microsoft Word" ;} 
 if ($this->cursos == "Microsoft PowerPoint") { $cursos_look .= "Microsoft PowerPoint" ;} 
 if ($this->cursos == "Conhecendo o Windows 8") { $cursos_look .= "Conhecendo o Windows 8" ;} 
 if ($this->cursos == "Gestão de Pessoas") { $cursos_look .= "Gestão de Pessoas" ;} 
 if ($this->cursos == "English") { $cursos_look .= "English" ;} 
 if ($this->cursos == "Gestão de Crédito e Cobrança") { $cursos_look .= "Gestão de Crédito e Cobrança" ;} 
 if ($this->cursos == "Gestão de Vendas") { $cursos_look .= "Gestão de Vendas" ;} 
 if ($this->cursos == "Empreendedorismo – Passo a Passo") { $cursos_look .= "Empreendedorismo – Passo a Passo" ;} 
 if ($this->cursos == "Operador de Caixa – Qualificando a Linha de Frente") { $cursos_look .= "Operador de Caixa – Qualificando a Linha de Frente" ;} 
 if ($this->cursos == "Técnicas de Vendas") { $cursos_look .= "Técnicas de Vendas" ;} 
 if ($this->cursos == "Estoque e Compras – Introdução ás Práticas de Gestão Estratégica de Compras & Suprimentos") { $cursos_look .= "Estoque e Compras – Introdução ás Práticas de Gestão Estratégica de Compras & Suprimentos" ;} 
 if ($this->cursos == "Marketing, Telemarketing & E-commerce") { $cursos_look .= "Marketing, Telemarketing & E-commerce" ;} 
 if ($this->cursos == "Programação com PHP") { $cursos_look .= "Programação com PHP" ;} 
 if ($this->cursos == "Programação com Linguagem Java") { $cursos_look .= "Programação com Linguagem Java" ;} 
 if ($this->cursos == "Desenvolvimento de Aplicativos para Android") { $cursos_look .= "Desenvolvimento de Aplicativos para Android" ;} 
?>
<span id="id_read_on_cursos" style=";<?php echo $sStyleReadLab_cursos; ?>"><?php echo NM_encode_input($cursos_look); ?></span><span id="id_read_off_cursos" style="<?php echo $sStyleReadInp_cursos; ?>">
 <span id="idAjaxSelect_cursos"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_cursos" name="cursos" size="1" alt="{type: 'select', enterTab: false}">
 <option value="Atendente de Farmácia e Drogaria" <?php  if ($this->cursos == "Atendente de Farmácia e Drogaria") { echo " selected" ;} ?>>Atendente de Farmácia e Drogaria</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Atendente de Farmácia e Drogaria'; ?>
 <option value="Departamento de Pessoal" <?php  if ($this->cursos == "Departamento de Pessoal") { echo " selected" ;} ?>>Departamento de Pessoal</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Departamento de Pessoal'; ?>
 <option value="Controle Diário e Fluxo de Caixa" <?php  if ($this->cursos == "Controle Diário e Fluxo de Caixa") { echo " selected" ;} ?>>Controle Diário e Fluxo de Caixa</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Controle Diário e Fluxo de Caixa'; ?>
 <option value="Recursos Humanos – Gerenciando Pessoas" <?php  if ($this->cursos == "Recursos Humanos – Gerenciando Pessoas") { echo " selected" ;} ?>>Recursos Humanos – Gerenciando Pessoas</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Recursos Humanos – Gerenciando Pessoas'; ?>
 <option value="Programa 5S – Qualidade Total nas Empresas" <?php  if ($this->cursos == "Programa 5S – Qualidade Total nas Empresas") { echo " selected" ;} ?>>Programa 5S – Qualidade Total nas Empresas</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Programa 5S – Qualidade Total nas Empresas'; ?>
 <option value="Sistema de Gestão Ambiental" <?php  if ($this->cursos == "Sistema de Gestão Ambiental") { echo " selected" ;} ?>>Sistema de Gestão Ambiental</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Sistema de Gestão Ambiental'; ?>
 <option value="Secretariado e Assessoria Administrativa" <?php  if ($this->cursos == "Secretariado e Assessoria Administrativa") { echo " selected" ;} ?>>Secretariado e Assessoria Administrativa</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Secretariado e Assessoria Administrativa'; ?>
 <option value="Técnicas de Administração – Gestão da Empresa Moderna" <?php  if ($this->cursos == "Técnicas de Administração – Gestão da Empresa Moderna") { echo " selected" ;} ?>>Técnicas de Administração – Gestão da Empresa Moderna</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Técnicas de Administração – Gestão da Empresa Moderna'; ?>
 <option value="Microsoft Excel" <?php  if ($this->cursos == "Microsoft Excel") { echo " selected" ;} ?>>Microsoft Excel</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Microsoft Excel'; ?>
 <option value="Microsoft Word" <?php  if ($this->cursos == "Microsoft Word") { echo " selected" ;} ?>>Microsoft Word</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Microsoft Word'; ?>
 <option value="Microsoft PowerPoint" <?php  if ($this->cursos == "Microsoft PowerPoint") { echo " selected" ;} ?>>Microsoft PowerPoint</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Microsoft PowerPoint'; ?>
 <option value="Conhecendo o Windows 8" <?php  if ($this->cursos == "Conhecendo o Windows 8") { echo " selected" ;} ?>>Conhecendo o Windows 8</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Conhecendo o Windows 8'; ?>
 <option value="Gestão de Pessoas" <?php  if ($this->cursos == "Gestão de Pessoas") { echo " selected" ;} ?>>Gestão de Pessoas</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Gestão de Pessoas'; ?>
 <option value="English" <?php  if ($this->cursos == "English") { echo " selected" ;} ?>>English</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'English'; ?>
 <option value="Gestão de Crédito e Cobrança" <?php  if ($this->cursos == "Gestão de Crédito e Cobrança") { echo " selected" ;} ?>>Gestão de Crédito e Cobrança</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Gestão de Crédito e Cobrança'; ?>
 <option value="Gestão de Vendas" <?php  if ($this->cursos == "Gestão de Vendas") { echo " selected" ;} ?>>Gestão de Vendas</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Gestão de Vendas'; ?>
 <option value="Empreendedorismo – Passo a Passo" <?php  if ($this->cursos == "Empreendedorismo – Passo a Passo") { echo " selected" ;} ?>>Empreendedorismo – Passo a Passo</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Empreendedorismo – Passo a Passo'; ?>
 <option value="Operador de Caixa – Qualificando a Linha de Frente" <?php  if ($this->cursos == "Operador de Caixa – Qualificando a Linha de Frente") { echo " selected" ;} ?>>Operador de Caixa – Qualificando a Linha de Frente</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Operador de Caixa – Qualificando a Linha de Frente'; ?>
 <option value="Técnicas de Vendas" <?php  if ($this->cursos == "Técnicas de Vendas") { echo " selected" ;} ?>>Técnicas de Vendas</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Técnicas de Vendas'; ?>
 <option value="Estoque e Compras – Introdução ás Práticas de Gestão Estratégica de Compras & Suprimentos" <?php  if ($this->cursos == "Estoque e Compras – Introdução ás Práticas de Gestão Estratégica de Compras & Suprimentos") { echo " selected" ;} ?>>Estoque e Compras – Introdução ás Práticas de Gestão Estratégica de Compras & Suprimentos</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Estoque e Compras – Introdução ás Práticas de Gestão Estratégica de Compras & Suprimentos'; ?>
 <option value="Marketing, Telemarketing & E-commerce" <?php  if ($this->cursos == "Marketing, Telemarketing & E-commerce") { echo " selected" ;} ?>>Marketing, Telemarketing & E-commerce</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Marketing, Telemarketing & E-commerce'; ?>
 <option value="Programação com PHP" <?php  if ($this->cursos == "Programação com PHP") { echo " selected" ;} ?>>Programação com PHP</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Programação com PHP'; ?>
 <option value="Programação com Linguagem Java" <?php  if ($this->cursos == "Programação com Linguagem Java") { echo " selected" ;} ?>>Programação com Linguagem Java</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Programação com Linguagem Java'; ?>
 <option value="Desenvolvimento de Aplicativos para Android" <?php  if ($this->cursos == "Desenvolvimento de Aplicativos para Android") { echo " selected" ;} ?>>Desenvolvimento de Aplicativos para Android</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['Lookup_cursos'][] = 'Desenvolvimento de Aplicativos para Android'; ?>
 </select></span>
</span><?php  }?>
<span class="scFormPopupBubble"><span class="scFormPopupTrigger"><?php echo nmButtonOutput($this->arr_buttons, "bfieldhelp", "return false;", "return false;", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</span><table class="scFormPopup"><tbody><?php
if (isset($_SESSION['scriptcase']['reg_conf']['html_dir']) && $_SESSION['scriptcase']['reg_conf']['html_dir'] == " DIR='RTL'") {
?>
<tr><td class="scFormPopupTopRight scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopLeft scFormPopupCorner"></td></tr><tr><td class="scFormPopupRight"></td><td class="scFormPopupContent">São ás áreas que terão treinamentos gratuítos!</td><td class="scFormPopupLeft"></td></tr><tr><td class="scFormPopupBottomRight scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomLeft scFormPopupCorner"></td></tr><?php
} else {
?>
<tr><td class="scFormPopupTopLeft scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopRight scFormPopupCorner"></td></tr><tr><td class="scFormPopupLeft"></td><td class="scFormPopupContent">São ás áreas que terão treinamentos gratuítos!</td><td class="scFormPopupRight"></td></tr><tr><td class="scFormPopupBottomLeft scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomRight scFormPopupCorner"></td></tr><?php
}
?>
</tbody></table></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cursos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cursos_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_cursos_dumb = ('' == $sStyleHidden_cursos) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cursos_dumb" style="<?php echo $sStyleHidden_cursos_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['escola']))
    {
        $this->nm_new_label['escola'] = "Escola ou instituição";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $escola = $this->escola;
   $sStyleHidden_escola = '';
   if (isset($this->nmgp_cmp_hidden['escola']) && $this->nmgp_cmp_hidden['escola'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['escola']);
       $sStyleHidden_escola = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_escola = 'display: none;';
   $sStyleReadInp_escola = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['escola']) && $this->nmgp_cmp_readonly['escola'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['escola']);
       $sStyleReadLab_escola = '';
       $sStyleReadInp_escola = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['escola']) && $this->nmgp_cmp_hidden['escola'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="escola" value="<?php echo NM_encode_input($escola) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_escola" style="<?php echo $sStyleHidden_escola; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_escola"><?php echo $this->nm_new_label['escola']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["escola"]) &&  $this->nmgp_cmp_readonly["escola"] == "on") { 

 ?>
<input type="hidden" name="escola" value="<?php echo NM_encode_input($escola) . "\">" . $escola . ""; ?>
<?php } else { ?>
<span id="id_read_on_escola" class="sc-ui-readonly-escola" style=";<?php echo $sStyleReadLab_escola; ?>"><?php echo NM_encode_input($this->escola); ?></span><span id="id_read_off_escola" style="white-space: nowrap;<?php echo $sStyleReadInp_escola; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_escola" type=text name="escola" value="<?php echo NM_encode_input($escola) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
<span class="scFormPopupBubble"><span class="scFormPopupTrigger"><?php echo nmButtonOutput($this->arr_buttons, "bfieldhelp", "return false;", "return false;", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</span><table class="scFormPopup"><tbody><?php
if (isset($_SESSION['scriptcase']['reg_conf']['html_dir']) && $_SESSION['scriptcase']['reg_conf']['html_dir'] == " DIR='RTL'") {
?>
<tr><td class="scFormPopupTopRight scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopLeft scFormPopupCorner"></td></tr><tr><td class="scFormPopupRight"></td><td class="scFormPopupContent">Escola que estudou ou se está estudando atualmente,</td><td class="scFormPopupLeft"></td></tr><tr><td class="scFormPopupBottomRight scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomLeft scFormPopupCorner"></td></tr><?php
} else {
?>
<tr><td class="scFormPopupTopLeft scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopRight scFormPopupCorner"></td></tr><tr><td class="scFormPopupLeft"></td><td class="scFormPopupContent">Escola que estudou ou se está estudando atualmente,</td><td class="scFormPopupRight"></td></tr><tr><td class="scFormPopupBottomLeft scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomRight scFormPopupCorner"></td></tr><?php
}
?>
</tbody></table></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_escola_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_escola_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr>
<tr><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "birpara", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", "brec_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if (isset($this->NMSC_modal) && $this->NMSC_modal == "ok") {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "F") { ?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['total'] + 1)?>);</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
</td></tr> 
<?php
  }
?>
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_tbl_pesquisa");
 parent.scAjaxDetailHeight("form_tbl_pesquisa", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailHeight("form_tbl_pesquisa", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
?>
<script type="text/javascript">
_scAjaxShowMessage(scMsgDefTitle, "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_pesquisa']['sc_modal'])
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
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
</body> 
</html> 

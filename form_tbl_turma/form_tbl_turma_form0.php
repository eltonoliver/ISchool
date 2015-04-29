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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("Cadastrar Turma"); } else { echo strip_tags("Editar Turma"); } ?></TITLE>
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
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/smartspin/smartspinner.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/smartspin/smartspinner.css" type="text/css" />
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
?>

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_tbl_turma_sajax_js.php");
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

include_once('form_tbl_turma_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['recarga'];
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
 include_once("form_tbl_turma_js0.php");
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
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['insert_validation']; ?>">
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
$int_iframe_padding = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe']) ? 0 : "0px";
?>
<?php
$_SESSION['scriptcase']['error_span_title']['form_tbl_turma'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_tbl_turma'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
<table id="main_table_form"  align="center" cellpadding="<?php echo $int_iframe_padding; ?>" cellspacing=0  width="80%">
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['mostra_cab'] != "N"))
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
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "Cadastrar Turma"; } else { echo "Editar Turma"; } ?></span></td>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['fast_search'][2] : "";
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
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "nm_atualiza ('excluir');", "nm_atualiza ('excluir');", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "R") && (!$this->Embutida_call)) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] == "R") && (!$this->Embutida_call)) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['empty_filter'] = true;
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

    <TD class="scFormDataOdd" id="hidden_field_data_id" style="<?php echo $sStyleHidden_id; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_id"><?php echo $this->nm_new_label['id']; ?></span></span><br>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { 
 ?>
<span id="id_read_on_id" style=";<?php echo $sStyleReadLab_id; ?>"><?php echo NM_encode_input($this->id); ?></span><span id="id_read_off_id" style="<?php echo $sStyleReadInp_id; ?>"><input type="hidden" name="id" value="<?php echo NM_encode_input($id) . "\">"?><span id="id_ajax_label_id"><?php echo nl2br($id); ?></span>
</span><?php } else { ?>
&nbsp;
<?php } ?>
</span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['nome']))
    {
        $this->nm_new_label['nome'] = "Nome";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nome = $this->nome;
   $sStyleHidden_nome = '';
   if (isset($this->nmgp_cmp_hidden['nome']) && $this->nmgp_cmp_hidden['nome'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nome']);
       $sStyleHidden_nome = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nome = 'display: none;';
   $sStyleReadInp_nome = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nome']) && $this->nmgp_cmp_readonly['nome'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nome']);
       $sStyleReadLab_nome = '';
       $sStyleReadInp_nome = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nome']) && $this->nmgp_cmp_hidden['nome'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nome" value="<?php echo NM_encode_input($nome) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_nome" style="<?php echo $sStyleHidden_nome; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_nome"><?php echo $this->nm_new_label['nome']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nome"]) &&  $this->nmgp_cmp_readonly["nome"] == "on") { 

 ?>
<input type="hidden" name="nome" value="<?php echo NM_encode_input($nome) . "\">" . $nome . ""; ?>
<?php } else { ?>
<span id="id_read_on_nome" class="sc-ui-readonly-nome" style=";<?php echo $sStyleReadLab_nome; ?>"><?php echo NM_encode_input($this->nome); ?></span><span id="id_read_off_nome" style="white-space: nowrap;<?php echo $sStyleReadInp_nome; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_nome" type=text name="nome" value="<?php echo NM_encode_input($nome) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nome_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nome_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_id_dumb = ('' == $sStyleHidden_id) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_id_dumb" style="<?php echo $sStyleHidden_id_dumb; ?>"></TD>
<?php $sStyleHidden_nome_dumb = ('' == $sStyleHidden_nome) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nome_dumb" style="<?php echo $sStyleHidden_nome_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['abreviacao']))
    {
        $this->nm_new_label['abreviacao'] = "Abreviação";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $abreviacao = $this->abreviacao;
   $sStyleHidden_abreviacao = '';
   if (isset($this->nmgp_cmp_hidden['abreviacao']) && $this->nmgp_cmp_hidden['abreviacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['abreviacao']);
       $sStyleHidden_abreviacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_abreviacao = 'display: none;';
   $sStyleReadInp_abreviacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['abreviacao']) && $this->nmgp_cmp_readonly['abreviacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['abreviacao']);
       $sStyleReadLab_abreviacao = '';
       $sStyleReadInp_abreviacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['abreviacao']) && $this->nmgp_cmp_hidden['abreviacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="abreviacao" value="<?php echo NM_encode_input($abreviacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_abreviacao" style="<?php echo $sStyleHidden_abreviacao; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_abreviacao"><?php echo $this->nm_new_label['abreviacao']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["abreviacao"]) &&  $this->nmgp_cmp_readonly["abreviacao"] == "on") { 

 ?>
<input type="hidden" name="abreviacao" value="<?php echo NM_encode_input($abreviacao) . "\">" . $abreviacao . ""; ?>
<?php } else { ?>
<span id="id_read_on_abreviacao" class="sc-ui-readonly-abreviacao" style=";<?php echo $sStyleReadLab_abreviacao; ?>"><?php echo NM_encode_input($this->abreviacao); ?></span><span id="id_read_off_abreviacao" style="white-space: nowrap;<?php echo $sStyleReadInp_abreviacao; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_abreviacao" type=text name="abreviacao" value="<?php echo NM_encode_input($abreviacao) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
<span class="scFormPopupBubble"><span class="scFormPopupTrigger"><?php echo nmButtonOutput($this->arr_buttons, "bfieldhelp", "return false;", "return false;", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</span><table class="scFormPopup"><tbody><?php
if (isset($_SESSION['scriptcase']['reg_conf']['html_dir']) && $_SESSION['scriptcase']['reg_conf']['html_dir'] == " DIR='RTL'") {
?>
<tr><td class="scFormPopupTopRight scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopLeft scFormPopupCorner"></td></tr><tr><td class="scFormPopupRight"></td><td class="scFormPopupContent">Exemplo: ADM01, ADM02</td><td class="scFormPopupLeft"></td></tr><tr><td class="scFormPopupBottomRight scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomLeft scFormPopupCorner"></td></tr><?php
} else {
?>
<tr><td class="scFormPopupTopLeft scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopRight scFormPopupCorner"></td></tr><tr><td class="scFormPopupLeft"></td><td class="scFormPopupContent">Exemplo: ADM01, ADM02</td><td class="scFormPopupRight"></td></tr><tr><td class="scFormPopupBottomLeft scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomRight scFormPopupCorner"></td></tr><?php
}
?>
</tbody></table></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_abreviacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_abreviacao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['tbl_curso_id']))
   {
       $this->nm_new_label['tbl_curso_id'] = "Curso";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tbl_curso_id = $this->tbl_curso_id;
   $sStyleHidden_tbl_curso_id = '';
   if (isset($this->nmgp_cmp_hidden['tbl_curso_id']) && $this->nmgp_cmp_hidden['tbl_curso_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tbl_curso_id']);
       $sStyleHidden_tbl_curso_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tbl_curso_id = 'display: none;';
   $sStyleReadInp_tbl_curso_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tbl_curso_id']) && $this->nmgp_cmp_readonly['tbl_curso_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tbl_curso_id']);
       $sStyleReadLab_tbl_curso_id = '';
       $sStyleReadInp_tbl_curso_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tbl_curso_id']) && $this->nmgp_cmp_hidden['tbl_curso_id'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="tbl_curso_id" value="<?php echo NM_encode_input($this->tbl_curso_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_tbl_curso_id" style="<?php echo $sStyleHidden_tbl_curso_id; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_tbl_curso_id"><?php echo $this->nm_new_label['tbl_curso_id']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['php_cmp_required']['tbl_curso_id']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['php_cmp_required']['tbl_curso_id'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tbl_curso_id"]) &&  $this->nmgp_cmp_readonly["tbl_curso_id"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id'] = array(); 
    }

   $old_value_id = $this->id;
   $old_value_datainicio = $this->datainicio;
   $old_value_datafim = $this->datafim;
   $old_value_datafimmatricula = $this->datafimmatricula;
   $old_value_horaentrada = $this->horaentrada;
   $old_value_horasaida = $this->horasaida;
   $old_value_qtdvagas = $this->qtdvagas;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id = $this->id;
   $unformatted_value_datainicio = $this->datainicio;
   $unformatted_value_datafim = $this->datafim;
   $unformatted_value_datafimmatricula = $this->datafimmatricula;
   $unformatted_value_horaentrada = $this->horaentrada;
   $unformatted_value_horasaida = $this->horasaida;
   $unformatted_value_qtdvagas = $this->qtdvagas;

   $nm_comando = "SELECT id, nome 
FROM tbl_curso 
ORDER BY nome";

   $this->id = $old_value_id;
   $this->datainicio = $old_value_datainicio;
   $this->datafim = $old_value_datafim;
   $this->datafimmatricula = $old_value_datafimmatricula;
   $this->horaentrada = $old_value_horaentrada;
   $this->horasaida = $old_value_horasaida;
   $this->qtdvagas = $old_value_qtdvagas;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id'][] = $rs->fields[0];
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
   $x = 0; 
   $tbl_curso_id_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->tbl_curso_id_1))
          {
              foreach ($this->tbl_curso_id_1 as $tmp_tbl_curso_id)
              {
                  if (trim($tmp_tbl_curso_id) === trim($cadaselect[1])) { $tbl_curso_id_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->tbl_curso_id) === trim($cadaselect[1])) { $tbl_curso_id_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="tbl_curso_id" value="<?php echo NM_encode_input($tbl_curso_id) . "\">" . $tbl_curso_id_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id'] = array(); 
    }

   $old_value_id = $this->id;
   $old_value_datainicio = $this->datainicio;
   $old_value_datafim = $this->datafim;
   $old_value_datafimmatricula = $this->datafimmatricula;
   $old_value_horaentrada = $this->horaentrada;
   $old_value_horasaida = $this->horasaida;
   $old_value_qtdvagas = $this->qtdvagas;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id = $this->id;
   $unformatted_value_datainicio = $this->datainicio;
   $unformatted_value_datafim = $this->datafim;
   $unformatted_value_datafimmatricula = $this->datafimmatricula;
   $unformatted_value_horaentrada = $this->horaentrada;
   $unformatted_value_horasaida = $this->horasaida;
   $unformatted_value_qtdvagas = $this->qtdvagas;

   $nm_comando = "SELECT id, nome 
FROM tbl_curso 
ORDER BY nome";

   $this->id = $old_value_id;
   $this->datainicio = $old_value_datainicio;
   $this->datafim = $old_value_datafim;
   $this->datafimmatricula = $old_value_datafimmatricula;
   $this->horaentrada = $old_value_horaentrada;
   $this->horasaida = $old_value_horasaida;
   $this->qtdvagas = $old_value_qtdvagas;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_tbl_curso_id'][] = $rs->fields[0];
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
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $tbl_curso_id_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->tbl_curso_id_1))
          {
              foreach ($this->tbl_curso_id_1 as $tmp_tbl_curso_id)
              {
                  if (trim($tmp_tbl_curso_id) === trim($cadaselect[1])) { $tbl_curso_id_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->tbl_curso_id) === trim($cadaselect[1])) { $tbl_curso_id_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_tbl_curso_id\" style=\";" .  $sStyleReadLab_tbl_curso_id . "\">" . NM_encode_input($tbl_curso_id_look) . "</span><span id=\"id_read_off_tbl_curso_id\" style=\"" . $sStyleReadInp_tbl_curso_id . "\">";
   echo " <span id=\"idAjaxSelect_tbl_curso_id\"><select class=\"sc-js-input scFormObjectOdd\" style=\";\" id=\"id_sc_field_tbl_curso_id\" name=\"tbl_curso_id\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->tbl_curso_id) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->tbl_curso_id)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tbl_curso_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tbl_curso_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_abreviacao_dumb = ('' == $sStyleHidden_abreviacao) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_abreviacao_dumb" style="<?php echo $sStyleHidden_abreviacao_dumb; ?>"></TD>
<?php $sStyleHidden_tbl_curso_id_dumb = ('' == $sStyleHidden_tbl_curso_id) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_tbl_curso_id_dumb" style="<?php echo $sStyleHidden_tbl_curso_id_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['nivel']))
   {
       $this->nm_new_label['nivel'] = "Nível";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nivel = $this->nivel;
   $sStyleHidden_nivel = '';
   if (isset($this->nmgp_cmp_hidden['nivel']) && $this->nmgp_cmp_hidden['nivel'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nivel']);
       $sStyleHidden_nivel = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nivel = 'display: none;';
   $sStyleReadInp_nivel = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nivel']) && $this->nmgp_cmp_readonly['nivel'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nivel']);
       $sStyleReadLab_nivel = '';
       $sStyleReadInp_nivel = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nivel']) && $this->nmgp_cmp_hidden['nivel'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="nivel" value="<?php echo NM_encode_input($this->nivel) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_nivel" style="<?php echo $sStyleHidden_nivel; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_nivel"><?php echo $this->nm_new_label['nivel']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nivel"]) &&  $this->nmgp_cmp_readonly["nivel"] == "on") { 

$nivel_look = "";
 if ($this->nivel == "1") { $nivel_look .= "Básico" ;} 
 if ($this->nivel == "2") { $nivel_look .= "Intermediário" ;} 
 if ($this->nivel == "3") { $nivel_look .= "Avançado" ;} 
 if ($this->nivel == "4") { $nivel_look .= "Ensino Fundamental" ;} 
 if ($this->nivel == "5") { $nivel_look .= "Ensino Médio" ;} 
 if ($this->nivel == "6") { $nivel_look .= "Ensino Técnico" ;} 
 if ($this->nivel == "7") { $nivel_look .= "Ensino Superior" ;} 
 if ($this->nivel == "8") { $nivel_look .= "Cursos Livres" ;} 
 if ($this->nivel == "9") { $nivel_look .= "Curso EAD" ;} 
?>
<input type="hidden" name="nivel" value="<?php echo NM_encode_input($nivel) . "\">" . $nivel_look . ""; ?>
<?php } else { ?>
<?php

$nivel_look = "";
 if ($this->nivel == "1") { $nivel_look .= "Básico" ;} 
 if ($this->nivel == "2") { $nivel_look .= "Intermediário" ;} 
 if ($this->nivel == "3") { $nivel_look .= "Avançado" ;} 
 if ($this->nivel == "4") { $nivel_look .= "Ensino Fundamental" ;} 
 if ($this->nivel == "5") { $nivel_look .= "Ensino Médio" ;} 
 if ($this->nivel == "6") { $nivel_look .= "Ensino Técnico" ;} 
 if ($this->nivel == "7") { $nivel_look .= "Ensino Superior" ;} 
 if ($this->nivel == "8") { $nivel_look .= "Cursos Livres" ;} 
 if ($this->nivel == "9") { $nivel_look .= "Curso EAD" ;} 
?>
<span id="id_read_on_nivel" style=";<?php echo $sStyleReadLab_nivel; ?>"><?php echo NM_encode_input($nivel_look); ?></span><span id="id_read_off_nivel" style="<?php echo $sStyleReadInp_nivel; ?>">
 <span id="idAjaxSelect_nivel"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_nivel" name="nivel" size="1" alt="{type: 'select', enterTab: false}">
 <option value="1" <?php  if ($this->nivel == "1") { echo " selected" ;} ?>>Básico</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_nivel'][] = '1'; ?>
 <option value="2" <?php  if ($this->nivel == "2") { echo " selected" ;} ?>>Intermediário</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_nivel'][] = '2'; ?>
 <option value="3" <?php  if ($this->nivel == "3") { echo " selected" ;} ?>>Avançado</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_nivel'][] = '3'; ?>
 <option value="4" <?php  if ($this->nivel == "4") { echo " selected" ;} ?>>Ensino Fundamental</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_nivel'][] = '4'; ?>
 <option value="5" <?php  if ($this->nivel == "5") { echo " selected" ;} ?>>Ensino Médio</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_nivel'][] = '5'; ?>
 <option value="6" <?php  if ($this->nivel == "6") { echo " selected" ;} ?>>Ensino Técnico</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_nivel'][] = '6'; ?>
 <option value="7" <?php  if ($this->nivel == "7") { echo " selected" ;} ?>>Ensino Superior</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_nivel'][] = '7'; ?>
 <option value="8" <?php  if ($this->nivel == "8") { echo " selected" ;} ?>>Cursos Livres</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_nivel'][] = '8'; ?>
 <option value="9" <?php  if ($this->nivel == "9") { echo " selected" ;} ?>>Curso EAD</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_nivel'][] = '9'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nivel_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nivel_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['periodoletivo']))
   {
       $this->nm_new_label['periodoletivo'] = "Período Letivo";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $periodoletivo = $this->periodoletivo;
   $sStyleHidden_periodoletivo = '';
   if (isset($this->nmgp_cmp_hidden['periodoletivo']) && $this->nmgp_cmp_hidden['periodoletivo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['periodoletivo']);
       $sStyleHidden_periodoletivo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_periodoletivo = 'display: none;';
   $sStyleReadInp_periodoletivo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['periodoletivo']) && $this->nmgp_cmp_readonly['periodoletivo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['periodoletivo']);
       $sStyleReadLab_periodoletivo = '';
       $sStyleReadInp_periodoletivo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['periodoletivo']) && $this->nmgp_cmp_hidden['periodoletivo'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="periodoletivo" value="<?php echo NM_encode_input($this->periodoletivo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_periodoletivo" style="<?php echo $sStyleHidden_periodoletivo; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_periodoletivo"><?php echo $this->nm_new_label['periodoletivo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["periodoletivo"]) &&  $this->nmgp_cmp_readonly["periodoletivo"] == "on") { 

$periodoletivo_look = "";
 if ($this->periodoletivo == "1") { $periodoletivo_look .= "2013" ;} 
 if ($this->periodoletivo == "2") { $periodoletivo_look .= "2014" ;} 
 if ($this->periodoletivo == "3") { $periodoletivo_look .= "2015" ;} 
 if ($this->periodoletivo == "4") { $periodoletivo_look .= "2016" ;} 
 if ($this->periodoletivo == "5") { $periodoletivo_look .= "2017" ;} 
 if ($this->periodoletivo == "6") { $periodoletivo_look .= "2018" ;} 
 if ($this->periodoletivo == "7") { $periodoletivo_look .= "2019" ;} 
 if ($this->periodoletivo == "8") { $periodoletivo_look .= "2020" ;} 
?>
<input type="hidden" name="periodoletivo" value="<?php echo NM_encode_input($periodoletivo) . "\">" . $periodoletivo_look . ""; ?>
<?php } else { ?>
<?php

$periodoletivo_look = "";
 if ($this->periodoletivo == "1") { $periodoletivo_look .= "2013" ;} 
 if ($this->periodoletivo == "2") { $periodoletivo_look .= "2014" ;} 
 if ($this->periodoletivo == "3") { $periodoletivo_look .= "2015" ;} 
 if ($this->periodoletivo == "4") { $periodoletivo_look .= "2016" ;} 
 if ($this->periodoletivo == "5") { $periodoletivo_look .= "2017" ;} 
 if ($this->periodoletivo == "6") { $periodoletivo_look .= "2018" ;} 
 if ($this->periodoletivo == "7") { $periodoletivo_look .= "2019" ;} 
 if ($this->periodoletivo == "8") { $periodoletivo_look .= "2020" ;} 
?>
<span id="id_read_on_periodoletivo" style=";<?php echo $sStyleReadLab_periodoletivo; ?>"><?php echo NM_encode_input($periodoletivo_look); ?></span><span id="id_read_off_periodoletivo" style="<?php echo $sStyleReadInp_periodoletivo; ?>">
 <span id="idAjaxSelect_periodoletivo"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_periodoletivo" name="periodoletivo" size="1" alt="{type: 'select', enterTab: false}">
 <option value="1" <?php  if ($this->periodoletivo == "1") { echo " selected" ;} ?>>2013</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_periodoletivo'][] = '1'; ?>
 <option value="2" <?php  if ($this->periodoletivo == "2") { echo " selected" ;} ?>>2014</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_periodoletivo'][] = '2'; ?>
 <option value="3" <?php  if ($this->periodoletivo == "3") { echo " selected" ;} ?>>2015</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_periodoletivo'][] = '3'; ?>
 <option value="4" <?php  if ($this->periodoletivo == "4") { echo " selected" ;} ?>>2016</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_periodoletivo'][] = '4'; ?>
 <option value="5" <?php  if ($this->periodoletivo == "5") { echo " selected" ;} ?>>2017</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_periodoletivo'][] = '5'; ?>
 <option value="6" <?php  if ($this->periodoletivo == "6") { echo " selected" ;} ?>>2018</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_periodoletivo'][] = '6'; ?>
 <option value="7" <?php  if ($this->periodoletivo == "7") { echo " selected" ;} ?>>2019</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_periodoletivo'][] = '7'; ?>
 <option value="8" <?php  if ($this->periodoletivo == "8") { echo " selected" ;} ?>>2020</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_periodoletivo'][] = '8'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_periodoletivo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_periodoletivo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_nivel_dumb = ('' == $sStyleHidden_nivel) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nivel_dumb" style="<?php echo $sStyleHidden_nivel_dumb; ?>"></TD>
<?php $sStyleHidden_periodoletivo_dumb = ('' == $sStyleHidden_periodoletivo) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_periodoletivo_dumb" style="<?php echo $sStyleHidden_periodoletivo_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['turno']))
   {
       $this->nm_new_label['turno'] = "Turno";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $turno = $this->turno;
   $sStyleHidden_turno = '';
   if (isset($this->nmgp_cmp_hidden['turno']) && $this->nmgp_cmp_hidden['turno'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['turno']);
       $sStyleHidden_turno = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_turno = 'display: none;';
   $sStyleReadInp_turno = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['turno']) && $this->nmgp_cmp_readonly['turno'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['turno']);
       $sStyleReadLab_turno = '';
       $sStyleReadInp_turno = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['turno']) && $this->nmgp_cmp_hidden['turno'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="turno" value="<?php echo NM_encode_input($this->turno) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_turno" style="<?php echo $sStyleHidden_turno; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_turno"><?php echo $this->nm_new_label['turno']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["turno"]) &&  $this->nmgp_cmp_readonly["turno"] == "on") { 

$turno_look = "";
 if ($this->turno == "1") { $turno_look .= "Manhã" ;} 
 if ($this->turno == "2") { $turno_look .= "Tarde" ;} 
 if ($this->turno == "3") { $turno_look .= "Noite" ;} 
 if ($this->turno == "4") { $turno_look .= "Integral" ;} 
?>
<input type="hidden" name="turno" value="<?php echo NM_encode_input($turno) . "\">" . $turno_look . ""; ?>
<?php } else { ?>
<?php

$turno_look = "";
 if ($this->turno == "1") { $turno_look .= "Manhã" ;} 
 if ($this->turno == "2") { $turno_look .= "Tarde" ;} 
 if ($this->turno == "3") { $turno_look .= "Noite" ;} 
 if ($this->turno == "4") { $turno_look .= "Integral" ;} 
?>
<span id="id_read_on_turno" style=";<?php echo $sStyleReadLab_turno; ?>"><?php echo NM_encode_input($turno_look); ?></span><span id="id_read_off_turno" style="<?php echo $sStyleReadInp_turno; ?>">
 <span id="idAjaxSelect_turno"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_turno" name="turno" size="1" alt="{type: 'select', enterTab: false}">
 <option value="1" <?php  if ($this->turno == "1") { echo " selected" ;} ?>>Manhã</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_turno'][] = '1'; ?>
 <option value="2" <?php  if ($this->turno == "2") { echo " selected" ;} ?>>Tarde</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_turno'][] = '2'; ?>
 <option value="3" <?php  if ($this->turno == "3") { echo " selected" ;} ?>>Noite</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_turno'][] = '3'; ?>
 <option value="4" <?php  if ($this->turno == "4") { echo " selected" ;} ?>>Integral</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_turno'][] = '4'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_turno_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_turno_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['datainicio']))
    {
        $this->nm_new_label['datainicio'] = "Data de Início";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $datainicio = $this->datainicio;
   $sStyleHidden_datainicio = '';
   if (isset($this->nmgp_cmp_hidden['datainicio']) && $this->nmgp_cmp_hidden['datainicio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['datainicio']);
       $sStyleHidden_datainicio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_datainicio = 'display: none;';
   $sStyleReadInp_datainicio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['datainicio']) && $this->nmgp_cmp_readonly['datainicio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['datainicio']);
       $sStyleReadLab_datainicio = '';
       $sStyleReadInp_datainicio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['datainicio']) && $this->nmgp_cmp_hidden['datainicio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="datainicio" value="<?php echo NM_encode_input($datainicio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_datainicio" style="<?php echo $sStyleHidden_datainicio; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_datainicio"><?php echo $this->nm_new_label['datainicio']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['php_cmp_required']['datainicio']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['php_cmp_required']['datainicio'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["datainicio"]) &&  $this->nmgp_cmp_readonly["datainicio"] == "on") { 

 ?>
<input type="hidden" name="datainicio" value="<?php echo NM_encode_input($datainicio) . "\">" . $datainicio . ""; ?>
<?php } else { ?>
<span id="id_read_on_datainicio" class="sc-ui-readonly-datainicio" style=";<?php echo $sStyleReadLab_datainicio; ?>"><?php echo NM_encode_input($datainicio); ?></span><span id="id_read_off_datainicio" style="white-space: nowrap;<?php echo $sStyleReadInp_datainicio; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_datainicio" type=text name="datainicio" value="<?php echo NM_encode_input($datainicio) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['datainicio']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['datainicio']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['datainicio']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_datainicio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_datainicio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_turno_dumb = ('' == $sStyleHidden_turno) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_turno_dumb" style="<?php echo $sStyleHidden_turno_dumb; ?>"></TD>
<?php $sStyleHidden_datainicio_dumb = ('' == $sStyleHidden_datainicio) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_datainicio_dumb" style="<?php echo $sStyleHidden_datainicio_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['datafim']))
    {
        $this->nm_new_label['datafim'] = "Data de Final";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $datafim = $this->datafim;
   $sStyleHidden_datafim = '';
   if (isset($this->nmgp_cmp_hidden['datafim']) && $this->nmgp_cmp_hidden['datafim'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['datafim']);
       $sStyleHidden_datafim = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_datafim = 'display: none;';
   $sStyleReadInp_datafim = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['datafim']) && $this->nmgp_cmp_readonly['datafim'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['datafim']);
       $sStyleReadLab_datafim = '';
       $sStyleReadInp_datafim = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['datafim']) && $this->nmgp_cmp_hidden['datafim'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="datafim" value="<?php echo NM_encode_input($datafim) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_datafim" style="<?php echo $sStyleHidden_datafim; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_datafim"><?php echo $this->nm_new_label['datafim']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['php_cmp_required']['datafim']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['php_cmp_required']['datafim'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["datafim"]) &&  $this->nmgp_cmp_readonly["datafim"] == "on") { 

 ?>
<input type="hidden" name="datafim" value="<?php echo NM_encode_input($datafim) . "\">" . $datafim . ""; ?>
<?php } else { ?>
<span id="id_read_on_datafim" class="sc-ui-readonly-datafim" style=";<?php echo $sStyleReadLab_datafim; ?>"><?php echo NM_encode_input($datafim); ?></span><span id="id_read_off_datafim" style="white-space: nowrap;<?php echo $sStyleReadInp_datafim; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_datafim" type=text name="datafim" value="<?php echo NM_encode_input($datafim) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['datafim']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['datafim']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['datafim']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_datafim_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_datafim_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['datafimmatricula']))
    {
        $this->nm_new_label['datafimmatricula'] = "Encerramento de Matrícula";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $datafimmatricula = $this->datafimmatricula;
   $sStyleHidden_datafimmatricula = '';
   if (isset($this->nmgp_cmp_hidden['datafimmatricula']) && $this->nmgp_cmp_hidden['datafimmatricula'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['datafimmatricula']);
       $sStyleHidden_datafimmatricula = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_datafimmatricula = 'display: none;';
   $sStyleReadInp_datafimmatricula = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['datafimmatricula']) && $this->nmgp_cmp_readonly['datafimmatricula'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['datafimmatricula']);
       $sStyleReadLab_datafimmatricula = '';
       $sStyleReadInp_datafimmatricula = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['datafimmatricula']) && $this->nmgp_cmp_hidden['datafimmatricula'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="datafimmatricula" value="<?php echo NM_encode_input($datafimmatricula) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_datafimmatricula" style="<?php echo $sStyleHidden_datafimmatricula; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_datafimmatricula"><?php echo $this->nm_new_label['datafimmatricula']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['php_cmp_required']['datafimmatricula']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['php_cmp_required']['datafimmatricula'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["datafimmatricula"]) &&  $this->nmgp_cmp_readonly["datafimmatricula"] == "on") { 

 ?>
<input type="hidden" name="datafimmatricula" value="<?php echo NM_encode_input($datafimmatricula) . "\">" . $datafimmatricula . ""; ?>
<?php } else { ?>
<span id="id_read_on_datafimmatricula" class="sc-ui-readonly-datafimmatricula" style=";<?php echo $sStyleReadLab_datafimmatricula; ?>"><?php echo NM_encode_input($datafimmatricula); ?></span><span id="id_read_off_datafimmatricula" style="white-space: nowrap;<?php echo $sStyleReadInp_datafimmatricula; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_datafimmatricula" type=text name="datafimmatricula" value="<?php echo NM_encode_input($datafimmatricula) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['datafimmatricula']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['datafimmatricula']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['datafimmatricula']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_datafimmatricula_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_datafimmatricula_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_datafim_dumb = ('' == $sStyleHidden_datafim) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_datafim_dumb" style="<?php echo $sStyleHidden_datafim_dumb; ?>"></TD>
<?php $sStyleHidden_datafimmatricula_dumb = ('' == $sStyleHidden_datafimmatricula) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_datafimmatricula_dumb" style="<?php echo $sStyleHidden_datafimmatricula_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['horaentrada']))
    {
        $this->nm_new_label['horaentrada'] = "Hora de Entrada";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $horaentrada = $this->horaentrada;
   $sStyleHidden_horaentrada = '';
   if (isset($this->nmgp_cmp_hidden['horaentrada']) && $this->nmgp_cmp_hidden['horaentrada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['horaentrada']);
       $sStyleHidden_horaentrada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_horaentrada = 'display: none;';
   $sStyleReadInp_horaentrada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['horaentrada']) && $this->nmgp_cmp_readonly['horaentrada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['horaentrada']);
       $sStyleReadLab_horaentrada = '';
       $sStyleReadInp_horaentrada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['horaentrada']) && $this->nmgp_cmp_hidden['horaentrada'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="horaentrada" value="<?php echo NM_encode_input($horaentrada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_horaentrada" style="<?php echo $sStyleHidden_horaentrada; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_horaentrada"><?php echo $this->nm_new_label['horaentrada']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['php_cmp_required']['horaentrada']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['php_cmp_required']['horaentrada'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["horaentrada"]) &&  $this->nmgp_cmp_readonly["horaentrada"] == "on") { 

 ?>
<input type="hidden" name="horaentrada" value="<?php echo NM_encode_input($horaentrada) . "\">" . $horaentrada . ""; ?>
<?php } else { ?>
<span id="id_read_on_horaentrada" class="sc-ui-readonly-horaentrada" style=";<?php echo $sStyleReadLab_horaentrada; ?>"><?php echo NM_encode_input($horaentrada); ?></span><span id="id_read_off_horaentrada" style="white-space: nowrap;<?php echo $sStyleReadInp_horaentrada; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_horaentrada" type=text name="horaentrada" value="<?php echo NM_encode_input($horaentrada) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['horaentrada']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['horaentrada']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['horaentrada']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_horaentrada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_horaentrada_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['horasaida']))
    {
        $this->nm_new_label['horasaida'] = "Hora de Saída";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $horasaida = $this->horasaida;
   $sStyleHidden_horasaida = '';
   if (isset($this->nmgp_cmp_hidden['horasaida']) && $this->nmgp_cmp_hidden['horasaida'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['horasaida']);
       $sStyleHidden_horasaida = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_horasaida = 'display: none;';
   $sStyleReadInp_horasaida = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['horasaida']) && $this->nmgp_cmp_readonly['horasaida'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['horasaida']);
       $sStyleReadLab_horasaida = '';
       $sStyleReadInp_horasaida = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['horasaida']) && $this->nmgp_cmp_hidden['horasaida'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="horasaida" value="<?php echo NM_encode_input($horasaida) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_horasaida" style="<?php echo $sStyleHidden_horasaida; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_horasaida"><?php echo $this->nm_new_label['horasaida']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['php_cmp_required']['horasaida']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['php_cmp_required']['horasaida'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["horasaida"]) &&  $this->nmgp_cmp_readonly["horasaida"] == "on") { 

 ?>
<input type="hidden" name="horasaida" value="<?php echo NM_encode_input($horasaida) . "\">" . $horasaida . ""; ?>
<?php } else { ?>
<span id="id_read_on_horasaida" class="sc-ui-readonly-horasaida" style=";<?php echo $sStyleReadLab_horasaida; ?>"><?php echo NM_encode_input($horasaida); ?></span><span id="id_read_off_horasaida" style="white-space: nowrap;<?php echo $sStyleReadInp_horasaida; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_horasaida" type=text name="horasaida" value="<?php echo NM_encode_input($horasaida) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['horasaida']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['horasaida']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['horasaida']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_horasaida_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_horasaida_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_horaentrada_dumb = ('' == $sStyleHidden_horaentrada) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_horaentrada_dumb" style="<?php echo $sStyleHidden_horaentrada_dumb; ?>"></TD>
<?php $sStyleHidden_horasaida_dumb = ('' == $sStyleHidden_horasaida) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_horasaida_dumb" style="<?php echo $sStyleHidden_horasaida_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['qtdvagas']))
    {
        $this->nm_new_label['qtdvagas'] = "Qtd. de Vagas";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qtdvagas = $this->qtdvagas;
   $sStyleHidden_qtdvagas = '';
   if (isset($this->nmgp_cmp_hidden['qtdvagas']) && $this->nmgp_cmp_hidden['qtdvagas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qtdvagas']);
       $sStyleHidden_qtdvagas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qtdvagas = 'display: none;';
   $sStyleReadInp_qtdvagas = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qtdvagas']) && $this->nmgp_cmp_readonly['qtdvagas'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qtdvagas']);
       $sStyleReadLab_qtdvagas = '';
       $sStyleReadInp_qtdvagas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qtdvagas']) && $this->nmgp_cmp_hidden['qtdvagas'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qtdvagas" value="<?php echo NM_encode_input($qtdvagas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_qtdvagas" style="<?php echo $sStyleHidden_qtdvagas; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_qtdvagas"><?php echo $this->nm_new_label['qtdvagas']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["qtdvagas"]) &&  $this->nmgp_cmp_readonly["qtdvagas"] == "on") { 

 ?>
<input type="hidden" name="qtdvagas" value="<?php echo NM_encode_input($qtdvagas) . "\">" . $qtdvagas . ""; ?>
<?php } else { ?>
<span id="id_read_on_qtdvagas" class="sc-ui-readonly-qtdvagas" style=";<?php echo $sStyleReadLab_qtdvagas; ?>"><?php echo NM_encode_input($this->qtdvagas); ?></span><span id="id_read_off_qtdvagas" style="white-space: nowrap;<?php echo $sStyleReadInp_qtdvagas; ?>">
 <input class="scFormObjectOdd" style="text-align:left;" id="id_sc_field_qtdvagas" type=text name="qtdvagas" value="<?php echo NM_encode_input($qtdvagas) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['qtdvagas']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['qtdvagas']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qtdvagas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qtdvagas_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['observacoes']))
    {
        $this->nm_new_label['observacoes'] = "Observações";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $observacoes = $this->observacoes;
   $sStyleHidden_observacoes = '';
   if (isset($this->nmgp_cmp_hidden['observacoes']) && $this->nmgp_cmp_hidden['observacoes'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['observacoes']);
       $sStyleHidden_observacoes = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_observacoes = 'display: none;';
   $sStyleReadInp_observacoes = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['observacoes']) && $this->nmgp_cmp_readonly['observacoes'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['observacoes']);
       $sStyleReadLab_observacoes = '';
       $sStyleReadInp_observacoes = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['observacoes']) && $this->nmgp_cmp_hidden['observacoes'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="observacoes" value="<?php echo NM_encode_input($observacoes) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_observacoes" style="<?php echo $sStyleHidden_observacoes; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_observacoes"><?php echo $this->nm_new_label['observacoes']; ?></span></span><br>
<?php
$observacoes_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($observacoes));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["observacoes"]) &&  $this->nmgp_cmp_readonly["observacoes"] == "on") { 

 ?>
<input type="hidden" name="observacoes" value="<?php echo NM_encode_input($observacoes) . "\">" . $observacoes_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_observacoes" class="sc-ui-readonly-observacoes" style=";<?php echo $sStyleReadLab_observacoes; ?>"><?php echo NM_encode_input($observacoes_val); ?></span><span id="id_read_off_observacoes" style="white-space: nowrap;<?php echo $sStyleReadInp_observacoes; ?>">
 <textarea  class="sc-js-input scFormObjectOdd" style="white-space: pre-wrap;;" name="observacoes" id="id_sc_field_observacoes" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo str_replace(array('\r\n', '\n\r', '\n', '\r'), array("\r\n", "\n\r", "\n", "\r"), $observacoes); ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_observacoes_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_observacoes_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_qtdvagas_dumb = ('' == $sStyleHidden_qtdvagas) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_qtdvagas_dumb" style="<?php echo $sStyleHidden_qtdvagas_dumb; ?>"></TD>
<?php $sStyleHidden_observacoes_dumb = ('' == $sStyleHidden_observacoes) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_observacoes_dumb" style="<?php echo $sStyleHidden_observacoes_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['diassemana']))
   {
       $this->nm_new_label['diassemana'] = "Dias da Semana";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $diassemana = $this->diassemana;
   $sStyleHidden_diassemana = '';
   if (isset($this->nmgp_cmp_hidden['diassemana']) && $this->nmgp_cmp_hidden['diassemana'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['diassemana']);
       $sStyleHidden_diassemana = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_diassemana = 'display: none;';
   $sStyleReadInp_diassemana = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['diassemana']) && $this->nmgp_cmp_readonly['diassemana'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['diassemana']);
       $sStyleReadLab_diassemana = '';
       $sStyleReadInp_diassemana = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['diassemana']) && $this->nmgp_cmp_hidden['diassemana'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="diassemana" value="<?php echo NM_encode_input($this->diassemana) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->diassemana_1 = explode(";", trim($this->diassemana));
  } 
  else
  {
      if (empty($this->diassemana))
      {
          $this->diassemana_1= array(); 
      } 
      else
      {
          $this->diassemana_1= $this->diassemana; 
          $this->diassemana= ""; 
          foreach ($this->diassemana_1 as $cada_diassemana)
          {
             if (!empty($diassemana))
             {
                 $this->diassemana.= ";"; 
             } 
             $this->diassemana.= $cada_diassemana; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd" id="hidden_field_data_diassemana" style="<?php echo $sStyleHidden_diassemana; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_diassemana"><?php echo $this->nm_new_label['diassemana']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["diassemana"]) &&  $this->nmgp_cmp_readonly["diassemana"] == "on") { 

$diassemana_look = "";
 if (in_array("1", $this->diassemana_1))  { $diassemana_look .= "Segunda-Feira<br />";} 
 if (in_array("2", $this->diassemana_1))  { $diassemana_look .= "Terça-Feira<br />";} 
 if (in_array("3", $this->diassemana_1))  { $diassemana_look .= "Quarta-Feira<br />";} 
 if (in_array("4", $this->diassemana_1))  { $diassemana_look .= "Quinta-Feira<br />";} 
 if (in_array("5", $this->diassemana_1))  { $diassemana_look .= "Sexta-Feira<br />";} 
 if (in_array("6", $this->diassemana_1))  { $diassemana_look .= "Sábado<br />";} 
?>
<input type="hidden" name="diassemana" value="<?php echo NM_encode_input($diassemana) . "\">" . $diassemana_look . ""; ?>
<?php } else { ?>

<?php

$diassemana_look = "";
 if (in_array("1", $this->diassemana_1))  { $diassemana_look .= "Segunda-Feira<br />";} 
 if (in_array("2", $this->diassemana_1))  { $diassemana_look .= "Terça-Feira<br />";} 
 if (in_array("3", $this->diassemana_1))  { $diassemana_look .= "Quarta-Feira<br />";} 
 if (in_array("4", $this->diassemana_1))  { $diassemana_look .= "Quinta-Feira<br />";} 
 if (in_array("5", $this->diassemana_1))  { $diassemana_look .= "Sexta-Feira<br />";} 
 if (in_array("6", $this->diassemana_1))  { $diassemana_look .= "Sábado<br />";} 
?>
<span id="id_read_on_diassemana" style=";<?php echo $sStyleReadLab_diassemana; ?>"><?php echo NM_encode_input($diassemana_look); ?></span><span id="id_read_off_diassemana" style="<?php echo $sStyleReadInp_diassemana; ?>"><?php echo "<div id=\"idAjaxCheckbox_diassemana\">\r\n"; ?><TABLE><TR>
  <TD class="scFormDataFontOdd" style=";"> <input type=checkbox class="sc-ui-checkbox-diassemana sc-ui-checkbox-diassemana" name="diassemana[]" value="1"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_diassemana'][] = '1'; ?>
<?php  if (in_array("1", $this->diassemana_1))  { echo " checked" ;} ?> onClick="" >Segunda-Feira</TD>
  <TD class="scFormDataFontOdd" style=";"> <input type=checkbox class="sc-ui-checkbox-diassemana sc-ui-checkbox-diassemana" name="diassemana[]" value="2"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_diassemana'][] = '2'; ?>
<?php  if (in_array("2", $this->diassemana_1))  { echo " checked" ;} ?> onClick="" >Terça-Feira</TD>
  <TD class="scFormDataFontOdd" style=";"> <input type=checkbox class="sc-ui-checkbox-diassemana sc-ui-checkbox-diassemana" name="diassemana[]" value="3"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_diassemana'][] = '3'; ?>
<?php  if (in_array("3", $this->diassemana_1))  { echo " checked" ;} ?> onClick="" >Quarta-Feira</TD>
  <TD class="scFormDataFontOdd" style=";"> <input type=checkbox class="sc-ui-checkbox-diassemana sc-ui-checkbox-diassemana" name="diassemana[]" value="4"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_diassemana'][] = '4'; ?>
<?php  if (in_array("4", $this->diassemana_1))  { echo " checked" ;} ?> onClick="" >Quinta-Feira</TD>
  <TD class="scFormDataFontOdd" style=";"> <input type=checkbox class="sc-ui-checkbox-diassemana sc-ui-checkbox-diassemana" name="diassemana[]" value="5"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_diassemana'][] = '5'; ?>
<?php  if (in_array("5", $this->diassemana_1))  { echo " checked" ;} ?> onClick="" >Sexta-Feira</TD>
  <TD class="scFormDataFontOdd" style=";"> <input type=checkbox class="sc-ui-checkbox-diassemana sc-ui-checkbox-diassemana" name="diassemana[]" value="6"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['Lookup_diassemana'][] = '6'; ?>
<?php  if (in_array("6", $this->diassemana_1))  { echo " checked" ;} ?> onClick="" >Sábado</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_diassemana_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_diassemana_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="1" >&nbsp;</TD>




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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "R")
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
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "F") { ?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['total'] + 1)?>);</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
 parent.scAjaxDetailStatus("form_tbl_turma");
 parent.scAjaxDetailHeight("form_tbl_turma", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailHeight("form_tbl_turma", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_turma']['sc_modal'])
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

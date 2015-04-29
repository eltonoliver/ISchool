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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("Cadastrar Pagamento"); } else { echo strip_tags("Editar Pagamento"); } ?></TITLE>
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
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/calculator/jquery.calculator.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/calculator/jquery.calculator.css" type="text/css" media="screen" />
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
include_once("form_tbl_planpg_mob_sajax_js.php");
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

include_once('form_tbl_planpg_mob_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['recarga'];
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
 include_once("form_tbl_planpg_mob_js0.php");
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
               action="form_tbl_planpg_mob.php" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['insert_validation']; ?>">
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
$int_iframe_padding = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe']) ? 0 : "0px";
?>
<?php
$_SESSION['scriptcase']['error_span_title']['form_tbl_planpg_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_tbl_planpg_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
<table id="main_table_form"  align="center" cellpadding="<?php echo $int_iframe_padding; ?>" cellspacing=0  width="95%">
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['mostra_cab'] != "N"))
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
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "Cadastrar Pagamento"; } else { echo "Editar Pagamento"; } ?></span></td>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['fast_search'][2] : "";
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
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['empty_filter'] = true;
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
   if (!isset($this->nm_new_label['eventofin']))
   {
       $this->nm_new_label['eventofin'] = "Evento";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $eventofin = $this->eventofin;
   $sStyleHidden_eventofin = '';
   if (isset($this->nmgp_cmp_hidden['eventofin']) && $this->nmgp_cmp_hidden['eventofin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['eventofin']);
       $sStyleHidden_eventofin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_eventofin = 'display: none;';
   $sStyleReadInp_eventofin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['eventofin']) && $this->nmgp_cmp_readonly['eventofin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['eventofin']);
       $sStyleReadLab_eventofin = '';
       $sStyleReadInp_eventofin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['eventofin']) && $this->nmgp_cmp_hidden['eventofin'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="eventofin" value="<?php echo NM_encode_input($this->eventofin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_eventofin" style="<?php echo $sStyleHidden_eventofin; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_eventofin"><?php echo $this->nm_new_label['eventofin']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["eventofin"]) &&  $this->nmgp_cmp_readonly["eventofin"] == "on") { 

$eventofin_look = "";
 if ($this->eventofin == "1") { $eventofin_look .= "Receitas Mensalidades" ;} 
 if ($this->eventofin == "2") { $eventofin_look .= "Material Escolar" ;} 
 if ($this->eventofin == "3") { $eventofin_look .= "Matrícula" ;} 
 if ($this->eventofin == "4") { $eventofin_look .= "Juros" ;} 
 if ($this->eventofin == "5") { $eventofin_look .= "Multa" ;} 
 if ($this->eventofin == "6") { $eventofin_look .= "Prova de Reposição" ;} 
 if ($this->eventofin == "7") { $eventofin_look .= "Renegociação" ;} 
 if ($this->eventofin == "8") { $eventofin_look .= "Aula extra" ;} 
 if ($this->eventofin == "9") { $eventofin_look .= "Aula de Reposição" ;} 
 if ($this->eventofin == "10") { $eventofin_look .= "Eventos" ;} 
 if ($this->eventofin == "11") { $eventofin_look .= "Uniforme Escolar" ;} 
 if ($this->eventofin == "11") { $eventofin_look .= "Outros" ;} 
?>
<input type="hidden" name="eventofin" value="<?php echo NM_encode_input($eventofin) . "\">" . $eventofin_look . ""; ?>
<?php } else { ?>
<?php

$eventofin_look = "";
 if ($this->eventofin == "1") { $eventofin_look .= "Receitas Mensalidades" ;} 
 if ($this->eventofin == "2") { $eventofin_look .= "Material Escolar" ;} 
 if ($this->eventofin == "3") { $eventofin_look .= "Matrícula" ;} 
 if ($this->eventofin == "4") { $eventofin_look .= "Juros" ;} 
 if ($this->eventofin == "5") { $eventofin_look .= "Multa" ;} 
 if ($this->eventofin == "6") { $eventofin_look .= "Prova de Reposição" ;} 
 if ($this->eventofin == "7") { $eventofin_look .= "Renegociação" ;} 
 if ($this->eventofin == "8") { $eventofin_look .= "Aula extra" ;} 
 if ($this->eventofin == "9") { $eventofin_look .= "Aula de Reposição" ;} 
 if ($this->eventofin == "10") { $eventofin_look .= "Eventos" ;} 
 if ($this->eventofin == "11") { $eventofin_look .= "Uniforme Escolar" ;} 
 if ($this->eventofin == "11") { $eventofin_look .= "Outros" ;} 
?>
<span id="id_read_on_eventofin" style=";<?php echo $sStyleReadLab_eventofin; ?>"><?php echo NM_encode_input($eventofin_look); ?></span><span id="id_read_off_eventofin" style="<?php echo $sStyleReadInp_eventofin; ?>">
 <span id="idAjaxSelect_eventofin"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_eventofin" name="eventofin" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = ''; ?>
 <option value=""></option>
 <option value="1" <?php  if ($this->eventofin == "1") { echo " selected" ;} ?>>Receitas Mensalidades</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = '1'; ?>
 <option value="2" <?php  if ($this->eventofin == "2") { echo " selected" ;} ?>>Material Escolar</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = '2'; ?>
 <option value="3" <?php  if ($this->eventofin == "3") { echo " selected" ;} ?>>Matrícula</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = '3'; ?>
 <option value="4" <?php  if ($this->eventofin == "4") { echo " selected" ;} ?>>Juros</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = '4'; ?>
 <option value="5" <?php  if ($this->eventofin == "5") { echo " selected" ;} ?>>Multa</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = '5'; ?>
 <option value="6" <?php  if ($this->eventofin == "6") { echo " selected" ;} ?>>Prova de Reposição</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = '6'; ?>
 <option value="7" <?php  if ($this->eventofin == "7") { echo " selected" ;} ?>>Renegociação</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = '7'; ?>
 <option value="8" <?php  if ($this->eventofin == "8") { echo " selected" ;} ?>>Aula extra</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = '8'; ?>
 <option value="9" <?php  if ($this->eventofin == "9") { echo " selected" ;} ?>>Aula de Reposição</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = '9'; ?>
 <option value="10" <?php  if ($this->eventofin == "10") { echo " selected" ;} ?>>Eventos</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = '10'; ?>
 <option value="11" <?php  if ($this->eventofin == "11") { echo " selected" ;} ?>>Uniforme Escolar</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = '11'; ?>
 <option value="11" <?php  if ($this->eventofin == "11") { echo " selected" ;} ?>>Outros</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_eventofin'][] = '11'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_eventofin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_eventofin_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_eventofin_dumb = ('' == $sStyleHidden_eventofin) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_eventofin_dumb" style="<?php echo $sStyleHidden_eventofin_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['parcelamento']))
   {
       $this->nm_new_label['parcelamento'] = "Parcelamento";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $parcelamento = $this->parcelamento;
   $sStyleHidden_parcelamento = '';
   if (isset($this->nmgp_cmp_hidden['parcelamento']) && $this->nmgp_cmp_hidden['parcelamento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['parcelamento']);
       $sStyleHidden_parcelamento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_parcelamento = 'display: none;';
   $sStyleReadInp_parcelamento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['parcelamento']) && $this->nmgp_cmp_readonly['parcelamento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['parcelamento']);
       $sStyleReadLab_parcelamento = '';
       $sStyleReadInp_parcelamento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['parcelamento']) && $this->nmgp_cmp_hidden['parcelamento'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="parcelamento" value="<?php echo NM_encode_input($this->parcelamento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_parcelamento" style="<?php echo $sStyleHidden_parcelamento; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_parcelamento"><?php echo $this->nm_new_label['parcelamento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["parcelamento"]) &&  $this->nmgp_cmp_readonly["parcelamento"] == "on") { 

$parcelamento_look = "";
 if ($this->parcelamento == "1") { $parcelamento_look .= "À vista" ;} 
 if ($this->parcelamento == "2") { $parcelamento_look .= "2x" ;} 
 if ($this->parcelamento == "3") { $parcelamento_look .= "3x" ;} 
 if ($this->parcelamento == "4") { $parcelamento_look .= "4x" ;} 
 if ($this->parcelamento == "5") { $parcelamento_look .= "5x" ;} 
 if ($this->parcelamento == "6") { $parcelamento_look .= "6x" ;} 
 if ($this->parcelamento == "7") { $parcelamento_look .= "7x" ;} 
 if ($this->parcelamento == "8") { $parcelamento_look .= "8x" ;} 
 if ($this->parcelamento == "9") { $parcelamento_look .= "9x" ;} 
 if ($this->parcelamento == "10") { $parcelamento_look .= "10x" ;} 
 if ($this->parcelamento == "11") { $parcelamento_look .= "11x" ;} 
 if ($this->parcelamento == "12") { $parcelamento_look .= "12x" ;} 
 if ($this->parcelamento == "13") { $parcelamento_look .= "13x" ;} 
 if ($this->parcelamento == "14") { $parcelamento_look .= "14x" ;} 
 if ($this->parcelamento == "15") { $parcelamento_look .= "15x" ;} 
 if ($this->parcelamento == "16") { $parcelamento_look .= "16x" ;} 
 if ($this->parcelamento == "17") { $parcelamento_look .= "17x" ;} 
 if ($this->parcelamento == "18") { $parcelamento_look .= "18x" ;} 
 if ($this->parcelamento == "19") { $parcelamento_look .= "19x" ;} 
 if ($this->parcelamento == "20") { $parcelamento_look .= "20x" ;} 
?>
<input type="hidden" name="parcelamento" value="<?php echo NM_encode_input($parcelamento) . "\">" . $parcelamento_look . ""; ?>
<?php } else { ?>
<?php

$parcelamento_look = "";
 if ($this->parcelamento == "1") { $parcelamento_look .= "À vista" ;} 
 if ($this->parcelamento == "2") { $parcelamento_look .= "2x" ;} 
 if ($this->parcelamento == "3") { $parcelamento_look .= "3x" ;} 
 if ($this->parcelamento == "4") { $parcelamento_look .= "4x" ;} 
 if ($this->parcelamento == "5") { $parcelamento_look .= "5x" ;} 
 if ($this->parcelamento == "6") { $parcelamento_look .= "6x" ;} 
 if ($this->parcelamento == "7") { $parcelamento_look .= "7x" ;} 
 if ($this->parcelamento == "8") { $parcelamento_look .= "8x" ;} 
 if ($this->parcelamento == "9") { $parcelamento_look .= "9x" ;} 
 if ($this->parcelamento == "10") { $parcelamento_look .= "10x" ;} 
 if ($this->parcelamento == "11") { $parcelamento_look .= "11x" ;} 
 if ($this->parcelamento == "12") { $parcelamento_look .= "12x" ;} 
 if ($this->parcelamento == "13") { $parcelamento_look .= "13x" ;} 
 if ($this->parcelamento == "14") { $parcelamento_look .= "14x" ;} 
 if ($this->parcelamento == "15") { $parcelamento_look .= "15x" ;} 
 if ($this->parcelamento == "16") { $parcelamento_look .= "16x" ;} 
 if ($this->parcelamento == "17") { $parcelamento_look .= "17x" ;} 
 if ($this->parcelamento == "18") { $parcelamento_look .= "18x" ;} 
 if ($this->parcelamento == "19") { $parcelamento_look .= "19x" ;} 
 if ($this->parcelamento == "20") { $parcelamento_look .= "20x" ;} 
?>
<span id="id_read_on_parcelamento" style=";<?php echo $sStyleReadLab_parcelamento; ?>"><?php echo NM_encode_input($parcelamento_look); ?></span><span id="id_read_off_parcelamento" style="<?php echo $sStyleReadInp_parcelamento; ?>">
 <span id="idAjaxSelect_parcelamento"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_parcelamento" name="parcelamento" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = ''; ?>
 <option value=""></option>
 <option value="1" <?php  if ($this->parcelamento == "1") { echo " selected" ;} ?>>À vista</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '1'; ?>
 <option value="2" <?php  if ($this->parcelamento == "2") { echo " selected" ;} ?>>2x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '2'; ?>
 <option value="3" <?php  if ($this->parcelamento == "3") { echo " selected" ;} ?>>3x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '3'; ?>
 <option value="4" <?php  if ($this->parcelamento == "4") { echo " selected" ;} ?>>4x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '4'; ?>
 <option value="5" <?php  if ($this->parcelamento == "5") { echo " selected" ;} ?>>5x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '5'; ?>
 <option value="6" <?php  if ($this->parcelamento == "6") { echo " selected" ;} ?>>6x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '6'; ?>
 <option value="7" <?php  if ($this->parcelamento == "7") { echo " selected" ;} ?>>7x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '7'; ?>
 <option value="8" <?php  if ($this->parcelamento == "8") { echo " selected" ;} ?>>8x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '8'; ?>
 <option value="9" <?php  if ($this->parcelamento == "9") { echo " selected" ;} ?>>9x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '9'; ?>
 <option value="10" <?php  if ($this->parcelamento == "10") { echo " selected" ;} ?>>10x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '10'; ?>
 <option value="11" <?php  if ($this->parcelamento == "11") { echo " selected" ;} ?>>11x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '11'; ?>
 <option value="12" <?php  if ($this->parcelamento == "12") { echo " selected" ;} ?>>12x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '12'; ?>
 <option value="13" <?php  if ($this->parcelamento == "13") { echo " selected" ;} ?>>13x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '13'; ?>
 <option value="14" <?php  if ($this->parcelamento == "14") { echo " selected" ;} ?>>14x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '14'; ?>
 <option value="15" <?php  if ($this->parcelamento == "15") { echo " selected" ;} ?>>15x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '15'; ?>
 <option value="16" <?php  if ($this->parcelamento == "16") { echo " selected" ;} ?>>16x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '16'; ?>
 <option value="17" <?php  if ($this->parcelamento == "17") { echo " selected" ;} ?>>17x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '17'; ?>
 <option value="18" <?php  if ($this->parcelamento == "18") { echo " selected" ;} ?>>18x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '18'; ?>
 <option value="19" <?php  if ($this->parcelamento == "19") { echo " selected" ;} ?>>19x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '19'; ?>
 <option value="20" <?php  if ($this->parcelamento == "20") { echo " selected" ;} ?>>20x</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_parcelamento'][] = '20'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_parcelamento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_parcelamento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_parcelamento_dumb = ('' == $sStyleHidden_parcelamento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_parcelamento_dumb" style="<?php echo $sStyleHidden_parcelamento_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['periodicidade']))
   {
       $this->nm_new_label['periodicidade'] = "Periodicidade";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $periodicidade = $this->periodicidade;
   $sStyleHidden_periodicidade = '';
   if (isset($this->nmgp_cmp_hidden['periodicidade']) && $this->nmgp_cmp_hidden['periodicidade'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['periodicidade']);
       $sStyleHidden_periodicidade = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_periodicidade = 'display: none;';
   $sStyleReadInp_periodicidade = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['periodicidade']) && $this->nmgp_cmp_readonly['periodicidade'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['periodicidade']);
       $sStyleReadLab_periodicidade = '';
       $sStyleReadInp_periodicidade = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['periodicidade']) && $this->nmgp_cmp_hidden['periodicidade'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="periodicidade" value="<?php echo NM_encode_input($this->periodicidade) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_periodicidade" style="<?php echo $sStyleHidden_periodicidade; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_periodicidade"><?php echo $this->nm_new_label['periodicidade']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["periodicidade"]) &&  $this->nmgp_cmp_readonly["periodicidade"] == "on") { 

$periodicidade_look = "";
 if ($this->periodicidade == "1") { $periodicidade_look .= "Mensal" ;} 
 if ($this->periodicidade == "2") { $periodicidade_look .= "Bimestral" ;} 
 if ($this->periodicidade == "3") { $periodicidade_look .= "Trimestral" ;} 
 if ($this->periodicidade == "4") { $periodicidade_look .= "Semestral" ;} 
 if ($this->periodicidade == "5") { $periodicidade_look .= "Anual" ;} 
?>
<input type="hidden" name="periodicidade" value="<?php echo NM_encode_input($periodicidade) . "\">" . $periodicidade_look . ""; ?>
<?php } else { ?>
<?php

$periodicidade_look = "";
 if ($this->periodicidade == "1") { $periodicidade_look .= "Mensal" ;} 
 if ($this->periodicidade == "2") { $periodicidade_look .= "Bimestral" ;} 
 if ($this->periodicidade == "3") { $periodicidade_look .= "Trimestral" ;} 
 if ($this->periodicidade == "4") { $periodicidade_look .= "Semestral" ;} 
 if ($this->periodicidade == "5") { $periodicidade_look .= "Anual" ;} 
?>
<span id="id_read_on_periodicidade" style=";<?php echo $sStyleReadLab_periodicidade; ?>"><?php echo NM_encode_input($periodicidade_look); ?></span><span id="id_read_off_periodicidade" style="<?php echo $sStyleReadInp_periodicidade; ?>">
 <span id="idAjaxSelect_periodicidade"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_periodicidade" name="periodicidade" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_periodicidade'][] = ''; ?>
 <option value=""></option>
 <option value="1" <?php  if ($this->periodicidade == "1") { echo " selected" ;} ?>>Mensal</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_periodicidade'][] = '1'; ?>
 <option value="2" <?php  if ($this->periodicidade == "2") { echo " selected" ;} ?>>Bimestral</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_periodicidade'][] = '2'; ?>
 <option value="3" <?php  if ($this->periodicidade == "3") { echo " selected" ;} ?>>Trimestral</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_periodicidade'][] = '3'; ?>
 <option value="4" <?php  if ($this->periodicidade == "4") { echo " selected" ;} ?>>Semestral</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_periodicidade'][] = '4'; ?>
 <option value="5" <?php  if ($this->periodicidade == "5") { echo " selected" ;} ?>>Anual</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_periodicidade'][] = '5'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_periodicidade_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_periodicidade_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_periodicidade_dumb = ('' == $sStyleHidden_periodicidade) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_periodicidade_dumb" style="<?php echo $sStyleHidden_periodicidade_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['formapg']))
   {
       $this->nm_new_label['formapg'] = "Forma de Pagamento";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $formapg = $this->formapg;
   $sStyleHidden_formapg = '';
   if (isset($this->nmgp_cmp_hidden['formapg']) && $this->nmgp_cmp_hidden['formapg'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['formapg']);
       $sStyleHidden_formapg = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_formapg = 'display: none;';
   $sStyleReadInp_formapg = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['formapg']) && $this->nmgp_cmp_readonly['formapg'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['formapg']);
       $sStyleReadLab_formapg = '';
       $sStyleReadInp_formapg = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['formapg']) && $this->nmgp_cmp_hidden['formapg'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="formapg" value="<?php echo NM_encode_input($this->formapg) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_formapg" style="<?php echo $sStyleHidden_formapg; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_formapg"><?php echo $this->nm_new_label['formapg']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["formapg"]) &&  $this->nmgp_cmp_readonly["formapg"] == "on") { 

$formapg_look = "";
 if ($this->formapg == "1") { $formapg_look .= "Dinheiro" ;} 
 if ($this->formapg == "2") { $formapg_look .= "Cheque" ;} 
 if ($this->formapg == "3") { $formapg_look .= "Cartão" ;} 
 if ($this->formapg == "4") { $formapg_look .= "Débito automático" ;} 
 if ($this->formapg == "5") { $formapg_look .= "Tranferência" ;} 
 if ($this->formapg == "6") { $formapg_look .= "TED" ;} 
 if ($this->formapg == "7") { $formapg_look .= "Cobrança Bancária" ;} 
?>
<input type="hidden" name="formapg" value="<?php echo NM_encode_input($formapg) . "\">" . $formapg_look . ""; ?>
<?php } else { ?>
<?php

$formapg_look = "";
 if ($this->formapg == "1") { $formapg_look .= "Dinheiro" ;} 
 if ($this->formapg == "2") { $formapg_look .= "Cheque" ;} 
 if ($this->formapg == "3") { $formapg_look .= "Cartão" ;} 
 if ($this->formapg == "4") { $formapg_look .= "Débito automático" ;} 
 if ($this->formapg == "5") { $formapg_look .= "Tranferência" ;} 
 if ($this->formapg == "6") { $formapg_look .= "TED" ;} 
 if ($this->formapg == "7") { $formapg_look .= "Cobrança Bancária" ;} 
?>
<span id="id_read_on_formapg" style=";<?php echo $sStyleReadLab_formapg; ?>"><?php echo NM_encode_input($formapg_look); ?></span><span id="id_read_off_formapg" style="<?php echo $sStyleReadInp_formapg; ?>">
 <span id="idAjaxSelect_formapg"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_formapg" name="formapg" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_formapg'][] = ''; ?>
 <option value=""></option>
 <option value="1" <?php  if ($this->formapg == "1") { echo " selected" ;} ?>>Dinheiro</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_formapg'][] = '1'; ?>
 <option value="2" <?php  if ($this->formapg == "2") { echo " selected" ;} ?>>Cheque</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_formapg'][] = '2'; ?>
 <option value="3" <?php  if ($this->formapg == "3") { echo " selected" ;} ?>>Cartão</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_formapg'][] = '3'; ?>
 <option value="4" <?php  if ($this->formapg == "4") { echo " selected" ;} ?>>Débito automático</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_formapg'][] = '4'; ?>
 <option value="5" <?php  if ($this->formapg == "5") { echo " selected" ;} ?>>Tranferência</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_formapg'][] = '5'; ?>
 <option value="6" <?php  if ($this->formapg == "6") { echo " selected" ;} ?>>TED</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_formapg'][] = '6'; ?>
 <option value="7" <?php  if ($this->formapg == "7") { echo " selected" ;} ?>>Cobrança Bancária</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_formapg'][] = '7'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_formapg_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_formapg_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_formapg_dumb = ('' == $sStyleHidden_formapg) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_formapg_dumb" style="<?php echo $sStyleHidden_formapg_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dataparcela']))
    {
        $this->nm_new_label['dataparcela'] = "Data das Parcelas";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dataparcela = $this->dataparcela;
   $sStyleHidden_dataparcela = '';
   if (isset($this->nmgp_cmp_hidden['dataparcela']) && $this->nmgp_cmp_hidden['dataparcela'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dataparcela']);
       $sStyleHidden_dataparcela = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dataparcela = 'display: none;';
   $sStyleReadInp_dataparcela = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dataparcela']) && $this->nmgp_cmp_readonly['dataparcela'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dataparcela']);
       $sStyleReadLab_dataparcela = '';
       $sStyleReadInp_dataparcela = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dataparcela']) && $this->nmgp_cmp_hidden['dataparcela'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dataparcela" value="<?php echo NM_encode_input($dataparcela) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_dataparcela" style="<?php echo $sStyleHidden_dataparcela; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_dataparcela"><?php echo $this->nm_new_label['dataparcela']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['php_cmp_required']['dataparcela']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['php_cmp_required']['dataparcela'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dataparcela"]) &&  $this->nmgp_cmp_readonly["dataparcela"] == "on") { 

 ?>
<input type="hidden" name="dataparcela" value="<?php echo NM_encode_input($dataparcela) . "\">" . $dataparcela . ""; ?>
<?php } else { ?>
<span id="id_read_on_dataparcela" class="sc-ui-readonly-dataparcela" style=";<?php echo $sStyleReadLab_dataparcela; ?>"><?php echo NM_encode_input($dataparcela); ?></span><span id="id_read_off_dataparcela" style="white-space: nowrap;<?php echo $sStyleReadInp_dataparcela; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_dataparcela" type=text name="dataparcela" value="<?php echo NM_encode_input($dataparcela) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['dataparcela']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dataparcela']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['dataparcela']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dataparcela_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dataparcela_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_dataparcela_dumb = ('' == $sStyleHidden_dataparcela) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_dataparcela_dumb" style="<?php echo $sStyleHidden_dataparcela_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['bolsa']))
   {
       $this->nm_new_label['bolsa'] = "Bolsa";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bolsa = $this->bolsa;
   $sStyleHidden_bolsa = '';
   if (isset($this->nmgp_cmp_hidden['bolsa']) && $this->nmgp_cmp_hidden['bolsa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bolsa']);
       $sStyleHidden_bolsa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bolsa = 'display: none;';
   $sStyleReadInp_bolsa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bolsa']) && $this->nmgp_cmp_readonly['bolsa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bolsa']);
       $sStyleReadLab_bolsa = '';
       $sStyleReadInp_bolsa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bolsa']) && $this->nmgp_cmp_hidden['bolsa'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="bolsa" value="<?php echo NM_encode_input($this->bolsa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_bolsa" style="<?php echo $sStyleHidden_bolsa; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_bolsa"><?php echo $this->nm_new_label['bolsa']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bolsa"]) &&  $this->nmgp_cmp_readonly["bolsa"] == "on") { 

$bolsa_look = "";
 if ($this->bolsa == "1") { $bolsa_look .= "10%" ;} 
 if ($this->bolsa == "2") { $bolsa_look .= "20%" ;} 
 if ($this->bolsa == "3") { $bolsa_look .= "50%" ;} 
 if ($this->bolsa == "4") { $bolsa_look .= "Projeto Cetebras" ;} 
 if ($this->bolsa == "5") { $bolsa_look .= "Integral" ;} 
 if ($this->bolsa == "6") { $bolsa_look .= "Bolsa parceria" ;} 
?>
<input type="hidden" name="bolsa" value="<?php echo NM_encode_input($bolsa) . "\">" . $bolsa_look . ""; ?>
<?php } else { ?>
<?php

$bolsa_look = "";
 if ($this->bolsa == "1") { $bolsa_look .= "10%" ;} 
 if ($this->bolsa == "2") { $bolsa_look .= "20%" ;} 
 if ($this->bolsa == "3") { $bolsa_look .= "50%" ;} 
 if ($this->bolsa == "4") { $bolsa_look .= "Projeto Cetebras" ;} 
 if ($this->bolsa == "5") { $bolsa_look .= "Integral" ;} 
 if ($this->bolsa == "6") { $bolsa_look .= "Bolsa parceria" ;} 
?>
<span id="id_read_on_bolsa" style=";<?php echo $sStyleReadLab_bolsa; ?>"><?php echo NM_encode_input($bolsa_look); ?></span><span id="id_read_off_bolsa" style="<?php echo $sStyleReadInp_bolsa; ?>">
 <span id="idAjaxSelect_bolsa"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_bolsa" name="bolsa" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_bolsa'][] = ''; ?>
 <option value=""></option>
 <option value="1" <?php  if ($this->bolsa == "1") { echo " selected" ;} ?>>10%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_bolsa'][] = '1'; ?>
 <option value="2" <?php  if ($this->bolsa == "2") { echo " selected" ;} ?>>20%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_bolsa'][] = '2'; ?>
 <option value="3" <?php  if ($this->bolsa == "3") { echo " selected" ;} ?>>50%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_bolsa'][] = '3'; ?>
 <option value="4" <?php  if ($this->bolsa == "4") { echo " selected" ;} ?>>Projeto Cetebras</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_bolsa'][] = '4'; ?>
 <option value="5" <?php  if ($this->bolsa == "5") { echo " selected" ;} ?>>Integral</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_bolsa'][] = '5'; ?>
 <option value="6" <?php  if ($this->bolsa == "6") { echo " selected" ;} ?>>Bolsa parceria</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['Lookup_bolsa'][] = '6'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bolsa_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bolsa_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_bolsa_dumb = ('' == $sStyleHidden_bolsa) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_bolsa_dumb" style="<?php echo $sStyleHidden_bolsa_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['valparcela']))
    {
        $this->nm_new_label['valparcela'] = "Valor da Parcela";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valparcela = $this->valparcela;
   $sStyleHidden_valparcela = '';
   if (isset($this->nmgp_cmp_hidden['valparcela']) && $this->nmgp_cmp_hidden['valparcela'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valparcela']);
       $sStyleHidden_valparcela = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valparcela = 'display: none;';
   $sStyleReadInp_valparcela = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['valparcela']) && $this->nmgp_cmp_readonly['valparcela'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valparcela']);
       $sStyleReadLab_valparcela = '';
       $sStyleReadInp_valparcela = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valparcela']) && $this->nmgp_cmp_hidden['valparcela'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valparcela" value="<?php echo NM_encode_input($valparcela) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_valparcela" style="<?php echo $sStyleHidden_valparcela; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_valparcela"><?php echo $this->nm_new_label['valparcela']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valparcela"]) &&  $this->nmgp_cmp_readonly["valparcela"] == "on") { 

 ?>
<input type="hidden" name="valparcela" value="<?php echo NM_encode_input($valparcela) . "\">" . $valparcela . ""; ?>
<?php } else { ?>
<span id="id_read_on_valparcela" class="sc-ui-readonly-valparcela" style=";<?php echo $sStyleReadLab_valparcela; ?>"><?php echo NM_encode_input($this->valparcela); ?></span><span id="id_read_off_valparcela" style="white-space: nowrap;<?php echo $sStyleReadInp_valparcela; ?>">
 <input class="sc-js-input scFormObjectOdd" style="text-align:left;" id="id_sc_field_valparcela" type=text name="valparcela" value="<?php echo NM_encode_input($valparcela) ?>"
 size=15 alt="{datatype: 'currency', currencySymbol: '<?php echo $this->field_config['valparcela']['symbol_mon']; ?>', currencyPosition: '<?php echo ((1 == $this->field_config['valparcela']['format_pos'] || 3 == $this->field_config['valparcela']['format_pos']) ? 'left' : 'right'); ?>', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['valparcela']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valparcela']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valparcela']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valparcela_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valparcela_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_valparcela_dumb = ('' == $sStyleHidden_valparcela) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_valparcela_dumb" style="<?php echo $sStyleHidden_valparcela_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['valdesconto']))
    {
        $this->nm_new_label['valdesconto'] = "Valor do Desconto";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valdesconto = $this->valdesconto;
   $sStyleHidden_valdesconto = '';
   if (isset($this->nmgp_cmp_hidden['valdesconto']) && $this->nmgp_cmp_hidden['valdesconto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valdesconto']);
       $sStyleHidden_valdesconto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valdesconto = 'display: none;';
   $sStyleReadInp_valdesconto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['valdesconto']) && $this->nmgp_cmp_readonly['valdesconto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valdesconto']);
       $sStyleReadLab_valdesconto = '';
       $sStyleReadInp_valdesconto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valdesconto']) && $this->nmgp_cmp_hidden['valdesconto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valdesconto" value="<?php echo NM_encode_input($valdesconto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_valdesconto" style="<?php echo $sStyleHidden_valdesconto; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_valdesconto"><?php echo $this->nm_new_label['valdesconto']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valdesconto"]) &&  $this->nmgp_cmp_readonly["valdesconto"] == "on") { 

 ?>
<input type="hidden" name="valdesconto" value="<?php echo NM_encode_input($valdesconto) . "\">" . $valdesconto . ""; ?>
<?php } else { ?>
<span id="id_read_on_valdesconto" class="sc-ui-readonly-valdesconto" style=";<?php echo $sStyleReadLab_valdesconto; ?>"><?php echo NM_encode_input($this->valdesconto); ?></span><span id="id_read_off_valdesconto" style="white-space: nowrap;<?php echo $sStyleReadInp_valdesconto; ?>">
 <input class="sc-js-input scFormObjectOdd" style="text-align:left;" id="id_sc_field_valdesconto" type=text name="valdesconto" value="<?php echo NM_encode_input($valdesconto) ?>"
 size=15 alt="{datatype: 'currency', currencySymbol: '<?php echo $this->field_config['valdesconto']['symbol_mon']; ?>', currencyPosition: '<?php echo ((1 == $this->field_config['valdesconto']['format_pos'] || 3 == $this->field_config['valdesconto']['format_pos']) ? 'left' : 'right'); ?>', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['valdesconto']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valdesconto']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valdesconto']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
<span class="scFormPopupBubble"><span class="scFormPopupTrigger"><?php echo nmButtonOutput($this->arr_buttons, "bfieldhelp", "return false;", "return false;", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</span><table class="scFormPopup"><tbody><?php
if (isset($_SESSION['scriptcase']['reg_conf']['html_dir']) && $_SESSION['scriptcase']['reg_conf']['html_dir'] == " DIR='RTL'") {
?>
<tr><td class="scFormPopupTopRight scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopLeft scFormPopupCorner"></td></tr><tr><td class="scFormPopupRight"></td><td class="scFormPopupContent">Caso o aluno ganhe um desconto, ao inserir o valor aqui o valor total sera modificado.</td><td class="scFormPopupLeft"></td></tr><tr><td class="scFormPopupBottomRight scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomLeft scFormPopupCorner"></td></tr><?php
} else {
?>
<tr><td class="scFormPopupTopLeft scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopRight scFormPopupCorner"></td></tr><tr><td class="scFormPopupLeft"></td><td class="scFormPopupContent">Caso o aluno ganhe um desconto, ao inserir o valor aqui o valor total sera modificado.</td><td class="scFormPopupRight"></td></tr><tr><td class="scFormPopupBottomLeft scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomRight scFormPopupCorner"></td></tr><?php
}
?>
</tbody></table></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valdesconto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valdesconto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr>
<tr><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "R")
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "F") { ?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['total'] + 1)?>);</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
 parent.scAjaxDetailStatus("form_tbl_planpg_mob");
 parent.scAjaxDetailHeight("form_tbl_planpg_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailHeight("form_tbl_planpg_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_planpg_mob']['sc_modal'])
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
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
</body> 
</html> 

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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("Cadastro do Aluno"); } else { echo strip_tags("Atualizar Aluno"); } ?></TITLE>
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
?>

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_tbl_aluno_mob_sajax_js.php");
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
<?php

include_once('form_tbl_aluno_mob_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
  $(".scBtnGrpClick").find("a").click(function(e){
     e.preventDefault();
  });
  $(".scBtnGrpClick").click(function(){
     var aObj = $(this).find("a"), aHref = aObj.attr("href");
     if ("javascript:" == aHref.substr(0, 11)) {
        eval(aHref.substr(11));
     }
     else {
        aObj.trigger("click");
     }
   }).mouseover(function(){
     $(this).css("cursor", "pointer");
  });
  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $("#hidden_bloco_1,#hidden_bloco_2,#hidden_bloco_3,#hidden_bloco_4,#hidden_bloco_5").each(function() {
   $(this.rows[0]).bind("click", {block: this}, toggleBlock)
                  .mouseover(function() { $(this).css("cursor", "pointer"); })
                  .mouseout(function() { $(this).css("cursor", ""); });
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
   function SC_btn_grp_text() {
      $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
   };
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
    "hidden_bloco_1": true,
    "hidden_bloco_2": true,
    "hidden_bloco_3": true,
    "hidden_bloco_4": true,
    "hidden_bloco_5": true
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['recarga'];
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
 include_once("form_tbl_aluno_mob_js0.php");
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
<form name="F1" method="post" enctype="multipart/form-data" 
               action="form_tbl_aluno_mob.php" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['insert_validation']; ?>">
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
<input type="hidden" name="upload_file_flag" value="">
<input type="hidden" name="upload_file_check" value="">
<input type="hidden" name="upload_file_name" value="">
<input type="hidden" name="upload_file_temp" value="">
<input type="hidden" name="upload_file_libs" value="">
<input type="hidden" name="upload_file_height" value="">
<input type="hidden" name="upload_file_width" value="">
<input type="hidden" name="upload_file_aspect" value="">
<input type="hidden" name="upload_file_type" value="">
<input type="hidden" name="id" value="<?php  echo NM_encode_input($this->id) ?>">
<input type="hidden" name="foto_salva" value="<?php  echo NM_encode_input($this->foto) ?>">
<input type="hidden" name="anexos_salva" value="<?php  echo NM_encode_input($this->anexos) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$int_iframe_padding = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe']) ? 0 : "0px";
?>
<?php
$_SESSION['scriptcase']['error_span_title']['form_tbl_aluno_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_tbl_aluno_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['mostra_cab'] != "N"))
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
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "Cadastro do Aluno"; } else { echo "Atualizar Aluno"; } ?></span></td>
            <td id="lin1_col2" class="scFormHeaderFont"><span></span></td>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['fast_search'][2] : "";
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
        $sCondStyle = ($this->nmgp_botoes['new'] != 'off' || $this->nmgp_botoes['insert'] != 'off' || $this->nmgp_botoes['exit'] != 'off' || $this->nmgp_botoes['update'] != 'off' || $this->nmgp_botoes['delete'] != 'off' || $this->nmgp_botoes['copy'] != 'off') ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "group_group_2", "scBtnGrpShow('group_2_t')", "scBtnGrpShow('group_2_t')", "sc_btgp_btn_group_2_t", "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "", "", "__sc_grp__");?>
 
<?php
        $NM_btn = true;
?>
<table style="border-collapse: collapse; border-width: 0; display: none; position: absolute; z-index: 1000" id="sc_btgp_div_group_2_t">
 <tr><td class="scBtnGrpBackground">
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_new_t">
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo');", "nm_move ('novo');", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_ins_t">
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_sai_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_upd_t">
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_del_t">
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "nm_atualiza ('excluir');", "nm_atualiza ('excluir');", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sys_separator">
 </td></tr><tr><td class="scBtnGrpBackground">
  </div>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['copy'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_clone_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcopy", "nm_move ('clone');", "nm_move ('clone');", "sc_b_clone_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
?>
 </td></tr>
</table>
<?php
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "R") && (!$this->Embutida_call)) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "R") && (!$this->Embutida_call)) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['empty_filter'] = true;
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
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><input type="hidden" name="foto_ul_name" id="id_sc_field_foto_ul_name" value="<?php echo NM_encode_input($this->foto_ul_name);?>">
<input type="hidden" name="foto_ul_type" id="id_sc_field_foto_ul_type" value="<?php echo NM_encode_input($this->foto_ul_type);?>">
<input type="hidden" name="anexos_ul_name" id="id_sc_field_anexos_ul_name" value="<?php echo NM_encode_input($this->anexos_ul_name);?>">
<input type="hidden" name="anexos_ul_type" id="id_sc_field_anexos_ul_type" value="<?php echo NM_encode_input($this->anexos_ul_type);?>">
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['matricula']))
    {
        $this->nm_new_label['matricula'] = "Matrícula";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $matricula = $this->matricula;
   $sStyleHidden_matricula = '';
   if (isset($this->nmgp_cmp_hidden['matricula']) && $this->nmgp_cmp_hidden['matricula'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['matricula']);
       $sStyleHidden_matricula = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_matricula = 'display: none;';
   $sStyleReadInp_matricula = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['matricula']) && $this->nmgp_cmp_readonly['matricula'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['matricula']);
       $sStyleReadLab_matricula = '';
       $sStyleReadInp_matricula = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['matricula']) && $this->nmgp_cmp_hidden['matricula'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="matricula" value="<?php echo NM_encode_input($matricula) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_matricula" style="<?php echo $sStyleHidden_matricula; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_matricula"><?php echo $this->nm_new_label['matricula']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["matricula"]) &&  $this->nmgp_cmp_readonly["matricula"] == "on") { 

 ?>
<input type="hidden" name="matricula" value="<?php echo NM_encode_input($matricula) . "\">" . $matricula . ""; ?>
<?php } else { ?>
<span id="id_read_on_matricula" class="sc-ui-readonly-matricula" style=";<?php echo $sStyleReadLab_matricula; ?>"><?php echo NM_encode_input($this->matricula); ?></span><span id="id_read_off_matricula" style="white-space: nowrap;<?php echo $sStyleReadInp_matricula; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_matricula" type=text name="matricula" value="<?php echo NM_encode_input($matricula) ?>"
 size=25 maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_matricula_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_matricula_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_matricula_dumb = ('' == $sStyleHidden_matricula) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_matricula_dumb" style="<?php echo $sStyleHidden_matricula_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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

    <TD class="scFormDataOdd" id="hidden_field_data_nome" style="<?php echo $sStyleHidden_nome; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_nome"><?php echo $this->nm_new_label['nome']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['nome']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['nome'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
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
<?php $sStyleHidden_nome_dumb = ('' == $sStyleHidden_nome) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nome_dumb" style="<?php echo $sStyleHidden_nome_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['foto']))
    {
        $this->nm_new_label['foto'] = "Foto";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $foto = $this->foto;
   $sStyleHidden_foto = '';
   if (isset($this->nmgp_cmp_hidden['foto']) && $this->nmgp_cmp_hidden['foto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['foto']);
       $sStyleHidden_foto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_foto = 'display: none;';
   $sStyleReadInp_foto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['foto']) && $this->nmgp_cmp_readonly['foto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['foto']);
       $sStyleReadLab_foto = '';
       $sStyleReadInp_foto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['foto']) && $this->nmgp_cmp_hidden['foto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="foto" value="<?php echo NM_encode_input($foto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_foto" style="<?php echo $sStyleHidden_foto; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_foto"><?php echo $this->nm_new_label['foto']; ?></span></span><br>
 <script>var var_ajax_img_foto = '<?php echo $out1_foto; ?>';</script><?php if (!empty($out_foto)){ echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_foto, '" . $this->nmgp_return_img['foto'][0] . "', '" . $this->nmgp_return_img['foto'][1] . "')\"><img id=\"id_ajax_img_foto\" border=\"0\" src=\"$out_foto\"></a> &nbsp;" . "<span id=\"txt_ajax_img_foto\">" . $foto . "</span>"; if (!empty($foto)){ echo "<br>";} } else { echo "<img id=\"id_ajax_img_foto\" border=\"0\" style=\"display: none\"> &nbsp;<span id=\"txt_ajax_img_foto\"></span><br />"; } ?>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["foto"]) &&  $this->nmgp_cmp_readonly["foto"] == "on") { 

 ?>
<img id=\"foto_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="foto" value="<?php echo NM_encode_input($foto) . "\">" . $foto . ""; ?>
<?php } else { ?>
<span id="id_read_off_foto" style="white-space: nowrap;<?php echo $sStyleReadInp_foto; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" type="file" name="foto[]" id="id_sc_field_foto" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>" alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><span id="chk_ajax_img_foto"<?php if ($this->nmgp_opcao == "novo" || empty($foto)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="foto_limpa" value="<?php echo $foto_limpa . '" '; if ($foto_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="foto_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_sc_dragdrop_foto" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragimg'] ?></div>
<div id="id_img_loader_foto" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_foto" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_foto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_foto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_foto_dumb = ('' == $sStyleHidden_foto) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_foto_dumb" style="<?php echo $sStyleHidden_foto_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sexo']))
   {
       $this->nm_new_label['sexo'] = "Sexo";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sexo = $this->sexo;
   $sStyleHidden_sexo = '';
   if (isset($this->nmgp_cmp_hidden['sexo']) && $this->nmgp_cmp_hidden['sexo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sexo']);
       $sStyleHidden_sexo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sexo = 'display: none;';
   $sStyleReadInp_sexo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sexo']) && $this->nmgp_cmp_readonly['sexo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sexo']);
       $sStyleReadLab_sexo = '';
       $sStyleReadInp_sexo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sexo']) && $this->nmgp_cmp_hidden['sexo'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sexo" value="<?php echo NM_encode_input($this->sexo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_sexo" style="<?php echo $sStyleHidden_sexo; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_sexo"><?php echo $this->nm_new_label['sexo']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['sexo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['sexo'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sexo"]) &&  $this->nmgp_cmp_readonly["sexo"] == "on") { 

$sexo_look = "";
 if ($this->sexo == "1") { $sexo_look .= "Masculino" ;} 
 if ($this->sexo == "2") { $sexo_look .= "Feminino" ;} 
?>
<input type="hidden" name="sexo" value="<?php echo NM_encode_input($sexo) . "\">" . $sexo_look . ""; ?>
<?php } else { ?>
<?php

$sexo_look = "";
 if ($this->sexo == "1") { $sexo_look .= "Masculino" ;} 
 if ($this->sexo == "2") { $sexo_look .= "Feminino" ;} 
?>
<span id="id_read_on_sexo" style=";<?php echo $sStyleReadLab_sexo; ?>"><?php echo NM_encode_input($sexo_look); ?></span><span id="id_read_off_sexo" style="<?php echo $sStyleReadInp_sexo; ?>">
 <span id="idAjaxSelect_sexo"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_sexo" name="sexo" size="1" alt="{type: 'select', enterTab: false}">
 <option value="1" <?php  if ($this->sexo == "1") { echo " selected" ;} ?>>Masculino</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_sexo'][] = '1'; ?>
 <option value="2" <?php  if ($this->sexo == "2") { echo " selected" ;} ?>>Feminino</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_sexo'][] = '2'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sexo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sexo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_sexo_dumb = ('' == $sStyleHidden_sexo) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_sexo_dumb" style="<?php echo $sStyleHidden_sexo_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['estadocivil']))
   {
       $this->nm_new_label['estadocivil'] = "Estado Civil";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estadocivil = $this->estadocivil;
   $sStyleHidden_estadocivil = '';
   if (isset($this->nmgp_cmp_hidden['estadocivil']) && $this->nmgp_cmp_hidden['estadocivil'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estadocivil']);
       $sStyleHidden_estadocivil = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estadocivil = 'display: none;';
   $sStyleReadInp_estadocivil = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estadocivil']) && $this->nmgp_cmp_readonly['estadocivil'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estadocivil']);
       $sStyleReadLab_estadocivil = '';
       $sStyleReadInp_estadocivil = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estadocivil']) && $this->nmgp_cmp_hidden['estadocivil'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="estadocivil" value="<?php echo NM_encode_input($this->estadocivil) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_estadocivil" style="<?php echo $sStyleHidden_estadocivil; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_estadocivil"><?php echo $this->nm_new_label['estadocivil']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estadocivil"]) &&  $this->nmgp_cmp_readonly["estadocivil"] == "on") { 

$estadocivil_look = "";
 if ($this->estadocivil == "1") { $estadocivil_look .= "Solteiro" ;} 
 if ($this->estadocivil == "2") { $estadocivil_look .= "Casado" ;} 
?>
<input type="hidden" name="estadocivil" value="<?php echo NM_encode_input($estadocivil) . "\">" . $estadocivil_look . ""; ?>
<?php } else { ?>
<?php

$estadocivil_look = "";
 if ($this->estadocivil == "1") { $estadocivil_look .= "Solteiro" ;} 
 if ($this->estadocivil == "2") { $estadocivil_look .= "Casado" ;} 
?>
<span id="id_read_on_estadocivil" style=";<?php echo $sStyleReadLab_estadocivil; ?>"><?php echo NM_encode_input($estadocivil_look); ?></span><span id="id_read_off_estadocivil" style="<?php echo $sStyleReadInp_estadocivil; ?>">
 <span id="idAjaxSelect_estadocivil"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_estadocivil" name="estadocivil" size="1" alt="{type: 'select', enterTab: false}">
 <option value="1" <?php  if ($this->estadocivil == "1") { echo " selected" ;} ?>>Solteiro</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estadocivil'][] = '1'; ?>
 <option value="2" <?php  if ($this->estadocivil == "2") { echo " selected" ;} ?>>Casado</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estadocivil'][] = '2'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estadocivil_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estadocivil_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_estadocivil_dumb = ('' == $sStyleHidden_estadocivil) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_estadocivil_dumb" style="<?php echo $sStyleHidden_estadocivil_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['datanascimento']))
    {
        $this->nm_new_label['datanascimento'] = "Data de Nascimento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $datanascimento = $this->datanascimento;
   $sStyleHidden_datanascimento = '';
   if (isset($this->nmgp_cmp_hidden['datanascimento']) && $this->nmgp_cmp_hidden['datanascimento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['datanascimento']);
       $sStyleHidden_datanascimento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_datanascimento = 'display: none;';
   $sStyleReadInp_datanascimento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['datanascimento']) && $this->nmgp_cmp_readonly['datanascimento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['datanascimento']);
       $sStyleReadLab_datanascimento = '';
       $sStyleReadInp_datanascimento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['datanascimento']) && $this->nmgp_cmp_hidden['datanascimento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="datanascimento" value="<?php echo NM_encode_input($datanascimento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_datanascimento" style="<?php echo $sStyleHidden_datanascimento; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_datanascimento"><?php echo $this->nm_new_label['datanascimento']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['datanascimento']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['datanascimento'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["datanascimento"]) &&  $this->nmgp_cmp_readonly["datanascimento"] == "on") { 

 ?>
<input type="hidden" name="datanascimento" value="<?php echo NM_encode_input($datanascimento) . "\">" . $datanascimento . ""; ?>
<?php } else { ?>
<span id="id_read_on_datanascimento" class="sc-ui-readonly-datanascimento" style=";<?php echo $sStyleReadLab_datanascimento; ?>"><?php echo NM_encode_input($datanascimento); ?></span><span id="id_read_off_datanascimento" style="white-space: nowrap;<?php echo $sStyleReadInp_datanascimento; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_datanascimento" type=text name="datanascimento" value="<?php echo NM_encode_input($datanascimento) ?>"
 size=18 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['datanascimento']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['datanascimento']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['datanascimento']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_datanascimento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_datanascimento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_datanascimento_dumb = ('' == $sStyleHidden_datanascimento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_datanascimento_dumb" style="<?php echo $sStyleHidden_datanascimento_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cpf']))
    {
        $this->nm_new_label['cpf'] = "CPF";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cpf = $this->cpf;
   $sStyleHidden_cpf = '';
   if (isset($this->nmgp_cmp_hidden['cpf']) && $this->nmgp_cmp_hidden['cpf'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cpf']);
       $sStyleHidden_cpf = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cpf = 'display: none;';
   $sStyleReadInp_cpf = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cpf']) && $this->nmgp_cmp_readonly['cpf'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cpf']);
       $sStyleReadLab_cpf = '';
       $sStyleReadInp_cpf = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cpf']) && $this->nmgp_cmp_hidden['cpf'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cpf" value="<?php echo NM_encode_input($cpf) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cpf" style="<?php echo $sStyleHidden_cpf; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_cpf"><?php echo $this->nm_new_label['cpf']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cpf"]) &&  $this->nmgp_cmp_readonly["cpf"] == "on") { 

 ?>
<input type="hidden" name="cpf" value="<?php echo NM_encode_input($cpf) . "\">" . $cpf . ""; ?>
<?php } else { ?>
<span id="id_read_on_cpf" class="sc-ui-readonly-cpf" style=";<?php echo $sStyleReadLab_cpf; ?>"><?php echo NM_encode_input($this->cpf); ?></span><span id="id_read_off_cpf" style="white-space: nowrap;<?php echo $sStyleReadInp_cpf; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_cpf" type=text name="cpf" value="<?php echo NM_encode_input($cpf) ?>"
 size=12 alt="{datatype: 'cpf', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cpf_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cpf_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_cpf_dumb = ('' == $sStyleHidden_cpf) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cpf_dumb" style="<?php echo $sStyleHidden_cpf_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['rg']))
    {
        $this->nm_new_label['rg'] = "RG";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $rg = $this->rg;
   $sStyleHidden_rg = '';
   if (isset($this->nmgp_cmp_hidden['rg']) && $this->nmgp_cmp_hidden['rg'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['rg']);
       $sStyleHidden_rg = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_rg = 'display: none;';
   $sStyleReadInp_rg = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['rg']) && $this->nmgp_cmp_readonly['rg'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['rg']);
       $sStyleReadLab_rg = '';
       $sStyleReadInp_rg = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['rg']) && $this->nmgp_cmp_hidden['rg'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="rg" value="<?php echo NM_encode_input($rg) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_rg" style="<?php echo $sStyleHidden_rg; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_rg"><?php echo $this->nm_new_label['rg']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["rg"]) &&  $this->nmgp_cmp_readonly["rg"] == "on") { 

 ?>
<input type="hidden" name="rg" value="<?php echo NM_encode_input($rg) . "\">" . $rg . ""; ?>
<?php } else { ?>
<span id="id_read_on_rg" class="sc-ui-readonly-rg" style=";<?php echo $sStyleReadLab_rg; ?>"><?php echo NM_encode_input($this->rg); ?></span><span id="id_read_off_rg" style="white-space: nowrap;<?php echo $sStyleReadInp_rg; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_rg" type=text name="rg" value="<?php echo NM_encode_input($rg) ?>"
 size=15 maxlength=15 alt="{datatype: 'text', maxLength: 15, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_rg_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_rg_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_rg_dumb = ('' == $sStyleHidden_rg) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_rg_dumb" style="<?php echo $sStyleHidden_rg_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['orgaoexpedidor']))
    {
        $this->nm_new_label['orgaoexpedidor'] = "Orgão Expedidor";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $orgaoexpedidor = $this->orgaoexpedidor;
   $sStyleHidden_orgaoexpedidor = '';
   if (isset($this->nmgp_cmp_hidden['orgaoexpedidor']) && $this->nmgp_cmp_hidden['orgaoexpedidor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['orgaoexpedidor']);
       $sStyleHidden_orgaoexpedidor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_orgaoexpedidor = 'display: none;';
   $sStyleReadInp_orgaoexpedidor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['orgaoexpedidor']) && $this->nmgp_cmp_readonly['orgaoexpedidor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['orgaoexpedidor']);
       $sStyleReadLab_orgaoexpedidor = '';
       $sStyleReadInp_orgaoexpedidor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['orgaoexpedidor']) && $this->nmgp_cmp_hidden['orgaoexpedidor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="orgaoexpedidor" value="<?php echo NM_encode_input($orgaoexpedidor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_orgaoexpedidor" style="<?php echo $sStyleHidden_orgaoexpedidor; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_orgaoexpedidor"><?php echo $this->nm_new_label['orgaoexpedidor']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["orgaoexpedidor"]) &&  $this->nmgp_cmp_readonly["orgaoexpedidor"] == "on") { 

 ?>
<input type="hidden" name="orgaoexpedidor" value="<?php echo NM_encode_input($orgaoexpedidor) . "\">" . $orgaoexpedidor . ""; ?>
<?php } else { ?>
<span id="id_read_on_orgaoexpedidor" class="sc-ui-readonly-orgaoexpedidor" style=";<?php echo $sStyleReadLab_orgaoexpedidor; ?>"><?php echo NM_encode_input($this->orgaoexpedidor); ?></span><span id="id_read_off_orgaoexpedidor" style="white-space: nowrap;<?php echo $sStyleReadInp_orgaoexpedidor; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_orgaoexpedidor" type=text name="orgaoexpedidor" value="<?php echo NM_encode_input($orgaoexpedidor) ?>"
 size=15 maxlength=15 alt="{datatype: 'text', maxLength: 15, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_orgaoexpedidor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_orgaoexpedidor_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_orgaoexpedidor_dumb = ('' == $sStyleHidden_orgaoexpedidor) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_orgaoexpedidor_dumb" style="<?php echo $sStyleHidden_orgaoexpedidor_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dataexpedicao']))
    {
        $this->nm_new_label['dataexpedicao'] = "Data de Expedição";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dataexpedicao = $this->dataexpedicao;
   $sStyleHidden_dataexpedicao = '';
   if (isset($this->nmgp_cmp_hidden['dataexpedicao']) && $this->nmgp_cmp_hidden['dataexpedicao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dataexpedicao']);
       $sStyleHidden_dataexpedicao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dataexpedicao = 'display: none;';
   $sStyleReadInp_dataexpedicao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dataexpedicao']) && $this->nmgp_cmp_readonly['dataexpedicao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dataexpedicao']);
       $sStyleReadLab_dataexpedicao = '';
       $sStyleReadInp_dataexpedicao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dataexpedicao']) && $this->nmgp_cmp_hidden['dataexpedicao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dataexpedicao" value="<?php echo NM_encode_input($dataexpedicao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_dataexpedicao" style="<?php echo $sStyleHidden_dataexpedicao; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_dataexpedicao"><?php echo $this->nm_new_label['dataexpedicao']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dataexpedicao"]) &&  $this->nmgp_cmp_readonly["dataexpedicao"] == "on") { 

 ?>
<input type="hidden" name="dataexpedicao" value="<?php echo NM_encode_input($dataexpedicao) . "\">" . $dataexpedicao . ""; ?>
<?php } else { ?>
<span id="id_read_on_dataexpedicao" class="sc-ui-readonly-dataexpedicao" style=";<?php echo $sStyleReadLab_dataexpedicao; ?>"><?php echo NM_encode_input($dataexpedicao); ?></span><span id="id_read_off_dataexpedicao" style="white-space: nowrap;<?php echo $sStyleReadInp_dataexpedicao; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_dataexpedicao" type=text name="dataexpedicao" value="<?php echo NM_encode_input($dataexpedicao) ?>"
 size=18 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['dataexpedicao']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dataexpedicao']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['dataexpedicao']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dataexpedicao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dataexpedicao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_dataexpedicao_dumb = ('' == $sStyleHidden_dataexpedicao) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_dataexpedicao_dumb" style="<?php echo $sStyleHidden_dataexpedicao_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['estados_id_nasc']))
   {
       $this->nm_new_label['estados_id_nasc'] = "UF Nascimento";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estados_id_nasc = $this->estados_id_nasc;
   $sStyleHidden_estados_id_nasc = '';
   if (isset($this->nmgp_cmp_hidden['estados_id_nasc']) && $this->nmgp_cmp_hidden['estados_id_nasc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estados_id_nasc']);
       $sStyleHidden_estados_id_nasc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estados_id_nasc = 'display: none;';
   $sStyleReadInp_estados_id_nasc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estados_id_nasc']) && $this->nmgp_cmp_readonly['estados_id_nasc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estados_id_nasc']);
       $sStyleReadLab_estados_id_nasc = '';
       $sStyleReadInp_estados_id_nasc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estados_id_nasc']) && $this->nmgp_cmp_hidden['estados_id_nasc'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="estados_id_nasc" value="<?php echo NM_encode_input($this->estados_id_nasc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_estados_id_nasc" style="<?php echo $sStyleHidden_estados_id_nasc; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_estados_id_nasc"><?php echo $this->nm_new_label['estados_id_nasc']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['estados_id_nasc']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['php_cmp_required']['estados_id_nasc'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estados_id_nasc"]) &&  $this->nmgp_cmp_readonly["estados_id_nasc"] == "on") { 
 
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
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc'] = array(); 
    }

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
   $x = 0; 
   $estados_id_nasc_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estados_id_nasc_1))
          {
              foreach ($this->estados_id_nasc_1 as $tmp_estados_id_nasc)
              {
                  if (trim($tmp_estados_id_nasc) === trim($cadaselect[1])) { $estados_id_nasc_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estados_id_nasc) === trim($cadaselect[1])) { $estados_id_nasc_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="estados_id_nasc" value="<?php echo NM_encode_input($estados_id_nasc) . "\">" . $estados_id_nasc_look . ""; ?>
<?php } else { ?>
 
<?php  
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
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_nasc'] = array(); 
    }

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
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $estados_id_nasc_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estados_id_nasc_1))
          {
              foreach ($this->estados_id_nasc_1 as $tmp_estados_id_nasc)
              {
                  if (trim($tmp_estados_id_nasc) === trim($cadaselect[1])) { $estados_id_nasc_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estados_id_nasc) === trim($cadaselect[1])) { $estados_id_nasc_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_estados_id_nasc\" style=\";" .  $sStyleReadLab_estados_id_nasc . "\">" . NM_encode_input($estados_id_nasc_look) . "</span><span id=\"id_read_off_estados_id_nasc\" style=\"" . $sStyleReadInp_estados_id_nasc . "\">";
   echo " <span id=\"idAjaxSelect_estados_id_nasc\"><select class=\"sc-js-input scFormObjectOdd\" style=\"text-align:left;\" id=\"id_sc_field_estados_id_nasc\" name=\"estados_id_nasc\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->estados_id_nasc) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->estados_id_nasc)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estados_id_nasc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estados_id_nasc_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_estados_id_nasc_dumb = ('' == $sStyleHidden_estados_id_nasc) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_estados_id_nasc_dumb" style="<?php echo $sStyleHidden_estados_id_nasc_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['cidades_id_nasc']))
   {
       $this->nm_new_label['cidades_id_nasc'] = "Cidade";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cidades_id_nasc = $this->cidades_id_nasc;
   $sStyleHidden_cidades_id_nasc = '';
   if (isset($this->nmgp_cmp_hidden['cidades_id_nasc']) && $this->nmgp_cmp_hidden['cidades_id_nasc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cidades_id_nasc']);
       $sStyleHidden_cidades_id_nasc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cidades_id_nasc = 'display: none;';
   $sStyleReadInp_cidades_id_nasc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cidades_id_nasc']) && $this->nmgp_cmp_readonly['cidades_id_nasc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cidades_id_nasc']);
       $sStyleReadLab_cidades_id_nasc = '';
       $sStyleReadInp_cidades_id_nasc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cidades_id_nasc']) && $this->nmgp_cmp_hidden['cidades_id_nasc'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cidades_id_nasc" value="<?php echo NM_encode_input($this->cidades_id_nasc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cidades_id_nasc" style="<?php echo $sStyleHidden_cidades_id_nasc; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_cidades_id_nasc"><?php echo $this->nm_new_label['cidades_id_nasc']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cidades_id_nasc"]) &&  $this->nmgp_cmp_readonly["cidades_id_nasc"] == "on") { 
 
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
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc'] = array(); 
    }

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
   $x = 0; 
   $cidades_id_nasc_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cidades_id_nasc_1))
          {
              foreach ($this->cidades_id_nasc_1 as $tmp_cidades_id_nasc)
              {
                  if (trim($tmp_cidades_id_nasc) === trim($cadaselect[1])) { $cidades_id_nasc_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cidades_id_nasc) === trim($cadaselect[1])) { $cidades_id_nasc_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="cidades_id_nasc" value="<?php echo NM_encode_input($cidades_id_nasc) . "\">" . $cidades_id_nasc_look . ""; ?>
<?php } else { ?>
 
<?php  
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
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_nasc'] = array(); 
    }

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
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $cidades_id_nasc_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cidades_id_nasc_1))
          {
              foreach ($this->cidades_id_nasc_1 as $tmp_cidades_id_nasc)
              {
                  if (trim($tmp_cidades_id_nasc) === trim($cadaselect[1])) { $cidades_id_nasc_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cidades_id_nasc) === trim($cadaselect[1])) { $cidades_id_nasc_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_cidades_id_nasc\" style=\";" .  $sStyleReadLab_cidades_id_nasc . "\">" . NM_encode_input($cidades_id_nasc_look) . "</span><span id=\"id_read_off_cidades_id_nasc\" style=\"" . $sStyleReadInp_cidades_id_nasc . "\">";
   echo " <span id=\"idAjaxSelect_cidades_id_nasc\"><select class=\"sc-js-input scFormObjectOdd\" style=\"text-align:left;\" id=\"id_sc_field_cidades_id_nasc\" name=\"cidades_id_nasc\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cidades_id_nasc) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cidades_id_nasc)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cidades_id_nasc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cidades_id_nasc_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_cidades_id_nasc_dumb = ('' == $sStyleHidden_cidades_id_nasc) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cidades_id_nasc_dumb" style="<?php echo $sStyleHidden_cidades_id_nasc_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pne']))
    {
        $this->nm_new_label['pne'] = "Necessidades Especiais";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pne = $this->pne;
   $sStyleHidden_pne = '';
   if (isset($this->nmgp_cmp_hidden['pne']) && $this->nmgp_cmp_hidden['pne'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pne']);
       $sStyleHidden_pne = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pne = 'display: none;';
   $sStyleReadInp_pne = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pne']) && $this->nmgp_cmp_readonly['pne'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pne']);
       $sStyleReadLab_pne = '';
       $sStyleReadInp_pne = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pne']) && $this->nmgp_cmp_hidden['pne'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pne" value="<?php echo NM_encode_input($pne) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_pne" style="<?php echo $sStyleHidden_pne; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_pne"><?php echo $this->nm_new_label['pne']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pne"]) &&  $this->nmgp_cmp_readonly["pne"] == "on") { 

 ?>
<input type="hidden" name="pne" value="<?php echo NM_encode_input($pne) . "\">" . $pne . ""; ?>
<?php } else { ?>
<span id="id_read_on_pne" class="sc-ui-readonly-pne" style=";<?php echo $sStyleReadLab_pne; ?>"><?php echo NM_encode_input($this->pne); ?></span><span id="id_read_off_pne" style="white-space: nowrap;<?php echo $sStyleReadInp_pne; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_pne" type=text name="pne" value="<?php echo NM_encode_input($pne) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
<span class="scFormPopupBubble"><span class="scFormPopupTrigger"><?php echo nmButtonOutput($this->arr_buttons, "bfieldhelp", "return false;", "return false;", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</span><table class="scFormPopup"><tbody><?php
if (isset($_SESSION['scriptcase']['reg_conf']['html_dir']) && $_SESSION['scriptcase']['reg_conf']['html_dir'] == " DIR='RTL'") {
?>
<tr><td class="scFormPopupTopRight scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopLeft scFormPopupCorner"></td></tr><tr><td class="scFormPopupRight"></td><td class="scFormPopupContent">Informe qual a necessidade.</td><td class="scFormPopupLeft"></td></tr><tr><td class="scFormPopupBottomRight scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomLeft scFormPopupCorner"></td></tr><?php
} else {
?>
<tr><td class="scFormPopupTopLeft scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopRight scFormPopupCorner"></td></tr><tr><td class="scFormPopupLeft"></td><td class="scFormPopupContent">Informe qual a necessidade.</td><td class="scFormPopupRight"></td></tr><tr><td class="scFormPopupBottomLeft scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomRight scFormPopupCorner"></td></tr><?php
}
?>
</tbody></table></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pne_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pne_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_pne_dumb = ('' == $sStyleHidden_pne) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_pne_dumb" style="<?php echo $sStyleHidden_pne_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['formaingresso']))
   {
       $this->nm_new_label['formaingresso'] = "Forma de Ingresso";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $formaingresso = $this->formaingresso;
   $sStyleHidden_formaingresso = '';
   if (isset($this->nmgp_cmp_hidden['formaingresso']) && $this->nmgp_cmp_hidden['formaingresso'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['formaingresso']);
       $sStyleHidden_formaingresso = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_formaingresso = 'display: none;';
   $sStyleReadInp_formaingresso = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['formaingresso']) && $this->nmgp_cmp_readonly['formaingresso'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['formaingresso']);
       $sStyleReadLab_formaingresso = '';
       $sStyleReadInp_formaingresso = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['formaingresso']) && $this->nmgp_cmp_hidden['formaingresso'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="formaingresso" value="<?php echo NM_encode_input($this->formaingresso) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_formaingresso" style="<?php echo $sStyleHidden_formaingresso; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_formaingresso"><?php echo $this->nm_new_label['formaingresso']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["formaingresso"]) &&  $this->nmgp_cmp_readonly["formaingresso"] == "on") { 

$formaingresso_look = "";
 if ($this->formaingresso == "1") { $formaingresso_look .= "Bolsista" ;} 
 if ($this->formaingresso == "2") { $formaingresso_look .= "Gratuíto" ;} 
?>
<input type="hidden" name="formaingresso" value="<?php echo NM_encode_input($formaingresso) . "\">" . $formaingresso_look . ""; ?>
<?php } else { ?>
<?php

$formaingresso_look = "";
 if ($this->formaingresso == "1") { $formaingresso_look .= "Bolsista" ;} 
 if ($this->formaingresso == "2") { $formaingresso_look .= "Gratuíto" ;} 
?>
<span id="id_read_on_formaingresso" style=";<?php echo $sStyleReadLab_formaingresso; ?>"><?php echo NM_encode_input($formaingresso_look); ?></span><span id="id_read_off_formaingresso" style="<?php echo $sStyleReadInp_formaingresso; ?>">
 <span id="idAjaxSelect_formaingresso"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_formaingresso" name="formaingresso" size="1" alt="{type: 'select', enterTab: false}">
 <option value="1" <?php  if ($this->formaingresso == "1") { echo " selected" ;} ?>>Bolsista</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_formaingresso'][] = '1'; ?>
 <option value="2" <?php  if ($this->formaingresso == "2") { echo " selected" ;} ?>>Gratuíto</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_formaingresso'][] = '2'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_formaingresso_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_formaingresso_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_formaingresso_dumb = ('' == $sStyleHidden_formaingresso) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_formaingresso_dumb" style="<?php echo $sStyleHidden_formaingresso_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dataformatura']))
    {
        $this->nm_new_label['dataformatura'] = "Data de Formatura";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dataformatura = $this->dataformatura;
   $sStyleHidden_dataformatura = '';
   if (isset($this->nmgp_cmp_hidden['dataformatura']) && $this->nmgp_cmp_hidden['dataformatura'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dataformatura']);
       $sStyleHidden_dataformatura = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dataformatura = 'display: none;';
   $sStyleReadInp_dataformatura = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dataformatura']) && $this->nmgp_cmp_readonly['dataformatura'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dataformatura']);
       $sStyleReadLab_dataformatura = '';
       $sStyleReadInp_dataformatura = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dataformatura']) && $this->nmgp_cmp_hidden['dataformatura'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dataformatura" value="<?php echo NM_encode_input($dataformatura) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_dataformatura" style="<?php echo $sStyleHidden_dataformatura; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_dataformatura"><?php echo $this->nm_new_label['dataformatura']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dataformatura"]) &&  $this->nmgp_cmp_readonly["dataformatura"] == "on") { 

 ?>
<input type="hidden" name="dataformatura" value="<?php echo NM_encode_input($dataformatura) . "\">" . $dataformatura . ""; ?>
<?php } else { ?>
<span id="id_read_on_dataformatura" class="sc-ui-readonly-dataformatura" style=";<?php echo $sStyleReadLab_dataformatura; ?>"><?php echo NM_encode_input($dataformatura); ?></span><span id="id_read_off_dataformatura" style="white-space: nowrap;<?php echo $sStyleReadInp_dataformatura; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_dataformatura" type=text name="dataformatura" value="<?php echo NM_encode_input($dataformatura) ?>"
 size=18 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['dataformatura']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dataformatura']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['dataformatura']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dataformatura_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dataformatura_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_dataformatura_dumb = ('' == $sStyleHidden_dataformatura) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_dataformatura_dumb" style="<?php echo $sStyleHidden_dataformatura_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>Acesso do Aluno<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['login']))
    {
        $this->nm_new_label['login'] = "Login";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $login = $this->login;
   $sStyleHidden_login = '';
   if (isset($this->nmgp_cmp_hidden['login']) && $this->nmgp_cmp_hidden['login'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['login']);
       $sStyleHidden_login = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_login = 'display: none;';
   $sStyleReadInp_login = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['login']) && $this->nmgp_cmp_readonly['login'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['login']);
       $sStyleReadLab_login = '';
       $sStyleReadInp_login = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['login']) && $this->nmgp_cmp_hidden['login'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="login" value="<?php echo NM_encode_input($login) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_login" style="<?php echo $sStyleHidden_login; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_login"><?php echo $this->nm_new_label['login']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["login"]) &&  $this->nmgp_cmp_readonly["login"] == "on") { 

 ?>
<input type="hidden" name="login" value="<?php echo NM_encode_input($login) . "\">" . $login . ""; ?>
<?php } else { ?>
<span id="id_read_on_login" class="sc-ui-readonly-login" style=";<?php echo $sStyleReadLab_login; ?>"><?php echo NM_encode_input($this->login); ?></span><span id="id_read_off_login" style="white-space: nowrap;<?php echo $sStyleReadInp_login; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_login" type=text name="login" value="<?php echo NM_encode_input($login) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_login_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_login_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_login_dumb = ('' == $sStyleHidden_login) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_login_dumb" style="<?php echo $sStyleHidden_login_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['senha']))
    {
        $this->nm_new_label['senha'] = "Senha";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $senha = $this->senha;
   $sStyleHidden_senha = '';
   if (isset($this->nmgp_cmp_hidden['senha']) && $this->nmgp_cmp_hidden['senha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['senha']);
       $sStyleHidden_senha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_senha = 'display: none;';
   $sStyleReadInp_senha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['senha']) && $this->nmgp_cmp_readonly['senha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['senha']);
       $sStyleReadLab_senha = '';
       $sStyleReadInp_senha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['senha']) && $this->nmgp_cmp_hidden['senha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="senha" value="<?php echo NM_encode_input($senha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_senha" style="<?php echo $sStyleHidden_senha; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_senha"><?php echo $this->nm_new_label['senha']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["senha"]) &&  $this->nmgp_cmp_readonly["senha"] == "on") { ?>
<input type="hidden" name="senha" value="">
<?php } else { ?>
<span id="id_read_on_senha" class="sc-ui-readonly-senha" style=";<?php echo $sStyleReadLab_senha; ?>"><?php echo NM_encode_input($this->senha); ?></span><span id="id_read_off_senha" style="white-space: nowrap;<?php echo $sStyleReadInp_senha; ?>"><input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_senha" type=password name="senha" value="" 
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_senha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_senha_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_senha_dumb = ('' == $sStyleHidden_senha) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_senha_dumb" style="<?php echo $sStyleHidden_senha_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>Filiação<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nomemae']))
    {
        $this->nm_new_label['nomemae'] = "Nome da Mae";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nomemae = $this->nomemae;
   $sStyleHidden_nomemae = '';
   if (isset($this->nmgp_cmp_hidden['nomemae']) && $this->nmgp_cmp_hidden['nomemae'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nomemae']);
       $sStyleHidden_nomemae = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nomemae = 'display: none;';
   $sStyleReadInp_nomemae = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nomemae']) && $this->nmgp_cmp_readonly['nomemae'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nomemae']);
       $sStyleReadLab_nomemae = '';
       $sStyleReadInp_nomemae = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nomemae']) && $this->nmgp_cmp_hidden['nomemae'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nomemae" value="<?php echo NM_encode_input($nomemae) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_nomemae" style="<?php echo $sStyleHidden_nomemae; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_nomemae"><?php echo $this->nm_new_label['nomemae']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nomemae"]) &&  $this->nmgp_cmp_readonly["nomemae"] == "on") { 

 ?>
<input type="hidden" name="nomemae" value="<?php echo NM_encode_input($nomemae) . "\">" . $nomemae . ""; ?>
<?php } else { ?>
<span id="id_read_on_nomemae" class="sc-ui-readonly-nomemae" style=";<?php echo $sStyleReadLab_nomemae; ?>"><?php echo NM_encode_input($this->nomemae); ?></span><span id="id_read_off_nomemae" style="white-space: nowrap;<?php echo $sStyleReadInp_nomemae; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_nomemae" type=text name="nomemae" value="<?php echo NM_encode_input($nomemae) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nomemae_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nomemae_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_nomemae_dumb = ('' == $sStyleHidden_nomemae) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nomemae_dumb" style="<?php echo $sStyleHidden_nomemae_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nomepai']))
    {
        $this->nm_new_label['nomepai'] = "Nome do Pai";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nomepai = $this->nomepai;
   $sStyleHidden_nomepai = '';
   if (isset($this->nmgp_cmp_hidden['nomepai']) && $this->nmgp_cmp_hidden['nomepai'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nomepai']);
       $sStyleHidden_nomepai = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nomepai = 'display: none;';
   $sStyleReadInp_nomepai = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nomepai']) && $this->nmgp_cmp_readonly['nomepai'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nomepai']);
       $sStyleReadLab_nomepai = '';
       $sStyleReadInp_nomepai = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nomepai']) && $this->nmgp_cmp_hidden['nomepai'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nomepai" value="<?php echo NM_encode_input($nomepai) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_nomepai" style="<?php echo $sStyleHidden_nomepai; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_nomepai"><?php echo $this->nm_new_label['nomepai']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nomepai"]) &&  $this->nmgp_cmp_readonly["nomepai"] == "on") { 

 ?>
<input type="hidden" name="nomepai" value="<?php echo NM_encode_input($nomepai) . "\">" . $nomepai . ""; ?>
<?php } else { ?>
<span id="id_read_on_nomepai" class="sc-ui-readonly-nomepai" style=";<?php echo $sStyleReadLab_nomepai; ?>"><?php echo NM_encode_input($this->nomepai); ?></span><span id="id_read_off_nomepai" style="white-space: nowrap;<?php echo $sStyleReadInp_nomepai; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_nomepai" type=text name="nomepai" value="<?php echo NM_encode_input($nomepai) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nomepai_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nomepai_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_nomepai_dumb = ('' == $sStyleHidden_nomepai) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nomepai_dumb" style="<?php echo $sStyleHidden_nomepai_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>Contato<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numerocel']))
    {
        $this->nm_new_label['numerocel'] = "Número do Celular";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numerocel = $this->numerocel;
   $sStyleHidden_numerocel = '';
   if (isset($this->nmgp_cmp_hidden['numerocel']) && $this->nmgp_cmp_hidden['numerocel'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numerocel']);
       $sStyleHidden_numerocel = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numerocel = 'display: none;';
   $sStyleReadInp_numerocel = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['numerocel']) && $this->nmgp_cmp_readonly['numerocel'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numerocel']);
       $sStyleReadLab_numerocel = '';
       $sStyleReadInp_numerocel = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numerocel']) && $this->nmgp_cmp_hidden['numerocel'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numerocel" value="<?php echo NM_encode_input($numerocel) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_numerocel" style="<?php echo $sStyleHidden_numerocel; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_numerocel"><?php echo $this->nm_new_label['numerocel']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["numerocel"]) &&  $this->nmgp_cmp_readonly["numerocel"] == "on") { 

 ?>
<input type="hidden" name="numerocel" value="<?php echo NM_encode_input($numerocel) . "\">" . $numerocel . ""; ?>
<?php } else { ?>
<span id="id_read_on_numerocel" class="sc-ui-readonly-numerocel" style=";<?php echo $sStyleReadLab_numerocel; ?>"><?php echo NM_encode_input($this->numerocel); ?></span><span id="id_read_off_numerocel" style="white-space: nowrap;<?php echo $sStyleReadInp_numerocel; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_numerocel" type=text name="numerocel" value="<?php echo NM_encode_input($numerocel) ?>"
 size=45 maxlength=60 alt="{datatype: 'mask', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', maskList: '(99) 99999-9999', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_numerocel_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_numerocel_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_numerocel_dumb = ('' == $sStyleHidden_numerocel) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_numerocel_dumb" style="<?php echo $sStyleHidden_numerocel_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numerotel']))
    {
        $this->nm_new_label['numerotel'] = "Número do Telefone";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numerotel = $this->numerotel;
   $sStyleHidden_numerotel = '';
   if (isset($this->nmgp_cmp_hidden['numerotel']) && $this->nmgp_cmp_hidden['numerotel'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numerotel']);
       $sStyleHidden_numerotel = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numerotel = 'display: none;';
   $sStyleReadInp_numerotel = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['numerotel']) && $this->nmgp_cmp_readonly['numerotel'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numerotel']);
       $sStyleReadLab_numerotel = '';
       $sStyleReadInp_numerotel = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numerotel']) && $this->nmgp_cmp_hidden['numerotel'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numerotel" value="<?php echo NM_encode_input($numerotel) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_numerotel" style="<?php echo $sStyleHidden_numerotel; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_numerotel"><?php echo $this->nm_new_label['numerotel']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["numerotel"]) &&  $this->nmgp_cmp_readonly["numerotel"] == "on") { 

 ?>
<input type="hidden" name="numerotel" value="<?php echo NM_encode_input($numerotel) . "\">" . $numerotel . ""; ?>
<?php } else { ?>
<span id="id_read_on_numerotel" class="sc-ui-readonly-numerotel" style=";<?php echo $sStyleReadLab_numerotel; ?>"><?php echo NM_encode_input($this->numerotel); ?></span><span id="id_read_off_numerotel" style="white-space: nowrap;<?php echo $sStyleReadInp_numerotel; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_numerotel" type=text name="numerotel" value="<?php echo NM_encode_input($numerotel) ?>"
 size=45 maxlength=59 alt="{datatype: 'mask', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', maskList: '(99) 9999-9999', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_numerotel_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_numerotel_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_numerotel_dumb = ('' == $sStyleHidden_numerotel) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_numerotel_dumb" style="<?php echo $sStyleHidden_numerotel_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numeroprof']))
    {
        $this->nm_new_label['numeroprof'] = "Número Profissional";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numeroprof = $this->numeroprof;
   $sStyleHidden_numeroprof = '';
   if (isset($this->nmgp_cmp_hidden['numeroprof']) && $this->nmgp_cmp_hidden['numeroprof'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numeroprof']);
       $sStyleHidden_numeroprof = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numeroprof = 'display: none;';
   $sStyleReadInp_numeroprof = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['numeroprof']) && $this->nmgp_cmp_readonly['numeroprof'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numeroprof']);
       $sStyleReadLab_numeroprof = '';
       $sStyleReadInp_numeroprof = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numeroprof']) && $this->nmgp_cmp_hidden['numeroprof'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numeroprof" value="<?php echo NM_encode_input($numeroprof) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_numeroprof" style="<?php echo $sStyleHidden_numeroprof; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_numeroprof"><?php echo $this->nm_new_label['numeroprof']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["numeroprof"]) &&  $this->nmgp_cmp_readonly["numeroprof"] == "on") { 

 ?>
<input type="hidden" name="numeroprof" value="<?php echo NM_encode_input($numeroprof) . "\">" . $numeroprof . ""; ?>
<?php } else { ?>
<span id="id_read_on_numeroprof" class="sc-ui-readonly-numeroprof" style=";<?php echo $sStyleReadLab_numeroprof; ?>"><?php echo NM_encode_input($this->numeroprof); ?></span><span id="id_read_off_numeroprof" style="white-space: nowrap;<?php echo $sStyleReadInp_numeroprof; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_numeroprof" type=text name="numeroprof" value="<?php echo NM_encode_input($numeroprof) ?>"
 size=45 maxlength=59 alt="{datatype: 'mask', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', maskList: '(99) 9999-9999', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_numeroprof_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_numeroprof_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_numeroprof_dumb = ('' == $sStyleHidden_numeroprof) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_numeroprof_dumb" style="<?php echo $sStyleHidden_numeroprof_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emailpessoal']))
    {
        $this->nm_new_label['emailpessoal'] = "E-mail Pessoal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emailpessoal = $this->emailpessoal;
   $sStyleHidden_emailpessoal = '';
   if (isset($this->nmgp_cmp_hidden['emailpessoal']) && $this->nmgp_cmp_hidden['emailpessoal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emailpessoal']);
       $sStyleHidden_emailpessoal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emailpessoal = 'display: none;';
   $sStyleReadInp_emailpessoal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emailpessoal']) && $this->nmgp_cmp_readonly['emailpessoal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emailpessoal']);
       $sStyleReadLab_emailpessoal = '';
       $sStyleReadInp_emailpessoal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emailpessoal']) && $this->nmgp_cmp_hidden['emailpessoal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emailpessoal" value="<?php echo NM_encode_input($emailpessoal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_emailpessoal" style="<?php echo $sStyleHidden_emailpessoal; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_emailpessoal"><?php echo $this->nm_new_label['emailpessoal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emailpessoal"]) &&  $this->nmgp_cmp_readonly["emailpessoal"] == "on") { 

 ?>
<input type="hidden" name="emailpessoal" value="<?php echo NM_encode_input($emailpessoal) . "\">" . $emailpessoal . ""; ?>
<?php } else { ?>
<span id="id_read_on_emailpessoal" class="sc-ui-readonly-emailpessoal" style=";<?php echo $sStyleReadLab_emailpessoal; ?>"><?php echo NM_encode_input($this->emailpessoal); ?></span><span id="id_read_off_emailpessoal" style="white-space: nowrap;<?php echo $sStyleReadInp_emailpessoal; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_emailpessoal" type=text name="emailpessoal" value="<?php echo NM_encode_input($emailpessoal) ?>"
 size=45 maxlength=45 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">&nbsp;<?php if ($this->nmgp_opcao != "novo"){ ?><?php echo nmButtonOutput($this->arr_buttons, "bemail", "if (document.F1.emailpessoal.value != '') {window.open('mailto:' + document.F1.emailpessoal.value); }", "if (document.F1.emailpessoal.value != '') {window.open('mailto:' + document.F1.emailpessoal.value); }", "emailpessoal_mail", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emailpessoal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emailpessoal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_emailpessoal_dumb = ('' == $sStyleHidden_emailpessoal) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_emailpessoal_dumb" style="<?php echo $sStyleHidden_emailpessoal_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emailprofissional']))
    {
        $this->nm_new_label['emailprofissional'] = "E-mail Profissional";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emailprofissional = $this->emailprofissional;
   $sStyleHidden_emailprofissional = '';
   if (isset($this->nmgp_cmp_hidden['emailprofissional']) && $this->nmgp_cmp_hidden['emailprofissional'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emailprofissional']);
       $sStyleHidden_emailprofissional = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emailprofissional = 'display: none;';
   $sStyleReadInp_emailprofissional = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emailprofissional']) && $this->nmgp_cmp_readonly['emailprofissional'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emailprofissional']);
       $sStyleReadLab_emailprofissional = '';
       $sStyleReadInp_emailprofissional = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emailprofissional']) && $this->nmgp_cmp_hidden['emailprofissional'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emailprofissional" value="<?php echo NM_encode_input($emailprofissional) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_emailprofissional" style="<?php echo $sStyleHidden_emailprofissional; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_emailprofissional"><?php echo $this->nm_new_label['emailprofissional']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emailprofissional"]) &&  $this->nmgp_cmp_readonly["emailprofissional"] == "on") { 

 ?>
<input type="hidden" name="emailprofissional" value="<?php echo NM_encode_input($emailprofissional) . "\">" . $emailprofissional . ""; ?>
<?php } else { ?>
<span id="id_read_on_emailprofissional" class="sc-ui-readonly-emailprofissional" style=";<?php echo $sStyleReadLab_emailprofissional; ?>"><?php echo NM_encode_input($this->emailprofissional); ?></span><span id="id_read_off_emailprofissional" style="white-space: nowrap;<?php echo $sStyleReadInp_emailprofissional; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_emailprofissional" type=text name="emailprofissional" value="<?php echo NM_encode_input($emailprofissional) ?>"
 size=45 maxlength=45 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">&nbsp;<?php if ($this->nmgp_opcao != "novo"){ ?><?php echo nmButtonOutput($this->arr_buttons, "bemail", "if (document.F1.emailprofissional.value != '') {window.open('mailto:' + document.F1.emailprofissional.value); }", "if (document.F1.emailprofissional.value != '') {window.open('mailto:' + document.F1.emailprofissional.value); }", "emailprofissional_mail", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emailprofissional_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emailprofissional_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_emailprofissional_dumb = ('' == $sStyleHidden_emailprofissional) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_emailprofissional_dumb" style="<?php echo $sStyleHidden_emailprofissional_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>Residência<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cep']))
    {
        $this->nm_new_label['cep'] = "CEP";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cep = $this->cep;
   $sStyleHidden_cep = '';
   if (isset($this->nmgp_cmp_hidden['cep']) && $this->nmgp_cmp_hidden['cep'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cep']);
       $sStyleHidden_cep = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cep = 'display: none;';
   $sStyleReadInp_cep = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cep']) && $this->nmgp_cmp_readonly['cep'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cep']);
       $sStyleReadLab_cep = '';
       $sStyleReadInp_cep = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cep']) && $this->nmgp_cmp_hidden['cep'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cep" value="<?php echo NM_encode_input($cep) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cep" style="<?php echo $sStyleHidden_cep; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_cep"><?php echo $this->nm_new_label['cep']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cep"]) &&  $this->nmgp_cmp_readonly["cep"] == "on") { 

 ?>
<input type="hidden" name="cep" value="<?php echo NM_encode_input($cep) . "\">" . $cep . ""; ?>
<?php } else { ?>
<span id="id_read_on_cep" class="sc-ui-readonly-cep" style=";<?php echo $sStyleReadLab_cep; ?>"><?php echo NM_encode_input($this->cep); ?></span><span id="id_read_off_cep" style="white-space: nowrap;<?php echo $sStyleReadInp_cep; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_cep" type=text name="cep" value="<?php echo NM_encode_input($cep) ?>"
 size=15 maxlength=15 alt="{datatype: 'text', maxLength: 15, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cep_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cep_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_cep_dumb = ('' == $sStyleHidden_cep) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cep_dumb" style="<?php echo $sStyleHidden_cep_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['logradouro']))
    {
        $this->nm_new_label['logradouro'] = "Logradouro";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $logradouro = $this->logradouro;
   $sStyleHidden_logradouro = '';
   if (isset($this->nmgp_cmp_hidden['logradouro']) && $this->nmgp_cmp_hidden['logradouro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['logradouro']);
       $sStyleHidden_logradouro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_logradouro = 'display: none;';
   $sStyleReadInp_logradouro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['logradouro']) && $this->nmgp_cmp_readonly['logradouro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['logradouro']);
       $sStyleReadLab_logradouro = '';
       $sStyleReadInp_logradouro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['logradouro']) && $this->nmgp_cmp_hidden['logradouro'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="logradouro" value="<?php echo NM_encode_input($logradouro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_logradouro" style="<?php echo $sStyleHidden_logradouro; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_logradouro"><?php echo $this->nm_new_label['logradouro']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["logradouro"]) &&  $this->nmgp_cmp_readonly["logradouro"] == "on") { 

 ?>
<input type="hidden" name="logradouro" value="<?php echo NM_encode_input($logradouro) . "\">" . $logradouro . ""; ?>
<?php } else { ?>
<span id="id_read_on_logradouro" class="sc-ui-readonly-logradouro" style=";<?php echo $sStyleReadLab_logradouro; ?>"><?php echo NM_encode_input($this->logradouro); ?></span><span id="id_read_off_logradouro" style="white-space: nowrap;<?php echo $sStyleReadInp_logradouro; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_logradouro" type=text name="logradouro" value="<?php echo NM_encode_input($logradouro) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_logradouro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_logradouro_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_logradouro_dumb = ('' == $sStyleHidden_logradouro) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_logradouro_dumb" style="<?php echo $sStyleHidden_logradouro_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numero']))
    {
        $this->nm_new_label['numero'] = "Número";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numero = $this->numero;
   $sStyleHidden_numero = '';
   if (isset($this->nmgp_cmp_hidden['numero']) && $this->nmgp_cmp_hidden['numero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numero']);
       $sStyleHidden_numero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numero = 'display: none;';
   $sStyleReadInp_numero = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['numero']) && $this->nmgp_cmp_readonly['numero'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numero']);
       $sStyleReadLab_numero = '';
       $sStyleReadInp_numero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numero']) && $this->nmgp_cmp_hidden['numero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numero" value="<?php echo NM_encode_input($numero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_numero" style="<?php echo $sStyleHidden_numero; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_numero"><?php echo $this->nm_new_label['numero']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["numero"]) &&  $this->nmgp_cmp_readonly["numero"] == "on") { 

 ?>
<input type="hidden" name="numero" value="<?php echo NM_encode_input($numero) . "\">" . $numero . ""; ?>
<?php } else { ?>
<span id="id_read_on_numero" class="sc-ui-readonly-numero" style=";<?php echo $sStyleReadLab_numero; ?>"><?php echo NM_encode_input($this->numero); ?></span><span id="id_read_off_numero" style="white-space: nowrap;<?php echo $sStyleReadInp_numero; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_numero" type=text name="numero" value="<?php echo NM_encode_input($numero) ?>"
 size=5 maxlength=5 alt="{datatype: 'text', maxLength: 5, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_numero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_numero_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_numero_dumb = ('' == $sStyleHidden_numero) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_numero_dumb" style="<?php echo $sStyleHidden_numero_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['complemento']))
    {
        $this->nm_new_label['complemento'] = "Complemento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $complemento = $this->complemento;
   $sStyleHidden_complemento = '';
   if (isset($this->nmgp_cmp_hidden['complemento']) && $this->nmgp_cmp_hidden['complemento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['complemento']);
       $sStyleHidden_complemento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_complemento = 'display: none;';
   $sStyleReadInp_complemento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['complemento']) && $this->nmgp_cmp_readonly['complemento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['complemento']);
       $sStyleReadLab_complemento = '';
       $sStyleReadInp_complemento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['complemento']) && $this->nmgp_cmp_hidden['complemento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="complemento" value="<?php echo NM_encode_input($complemento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_complemento" style="<?php echo $sStyleHidden_complemento; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_complemento"><?php echo $this->nm_new_label['complemento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["complemento"]) &&  $this->nmgp_cmp_readonly["complemento"] == "on") { 

 ?>
<input type="hidden" name="complemento" value="<?php echo NM_encode_input($complemento) . "\">" . $complemento . ""; ?>
<?php } else { ?>
<span id="id_read_on_complemento" class="sc-ui-readonly-complemento" style=";<?php echo $sStyleReadLab_complemento; ?>"><?php echo NM_encode_input($this->complemento); ?></span><span id="id_read_off_complemento" style="white-space: nowrap;<?php echo $sStyleReadInp_complemento; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_complemento" type=text name="complemento" value="<?php echo NM_encode_input($complemento) ?>"
 size=5 maxlength=5 alt="{datatype: 'text', maxLength: 5, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_complemento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_complemento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_complemento_dumb = ('' == $sStyleHidden_complemento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_complemento_dumb" style="<?php echo $sStyleHidden_complemento_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['bairro']))
    {
        $this->nm_new_label['bairro'] = "Bairro";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bairro = $this->bairro;
   $sStyleHidden_bairro = '';
   if (isset($this->nmgp_cmp_hidden['bairro']) && $this->nmgp_cmp_hidden['bairro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bairro']);
       $sStyleHidden_bairro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bairro = 'display: none;';
   $sStyleReadInp_bairro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bairro']) && $this->nmgp_cmp_readonly['bairro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bairro']);
       $sStyleReadLab_bairro = '';
       $sStyleReadInp_bairro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bairro']) && $this->nmgp_cmp_hidden['bairro'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bairro" value="<?php echo NM_encode_input($bairro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_bairro" style="<?php echo $sStyleHidden_bairro; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_bairro"><?php echo $this->nm_new_label['bairro']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bairro"]) &&  $this->nmgp_cmp_readonly["bairro"] == "on") { 

 ?>
<input type="hidden" name="bairro" value="<?php echo NM_encode_input($bairro) . "\">" . $bairro . ""; ?>
<?php } else { ?>
<span id="id_read_on_bairro" class="sc-ui-readonly-bairro" style=";<?php echo $sStyleReadLab_bairro; ?>"><?php echo NM_encode_input($this->bairro); ?></span><span id="id_read_off_bairro" style="white-space: nowrap;<?php echo $sStyleReadInp_bairro; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_bairro" type=text name="bairro" value="<?php echo NM_encode_input($bairro) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bairro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bairro_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_bairro_dumb = ('' == $sStyleHidden_bairro) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_bairro_dumb" style="<?php echo $sStyleHidden_bairro_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['estados_id_res']))
   {
       $this->nm_new_label['estados_id_res'] = "Estado";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estados_id_res = $this->estados_id_res;
   $sStyleHidden_estados_id_res = '';
   if (isset($this->nmgp_cmp_hidden['estados_id_res']) && $this->nmgp_cmp_hidden['estados_id_res'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estados_id_res']);
       $sStyleHidden_estados_id_res = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estados_id_res = 'display: none;';
   $sStyleReadInp_estados_id_res = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estados_id_res']) && $this->nmgp_cmp_readonly['estados_id_res'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estados_id_res']);
       $sStyleReadLab_estados_id_res = '';
       $sStyleReadInp_estados_id_res = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estados_id_res']) && $this->nmgp_cmp_hidden['estados_id_res'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="estados_id_res" value="<?php echo NM_encode_input($this->estados_id_res) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_estados_id_res" style="<?php echo $sStyleHidden_estados_id_res; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_estados_id_res"><?php echo $this->nm_new_label['estados_id_res']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estados_id_res"]) &&  $this->nmgp_cmp_readonly["estados_id_res"] == "on") { 
 
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
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res'] = array(); 
    }

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
   $x = 0; 
   $estados_id_res_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estados_id_res_1))
          {
              foreach ($this->estados_id_res_1 as $tmp_estados_id_res)
              {
                  if (trim($tmp_estados_id_res) === trim($cadaselect[1])) { $estados_id_res_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estados_id_res) === trim($cadaselect[1])) { $estados_id_res_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="estados_id_res" value="<?php echo NM_encode_input($estados_id_res) . "\">" . $estados_id_res_look . ""; ?>
<?php } else { ?>
 
<?php  
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
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_estados_id_res'] = array(); 
    }

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
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $estados_id_res_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estados_id_res_1))
          {
              foreach ($this->estados_id_res_1 as $tmp_estados_id_res)
              {
                  if (trim($tmp_estados_id_res) === trim($cadaselect[1])) { $estados_id_res_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estados_id_res) === trim($cadaselect[1])) { $estados_id_res_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_estados_id_res\" style=\";" .  $sStyleReadLab_estados_id_res . "\">" . NM_encode_input($estados_id_res_look) . "</span><span id=\"id_read_off_estados_id_res\" style=\"" . $sStyleReadInp_estados_id_res . "\">";
   echo " <span id=\"idAjaxSelect_estados_id_res\"><select class=\"sc-js-input scFormObjectOdd\" style=\"text-align:left;\" id=\"id_sc_field_estados_id_res\" name=\"estados_id_res\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->estados_id_res) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->estados_id_res)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estados_id_res_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estados_id_res_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_estados_id_res_dumb = ('' == $sStyleHidden_estados_id_res) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_estados_id_res_dumb" style="<?php echo $sStyleHidden_estados_id_res_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['cidades_id_res']))
   {
       $this->nm_new_label['cidades_id_res'] = "Cidade";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cidades_id_res = $this->cidades_id_res;
   $sStyleHidden_cidades_id_res = '';
   if (isset($this->nmgp_cmp_hidden['cidades_id_res']) && $this->nmgp_cmp_hidden['cidades_id_res'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cidades_id_res']);
       $sStyleHidden_cidades_id_res = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cidades_id_res = 'display: none;';
   $sStyleReadInp_cidades_id_res = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cidades_id_res']) && $this->nmgp_cmp_readonly['cidades_id_res'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cidades_id_res']);
       $sStyleReadLab_cidades_id_res = '';
       $sStyleReadInp_cidades_id_res = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cidades_id_res']) && $this->nmgp_cmp_hidden['cidades_id_res'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cidades_id_res" value="<?php echo NM_encode_input($this->cidades_id_res) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cidades_id_res" style="<?php echo $sStyleHidden_cidades_id_res; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_cidades_id_res"><?php echo $this->nm_new_label['cidades_id_res']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cidades_id_res"]) &&  $this->nmgp_cmp_readonly["cidades_id_res"] == "on") { 
 
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
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res'] = array(); 
    }

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
   $x = 0; 
   $cidades_id_res_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cidades_id_res_1))
          {
              foreach ($this->cidades_id_res_1 as $tmp_cidades_id_res)
              {
                  if (trim($tmp_cidades_id_res) === trim($cadaselect[1])) { $cidades_id_res_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cidades_id_res) === trim($cadaselect[1])) { $cidades_id_res_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="cidades_id_res" value="<?php echo NM_encode_input($cidades_id_res) . "\">" . $cidades_id_res_look . ""; ?>
<?php } else { ?>
 
<?php  
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
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['Lookup_cidades_id_res'] = array(); 
    }

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
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $cidades_id_res_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cidades_id_res_1))
          {
              foreach ($this->cidades_id_res_1 as $tmp_cidades_id_res)
              {
                  if (trim($tmp_cidades_id_res) === trim($cadaselect[1])) { $cidades_id_res_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cidades_id_res) === trim($cadaselect[1])) { $cidades_id_res_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_cidades_id_res\" style=\";" .  $sStyleReadLab_cidades_id_res . "\">" . NM_encode_input($cidades_id_res_look) . "</span><span id=\"id_read_off_cidades_id_res\" style=\"" . $sStyleReadInp_cidades_id_res . "\">";
   echo " <span id=\"idAjaxSelect_cidades_id_res\"><select class=\"sc-js-input scFormObjectOdd\" style=\"text-align:left;\" id=\"id_sc_field_cidades_id_res\" name=\"cidades_id_res\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cidades_id_res) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cidades_id_res)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cidades_id_res_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cidades_id_res_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_cidades_id_res_dumb = ('' == $sStyleHidden_cidades_id_res) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cidades_id_res_dumb" style="<?php echo $sStyleHidden_cidades_id_res_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_5"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_5"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_5" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>Observações<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['observacao']))
    {
        $this->nm_new_label['observacao'] = "Observação";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $observacao = $this->observacao;
   $sStyleHidden_observacao = '';
   if (isset($this->nmgp_cmp_hidden['observacao']) && $this->nmgp_cmp_hidden['observacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['observacao']);
       $sStyleHidden_observacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_observacao = 'display: none;';
   $sStyleReadInp_observacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['observacao']) && $this->nmgp_cmp_readonly['observacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['observacao']);
       $sStyleReadLab_observacao = '';
       $sStyleReadInp_observacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['observacao']) && $this->nmgp_cmp_hidden['observacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="observacao" value="<?php echo NM_encode_input($observacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_observacao" style="<?php echo $sStyleHidden_observacao; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_observacao"><?php echo $this->nm_new_label['observacao']; ?></span></span><br>
<?php
$observacao_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($observacao));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["observacao"]) &&  $this->nmgp_cmp_readonly["observacao"] == "on") { 

 ?>
<input type="hidden" name="observacao" value="<?php echo NM_encode_input($observacao) . "\">" . $observacao_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_observacao" class="sc-ui-readonly-observacao" style=";<?php echo $sStyleReadLab_observacao; ?>"><?php echo NM_encode_input($observacao_val); ?></span><span id="id_read_off_observacao" style="white-space: nowrap;<?php echo $sStyleReadInp_observacao; ?>">
 <textarea  class="sc-js-input scFormObjectOdd" style="white-space: pre-wrap;;" name="observacao" id="id_sc_field_observacao" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo str_replace(array('\r\n', '\n\r', '\n', '\r'), array("\r\n", "\n\r", "\n", "\r"), $observacao); ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_observacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_observacao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_observacao_dumb = ('' == $sStyleHidden_observacao) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_observacao_dumb" style="<?php echo $sStyleHidden_observacao_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['anexos']))
    {
        $this->nm_new_label['anexos'] = "Anexo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $anexos = $this->anexos;
   $sStyleHidden_anexos = '';
   if (isset($this->nmgp_cmp_hidden['anexos']) && $this->nmgp_cmp_hidden['anexos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['anexos']);
       $sStyleHidden_anexos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_anexos = 'display: none;';
   $sStyleReadInp_anexos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['anexos']) && $this->nmgp_cmp_readonly['anexos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['anexos']);
       $sStyleReadLab_anexos = '';
       $sStyleReadInp_anexos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['anexos']) && $this->nmgp_cmp_hidden['anexos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="anexos" value="<?php echo NM_encode_input($anexos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_anexos" style="<?php echo $sStyleHidden_anexos; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_anexos"><?php echo $this->nm_new_label['anexos']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["anexos"]) &&  $this->nmgp_cmp_readonly["anexos"] == "on") { 

 ?>
<input type="hidden" name="anexos" value="<?php echo NM_encode_input($anexos) . "\"><img id=\"anexos_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><span id=\"id_ajax_doc_anexos\"><a href=\"javascript:nm_mostra_doc('1', '" . str_replace("'", "\'", trim($anexos)) . "', 'form_tbl_aluno')\">" . $anexos . "</a></span>"; ?>
<?php } else { ?>
<span id="id_read_on_anexos" class="sc-ui-readonly-anexos" style=";<?php echo $sStyleReadLab_anexos; ?>"><?php echo NM_encode_input($this->anexos); ?></span><span id="id_read_off_anexos" style="white-space: nowrap;<?php echo $sStyleReadInp_anexos; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" type="file" name="anexos[]" id="id_sc_field_anexos"  alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><span id="chk_ajax_img_anexos"<?php if ($this->nmgp_opcao == "novo" || empty($anexos)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="anexos_limpa" value="<?php echo $anexos_limpa . '" '; if ($anexos_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span>
<?php 
   $anexos = trim($anexos); 
   if (!empty($anexos)) 
   { 
       $nm_img_icone = $this->gera_icone($anexos); 
       if (!empty($nm_img_icone)) 
       { 
           $nm_img_icone = "<img src=\"$nm_img_icone\" id=\"id_ajax_doc_icon_anexos\">&nbsp;";
       } 
       echo  $nm_img_icone;
   } 
?> 
<img id="anexos_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><span id="id_ajax_doc_anexos"><a href="javascript:nm_mostra_doc('1', '<?php echo str_replace("'", "\'", trim($anexos)); ?>', 'form_tbl_aluno')"><?php echo $anexos ?></a></span><div id="id_sc_dragdrop_anexos" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragfile'] ?></div>
<div id="id_img_loader_anexos" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_anexos" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
<span class="scFormPopupBubble"><span class="scFormPopupTrigger"><?php echo nmButtonOutput($this->arr_buttons, "bfieldhelp", "return false;", "return false;", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</span><table class="scFormPopup"><tbody><?php
if (isset($_SESSION['scriptcase']['reg_conf']['html_dir']) && $_SESSION['scriptcase']['reg_conf']['html_dir'] == " DIR='RTL'") {
?>
<tr><td class="scFormPopupTopRight scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopLeft scFormPopupCorner"></td></tr><tr><td class="scFormPopupRight"></td><td class="scFormPopupContent">Anexar os documentos Scaneados do Aluno</td><td class="scFormPopupLeft"></td></tr><tr><td class="scFormPopupBottomRight scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomLeft scFormPopupCorner"></td></tr><?php
} else {
?>
<tr><td class="scFormPopupTopLeft scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopRight scFormPopupCorner"></td></tr><tr><td class="scFormPopupLeft"></td><td class="scFormPopupContent">Anexar os documentos Scaneados do Aluno</td><td class="scFormPopupRight"></td></tr><tr><td class="scFormPopupBottomLeft scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomRight scFormPopupCorner"></td></tr><?php
}
?>
</tbody></table></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_anexos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_anexos_text"></span></td></tr></table></td></tr></table> </TD>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
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
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
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
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['run_iframe'] != "F") { ?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tbl_aluno_mob']['total'] + 1)?>);</script><?php } ?>
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
<?php
      $Tzone = ini_get('date.timezone');
      if (empty($Tzone))
      {
?>
<script> 
  _scAjaxShowMessage('', "<?php echo $this->Ini->Nm_lang['lang_errm_tz']; ?>", false, 0, false, "Ok", 0, 0, 0, 0, "", "", "", true, false);
</script> 
<?php
      }
?>
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5);

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
 parent.scAjaxDetailStatus("form_tbl_aluno_mob");
 parent.scAjaxDetailHeight("form_tbl_aluno_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailHeight("form_tbl_aluno_mob", <?php echo $sTamanhoIframe; ?>);
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


function scJQGeneralAdd() {
  $('input:text.sc-js-input').listen();
  $('input:password.sc-js-input').listen();
  $('input:checkbox.sc-js-input').listen();
  $('select.sc-js-input').listen();
  $('textarea.sc-js-input').listen();

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if (false == scSetFocusOnField($oField) && 0 < $("#id_ac_" + sField).length) {
    scSetFocusOnField($("#id_ac_" + sField));
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if (0 < $oField.length && 0 < $oField[0].offsetHeight && 0 < $oField[0].offsetWidth && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["nome" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cpf" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rg" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["dataexpedicao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["numerocel" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["numerotel" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sc_field_0" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cep" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["logradouro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["numero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["complemento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["bairro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estados_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cidades_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["aluno_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["login" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["senha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["nome" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cpf" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cpf" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rg" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rg" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dataexpedicao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dataexpedicao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numerocel" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numerocel" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numerotel" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numerotel" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sc_field_0" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sc_field_0" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["logradouro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["logradouro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["complemento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["complemento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estados_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estados_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cidades_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cidades_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["aluno_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["aluno_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["login" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["login" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["senha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["senha" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_nome' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_nome_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_tbl_responsavel_nome_onfocus(this, iSeqRow) });
  $('#id_sc_field_cpf' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_cpf_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_tbl_responsavel_cpf_onfocus(this, iSeqRow) });
  $('#id_sc_field_rg' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_rg_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_tbl_responsavel_rg_onfocus(this, iSeqRow) });
  $('#id_sc_field_dataexpedicao' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_dataexpedicao_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_tbl_responsavel_dataexpedicao_onfocus(this, iSeqRow) });
  $('#id_sc_field_login' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_login_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_tbl_responsavel_login_onfocus(this, iSeqRow) });
  $('#id_sc_field_senha' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_senha_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_tbl_responsavel_senha_onfocus(this, iSeqRow) });
  $('#id_sc_field_numerocel' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_numerocel_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_tbl_responsavel_numerocel_onfocus(this, iSeqRow) });
  $('#id_sc_field_numerotel' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_numerotel_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_tbl_responsavel_numerotel_onfocus(this, iSeqRow) });
  $('#id_sc_field_sc_field_0' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_sc_field_0_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tbl_responsavel_sc_field_0_onfocus(this, iSeqRow) });
  $('#id_sc_field_cep' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_cep_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_tbl_responsavel_cep_onfocus(this, iSeqRow) });
  $('#id_sc_field_logradouro' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_logradouro_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tbl_responsavel_logradouro_onfocus(this, iSeqRow) });
  $('#id_sc_field_numero' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_numero_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tbl_responsavel_numero_onfocus(this, iSeqRow) });
  $('#id_sc_field_complemento' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_complemento_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tbl_responsavel_complemento_onfocus(this, iSeqRow) });
  $('#id_sc_field_bairro' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_bairro_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tbl_responsavel_bairro_onfocus(this, iSeqRow) });
  $('#id_sc_field_estados_id' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_estados_id_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tbl_responsavel_estados_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_cidades_id' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_cidades_id_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tbl_responsavel_cidades_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_aluno_id' + iSeqRow).bind('blur', function() { sc_form_tbl_responsavel_aluno_id_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_tbl_responsavel_aluno_id_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_tbl_responsavel_nome_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_nome();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_nome_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_cpf_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_cpf();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_cpf_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_rg_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_rg();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_rg_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_dataexpedicao_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_dataexpedicao();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_dataexpedicao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_login_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_login();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_login_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_senha_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_senha();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_senha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_numerocel_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_numerocel();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_numerocel_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_numerotel_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_numerotel();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_numerotel_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_sc_field_0_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_sc_field_0();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_sc_field_0_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_cep_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_cep();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_cep_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_logradouro_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_logradouro();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_logradouro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_numero_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_numero();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_numero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_complemento_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_complemento();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_complemento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_bairro_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_bairro();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_bairro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_estados_id_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_estados_id();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_estados_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_cidades_id_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_cidades_id();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_cidades_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_responsavel_aluno_id_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_responsavel_validate_aluno_id();
  scCssBlur(oThis);
}

function sc_form_tbl_responsavel_aluno_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_dataexpedicao" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_dataexpedicao" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ['<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd']);        ?>'],
    dayNamesMin: ['<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd']); ?>'],
    monthNamesShort: ['<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece']); ?>'],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['dataexpedicao']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd


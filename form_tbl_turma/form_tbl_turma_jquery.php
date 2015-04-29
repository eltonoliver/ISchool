
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
  scEventControl_data["id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nome" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["abreviacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["tbl_curso_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nivel" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["periodoletivo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["turno" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["datainicio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["datafim" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["datafimmatricula" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["horaentrada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["horasaida" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qtdvagas" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["observacoes" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["diassemana" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["abreviacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["abreviacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tbl_curso_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tbl_curso_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nivel" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nivel" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["periodoletivo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["periodoletivo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["turno" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["turno" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["datainicio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["datainicio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["datafim" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["datafim" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["datafimmatricula" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["datafimmatricula" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["horaentrada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["horaentrada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["horasaida" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["horasaida" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qtdvagas" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qtdvagas" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["observacoes" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["observacoes" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["diassemana" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["diassemana" + iSeqRow]["change"]) {
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
  $('#id_sc_field_id' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_id_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_tbl_turma_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_tbl_curso_id' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_tbl_curso_id_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_tbl_turma_tbl_curso_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_nivel' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_nivel_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_tbl_turma_nivel_onfocus(this, iSeqRow) });
  $('#id_sc_field_periodoletivo' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_periodoletivo_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_tbl_turma_periodoletivo_onfocus(this, iSeqRow) });
  $('#id_sc_field_nome' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_nome_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_tbl_turma_nome_onfocus(this, iSeqRow) });
  $('#id_sc_field_abreviacao' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_abreviacao_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tbl_turma_abreviacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_turno' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_turno_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_tbl_turma_turno_onfocus(this, iSeqRow) });
  $('#id_sc_field_datainicio' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_datainicio_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tbl_turma_datainicio_onfocus(this, iSeqRow) });
  $('#id_sc_field_datafim' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_datafim_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tbl_turma_datafim_onfocus(this, iSeqRow) });
  $('#id_sc_field_datafimmatricula' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_datafimmatricula_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_tbl_turma_datafimmatricula_onfocus(this, iSeqRow) });
  $('#id_sc_field_horaentrada' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_horaentrada_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tbl_turma_horaentrada_onfocus(this, iSeqRow) });
  $('#id_sc_field_horasaida' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_horasaida_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_tbl_turma_horasaida_onfocus(this, iSeqRow) });
  $('#id_sc_field_qtdvagas' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_qtdvagas_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_tbl_turma_qtdvagas_onfocus(this, iSeqRow) });
  $('#id_sc_field_diassemana' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_diassemana_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tbl_turma_diassemana_onfocus(this, iSeqRow) });
  $('#id_sc_field_observacoes' + iSeqRow).bind('blur', function() { sc_form_tbl_turma_observacoes_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tbl_turma_observacoes_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_tbl_turma_id_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_id();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_tbl_curso_id_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_tbl_curso_id();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_tbl_curso_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_nivel_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_nivel();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_nivel_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_periodoletivo_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_periodoletivo();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_periodoletivo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_nome_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_nome();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_nome_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_abreviacao_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_abreviacao();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_abreviacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_turno_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_turno();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_turno_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_datainicio_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_datainicio();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_datainicio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_datafim_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_datafim();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_datafim_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_datafimmatricula_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_datafimmatricula();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_datafimmatricula_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_horaentrada_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_horaentrada();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_horaentrada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_horasaida_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_horasaida();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_horasaida_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_qtdvagas_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_qtdvagas();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_qtdvagas_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_diassemana_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_diassemana();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_diassemana_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_turma_observacoes_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_turma_validate_observacoes();
  scCssBlur(oThis);
}

function sc_form_tbl_turma_observacoes_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_datainicio" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_datainicio" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['datainicio']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_datafim" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_datafim" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['datafim']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_datafimmatricula" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_datafimmatricula" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['datafimmatricula']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

function scJQSpinAdd(iSeqRow) {
  var elHeight = parseInt($("#id_sc_field_qtdvagas" + iSeqRow).css("height")) || 0;
  var elWidth = parseInt($("#id_sc_field_qtdvagas" + iSeqRow).css("width")) || 0;
  var spinOpt;
  if (0 < elHeight && 0 < elWidth) {
    spinOpt = {stepInc:1,pageInc:5,min:0,max:99999999999,btnWidth:15,height:parseInt(elHeight),width:parseInt(elWidth)};
  }
  else if (0 < elHeight) {
    spinOpt = {stepInc:1,pageInc:5,min:0,max:99999999999,btnWidth:15,height:parseInt(elHeight)};
  }
  else if (0 < elWidth) {
    spinOpt = {stepInc:1,pageInc:5,min:0,max:99999999999,btnWidth:15,width:parseInt(elWidth)};
  }
  else {
    spinOpt = {stepInc:1,pageInc:5,min:0,max:99999999999,btnWidth:15};
  }
  $("#id_sc_field_qtdvagas" + iSeqRow).css("padding-right", "21px").addClass("smartspinner").spinit(spinOpt);
} // scJQSpinAdd

function scJQPopupAdd(iSeqRow) {
  $('.scFormPopupBubble' + iSeqRow).each(function() {
    var distance = 10;
    var time = 250;
    var hideDelay = 500;
    var hideDelayTimer = null;
    var beingShown = false;
    var shown = false;
    var trigger = $('.scFormPopupTrigger', this);
    var info = $('.scFormPopup', this).css('opacity', 0);
    $([trigger.get(0), info.get(0)]).mouseover(function() {
      if (hideDelayTimer) clearTimeout(hideDelayTimer);
      if (beingShown || shown) {
        // don't trigger the animation again
        return;
      } else {
        // reset position of info box
        beingShown = true;
        info.css({
          top: trigger.position().top - (info.height() - trigger.height()),
          left: trigger.position().left - ((info.width() - trigger.width()) / 2),
          display: 'block'
        }).animate({
          top: '-=' + distance + 'px',
          opacity: 1
        }, time, 'swing', function() {
          beingShown = false;
          shown = true;
        });
      }
      return false;
      }).mouseout(function() {
      if (hideDelayTimer) clearTimeout(hideDelayTimer);
      hideDelayTimer = setTimeout(function() {
        hideDelayTimer = null;
        info.animate({
          top: '-=' + distance + 'px',
          opacity: 0
        }, time, 'swing', function() {
          shown = false;
          info.css('display', 'none');
        });
      }, hideDelay);
      return false;
    });
  });
} // scJQPopupAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQSpinAdd(iLine);
  scJQPopupAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd


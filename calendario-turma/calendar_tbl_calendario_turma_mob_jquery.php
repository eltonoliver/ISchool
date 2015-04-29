
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
  scEventControl_data["title" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["description" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["start_date" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["horarioinicial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["end_date" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["horariofinal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["recurrent" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["period" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["__calend_all_day__" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["title" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["title" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["description" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["description" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["start_date" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["start_date" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["horarioinicial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["horarioinicial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["end_date" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["end_date" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["horariofinal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["horariofinal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["recurrent" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["recurrent" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["period" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["period" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["__calend_all_day__" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["__calend_all_day__" + iSeqRow]["change"]) {
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
  $('#id_sc_field_id' + iSeqRow).bind('blur', function() { sc_calendar_tbl_calendario_turma_id_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_calendar_tbl_calendario_turma_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_title' + iSeqRow).bind('blur', function() { sc_calendar_tbl_calendario_turma_title_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_calendar_tbl_calendario_turma_title_onfocus(this, iSeqRow) });
  $('#id_sc_field_description' + iSeqRow).bind('blur', function() { sc_calendar_tbl_calendario_turma_description_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_calendar_tbl_calendario_turma_description_onfocus(this, iSeqRow) });
  $('#id_sc_field_start_date' + iSeqRow).bind('blur', function() { sc_calendar_tbl_calendario_turma_start_date_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_calendar_tbl_calendario_turma_start_date_onfocus(this, iSeqRow) });
  $('#id_sc_field_end_date' + iSeqRow).bind('blur', function() { sc_calendar_tbl_calendario_turma_end_date_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_calendar_tbl_calendario_turma_end_date_onfocus(this, iSeqRow) });
  $('#id_sc_field_recurrent' + iSeqRow).bind('blur', function() { sc_calendar_tbl_calendario_turma_recurrent_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_calendar_tbl_calendario_turma_recurrent_onfocus(this, iSeqRow) });
  $('#id_sc_field_period' + iSeqRow).bind('blur', function() { sc_calendar_tbl_calendario_turma_period_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_calendar_tbl_calendario_turma_period_onfocus(this, iSeqRow) });
  $('#id_sc_field_horarioinicial' + iSeqRow).bind('blur', function() { sc_calendar_tbl_calendario_turma_horarioinicial_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_calendar_tbl_calendario_turma_horarioinicial_onfocus(this, iSeqRow) });
  $('#id_sc_field_horariofinal' + iSeqRow).bind('blur', function() { sc_calendar_tbl_calendario_turma_horariofinal_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_calendar_tbl_calendario_turma_horariofinal_onfocus(this, iSeqRow) });
  $('#id_sc_field___calend_all_day__' + iSeqRow).bind('blur', function() { sc_calendar_tbl_calendario_turma___calend_all_day___onblur(this, iSeqRow) })
                                                .bind('click', function() { sc_calendar_tbl_calendario_turma___calend_all_day___onclick(this, iSeqRow) })
                                                .bind('focus', function() { sc_calendar_tbl_calendario_turma___calend_all_day___onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_calendar_tbl_calendario_turma_id_onblur(oThis, iSeqRow) {
  do_ajax_calendar_tbl_calendario_turma_mob_validate_id();
  scCssBlur(oThis);
}

function sc_calendar_tbl_calendario_turma_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_calendar_tbl_calendario_turma_title_onblur(oThis, iSeqRow) {
  do_ajax_calendar_tbl_calendario_turma_mob_validate_title();
  scCssBlur(oThis);
}

function sc_calendar_tbl_calendario_turma_title_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_calendar_tbl_calendario_turma_description_onblur(oThis, iSeqRow) {
  do_ajax_calendar_tbl_calendario_turma_mob_validate_description();
  scCssBlur(oThis);
}

function sc_calendar_tbl_calendario_turma_description_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_calendar_tbl_calendario_turma_start_date_onblur(oThis, iSeqRow) {
  do_ajax_calendar_tbl_calendario_turma_mob_validate_start_date();
  scCssBlur(oThis);
}

function sc_calendar_tbl_calendario_turma_start_date_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_calendar_tbl_calendario_turma_end_date_onblur(oThis, iSeqRow) {
  do_ajax_calendar_tbl_calendario_turma_mob_validate_end_date();
  scCssBlur(oThis);
}

function sc_calendar_tbl_calendario_turma_end_date_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_calendar_tbl_calendario_turma_recurrent_onblur(oThis, iSeqRow) {
  do_ajax_calendar_tbl_calendario_turma_mob_validate_recurrent();
  scCssBlur(oThis);
}

function sc_calendar_tbl_calendario_turma_recurrent_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_calendar_tbl_calendario_turma_period_onblur(oThis, iSeqRow) {
  do_ajax_calendar_tbl_calendario_turma_mob_validate_period();
  scCssBlur(oThis);
}

function sc_calendar_tbl_calendario_turma_period_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_calendar_tbl_calendario_turma_horarioinicial_onblur(oThis, iSeqRow) {
  do_ajax_calendar_tbl_calendario_turma_mob_validate_horarioinicial();
  scCssBlur(oThis);
}

function sc_calendar_tbl_calendario_turma_horarioinicial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_calendar_tbl_calendario_turma_horariofinal_onblur(oThis, iSeqRow) {
  do_ajax_calendar_tbl_calendario_turma_mob_validate_horariofinal();
  scCssBlur(oThis);
}

function sc_calendar_tbl_calendario_turma_horariofinal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_calendar_tbl_calendario_turma___calend_all_day___onblur(oThis, iSeqRow) {
  do_ajax_calendar_tbl_calendario_turma_mob_validate___calend_all_day__();
  scCssBlur(oThis);
}

function sc_calendar_tbl_calendario_turma___calend_all_day___onclick(oThis, iSeqRow) {
  sc___calend_all_day___onclick();
}

function sc_calendar_tbl_calendario_turma___calend_all_day___onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_start_date" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_start_date" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['start_date']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_end_date" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_end_date" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['end_date']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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


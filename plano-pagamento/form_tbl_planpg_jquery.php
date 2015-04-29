
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
  scEventControl_data["eventofin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["parcelamento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["periodicidade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["formapg" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["dataparcela" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["bolsa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["valparcela" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["valdesconto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["eventofin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["eventofin" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["parcelamento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["parcelamento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["periodicidade" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["periodicidade" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["formapg" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["formapg" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dataparcela" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dataparcela" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bolsa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bolsa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valparcela" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valparcela" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valdesconto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valdesconto" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  if ("valparcela" + iSeq == fieldName) {
    _scCalculatorBlurOk[fieldId] = false;
  }
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

function scEventControl_onCalculator_valparcela() {
  if (!_scCalculatorControl["id_sc_field_valparcela"]) {
    _scCalculatorBlurOk["id_sc_field_valparcela"] = true;
    do_ajax_form_tbl_planpg_event_valparcela_onblur();
  }
} // scEventControl_onCalculator_valparcela

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_id' + iSeqRow).bind('blur', function() { sc_form_tbl_planpg_id_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_tbl_planpg_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_eventofin' + iSeqRow).bind('blur', function() { sc_form_tbl_planpg_eventofin_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_tbl_planpg_eventofin_onfocus(this, iSeqRow) });
  $('#id_sc_field_parcelamento' + iSeqRow).bind('blur', function() { sc_form_tbl_planpg_parcelamento_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_tbl_planpg_parcelamento_onfocus(this, iSeqRow) });
  $('#id_sc_field_periodicidade' + iSeqRow).bind('blur', function() { sc_form_tbl_planpg_periodicidade_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_tbl_planpg_periodicidade_onfocus(this, iSeqRow) });
  $('#id_sc_field_formapg' + iSeqRow).bind('blur', function() { sc_form_tbl_planpg_formapg_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tbl_planpg_formapg_onfocus(this, iSeqRow) });
  $('#id_sc_field_dataparcela' + iSeqRow).bind('blur', function() { sc_form_tbl_planpg_dataparcela_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tbl_planpg_dataparcela_onfocus(this, iSeqRow) });
  $('#id_sc_field_bolsa' + iSeqRow).bind('blur', function() { sc_form_tbl_planpg_bolsa_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_tbl_planpg_bolsa_onfocus(this, iSeqRow) });
  $('#id_sc_field_valparcela' + iSeqRow).bind('blur', function() { sc_form_tbl_planpg_valparcela_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tbl_planpg_valparcela_onfocus(this, iSeqRow) });
  $('#id_sc_field_valdesconto' + iSeqRow).bind('blur', function() { sc_form_tbl_planpg_valdesconto_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tbl_planpg_valdesconto_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_tbl_planpg_id_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_planpg_validate_id();
  scCssBlur(oThis);
}

function sc_form_tbl_planpg_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_planpg_eventofin_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_planpg_validate_eventofin();
  scCssBlur(oThis);
}

function sc_form_tbl_planpg_eventofin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_planpg_parcelamento_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_planpg_validate_parcelamento();
  scCssBlur(oThis);
}

function sc_form_tbl_planpg_parcelamento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_planpg_periodicidade_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_planpg_validate_periodicidade();
  scCssBlur(oThis);
}

function sc_form_tbl_planpg_periodicidade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_planpg_formapg_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_planpg_validate_formapg();
  scCssBlur(oThis);
}

function sc_form_tbl_planpg_formapg_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_planpg_dataparcela_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_planpg_validate_dataparcela();
  scCssBlur(oThis);
}

function sc_form_tbl_planpg_dataparcela_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_planpg_bolsa_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_planpg_validate_bolsa();
  scCssBlur(oThis);
}

function sc_form_tbl_planpg_bolsa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_planpg_valparcela_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_planpg_validate_valparcela();
  scCssBlur(oThis);
}

function sc_form_tbl_planpg_valparcela_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_planpg_valdesconto_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_planpg_validate_valdesconto();
  scCssBlur(oThis);
}

function sc_form_tbl_planpg_valdesconto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_dataparcela" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_dataparcela" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['dataparcela']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

var jqCalcMonetPos = {};
var _scCalculatorBlurOk = {};

function scJQCalculatorAdd(iSeqRow) {
  _scCalculatorBlurOk["id_sc_field_tbl_aluno_id" + iSeqRow] = true;
  $("#id_sc_field_valparcela" + iSeqRow).calculator({
    onOpen: function(value, inst) {
      if (typeof _scCalculatorControl !== "undefined") {
        if (!_scCalculatorControl["id_sc_field_valparcela" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_valparcela" + iSeqRow] = true;
        }
      }
      value = scJQCalculatorUnformat(value, "#id_sc_field_valparcela" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['valparcela']['symbol_grp']); ?>', <?php echo $this->field_config['valparcela']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['valparcela']['symbol_dec']); ?>', '<?php echo str_replace("'", "\'", $this->field_config['valparcela']['symbol_mon']); ?>');
      $(this).val(value);
    },
    onClose: function(value, inst) {
      var oldValue = $(this.val);
      if (typeof _scCalculatorControl !== "undefined") {
        if (_scCalculatorControl["id_sc_field_valparcela" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_valparcela" + iSeqRow] = null;
        }
      }
      value = scJQCalculatorFormat(value, "#id_sc_field_valparcela" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['valparcela']['symbol_grp']); ?>', <?php echo $this->field_config['valparcela']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['valparcela']['symbol_dec']); ?>', 2, '<?php echo str_replace("'", "\'", $this->field_config['valparcela']['symbol_mon']); ?>');
      $(this).val(value);
      if (oldValue != value) {
        $(this).trigger('change');
      }
    },
    precision: 2,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calculator'); ?>",
    buttonImageOnly: true
  });

} // scJQCalculatorAdd

function scJQCalculatorUnformat(fValue, sField, sThousands, sFormat, sDecimals, sMonetary) {
  fValue = scJQCalculatorCurrency(fValue, sField, sMonetary);
  if ("" != sThousands) {
    if ("." == sThousands) {
      sThousands = "\\.";
    }
    sRegEx = eval("/" + sThousands + "/g");
    fValue = fValue.replace(sRegEx, "");
  }
  if ("." != sDecimals) {
    sRegEx = eval("/" + sDecimals + "/g");
    fValue = fValue.replace(sRegEx, ".");
  }
  if ("." == fValue.substr(0, 1) || "," == fValue.substr(0, 1)) {
    fValue = "0" + fValue;
  }
  return fValue;
} // scJQCalculatorUnformat

function scJQCalculatorFormat(fValue, sField, sThousands, sFormat, sDecimals, iPrecision, sMonetary) {
  fValue = scJQCalculatorCurrency(fValue.toString(), sField, sMonetary);
  if (-1 < fValue.indexOf('.')) {
    var parts = fValue.split('.'),
        pref = parts[0],
        suf = parts[1];
  }
  else {
    var pref = fValue,
        suf = '';
  }
  if ('' != sThousands) {
    if (3 == sFormat) {
      if (4 <= pref.length) {
        pref_rest = pref.substr(0, pref.length - 3);
        pref = sThousands + pref.substr(pref.length - 3);
        while (2 < pref_rest.length) {
          pref = sThousands + pref_rest.substr(pref_rest.length - 2) + pref;
          pref_rest = pref_rest.substr(0, pref_rest.length - 2);
        }
        if ('' != pref_rest) {
          pref = pref_rest + pref;
        }
      }
    }
    else if (2 == sFormat) {
      if (4 <= pref.length) {
        pref = pref.substr(0, pref.length - 3) + sThousands + pref.substr(pref.length - 3);
      }
    }
    else {
      pref_rest = pref;
      pref = '';
      while (3 < pref_rest.length) {
        pref = sThousands + pref_rest.substr(pref_rest.length - 3) + pref;
        pref_rest = pref_rest.substr(0, pref_rest.length - 3);
      }
      if ('' != pref_rest) {
        pref = pref_rest + pref;
      }
    }
  }
  if ('' != iPrecision) {
    if (suf.length > iPrecision) {
      suf = '1' + suf.substr(0, iPrecision) + '.' + suf.substr(iPrecision);
      suf = Math.round(parseFloat(suf)).toString().substr(1);
    }
    else {
      while (suf.length < iPrecision) {
        suf += '0';
      }
    }
  }
  if ('' != sDecimals && '' != suf) {
    fValue = pref + sDecimals + suf;
  }
  else {
    fValue = pref;
  }
  if ('' != sMonetary) {
    fValue = 'left' == jqCalcMonetPos[sField] ? sMonetary + ' ' + fValue : fValue + ' ' + sMonetary;
  }
  return fValue;
} // scJQCalculatorFormat

function scJQCalculatorCurrency(fValue, sField, sMonetary) {
  if ("" != sMonetary) {
    if (sMonetary + ' ' == fValue.substr(0, sMonetary.length + 1)) {
        fValue = fValue.substr(sMonetary.length + 1);
        jqCalcMonetPos[sField] = 'left';
    }
    else if (sMonetary == fValue.substr(0, sMonetary.length)) {
        fValue = fValue.substr(sMonetary.length + 1);
        jqCalcMonetPos[sField] = 'left';
    }
    else if (' ' + sMonetary == fValue.substr(fValue.length - sMonetary.length - 1)) {
        fValue = fValue.substr(0, fValue.length - sMonetary.length - 1);
        jqCalcMonetPos[sField] = 'right';
    }
    else if (sMonetary == fValue.substr(fValue.length - sMonetary.length)) {
        fValue = fValue.substr(0, fValue.length - sMonetary.length);
        jqCalcMonetPos[sField] = 'right';
    }
  }
  if ("" == fValue) {
    fValue = "0";
  }
  return fValue;
} // scJQCalculatorCurrency

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
  scJQCalculatorAdd(iLine);
  scJQPopupAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd


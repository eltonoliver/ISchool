
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
  scEventControl_data["id_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nome_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cargahoraria_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["periodoletivo_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["periodo_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nome_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nome_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cargahoraria_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cargahoraria_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["periodoletivo_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["periodoletivo_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["periodo_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["periodo_" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_active_all() {
  for (var i = 1; i < iAjaxNewLine; i++) {
    if (scEventControl_active(i)) {
      return true;
    }
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
  $('#id_sc_field_id_' + iSeqRow).bind('blur', function() { sc_form_tbl_disciplina_id__onblur(this, iSeqRow) })
                                 .bind('change', function() { sc_form_tbl_disciplina_id__onchange(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_tbl_disciplina_id__onfocus(this, iSeqRow) });
  $('#id_sc_field_nome_' + iSeqRow).bind('blur', function() { sc_form_tbl_disciplina_nome__onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_tbl_disciplina_nome__onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_tbl_disciplina_nome__onfocus(this, iSeqRow) });
  $('#id_sc_field_cargahoraria_' + iSeqRow).bind('blur', function() { sc_form_tbl_disciplina_cargahoraria__onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_tbl_disciplina_cargahoraria__onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_tbl_disciplina_cargahoraria__onfocus(this, iSeqRow) });
  $('#id_sc_field_periodoletivo_' + iSeqRow).bind('blur', function() { sc_form_tbl_disciplina_periodoletivo__onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_tbl_disciplina_periodoletivo__onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_tbl_disciplina_periodoletivo__onfocus(this, iSeqRow) });
  $('#id_sc_field_periodo_' + iSeqRow).bind('blur', function() { sc_form_tbl_disciplina_periodo__onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_tbl_disciplina_periodo__onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_tbl_disciplina_periodo__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_tbl_disciplina_id__onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_disciplina_validate_id_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tbl_disciplina_id__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tbl_disciplina_id__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_tbl_disciplina_nome__onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_disciplina_validate_nome_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tbl_disciplina_nome__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tbl_disciplina_nome__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_tbl_disciplina_cargahoraria__onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_disciplina_validate_cargahoraria_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tbl_disciplina_cargahoraria__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tbl_disciplina_cargahoraria__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_tbl_disciplina_periodoletivo__onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_disciplina_validate_periodoletivo_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tbl_disciplina_periodoletivo__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tbl_disciplina_periodoletivo__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_tbl_disciplina_periodo__onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_disciplina_validate_periodo_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tbl_disciplina_periodo__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tbl_disciplina_periodo__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd


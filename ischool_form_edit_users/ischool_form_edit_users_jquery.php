
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
  scEventControl_data["login" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pswd" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["confirm_pswd" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["name" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["active" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["groups" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["login" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["login" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pswd" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pswd" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["confirm_pswd" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["confirm_pswd" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["name" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["name" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["active" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["active" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["groups" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["groups" + iSeqRow]["change"]) {
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
  $('#id_sc_field_login' + iSeqRow).bind('blur', function() { sc_ischool_form_edit_users_login_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_ischool_form_edit_users_login_onfocus(this, iSeqRow) });
  $('#id_sc_field_pswd' + iSeqRow).bind('blur', function() { sc_ischool_form_edit_users_pswd_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_ischool_form_edit_users_pswd_onfocus(this, iSeqRow) });
  $('#id_sc_field_name' + iSeqRow).bind('blur', function() { sc_ischool_form_edit_users_name_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_ischool_form_edit_users_name_onfocus(this, iSeqRow) });
  $('#id_sc_field_email' + iSeqRow).bind('blur', function() { sc_ischool_form_edit_users_email_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_ischool_form_edit_users_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_active' + iSeqRow).bind('blur', function() { sc_ischool_form_edit_users_active_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_ischool_form_edit_users_active_onfocus(this, iSeqRow) });
  $('#id_sc_field_groups' + iSeqRow).bind('blur', function() { sc_ischool_form_edit_users_groups_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_ischool_form_edit_users_groups_onfocus(this, iSeqRow) });
  $('#id_sc_field_confirm_pswd' + iSeqRow).bind('blur', function() { sc_ischool_form_edit_users_confirm_pswd_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_ischool_form_edit_users_confirm_pswd_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_ischool_form_edit_users_login_onblur(oThis, iSeqRow) {
  do_ajax_ischool_form_edit_users_validate_login();
  scCssBlur(oThis);
}

function sc_ischool_form_edit_users_login_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_ischool_form_edit_users_pswd_onblur(oThis, iSeqRow) {
  do_ajax_ischool_form_edit_users_validate_pswd();
  scCssBlur(oThis);
}

function sc_ischool_form_edit_users_pswd_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_ischool_form_edit_users_name_onblur(oThis, iSeqRow) {
  do_ajax_ischool_form_edit_users_validate_name();
  scCssBlur(oThis);
}

function sc_ischool_form_edit_users_name_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_ischool_form_edit_users_email_onblur(oThis, iSeqRow) {
  do_ajax_ischool_form_edit_users_validate_email();
  scCssBlur(oThis);
}

function sc_ischool_form_edit_users_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_ischool_form_edit_users_active_onblur(oThis, iSeqRow) {
  do_ajax_ischool_form_edit_users_validate_active();
  scCssBlur(oThis);
}

function sc_ischool_form_edit_users_active_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_ischool_form_edit_users_groups_onblur(oThis, iSeqRow) {
  do_ajax_ischool_form_edit_users_validate_groups();
  scCssBlur(oThis);
}

function sc_ischool_form_edit_users_groups_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_ischool_form_edit_users_confirm_pswd_onblur(oThis, iSeqRow) {
  do_ajax_ischool_form_edit_users_validate_confirm_pswd();
  scCssBlur(oThis);
}

function sc_ischool_form_edit_users_confirm_pswd_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd


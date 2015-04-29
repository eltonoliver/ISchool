
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
  scEventControl_data["matricula" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nome" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["foto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sexo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estadocivil" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["datanascimento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cpf" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rg" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["orgaoexpedidor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["dataexpedicao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estados_id_nasc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cidades_id_nasc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pne" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["formaingresso" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["dataformatura" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["login" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["senha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nomemae" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nomepai" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["numerocel" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["numerotel" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["numeroprof" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["emailpessoal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["emailprofissional" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cep" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["logradouro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["numero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["complemento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["bairro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estados_id_res" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cidades_id_res" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["observacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["anexos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["matricula" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["matricula" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estadocivil" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estadocivil" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["datanascimento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["datanascimento" + iSeqRow]["change"]) {
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
  if (scEventControl_data["orgaoexpedidor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["orgaoexpedidor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dataexpedicao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dataexpedicao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estados_id_nasc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estados_id_nasc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cidades_id_nasc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cidades_id_nasc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pne" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pne" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["formaingresso" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["formaingresso" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dataformatura" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dataformatura" + iSeqRow]["change"]) {
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
  if (scEventControl_data["nomemae" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nomemae" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nomepai" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nomepai" + iSeqRow]["change"]) {
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
  if (scEventControl_data["numeroprof" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numeroprof" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emailpessoal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emailpessoal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emailprofissional" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emailprofissional" + iSeqRow]["change"]) {
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
  if (scEventControl_data["estados_id_res" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estados_id_res" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cidades_id_res" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cidades_id_res" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["observacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["observacao" + iSeqRow]["change"]) {
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
  $('#id_sc_field_matricula' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_matricula_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_tbl_aluno_matricula_onfocus(this, iSeqRow) });
  $('#id_sc_field_nome' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_nome_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_tbl_aluno_nome_onfocus(this, iSeqRow) });
  $('#id_sc_field_foto' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_foto_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_tbl_aluno_foto_onfocus(this, iSeqRow) });
  $('#id_sc_field_sexo' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_sexo_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_tbl_aluno_sexo_onfocus(this, iSeqRow) });
  $('#id_sc_field_estadocivil' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_estadocivil_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tbl_aluno_estadocivil_onfocus(this, iSeqRow) });
  $('#id_sc_field_datanascimento' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_datanascimento_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_tbl_aluno_datanascimento_onfocus(this, iSeqRow) });
  $('#id_sc_field_cpf' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_cpf_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_tbl_aluno_cpf_onfocus(this, iSeqRow) });
  $('#id_sc_field_rg' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_rg_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_tbl_aluno_rg_onfocus(this, iSeqRow) });
  $('#id_sc_field_orgaoexpedidor' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_orgaoexpedidor_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_tbl_aluno_orgaoexpedidor_onfocus(this, iSeqRow) });
  $('#id_sc_field_dataexpedicao' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_dataexpedicao_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_tbl_aluno_dataexpedicao_onfocus(this, iSeqRow) });
  $('#id_sc_field_pne' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_pne_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_tbl_aluno_pne_onfocus(this, iSeqRow) });
  $('#id_sc_field_formaingresso' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_formaingresso_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_tbl_aluno_formaingresso_onfocus(this, iSeqRow) });
  $('#id_sc_field_dataformatura' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_dataformatura_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_tbl_aluno_dataformatura_onfocus(this, iSeqRow) });
  $('#id_sc_field_login' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_login_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_tbl_aluno_login_onfocus(this, iSeqRow) });
  $('#id_sc_field_senha' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_senha_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_tbl_aluno_senha_onfocus(this, iSeqRow) });
  $('#id_sc_field_nomemae' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_nomemae_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tbl_aluno_nomemae_onfocus(this, iSeqRow) });
  $('#id_sc_field_nomepai' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_nomepai_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tbl_aluno_nomepai_onfocus(this, iSeqRow) });
  $('#id_sc_field_numerocel' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_numerocel_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_tbl_aluno_numerocel_onfocus(this, iSeqRow) });
  $('#id_sc_field_numerotel' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_numerotel_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_tbl_aluno_numerotel_onfocus(this, iSeqRow) });
  $('#id_sc_field_numeroprof' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_numeroprof_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tbl_aluno_numeroprof_onfocus(this, iSeqRow) });
  $('#id_sc_field_emailpessoal' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_emailpessoal_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_tbl_aluno_emailpessoal_onfocus(this, iSeqRow) });
  $('#id_sc_field_emailprofissional' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_emailprofissional_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_tbl_aluno_emailprofissional_onfocus(this, iSeqRow) });
  $('#id_sc_field_cep' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_cep_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_tbl_aluno_cep_onfocus(this, iSeqRow) });
  $('#id_sc_field_logradouro' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_logradouro_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tbl_aluno_logradouro_onfocus(this, iSeqRow) });
  $('#id_sc_field_numero' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_numero_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tbl_aluno_numero_onfocus(this, iSeqRow) });
  $('#id_sc_field_complemento' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_complemento_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tbl_aluno_complemento_onfocus(this, iSeqRow) });
  $('#id_sc_field_bairro' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_bairro_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tbl_aluno_bairro_onfocus(this, iSeqRow) });
  $('#id_sc_field_observacao' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_observacao_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tbl_aluno_observacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_anexos' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_anexos_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tbl_aluno_anexos_onfocus(this, iSeqRow) });
  $('#id_sc_field_estados_id_nasc' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_estados_id_nasc_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_tbl_aluno_estados_id_nasc_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_tbl_aluno_estados_id_nasc_onfocus(this, iSeqRow) });
  $('#id_sc_field_cidades_id_nasc' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_cidades_id_nasc_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_tbl_aluno_cidades_id_nasc_onfocus(this, iSeqRow) });
  $('#id_sc_field_estados_id_res' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_estados_id_res_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_tbl_aluno_estados_id_res_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_tbl_aluno_estados_id_res_onfocus(this, iSeqRow) });
  $('#id_sc_field_cidades_id_res' + iSeqRow).bind('blur', function() { sc_form_tbl_aluno_cidades_id_res_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_tbl_aluno_cidades_id_res_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_tbl_aluno_matricula_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_matricula();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_matricula_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_nome_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_nome();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_nome_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_foto_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_foto_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_sexo_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_sexo();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_sexo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_estadocivil_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_estadocivil();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_estadocivil_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_datanascimento_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_datanascimento();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_datanascimento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_cpf_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_cpf();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_cpf_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_rg_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_rg();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_rg_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_orgaoexpedidor_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_orgaoexpedidor();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_orgaoexpedidor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_dataexpedicao_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_dataexpedicao();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_dataexpedicao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_pne_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_pne();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_pne_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_formaingresso_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_formaingresso();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_formaingresso_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_dataformatura_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_dataformatura();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_dataformatura_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_login_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_login();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_login_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_senha_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_senha();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_senha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_nomemae_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_nomemae();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_nomemae_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_nomepai_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_nomepai();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_nomepai_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_numerocel_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_numerocel();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_numerocel_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_numerotel_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_numerotel();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_numerotel_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_numeroprof_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_numeroprof();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_numeroprof_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_emailpessoal_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_emailpessoal();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_emailpessoal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_emailprofissional_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_emailprofissional();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_emailprofissional_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_cep_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_cep();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_cep_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_logradouro_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_logradouro();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_logradouro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_numero_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_numero();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_numero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_complemento_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_complemento();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_complemento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_bairro_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_bairro();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_bairro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_observacao_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_observacao();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_observacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_anexos_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_anexos_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_estados_id_nasc_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_estados_id_nasc();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_estados_id_nasc_onchange(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_refresh_estados_id_nasc();
}

function sc_form_tbl_aluno_estados_id_nasc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_cidades_id_nasc_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_cidades_id_nasc();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_cidades_id_nasc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_estados_id_res_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_estados_id_res();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_estados_id_res_onchange(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_refresh_estados_id_res();
}

function sc_form_tbl_aluno_estados_id_res_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tbl_aluno_cidades_id_res_onblur(oThis, iSeqRow) {
  do_ajax_form_tbl_aluno_validate_cidades_id_res();
  scCssBlur(oThis);
}

function sc_form_tbl_aluno_cidades_id_res_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_datanascimento" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_datanascimento" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['datanascimento']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

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

  $("#id_sc_field_dataformatura" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_dataformatura" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['dataformatura']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

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
  $("#id_sc_field_foto" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_tbl_aluno_ul_save.php",
    dropZone: $("#hidden_field_data_foto" + iSeqRow),
    formData: function() {
      return [
        {name: 'app_dir', value: '<?php echo $this->Ini->path_aplicacao; ?>'},
        {name: 'app_name', value: 'form_tbl_aluno'},
        {name: 'upload_dir', value: '<?php echo $this->Ini->root . $this->Ini->path_imag_temp; ?>/'},
        {name: 'upload_url', value: '<?php echo $this->Ini->path_imag_temp; ?>/'},
        {name: 'upload_url', value: '<?php echo $this->Ini->path_imag_temp; ?>/'},
        {name: 'upload_type', value: 'single'},
        {name: 'param_name', value: 'foto' + iSeqRow},
        {name: 'upload_file_height', value: '168'},
        {name: 'upload_file_width', value: '168'},
        {name: 'upload_file_aspect', value: 'S'},
        {name: 'upload_file_type', value: 'I'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_foto" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_foto" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, thumbDisplay, checkDisplay, var_ajax_img_thumb;
      if (data.result[0].body) {
        fileData = $.parseJSON(data.result[0].body.innerText);
      }
      else {
        fileData = eval(data.result);
      }
      $("#id_sc_field_foto" + iSeqRow).val("");
      $("#id_sc_field_foto_ul_name" + iSeqRow).val(fileData[0].sc_random_prot);
      $("#id_sc_field_foto_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_foto = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_random_prot;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_foto) ? "none" : "";
      $("#id_ajax_img_foto" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_foto" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_foto) {
        document.F1.temp_out_foto.value = var_ajax_img_thumb;
        document.F1.temp_out1_foto.value = var_ajax_img_foto;
      }
      else if (document.F1.temp_out_foto) {
        document.F1.temp_out_foto.value = var_ajax_img_foto;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_foto" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_foto" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
      $("#txt_ajax_img_foto" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_foto" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_foto" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_foto" + iSeqRow).hide();
      }
    }
  });

  $("#id_sc_field_anexos" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_tbl_aluno_ul_save.php",
    dropZone: $("#hidden_field_data_anexos" + iSeqRow),
    formData: function() {
      return [
        {name: 'app_dir', value: '<?php echo $this->Ini->path_aplicacao; ?>'},
        {name: 'app_name', value: 'form_tbl_aluno'},
        {name: 'upload_dir', value: '<?php echo $this->Ini->root . $this->Ini->path_imag_temp; ?>/'},
        {name: 'upload_url', value: '<?php echo $this->Ini->path_imag_temp; ?>/'},
        {name: 'upload_url', value: '<?php echo $this->Ini->path_imag_temp; ?>/'},
        {name: 'upload_type', value: 'single'},
        {name: 'param_name', value: 'anexos' + iSeqRow},
        {name: 'upload_file_height', value: ''},
        {name: 'upload_file_width', value: ''},
        {name: 'upload_file_aspect', value: ''},
        {name: 'upload_file_type', value: 'N1'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_anexos" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_anexos" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, thumbDisplay, checkDisplay, var_ajax_img_thumb;
      if (data.result[0].body) {
        fileData = $.parseJSON(data.result[0].body.innerText);
      }
      else {
        fileData = eval(data.result);
      }
      $("#id_sc_field_anexos" + iSeqRow).val("");
      $("#id_sc_field_anexos_ul_name" + iSeqRow).val(fileData[0].sc_random_prot);
      $("#id_sc_field_anexos_ul_type" + iSeqRow).val(fileData[0].type);
      $("#id_ajax_doc_anexos" + iSeqRow).html(fileData[0].name);
      $("#id_ajax_doc_anexos" + iSeqRow).css("display", "");
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_anexos" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_anexos" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_anexos" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_anexos" + iSeqRow).hide();
      }
    }
  });

} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQPopupAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd


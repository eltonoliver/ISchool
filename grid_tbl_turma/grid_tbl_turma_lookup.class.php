<?php
class grid_tbl_turma_lookup
{
//  
   function lookup_tbl_curso_id(&$conteudo , $tbl_curso_id) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $tbl_curso_id; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      if (trim($tbl_curso_id) === "" || trim($tbl_curso_id) == "&nbsp;")
      { 
          $conteudo = "&nbsp;";
          $save_conteudo  = ""; 
          $save_conteudo1 = ""; 
          return ; 
      } 
      $nm_comando = "select nome from tbl_curso where id = $tbl_curso_id order by nome" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = trim($rx->fields[0]); 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
//  
   function lookup_turno(&$turno) 
   {
      $conteudo = "" ; 
      if ($turno == "1")
      { 
          $conteudo = "Manhã";
      } 
      if ($turno == "2")
      { 
          $conteudo = "Tarde";
      } 
      if ($turno == "3")
      { 
          $conteudo = "Noite";
      } 
      if ($turno == "4")
      { 
          $conteudo = "Integral";
      } 
      if (!empty($conteudo)) 
      { 
          $turno = $conteudo; 
      } 
   }  
}
?>

<?php
class grid_tbl_aluno_1_lookup
{
//  
   function lookup_sexo(&$sexo) 
   {
      $conteudo = "" ; 
      if ($sexo == "1")
      { 
          $conteudo = "Masculino";
      } 
      if ($sexo == "2")
      { 
          $conteudo = "Feminino";
      } 
      if (!empty($conteudo)) 
      { 
          $sexo = $conteudo; 
      } 
   }  
//  
   function lookup_estadocivil(&$estadocivil) 
   {
      $conteudo = "" ; 
      if ($estadocivil == "1")
      { 
          $conteudo = "Solteiro(a)";
      } 
      if ($estadocivil == "2")
      { 
          $conteudo = "Casado(a)";
      } 
      if (!empty($conteudo)) 
      { 
          $estadocivil = $conteudo; 
      } 
   }  
}
?>

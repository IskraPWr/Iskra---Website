<?php
require_once "../content/creator.php"; 

//do ustawienia: title description, keywords, homepage
//default: 
//title-> SKTT Iskra PWr; 
//description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
//keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
//homapage-> false;

$data['title']='Statut';

$page = new Creator($data);
 echo $page->getBeginning();

?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    
    <div class="content"> 
      
      <h1>Statut</h1>
      
      <a title="Statut Studenckiego Klubu Tańca Towarzyskiego Iskra PWr" href="../files/Statut.pdf" target="_blank">Statut Studenckiego Klubu Tańca Towarzyskiego Iskra PWr</a>
    
    
    </div>
      
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>


  
  <?=$page->getEnd();?>
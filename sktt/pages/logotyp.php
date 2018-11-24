<?php
require_once "../content/creator.php"; 

//do ustawienia: title description, keywords, homepage
//default: 
//title-> SKTT Iskra PWr; 
//description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
//keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
//homapage-> false;

$data['title']='Logotyp';

$page = new Creator($data);
 echo $page->getBeginning();

?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    
    <div class="content"> 
      
      <h1>Logotyp</h1>
      <p class="imgl">Wersja z ciemnym tłem:</p>
      <p class="imgr">Wersja z jasnym tłem:</p>
      <a href="../images/iskra_black.jpg"><img class="imgl borderedbox inspace-5" src="../images/iskra_black.jpg" alt=""></a>
      <a href="../images/iskra_white.jpg"><img id="logob" class="imgr borderedbox inspace-5" src="../images/iskra_white.jpg" alt=""></a>
      
     
    </div>
      
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?=$page->getEnd();?>
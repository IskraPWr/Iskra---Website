<?php
require_once "../content/creator.php"; 

//do ustawienia: title description, keywords, homepage
//default: 
//title-> SKTT Iskra PWr; 
//description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
//keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
//homapage-> false;

$data['title']='Kontakt';

$page = new Creator($data);
 echo $page->getBeginning();

?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    
    <div class="content"> 
      
      <h1>Kontakt</h1>
      <img class="imgl borderedbox inspace-5" src="../images/iskra_black.jpg" alt="">
      <p>e-mail: sktt@pwr.edu.pl</p>
      <p>Kontakt bezpośredni (telefon) do członków zarządu znajduje się <a href="zarzad">tutaj</a></p>
    <br><br><br><br><br>
      <h6>Kontakt poprzez Dział Studencki Politechniki Wrocławskiej</h6>
      <p>ul. Wybrzeże Wyspiańskiego 27, 50-370 Wrocław bud. <br>A-1 (Gmach Główny), pok. 145-147  <br><a href="http://prs.pwr.edu.pl/?page_id=510">http://prs.pwr.edu.pl/?page_id=510</a></p>
      
    </div> 
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?=$page->getEnd();?>
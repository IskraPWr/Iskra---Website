<?php
require_once "../content/creator.php"; 

//do ustawienia: title description, keywords, homepage
//default: 
//title-> SKTT Iskra PWr; 
//description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
//keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
//homapage-> false;

$data['title']='Do pobrania';

$page = new Creator($data);
 echo $page->getBeginning();

?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    
    <div id="dow" class="content"> 
      
      <h1>Do pobrania</h1>
      <a title="Prośba o wykreślenie / zawieszenie członkostwa w SKTT ISKRA PWr" href="../files/sktt_czlonkostwo.pdf" target="_blank">Prośba o wykreślenie / zawieszenie członkostwa w SKTT ISKRA PWr</a>
      <a title="Informacja o opóźnieniu płatności" href="../files/sktt_opoznienie_oplaty.pdf" target="_blank">Informacja o opóźnieniu płatności</a>
      <a title="Informacja o ukończeniu studiów" href="../files/sktt_ukonczenie_studiow.pdf" target="_blank">Informacja o ukończeniu studiów</a>
      <a title="Informacja o wykresłeniu z listy studentów" href="../files/sktt_wykreslenie_z_listy_studentow.pdf" target="_blank">Informacja o wykresłeniu z listy studentów</a>
      <a title="Informacja o zmianie uczelni" href="../files/sktt_zmiana_uczelni.pdf" target="_blank">Informacja o zmianie uczelni</a>
    </div>
      
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?=$page->getEnd();?>
<?php
require_once "../content/creator.php"; 

//do ustawienia: title description, keywords, homepage
//default: 
//title-> SKTT Iskra PWr; 
//description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
//keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
//homapage-> false;

$data['title']='Galeria';

$page = new Creator($data);
echo $page->getBeginning();
$page->addScript("../layout/scripts/ajaxgallery.js")


?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    
    <div class="content"> 
      
      <div id="gallery">
        <figure>
          <header class="heading">Galeria</header>
          <ul id="ajax-gallery" class="nospace clear">
          </ul>
          <figcaption id="ajax-name"> </figcaption>
        </figure>
      </div>
      
      <nav class="pagination">
        <ul id="ajax-pages">
        </ul>
      </nav>
      
    </div>
    
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?=$page->getEnd();?>
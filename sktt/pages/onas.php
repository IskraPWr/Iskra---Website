<?php
require_once "../content/creator.php"; 

//do ustawienia: title description, keywords, homepage
//default: 
//title-> SKTT Iskra PWr; 
//description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
//keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
//homapage-> false;

$data['title']='O Nas';

$page = new Creator($data);
 echo $page->getBeginning();

?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    
    <div class="content"> 
      
      <h1>O Nas</h1>
      <img class="imgr borderedbox inspace-5" src="../images/iskra_black.jpg" alt="">
      <p>SKTT ISKRA został założony 20 lutego 2006 roku.</p>
      <p>Taniec Towarzyski to nie tylko nowe kroki i figury, to także sposób na zdrowy tryb życia, piękną sylwetkę i świetną zabawę.</p>
      <p>Poprzez treningi prowadzone przez dyplomowanego nauczyciela tańca Licentiate ISTD* Barbarę Pisarską-Gubernat nauczysz się nie tylko świetnie tańczyć, ale także nabierzesz umiejętności jak lepiej prezentować swoją osobę podczas publicznych wystąpień.</p>
      <p>Naszą życiową pasją jest Taniec Towarzyski. Rozwijamy nasze umiejętności poprzez treningi na 3 poziomach zaawansowania – podstawowym , średnim i zaawansowanym. Każdy znajdzie coś dla siebie, zarówno osoby które chcą zacząć tańczyć jak i osoby posiadające klasy sportowe. Poza regularnymi treningami organizujemy również warsztaty taneczne
          w okresie wakacji i ferii zimowych.</p>
      <a href="../images/iskra14.jpg" data-lightbox="roadtrip" data-title="Barbara Pisarska-Gubernat" ><img class="imgl borderedbox inspace-5" src="../images/Barbara Pisarska.jpg" alt=""></a>
      <P>SKTT ISKRA w imieniu Politechniki Wrocławskiej korzysta z praw członka wspierającego Polskie Towarzystwo Taneczne. Pary w naszym klubie mają możliwość osiągnięcia bardzo wysokich wyników sportowych i występowania na ogólnopolskich turniejach. Jak dotąd najlepsza para osiągnęła klasę sportową B (wyżej jest tylko klasa “A” i międzynarodowa “S”).</P>
      <P>Na zajęciach uczymy się tańców towarzyskich zarówno standardowych – walc angielski, walc wiedeński, tango, quickstep, foxtrot, jak i latynoamerykańskich – samba, cha cha, rumba, jive, paso doble. Oprócz 10 tańców, tańczymy także popularne formy tańca taki jak salsa czy bachata.</P>
      <p>Klub bierze udział w wielu akcjach i imprezach organizowanych w środowisku akademickim – np. dolnośląskie prezentacje edukacyjne TARED2009, Dni Aktywności Studenckiej, BIO Projekt, Przegląd Kultury Studenckiej „W górach 2006”, V Forum Aktywności Studenckiej, uroczyste gale wręczania dyplomów absolwentom, międzynarodowe regaty wioślarskie ODRA CUP 2009 – pokazy tańca towarzyskiego, Juwenalia 2009 i inne, a także w wielu ogólnopolskich turniejach tańca towarzyskiego. Tworzymy także własne projekty czego przykładem jest ostatnia Gala Taneczna Lato 2009 (w Galerii znajduje się obszerna fotorelacja z tej imprezy).</p>
      <p>* ISTD – ang. Imperial Society of Teachers of Dancing</p>



    </div> 

    
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?=$page->getEnd();?>
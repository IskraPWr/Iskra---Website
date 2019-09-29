<?php
require_once "../content/creator.php";

//do ustawienia: title description, keywords, homepage
//default:
//title-> SKTT Iskra PWr;
//description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
//keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
//homapage-> false;

$data['title'] = 'O Nas';

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
          <p>Już od kilkunastu lat skupiamy w swoich szeregach wrocławskie, akademickie środowisko taneczne wywodzące się
           z Politechniki Wrocławskiej (i nie tylko!).</p>
          <p>SKTT Iskra powstał pierwotnie jako klub dedykowany niemal
           wyłącznie dla tańca towarzyskiego, lecz od jakiegoś czasu staramy się urozmaicać spędzany w naszym gronie
           czas o kursy tańca wszelkiej maści, na które tylko znajdą się chętni uczestnicy.</p>
          <p>Nasz klub powstał pierwotnie jako dedykowany niemal
           wyłącznie dla tańca towarzyskiego, lecz od jakiegoś czasu staramy się urozmaicać spędzany w naszym gronie
           czas o kursy tańca wszelkiej maści, na które tylko znajdą się chętni uczestnicy.</p>
          <p> W związku z tym już wielu roztańczonych,
           zadowolonych studentów brało udział w naszych zajęciach m.in. z <em>bachaty, salsy, tańca użytkowego,
            disco-samby czy high heels</em>, a ich pozytywny odzew motywuje nas do dalszego poszerzania oraz usprawniana naszej oferty!</p>
          <p>W naszym klubie taniec towarzyski wciąż odgrywa bardzo istotną rolę. Przez te wszystkie lata trenowaliśmy na różnych poziomach zaawansowania dostosowanych do uczestników. Od poziomu podstawowego, dla znacznej większości zapoznawczego z tańcem w ogóle, aż po zaawansowany, który z powodzeniem przygotowywał poszczególne pary do występów na ogólnopolskich turniejach. Poza regularnymi treningami organizujemy też dodatkowe, jednorazowe warsztaty z wybranymi trenerami najczęściej w okresie ferii zimowych lub wakacji. Dłuższe okresy wolnego czasu bywają zagospodarowane również wspólnymi wyjazdami/obozami tanecznymi </p>
          <p>Jako klub bierzemy udział w wielu akcjach i imprezach organizowanych w środowisku akademickim. Przykładami niech będą: Dni Aktywności Studenckiej, BIO Projekt, Forum Aktywności Studenckiej, uroczyste gale wręczania dyplomów absolwentom, międzynarodowe regaty wioślarskie ODRA CUP, pokazy tańca towarzyskiego w ramach uroczystych okazji, Juwenalia i inne.</p>
          <p>Zapraszamy serdecznie wszystkich zainteresowanych nasza ofertą do kontaktu oraz wspólnego rozwoju tanecznego! Chętnie odpowiemy na wszelkie pytania oraz propozycje współpracy :)</p>
          <p>Do zobaczenia! <br>
Zespół SKTT Iskra</p>
    </div>

    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?=$page->getEnd();?>
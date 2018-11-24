<?php
   require_once "../content/creator.php"; 
   
   //do ustawienia: title description, keywords, homepage
   //default: 
   //title-> SKTT Iskra PWr; 
   //description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
   //keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
   //homapage-> false;
   
   $data['title']='Aktualności';
   
   $page = new Creator($data);
    echo $page->getBeginning();
   
   ?>
<div class="wrapper row3">
   <main class="hoc container clear">
      <!-- main body -->
      <div class="content news">
         <div>
            <h1 class="btmspace-50">Aktualności</h1>
            <h1 id="A1">Walne Zebranie SKTT Iskra</h1>
            <p>W imieniu zarządu chcielibyśmy serdecznie zaprosić wszystkich zainteresowanych sprawami klubu na Walne Zebranie które odbędzie się <b>09.11.2018r. w sali Niebieskiej w Zajezdni Dąbie przy ulicy Wróblewskiego 38 w godzinach 19-22.</b>
            <p>
            <p>Nasze zebranie ma na celu dokonanie wyborów uzupełniających do zarządu, omówienie sytuacji klubu, przedstawienia misji i wyzwań na kolejny rok a także wywołanie szeroko rozumianej dyskusji na temat miejsca naszej agendy w życiu akademickim i terytorialnym.
            </p>
         </div>
         <div>
            <h1 id="A2">Rozpoczęcie nowego semestru w SKTT Iskra!</h1>
            <p>Wszystkich spragnionych tanecznych wrażeń i pełnych sił do nowych wyzwań w nadchodzącym semestrze zapraszamy, w imieniu zarządu <b>"Studenckiego Klubu Tańca Towarzyskiego Iskra Politechniki Wrocławskiej"</b> na rozpoczynający się niedługo, nowy cykl zajęć z tańca towarzyskiego! </p>
            <p>Oznacza to również rozpoczęcie nowego naboru do Naszych grup tanecznych na wszystkich poziomach zaawansowania!</p>
            <p>Dlatego też, jeśli chcesz by nowy semestr był dla Ciebie czasem rozwoju i nowych wyzwań, nie zwlekaj, dołącz do Nas i daj
               się ponieść rytmowi!
            </p>
            <p> Zapraszamy również do dołączenia do Naszego
               <a href="https://www.facebook.com/events/2168543343387659/" target="_blank">wydarzenia</a> na Facebooku.
            </p>
         </div>
         <div>
            <h1>Gala SKTT Iskra PWr 2018</h1>
            <p>Mamy zaszczyt zaprosić wszystkich tancerzy, sympatyków i zainteresowanych na Galę SKTT Iskra PWr 2018, która odbędzie
               się 20 stycznia 2018r. w hali sportowej Politechniki Wrocławskiej (P22/N) przy ulicy Chełmońskiego 12.</p>
               <p>  Gala rozpocznie się o godznie 14:00. Wstęp wolny. </p> 
               <p>Więcej informacji można znaleźć na stronie
               <a href="https://www.facebook.com/events/821191201402408/" target="_blank">wydarzenia.</a>
            </p>
         </div>
         <div>
            <h1>Nadzwyczajne Walne Zebra­nie Człon­ków Klubu SKTT ISKRA PWr</h1>
            <p>Nadzwyczajne Walne Zebra­nie Człon­ków Klubu SKTT ISKRA PWr odbę­dzie się 10 grudnia 2017 (niedziela) o godzi­nie 19:00
               w Budynku C-8 Politechniki Wrocławskiej.
            </p>
            <p>Walne Zebranie zostaje zwołane w celu wyboru brakujących członków Zarządu i Komisji Rewizyjnej Klubu.</p>
            <h1>Rozpoczęcie semestru zimowego (2017/2018)</h1>
            <p>Pełni sił rozpoczęliśmy sezon taneczny – zapraszamy na zajęcia!</p>
            <p>OPIS GRUP</p>
            <p>🌟 grupa PODSTAWOWA – jeśli nie miałeś wcześniej styczności z tańcem to ta grupa jest dla Ciebie. Poznasz tutaj podstawy
               tańca towarzyskiego i będziesz mógł zaszpanować na imprezie lub weselu. Wybierz tą grupę również jeśli tańczyłeś,
               ale nie pamiętasz zbyt wiele.
            </p>
            <p> 🌟 grupa PODSTAWOWA+ – nowa grupa skierowana głównie do ZESZŁOROCZNEJ GRUPY PODSTAWOWEJ. Wybierz tą, jeśli znasz podstawowe
               kroki i figury, ale to dla Ciebie za mało. W tej grupie kładziony jest większy nacisk na poprawną technikę podstawowych
               kroków.
            </p>
            <p>🌟 grupa ŚREDNIO-ZAAWANSOWANA/ZAAWANSOWANA – wybierz tą grupę jeśli startujesz/startowałeś w turniejach, lub to planujesz.
               Tutaj nie ma taryfy ulgowej. Wszystko musi być dopięte na ostatni guzik. Technika, technika i jeszcze raz technika.
               Zapamiętanie 10-figurowego układu w ciągu jednych zajęć? To żadne wyzwanie dla członków tej grupy.
            </p>
            <p> W tygodniu 02.10 – 06.10 odbywają się zajęcia organizacyjne.</p>
            <p> Aktualny grafik zajęć znajduje się na stronie Terminy zajęć. Koniecznie zerknijcie również na Składki członkowskie
               Masz jeszcze jakieś pytania? Zanim wyślesz maila, przeczytaj Pierwszy „krok” oraz FAQ
            </p>
            <p>Do zobaczenia! 
               Zarząd SKTT Iskra
            </p>
         </div>
      </div>
      <!-- / main body -->
      <div class="clear"></div>
   </main>
</div>
<?=$page->getEnd();?>
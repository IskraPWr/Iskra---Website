<?php
require_once "sktt/content/creator.php";

//do ustawienia: title description, keywords, homepage
//default:
//title-> SKTT Iskra PWr;
//description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
//keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
//homapage-> false;

$data['homepage'] = 'true';

$page = new Creator($data);
echo $page->getBeginning();

?>

  <div class="wrapper row4">
    <main class="hoc container clear">
      <!-- main body -->

      <div class="group">
        <div class="first padding">

          <h6 class="heading">O nas</h6>
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
           zadowolonych studentów brało udział w naszych zajęciach m.in. z <ul>
             <li>bachaty</li>
             <li>salsy</li>
             <li>tańca użytkowego</li>
             <li>high heels</li>
             </ul>
           Ich pozytywny odzew motywuje nas do dalszego poszerzania oraz usprawniana naszej oferty! [&hellip;]</p>
          <footer>
            <a class="btn" href="sktt/pages/o-nas">Czytaj dalej &raquo;</a>
          </footer>
        </div>
      </div>

      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>


  <div id="mobile" class="wrapper bgded overlay coloured" style="background-image:url('sktt/images/iskra12.jpg');">
    <section class="hoc container clear center">
      <div class="cta sectiontitle">

        <h3 class="heading">
          <strong>Zapraszamy na zajęcia </strong>
        </h3>
        <p class="btmspace-50">Jesli chcesz dowiedzieć się więcej o terminach zajęć i opłatach zapoznaj się z sekcją terminów zajęć i składek członkowskich.</p>
        <footer>
          <a class="btn" href="sktt/pages/terminy-zajec">Terminy zajęć</a>
          <br>
          <br>
          <a class="btn" href="sktt/pages/skladki-czlonkowskie">Składki członkowskie</a>
        </footer>

      </div>
    </section>
  </div>

  <div class="wrapper row9">
    <section class="hoc container clear">
      <div class="group">
        <div class="first">

          <h6 class="heading">Aktualności</h6>
          <p>Jeśli interesują Cię najnowsze wydarzenia związane z naszym klubem lub poszukujesz aktualnych informacji koniecznie
            kliknij w link poniżej i dowiedz się wszystkiego o naszej działalności.</p>
          <br>
          <br>
          <footer>
            <a class="btn" href="sktt/pages/aktualnosci">Aktualności</a>
          </footer>
        </div>
      </div>
    </section>
  </div>




  <div id="aktualnosc" class="wrapper bgded" style="background-image:url('sktt/images/iskra2.jpg');">
    <div class="hoc2 split clear">
      <section>

        <h2 class="heading">
          <a href="sktt/pages/aktualnosci"> Aktualności </a>
        </h2>
        <ul class="nospace group elements">

          <li>
            <article>
              <a href="sktt/pages/aktualnosci#A1">
                <i class="fa fa-calendar"></i>
              </a>
              <h6 class="heading">Walne Zebranie SKTT Iskra</h6>
              <p>W imieniu zarządu chcielibyśmy serdecznie zaprosić wszystkich zainteresowanych sprawami klubu na Walne Zebranie które odbędzie się <b>29.03.2019r. w sali nr. 2 w budynku C8 na kampusie Politechniki Wrocławskiej w godzinach 19-22.</b>
                <br>
                <br>
                Nasze zebranie ma na celu dokonanie wyborów uzupełniających do zarządu, komisji rewizyjnej jak i omówienie aktualnej strategii działania klubu i celów na kolejny rok.
              </p>
              <footer>
                <a href="sktt/pages/aktualnosci#A1">Czytaj dalej &raquo;</a>
              </footer>
            </article>
          </li>

        <li>
            <article>
              <a href="sktt/pages/aktualnosci#A2">
                <i class="fa fa-calendar"></i>
              </a>
              <h6 class="heading">Rozpoczęcie nowego semestru w SKTT Iskra!</h6>
              <p>Wszystkich spragnionych tanecznych wrażeń i pełnych sił do nowych wyzwań w nadchodzącym semestrze zapraszamy, w imieniu zarządu <b>"Studenckiego Klubu Tańca Towarzyskiego Iskra Politechniki Wrocławskiej"</b> na rozpoczynający się niedługo semestr letni 2018/2019, nowy cykl zajęć z tańca towarzyskiego jak również bachaty, salsy i tańca użytkowego!
                <br>
                <br>
                Zapraszamy również do dołączenia do Naszego
                <a href="https://www.facebook.com/events/430569561095115/" target="_blank">wydarzenia</a> na Facebooku [&hellip;]
              </p>
              <footer>
                <a href="sktt/pages/aktualnosci#A2">Czytaj dalej &raquo;</a>
              </footer>
            </article>
          </li>
        </ul>

      </section>
    </div>
  </div>

  <div class="wrapper row5">
    <section id="latest" class="hoc container clear">
      <div class="sectiontitle">
        <h6 class="heading">Sukcesy i występy członków naszego Klubu</h6>
        <p>Nasz Klub aktywnie uczestniczy w wielu turniejach tanecznych jak również w imprezach </br>i wydarzeniach związanych
          z Naszą uczelnią.</p>
      </div>
      <ul class="nospace group fig padding">
        <li class="one_third first">
          <figure>
            <a href="sktt/images/iskra6.jpg" data-lightbox="roadtrip" data-title="IV Ogólnopolski Turniej Tańca Towarzyskiego o Puchar Burmistrzów Miasta i Gminy Międzybórz oraz Miasta i Gminy Twardogóra">
              <img src="sktt/images/iskra6.jpg" alt="">
            </a>
            <figcaption>
              <p>IV Ogólnopolski Turniej Tańca Towarzyskiego o Puchar Burmistrzów Miasta i Gminy Międzybórz oraz Miasta i Gminy
                Twardogóra
              </p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure>
            <a href="sktt/images/iskra7.jpg" data-lightbox="roadtrip" data-title="Oficjalna Gala PWr">
              <img src="sktt/images/iskra7.jpg" alt="">
            </a>
            <figcaption>
              <p>Oficjalna Gala PWr</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure>
            <a href="sktt/images/iskra8.jpg" data-lightbox="roadtrip" data-title="Pokaz tańca na 'Dniach Aktywności Studenckiej PWr'">
              <img src="sktt/images/iskra8.jpg" alt="">
            </a>
            <figcaption>
              <p>Pokaz tańca na "Dniach Aktywności Studenckiej PWr"</p>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
  </div>


  <div id="photo-first-step" class="wrapper bgded overlay coloured" style="background-image:url('sktt/images/DSC_0259.JPG');">
    <section class="hoc container clear center">
      <div class="cta sectiontitle">

        <h3 class="heading">
          <strong>Jeśli taniec jest Twoim żywiołem, nie czekaj, dołącz do nas już dzisiaj ! </strong>
        </h3>
        <p class="btmspace-50">Dowiedz się w jaki sposób przygotować się na pierwsze zajęcia. </p>
        <footer>
          <a class="btn" href="sktt/pages/pierwszy-krok">Pierwszy 'krok'</a>
        </footer>

      </div>
    </section>
  </div>




  <div class="wrapper row6">
    <section class="hoc container clear">

      <div class="sectiontitle">
        <h6 class="heading">Więcej informacji o Nas</h6>
        <p>Wszystko czego potrzebujesz w jednym miejscu</p>
      </div>
      <ul class="nospace group elements padding">
        <li class="one_third first">
          <article>
            <a href="sktt/pages/zarzad">
              <i class="fa fa-group"></i>
            </a>
            <h6 class="heading">Zarząd</h6>
            <p>Informacje odnośnie Zarządu SKTT ISKRA PWr </p>
            <footer>
              <a href="sktt/pages/zarzad">Zobacz więcej &raquo;</a>
            </footer>
          </article>
        </li>
        <li class="one_third">
          <article>
            <a href="sktt/pages/kontakt">
              <i class="fa fa-phone"></i>
            </a>
            <h6 class="heading">Kontakt</h6>
            <p>Kontakt w sprawach organizacyjnych i członkowskich</p>
            <footer>
              <a href="sktt/pages/kontakt">Zobacz więcej &raquo;</a>
            </footer>
          </article>
        </li>
        <li class="one_third">
          <article>
            <a href="sktt/pages/do-pobrania">
              <i class="fa fa-print"></i>
            </a>
            <h6 class="heading">Do pobrania</h6>
            <p>Wzory dokumentów do pobrania </p>
            <footer>
              <a href="sktt/pages/do-pobrania">Zobacz więcej &raquo;</a>
            </footer>
          </article>
        </li>
        <li class="one_third first">
          <article>
            <a href="sktt/pages/dojazd-na-zajecia">
              <i class="fa fa-bus"></i>
            </a>
            <h6 class="heading">Dojazd</h6>
            <p>Gdzie odbywają się nasze zajęcia i jak sie tam dostać</p>
            <footer>
              <a href="sktt/pages/dojazd-na-zajecia">Zobacz więcej &raquo;</a>
            </footer>
          </article>
        </li>
        <li class="one_third">
          <article>
            <a href="sktt/pages/statut">
              <i class="fa fa-university"></i>
            </a>
            <h6 class="heading">Statut</h6>
            <p>Ramy prawne wedle których działa nasza organizacja </p>
            <footer>
              <a href="sktt/pages/statut">Zobacz więcej &raquo;</a>
            </footer>
          </article>
        </li>
        <li class="one_third">
          <article>
            <a href="sktt/pages/faq">
              <i class="fa fa-cube"></i>
            </a>
            <h6 class="heading">FAQ</h6>
            <p>Odpowiedzi na najczęściej zadawane przez Was pytania</p>
            <footer>
              <a href="sktt/pages/faq">Zobacz więcej &raquo;</a>
            </footer>
          </article>
        </li>
      </ul>

    </section>
  </div>




  <div id="mobile2" class="wrapper bgded overlay" style="background-image:url('sktt/images/iskra13.jpg');">
    <div class="hoc container testimonials clear">

      <article>
        <img src="sktt/images/iskra5.jpg" alt="">
        <blockquote>"Podczas każdego tańca, któremu oddajemy się z radością, umysł traci swoją zdolność kontroli, a ciałem zaczyna kierować
          serce."
        </blockquote>
        <h6 class="heading">Paulo Coelho</h6>
        <em>Czarownica z Portobello</em>
      </article>

    </div>
  </div>

<?php
echo $page->getEnd();
?>


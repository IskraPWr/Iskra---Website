<?php
require_once "../content/creator.php";

//do ustawienia: title description, keywords, homepage
//default:
//title-> SKTT Iskra PWr;
//description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
//keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
//homapage-> false;

$data['title'] = 'Pierwszy "krok"';

$page = new Creator($data);
echo $page->getBeginning();

?>
<div class="wrapper row3">
                <main class="hoc container clear">
                    <!-- main body -->
                    <div class="content">
                        <h1>Pierwszy „krok”</h1>
                        <img class="imgr borderedbox inspace-5 space-10" src="../images/dancers.png" alt="">
                        <br>
                        <p><b>UWAGA: Na pierwszych zajęciach również obowiązuje aktywne
                                uczestnictwo. Nie leży w dobrym zwyczaju przyjście i „oglądanie” zajęć. W
                                tym wypadku również apelujemy o przyjście przygotowanym na zajęcia i
                                aktywne uczestnictwo. SKTT ISKRA nie prowadzi zajęć z „patrzenia”.</b></p>
                        <br>
                        <p><b>Pamiętaj:</b> każdy może przyjść na nasze zajęcia. Nie masz nic do stracenia,
                            ryzykujesz tylko świetną zabawę i nauczenie się kroków które mogą przydać Ci się w
                            wielu sytuacjach! Nabędziesz również płynności ruchów, które zapewnią Ci swobodę
                            podczas poruszania się na parkiecie.</p>
                        <br>
                        <a href="../images/Ballroom2.jpg" data-lightbox="roadtrip"><img
                                class="imgl borderedbox inspace-5 space-10" src="../images/Ballroom2.jpg" alt=""></a>
                        <p>
                            Co należy ze sobą zabrać?</p>
                        <ul>
                            <li>czyste obuwie zmienne – nie od razu taneczne, ale wygodne i nie krępujące ruchów
                                stopy, w miarę możliwości na cienkiej podeszwie</li>
                            <li>ubranie wygodne, pozwalające wykonać proste ćwiczenia</li>
                            <li>picie</li>
                            <li>dobry nastrój</li>
                        </ul>

                        <p>Co należy zrobić, aby dołączyć do klubu?</p>
                        <ul>
                            <li>przyjść na pierwsze (zerowe) zajęcia</li>
                            <li>przed rozpoczęciem zajęć poinformować o tym fakcie trenera lub osobę z Zarządu
                                Klubu</li>
                            <li>w przypadku, gdy już wcześniej uczęszczałeś/-łaś na zajęcia taneczne, powiedz to
                                trenerowi, a on pomoże Ci wybrać poziom grupy</li>
                            <li>uregulować jednorazową opłatę wpisową 40 zł</li>
                            <li>dokonać wpłaty za wybraną przez siebie ilość grup (szczegóły w zakładce: <a href="skladki-czlonkowskie">Składki
                                Członkowskie</a>)</li>
                        </ul>

                        <p><b>Uwaga: </b> przed zajęciami będziemy zwracać uwagę, czy uczestnicy zajęć opłacili
                            składki (dlatego prosimy o pilnowanie terminów wpłat) oraz czy mają obuwie
                            zmienne. Są to warunki potrzebne do przystąpienia do zajęć.</p>

                        <p>Zapraszamy do przeczytania FAQ. Znajduje się tam wiele odpowiedzi na często
                            pojawiające się pytania. Być może pomoże to rozwiać Twoje wątpliwości.</p>

                        <p>W razie jakichkolwiek niejasności prosimy po prostu pytać – różne formy kontaktu są
                            podane w dziale Kontakt. Zawsze staramy się udzielić możliwie najprecyzyjniejszej
                            odpowiedzi i służyć pomocą.</p>

                    </div>
      <!-- / main body -->
      <div class="clear"></div>
   </main>
</div>
<?=$page->getEnd();?>
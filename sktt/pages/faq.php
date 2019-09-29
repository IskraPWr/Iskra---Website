<?php
require_once "../content/creator.php"; 

//do ustawienia: title description, keywords, homepage
//default: 
//title-> SKTT Iskra PWr; 
//description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
//keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
//homapage-> false;

$data['title']='FAQ';

$page = new Creator($data);
 echo $page->getBeginning();

?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    
    <div class="content"> 
      
      <h1>FAQ</h1>
      <P>Frequently Asked Questions - Często zadawane pytania</P>

       <p> <b>1. Kto może przystąpić do SKTT ISKRA PWr?</b>
        <br><br>
        Do SKTT ISKRA PWr może przystąpić każda osoba:
      <br>
        – nie studiująca:
      <br>
        – w wieku do 18 roku życia za pisemną zgodą prawnego opiekuna złożoną do członka Zarządu po konsultacji z trenerem Klubu,
      <br>
        – będąca absolwentem dowolnej wyższej uczelni,
      <br>
        – w wieku powyżej 18 roku życia, ale nie będąca absolwentem żadnej wyższej uczelni,
      <br>
        – studiująca:
      <br>
        na dowolnej wyższej uczelni, na studiach dziennych, zaocznych lub wieczorowych,
      <br>
        – będąca słuchaczem studiów doktoranckich dowolnej wyższej uczelni/instytutu – tzw. doktorantem/doktorantką.
      <br><br>
       <b>2. Czy aby przystąpić do SKTT ISKRA PWr muszę mieć partnera lub partnerkę?</b>
      <br><br>
        Aby przystąpić do SKTT ISKRA PWr nie musisz mieć partnera/partnerki. W grupie początkującej zajęcia taneczne prowadzone są w taki sposób, że nie wymagają od razu stałego partnera/partnerki.
      <br>
        W miarę możliwości zdarza się, że kilka lub nawet kilkanaście osób przychodzi bez pary. Wówczas osoby te mogą poznać się w trakcie trwania zajęć tanecznych. Kroki podstawowe 99% wszystkich tańców są takie same zarówno dla partnera jak i dla partnerki – kroki są „symetryczne”, zatem sytuacja w jakiej się znajdują jest bardzo podobna i zupełnie normalna tańcu towarzyskim.
      <br><br>
      <b> 3. Co muszę zrobić, aby przystąpić do SKTT ISKRA PWr?</b>
      <br><br>
        Zaglądnij do zakładki „Pierwszy krok”.
      <br><br>
      <b>4. Jaka wysokość semestralnej opłaty związanej z pokryciem kosztów usługi trenerskiej będzie mnie obowiązywała?</b>
      <br><br>
        Informacje o opłatach związanych z uczestnictwem w zajęciach klubu znajdują się na stronie Terminy zajęć i opłaty.
      <br><br>
      <b>5. Do kiedy należy uiszczać należne opłaty?</b>
      <br><br>
        Aktualne terminy płatności są podawane na zajęciach, oraz w zakładce „Terminy Zajęć”.
      <br><br>
      <b>6. Czy wysokość comiesięcznej opłaty związanej z pokryciem kosztów usługi trenerskiej jest stała nie zależnie od ilości zajęć w danym miesiącu?</b>
      <br><br>
        Faktycznie, zdarza się że w niektórych miesiącach może wypaść 5 zajęć tanecznych danej grupy, a w niektórych 4 lub nawet tylko 3 (bo mogą wypaść np. święta lub dzień wolny ustawowo). Jednakże wysokość ww. opłaty jest stała niezależnie od ilości wypadających w miesiącu zajęć tanecznych. SKTT ISKRA PWr działa wg kalendarza akademickiego Politechniki Wrocławskiej. Kalendarz ten jest tak skonstruowany, że w każdym semestrze jest dokładnie 15 tygodni roboczych (15 poniedziałków, 15 wtorków, 15 śród, 15 czwartków i 15 piątków). Zatem uczestnicząc
        w zajęciach np. grupy podstawowej A lub B w ciągu całego semestru będzie się uczestniczyło w 15 zajęciach tanecznych, a ww. opłata jest uśrednioną wartością z 15 zajęć przypadającą na 1 miesiąc kalendarzowy.
      <br>
        Podsumowując:  Tak naprawdę obowiązuje składka semestralna (za 15 tygodni), podzielona na określoną ilość rat (obecnie zredukowano z 4 do 3 – patrz pkt. 4).
      <br><br>
      <b> 7. Czy SKTT ISKRA PWr prowadzi kursy taneczne?</b>
      <br><br>
        Tak, SKTT ISKRA PWr prowadzi zamknięte formy zajęć – kursy. Informację o obecnie otwartych kursach znajdziesz na naszym harmonogramie zajęć lub na naszej stronie na Facebooku.
      <br><br>
      <b>8. Czy mogę przyjść i obejrzeć przebieg zajęć tanecznych?</b>
      <br><br>
        Nie jest to w dobrym, ani w żadnym zwyczaju, aby oglądać czyjeś zajęcia taneczne samemu w nich nie uczestnicząc.
      <br><br>
        Jeżeli jesteś zainteresowany/zainteresowana lub jesteście zainteresowani przyjściem na pierwsze zajęcia taneczne zaglądnij do zakładki <a href="pierwszy-krok">„Pierwszy krok”</a>
      <br><br>
      <b> 9. Jak powinienem/powinnam się ubrać, aby uczestniczyć w zajęciach tanecznych?</b>
      <br><br>
        Ogólnie ubrania nie krępujące ruchów, elastyczne i wygodne, w których nie będzie nam za gorąco.
      <br>
        Panowie zawsze w długich spodniach, nigdy w krótkich spodenkach. Panie mogą ubrać zarówno spodnie jak i spódnice czy spódniczki. Top może być T-shirtem, koszulą z długim lub krótkim rękawem, raczej unika się bezrękawników. Odradzamy pełny garnitur z krawatem. Obuwie czyste zmienne – nie od razu taneczne, ale wygodne i nie krępujące ruchów stopy, w miarę możliwości na cienkiej podeszwie. Dla Pań dobrą propozycją są tanie balerinki czy tenisówki. Odradzamy Paniom obcasy w szczególności wysokie czy tzw. szpilki. Obuwie sportowe typu adidas na grubej podeszwie raczej również się nie sprawdzi.
      <br><br>
      <b> 10. Czy mogę zapisać się do Klubu w dowolnym momencie (np. w połowie semestru)?</b>
      <br><br>
        Tak, można zapisać się do Klubu w dowolnym momencie. W przypadku zapisania się później niż w ciągu pierwszego miesiąca semestru sposób rozliczenia składki będzie określony indywidualnie. Prosimy o osobiste zgłoszenie się do prezesa lub wiceprezesa zarządu.
      <br><br>
      <b>  11. Szukam partnera/partnerki, możecie mi pomóc?</b>
      <br><br>
        Tak, w tej sprawie najlepiej przyjść na zajęcia i rozmawiać z prezesem, wiceprezesem Klubu oraz Panią Trener. Posiadamy aktualną listę „poszukujących” i w takim przypadku zawsze staramy się pomóc i dobrać w pary.
      <br><br>
      <b>12. Próbuję tańczyć ale chyba mi „nie wychodzi”, poza tym widzę że „innym” wychodzi to lepiej, powinienem zrezygnować?</b>
      <br><br>
        Oczywiście że nie! W tańcu nic nie wychodzi „od razu” i tak po prostu. Każda osoba w indywidualny sposób robi postępy. Niektórzy „łapią” szybciej, inni nieco wolniej. Nie można się zrażać jeśli na początku czujesz się nieco zagubiony/zagubiona. Wszystko przychodzi z czasem i trzeba po prostu ćwiczyć. Do tego dochodzą różnice w związku z tym iż część osób już trenowała taniec towarzyski. Z pewnością będziesz zadowolony z postępów w tańcu po pierwszym semestrze. Po całym semestrze regularnych treningów w grupie podstawowej z pewnością będziesz w stanie zaprezentować się w kilku tańcach na Gali Tanecznej organizowanej jako podsumowanie każdego semestru!
      <br><br>
      <b>13. Nie czuję się „mocny/mocna” po całym semestrze chyba nie powinnam/powinienem występować publicznie i zrezygnować z występu w Gali Tanecznej.</b>
      <br><br>
        Jest to częste i bardzo ZŁE podejście zarówno do własnej osoby jak i do tańca. Z takim podejściem spotykamy się zarówno na grupie podstawowej jak i u bardziej zaawansowanych tancerzy (np. wahających się przed występem w ogólnopolskich turniejach). Tak naprawdę niepotrzebnie się przejmujesz. Pamiętaj o Motto naszej Pani Trener: „Nie wszystkiego można nauczyć się na treningu”. Jest to absolutna prawda. Doświadczenia związane z występem publicznym są niesamowite i trzeba przeżyć to osobiście aby móc to opisać. Możemy tylko powiedzieć że po prostu WARTO występować. Trzeba pamiętać że niekoniecznie od razu zajmuje się pierwsze miejsce i jest to bardzo normalnym zjawiskiem, nie należy się tym zrażać. Z własnego doświadczenia możemy powiedzieć iż „przegrywanie” motywuje do dalszej pracy i treningów i przynosi dobre efekty, na przykład w postaci wygrywania </p>
      <br>
       <p> Na Wasze pytania odpowiadają członkowie Zarządu.
      <br>
        Prosimy o zgłaszanie wszelkich pytań i wątpliwości do członków Zarządu (dane kontaktowe podane w dziale Zarząd), lub na adres e-mail sktt@pwr.edu.pl.</P>
          
    </div>
      
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?=$page->getEnd();?>
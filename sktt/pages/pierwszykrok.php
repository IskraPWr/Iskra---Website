<?php
   require_once "../content/creator.php"; 
   
   //do ustawienia: title description, keywords, homepage
   //default: 
   //title-> SKTT Iskra PWr; 
   //description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
   //keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
   //homapage-> false;
   
   $data['title']='Pierwszy "krok"';
   
   $page = new Creator($data);
    echo $page->getBeginning();
   
   ?>
<div class="wrapper row3">
   <main class="hoc container clear">
      <!-- main body -->
      <div class="content">
         <h1>Pierwszy „krok”</h1>
         <img class="imgr borderedbox inspace-5" src="../images/dancers.png" alt="">
         </br>
         <p><b>UWAGA: Na pierwszych zajęciach również obowiązuje aktywne uczestnictwo.  Nie leży w dobrym zwyczaju przyjście i „oglądanie” zajęć. W tym wypadku również apelujemy o przyjście przygotowanym na zajęcia i aktywne uczestnictwo. SKTT ISKRA nie prowadzi zajęć z „patrzenia”.</b></p>
         </br> 
         <p>Pamiętaj: nie masz nic do stracenia, ryzykujesz tylko świetną zabawę i nauczenie się kroków które mogą przydać Ci się w wielu sytuacjach życiowych!</p>
         <a href="../images/Ballroom2.jpg"  data-lightbox="roadtrip"><img class="imgl borderedbox inspace-5" src="../images/Ballroom2.jpg" alt=""></a>
         </br> 
         <p>Przed przystąpieniem do pierwszych (zerowych) zajęć, należy o tym fakcie poinformować trenera lub osobę z Zarządu Klubu.</p>
         <P>Należy koniecznie przynieść ze sobą czyste zmienne obuwie – nie od razu taneczne, ale wygodne i nie krępujące ruchów stopy, w miarę możliwości na cienkiej podeszwie.</P>
         </br>
         <p>Warunkiem regularnego uczestnictwa w zajęciach tanecznych SKTT ISKRA PWr jest systematyczne uiszczanie opłat wynikających z kosztów uczestnictwa w zajęciach oraz przynoszenie czystego zmiennego obuwia (oraz stosowania go).</p>
         <p>Zapraszamy do przeczytania <a href="faq">FAQ</a>, znajduje się w nim wiele odpowiedzi na często pojawiające się pytania, być może znajdziesz tam odpowiedź na nurtujące Cię pytanie.</p>
         <p>W razie jakichkolwiek wątpliwości prosimy po prostu pytać – różne formy kontaktu podane są w dziale Kontakt. Zawsze staramy się udzielić możliwie naprecyzyjniejszej odpowiedzi i służyć pomocą.</p>
      </div>
      <!-- / main body -->
      <div class="clear"></div>
   </main>
</div>
<?=$page->getEnd();?>
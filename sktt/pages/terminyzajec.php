<?php
require_once "../content/creator.php"; 

//do ustawienia: title description, keywords, homepage
//default: 
//title-> SKTT Iskra PWr; 
//description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
//keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
//homapage-> false;

$data['title']='Terminy zajęć';

$page = new Creator($data);
 echo $page->getBeginning();

?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    
    <div class="content"> 
      
      <h1>Terminy zajęć</h1>
      <img class="imgl borderedbox inspace-5" src="../images/time.jpg" alt="">
      <p>Terminy zajęć w semestrze zimowym (2018/2019)</p>
      <p>Poniedziałek: <br>grupa podstawowa I: 17:00-18:30 H-14 PWr<br>grupa średniozaawansowana: 18:30-20:00 H-14 PWr<br>grupa zaawansowana: 20:00-21:30 H-14 PWr</p>
      <p>Wtorek:<br>grupa podstawowa+: 20:30-22:00 IX LO</p>
      <p class='clear'>Środa: <br>grupa średniozaawansowana: 18:00-19:30 IX LO<br>grupa zaawansowana: 19:30-21:00 IX LO</p>
      <p>Czwartek:<br>grupa podstawowa II: 20:00-21:30 H-14 PWr</p>
      <p>Zajęcia są bezpłatne dla AKTYWNYCH CZŁONKÓW i są skierowane tylko dla nich. <br>  Serdecznie zapraszamy do naszego klubu!</p>
      <p><b>UWAGA!<br>SKTT ISKRA PWr działa wg. kalendarza akademickiego Politechniki Wrocławskiej (w semestrze zimowym i letnim) – od października do czerwca z wyłączeniem zimowej i letniej sesji egzaminacyjnej – oba semestry obejmują 15 tygodni roboczych nie zależnie od tego czy sesje egzaminacyjne rozpoczynają się w połowie czy z początkiem danego miesiąca. SKTT ISKRA PWr działa z pominięciem zamian dni tygodnia obowiązujących na Politechnice Wrocławskiej.</b></p>

     
    </div> 
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?=$page->getEnd();?>
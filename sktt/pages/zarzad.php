<?php
   require_once "../content/creator.php";
   
   //do ustawienia: title description, keywords, homepage
   //default:
   //title-> SKTT Iskra PWr;
   //description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
   //keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
   //homapage-> false;
   
   $data['title'] = 'Zarząd';
   
   $page = new Creator($data);
   echo $page->getBeginning();
   
   ?>
<div class="wrapper row3">
   <main class="hoc container clear">
      <!-- main body -->
      <div class="content">
         <h1>Zarząd</h1>
         <img id="management" class="imgr borderedbox inspace-5" src="../images/management.jpg" alt="">
         <p>Prezes – <b>Grzegorz Kikut</b> – tel. 515-951-120 <br>Wice­pre­ze­s - <b>Szymon Rychel</b> – tel. 609-891-029</p>
         <p>Promocja – <b>Gosia Mierzejewska</b> – tel. 666-099-770
            <br>Zarządzanie zasobami ludzkimi – <b>Piotr Ząbek</b> - 501-614-835
            <br>Skarbnik – <b>Sara Lindberg</b><br>Skarbnik – <b>Szymon Rychel</b> 
            <br>Współpraca z organizacjami studenckimi - <b>Dariusz Janik</b>
            <br>IT – <b>Justyna Tomaszewska</b>
         </p>
         <h1>Komisja Rewizyjna</h1>
         <p>Przewodniczący – <b>Mateusz Gruca</b> – tel. 607-989-252<br> Członek – <b>Łukasz Orzeł</b><br> Członek – <b>Andrzej Bąk</b></p>
         <h1>Opiekun SKTT ISKRA PWr</h1>
         <p><b>prof. dr hab. inż. Piotr Dudziński</b></p>
         <h1>Trener SKTT ISKRA PWr</h1>
         <p>dyplomowany nauczyciel tańca – Licentiate ISTD - <b>Barbara Pisarska-Gubernat</b></p>
      </div>
      <!-- / main body -->
      <div class="clear"></div>
   </main>
</div>
<?=$page->getEnd();?>
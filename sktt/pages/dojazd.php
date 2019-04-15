<?php
   require_once "../content/creator.php"; 
   
   //do ustawienia: title description, keywords, homepage
   //default: 
   //title-> SKTT Iskra PWr; 
   //description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
   //keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
   //homapage-> false;
   
   $data['title']='Dojazd';
   
   $page = new Creator($data);
    echo $page->getBeginning();
   
   ?>
<div class="wrapper row3">
   <main class="hoc container clear">
      <!-- main body -->
      <div class="content">
         <h1>Dojazd</h1>
         <p>Nasze zajęcia odbywają się:</p>
         <div class="inline">
            <img class="borderedbox inspace-5" src="../images/lo9.png" alt="">
            <div>
               <p>„Mała” sala sportowa przy Zespole Szkół Ogólnokształcących nr 3 – IX Liceum Ogólnokształcącym<br>
               ul. ks. Piotra Skargi 31<br>(w pobliżu Galerii Dominikańskiej) - wejście od ul. Nowej</p>
            </div>
         </div>
         <div class="inline">
            <img class="borderedbox inspace-5" src="../images/h14.JPG" alt="">
            <div>
               <p>Sala w budynku H-14 Politechniki Wrocławskiej<br>
               wybrzeże Stanisława Wyspiańskiego 40<br>(przy skrzyżowaniu z ul. Norwida)</p>
            </div>
         </div>
         <div class="inline">
            <img class="borderedbox inspace-5" src="../images/bajer.jpg" alt="">
            <div>
               <p>Sala Klubu Studenckiego Bajer <br>
               ul. Wittiga 6 Wrocław</p>
            </div>
         </div>
      </div>
      <!-- / main body -->
      <div class="clear"></div>
   </main>
</div>
<div class="google-maps">
   <iframe src="https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d10020.464364708663!2d17.052511825825167!3d51.10631822279105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x470fc2776b187687%3A0x7ebb3be342d0feb5!2sZSO+nr+3%2C+Piotra+Skargi+29-31%2C+50-082+Wroc%C5%82aw!3m2!1d51.1065651!2d17.039433!4m5!1s0x470fe8894f08742b%3A0x3c041c87e77a4c54!2zU0tUVCBJc2tyYSwgSDE0LCBXeWJyemXFvGUgU3RhbmlzxYJhd2EgV3lzcGlhxYTCrXNraWVnbywgV3JvY8WCYXc!3m2!1d51.1068541!2d17.060960299999998!4m5!1s0x470fc29f938aa519%3A0x49d6a56f7b4855cd!2sWittiga+6%2C+Wroc%C5%82aw!3m2!1d51.103111!2d17.0845824!5e0!3m2!1spl!2spl!4v1550794959182" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?=$page->getEnd();?>
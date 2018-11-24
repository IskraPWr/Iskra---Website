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
      <img class="imgl borderedbox inspace-5" src="../images/lo9.png" alt="">
      <p>Nasze zajęcia odbywają się:</p>
      <p>„Mała” sala sportowa przy Zespole Szkół Ogólnokształcących nr 3 – IX Liceum Ogólnokształcącym </p>
      </p>ul. ks. Piotra Skargi 31</br>(w pobliżu Galerii Dominikańskiej)</br> wejście od ul. Nowej</p>
      </br>
      </br>
      <img class="imgl borderedbox inspace-5" src="../images/h14.JPG" alt="">
      <p>Sala w budynku H-14 Politechniki Wrocławskiej</p>
      <p>wybrzeże Stanisława Wyspiańskiego 40</br>(przy skrzyżowaniu z ul. Norwida)</p>
      </br>
    </div>  
      
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<div class="google-maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m24!1m8!1m3!1d20040.064678650528!2d17.049767!3d51.108311!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x470fc2771464ee2d%3A0x7ebeaec1f3d021c7!2zWmVzcMOzxYIgU3prw7PFgiBPZ8OzbG5va3N6dGHFgmPEhWN5Y2ggbnIgMywgUGlvdHJhIFNrYXJnaSAzMSwgNTAtMDgyIFdyb2PFgmF3!3m2!1d51.1067702!2d17.039251699999998!4m5!1s0x470fe8894f08742b%3A0x3c041c87e77a4c54!2zU0tUVCBJc2tyYSwgSDE0LCBXeWJyemXFvGUgU3RhbmlzxYJhd2EgV3lzcGlhxYTCrXNraWVnbyA0MCwgNTAtMzcwIFdyb2PFgmF3!3m2!1d51.1068541!2d17.060960299999998!5e0!3m2!1spl!2spl!4v1514297857417" width="1200" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?=$page->getEnd();?>
<?php

if (isset($_POST['question']) && $_POST['question'] == 'gallery') {
    $file=file("../images/picture/controlFile.txt");
    $numberOfRowsInFile=count($file);
    $photos = glob("../images/picture/*");

    for($i=0;$i<$numberOfRowsInFile;$i++){
    $info[]=preg_split('/#/',$file[$i],0);
    }

    $numberOfFile = count($photos);

    $l=-1;
    $k=0;
    $how=0;

    $name='Galeria zdjęć: ';
    for($j=0;$j<$numberOfRowsInFile;$j++){
        $numberOfFound=0;
        for($i=0;$i<$numberOfFile;$i++){
            $pathInfo=pathinfo($photos[$i]);
            if($pathInfo['extension']!='txt'){
                if($pathInfo['filename'][0]==$info[$j][0]){
                    $numberOfFound++;
                    if($k%12==0){
                        $l++;  
                        $catalogOfPhotos[$l]='';
                    }

                    if($k%4==0){
                    $catalogOfPhotos[$l].='<li class="one_quarter first"><a href="../images/picture/'.$pathInfo['basename'] .'"  data-lightbox="gallery" data-title="'.$info[$j][1].'" ><img src="../images/picture/'.$pathInfo['basename'].'" alt="'.$info[$j][1].'"></a></li>';
                    }else{
                    $catalogOfPhotos[$l].='<li class="one_quarter"><a href="../images/picture/'.$pathInfo['basename'] .'"  data-lightbox="gallery" data-title="'.$info[$j][1].'" ><img src="../images/picture/'.$pathInfo['basename'].'" alt="'.$info[$j][1].'"></a></li>';
                    }
                    $k++;
                }
            }
        }
        $name.='<br>strona '.(floor($how/12)+1).'-'.(floor(($how+$numberOfFound-1)/12)+1).' - '.trim($info[$j][1]).', ';
        $how+=$numberOfFound;
    }
    $name=substr($name,0,strlen($name)-2);
    //$name=$name.'<br><br> <span style="color:#EA5616">WSKAZÓWKA:</span> W celu wybrania konkretnej strony kliknij "..." i wpisz numer strony.';

    $reply[]='gallery-true';
    $reply[]=$l+1;
    $reply[]=$catalogOfPhotos;
    $reply[]=$name;

    print json_encode($reply);

}

?>
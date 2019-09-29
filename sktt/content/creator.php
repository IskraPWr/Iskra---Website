<?php
final class Creator
{
    private $head;
    private $header;
    private $menu;
    private $footer;
    private $data;
    private $script;

    
    function __construct($initialization)
    {
        //do ustawienia: #TITLE# #DESCRIPTION#, #KEYWORDS#, #LINK#-homepage, #PHONE# #BASE#

        if (isset($initialization['title']))
            $this->data['title'] = $initialization['title'];
        else
            $this->data['title'] = "SKTT Iskra PWr";
        
        if (isset($initialization['description']))
            $this->data['description'] = $initialization['description'];
        else
            $this->data['description'] = "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!";
        
        if (isset($initialization['keywords']))
            $this->data['keywords'] = $initialization['keywords'];
        else
            $this->data['keywords'] = "taniec, taniec towarzyski, PWr, Iskra, Wrocław, hobby, dance";
        
        if (isset($initialization['homepage'])) {
            if ($initialization['homepage'] == 'true'){
                $this->data['homepage']=true;
                $this->data['link'][0] = 'sktt/';
                $this->data['link'][1] = 'sktt/pages/';
            }else if ($initialization['homepage'] == 'false'){
                $this->data['homepage']=false;
                $this->data['link'][0] = '../';
                $this->data['link'][1] = '';
            }
        }else{
            $this->data['homepage']=false;
            $this->data['link'][0] = '../';
            $this->data['link'][1] = '';
        }
        
        ///////////////////telefon!
        $this->data['phone']='515-951-120';
        $this->data['base']='';

        /////////baza
        //$this->data['base']='http://sktt.cba.pl/sktt/pages/logowanie';
    }
    public function getBeginning(){
            $head=file_get_contents($this->data['link'][0].'content/head.html');
            $head=str_replace('#TITLE#',$this->data['title'],$head);
            $head=str_replace('#DESCRIPTION#',$this->data['description'],$head);
            $head=str_replace('#KEYWORDS#',$this->data['keywords'],$head);
            $head=str_replace('#LINK#',$this->data['link'][0],$head);

            $header=file_get_contents($this->data['link'][0].'content/header.html');
            $header=str_replace('#PHONE#',$this->data['phone'],$header);
            $header=str_replace('#LINK2#',$this->data['link'][1],$header);
            $header=str_replace('#BASE#',$this->data['base'],$header);

            if($this->data['homepage']==true){
                $menu=file_get_contents($this->data['link'][0].'content/menu-homepage.html');
                $nav=file_get_contents($this->data['link'][0].'content/nav.html');
                $nav=str_replace('#LINK2#',$this->data['link'][1],$nav);                
                $menu=str_replace('#NAV#',$nav,$menu);

            }else if($this->data['homepage']==false){
                $menu=file_get_contents($this->data['link'][0].'content/menu.html');
                $nav=file_get_contents($this->data['link'][0].'content/nav.html');
                $nav=str_replace('#LINK2#',$this->data['link'][1],$nav);

                //generowanie sciazki
                $titlePosition=strpos($nav, $this->data['title']);
                $numberOfOpenUl=substr_count($nav,'<ul',0,$titlePosition);
                $numberOfCloseUl=substr_count($nav,'</ul>',0,$titlePosition);
                if($numberOfOpenUl-$numberOfCloseUl==2){
                    $positionOfLastFoundUl=strrpos($nav, '<ul>',-(strlen($nav)-$titlePosition));
                    $positionOfLastFoundEndA=strrpos($nav, '</a>',-(strlen($nav)-$positionOfLastFoundUl));
                    $positionOfLastFoundStartA=strrpos($nav, '<a',-(strlen($nav)-$positionOfLastFoundEndA));
                    $text=substr ($nav , $positionOfLastFoundStartA ,$positionOfLastFoundEndA-$positionOfLastFoundStartA+4);
                    $text=str_replace('class="drop"','',$text);
                    $path='<ul><li><a href="http://www.sktt.pwr.edu.pl">strona główna</a></li><li>'.$text.'</li><li><a href="#">'.$this->data['title'].'</a></li></ul>';
                }else if($numberOfOpenUl-$numberOfCloseUl==1){
                    $path='<ul><li><a href="http://www.sktt.pwr.edu.pl">strona główna</a></li><li><a href="#">'.$this->data['title'].'</a></li></ul>';
               }

                $menu=str_replace('#PATH#',$path,$menu);
                $menu=str_replace('#NAV#',$nav,$menu);
            }
            return $head.$header.$menu;
    }
    public function getEnd(){
            $footer=file_get_contents($this->data['link'][0].'content/footer.html');
            $footer=str_replace('#LINK#',$this->data['link'][0],$footer);
            $footer=str_replace('#PHONE#',$this->data['phone'],$footer);

            $script='';
            if(is_array($this->script)){
                for($i=0;$i<count($this->script);$i++){
                    $script.=$this->script[$i];
                }
                $footer=str_replace('#SCRIPT#',$script,$footer);
            }else{
                $footer=str_replace('#SCRIPT#','',$footer);
            }

            return $footer;
    }

    public function addScript($path){
        $this->script[]='<script src="'.$path.'"></script>';
    }
}
?>
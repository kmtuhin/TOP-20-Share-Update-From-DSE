<!DOCTYPE html>
<html>
    <head>
        <title> DSE :: TOP 20 Share </title>
        <meta charset="utf-8" />        
        <meta http-equiv="refresh" content="3000">    
        
<style>
    
    form,center,img{
     display:none;
    }
    .abhead{
        background-color:#FFFF99;
    }
    .abhead img{
        display: block;
        float:right;
        margin-right: 20px;
    }
    h2{
        text-align: center;
        background-color:#00596B;
        color:#fff;
        
        width: 100%;
        text-align: center;
    }
    marquee table table td{
        background-color: #FFFF99;
    }
    marquee{
        position: fixed;
        top:0;
        
    }
    marquee a,a:hover{
        color:#00596B;
        font-size: 12px;
    }
     marquee a br{
         display: none;
     }
    marquee table table td{
        border: 1px solid #FFF;
        padding-left: 10px;
        padding-right: 10px;
        height:80px;
       
    }
</style>    

</head> 
<body>
    <div style="clear:both; height:50px;"></div>
<?php 
require_once ('simple_html_dom.php');

$html = new simple_html_dom();
$html->load_file("http://www.dsebd.org/top_20_share.php");

foreach ($html->find('img') as $img){
    
    if($img->src == 'tkdown.gif' || $img->src =='tkupdown.gif' ||  $img->src == 'tkup.gif'){
         $img->src = 'http://www.dsebd.org/'.$img->src;
    }

  
}
foreach ($html->find('#mq2') as $marquee){   
  echo $marquee;
}

foreach ($html->find('td') as $iframe){
 
    if($iframe->hasAttribute('align') && $iframe->hasAttribute('valign') ){
          echo $iframe->previousSibling () ;
    echo    $iframe->first_child();
        //->src = "//www.dsebd.org/latest_share_price_all.php";
    }
}

// Find all images
/*foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>';  
*/
?>
</body>
</html>
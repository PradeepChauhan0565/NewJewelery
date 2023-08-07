<html ng-app="ionicApp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Ionic Accordion</title>
   
   
    {{-- ----------jquery------- --}}
       <script src="https://code.jquery.com/jquery-3.6.1.min.js"
       integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<style>
</style>

  </head>

  <body>

 



<div class="divs">
    <div ><img src="images/Aniversary ring.jpg" alt="" style="width:200px; height:100px;"></div>
    <div ><img src="images/BANNER final  3.jpg" alt="" style="width:200px; height:100px;"></div>
    <div ><img src="images/Art.png" alt="" style="width:200px; height:100px;"></div>
    <div ><img src="images/blog3image2.jpg" alt="" style="width:200px; height:100px;"></div>
    <div ><img src="images/blog3image5.jpg" alt="" style="width:200px; height:100px;"></div>
   
</div> 
<br>
<br>
<br>
 <a id="next" style="cursor: pointer;">next</a> &nbsp; &nbsp;

<a id="prev" style="cursor: pointer;">prev</a>  

    <script>







$(document).ready(function(){
    $(".divs div").each(function(e) {
        if (e != 0)
            $(this).hide();
    });
    
    $("#next").click(function(){
        if ($(".divs div:visible").next().length != 0)
            $(".divs div:visible").next().show().prev().hide();
        else {
            $(".divs div:visible").hide();
            $(".divs div:first").show();
        }
        return false;
    });

    $("#prev").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").prev().show().next().hide();
        else {
            $(".divs div:visible").hide();
            $(".divs div:last").show();
        }
        return false;
    });
});

    </script>
  </body>
</html>
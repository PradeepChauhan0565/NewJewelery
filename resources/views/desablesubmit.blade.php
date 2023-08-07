<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     
<style>
    #menu #nav {
    font-family: Segoe UI, Arial, sans-serif;
    font-size: 14px;
    color: #ca0909;
    list-style:none;
}

#menu #nav li {
    display: inline-block;
    padding: 0px 10px 0px 10px;
}

#menu #nav li a {
 
    font-size: 14px;
    color: #c02929;
    text-decoration: none;
     transition:  0.6s;
}

#menu #nav li a:hover {
    color: #0a813c;
    font-style: italic;
   
}
</style>
</head>
<body>
<div class="m-5 ">
   <div id="top">
    <a href="index.php?id=pagrindinis"><div id="logo"></div></a>
    <div id="menu">
        <ul id="nav">
            <li><a href="index.php">Pagrindinis</a></li>
            <li><a href="#">Taisyklės</a></li>
            <li><a href="#">Pamokos</a></li>
            <li><a href="#">Kontaktai</a></li>
            <li><a href="#">Facebook</a></li>
        </ul>
    </div>
    </div>
   <form action="">
    <input type="text" name="textField" />
<input type="submit" value="send" />
   </form>
</div>


<script>

   $(document).ready(function(){
    $('input[type="submit"]').attr('disabled','disabled');
    $('input[type="text"]').change(function(){
        if($(this).val != ''){
            $('input[type="submit"]').removeAttr('disabled');
        }
    });
});
</script>


</body>
</html>
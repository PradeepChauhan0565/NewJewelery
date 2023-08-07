<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
    {{-- ----------jquery------- --}}
       {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"
       integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/brands.css" integrity="sha384-1KLgFVb/gHrlDGLFPgMbeedi6tQBLcWvyNUN+YKXbD7ZFbjX6BLpMDf0PJ32XJfX" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/github.min.css">
  <style>
    header.jumbotron {
      background-color: #ff266e;
      color: #ffffff;
    }
    .container {
      max-width: 720px;
    }
    h2 {
      margin-bottom: 1rem;
      color: #303030;
    }



/*----- mobile menu start -----*/
    form {
  display: none;
}
   </style>

</head>
<body>


  <header class="jumbotron jumbotron-fluid text-center">
    <h1>jQuery plugin - C Share buttons</h1>

    <div class="mt-5">
      <a href="https://github.com/ycs77/jquery-plugin-c-share" class="btn btn-outline-light btn-lg">
        <i class="fab fa-github"></i>
        Github
      </a>
    </div>
  </header>

  <div class="container my-5 text-center">
    <h2>Install:</h2>
    
    <div>
      <pre><code class="bash">$ npm install jquery-plugin-c-share</code></pre>
      <div>or</div>
      <pre><code class="bash">$ yarn add jquery-plugin-c-share</code></pre>
    </div>
  </div>

  <div class="container my-5">
    <h2 class="text-center">Example:</h2>

    <div class="my-5">
      <div class="mb-3">
        <div id="shareBlock"></div>
      </div>

      <pre><code class="js">$('#shareBlock').cShare({
  description: 'jQuery plugin - C Share buttons',
  showButtons: ['fb', 'line', 'plurk', 'weibo', 'twitter', 'tumblr', 'email']
});</code></pre>
    </div>

  <footer class="py-3 text-center">
    <a href="https://github.com/yangchenshin77/jquery-plugin-bsModal">
      <i class="fab fa-github mr-1"></i>
      Github
    </a>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
  <script src="js/jquery.c-share.js"></script>
  <script>
    hljs.initHighlightingOnLoad();

    $('#shareBlock').cShare({
      description: 'Kama - Share Blog...',
      showButtons: ['fb', 'line', 'plurk', 'weibo', 'twitter', 'tumblr', 'email']
    });
  </script>




















    

    <!-- Trigger/Open the Modal -->
<button onclick="document.getElementById('id01').style.display='block'"
class="w3-button">Open Modal</button>

<!-- The Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <p>Some text in the Modal..</p>
      <p>Some text in the Modal..</p>
    </div>
  </div>
</div>

<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    <button type="button" class="btn btn-lg btn-primary">Show myModal</button>
 
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>This is a simple Bootstrap modal. Click the "Cancel button", "cross icon" or "dark gray area" to close or hide the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>




<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<button id="button">open the dialog</button>
<div id="dialog">

</div>

<form action="demo_form.asp" method="get">
  First name:
  <input type="text" name="fname">
  <br> Last name:
  <input type="text" name="lname">
  <br>
  <input type="submit" value="Submit">
</form>

<script>
    $("#button").click(function() {
  $("form").dialog({
    appendTo: '#dialog',
    title: "Dialog Title"
  });
});



 $(document).ready(function(){
        $(".btn").click(function(){
            $("#myModal").modal('show');
        });

        $(".close").click(function(){
            $("#myModal").modal('hide');
        });
    });
</script>
</body>
</html>
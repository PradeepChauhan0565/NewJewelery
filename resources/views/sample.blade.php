
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
  <style>

      .kama-btn{
        border: 2px solid blue;
        background-color: rgb(14, 14, 83); 
        color:white;
      }
      .kama-btn:hover{
        background-color: white;
        color:blue;
        
      }
    </style>


  </head>
  <body>
    
 









    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    <!-- Button trigger modal -->
    
        <div class="position-fixed   "style="bottom: 90px; right:10px;">
          <div class="center position-relative  mb-4 " >
              <button class="chatbtn " style="color:white; background-color:#08223c;border-radius:50% ; height:35px;width:55px; padding:5px; margin-left:10px; border:1px solid gray; cursor:pointer;">Help?</button>
                       
                    <section class="position-absolute  left-0 togchat" style="bottom:50px;display:none;margin-left:10px; z-index:1001 !important;">
                        <div class=" mb-3 d-flex align-items-center justify-content-center" style=" background-color:#08223c ; padding:7px; border-radius:50%;height:35px; width:35px;cursor:pointer">
                            <a href="" style="color:white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg></a>
                            
                        </div>
                    
                        <div class="mb-3 d-flex align-items-center justify-content-center" style="color:white; background-color:#08223c ; padding:7px; border-radius:50%; height:35px; width:35px; cursor:pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                            </svg>
                        </div>
                        
                        <div  class="d-flex align-items-center justify-content-center" style="color:white; background-color:#08223c ; padding:7px; border-radius:50%; height:35px; width:35px; cursor:pointer">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg></button >
                        </div>
                        
                                                      
                            
                   

                

                    </section>
                   
                                   
                                                                            
                    
          <script>
          $('#modalopen').click(function() {
                $('.modal').slideToggle('slow');
                
            });
              $('.chatbtn').click(function() {
                $('.togchat').slideToggle('slow');
                
            });
            
          $('.chatbtn').click(function(){
              $(this).toggleClass("");
            });
            $(".chatbtn").click(function () {
            $(this).text(function(i, v){
               return v === 'Help?' ? 'X' : 'Help?'
            });
            });
                
                click = 0;
                    $(".chatbtn").click(function () {
                        if (click == 0) {
                            $(".chatbtn").css("width", "35px");
                            click = 1;
                        } else {
                            $(".chatbtn").css("width", "55px");
                            click = 0;
                        }
                    });
        
          </script>
          </div>
    </div>
  











 <div style="background-color: gray;">
  <div class="container-1 py-5" >
    <div class="p-4  " style="background-color: white;">
    <div class=" h-50   " >
      <div class=" d-flex align-items-center justify-content-end border">
      <div class="col-lg-3 text-center">
          <h5 class="py-4 "style="color:rgb(14, 14, 83);;">kamajewelry</h5>
          <a href="{{asset('/samplebody')}}"><button class="px-4 py-3 kama-btn">VIEW THE LOOK</button></a>
      </div>
      <div class="col-lg-9 " >
          <img src="images/woman.png" alt="" style="width: 100%; height:100%; ">
      </div>
    </div>
    </div>
  </div>
  </div>
 </div>
    </body>
  </html>


<!DOCTYPE html>
<html>

<head>
    <title>Laravel Ajax Loading Spinner Example - ItSolutionStuff.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-10 offset-1 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Laravel Ajax Loading Spinner Example - ItSolutionStuff.com</h3>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="#" id="postForm">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Title:</strong>
                                        <input type="text" name="title" class="form-control" placeholder="Title"
                                            value="{{ old('title') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Body:</strong>
                                        <textarea name="body" rows="3" class="form-control" required>{{ old('body') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-success btn-submit">&nbsp; Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    &nabla;<br>
    &nacute;<br> &nang;<br> &nbump;<br> &nap; <br> &napE; <br> &napprox; <br>&naturals; <br>&backcong; <br>&agrave;

    {{-- <button  id="subscribbtn" class="btn px-3 py-2 mt-4 bg-white submit" type="submit">
                                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true" style="color:#00263a;"></span>                 
                                    <span class="btn-txt">Subscribe</span>
                                     </button> --}}
    <script>
        $("#subscribForm").submit(function(e) {
            $(".spinner-border").removeClass("d-none");
            $(".submit").attr("disabled", true);
            $(".btn-txt").text("Please wait ...");

            e.preventDefault();

            var form = $(this);
            var actionUrl = form.attr('action');

            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(),
                success: function(data) {
                    $('#newsletter').text(data);
                    $('#exampleModalCenter').modal('toggle');
                    $("#subscribForm")[0].reset();
                    $(".spinner-border").addClass("d-none");
                    $(".submit").attr("disabled", false);
                    $(".btn-txt").text("Subscribe");
                }
            });

        });
        $('#closesubscribe').click(function() {
            $('#exampleModalCenter').modal('hide');

        });
    </script>



</body>

<script type="text/javascript">
    $("#postForm").submit(function(e) {
        e.preventDefault();

        /*------------------------------------------
        --------------------------------------------
        Add Loading Spinner to Button
        --------------------------------------------
        --------------------------------------------*/
        $(".btn-submit").prepend('<i class="fa fa-spinner fa-spin"></i>');
        $(".btn-submit").attr("disabled", 'disabled');

        $.ajax({
            url: "https://jsonplaceholder.typicode.com/posts",
            type: "POST",
            data: {
                title: $("input[name='title']").val(),
                body: $("textarea[name='body']").val()
            },
            dataType: 'json',
            success: function(result) {
                console.log(result);

                /*------------------------------------------
                --------------------------------------------
                Remove Loading Spinner to Button
                --------------------------------------------
                --------------------------------------------*/
                $(".btn-submit").find(".fa-spinner").remove();
                $(".btn-submit").removeAttr("disabled");
            }
        });
    });
</script>

</html>

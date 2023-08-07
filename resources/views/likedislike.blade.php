<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

      {{-- ----------jquery------- --}}
       <script src="https://code.jquery.com/jquery-3.6.1.min.js"
       integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</head>
{{-- https://projectsplaza.com/create-like-dislike-system-with-laravel-jquery-ajax/ --}}
<body>


     <h5 class="card-header">Comments 
            <span class="comment-count btn btn-sm btn-outline-info">{{ count($post->comments) }}</span>
            <small class="float-right">
                <span title="Likes" id="saveLikeDislike" data-type="like" data-post="{{ $post->id}}" class="mr-2 btn btn-sm btn-outline-primary d-inline font-weight-bold">
                    Like
                    <span class="like-count">{{ $post->likes() }}</span>
                </span>
                <span title="Dislikes" id="saveLikeDislike" data-type="dislike" data-type="dislike" data-post="{{ $post->id}}" class="mr-2 btn btn-sm btn-outline-danger d-inline font-weight-bold">
                    Dislike
                    <span class="dislike-count">{{ $post->dislikes() }}</span>
                </span>
            </small>
            </h5>



<script>

// Save Like Or Dislike
$(document).on('click','#saveLikeDislike',function(){
    var _post=$(this).data('post');
    var _type=$(this).data('type');
    var vm=$(this);
    // Run Ajax
    $.ajax({
        url:"{{ url('save-likedislike') }}",
        type:"post",
        dataType:'json',
        data:{
            post:_post,
            type:_type,
            _token:"{{ csrf_token() }}"
        },
        beforeSend:function(){
            vm.addClass('disabled');
        },
        success:function(res){
            if(res.bool==true){
                vm.removeClass('disabled').addClass('active');
                vm.removeAttr('id');
                var _prevCount=$("."+_type+"-count").text();
                _prevCount++;
                $("."+_type+"-count").text(_prevCount);
            }
        }   
    });
});
// End
</script>
</body>
</html>
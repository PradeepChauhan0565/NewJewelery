<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        
/* #rangeValue {
    position: relative;
    text-align: center;
    width: 80px;
    font-size: 1.25em;
    color: #fff;
    background: #27a0ff;
    margin-left: 15px;
    border-radius: 25px;
    font-weight: 500;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1), -5px -5px 10px #fff, inset 5px 5px 10px rgba(0, 0, 0, 0.1), inset -5px -5px 5px rgba(255, 255, 255, 0.05);
} */

.middle {
    position: relative;
    width: 100%;
    /* max-width: 500px; */
    margin-top: 50px;
    display: inline-block;
}

.slider {
    position: relative;
    z-index: 1;
    height: 8px;
   margin: 0 10px;
}

.slider>.track {
    position: absolute;
    z-index: 1;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    border-radius: 5px;
    background-color: #cfe0ec;
}

.slider>.range {
    position: absolute;
    z-index: 2;
    left: 0%;
    right: 0%;
    top: 0;
    bottom: 0;
    border-radius: 5px;
    background-color: #00263a;
}

.slider>.thumb {
    position: absolute;
    z-index: 3;
    width: 20px;
    height: 20px;
    background-color: #fff;
    border: 1px solid #00263a;
    border-radius: 50%;
}

.slider>.thumb.left {
    left: 0%;
    transform: translate(-10px, -6px);
}

.slider>.thumb.right {
    right: 0%;
    transform: translate(10px, -6px);
}

.range_slider {
    position: absolute;
    pointer-events: none;
    -webkit-appearance: none;
    z-index: 2;
    height: 10px;
    width: 100%;
    opacity: 0;
}

.range_slider::-webkit-slider-thumb {
    pointer-events: all;
    width: 20px;
    height: 20px;
    border-radius: 0;
    border: 0 none;
    background-color: red;
    cursor: pointer;
    -webkit-appearance: none;
}


    </style>
</head>
<body>
<div class="container">   
<div class="row g-4">
    <div class="col-md-12 bg-info">
        <h2 class="text-center"> Product Filter With Price Range Slider</h2>
    </div>
    <div class="col-lg-6 mb-3">
        <div class="middle">
            <div class="d-flex justify-content-between ">
                @php 
                        $mintotal=App\Models\ProductFilter::orderBy('price','asc')->get();
                        $maxtotal=App\Models\ProductFilter::orderBy('price','desc')->get();
                        $min_value = $mintotal[0];
                        $max_value = $maxtotal[0];

                       
                    @endphp

                <div id="left_value" style="border: 1px solid #00263a; padding:4px 20px; border-radius:5px;">{{$min_value->price}}</div> 
                <div id="right_value" style="border: 1px solid #00263a; padding:4px 20px; border-radius:5px;">{{$max_value->price}}</div>
            </div>
           
            <div class="multi-range-slider my-4">
                <div class="d-flex justify-content-between">
                     <input type="range" id="input_left" class="range_slider" min="{{$min_value->price}}" max="{{$max_value->price}}" value="{{$min_value->price}}" onmousemove="left_slider(this.value)">
                    <input type="range" id="input_right" class="range_slider" min="{{$min_value->price}}" max="{{$max_value->price}}" value="{{$max_value->price}}" onmousemove="right_slider(this.value)">
                
                </div>
               
                <div class="slider">
                    <div class="track"></div>
                    <div class="range"></div>
                    <div class="thumb left"></div>
                    <div class="thumb right"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mt-4 pt-2">
        <div class="middle">
            <div class="multi-range-slider my-2">
                <select name="sort_by" id="sort_by" class="form-control">
                    <option value="">Sort By</option>
                    <option value="highest_price">Highest Price</option>
                    <option value="lowest_price">Lowest Price</option>
                </select>
            </div>
        </div>
    </div>
                    

    <div class="col-12">
        <div class="search-result">
            @if($all_products->count() >=1)
                <div class="row">
                 

                    @foreach($all_products as $product)
                        <div class="col-md-3 my-2">
                            <div class="card" >
                                <img src="{{ asset('images/'.$product->image) }}" class="card-img-top" style="height:250px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <h4 class="btn btn-dark">Price ${{ $product->price }}</h4>
                                </div>
                            </div>
                        </div>

                        
                    @endforeach
            @else
                    <div class="col-md-12 my-5 text-center">
                        <h2>Nothing Found</h2>
                    </div>
                <div>
            @endif
    </div>
    </div>
</div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="{{ asset('js/script.js') }}"></script>
     <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
     </script>
     <script>
        //use
        $(document).ready(function(e){
           $('.range_slider').on('change',function(){
               let left_value = $('#input_left').val();
               let right_value = $('#input_right').val();
               // alert(left_value+right_value);
               $.ajax({
                   url:"{{ route('search.products') }}",
                   method:"GET",
                   data:{left_value:left_value, right_value:right_value},
                   success:function(res){
                      $('.search-result').html(res);
                   }
               });
           });
           //use
           $('#sort_by').on('change',function(){
               let sort_by = $('#sort_by').val();
               $.ajax({
                   url:"{{ route('sort.by') }}",
                   method:"GET",
                   data:{sort_by:sort_by},
                   success:function(res){
                       $('.search-result').html(res);
                   }
               });
           });
        })




        const input_left = document.getElementById("input_left");
const input_right = document.getElementById("input_right");

const thumb_left = document.querySelector(".slider > .thumb.left");
const thumb_right = document.querySelector(".slider > .thumb.right");
const range = document.querySelector(".slider > .range");

const set_left_value = () => {
    const _this = input_left;
    const [min, max] = [parseInt(_this.min), parseInt(_this.max)];

    _this.value = Math.min(parseInt(_this.value), parseInt(input_right.value) - 1);

    const percent = ((_this.value - min) / (max - min)) * 100;
    thumb_left.style.left = percent + "%";
    range.style.left = percent + "%";
};

const set_right_value = () => {
    const _this = input_right;
    const [min, max] = [parseInt(_this.min), parseInt(_this.max)];

    _this.value = Math.max(parseInt(_this.value), parseInt(input_left.value) + 1);

    const percent = ((_this.value - min) / (max - min)) * 100;
    thumb_right.style.right = 100 - percent + "%";
    range.style.right = 100 - percent + "%";
};

input_left.addEventListener("input", set_left_value);
input_right.addEventListener("input", set_right_value);

function left_slider(value) {
    document.getElementById('left_value').innerHTML = value;
}
function right_slider(value) {
    document.getElementById('right_value').innerHTML = value;
}
     </script>
</body>
</html>
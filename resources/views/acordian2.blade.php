<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .accordion-title:before {
    float: right !important;
    font-family: FontAwesome;
    content:"\f068";
    padding-right: 5px;
}
.accordion-title.collapsed:before {
    float: right !important;
    content:"\f067";
}
.card-header{
  background-color: #fff;
   border-bottom: 1px solid rgb(141, 65, 65);
}
.card{
  border: none;
}

.collapseborder{
  border-bottom: 1px solid rgb(241, 240, 240);
}
    </style>
</head>
<body>
    <div class="container">
  <h2>Accordion Example</h2>
<div id="accordion">

  <div class="card">
    <div class="card-header">
      <a class="card-link accordion-title" data-toggle="collapse" href="#collapseOne" style="color:#00263a;">
        Collapsible Group Item #1
      </a>
    </div>
    <div id="collapseOne" class="collapse show collapseborder" data-parent="#accordion">
      <div class="card-body">
       Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto ipsum voluptates totam quas obcaecati dolores! Adipisci, dicta inventore. Tenetur porro odio voluptate laboriosam facere pariatur aperiam consectetur nihil enim dolor.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseTwo" style="color:#00263a;">
        Collapsible Group Item #2
      </a>
    </div>
    <div id="collapseTwo" class="collapse collapseborder" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi adipisci earum quas recusandae. Natus voluptates fugit deleniti soluta placeat maxime eveniet impedit quis provident a, facere accusamus corrupti. Rem, quidem!
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseThree" style="color:#00263a;">
        Collapsible Group Item #3
      </a>
    </div>
    <div id="collapseThree" class="collapse collapseborder" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum repellat ex vitae hic fuga harum cum, numquam nisi temporibus incidunt ea dolore possimus voluptatibus perspiciatis dolor rem maiores deleniti?
      </div>
    </div>
  </div>

</div>
</div>
</body>
</html>
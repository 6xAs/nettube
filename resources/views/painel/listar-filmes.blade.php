@include('template-painel.head')

@include('template-painel.top')

@include('template-painel.menu')

@include('template-painel.content-main')

@section('title', 'Listar Filme')


<!--gallery-->
<div class="gallery">
    @if(Session::has('message'))
        <div class="alert alert-success">
              <button type="button" class="btn btn-success warning_2" data-dismiss="alert" aria-hidden="true">×</button>
              {!! Session::get('message') !!}
              <a href="inserir-filme" class="alert-link">Inserir outro Filme?</a>
        </div>
    @endif
   <div class="col-md">
       <div class="gallery-img">
       <a href="images/ga.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
            <img class="img-responsive " src="images/ga.jpg" alt="" />
               <span class="zoom-icon"> </span> </a>
       </a>
       </div>
       <div class="text-gallery">
           <h6>Lorem ipsum</h6>
       </div>
   </div>
   <div class="col-md">
       <div class="gallery-img">
       <a href="images/ga1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
            <img class="img-responsive " src="images/ga1.jpg" alt="" />
               <span class="zoom-icon"> </span> </a>
       </a>
       </div>
       <div class="text-gallery">
           <h6>Lorem ipsum</h6>
       </div>
   </div>
   <div class="col-md">
       <div class="gallery-img">
       <a href="images/ga2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
            <img class="img-responsive " src="images/ga2.jpg" alt="" />
               <span class="zoom-icon"> </span> </a>
       </a>
       </div>
       <div class="text-gallery">
           <h6>Lorem ipsum</h6>
       </div>
   </div>
   <div class="col-md">
       <div class="gallery-img">
       <a href="images/ga3.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
            <img class="img-responsive " src="images/ga3.jpg" alt="" />
               <span class="zoom-icon"> </span> </a>
       </a>
       </div>
       <div class="text-gallery">
           <h6>Lorem ipsum</h6>
       </div>
   </div>
   <div class="col-md">
       <div class="gallery-img">
       <a href="images/ga4.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
            <img class="img-responsive " src="images/ga4.jpg" alt="" />
               <span class="zoom-icon"> </span> </a>
       </a>
       </div>
       <div class="text-gallery">
           <h6>Lorem ipsum</h6>
       </div>
   </div>
   <div class="col-md">
       <div class="gallery-img">
       <a href="images/ga5.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
            <img class="img-responsive " src="images/ga5.jpg" alt="" />
               <span class="zoom-icon"> </span> </a>
       </a>
       </div>
       <div class="text-gallery">
           <h6>Lorem ipsum</h6>
       </div>
   </div>
   <div class="col-md">
       <div class="gallery-img">
       <a href="images/ga6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
            <img class="img-responsive " src="images/ga6.jpg" alt="" />
               <span class="zoom-icon"> </span> </a>
       </a>
       </div>
       <div class="text-gallery">
           <h6>Lorem ipsum</h6>
       </div>
   </div>
   <div class="col-md">
       <div class="gallery-img">
       <a href="images/ga7.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
            <img class="img-responsive " src="images/ga7.jpg" alt="" />
               <span class="zoom-icon"> </span> </a>
       </a>
       </div>
       <div class="text-gallery">
           <h6>Lorem ipsum</h6>
       </div>
   </div>
   <div class="col-md">
       <div class="gallery-img">
       <a href="images/ga8.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
            <img class="img-responsive " src="images/ga8.jpg" alt="" />
               <span class="zoom-icon"> </span> </a>
       </a>
       </div>
       <div class="text-gallery">
           <h6>Lorem ipsum</h6>
       </div>
   </div>
   <div class="col-md">
       <div class="gallery-img">
       <a href="images/ga2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
            <img class="img-responsive " src="images/ga2.jpg" alt="" />
               <span class="zoom-icon"> </span> </a>
       </a>
       </div>
       <div class="text-gallery">
           <h6>Lorem ipsum</h6>
       </div>
   </div>
   <div class="col-md">
       <div class="gallery-img">
       <a href="images/ga4.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
            <img class="img-responsive " src="images/ga4.jpg" alt="" />
               <span class="zoom-icon"> </span> </a>
       </a>
       </div>
       <div class="text-gallery">
           <h6>Lorem ipsum</h6>
       </div>
   </div>
   <div class="col-md">
       <div class="gallery-img">
       <a href="images/ga1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
            <img class="img-responsive " src="images/ga1.jpg" alt="" />
               <span class="zoom-icon"> </span> </a>
       </a>
       </div>
       <div class="text-gallery">
           <h6>Lorem ipsum</h6>
       </div>
   </div>

    <div class="clearfix"> </div>
</div>
<!--//gallery-->

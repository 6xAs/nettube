@include('template-site.head')

@include('template-site.topo')

@include('template-site.menu')


@include('template-painel.content-main')


<!--gallery-filmes-->

   @foreach( $filme as $filme )
       <div class="col-md-3">
           <div class="gallery-img">
           <a href="{{URL::to('filmes/' .$filme->id. '/edit')}}" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
                <img class="img-responsive " src="img-filmes/{{$filme->image}}" alt="" />
                   <span class="zoom-icon"> </span> </a>
           </a>
           </div>
           <div class="text-gallery">
               <h6>{{$filme->nome}}</h6>
           </div>
       </div>
    @endforeach


    <div class="clearfix"> </div>
</div>

@include('template-site.footer')

<!--//gallery-->

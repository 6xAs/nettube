@include('template-site.head')

@include('template-site.topo')

@include('template-site.menu')


<!-- content main -->
<div class="main">
    <div class="wrap">
        <div class="section group">
          <div class="cont span_3_of_3">
            <h2 class="head">{{$filme->nome}}</h2>
                <div class="top-box">
                 <div class="col_1_of_6 span_1_of_6">
                   <a href="{{URL::to('filmes/' .$filme->id. '/assistir')}}">
                    <div class="inner_content clearfix">
                        <div class="product_image">
                            <img class="img-responsive "  src="img-filmes/{{$filme->image}}" alt="" />
                        </div>

                                   <iframe width="1200" height="650" src="{{ $filme->link }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                         </div>
                       </div>
                     </a>
                    </div>

                </div>

          </div>

               <div class="clear"></div>
            </div>
        </div>
    </div>


@include('template-site.footer')

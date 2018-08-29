<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h2 class="modal-title">Deletar Filme</h2>
                       </div>
                       <div class="modal-body">
                           <h2>Deletar Filme</h2>
                           <div class="form-group">

                                <img id="mostra" src="/../img-filmes/{{ $filme->image }}" width="200" height="300" alt="" />

                           </div>
                           <p>Gostaria mesmo de deletar este filme?</p>

                       </div>
                       <div class="modal-footer">
                               <!-- Form para deletar isto -->
                               {!! Form::open(['route'=> ['deletarfilme.destroy', $filme->id],'method'=>'DELETE']) !!}

                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                     {!!Form::submit('DELETAR', ['class' => 'btn btn-danger', 'data' => 'modal'])!!}

                              {!! Form::close() !!}

                       </div>
                   </div><!-- /.modal-content -->
               </div><!-- /.modal-dialog -->
           </div>

<div class="row">
                        <div class="col-6">
                        
                            @if(!empty($prev))                            
                            <a href="rege/{{$prev->slug}}" class="btn btn-outline-success btn-sm btn-block" >
                                &#171; Anterior{{$prev->id}} 
                            </a>
                            <p>{{$prev->nombre}}</p>
                            @endif
                        </div>
                        <div class="col-6 text-right">                            
                            @if(!empty($next))                            
                            <a href="rege/{{$next->slug}}" class="btn btn-outline-success btn-sm btn-block" >
                               siguiente{{$next->id}} &#187;
                            </a>
                            <p class="text-right">{{$next->nombre}}</p>
                            @endif
                        </div>
</div>    
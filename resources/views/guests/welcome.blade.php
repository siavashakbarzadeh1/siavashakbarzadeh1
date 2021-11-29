@extends('layouts.guest')
@section('content')
    <section id="intro" class="container px-2 my-2" id="total">
        <div class="row">
            <div class="col-lg-12 px-lg-2 py-lg-1">

                    <h2>Benvenuto</h2>


            </div>
        </div>
    </section>
    <!-- Include Navigation -->

    <!-- End Include Navigation -->
    <section id="in-evidenza mt-1">
        <div class="bg-100 py-5">
            <div class="container px-4">
                <div class="row">
                    <div class="col">
                        <h3 class="mb-4 text-primary">Domande d'iscrizione in corso</h3>
                    </div>
                </div>
                <div class="row">
                    @if(isset($events) && count($events) > 0 )
                        @foreach($events as $event)
                            <div class="col-12 col-sm-12 col-lg-6 col-md-12">
                                <!--start card-->
                                @if($errors->any())
                                    <h4>{{$errors->first()}}</h4>
                                @endif
                                <form action="{{route('order.store')}}" method="post">
                                    @csrf
                                    <article class="card-wrapper card-space w-60 mr-3 ml-3 mt-3 ">
                                        <input type="hidden" value="" name="user_name">
                                        <input type="hidden" value="{{$event->name}}" name="event_name">
                                        <input type="hidden" value="{{$event->id}}" name="event_id">
                                        <input type="hidden" value="" name="user_id">
                                        <input type="hidden" name="order_date_time" value="{{date('Y-m-d H:i:s')}}">
                                        <div class="card card-info card-big rounded  shadow">
                                            <div class="flag-icon invisible"></div>
                                            <div class="etichetta">
                                                <svg class="icon">
                                                    <use xlink:href="/svg/sprite.svg#it-calendar"></use>
                                                </svg>
                                                <span>Status</span>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">{{$event->name}} </h5>
                                                <div>
                                                    <small class="card-subtitle mb-2 text-muted">Event Description</small>
                                                </div>
                                                <p class="card-text mt-2">{{$event->welcome_description}}</p>
                                                <div class="mt-4 pt-5">
                                                    <p class="card-text"><small class="text-muted">Publised:<span class="pl-2">{{$event->open_time}}</span></small></p>
                                                </div>
                                                <div>
                                                    <p class="card-text"><small class="text-muted">Expired:<span class="pl-2">{{$event->close_time}}</span></small></p>
                                                </div>

                                                <a href="{{route('enterlog')}}"class="btn btn-primary  mt-5 btn-block"  style="border-radius:5px;">Accedi</a>
                                            </div>
                                        </div>
                                    </article>
                                </form>

                                <!--end card-->
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@stop

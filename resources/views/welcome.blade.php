<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/userview.css')}}">

        <!-- Styles -->
        <style>

            </style>

    </head>
    <body id="hi">


            {{-- <img src="{{asset('image/corona.jpg')}}" class="card-img" alt="..." > --}}
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container m-4">
                  <a class="navbar-brand text-light fs-3" href="#">COVID-19 STAT REPORT</a>
                  {{-- <img src="{{asset('image/corona.png')}}" alt="Bootstrap" width="80" height="54"> --}}
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
                        <li class="nav-item text-light">

                            <a class="nav-link active text-light  btn btn-success" aria-current="page" href="{{ url('/helpGuide') }}">Help & Guide</a>
                          </li>

                    </ul>



                  </div>
                </div>
              </nav>
        </div>


                 <div class="container mt-5 ">

                    <div class="row ">
                        @foreach ($data as $datas)

                        @endforeach

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Local Details</button>
                              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Global Details</button>


                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

                         <div class="row mt-5">

                                <div class="col-md-3 mb-5">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                          <h5 class="fs-1 counter text-light">{{$datas->local_new_cases}}</h5>
                                          <h1 class="fs-2 text-white">Local New Cases</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                          <h5 class="fs-1 counter text-white">{{$datas->local_total_cases}}</h5>
                                          <h1 class="fs-2 text-white">Local Total Cases</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="card bg-transparent">
                                        <div class="card-body ">

                                          <h5 class="fs-2 counter text-white">{{$datas->local_total_number_of_individuals_in_hospitals}}</h5>
                                          <h1 class="fs-3 text-white">Local Total No of <br>
                                            Individuals in Hospitals</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                          <h5 class="fs-1 counter text-white">{{$datas->local_deaths}}</h5>
                                          <h1 class="fs-2 text-white ">Local Deaths</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="card bg-transparent">
                                        <div class="card-body ">
                                          <h5 class="fs-1 counter text-white">{{$datas->local_new_deaths}}</h5>
                                          <h1 class="fs-2 text-white">Local New Deaths</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                          <h5 class="fs-1 counter text-white">{{$datas->local_recovered}}</h5>
                                          <h1 class="fs-2 text-white">Local Recovered</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                          <h5 class="fs-1 counter text-white">{{$datas->local_active_cases}}</h5>
                                          <h1 class="fs-2 text-white">Local Active Cases</h1>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

                               <div class="row mt-5">
                                <div class="col-md-3 mb-5">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                          <h5 class="fs-1 counter text-white">{{$datas->global_new_cases}}</h5>
                                          <h1 class="fs-2 text-white">Global New Cases</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                          <h5 class="fs-1  counter text-white">{{$datas->global_total_cases}}</h5>
                                          <h1 class="fs-2 text-white">Global Total Cases</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="card bg-transparent">
                                        <div class="card-body ">
                                          <h5 class="fs-1 counter text-white">{{$datas->global_deaths}}</h5>
                                          <h1 class="fs-2 text-white">Global Deaths</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                          <h5 class="fs-1 counter text-white">{{$datas->global_new_deaths}}</h5>
                                          <h1 class="fs-2 text-white">Global New Deaths</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5 ">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                          <h5 class="fs-1 counter text-white">{{$datas->global_recovered}}</h5>
                                          <h1 class="fs-2 text-white">Global Recovered</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                          <h5 class="fs-1 counter text-white">{{$datas->total_pcr_testing_count}}</h5>
                                          <h1 class="fs-2 text-white">Total Pcr Testing Count</h1>

                                        </div>
                                    </div>
                                </div>


                               </div>
                               {{-- global deatail end  --}}



                            </div>



                    </div>
                 </div>



{{-- scripts  --}}
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}" ></script>


{{-- counter  --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<script
src="	https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
{{-- counter end --}}

<script>
    $('.counter').counterUp({
    delay: 10,
    time: 1000
});
</script>


    </body>
</html>

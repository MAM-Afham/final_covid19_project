@extends('layouts.app')
@section('content')

<div class="card text-bg-dark mt-0 shadow-none" style="border-radius:0; border:none">
    <img src="{{asset('image/corona7.jpg')}}" class="card-img shadow-none" id="cimg" alt="..." height="350px" style="border-radius:0; border:none">
    <div class="card-img-overlay" style="margin-top:100px; ">
        <div class="container">
        <div>
            <img src="{{asset('image/corona.png')}}"  alt="" height="84px" width="80px" class="c19">
        </div>
      <h5 class="fs-1"> Coronavirus</h5>
      <p>Shared knowledge and experiences regarding COVID-19</p>
      <p class="card-text"><small>{{$users->count()}}  Contributors    </small></p>
       </div>
    </div>
  </div>

  <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 ">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">About</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Posts</button>
                </li>

              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <h4 class="mt-3">Details</h4>
                    <div class="card">
                        <div class="card-body">
                           <p class="card-text">
                            For the most current updates and information,
                           </p>
                           <p class="card-text">
                            More information available from Johns Hopkins Medicine & University at <a href="https://coronavirus.jhu.edu/">Johns Hopkins Coronavirus Resource Center</a>
                           </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <h6 class="mt-3"><i class="fa fa-line-chart"></i> Top
                        <a href="{{ url('/home')}}" class="btn btn-success btn-sm float-end">Add Post</a>

                    </h6>
                    @foreach($helpGuids as $helpGuide)
                    <div class="card mt-4">
                         <div class="card-header">
                         <span class="fs-5"> <i class="fa fa-user"></i> {{$helpGuide->username}}</span>
                         {{-- <span class="fs-5"> {{$helpGuide->created_at}}</span> --}}
                         <span class="fs-7 float-end">{{date('Y-F-d',strtotime($helpGuide->created_at))}}</span>



                         </div>
                        <div class="card-body">
                            {{-- <h5 class="card-title">Title</h5> --}}
                            <p class="card-text">{{$helpGuide->description}}</p>
                            <a id="link"  target="_blank"  href="{{$helpGuide->link}}">{{$helpGuide->link}}</a>

                        </div>
                    </div>
                {{-- {{ $helpGuids->links() }} --}}

                    @endforeach
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{$users->count()}} Contributors
                        <a href="" class="float-end text-secondary" data-bs-toggle="modal" data-bs-target="#viewall">View all</a>
                    </h5>

                </div>
                <div class="card-body">
                    @foreach ($users as $user)

                    <p class="card-text"> <i class="fa fa-user"></i>  {{ $user->name }}</p>
                    @endforeach

                </div>
            </div>

        </div>
     </div>
  </div>
  <div class="modal fade" id="viewall" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$users->count()}} Contributors</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @foreach ($users as $user)

            <p class="card-text"> <i class="fa fa-user"></i>  {{ $user->name }}</p>
            @endforeach

        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container " style="margin-top:80px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>ADD HELP & GUIDE</h4>
                    @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="close"></button>
                        {{ session('message') }}
                    </div>
                    @endif

                          {{-- {{ __('“Help guide”') }} --}}
                </div>

                <div class="card-body">
                 <form action="{{url('/help-guide')}}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <label for="">Link</label>
                        <input type="text" class="form-control" name="link">
                        @error('link')
                            <Span class="text-danger">{{$message}}</Span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <label for="">Description</label>
                        <textarea  rows="4" class="form-control" name="description"></textarea>
                        @error('description')
                        <Span class="text-danger">{{$message}}</Span>
                         @enderror
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-success" type="submit">Add</button>
                    </div>

                 </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@push('css')

@endpush
@section('content')

<body>
    <div class="container" style="margin-top: 1rem;">
        <!-- Modal -->
        @foreach($data_post as $data)
        @if ($data->id_user == Auth::user()->id)
        <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> {{$data->desc_image}} &nbsp;</h5>
                        <a href="{{ url('/postimage/edit/'.$data->id) }}" class="card-link">
                            <ion-icon size="large" name="pencil-outline"></ion-icon>
                        </a>
                        <form action="{{route('postimage.destroy', $data->id)}}" method="post">
                            
                            @csrf @method('POST')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are You Sure ?')">
                                <ion-icon size="large" name="trash-outline"></ion-icon>
                                </ion-icon>
                            </button>
                            
                        </form>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('storage/'.$data->path_image)}}" class="card-img-top"
                            style=" background-size: 100% 100%; max-width: 100%; max-height: 100%; display : block;"
                            alt="...">
                        <hr>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                            List of Comment
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="list-group">
                                <br>
                                @foreach($data_post2 as $data2)
                                @if ($data2->id_user == Auth::user()->id && $data->id == $data2->post_image_id )
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{$data2->comment}}
                                    <span class="badge badge-primary badge-pill">{{$data2->created_at}}</span>
                                    <span class="badge badge-info badge-pill">{{Auth::user()->name}}</span>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>

                    </div>
                    <form action="{{route('postphoto.store')}}" method="post">
                        @csrf @method('POST')
                        <div class="modal-footer">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                    </span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea" required
                                    name="comment"></textarea>
                                <input style="display:none" value="{{$data->id}}" required name="post_image_id">
                                </input>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach


    <div class="card">
        <div class="card-header ">
            <div class="row">
                <div class="col-2">
                    <a href="{{ url('/postimage/create') }}" type="button" class="btn btn-info">
                        <ion-icon name="add-circle-outline"></ion-icon> Upload Image
                    </a>
                </div>
                <div class="col-8 text-center">
                    <h5> Insta App - PT SEVIMA 2020</h5>
                </div>

                <div class="col-2">
                    <!-- <button type="button" class="btn btn-danger">
                            <ion-icon name="log-out-outline"></ion-icon> Logout
                        </button> -->
                </div>
            </div>


        </div>

        <div class="row row-cols-4">
            @foreach($data_post as $data)
            @if ($data->id_user == Auth::user()->id)
            <div class="col">
                <div class="card" style="margin:inherit">
                    <img src="{{asset('storage/'.$data->path_image)}}" class="card-img-top"
                        style=" background-size: 100% 100%; max-width: 100%; max-height: 100%; display : block;"
                        alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <a href="#" data-toggle="modal" data-target="#exampleModal{{$data->id}}"
                                    class="card-link">
                                    <ion-icon size="large" name="eye-outline"></ion-icon>
                                </a>

                            </div>
                            <div class="col-4">
                                <a href="{{ url('/postimage/addlike/'.$data->id.'/'.$data->like_image) }}"
                                    class="card-link">
                                    <ion-icon size="large" name="heart-circle-outline"></ion-icon>
                                </a>
                            </div>
                            <div class="col-4">
                                <span class="badge badge-danger">
                                    <ion-icon size="small" name="heart-circle-outline"></ion-icon></a>

                                    {{$data->like_image}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <br>
        </div>
    </div>
</body>
@endsection

@push('js')

@endpush
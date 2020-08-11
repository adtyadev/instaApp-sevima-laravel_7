@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload Image</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'postimage.store', 'method'=> 'post', 'files' => true]) !!}

                    <div class="form-group">
                        <label for=""> Desc Image ( max 20 char )</label>
                        {!! Form::text('desc_image', null, ['class' => $errors->has('desc_image') ? 'form-control is-invalid' : 'form-control'])!!}
                        @error('desc_image')
                        <span class="invalid-feedback" role='alert'>
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group increment">
                        <label for=""> Photo </label>
                        <div class="input-group">
                            <input type="file" name="photo[]" class="form-control">
                        </div>
                    </div>
                    @if($errors->has('photo'))
                    <ul class="alert alert-danger">
                        @foreach($errors->get('photo') as $errors)
                        <li> {{$errors}}</li>
                        @endforeach
                    </ul>
                    @endif
                    <button type="submit" class="btn btn-primary">Submit</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('script')
    <script>
        window.action = "submit"
        $(document).ready(function() {
            console.log("ready!");
        });
    </script>
    @endpush
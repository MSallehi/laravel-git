@extends('layouts.app')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{$error}} <br />
            @endforeach
        </div>
    @endif

    <form method="post" action="/posts" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">عنوان مطلب</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="عنوان مطلب">
        </div>
        <div class="form-group">
            <label for="description">توضیحات مطلب</label>
            <textarea type="text" name="description" class="form-control" id="description" rows="5" placeholder="توضیحات مطلب"></textarea>
        </div>
        <div class="form-group">
            <label for="files">تصویر اصلی</label>
            <input type="file" name="file" class="form-control" id="files">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">دخیره</button>
    </form>
@endsection
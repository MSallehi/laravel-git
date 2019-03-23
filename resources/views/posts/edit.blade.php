@extends('layouts.app')

@section('content')
    <h3>ویرایش مطلب</h3>
    @can('update', $post)
    <form method="post" action="/posts/{{ $post->id }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <label for="title">عنوان مطلب</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" placeholder="عنوان مطلب">
        </div>
        <div class="form-group">
            <label for="description">توضیحات مطلب</label>
            <textarea type="text" name="description" class="form-control" id="description" rows="5" placeholder="توضیحات مطلب">{{ $post->content }}</textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-warning">بروزرسانی</button>
    </form>
    <br>
    <form method="post" action="/posts/{{ $post->id }}">
        @csrf
        <div class="form-group">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" name="submit" class="btn btn-danger">حذف</button>
        </div>
    </form>
    @endcan
@endsection
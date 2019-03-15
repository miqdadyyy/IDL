@extends('admin.layouts.base')

{{--Page Title--}}

@section('title', 'Post')

{{--Custom CSS--}}

@section('css')

@endsection

{{--App Title--}}

@section('app-title', 'Tambah Post')
@section('app-description', '')

{{--Content--}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Create Post</h3>
                <form method="post" action="{{ route('admin.post.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="titlePost">Title Post</label>
                        <input class="form-control" id="titlePost" type="text" aria-describedby="titleHelp" name="title"
                               placeholder="Enter Title">
                        <small class="form-text text-muted" id="titleHelp">
                            For Post title
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="postDescription">Description</label>
                        <textarea class="form-control" name="description" rows="10"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Publish</button>
                </form>
            </div>
        </div>
    </div>
@endsection

{{--Custom Javascript--}}

@section('js')

@endsection
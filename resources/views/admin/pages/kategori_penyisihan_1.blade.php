@extends('admin.layouts.base')

{{--Page Title--}}

@section('title', 'Test TItle')

{{--Custom CSS--}}

@section('css')

@endsection

{{--App Title--}}

@section('app-title', 'Dashboard')
@section('app-description', 'Dashboard description')

{{--Content--}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="25%">Nama Tim</th>
                            <th width="40%">Desc</th>
                            <th width="7%">Author</th>
                            <th width="13%">Created at</th>
                            <th width="10%">Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        </tbody>

                    </table>
                    <form action="{{ route('admin.post.destroy', ['post' => -1]) }}" method="post" id="delete-form">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--Custom Javascript--}}

@section('js')
    <script>
        function deletePost($id){
            var c = confirm("Are you sure delete this post?");
            if(c == true){
                url = $('#delete-form').attr('action');
                url = url.substring(0, url.length-2) + $id;
                url = $('#delete-form').attr('action', url);
                // return;
                $('#delete-form').submit();
            } else {

            }
        }
    </script>
@endsection
@extends('admin.layouts.base')

{{--Page Title--}}

@section('title', 'Test TItle')

{{--Custom CSS--}}

@section('css')
    {{--<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">--}}
@endsection

{{--App Title--}}

@section('app-title', 'Peserta ' . $kategori->nama_kategori)
@section('app-description', 'Daftar peserta ' . $kategori->nama_kategori . ' tahap 1')

{{--Content--}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="tim-table">
                        <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="15%">Nama Tim</th>
                            <th width="20%">Ketua Tim</th>
                            <th width="%">Anggota</th>
                            <th width="10%">Submission</th>
                            <th width="10%">Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        </tbody>

                    </table>
                    <form action="{{ route('admin.tim.destroy', ['tim' => -1]) }}" method="post" id="delete-form">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

{{--Custom Javascript--}}

@section('js')
    {{--<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>--}}
    <script>
        function deletePost(id) {
            var c = confirm("Are you sure delete this tim?");
            if (c == true) {
                url = $('#delete-form').attr('action');
                url = url.substring(0, url.length - 2) + id;
                url = $('#delete-form').attr('action', url);
                // return;
                $('#delete-form').submit();
            } else {

            }
        }
    </script>

    <script>
        $(document).ready(function () {
            $('#tim-table').DataTable({
                processing: false,
                serverSide: true,
                responsive: true,
                ajax: "{{ route('admin.ajax.penyisihan1', ['kategori' => $kategori->id]) }}",
                columns: [
                    {data: 'no'},
                    {data: 'nama_tim'},
                    {
                        data: 'mahasiswa',
                        render: function (data, type, row) {
                            return "<a href='/admin/mahasiswa/" + data['nim'] + "'" + ">" + data['nama'] + "</a>"
                        }
                    },
                    {
                        data: 'pesertas',
                        render: function (data, type, row) {
                            content = "";
                            for (var i = 0; i < data.length; i++) {
                                content += "<a href='/admin/mahasiswa/" + data[i]['nim'] + "'" + ">" + data[i]['mahasiswa']['nama'] + "</a>";
                                content = i != data.length - 1 ? content += ", " : content;
                            }
                            return content;
                        }
                    },
                    {
                        data: 'submission',
                        render: function (data, type, row) {
                            if (data != null) {
                                return '<a href="/admin/ajax/download/' + data + '" class="align-items-center"><i class="fa fa-download" aria-hidden="true"></i></a>';
                            } else {
                                return "Belum Melakukan Submission";
                            }

                        }
                    },
                    {
                        data: 'id',
                        render: function (data, type, row) {
                            content = "<a href='/admin/tim/" + data + "/edit'" + "class='btn btn-info'>Edit</a>";
                            content += "<button onclick=\"deletePost(" + data + ")\" class=\"btn btn-danger\">Delete</button>";
                            return content;
                        }
                    }
                ]
            });
        });
    </script>


@endsection
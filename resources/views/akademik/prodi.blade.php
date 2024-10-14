@extends('layout.main')
{{-- @section('title', 'Data Prodi') --}}

@section('content')

<h1>Prodi</h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>
    @foreach ($prodis as $prodi)
    <tr>
        <td>{{ $prodis->firstItem()+$loop->index }} </td>
        <td> {{ $prodi->nama }}</td>

    </tr>
    @endforeach
</table>
{{ $prodis->links() }}
@endsection

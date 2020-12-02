@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <h1 class="mt-5 mb-3">Domains</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-nowrap">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last check</th>
                    <th>Status code</th>
                </tr>

    @foreach ($domains as $domain)
               <tr>
                   <td>{{ $domain->id }}</td>
                   <td><a href="{{ route('domains.show', $domain->id) }}">{{ $domain->name }}</a></td>
                   <td>{{ $domain->last_check ?? null }}</td>
                   <td>{{ $domain->status_code ?? null }}</td>
               </tr>
    @endforeach
            </table>
        </div>
    </div>
@endsection


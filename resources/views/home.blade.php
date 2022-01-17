@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Message</th>
                                                <th>Time Posted</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts As $key => $value)
                                            @if (Auth::user()->name == $value->username)
                                            <tr>                                            
                                                <td class="text-wrap" style="width: 35rem">{{ $value->content }}</td>
                                                <td>{{ $value->created_at }}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
                <div class="container bg-dark text-white p-5 my-5 border">
                        <div class="pt-6 pb-6 pl-6">
                                    <h2>Posts</h2>
                                    <table class="table text-white">
                                        <thead>
                                            <tr>
                                                <th>Message</th>
                                                <th>Time Posted</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts As $key => $value)
                                            <tr>                                            
                                                <td>{{ $value->content }}</td>
                                                <td>{{ $value->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                        </div>
                </div>
                <div class="container bg-dark p-5 my-5 border">
                        <div class="pt-6 pb-6 pl-6">
                                    <form method="post" action="/">
                                        <input type="text" name="content">
                                        <button type="submit" class="btn btn-success">Post</button>
                                        @csrf
                                    </form>
                        </div>
                </div>
    </body>
</html>

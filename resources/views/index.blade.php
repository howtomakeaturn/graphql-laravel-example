<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GraphQL Laravel Example</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.4.6/dist/base.min.css">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.4.6/dist/components.min.css">
        <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.1.2/dist/typography.min.css">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.4.6/dist/utilities.min.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-J0PKKVYBQ3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-J0PKKVYBQ3');
        </script>
    </head>
    <body>
        <div class="container mx-auto px-4 mt-4 mb-8 prose break-words">
            <h1>GraphQL Laravel Example</h1>
            <h2>A comprehensive example project to show how to use graphql + laravel in the real world!</h2>
            <p>I built a simple e-commerce site with React + GraphQL + Laravel!</p>
            <h3>🔥🔥React frontend example🔥🔥</h3>
            <p><a href="https://graphql-react-example.vercel.app/">https://graphql-react-example.vercel.app/</a></p>
            <h3>🔥🔥Try GraphiQL (the official IDE)🔥🔥</h3>
            <p><a href="{{ url('/graphiql') }}">{{ url('/graphiql') }}</a></p>
            <p>You should be able to build any apps with these examples & source code! 🎉🎉🎉</p>
            <h3>Notes</h3>
            <p>1. In real projects, you should only enable GraphiQL in the local environment.</p>
            <p>2. You can use <a href="https://github.com/howtomakeaturn/graphql-laravel-example/discussions">Github Discussions</a> if you have any questions.</p>
            <h3>Author</h3>
            <p>Made by Chuan-Hao, an experienced full-stack developer based in Taipei. </p>
            <p>If you need my consulting service, please visit: <a href="{{ url('/contact') }}">{{ url('/contact') }}</a></p>
            <h3>Source code</h3>
            <p><a href="https://github.com/howtomakeaturn/graphql-react-example">https://github.com/howtomakeaturn/graphql-react-example</a></p>
            <p><a href="https://github.com/howtomakeaturn/graphql-laravel-example">https://github.com/howtomakeaturn/graphql-laravel-example</a></p>
        </div>
    </body>
</html>

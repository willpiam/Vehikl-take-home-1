<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Oil Change Check')</title>
    <style>
        body {
            font-family: Georgia, "Times New Roman", serif;
            max-width: 40rem;
            margin: 2rem auto;
            padding: 0 1rem;
            line-height: 1.5;
            color: #1a1a1a;
            background: #f7f7f5;
        }
        h1 {
            font-size: 1.75rem;
            margin-bottom: 0.5rem;
        }
        label {
            display: block;
            margin-top: 1rem;
            font-weight: bold;
        }
        input[type="number"],
        input[type="date"] {
            display: block;
            width: 100%;
            max-width: 20rem;
            margin-top: 0.25rem;
            padding: 0.4rem;
            box-sizing: border-box;
        }
        button,
        .button {
            display: inline-block;
            margin-top: 1.25rem;
            padding: 0.5rem 1rem;
            background: #1a1a1a;
            color: #fff;
            border: none;
            text-decoration: none;
            cursor: pointer;
            font: inherit;
        }
        .errors {
            color: #8b0000;
            margin: 1rem 0;
            padding: 0.75rem 1rem;
            background: #fdecec;
            border: 1px solid #e0a0a0;
        }
        .errors ul {
            margin: 0;
            padding-left: 1.25rem;
        }
        .result-due {
            color: #8b0000;
            font-size: 1.25rem;
            font-weight: bold;
        }
        .result-ok {
            color: #0b5d1e;
            font-size: 1.25rem;
            font-weight: bold;
        }
        dl {
            margin-top: 1.5rem;
        }
        dt {
            font-weight: bold;
            margin-top: 0.75rem;
        }
        dd {
            margin-left: 0;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>

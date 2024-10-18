<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <style>
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            background-color: #ffffff;
            border: none;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .card-img-top {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 20px auto;
            display: block;
        }

        p {
            text-align: center;
            font-style: italic;
            color: #6c757d;
        }

        hr {
            margin: 20px 0;
            border: 0;
            height: 1px;
            background: #dee2e6;
        }

        .btn-kembali {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn-kembali:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .card {
                padding: 15px;
            }

            .card-img-top {
                width: 120px;
                height: 120px;
            }
        }

   </style>
</head>
<body>

    @yield('content')
</body>
</html>

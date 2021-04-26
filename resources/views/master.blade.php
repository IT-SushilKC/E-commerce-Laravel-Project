<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .custom-login{
            height: 500px;
            padding-top: 100px;
        }
        .img-slider{
            height: 400px;
            display:block;
            margin-left: auto;
            margin-right: auto;
            }
            .custom-product{
                height: 600px;
              
            }
            .tranding-img{
                height: 100px;
            }
            .tranding-item{
                float: left;
                width: 20%;
            }
            .detail-img{
                height: 200px;
            }
    </style>

</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
</html>
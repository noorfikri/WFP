<?php
    $items = array(
        array('type'=>'med','id'=>0,'name'=>'pill','pic'=>'/img/item/pill.jpg'),
        array('type'=>'med','id'=>1,'name'=>'tablet','pic'=>'/img/item/tablet.jpg'),
        array('type'=>'med','id'=>2,'name'=>'herbal','pic'=>'/img/item/herbal.jpg'),
        array('type'=>'equip','id'=>3,'name'=>'mask','pic'=>'/img/item/mask.jpg'),
        array('type'=>'equip','id'=>4,'name'=>'syringe','pic'=>'/img/item/syringe.jpg')
    );
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Catalog
                </div>

                <div class="links">
                    <a href="/catalog/med">Medicines</a>
                    <a href="/catalog/equip">Medical Equipments</a>
                </div>

                <div>
                    <?php $count=0; ?>
                    @foreach($items as $item)
                        @if($item['type'] == $type and $count < 2)
                            <p>{{$item['name']}}</p>
                            <a href={{"/".$item['type']."/".$item['id']}}><img src={{$item['pic']}} width="300" height="300"></a>
                            <?php $count++; ?>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>

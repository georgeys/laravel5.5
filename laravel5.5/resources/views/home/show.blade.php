
        <!doctype html>
        <html lang="{{ app()->getLocale() }}">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>Laravel</title>

                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

                <!-- Styles -->
                <style>

                </style>
            </head>
            <body>


                    <div class="content">


                                <div id='col'>
                                {{$date}}
                                </div>
                                <div id='col'>
                                一年后:{{date('Y-m-d H:i:s',$time)}}
                                </div>
                    </div>
                </div>
            </body>
        </html>
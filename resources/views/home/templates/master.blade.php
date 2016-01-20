<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{{isset($title) ? $title : ''}}</title>
        <meta name="description" content="{{isset($description) ? $description : ''}}">

        <link href="{{url('/')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>

        <script src="{{url('/')}}/js/html5shiv.min.js"></script>
        <script src="{{url('/')}}/js/respond.min.js"></script>

        <![endif]-->
    </head>
    <body>

    @include('home.templates.nav')
    @yield('breadcrumbs')
    <div class="content">
    @yield('body')
    </div>

    @include('home.templates.footer')

    <script src="{{url('/')}}/js/jquery-1.11.3.min.js"></script>
    <script src="{{url('/')}}/js/bootstrap.min.js"></script>

    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>aside - Bootstrap 4 web application</title>
    <meta name="description" content="Responsive, Bootstrap, BS4"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="images/logo.png">

    <!-- style -->
    {{--<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/flatkit/animate.css/animate.min.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/flatkit/glyphicons/glyphicons.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/flatkit/font-awesome/css/font-awesome.min.css') }}"
          type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/flatkit/material-design-icons/material-design-icons.css') }}"
          type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/flatkit/ionicons/css/ionicons.min.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/flatkit/simple-line-icons/css/simple-line-icons.css') }}"
          type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/flatkit/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css"/>

    <!-- build:css css/styles/app.min.css -->
    <link rel="stylesheet" href="{{ URL::asset('css/flatkit/styles/app.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/flatkit/styles/style.css') }}" type="text/css"/>
    <!-- endbuild -->
    <link rel="stylesheet" href="{{ URL::asset('css/flatkit/styles/font.css') }}" type="text/css"/>
</head>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->

    <div class="padding">
        <div class="navbar">
            <div class="pull-center">
                <!-- brand -->
                <a href="index.html" class="navbar-brand">
                    <div data-ui-include="'images/logo.svg'"></div>
                    <img src="images/logo.png" alt="." class="hide">
                    <span class="hidden-folded inline">tubly</span>
                </a>
                <!-- / brand -->
            </div>
        </div>
    </div>
    <div class="b-t">
        <div class="center-block w-xxl w-auto-xs p-y-md text-center">
            <div class="p-a-md">
                <form name="upload" method="post" action="/upload">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <input name="audio" type="file" class="form-control">
                    </div>
                    <div class="form-group row">
                        <input name="image" type="file" class="form-control">
                    </div>
                    <div class="form-group row">
                        <select name="playlist" class="form-control select2 select2-hidden-accessible">
                            <option value="">...</option>
                            @foreach ($playlist_list as $item)
                                <option value="{{ $item->playlist_id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <input name="title" type="text" class="form-control" placeholder="title">
                    </div>
                    <div class="form-group row">
                        <input name="tags" type="text" class="form-control" placeholder="tags">
                    </div>
                    <div class="form-group row">
                        <textarea name="description" class="form-control" placeholder="description"></textarea>
                    </div>
                    <div class="form-group row">
                        <label class="md-check">
                            <input name="" type="checkbox" class="has-value">
                            <i class="blue"></i>
                            Private
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>

                <br />
                <br />

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </div>

    <!-- ############ LAYOUT END-->
</div>

<!-- endbuild -->
</body>
</html>
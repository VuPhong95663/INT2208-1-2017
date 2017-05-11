<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="atuthor" content="">
    <title>Quản trị hệ thống</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <<base href="{{asset('')}}" target="_blank, _self, _parent, _top">> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sb-admin.css">
    <link rel="stylesheet" href="css/plugins/morris.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
<div id="wrapper">
    @include('admin.layout.header')
    <div id="page-wrapper" style="min-height: 700px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <div>
                            @yield('content')
                        </div>
                    </h1>
                    <ol class="breadcrumb">
                        
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.footer')

</body>
</html>
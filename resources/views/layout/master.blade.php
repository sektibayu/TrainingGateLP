@include('layout.head-general')

<!--Icons-->
<script src="{{asset('js/lumino.glyphs.js')}}"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    @include('layout.navbar')
        
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <br>
        @include('layout.sidebar')
    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <br>
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">@yield('title')</li>
            </ol>
        </div><!--/.row-->
        
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">@yield('title')</h1>
        </div>
    </div><!--/.row-->          
        @yield('content')  
    </div>  <!--/.main-->
@include('layout.footer-general')
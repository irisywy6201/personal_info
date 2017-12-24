<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="http://cdn.alloyui.com/3.0.1/aui/aui-min.js"></script>
        <link href="http://cdn.alloyui.com/3.0.1/aui-css/css/bootstrap.min.css" rel="stylesheet"></link>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
          <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom" style="background-color:#333333">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="{{ url('/Homepage') }}"><span><img src="http://www.ncu.edu.tw/assets/thumbs/pic/df1dfaf0f9e30b8cc39505e1a5a63254.png" height="25" width="25" ></span>微學分首頁</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myNavbar" >
                <ul class="nav navbar-nav navbar-right " >
                    <li class="page-scroll navbtn" >
                        <a href="{{ url('/introduce') }}" style="color:#fff">登入</a>
                    </li>
                    <li class="page-scroll navbtn">
                        <a href="{{ url('/application') }}" style="color:#fff">中大首頁</a>
                    </li>
                    <li class="page-scrol navbtn">
                        <a href="{{ url('/record') }}"style="color:#fff">相關連結</a>
                    </li>
                     <!-- @if (Auth::guest())
                     <li class="page-scroll navbtn ">
                        <a href="{{ url('/authrize') }}">管理員登入</a>
                    </li>
                    @else
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-formm').submit();">
                                登出
                            </a>

                            <form id="logout-formm" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif -->

                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<style type="text/css">
    .navbtn{
        border-color: #f5f5dc;
        border-right-style:solid ;
    }
</style>

            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>

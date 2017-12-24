<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom" style="background-color:#333">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <a class="navbar-brand" href="{{ url('/') }}"><span><img src="http://www.ncu.edu.tw/assets/thumbs/pic/df1dfaf0f9e30b8cc39505e1a5a63254.png" height="25" width="25" ><img src="/img/title.png" alt=""height="25"></span></a>
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
</nav><br><br>
<style>
  /* Remove the navbar's default margin-bottom and rounded borders */
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }
  .navbtn{
      border-color: #f5f5dc;
      border-right-style:solid ;
  }

</style>

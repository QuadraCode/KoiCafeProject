<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li>
                        @if(Auth()->guest())
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">GUEST
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="/login">LOGIN</a></li>
                                <li><a href="/register">REGISTER</a></li>
                            </ul>
                        </div>
                        @else
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{Auth()->user()->name}}
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">LOGIN</a></li>
                                    <li><a href="/logout">LOGOUT</a></li>
                                </ul>
                            </div>
                        @endif

                    </li>



                    <li><a href="/home">Home</a></li>
                    <li><a href="/products">Products</a></li>
                </ul>


                <div id="right">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

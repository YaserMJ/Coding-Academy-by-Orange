@extends('layouts.app')

<style>
#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
    color: white;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}

</style>
@section('content')
<div class="container">
        <div id="wrapper">

                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <div class="sidebar-brand">
                            Universities
                        </div>
                            @foreach ($unis as $uni)
                            <input type="radio" name="radio1" id="">
                            {{$uni->name}}
                            <br/>
                            @endforeach
                        <div class="sidebar-brand">
                            Subjects
                        </div>
                        @foreach ($subjects as $value)
                            <input type="radio" name="radio2" id="">
                            {{$value->name}}
                            <br/>
                        @endforeach
                    </ul>

                </div>
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <div class="container-fluid">

                                <a href="/topic/create">
                                <button style="float:right" class="btn btn-dark">Create topic</button>
                                </a>
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                                @foreach ($resources as $resource)
                                {{-- <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                        <h5 class="card-title">{{$resource->name}}</h5>
                                          <p class="card-text">{{$resource->description}}</p>
                                          <a href="" class="btn btn-dark">Find out more</a>
                                        </div>
                                      </div> --}}

                                    <div class="row">
                                        <div class="col-sm-12 py-2">
                                            <div class="card h-100 border-dark">
                                                <div class="card-body">
                                                    <h3 class="card-title">{{$resource->name}}</h3>
                                                    <p class="card-text">{{$resource->description}}</p>
                                                    <a href="#" class="btn btn-outline-dark">Find out more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                        </div>
                                    </div>
                                </div>


                    </div>
                </div>
                <!-- /#page-content-wrapper -->

            </div>
            <!-- /#wrapper -->
</div>
@endsection

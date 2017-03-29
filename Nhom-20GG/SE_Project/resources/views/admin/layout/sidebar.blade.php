<div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li style="background:#1b926c; color: #fff; padding-right: 82px;">
                    <a href="index.php" style="color:#fff"><i class="fa fa-dashboard"></i>Dashboard</a>
                </li>               
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo_vd">
                        <i class="fa fa-fw fa-file"></i>Video
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="demo_vd" class="collapse">
                        <li>
                            <a href="{{route('addVideo')}}">Thêm mới</a>
                        </li>
                        <li>
                            <a href="{{route('listVideos')}}">Danh sách</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
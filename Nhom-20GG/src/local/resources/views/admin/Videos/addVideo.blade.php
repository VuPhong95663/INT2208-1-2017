@extends('admin.layout.index')

@section('content') 
<div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
        @if(count($errors)>0)
              <div class="alert alert-danger">
                  @foreach($errors->all() as $err)
                      {{$err}}
                      <br>
                  @endforeach
              </div>
          @endif
          
          @if(session('thongbao'))
              <div class="alert alert-success">
                  {{session('thongbao')}}
              </div>
          @endif                     
            <form action="admin/Videos/AddVideo" name="framdd_video" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />               
                <div class="form-group">
                    <label> Tên</label>
                    <input type="text" name="name" class="form-control" placeholder="Tiêu đề">
                </div>
                <div class="form-group">
                    <label> Đường dẫn </label>
                    <input type="text" name="source" class="form-control" placeholder="Đường dẫn">
                </div>
                <div class="form-group">
                    <label> Mô tả</label>
                    <textarea name="description" rows="5" class="form-control"></textarea>

                </div>
                <div class="form-group">
                    <label> Đường dẫn ảnh </label>
                    <input type="text" name="image" class="form-control" placeholder="Ảnh">
                </div>

                <div class="form-group">
                    <label> Đường dẫn tiếng Anh </label>
                    <input type="text" name="eng" class="form-control" placeholder="English Sub">
                </div>

                <div class="form-group">
                    <label> Đường dẫn tiếng Việt </label>
                    <input type="text" name="vi" class="form-control" placeholder="Viet Nam Sub">
                </div>



                <input type="submit" class="btn btn-primary" value="Thêm mới video">

            </form>
        </div>

    </div>

@endsection
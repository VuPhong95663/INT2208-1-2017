@extends('admin.layout.index')
@section('content')
   <div class="row">
       <div class="col-md-12">
           <h3> Danh sách video</h3>
           <table class="table table-hover">
               <thead>
               <tr>
                   <th>Mã</th>
                   <th>Tên</th>
                   <th>Nguồn</th>
                   <th>Ảnh</th>
                   <th>View</th>
                   <th>Eng</th>
                   <th>Vi</th>
                   <th>Delete</th>
                   <th>Edit</th>
               </tr>
               </thead>
                <tbody>
                @foreach($videos as $vd)
                <tr>
                  <td>{{$vd->id}}</td>
                  <td>{{$vd->name}}</td>
                  <td>{{$vd->source}}</td>
                  <td>{{$vd->image}}</td>
                  <td>{{$vd->view}}</td>
                  <td>{{$vd->eng}}</td>
                  <td>{{$vd->vi}}</td>
                  <td><a href="admin/Videos/xoa/{{$vd->id}}">Delete</td>
                  <td><a href="admin/Videos/sua/{{$vd->id}}">Edit</td>
                </tr>                    
                @endforeach
                </tbody>
           </table>



       </div>
   </div>

@endsection
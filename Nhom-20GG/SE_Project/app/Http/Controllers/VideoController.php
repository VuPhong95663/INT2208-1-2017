<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;

class VideoController extends Controller
{
    public function getAddVideo(){    	
    	return view('admin.Videos.addVideo');
    }
    public function getListVideos(){
    	$videos = Videos::all();
    	return view('admin.Videos.listVideos', ['videos'=>$videos]);
    }
    public function postAddVideo(Request $request){
    	$this->validate($request,[
    		'name'=>'required', 'source'=>'required'
    		],[

    		'name.required'=>'Bạn chưa nhập tên',
    		'source.required'=>'Bạn chưa nhập đường dẫn'
    		]);
    	$videos = new Videos;
    	$videos->name = $request->name;
    	$videos->source = $request->source;
    	$videos->description =$request->decription;
    	$videos->image = $request->image;
    	$videos->eng = $request->eng;
    	$videos->vi = $request->vi;
    	$videos->save();

    	return redirect('admin/Videos/AddVideo')->with('thongbao', 'Thêm thành công');

    }

    public function getXoa($id){
    	$videos = Videos::find($id);
    	$videos->delete();
    	return redirect('admin/Videos/ListVideos');
    }

    public function getShowList(){
        $video = Videos::paginate(9);
        view()->share('videos', $video);
        return view('front.music_videos.ListMusic',['video'=>$video]);
    }

    public function getVideo($id){
        $video = Videos::find($id);
        
        return view('front.music_videos.video', ['video'=>$video]);

    }
}

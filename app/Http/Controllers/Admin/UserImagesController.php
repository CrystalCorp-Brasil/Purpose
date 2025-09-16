<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\UserImageRequest;
    use Carbon\Carbon;
    use App\Models\{User,Image};
    use Illuminate\Support\Facades\{Auth,Redirect};

    class UserImagesController extends Controller {
        public function upload(){
            $user = Auth::user();
            return \view('admin/pages/upload',compact('user'));
        }

        public function gallery(){
            $user = Auth::user();
            $images = Image::select('*')->where('user_id',$user->id)->orderBy('images.created_at','desc')->paginate(6);
            foreach ($images as $image) {
                $data = Carbon::parse($image->created_at)->format('d/m/Y');
            }
            return \view('admin/pages/gallery', compact('images','user','data'));
        }

        public function store(UserImageRequest $request) {
            $request->validated();
            $user = User::find($request->id);
            $image = new Image();
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $fileImg = $user->username.'-'.$request->title.'-'.date('d-m-Y-H-m-s').'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/users/'.$user->id), $fileImg);
            }
            $image->title = $request->title;
            $image->descr = $request->descr;
            $image->image = 'uploads/users/'.$request->id.'/'.$fileImg;
            $image->user_id = $request->id;
            $image->save();
            return Redirect::route('image.gallery')->with('success','Upload efetuado com sucesso!');
        }
    }

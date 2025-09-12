<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\UserImageRequest;
    use App\Models\User;
    use App\Models\Image;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Redirect;

    class UserImagesController extends Controller {
        public function upload(){
            $user = Auth::user();
            return \view('admin/profile/upload');
        }
        public function store(UserImageRequest $request) {
            $request->validated();
            $user = User::find($request->id);
            $image = new Image();
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $fileImg = $user->username.uniqid().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/users/'.$user->id), $fileImg);
            }
            $image->title = $request->title;
            $image->descr = $request->descr;
            $image->image = 'uploads/users/3/'.$fileImg;
            $image->user_id = $request->id;
            $image->save();
            return Redirect::route('dashboard')->with('success','Upload efetuado com sucesso!');
        }
    }

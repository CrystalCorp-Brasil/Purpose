<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\EditorialRequest;
    use App\Models\{Editorial,User};
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\{Auth,Redirect};
    use Illuminate\Support\Str;

    class EditorialController extends Controller {
        public function index() {
            $user = Auth::user();
            $posts = Editorial::all();
            return \view ('admin/editorials/index', compact('posts','user'));
        }

        public function create(){
            $user = Auth::user();
            return \view('admin/editorials/create', compact('user'));
        }

        public function store(EditorialRequest $request) {
            $request->validated();
            $user = User::find($request->id);
            $slug = Str::slug($request->title);
            $editorial = new Editorial();
            if($request->hasFile('cover')) {
                $file = $request->file('cover');
                $fileImg = $user->username.'-'.$slug.'-'.date('d-m-Y-H-m-s').'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/editorials/'.$user->id), $fileImg);
            }
            $editorial->title   = $request->title;
            $editorial->slug   = $slug;
            $editorial->publish = $request->publish;
            $editorial->cover   = 'uploads/editorials/'.$user->id.'/'.$fileImg;
            $editorial->user_id = $user->id;
            $editorial->save();
            return Redirect::route('editorial.index')->with('success','Upload efetuado com sucesso!');

        }
    }

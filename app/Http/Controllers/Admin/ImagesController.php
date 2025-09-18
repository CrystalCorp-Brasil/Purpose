<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\ImageRequest;
    use App\Models\{User,Image};
    use Carbon\Carbon;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\{Auth,Redirect,Storage};
    use Illuminate\Support\Str;
    use Illuminate\View\View;

    class ImagesController extends Controller {
        public function index(){
            $user = Auth::user();
            $images = Image::select('*')->where('user_id',$user->id)->orderBy('images.created_at','desc')->paginate(6);
            foreach ($images as $image) {
                $data = Carbon::parse($image->created_at)->format('d/m/Y');
            }
            return \view('admin/images/gallery', compact('images','user','data'));
        }

        public function create(){return \view('admin/images/upload');}

        public function store(ImageRequest $request) {
            $request->validated();
            $user = User::find($request->id);
            $slug = Str::slug($request->title);
            $image = new Image();
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $fileImg = $user->username.'-'.$slug.'-'.date('d-m-Y-H-m-s').'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/users/'.$user->id), $fileImg);
            }
            $image->title = $request->title;
            $image->slug = $slug;
            $image->descr = $request->descr;
            $image->image = 'uploads/users/'.$user->id.'/'.$fileImg;
            $image->user_id = $user->id;
            $image->save();
            return Redirect::route('image.index')->with('success','Upload efetuado com sucesso!');
        }

        public function delete(): View {
            return view('admin/images/delete');
        }

        public function destroy(Request $request): RedirectResponse {
            $request->validateWithBag('imageDeletion', ['password' => ['required', 'current_password'],]);
            $image = Image::find($request->id);
            if($image->image) {Storage::disk('public')->delete($image->image);}
            $image->delete();
            return Redirect::to(route('image.index'))->with('success','Exclusão feita com sucesso!');
        }
    }

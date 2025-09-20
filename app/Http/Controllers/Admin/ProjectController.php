<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\ProjectRequest;
    use App\Models\{Project,User};
    use Illuminate\Support\Facades\{Auth,Redirect};
    use Illuminate\Support\Str;

    class ProjectController extends Controller {
        public function index() {
            $user = Auth::user();
            $posts = Project::all();
            return \view ('admin/projects/index', compact('posts','user'));
        }

        public function create(){
            $user = Auth::user();
            return \view('admin/projects/create',compact('user'));
        }

        public function store(ProjectRequest $request) {
            $request->validated();
            $user = User::find($request->id);
            $slug = Str::slug($request->title);
            $project = new Project();
            if($request->hasFile('cover')) {
                $file = $request->file('cover');
                $fileImg = $user->username.'-'.$slug.'-'.date('d-m-Y-H-m-s').'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/projects/'.$user->id), $fileImg);
            }
            $project->title     = $request->title;
            $project->slug      = $slug;
            $project->publish   = $request->publish;
            $project->cover     = 'uploads/projects/'.$user->id.'/'.$fileImg;
            $project->user_id   = $user->id;
            $project->save();
            return Redirect::route('project.index')->with('success','Upload efetuado com sucesso!');

        }
    }

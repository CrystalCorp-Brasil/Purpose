<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\ResourceRequest;
    use Illuminate\Http\Request;
    use App\Models\Resource;
    use Illuminate\Support\Facades\{Auth,Redirect};

    class ResourceController extends Controller {
        public function index(Request $request){
            $user = Auth::user();
            $search = $request->input('search');
            $icons = Resource::when($search, function($query, $search) {
                return $query->where('title', 'like', '%'.$search.'%');
            })->paginate(24);
            return view('admin/resource/index',compact('user','icons','search'));
        }

        public function create(){
            $user = Auth::user();
            return view('admin/resource/create',compact('user'));
        }

        public function store(ResourceRequest $request) {
            $request->validated();
            $resource = new Resource();
            $resource->title = $request->title;
            $resource->class = $request->class;
            $resource->save();
            return Redirect::route('resource.index')->with('success','Cadastro efetuado com sucesso!');
        }
    }

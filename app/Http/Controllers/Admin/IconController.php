<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\IconRequest;
    use Illuminate\Http\Request;
    use App\Models\Resource;
    use Illuminate\Support\Facades\Redirect;

    class IconController extends Controller {
        public function index(Request $request){
            $search = $request->input('search');
            $icons = Resource::when($search, function($query, $search) {
                return $query->where('title', 'like', '%'.$search.'%');
            })->paginate(24);
            return view('admin/icon/index',compact('icons','search'));
        }

        public function create(){
            return view('admin/icon/create');
        }

        public function store(IconRequest $request) {
            $request->validated();
            $resource = new Resource();
            $resource->title = $request->title;
            $resource->class = $request->class;
            $resource->save();
            return Redirect::route('resource.index')->with('success','Cadastro efetuado com sucesso!');
        }
    }

<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use App\Models\Editorial;
    use Illuminate\Support\Facades\Auth;

    class EditorialController extends Controller {
        public function editorial(){
            $pageTitle = 'Editoriais';
            $posts = Editorial::with('user')->orderBy('created_at', 'DESC')->get();
            return view('site/pages/editorial/index', compact('posts','pageTitle'));
        }

        public function editorialShow(Editorial $editorial){
            if(!Auth::check()){
                $editorial->visits++;
                $editorial->save();
            }
            elseif(Auth::user()->rule==='user'){
                $editorial->visits++;
                $editorial->save();
            }
            return view('site/pages/editorial/show',compact('editorial'));
        }
    };

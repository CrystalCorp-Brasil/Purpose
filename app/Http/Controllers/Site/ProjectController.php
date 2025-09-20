<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use App\Models\Project;
    use Illuminate\Support\Facades\Auth;

    class ProjectController extends Controller {
        public function project(){
            $pageTitle = 'Projetos';
            return view('site/pages/project/index');
        }

        public function editorialShow(Project $project){
            if(!Auth::check()){
                $project->visits++;
                $project->save();
            }
            elseif(Auth::user()->rule==='user'){
                $project->visits++;
                $project->save();
            }
            return view('site/pages/project/show',compact('editorial'));
        }
    };

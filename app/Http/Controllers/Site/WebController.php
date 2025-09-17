<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use Carbon\Carbon;
    use Illuminate\Support\Facades\DB;

    class WebController extends Controller {
        public function index(){return view('site.home.index');}

        public function termsOfUse(){return view('site.pages.termsOfUse');}

        public function privacyPolicy(){return view('site.pages.privacyPolicy');}

        public function editorial(){return view('site.pages.editorial');}

        public function imageGallery(){
            $users = DB::table('users')->select('*')->where('users.rule', '!=', null )
            ->join('images', 'users.id', '=', 'images.user_id')
            ->select('users.username','users.rule','images.id','images.title','images.descr','images.image','images.created_at')
            ->orderBy('images.created_at','desc')
            ->paginate(24);
            foreach ($users as $image) {
                $image->created_at = Carbon::parse($image->created_at)->format('d/m/Y');
            }
            return view('site.pages.imageGallery', compact('users'));
        }
    };

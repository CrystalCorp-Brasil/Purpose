<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use App\Models\{Editorial,Image};
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Request;

    class WebController extends Controller {
        public function index(Request $request){
            $images = Image::with('user')->limit(2)->orderBy('created_at', 'DESC')->get();
            $posts = Editorial::with('user')->limit(4)->orderBy('created_at', 'DESC')->get();
            return view('site/home/index',compact('posts','images'));
        }

        public function about(){
            $pageTitle= 'Sobre Nós';
            return view ('site/pages/about', compact('pageTitle'));
        }

        public function termsOfUse(){
            $pageTitle = 'Termos de Uso';
            return view('site/pages/termsOfUse',compact('pageTitle'));}

        public function privacyPolicy(){
            $pageTitle = 'Política de Privacidade';
            return view('site/pages/privacyPolicy',compact('pageTitle'));}

        public function imageGallery(){
            $pageTitle = 'Galeria de Imagens';
            $images = Image::with('user')->orderBy('created_at', 'DESC')->paginate(16);
            return view('site/pages/imageGallery', compact('images','pageTitle'));
        }
    };

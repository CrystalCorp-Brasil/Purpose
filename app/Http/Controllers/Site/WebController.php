<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use App\Models\{Editorial,Image};

    class WebController extends Controller {
        public function index(){
            $images = Image::with('user')->limit(2)->orderBy('created_at', 'DESC')->get();
            $posts = Editorial::with('user')->limit(4)->orderBy('created_at', 'DESC')->get();
            return view('site.pages.home.index',compact('posts','images'));
        }

        public function termsOfUse(){return view('site.pages.termsOfUse');}

        public function privacyPolicy(){return view('site.pages.privacyPolicy');}

        public function editorial(){
            $posts = Editorial::with('user')->orderBy('created_at', 'DESC')->get();
            return view('site.pages.editorial.index', compact('posts'));
        }

        public function editorialShow(Editorial $editorial){
            return view('site.pages.editorial.show',compact('editorial'));
        }
        public function imageGallery(){
            $images = Image::with('user')->orderBy('created_at', 'DESC')->paginate(18);
            return view('site.pages.imageGallery', compact('images'));
        }
    };

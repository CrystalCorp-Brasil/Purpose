<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use App\Models\{Editorial,Image};

    class WebController extends Controller {
        public function index(){return view('site.home.index');}

        public function termsOfUse(){return view('site.pages.termsOfUse');}

        public function privacyPolicy(){return view('site.pages.privacyPolicy');}

        public function editorial(){
            $posts = Editorial::with('user')->orderBy('created_at', 'DESC')->get();
            return view('site.pages.editorial', compact('posts'));
        }

        public function imageGallery(){
            $images = Image::with('user')->orderBy('created_at', 'DESC')->paginate(18);
            return view('site.pages.imageGallery', compact('images'));
        }
    };

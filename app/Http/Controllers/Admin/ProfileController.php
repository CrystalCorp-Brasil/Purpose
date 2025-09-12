<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\ProfileUpdateRequest;
    use App\Models\{User,Image};
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\View\View;

    class ProfileController extends Controller {
        public function dashboard(): View {
            $user = Auth::user();
            $images = Image::select('*')->where('user_id',$user->id)->get();
            return view('admin/profile/index', \compact('user','images'));
        }

        public function edit(Request $request): View {
            return view('admin/profile/edit', ['user'=>$request->user()]);
        }

        public function update(ProfileUpdateRequest $request, $id): RedirectResponse {
            $request->user()->fill($request->validated());
            $fileImg = User::find($id);
            if($request->hasFile('image')) {
                if($fileImg->image && file_exists(public_path($fileImg->image))){
                    unlink(public_path($fileImg->image));
                }
                $file = $request->file('image');
                $fileImg = uniqid().'.'.$file->getClientOriginalExtension();
                $request->user()->image = 'uploads/users/'.$fileImg;
                $file->move(public_path('uploads/users'), $fileImg);
            }

            if ($request->user()->isDirty('email')) {
                $request->user()->email_verified_at = null;
            }
            $request->user()->save();
            return Redirect::route('dashboard')->with('success','Alteração efetuada com sucesso!');
        }

        public function delete(Request $request): View {
            return view('admin/profile/delete', ['user'=>$request->user()]);
        }

        public function destroy(Request $request): RedirectResponse {
            $request->validateWithBag('userDeletion', ['password' => ['required', 'current_password'],]);
            $user = $request->user();
            Auth::logout();
            $user->delete();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return Redirect::to('/')->with('success','Exclusão feita com sucesso!');
        }
    }

<?php
    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Validation\Rules;
    use Illuminate\View\View;

    class RegisteredUserController extends Controller {
        public function create(): View {
            return view('auth.register');
        }

        public function store(Request $request): RedirectResponse {
            $request->validate([
                'name' => ['required','string','max:255'],
                'username' => ['required','string','max:255','unique:'.User::class],
                'email' => ['required','string','lowercase','email','max:255','unique:'.User::class],
                'image' => ['nullable','image','max:2048'],
                'password' => ['required','confirmed',Rules\Password::defaults()],
            ]);
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $fileImg = 'uploads/users/'.uniqid().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/users'), $fileImg);
            }
            else $fileImg = null;
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'image' => $fileImg,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            event(new Registered($user));
            Auth::login($user);
            return redirect(route('dashboard', absolute: false));
        }
    }

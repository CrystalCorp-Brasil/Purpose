                        <div class="header-cover" style="background-image: url('{{ asset('images/adm/crystalcorp.jpg') }}');"></div>
                        <div class="user-info pb-4">
                            <img class="profile-picture avatar-lg mb-2 bg-white rounded-pill" src="@if($user->image == null){{ asset('images/adm/user.png') }}@else{{ asset($user->image) }}@endif" alt="{{ $user->name }}"/>
                            <p class="m-0 text-24">{{ $user->name }}</p>
@if ($user->rule == 'admin')
                            <p class="text-muted m-0 text-capitalize">{{ $user->rule }}</p>
@endif
                        </div>

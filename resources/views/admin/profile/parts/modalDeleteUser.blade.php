                <div class="modal fade" id="modalDeleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-2">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle-2">{{ __('Delete Account') }}</h5>
                                <button class="btn btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post" action="{{ route('profile.destroy') }}">
                                @csrf

                                @method('delete')

                                <div class="modal-body">
                                    <h2 class="text-lg text-justify">{{ __('Are you sure you want to delete your account?') }}</h2>
                                    <p class="mt-1 text-justify">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>
                                    <div class="my-3">
                                        <label for="password" value="{{ __('Password') }}" class="sr-only"></label>
                                        <input type="password" id="password" name="password" class="form-control" required placeholder="{{ __('Password') }}"/>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary mx-5" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                    <button type="submit" class="btn btn-danger mx-5">{{ __('Delete Account') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

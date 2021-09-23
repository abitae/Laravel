<x-guest-layout>
    <x-jet-validation-errors class="mb-4" />
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

    <div class="mn-vh-100 d-flex align-items-center">
		<div class="container">
			<div class="card justify-content-center auth-card">
				<div class="row justify-content-center">
					<div class="col-xl-7 col-lg-9">
						<h4 class="mb-5 font-20">Welcome To System</h4>
						<form method="POST" action="{{ route('login') }}">
                        @csrf
							<div class="form-group mb-20">


                                <x-jet-label for="email" class="mb-2 font-14 bold" value="{{ __('Email Address') }}" />
                                <x-jet-input type="email" id="email" class="theme-input-style" placeholder="Email Address" name="email" :value="old('email')" required autofocus />

							</div>
							<div class="form-group mb-20">

                                <x-jet-label for="password" class="mb-2 font-14 bold" value="{{ __('Password') }}" />
                                <x-jet-input type="password" id="password" class="theme-input-style" placeholder="********" name="password" required autocomplete="current-password" />

                            </div>
							<div class="d-flex justify-content-between mb-20">
								<div class="d-flex align-items-center">
                                    <label class="custom-checkbox position-relative mr-2">
                                        <input type="checkbox" id="remember_me" name="remember"> 
                                    <span class="checkmark"></span>
                                    </label> 
                                    <label for="checkbox" class="font-14">{{ __('Remember me') }}</label>
                                </div>
                                
                                @if (Route::has('password.request'))
                                <a class="font-12 text_color" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                                </a>
                                @endif
                            </div>
                            <!-- 
							<div class="mb-30">
                                <a href="#" class="light-btn mr-3 mb-20">Log In With Facebook</a> 
                                <a href="#" class="light-btn style--two mb-20">Log In With Gmail</a>
                            </div>
                            -->
							<div class="d-flex align-items-center">
                            <x-jet-button class="btn long mr-20">
                                {{ __('Log in') }}
                            </x-jet-button>
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-guest-layout>

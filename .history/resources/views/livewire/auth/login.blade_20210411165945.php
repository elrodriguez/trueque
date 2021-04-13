<div>
    <!--====== Login Part Start ======-->

    <section class="login-registration-wrapper pt-50 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10">
                    <div class="login-registration-style-2  mt-50" >
                        <h1 class="heading-4 font-weight-500 title primary-btn" style="padding: 10px;"><i class="mdi mdi-key"></i> Ingresar</h1>
                        <div class="login-registration-form pt-10">
                            <x-jet-validation-errors class="mb-4" />
                            @if (session('status'))
                                <div class="alert alert-danger">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="single-form form-default form-border">
                                    <label>Correo Electrónico</label>
                                    <div class="form-input">
                                        <input type="email" placeholder="usuario@email.com" id="email" name="email" :value="old('email')" required autofocus>
                                        <i class="mdi mdi-email"></i>
                                    </div>
                                </div>
                                <div class="single-form form-default form-border">
                                    <label>Password</label>
                                    <div class="form-input">
                                        <input id="password-6" type="password" placeholder="Password"  name="password" required autocomplete="current-password">
                                        <i class="mdi mdi-lock"></i>
                                        <span toggle="#password-6" class="mdi mdi-eye-outline toggle-password"></span>
                                    </div>
                                </div>
                                <div class="login-checkbox-forget d-sm-flex justify-content-between align-items-center">
                                    <div class="single-checkbox checkbox-style-3">
                                        <input type="checkbox" id="login-9" name="remember">
                                        <label for="login-9"><span></span> </label>
                                        <p>Recordarme</p>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="forget" href="{{ route('password.request') }}">¿Has olvidado tu contraseña?</a>
                                    @endif

                                </div>
                                <div class="single-form">
                                    <button class="main-btn primary-btn" type="submit">Ingresar</button>
                                </div>
                            </form>
                        </div>
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <p class="login">¿No tienes una cuenta? <a href="{{ route('public_register') }}">Registrate</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div>
    <section class="login-registration-wrapper pt-50 pb-50">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-10">
                   <div class="login-registration-style-2 mt-50">
                       <h1 class="heading-4 font-weight-500 title primary-btn" style="padding: 10px;"><i class="mdi mdi-account-plus"></i> Crea una cuenta con</h1>
                       <div class="login-registration-form pt-10">
                           <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <x-jet-validation-errors class="mb-4" />
                               <div class="single-form form-default form-border">
                                    <label>Nombre Completo</label>
                                    <div class="row">
                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        <div class="col-sm-12">
                                            <div class="form-input">
                                                <input type="text" placeholder="Nombres" id="name" name="name" :value="old('name')" required autofocus autocomplete="name">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                        </div>
                                        <!--div class="col-sm-6">
                                            <div class="form-input form">
                                                <input type="text" placeholder="Apellidos">
                                            </div>
                                        </div-->
                                    </div>
                                </div>
                               <div class="single-form form-default form-border">
                                    <label>Correo Electrónico</label>
                                    <div class="form-input">
                                        <input type="email" placeholder="usuario@email.com" id="email" name="email" :value="old('email')" required>
                                        <i class="mdi mdi-email"></i>
                                    </div>
                                </div>
                                <div class="single-form form-default form-border">
                                    <label>Password</label>
                                    <div class="form-input">
                                        <input type="password" placeholder="Password" id="password" name="password" required autocomplete="new-password">
                                        <i class="mdi mdi-lock"></i>
                                        <span toggle="#password" class="mdi mdi-eye-outline toggle-password"></span>
                                    </div>
                                </div>

                                <div class="single-form form-default form-border">
                                    <label>Confirmar Password</label>
                                    <div class="form-input">
                                        <input type="password" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                                        <i class="mdi mdi-lock"></i>
                                        <span toggle="#password_confirmation" class="mdi mdi-eye-outline toggle-password"></span>
                                    </div>
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="single-checkbox checkbox-style-3">
                                        <input type="checkbox" name="terms" id="terms">
                                        <label for="terms"><span></span> </label>
                                        <p>Acepto los términos de uso.</p>
                                    </div>
                                @endif
                                <div class="single-form">
                                    <button class="main-btn primary-btn" type="button">REGISTRAR</button>
                                </div>
                           </form>
                       </div>
                       <div class="text-center">
                           <p class="login">¿tener una cuenta? <a href="login.html">Ingresar</a></p>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
</div>

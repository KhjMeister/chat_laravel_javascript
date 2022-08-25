
            <div class="container ">
                <div class="d-flex justify-content-center align-items-center flex-column mt-md-3 mt-3">
                    
                    <div class="LR-content mt-2">
                        <div class="container">
                            <div class="d-flex align-items-center">
                                <div >
                                    <img width="125px" src="./vendor/messenger/RV/img/logo.gif" alt="videoRayan">
                                </div>
                                
                            </div>
                            <!-- <div class="mb-5 font-weight-bold">
                                <h3>خوش آمدید ، لطفا وارد شوید</h3>
                            </div> -->
                            <form id="login_form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <input id="uname" name="name" hidden >
                                
                                <div class="form-group">
                                    <label for="Email">آدرس ایمیل یا شماره تلفن</label>
                                    <input  name="email"   autocomplete="email" autofocus class="form-control mt-2 @error('email') is-invalid @enderror" id="Email" aria-describedby="emailHelp" >
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Password') }}</label>
                                    <input  name="password" autocomplete="current-password" id="password-field" type="password" class="form-control mt-2 @error('password') is-invalid @enderror" >
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="d-flex float-right underline" >   
                                        <div class="form-group ">
                                            <div class="form-check row">
                                                <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label col-6" for="remember">
                                                &nbsp;{{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                               
                                <!-- <a href="" class="text-vip">رمز عبور خود را فراموش کرده اید؟ </a> -->
                                </div>
                                <div class=" container p-0" style="margin-top: 6.5rem">
                                    <button type="submit" id="login_btn" class="btn btn-vip d-flex align-items-center w-100 " style="border-radius: 2rem;">
                                        <span class="text-white mr-auto ml-auto p-md-1"> ورود </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="  d-flex justify-content-center underline mt-5">
                            <a href="{{route('register')}}" class="text-vip">{{__('message.registerLink')}} </a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0 login-img section-img-login">
        <div class="contentarea mt-5">
            <div class="camera">
                <video id="video">ویدیو نیست</video>
            </div>
            <div><button id="startbutton" class="btn btn-secondary"> ورود</button></div>
            <canvas id="canvas"></canvas>  
            <div class="output" >
            <img id="photo" >

            </div>             
        </div>

@push('special-js')
    <script>
        $("#login_btn").click(function(){
            Messenger.button().addLoader({id : '#login_btn'});
            $("#login_form").submit();
        });
    </script>
@endpush

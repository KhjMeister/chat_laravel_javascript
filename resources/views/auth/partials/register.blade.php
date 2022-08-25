<div class="container ">
            <div class="d-flex justify-content-center align-items-center flex-column mt-2">
                <div class="LR-content">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div >
                                <img width="125px" src="{{asset('vendor/messenger/RV/img/logo.gif')}}" alt="videoRayan">
                            </div>
                            <!-- <h3>CamCall</h3> -->
                        </div>
                        <!-- <div class="mb-4 mt-0 font-weight-bold">
                            <h3 style="margin-top: 0px;">خوش آمدید ، لطفا ثبت نام کنید</h3>
                        </div> -->
                        <form id="register_form" method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label  for="Email">{{ __('Name') }}</label>
                                <input id="name" type="text" class="mt-1 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus aria-describedby="emailHelp">
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }} </label>
                                <input id="email" type="email" class="mt-1 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="mt-1 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label for="CPassword">{{ __('Confirm Password') }}</label>
                                <input type="password" class=" mt-1 form-control" name="password_confirmation" required autocomplete="new-password" id="CPassword">
                            </div>
                            <div class="form-group mb-1">
                                <label for="Phone">شماره تلفن</label>
                                <input type="text" class=" mt-1 form-control" name="phone" required autocomplete="09154235678" id="Phone">
                            </div>

                            <input id="files1" name="image_url" hidden />
                            @error('files1')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class=" container p-0 margin-b">
                                <button type="submit"  id="register_btn" class="btn btn-vip d-flex align-items-center w-100 " style="border-radius: 2rem;">
                                    <span class="text-white mr-auto ml-auto p-md-1">{{__('message.register')}} </span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="  d-flex justify-content-center underline">
                        <a href="{{route('login')}}" class="text-vip link-login">{{__('message.loginLink')}}   </a>
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
            <div><button id="startbutton" class="btn btn-secondary">گرفتن عکس</button></div>
            <canvas id="canvas"></canvas>  
            <div class="output" >
            <img id="photo" >

            </div>             
        </div>


@push('special-js')
    <script>
        $("#register_btn").click(function(){
            Messenger.button().addLoader({id : '#register_btn'});
            $("#register_form").submit();
        });
       
    </script>
@endpush

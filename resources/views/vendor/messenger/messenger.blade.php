@extends('messenger::app')
@section('title'){{messenger()->getProvider()->getProviderName()}} - {{config('messenger-ui.site_name')}} @endsection
@section('content')
    <div class="container-fluid mt-n3">
        <div id="messenger_container" class="row inbox main-inbox d-flex">
            <div id="message_sidebar_container" class="{{request()->is('messenger/*') && app('agent')->isMobile() ? 'NS' : ''}} {{app('agent')->isMobile() ? 'w-100' : 'w-25'}} px-0 h-100">
                <div class="card bg-transparent h-100">
                    <div class="card-header bg-light px-1 d-flex justify-content-between">
                        <div id="my_avatar_status">
                            <img data-toggle="tooltip" data-placement="right" title="شما {{\Illuminate\Support\Str::lower(\RTippin\Messenger\Contracts\MessengerProvider::ONLINE_STATUS[messenger()->getProvider()->getProviderOnlineStatus()])}} هستید"
                                 class="my-global-avatar ml-1 rounded-circle medium-image avatar-is-{{\Illuminate\Support\Str::lower(\RTippin\Messenger\Contracts\MessengerProvider::ONLINE_STATUS[messenger()->getProvider()->getProviderOnlineStatus()])}}"
                                 src="{{messenger()->getProvider()->getProviderAvatarRoute()}}" />
                        </div>
                        <span class="{{app('agent')->isMobile() ? '' : 'd-none d-md-inline'}} h4 font-weight-bold">ویدیو <span class="textcolorp">رایان</span>    </span>
                        <div class="dropdown">
                            <button data-tooltip="tooltip" title="گزینه ها" data-placement="right" class="btn btn-lg text-secondary btn-light pt-1 pb-0 px-2 dropdown-toggle" style="box-shadow: none;" data-toggle="dropdown"><i class="fa fa-ellipsis-v ml-3 mr-2"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item " style="text-align:right;" onclick="ThreadManager.load().search(); return false;" href="#"> جستجوی پروفایل <i class="fas fa-search"></i></a>
                                <a class="dropdown-item" onclick="ThreadManager.load().createGroup(); return false;" href="#"> ایجاد گروه <i class="fas fa-edit"></i></a>
                                <a class="dropdown-item" onclick="ThreadManager.load().contacts(); return false;" href="#"> دوستان <i class="fas fa-user-friends"></i></a>
                                <a class="dropdown-item" onclick="MessengerSettings.show(); return false;" href="#"> تنظیمات <i class="fas fa-cog"></i></a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar id="message_sidebar_content" class="card-body bg-transparent px-0 py-0">
                        <div class="col-12 px-2 mx-0 py-0">
                            <div id="socket_error"></div>
                            <div id="threads_search_bar" class="NS my-2">
                                <div class="form-row">
                                    <div class="input-group input-group-sm col-12 mb-0">
                                        <div class="input-group-prepend">
                                            <!-- <div class="input-group-text search_input_icon"><i class="fas fa-search"></i></div> -->
                                        </div>
                                        <input autocomplete="off" type="search" class=" search_input" id="thread_search_input" placeholder="جستجو مکالمه بر اساس نام"/>
                                    </div>
                                </div>
                            </div>
                            <div id="allThread">
                                <ul id="messages_ul" class="messages-list">
                                    <div class="col-12 mt-5 text-center"><div class="spinner-grow spinner-grow-sm text-primary" role="status"></div></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="message_content_container" class="{{app('agent')->isMobile() ? request()->is('messenger/*') ? '' : 'NS' : ''}} flex-fill h-100">
                <div id="message_content_card" class="card h-100">
                    <div id="drag_drop_overlay" class="drag_drop_overlay rounded text-center NS">
                        <div class="h-100 d-flex justify-content-center">
                            <div class="align-self-center h1">
                                <span class="badge badge-pill badge-secondary"><i class="fas fa-cloud-upload-alt"></i> برای آپلود فایل ها را در اینجا رها کنید</span>
                            </div>
                        </div>
                    </div>
                    <div id="message_container" class="card-body {{app('agent')->isMobile() ? 'px-1' : 'px-0'}} pb-0 pt-3 bg-light">
                        <div class="col-12 mt-5 text-center"><div class="spinner-grow spinner-grow-sm text-primary" role="status"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

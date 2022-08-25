
@push('special-js')
    <script>
        let demoLogin = function(email){
            Messenger.alert().Modal({
                size : 'sm',
                icon : 'sign-in-alt',
                pre_loader : true,
                centered : true,
                unlock_buttons : false,
                allow_close : false,
                backdrop_ctrl : false,
                title: 'Logging in',
                theme: 'primary'
            });
            Messenger.xhr().payload({
                route : '/login',
                data : {
                    email : email,
                    password : 'messenger'
                },
                success : function(){
                    location.replace('/');
                },
                fail_alert : true
            });
        };
        Messenger.xhr().request({
            route : '/demo-logins',
            success : function(data){
                $("#available_acc_elm").html(data.html);
            },
            fail : null
        });

    </script>
@endpush

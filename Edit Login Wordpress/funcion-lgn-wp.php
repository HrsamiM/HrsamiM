
/*Login*/

function my_login_logo() { ?>

    <style type="text/css">body.login { 
        background: url("/wp-content/uploads/2021/10/under-construction.jpg"); 
        background-repeat: no-repeat; 
        background-position: center center; 
        background-size: cover; 
    } 
    
    #login h1 { 
        border-radius: 6px; 
        background-color: rgb(0 0 0 / 0%); 
        margin-bottom: 10px; 
    } 

    #login {
        height: 100%;
    }
    
    #login h1 a, .login h1 a { 
        background-image: url('/wp-content/uploads/2021/10/digital-enter-studio-white.png'); 
        width: 300px !important; 
        background-repeat: no-repeat; 
        margin-bottom: 10px; 
    } 

    .login h1 a {
        background-size: 300px !important;
        height: 110px !important;
    }
    
    .login h1 { 
        padding: 10px 10px 30px; 
    } 
    
    .login #login { 
        margin-top: 0px; 
        padding: 8% 8% 8% 8%;
        background: rgb(2 44 68 / 95%); 
        border-radius: 0px; 
        border-top: 4px solid #eb9e07;
        position: fixed;
    } 
    
    .login #loginform { 
        border: 2px solid #fff; 
        background: rgba(255, 255, 255, 0.9); 
    } 
    
    .login a { 
        color: #ffffff !important;
    	font-size: 14px;
    } 
    
    .login a:hover { 
        color: #f1a104 !important;
    } 
    
    .login #wp-submit { 
        background: #002b44 !important;
        border-radius: 5px;
        border: 1px solid #002b44 !important;
    }
    
    .login #wp-submit:hover { 
        background: #f1a104 !important;
        color: #fff; 
        text-shadow: none !important; 
    } 
    
    .wp-core-ui .button-primary { 
        border-color: #999 #666 #666 !important; 
        box-shadow: 0 1px 0 #c7c8ca !important; 
        text-shadow: 0 -1px 1px #666, 1px 0 1px #666, 0 1px 1px #666, -1px 0 1px #666 !important; 
    } 
    
    input[type=text]:focus, 
    input[type=search]:focus, 
    input[type=radio]:focus, 
    input[type=tel]:focus, 
    input[type=time]:focus, 
    input[type=url]:focus, 
    input[type=week]:focus, 
    input[type=password]:focus, 
    input[type=checkbox]:focus, 
    input[type=color]:focus, 
    input[type=date]:focus, 
    input[type=datetime]:focus, 
    input[type=datetime-local]:focus, 
    input[type=email]:focus, 
    input[type=month]:focus, 
    input[type=number]:focus, select:focus, textarea:focus { 
        border-color: #c7c8ca !important; 
        box-shadow: 0 0 2px rgba(111,98,90,.4); 
    } 
    
    @media (max-width: 440px) { 
        .login #login { 
            padding: 40px 20px 20px; 
        } 
    } 
    
    .login .privacy-policy-page-link { 
        margin: 3em 0 2em !important; 
    } 
    
    .login label { 
        font-weight: 500; 
    } 
    
    @media (max-width: 480px) { 
        .login #login { 
            width: 100% !important; 
            padding: 6% 0 6% 0 !important; 
        } 
        #login h1 a, .login h1 a { 
            width: 180px; 
            height: 160px; 
            background-size: 180px 160px; 
        } 
    } 
    
    @media (max-width: 240px) { 
        #login h1 a, .login h1 a { 
            width: 120px; 
            height: 100px; 
            background-size: 120px 100px; 
        } 
    }
    
    </style>


<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

function change_login_link() {
	return home_url();
}
add_filter('login_headerurl','change_login_link');

/*End Login*/
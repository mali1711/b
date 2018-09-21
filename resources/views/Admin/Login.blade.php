<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台管理系统</title>

    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="/Admin/css/bootstrap.min.css" rel="stylesheet">
    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="/Admin/css/nifty.css" rel="stylesheet">
    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="/Admin/css/demo/nifty-demo-icons.min.css" rel="stylesheet">
       
    <!--Demo [ DEMONSTRATION ]-->
    <link href="/Admin/css/demo/nifty-demo.min.css" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="/Admin/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">





    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="/Admin/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="/Admin/plugins/pace/pace.min.js"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="/Admin/js/jquery-2.2.4.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="/Admin/js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="/Admin/js/nifty.min.js"></script>






    <!--=================================================-->
    
    <!--Background Image [ DEMONSTRATION ]-->
    <script src="/Admin/js/demo/bg-images.js"></script>




    
    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->
    <style>
	    body{
	    	background: url("/Admin/img/bg-img/bg-img-3.jpg");
	    	background-size: 100%;
	    }	
    </style>   

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay"></div>
		
		
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h3 class="h4 mar-no">后台管理系统</h3>
		            </div>
		            <strong class="col-md-4 col-md-offset-4  alert-danger">{{Session::get('info')}}</strong>
		            <form action="/Admin/Login" method="POST">
		                <div class="form-group">
		                    <input type="text" class="form-control" name="username" placeholder="用户名" autofocus>
		                </div>
		                 {{ csrf_field() }}  
		                <div class="form-group">
		                    <input type="password" class="form-control" name="password" placeholder="密码">
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" type="submit">登录</button>
		            </form>
		        </div>
		    </div>
		</div>
		<!--===================================================-->
		
		
		<!-- DEMO PURPOSE ONLY -->
		<!--===================================================-->
		<div class="demo-bg">
		    <div id="demo-bg-list">
		        <div class="demo-loading"><i class="psi-repeat-2"></i></div>
		        <img class="demo-chg-bg active" src="/Admin/img/bg-img/thumbs/bg-img-2.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="/Admin/img/bg-img/thumbs/bg-img-3.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="/Admin/img/bg-img/thumbs/bg-img-4.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="/Admin/img/bg-img/thumbs/bg-img-5.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="/Admin/img/bg-img/thumbs/bg-img-6.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="/Admin/img/bg-img/thumbs/bg-img-7.jpg" alt="Background Image">
		    </div>
		</div>
		<!--===================================================-->
		
		
		
	</div>
	<!-- END OF CONTAINER -->
		</body>
</html>

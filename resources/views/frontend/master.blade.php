<!DOCTYPE html>
<html>

<head>
   @notifyCss
   <style>
      .notify{
         z-index: 1000000;
         
      }
   </style>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Food Hunter</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="{{url('frontend/')}}/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="{{url('frontend/')}}/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{url('frontend/')}}/css/responsive.css">

   <!-- font css -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{url('frontend/')}}/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>

   @include('frontend.partials.header')
  
   <main>
      @include('notify::components.notify')


      @yield('content')

   </main>


   @include('frontend.partials.footer')


   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="{{url('/frontend/')}}/js/jquery.min.js"></script>
   <script src="{{url('/frontend/')}}/js/popper.min.js"></script>
   <script src="{{url('/frontend/')}}/js/bootstrap.bundle.min.js"></script>
   <script src="{{url('/frontend/')}}/js/jquery-3.0.0.min.js"></script>
   <script src="{{url('/frontend/')}}/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="{{url('/frontend/')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="{{url('/frontend/')}}/js/custom.js"></script>
   @notifyJs
   <script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
</body>

</html>
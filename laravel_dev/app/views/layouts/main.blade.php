
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Tuivel - Find your dream job</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="http://www.wearepandr.com" />
    <meta content="Tuivel brings you a new way to find and apply for jobs" name="description" />
    <meta content="Jobs, Job Search, Companies, Recruiting, Talents" name="keywords" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
   
</head>

<body>
    <div id="header">
        @yield('header')
    </div><!-- End #header -->
    
    <div id="container">
        @yield('container')
    </div><!-- End #container -->
    
    <div id="footer">
       @yield('footer')
    </div><!-- End #footer -->
    
    <!---- Analytics ---->
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-33940750-1']);
    _gaq.push(['_trackPageview']);
    
    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>

</body>
</html>

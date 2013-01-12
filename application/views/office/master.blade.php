
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
	<!-- the standards -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />

    @section('meta')
	@yield_section
    
    <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="http://subbis.dev:8080/assets/img/favicon.ico">
 
    
    <!-- the styles --> 
    <link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
    <link href="http://subbis.dev:8080/assets/office/css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="http://subbis.dev:8080/assets/office/css/datepicker.css" type="text/css" rel="stylesheet"/>
    <link href="http://subbis.dev:8080/assets/office/css/styles.css" type="text/css" rel="stylesheet"/>
       
    
    <!-- the scripts -->
    <script type="text/javascript" src="http://subbis.dev:8080/assets/office/js/widgets.js" ></script>
    <script type="text/javascript" src="http://subbis.dev:8080/assets/office/js/jquery.min.js" ></script>
    <script type="text/javascript" src="http://subbis.dev:8080/assets/office/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="http://subbis.dev:8080/assets/office/js/datepicker.js" ></script>    
    <script type="text/javascript" src="http://subbis.dev:8080/assets/office/js/bootstrap-fileupload.js" ></script>    
    <script type="text/javascript" src="http://subbis.dev:8080/assets/office/js/superfish.js" ></script>
    
     
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link href="http://subbis.dev:8080/assets/office/ie" type="text/css" rel="stylesheet"/>
    <![endif]-->
    
</head>
<body>
@render('office.assets.header')
<section id="panel" class="container">

	@section('breadcrumb')
	@yield_section

	@section('content')
	@yield_section



</section>


@render('office.assets.footer')
</body>
</html>

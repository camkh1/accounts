<html lang="en">
<head>
<title>@yield('title')</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="">
        <meta content='article' property='og:type'/>
		<meta content='summary' name='twitter:card'/>
		<meta content='Global' name='distribution'/>
		<meta content='General' name='rating'/>
		<meta content='index, follow' name='robots'/>
		<meta content='3 days' name='revisit-after'/>
		<meta content='en-us' name='language'/>
		<meta content='4.5' property='og:rating'/>
		<meta content='5' property='og:rating_scale'/>
		<meta content='120' property='og:rating_count'/>
		<meta content='unisex' property='product:gender'/>
		<meta content='index, follow' name='robots'/>
		<meta content='global' name='distribution'/>
		<meta content='3 days' name='revisit-after'/>
		<meta content='document' name='resource-type'/>
		<meta content='all' name='audience'/>
		<meta content='all' name='robots'/>
		<meta content='true' name='MSSmartTagsPreventParsing'/>
		<meta content='all' name='audience'/>
		<meta content='index,follow,snipet' name='googlebot'/>
		<meta content='follow, all' name='msnbot'/>
		<meta content='nopreview' name='msnbot'/>
		<meta content='follow, all' name='alexabot'/>
		<meta content='100' name='alexa'/>
		<meta content='10' name='pagerank'/>
		<meta content='1, 2, 3, 10, 11, 12, 13, ATF' name='serps'/>
		<meta content='follow, all' name='Slurp'/>
		<meta content='follow, all' name='ZyBorg'/>
		<meta content='follow, all' name='Scooter'/>
		<meta content='follow, all' name='Googlebot-Image'/>
		<meta content='noodp' name='robots'/>
		<meta content='ALL' name='SPIDERS'/>
		<meta content='ALL' name='WEBCRAWLERS'/>
		<meta content='no-cache' http-equiv='cache-control'/>
		<meta content='no-cache' http-equiv='pragma'/>
		<meta content='global' name='target'/>
		<meta property="og:type" content="video">
		@yield('detailcontent')
{{HTML::style('frontend/defualt/css/bootstrap/css/bootstrap.min.css')}}
{{HTML::style('frontend/defualt/css/uniform.default.min.css')}}
{{HTML::style('frontend/defualt/css/styleheader.css')}}
{{HTML::style('frontend/defualt/css/new-style.css')}}
{{HTML::style('frontend/defualt/css/stylefooter.css')}}
{{HTML::style('frontend/defualt/css/navigationleft/stylesheet.css')}}
{{HTML::style('frontend/defualt/css/playlist.css')}}
{{HTML::style('frontend/defualt/css/navigationleft/icons.css')}}
{{HTML::style('frontend/defualt/css/tv-style.css')}}
{{HTML::script('frontend/js/postscribe-master/postscribe.js')}}
{{HTML::script('frontend/js/postscribe-master/htmlParser/htmlParser.js')}}
<!--[if IE]>
{{HTML::style('frontend/defualt/css/new-style-ie.css')}}
<![endif]-->
{{HTML::script('frontend/js/jquery.js')}}
{{HTML::script('frontend/js/audiojs-master/audiojs/audio.js')}}
<!--[if lt IE 9]>
    {{HTML::script('frontend/js/html5shiv.js')}}
    {{HTML::script('frontend/js/respond.min.js')}}
<![endif]-->
<link href="{{Config::get('app.url')}}favicon.ico" rel='icon' type='image/x-icon'/>
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="{{Config::get('app.url')}}frontend/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="{{Config::get('app.url')}}frontend/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="{{Config::get('app.url')}}frontend/images/icons/apple-touch-icon-72-precomposed.png">
	<script type="text/javascript">
	var copyright = 0;
	var home_page = "{{Config::get('app.url')}}";
	var aDs = '',audioArr=[],urlPlay='',currentPageNoArr = [1],volArr=[],perPage=50,productCount=[],nextPlay='',prevPlay='';
	if(currentPageNoArr.length==1){var currentPageNo=currentPageNoArr[0];}else{var currentPageNo;}
	var singerDropMenu=[],singerCount=[],productCount=[],productDropMenu=[],production=[],currentSongList=[],currentFunc=[],singerLoad=[],labelArr=[],volArr=[],postCount=[];
	</script>

</head>
	<div id='fb-root'></div>
	<div id='js-filter'></div>
<body class="smf">
<svg height='0' style='position: absolute; width: 0; height: 0;' version='1.1' width='0' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
<defs>
<symbol id='icon-home' viewBox='0 0 1024 1024'>
<title>home</title>
<path class='path1' d='M1024 590.444l-512-397.426-512 397.428v-162.038l512-397.426 512 397.428zM896 576v384h-256v-256h-256v256h-256v-384l384-288z'></path>
</symbol>
<symbol id='icon-newspaper' viewBox='0 0 1024 1024'>
<title>newspaper</title>
<path class='path1' d='M896 256v-128h-896v704c0 35.346 28.654 64 64 64h864c53.022 0 96-42.978 96-96v-544h-128zM832 832h-768v-640h768v640zM128 320h640v64h-640zM512 448h256v64h-256zM512 576h256v64h-256zM512 704h192v64h-192zM128 448h320v320h-320z'></path>
</symbol>
<symbol id='icon-images' viewBox='0 0 1152 1024'>
<title>images</title>
<path class='path1' d='M1088 128h-64v-64c0-35.2-28.8-64-64-64h-896c-35.2 0-64 28.8-64 64v768c0 35.2 28.8 64 64 64h64v64c0 35.2 28.8 64 64 64h896c35.2 0 64-28.8 64-64v-768c0-35.2-28.8-64-64-64zM128 192v640h-63.886c-0.040-0.034-0.082-0.076-0.114-0.116v-767.77c0.034-0.040 0.076-0.082 0.114-0.114h895.77c0.040 0.034 0.082 0.076 0.116 0.116v63.884h-768c-35.2 0-64 28.8-64 64v0zM1088 959.884c-0.034 0.040-0.076 0.082-0.116 0.116h-895.77c-0.040-0.034-0.082-0.076-0.114-0.116v-767.77c0.034-0.040 0.076-0.082 0.114-0.114h895.77c0.040 0.034 0.082 0.076 0.116 0.116v767.768z'></path>
<path class='path2' d='M960 352c0 53.020-42.98 96-96 96s-96-42.98-96-96 42.98-96 96-96 96 42.98 96 96z'></path>
<path class='path3' d='M1024 896h-768v-128l224-384 256 320h64l224-192z'></path>
</symbol>
<symbol id='icon-headphones' viewBox='0 0 1024 1024'>
<title>headphones</title>
<path class='path1' d='M288 576h-64v448h64c17.6 0 32-14.4 32-32v-384c0-17.6-14.4-32-32-32z'></path>
<path class='path2' d='M736 576c-17.602 0-32 14.4-32 32v384c0 17.6 14.398 32 32 32h64v-448h-64z'></path>
<path class='path3' d='M1024 512c0-282.77-229.23-512-512-512s-512 229.23-512 512c0 61.412 10.83 120.29 30.656 174.848-19.478 33.206-30.656 71.87-30.656 113.152 0 112.846 83.448 206.188 192 221.716v-443.418c-31.914 4.566-61.664 15.842-87.754 32.378-5.392-26.718-8.246-54.364-8.246-82.676 0-229.75 186.25-416 416-416s416 186.25 416 416c0 28.314-2.83 55.968-8.22 82.696-26.1-16.546-55.854-27.848-87.78-32.418v443.44c108.548-15.532 192-108.874 192-221.714 0-41.274-11.178-79.934-30.648-113.138 19.828-54.566 30.648-113.452 30.648-174.866z'></path>
</symbol>
<symbol id='icon-play' viewBox='0 0 1024 1024'>
<title>play</title>
<path class='path1' d='M981.188 160.108c-143.632-20.65-302.332-32.108-469.186-32.108-166.86 0-325.556 11.458-469.194 32.108-27.53 107.726-42.808 226.75-42.808 351.892 0 125.14 15.278 244.166 42.808 351.89 143.638 20.652 302.336 32.11 469.194 32.11 166.854 0 325.552-11.458 469.186-32.11 27.532-107.724 42.812-226.75 42.812-351.89 0-125.142-15.28-244.166-42.812-351.892zM384.002 704v-384l320 192-320 192z'></path>
</symbol>
<symbol id='icon-film' viewBox='0 0 1024 1024'>
<title>film</title>
<path class='path1' d='M0 128v768h1024v-768h-1024zM192 832h-128v-128h128v128zM192 576h-128v-128h128v128zM192 320h-128v-128h128v128zM768 832h-512v-640h512v640zM960 832h-128v-128h128v128zM960 576h-128v-128h128v128zM960 320h-128v-128h128v128zM384 320v384l256-192z'></path>
</symbol>
<symbol id='icon-tv' viewBox='0 0 1024 1024'>
<title>tv</title>
<path class='path1' d='M981.188 288.108c-88.808-12.768-183.382-22.016-282.076-27.22l164.888-164.888-64-64-224.558 224.556c-21.006-0.368-42.156-0.556-63.442-0.556v0l-256-256-64 64 194.196 194.196c-120.922 4.242-236.338 14.524-343.386 29.912-27.532 107.726-42.81 226.752-42.81 351.892s15.278 244.166 42.804 351.89c143.642 20.652 302.34 32.11 469.196 32.11s325.55-11.458 469.188-32.11c27.534-107.724 42.812-226.75 42.812-351.89s-15.278-244.166-42.812-351.892zM863.892 874.594c-107.73 13.766-226.75 21.406-351.892 21.406s-244.166-7.64-351.892-21.406c-20.648-71.816-32.108-151.166-32.108-234.594 0-83.43 11.458-162.78 32.108-234.596 107.726-13.766 226.75-21.404 351.892-21.404 125.136 0 244.162 7.638 351.886 21.404 20.656 71.816 32.114 151.166 32.114 234.596 0 83.428-11.458 162.778-32.108 234.594z'></path>
</symbol>
<symbol id='icon-box-add' viewBox='0 0 1024 1024'>
<title>box-add</title>
<path class='path1' d='M832 64h-640l-192 192v672c0 17.674 14.326 32 32 32h960c17.672 0 32-14.326 32-32v-672l-192-192zM512 832l-320-256h192v-192h256v192h192l-320 256zM154.51 192l64-64h586.978l64 64h-714.978z'></path>
</symbol>
</defs>
</svg>
<div id='blockui' style='display:none'>
<div class='' id='loaderimg'><img align='center' src='http://2.bp.blogspot.com/-_nbwr74fDyA/VaECRPkJ9HI/AAAAAAAAKdI/LBRKIEwbVUM/s1600/splash-loader.gif' valign='middle'/></div>
</div>
<!-- Start header -->
<header class="header navbar-fixed-top">
    <div class="container-header">
            <div class="navbar">
                <div class="navbar-inner">
                	<ul class="nav navbar-nav">
						<li class="nav-toggle"><a href="javascript:void(0);" title=""><i
								class="icon-reorder"></i></a></li>
					</ul>
                    <div class="brand-wrapper">
                        <a class="brand navbar-brand" href="{{Config::get('app.url')}}" title="Home, Watch movie online free"><i class="icon-check-empty"></i>
                        sss
                       
                        </a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                    	<li class="active-sub">
							<a class="img-icon" href="{{Config::get('app.url')}}" data-original-title="" title="">
							<svg class="icon icon-home"><use xlink:href="#icon-home"></use></svg>
							</a>
						</li>
						<li>
						<a 
							class="icon-image" 
							href="{{Config::get('app.url')}}search/label" 
							rel="tab">
							<span class="icon-all last-item"></span>
							<br>Tracks</a>
						</li>
						<li>
							<a 
							class="icon-image" 
							href="{{Config::get('app.url')}}search/label/artist"
							rel="tab">
								<span class="icon-all icon-artist"></span>
								<br>Artists
							</a>
						</li>
						<li>
							<a 
							class="icon-image" 
							href="{{Config::get('app.url')}}search/label/production"
							rel="tab">
								<span class="icon-all icon-production"></span>
								<br>Product
							</a>
						</li>
						<li>
							<a 
							class="icon-image" 
							href="{{Config::get('app.url')}}search/label/albums"
							rel="tab">
								<span class="icon-all icon-production"></span>
								<br>Albums
							</a>
						</li>
						<li>
							<a class='img-icon' id="search-bar" href="javascript:;" title="Download" style="margin-top: 5px;margin-right:5px">
								<span class="icomg-search1"></span>
							</a>
						</li>
							
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="./classic_3_columns.html">Classic Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">Classic 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Filterable Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">Filterable 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li><a href="./portfolio.html">Single Project</a></li>
                            </ul>
                        </li>
                        <li><a href="./contact.html">Contact</a></li> -->
                    </ul>
                </div>
                <a class="mainlist-toggle btn btn-danger" href="javascript:;" style="position:absolute;top:10px;right:10px;">
		        <span class="icos-list"></span>
		      </a>
                
                
                <form role="search" action="{{Config::get('app.url')}}search/q" class="navbar-form ng-pristine ng-valid" id="h-search-form" method="get">
	                <div class="form-group has-feedback">
	                	<i class="icosg-search search"></i>
		                <input type="text" placeholder="Search by Category, Title.." class="form-control" name="q"/>
		                <div search-dismiss="search-dismiss" class="fa fa-times form-control-feedback" id="search-close">
		                	<span class="icosg-cancel1"></span>
		                </div>
	                </div>
                	<button type="submit" class="hidden btn btn-default">Submit</button>
                </form>
            </div>
        <div style="clear:both;"></div>              
    </div>
</header>
<!-- End header --> 
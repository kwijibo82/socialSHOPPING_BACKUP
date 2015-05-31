<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        Altagora - Dashboard
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <script src="javascripts/1.3.0/adminflare-demo-init.min.js" type="text/javascript"></script>

    <link href="css/1.3.0/messages.css" rel="stylesheet" type="text/css">


    <script type="text/javascript">
        // Include Bootstrap stylesheet
        // document.write('<link href="css/' + DEMO_ADMINFLARE_VERSION + '/' + DEMO_CURRENT_THEME + '/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" id="bootstrap-css">');
        // Include AdminFlare stylesheet
        // document.write('<link href="css/' + DEMO_ADMINFLARE_VERSION + '/' + DEMO_CURRENT_THEME + '/adminflare.min.css" media="all" rel="stylesheet" type="text/css" id="adminflare-css">');
        document.write('<link href="css/1.3.0/cyan/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" id="bootstrap-css">');
        document.write('<link href="css/1.3.0/cyan/adminflare.min.css" media="all" rel="stylesheet" type="text/css" id="adminflare-css">');

    </script>

    <script src="javascripts/1.3.0/modernizr-jquery.min.js" type="text/javascript"></script>
    <script src="javascripts/1.3.0/adminflare-demo.min.js" type="text/javascript"></script>
    <script src="javascripts/1.3.0/bootstrap.min.js" type="text/javascript"></script>
    <script src="javascripts/1.3.0/adminflare.min.js" type="text/javascript"></script>

    <style type="text/css">
        /* ======================================================================= */
        /* Server Statistics */
        .well.widget-pie-charts .box {
            margin-bottom: -20px;
        }

        /* ======================================================================= */
        /* Why AdminFlare */
        #why-adminflare ul {
            position: relative;
            padding: 0 10px;
            margin: 0 -10px;
        }

        #why-adminflare ul:nth-child(2n) {
            background: rgba(0, 0, 0, 0.02);
        }

        #why-adminflare li {
            padding: 8px 10px;
            list-style: none;
            font-size: 14px;
            padding-left: 23px;
        }

        #why-adminflare li i {
            color: #666;
            font-size: 14px;
            margin: 3px 0 0 -23px;
            position: absolute;
        }


        /* ======================================================================= */
        /* Supported Browsers */
        #supported-browsers header { color: #666; display: block; font-size: 14px; }

        #supported-browsers header strong { font-size: 18px; }

        #supported-browsers .span10 { margin-bottom: -15px; text-align: center; }

        #supported-browsers .span10 div {
            margin-bottom: 15px;
            margin-right: 15px;
            display: inline-block;
            width: 120px;
        }

        #supported-browsers .span10 div:last-child { margin-right: 0; }

        #supported-browsers .span10 img { height: 40px; width: 40px; }

        #supported-browsers .span10 span { line-height: 40px; font-size: 14px; font-weight: 600; }

        @media (max-width: 767px) {
            #supported-browsers header { text-align: center; margin-bottom: 20px; }
        }

        /* ======================================================================= */
        /* Status panel */
        .status-example { line-height: 0; position:relative; top: 22px }
    </style>

    <script type="text/javascript">
        $(document).ready(function () {
            $('a[rel=tooltip]').tooltip();

            // Easy Pie Charts
            var easyPieChartDefaults = {
                animate: 2000,
                scaleColor: false,
                lineWidth: 12,
                lineCap: 'square',
                size: 100,
                trackColor: '#e5e5e5'
            }
            $('#easy-pie-chart-1').easyPieChart($.extend({}, easyPieChartDefaults, {
                barColor: '#3da0ea'
            }));
            $('#easy-pie-chart-2').easyPieChart($.extend({}, easyPieChartDefaults, {
                barColor: '#e7912a'
            }));
            $('#easy-pie-chart-3').easyPieChart($.extend({}, easyPieChartDefaults, {
                barColor: '#bacf0b'
            }));
            $('#easy-pie-chart-4').easyPieChart($.extend({}, easyPieChartDefaults, {
                barColor: '#4ec9ce'
            }));
            $('#easy-pie-chart-5').easyPieChart($.extend({}, easyPieChartDefaults, {
                barColor: '#ec7337'
            }));
            $('#easy-pie-chart-6').easyPieChart($.extend({}, easyPieChartDefaults, {
                barColor: '#f377ab'
            }));
            // Visits Chart
            var visitsChartData = [{
                // Visits
                label: 'Visits',
                data: [
                    [6, 1300],
                    [7, 1600],
                    [8, 1900],
                    [9, 2100],
                    [10, 2500],
                    [11, 2200],
                    [12, 2000],
                    [13, 1950],
                    [14, 1900],
                    [15, 2000]
                ]
            }, {
                // Returning Visits
                label: 'Returning Visits',
                data: [
                    [6, 500],
                    [7, 600],
                    [8, 550],
                    [9, 600],
                    [10, 800],
                    [11, 900],
                    [12, 800],
                    [13, 850],
                    [14, 830],
                    [15, 1000]
                ],
                filledPoints: true
            }];
            $('#visits-chart').simplePlot(visitsChartData, {
                series: {
                    points: {
                        show: true,
                        radius: 5
                    },
                    lines: {
                        show: true
                    }
                },
                xaxis: {
                    tickDecimals: 2
                },
                yaxis: {
                    tickSize: 1000
                }
            }, {
                height: 205,
                tooltipText: "y + ' visitors at ' + x + '.00h'"
            });
            // Comments Tab
            $('.comment-remove').click(function () {
                bootbox.confirm("Are you sure?", function (result) {
                    alert("Confirm result: " + result);
                });
                return false;
            });
            // New Users Tab
            $('#tab-users a').toocltip();
        });
    </script>
</head>
<body>
<script type="text/javascript">demoSetBodyLayout();</script>
	<!-- Main navigation bar
		================================================== -->
	<header class="navbar navbar-fixed-top" id="main-navbar">
		<div class="navbar-inner">
			<div class="container">
				<a class="logo" href="#"><img alt="Af_logo" src="assets/images/logo_altagora_dashBoard.png"></a>

				<a class="btn nav-button collapsed" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-reorder"></span>
				</a>

				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <i class=" icon-caret-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="nav-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
						<li class="divider-vertical"></li>
					</ul>
					<form class="navbar-search pull-left" action="" _lpchecked="1">
						<input type="text" class="search-query" placeholder="Search" style="width: 120px">
					</form>
					<ul class="nav pull-right">
						<li>
							<ul class="messages">
								<li>
									<a href="#"><i class="icon-warning-sign"></i> 2<span class="		responsive-text"> alerts</span></a>
								</li>
								<li>
									<a href="#"><i class="icon-envelope"></i> 25<span class="		responsive-text"> new messages</span></a>
								</li>
							</ul>
						</li>
						<li class="separator"></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle usermenu" data-toggle="dropdown">
								<img alt="Avatar" src="assets/images/avatar.png">
								<span>&nbsp;&nbsp;Admin</span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Profile</a>
								</li>
								<li>
									<a href="#">Settings</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="index.html">Sign In</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<!-- / Main navigation bar -->
	
	<!-- Left navigation panel
		================================================== -->
	<nav id="left-panel">
		<div id="left-panel-content">
			<ul>
                <li class="active"> <!--TODO: Customizar iconos -->
                    <a href="misVentas.php"><span class="icon-dashboard"></span>Mis articulos</a>
                </li>
                <li>
                    <a href="misEscaparates.php"><span class="icon-th-large"></span>Mis escaparates</a>
                </li>
                <li>
                    <a href="misCompradores.php"><span class="icon-font"></span>Mis compradores</a>
                </li>
                <li>
                    <a href="actividadComercial.php"><span class="icon-edit"></span>Mi actividad comercial</a>
                </li>
                <li>
                    <a href="dashboard.php"><span class="icon-table"></span>Resumen actividad</a>
                </li>

              <!--  <li>
                    <a href="components.html"><span class="icon-inbox"></span>Components</a>
                </li>
                <li>
                    <a href="javascript.html"><span class="icon-cog"></span>JavaScript</a>
                </li>
				<li class="lp-dropdown">
					<a href="#" class="lp-dropdown-toggle" id="extras-dropdown"><span class="icon-reorder"></span>Extras</a>
					<ul class="lp-dropdown-menu" data-dropdown-owner="extras-dropdown">
						<li>
							<a tabindex="-1" href="extras-icons.html"><span class="icon-coffee"></span>Icons</a>
						</li>
						<li>
							<a tabindex="-1" href="extras-charts.html"><span class="icon-bar-chart"></span>Charts</a>
						</li>
						<li>
							<a tabindex="-1" href="extras-widgets.html"><span class="icon-star"></span>Widgets</a>
						</li>
					</ul>
				</li>
				<li class="lp-dropdown">
					<a href="#" class="lp-dropdown-toggle" id="pages-dropdown"><span class="icon-file-alt"></span>Pages</a>
					<ul class="lp-dropdown-menu simple" data-dropdown-owner="pages-dropdown">
						<li>
							<a tabindex="-1" href="index.html"><i class="icon-signin"></i>&nbsp;&nbsp;Sign In</a>
						</li>
						<li>
							<a tabindex="-1" href="pages-signup.html"><i class="icon-check"></i>&nbsp;&nbsp;Sign Up</a>
						</li>
						<li>
							<a tabindex="-1" href="pages-messages.html"><i class="icon-envelope-alt"></i>&nbsp;&nbsp;Messages</a>
						</li>
						<li>
							<a tabindex="-1" href="pages-stream.html"><i class="icon-leaf"></i>&nbsp;&nbsp;Stream</a>
						</li>
						<li>
							<a tabindex="-1" href="pages-pricing.html"><i class="icon-money"></i>&nbsp;&nbsp;Pricing</a>
						</li>
						<li>
							<a tabindex="-1" href="pages-invoice.html"><i class="icon-pencil"></i>&nbsp;&nbsp;Invoice</a>
						</li>
						<li>
							<a tabindex="-1" href="pages-map.html"><i class="icon-map-marker"></i>&nbsp;&nbsp;Full page map</a>
						</li>
						<li>
							<a tabindex="-1" href="pages-error-404.html"><i class="icon-unlink"></i>&nbsp;&nbsp;Error 404</a>
						</li>
						<li>
							<a tabindex="-1" href="pages-error-500.html"><i class="icon-bug"></i>&nbsp;&nbsp;Error 500</a>
						</li>
						<li>
							<a tabindex="-1" href="pages-blank.html"><i class="icon-bookmark-empty"></i>&nbsp;&nbsp;Blank page</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="icon-caret-down"></div>
		<div class="icon-caret-up"></div>
	</nav> -->
	<!-- / Left navigation panel -->
	
	<!-- Page content
		================================================== -->
	<section class="container">

    <?php

    ?>

    <form action="php/registerProducts.php" method="post">

        <h2>Registro de productos</h2>
        <br>
        <br>
        <br>
        <br>


        Nombre del producto:<br>
        <input type="text" name="nombreProducto" placeholder="Escribe aquí el nombre del producto" style="width: 300px;">
        <br>
        <!-- TODO: Programar contador regresivo del los carácteres que se van mostrando -->
        Descripción del producto:<br>
        <textarea name="descripcion" cols="300" rows="5" placeholder="Escribe aqui una breve decripción del producto" style="width: 400px;" ></textarea>
        <br>
        Precio:<br>
        <input type="number" name="precio" placeholder="Precio" style="width: 100px;"> Euros
        <br>
        Selecciona un periodo de renovación <br><br>
        <input type="radio"> 1 mes (? Euros)<br>
        <input type="radio"> 3 mes (? Euros)<br>
        <input type="radio"> 6 mes (? Euros)<br>
        <input type="radio"> 1 año (? Euros)<br>

        <br><br>
        <input type="submit" value="Limpiar campos">
        <input type="submit" value="Introducir">

    </form>

   <div id="exito" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            <h2>Registro insertado correctamente</h2>
            <p>This is a sample modal box that can be created using the powers of CSS3.</p>
            <p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
        </div>
    </div>

    <div id="fracaso" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>El registro no ha sido procesado correctamente</h2>
        <p>This is a sample modal box that can be created using the powers of CSS3.</p>
        <p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
    </div>
    </div>


		<!-- ================================================== -->

		<section class="row-fluid" id="layout-examples" style="margin-bottom: 20px">
			<div class="span4">
				<h3 class="box-header">
					Stacked-left layout
				</h3>
				<div class="box no-border non-collapsible">
					<p>
						By default AdminFlare uses stacked-left layout.
					</p>
					<div class="layout-example">
						<div></div>
					</div>
				</div>
			</div>

			<div class="span4">
				<h3 class="box-header">
					Centered layout
				</h3>
				<div class="box no-border non-collapsible">
					<p>
						To use centered layout add <code>.centered-layout</code> to <code>&lt;body&gt;</code>.
					</p>
					<div class="layout-example" style="text-align: center">
						<div></div>
					</div>
				</div>
			</div>

			<div class="span4">
				<h3 class="box-header">
					Fluid layout
				</h3>
				<div class="box no-border non-collapsible">
					<p>
						To use fluid layout add <code>.fluid-layout</code> to <code>&lt;body&gt;</code>.
					</p>
					<div class="layout-example">
						<div style="width: 100%"></div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Grid example
			================================================== -->
		<!--<section class="row-fluid grid-example" id="grid-example">
			<h3 class="box-header">
				Grid example
			</h3>
			<div class="box no-border">
				<div class="span4">
					<p>
						For a multi column layout, create a <code>.row-fluid</code> and add the appropriate number of <code>.span*</code> columns. As this is a 12-column grid, each <code>.span*</code> spans a number of those 12 columns, and should always add up to 12 for each row (or the number of columns in the parent).
					</p>
				</div>
				<div class="span8">
					<pre class="prettyprint linenums">
&lt;div class=&quot;row-fluid&quot;&gt;
  &lt;div class=&quot;span1&quot;&gt;1&lt;/div&gt;
  &lt;div class=&quot;span1&quot;&gt;1&lt;/div&gt;
  &lt;div class=&quot;span1&quot;&gt;1&lt;/div&gt;
  ...
&lt;/div&gt;
...
</pre>
				</div>
			</div>
			<div class="row-fluid ">
				<div class="span1">
					1
				</div>
				<div class="span1">
					1
				</div>
				<div class="span1">
					1
				</div>
				<div class="span1">
					1
				</div>
				<div class="span1">
					1
				</div>
				<div class="span1">
					1
				</div>
				<div class="span1">
					1
				</div>
				<div class="span1">
					1
				</div>
				<div class="span1">
					1
				</div>
				<div class="span1">
					1
				</div>
				<div class="span1">
					1
				</div>
				<div class="span1">
					1
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					3
				</div>
				<div class="span4">
					4
				</div>
				<div class="span5">
					5
				</div>
			</div>
			<div class="row-fluid">
				<div class="span4">
					4
				</div>
				<div class="span8">
					8
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					12
				</div>
			</div>
		</section>
		<!-- / Grid example -->
			
		<!-- Offsetting columns
			================================================== -->
	<!--	<section class="row-fluid grid-example">
			<h3 class="box-header">
				Offsetting columns
			</h3>
			<div class="box no-border">
				<div class="span4">
					<p>
						Move columns to the right using <code>.offset*</code> classes. Each class increases the left margin of a column by a whole column. For example, <code>.offset4</code> moves <code>.span4</code> over four columns.
					</p>
				</div>
				<div class="span8">
					<pre class="prettyprint linenums">
&lt;div class=&quot;row-fluid&quot;&gt;
  &lt;div class=&quot;span6&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;span4 offset2&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;
...
</pre>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					6
				</div>
				<div class="span4 offset2">
					4 offset 2
				</div>
			</div>
			<!-- / .row-fluid -->
	<!--		<div class="row-fluid">
				<div class="span4 offset1">
					4 offset 1
				</div>
				<div class="span4 offset3">
					4 offset 3
				</div>
			</div>
			<!-- / .row-fluid -->
	<!--		<div class="row-fluid">
				<div class="span8 offset4">
					8 offset 4
				</div>
			</div>
			<!-- / .row-fluid -->
	<!--	</section>
		<!-- / Offsetting columns -->
		
		<!-- Nesting columns
			================================================== -->
	<!--	<section class="row-fluid grid-example nested">
			<h3 class="box-header">
				Nesting columns
			</h3>
			<div class="box no-border">
				<div class="span4">
					<p>
						To nest your content with the default grid, add a new <code>.row-fluid</code> and set of <code>.span*</code> columns within an existing <code>.span*</code> column. Nested rows should include a set of columns that add up to the number of columns of its parent.
					</p>
				</div>
				<div class="span8">
					<pre class="prettyprint linenums">
&lt;div class=&quot;row-fluid&quot;&gt;
  &lt;div class=&quot;span9&quot;&gt;
	Level 1 column
	&lt;div class=&quot;row-fluid&quot;&gt;
	  &lt;div class=&quot;span6&quot;&gt;Level 2&lt;/div&gt;
	  &lt;div class=&quot;span3&quot;&gt;Level 2&lt;/div&gt;
	&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					Level 1 column
					<div class="row-fluid">
						<div class="span8">
							Level 2
						</div>
						<div class="span4">
							Level 2
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- / Nesting columns -->
		
		<!-- Boxes
			================================================== -->
	<!--	<section class="row-fluid">
			<h3 class="box-header">
				Boxes
			</h3>
			<div class="row-fluid">
				<p class="box no-border" style="margin-bottom: -10px">
					Boxes that follows a <code>.box-header</code> can be collapsed by clicking on the hide link. If you need a non-collapsible box, just add a <code>.non-collapsible</code> to the <code>.box</code>.
				</p>
			</div>
			<div class="row-fluid">
				
				<div class="span6 box no-border">
					<pre class="prettyprint linenums">
&lt;h3 class=&quot;box-header&quot;&gt;
  Box Example
&lt;/h3&gt;
&lt;div class=&quot;box&quot;&gt;
  &lt;div class=&quot;span3&quot;&gt;Column 1&lt;/div&gt;
  &lt;div class=&quot;span6&quot;&gt;Column 2&lt;/div&gt;
  &lt;div class=&quot;span3&quot;&gt;Column 3&lt;/div&gt;
&lt;/div&gt;
</pre>
					<h3 class="box-header">
						Box Example
					</h3>
					<div class="box">
						<div class="span3">
							Column 1
						</div>
						<div class="span6">
							Column 2
						</div>
						<div class="span3">
							Column 3
						</div>
					</div>
				</div>
				<div class="span6 box no-border">
					<pre class="prettyprint linenums">
&lt;h3 class=&quot;box-header&quot;&gt;
  Non-bordered Box Example
&lt;/h3&gt;
&lt;div class=&quot;box no-border non-collapsible&quot;&gt;
  &lt;div class=&quot;span3&quot;&gt;Column 1&lt;/div&gt;
  &lt;div class=&quot;span6&quot;&gt;Column 2&lt;/div&gt;
  &lt;div class=&quot;span3&quot;&gt;Column 3&lt;/div&gt;
&lt;/div&gt;
</pre>
					<h3 class="box-header">
						Non-bordered Box Example
					</h3>
					<div class="box no-border non-collapsible">
						<div class="span3">
							Column 1
						</div>
						<div class="span6">
							Column 2
						</div>
						<div class="span3">
							Column 3
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- / Boxes -->
			
		<!-- Page footer
			================================================== -->
		<footer id="main-footer">
			Copyright © 2015 <a href="#">Altagora</a> , all rights reserved.
			<a href="#" class="pull-right" id="on-top-link">
				On Top &nbsp;<i class=" icon-chevron-up"></i>
			</a>
		</footer>
		<!-- / Page footer -->
	</section>
</body>
</html>
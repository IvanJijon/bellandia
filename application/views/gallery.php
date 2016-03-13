<?php
include("inc/header.php");
?>

	<!-- Gallery -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL_PLUGINS;?>Gallery/css/style.css"/>
    <script src="<?php echo URL_PLUGINS;?>Gallery/js/modernizr.custom.70736.js"></script>
    <noscript><link rel="stylesheet" type="text/css" href="<?php echo URL_PLUGINS;?>Gallery/css/noJS.css"/></noscript>
    <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    
</head>

<body>

<?php
include("inc/menu-scroll.php");
?>

<div class="content"> 
	<h1 style="margin-bottom: 55px;">
		GALERIA
	</h1>
</div>

		<div class="container">
			<div class="main">
				<div class="gamma-container gamma-loading" id="gamma-container">
					
					
					<?php
					$dir    = './plugins/Gallery/images/fotos/';
					$fotos = scandir($dir);		
					$fotos = array_diff($fotos, array('.', '..'));
					//dump($fotos);	
					?>
					<ul class="gamma-gallery">
						<?php foreach ($fotos as $foto){ ?>
						<li>
							<div data-alt="no_foto" data-description="" data-max-width="1800" data-max-height="1350">
								<div data-src="<?php echo URL_PLUGINS;?>Gallery/images/fotos/<?php echo $foto;?>" data-min-width="1300"></div>
								<div data-src="<?php echo URL_PLUGINS;?>Gallery/images/fotos/<?php echo $foto;?>" data-min-width="1000"></div>
								<div data-src="<?php echo URL_PLUGINS;?>Gallery/images/fotos/<?php echo $foto;?>" data-min-width="700"></div>
								<div data-src="<?php echo URL_PLUGINS;?>Gallery/images/fotos/<?php echo $foto;?>" data-min-width="300"></div>
								<div data-src="<?php echo URL_PLUGINS;?>Gallery/images/fotos/<?php echo $foto;?>" data-min-width="200"></div>
								<div data-src="<?php echo URL_PLUGINS;?>Gallery/images/fotos/<?php echo $foto;?>" data-min-width="140"></div>
								<div data-src="<?php echo URL_PLUGINS;?>Gallery/images/fotos/<?php echo $foto;?>"></div>
								<noscript>
									<img src="<?php echo URL_PLUGINS;?>Gallery/images/fotos/<?php echo $foto;?>" alt="no_foto"/>
								</noscript>
							</div>
						</li>
						
						<?php } ?>
						
					</ul>

					<div class="gamma-overlay"></div>

					

				</div>								
			</div><!--/main-->
		</div><!--/container-->
				


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php echo URL_PLUGINS;?>Gallery/js/jquery.masonry.min.js"></script>
<script src="<?php echo URL_PLUGINS;?>Gallery/js/jquery.history.js"></script>
<script src="<?php echo URL_PLUGINS;?>Gallery/js/js-url.min.js"></script>
<script src="<?php echo URL_PLUGINS;?>Gallery/js/jquerypp.custom.js"></script>
<script src="<?php echo URL_PLUGINS;?>Gallery/js/gamma.js"></script>
<script type="text/javascript">
	
	$(function() {

		var GammaSettings = {
				// order is important!
				viewport : [ {
					width : 1200,
					columns : 5
				}, {
					width : 900,
					columns : 4
				}, {
					width : 500,
					columns : 3
				}, { 
					width : 320,
					columns : 2
				}, { 
					width : 0,
					columns : 2
				} ]
		};

		Gamma.init( GammaSettings, fncallback );


		// Example how to add more items (just a dummy):

		var page = 0,
			items = ['<li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xxxlarge/<?php echo $foto;?>" data-min-width="1300"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xxlarge/<?php echo $foto;?>" data-min-width="1000"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xlarge/<?php echo $foto;?>" data-min-width="700"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/large/<?php echo $foto;?>" data-min-width="300"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/medium/<?php echo $foto;?>" data-min-width="200"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/small/<?php echo $foto;?>" data-min-width="140"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xsmall/<?php echo $foto;?>"></div><noscript><img src="<?php echo URL_PLUGINS;?>Gallery/images/xsmall/<?php echo $foto;?>" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xxxlarge/<?php echo $foto;?>" data-min-width="1300"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xxlarge/<?php echo $foto;?>" data-min-width="1000"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xlarge/<?php echo $foto;?>" data-min-width="700"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/large/<?php echo $foto;?>" data-min-width="300"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/medium/<?php echo $foto;?>" data-min-width="200"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/small/<?php echo $foto;?>" data-min-width="140"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xsmall/<?php echo $foto;?>"></div><noscript><img src="<?php echo URL_PLUGINS;?>Gallery/images/xsmall/<?php echo $foto;?>" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xxxlarge/<?php echo $foto;?>" data-min-width="1300"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xxlarge/<?php echo $foto;?>" data-min-width="1000"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xlarge/<?php echo $foto;?>" data-min-width="700"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/large/<?php echo $foto;?>" data-min-width="300"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/medium/<?php echo $foto;?>" data-min-width="200"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/small/<?php echo $foto;?>" data-min-width="140"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xsmall/<?php echo $foto;?>"></div><noscript><img src="<?php echo URL_PLUGINS;?>Gallery/images/xsmall/<?php echo $foto;?>" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xxxlarge/<?php echo $foto;?>" data-min-width="1300"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xxlarge/<?php echo $foto;?>" data-min-width="1000"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xlarge/<?php echo $foto;?>" data-min-width="700"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/large/<?php echo $foto;?>" data-min-width="300"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/medium/<?php echo $foto;?>" data-min-width="200"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/small/<?php echo $foto;?>" data-min-width="140"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xsmall/<?php echo $foto;?>"></div><noscript><img src="<?php echo URL_PLUGINS;?>Gallery/images/xsmall/<?php echo $foto;?>" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xxxlarge/<?php echo $foto;?>" data-min-width="1300"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xxlarge/<?php echo $foto;?>" data-min-width="1000"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xlarge/<?php echo $foto;?>" data-min-width="700"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/large/<?php echo $foto;?>" data-min-width="300"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/medium/<?php echo $foto;?>" data-min-width="200"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/small/<?php echo $foto;?>" data-min-width="140"></div><div data-src="<?php echo URL_PLUGINS;?>Gallery/images/xsmall/<?php echo $foto;?>"></div><noscript><img src="<?php echo URL_PLUGINS;?>Gallery/images/xsmall/<?php echo $foto;?>" alt="img03"/></noscript></div></li>']

		function fncallback() {

			$( '#loadmore' ).show().on( 'click', function() {

				++page;
				var newitems = items[page-1]
				if( page <= 1 ) {
					
					Gamma.add( $( newitems ) );

				}
				if( page === 1 ) {

					$( this ).remove();

				}

			} );

		}

	});

</script>




<?php 
include("inc/home-footer.php");
?>

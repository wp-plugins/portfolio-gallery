<?php
function front_end_portfolio($images, $paramssld, $portfolio)
{

 ob_start();
	$portfolioID=$portfolio[0]->id;
	$portfoliotitle=$portfolio[0]->name;
	$portfolioheight=$portfolio[0]->sl_height;
	$portfoliowidth=$portfolio[0]->sl_width;
	$portfolioeffect=$portfolio[0]->portfolio_list_effects_s;
	$slidepausetime=($portfolio[0]->description+$portfolio[0]->param);
	$portfoliopauseonhover=$portfolio[0]->pause_on_hover;
	$portfolioposition=$portfolio[0]->sl_position;
	$slidechangespeed=$portfolio[0]->param;

?>
<script>
	var lightbox_transition = '<?php echo $paramssld['light_box_transition'];?>';
	var lightbox_speed = <?php echo $paramssld['light_box_speed'];?>;
	var lightbox_fadeOut = <?php echo $paramssld['light_box_fadeout'];?>;
	var lightbox_title = <?php echo $paramssld['light_box_title'];?>;
	var lightbox_scalePhotos = <?php echo $paramssld['light_box_scalephotos'];?>;
	var lightbox_scrolling = <?php echo $paramssld['light_box_scrolling'];?>;
	var lightbox_opacity = <?php echo ($paramssld['light_box_opacity']/100)+0.001;?>;
	var lightbox_open = <?php echo $paramssld['light_box_open'];?>;
	var lightbox_returnFocus = <?php echo $paramssld['light_box_returnfocus'];?>;
	var lightbox_trapFocus = <?php echo $paramssld['light_box_trapfocus'];?>;
	var lightbox_fastIframe = <?php echo $paramssld['light_box_fastiframe'];?>;
	var lightbox_preloading = <?php echo $paramssld['light_box_preloading'];?>;
	var lightbox_overlayClose = <?php echo $paramssld['light_box_overlayclose'];?>;
	var lightbox_escKey = <?php echo $paramssld['light_box_esckey'];?>;
	var lightbox_arrowKey = <?php echo $paramssld['light_box_arrowkey'];?>;
	var lightbox_loop = <?php echo $paramssld['light_box_loop'];?>;
	var lightbox_closeButton = <?php echo $paramssld['light_box_closebutton'];?>;
	var lightbox_previous = "<?php echo $paramssld['light_box_previous'];?>";
	var lightbox_next = "<?php echo $paramssld['light_box_next'];?>";
	var lightbox_close = "<?php echo $paramssld['light_box_close'];?>";
	var lightbox_html = <?php echo $paramssld['light_box_html'];?>;
	var lightbox_photo = <?php echo $paramssld['light_box_photo'];?>;
	var lightbox_width = '<?php if($paramssld['light_box_size_fix'] == 'false'){ echo 'false';} else { echo $paramssld['light_box_width']; } ?>';
	var lightbox_height = '<?php if($paramssld['light_box_size_fix'] == 'false'){ echo 'false';} else { echo $paramssld['lightbox_height']; } ?>';
	var lightbox_innerWidth = '<?php echo $paramssld['light_box_innerwidth'];?>';
	var lightbox_innerHeight = '<?php echo $paramssld['light_box_innerheight'];?>';
	var lightbox_initialWidth = '<?php echo $paramssld['light_box_initialwidth'];?>';
	var lightbox_initialHeight = '<?php echo $paramssld['light_box_initialheight'];?>';
	var lightbox_maxWidth = <?php if($paramssld['light_box_size_fix'] == 'true'){ echo 'false';} else { echo $paramssld['light_box_maxwidth']; } ?>;
	var lightbox_maxHeight = <?php if($paramssld['light_box_size_fix'] == 'true'){ echo 'false';} else { echo $paramssld['light_box_maxheight']; } ?>;
	var lightbox_slideshow = <?php echo $paramssld['light_box_slideshow'];?>;
	var lightbox_slideshowSpeed = <?php echo $paramssld['light_box_slideshowspeed'];?>;
	var lightbox_slideshowAuto = <?php echo $paramssld['light_box_slideshowauto'];?>;
	var lightbox_slideshowStart = "<?php echo $paramssld['light_box_slideshowstart'];?>";
	var lightbox_slideshowStop = "<?php echo $paramssld['light_box_slideshowstop'];?>";
	var lightbox_fixed = <?php echo $paramssld['light_box_fixed'];?>;
	<?php
	$pos = $paramssld['slider_title_position'];
	switch($pos){ 
	case 1:
	?>
		var lightbox_top = '10%';
		var lightbox_bottom = false;
		var lightbox_left = '10%';
		var lightbox_right = false;
	<?php
	break;	
	case 1:
	?>
		var lightbox_top = '10%';
		var lightbox_bottom = false;
		var lightbox_left = '10%';
		var lightbox_right = false;
	<?php
	break;	
	case 2:
	?>
		var lightbox_top = '10%';
		var lightbox_bottom = false;
		var lightbox_left = false;
		var lightbox_right = false;
	<?php
	break;	
	case 3:
	?>
		var lightbox_top = '10%';
		var lightbox_bottom = false;
		var lightbox_left = false;
		var lightbox_right = '10%';
	<?php
	break;
	case 4:
	?>
		var lightbox_top = false;
		var lightbox_bottom = false;
		var lightbox_left = '10%';
		var lightbox_right = false;
	<?php
	break;	
	case 5:
	?>
		var lightbox_top = false;
		var lightbox_bottom = false;
		var lightbox_left = false;
		var lightbox_right = false;
	<?php
	break;	
	case 6:
	?>
		var lightbox_top = false;
		var lightbox_bottom = false;
		var lightbox_left = false;
		var lightbox_right = '10%';
	<?php
	break;	
	case 7:
	?>
		var lightbox_top = false;
		var lightbox_bottom = '10%';
		var lightbox_left = '10%';
		var lightbox_right = false;
	<?php
	break;	
	case 8:
	?>
		var lightbox_top = false;
		var lightbox_bottom = '10%';
		var lightbox_left = false;
		var lightbox_right = false;
	<?php
	break;	
	case 9:
	?>
		var lightbox_top = false;
		var lightbox_bottom = '10%';
		var lightbox_left = false;
		var lightbox_right = '10%';
	<?php
	break;	
	} ?>
	
	var lightbox_reposition = <?php echo $paramssld['light_box_reposition'];?>;
	var lightbox_retinaImage = <?php echo $paramssld['light_box_retinaimage'];?>;
	var lightbox_retinaUrl = <?php echo $paramssld['light_box_retinaurl'];?>;
	var lightbox_retinaSuffix = "<?php echo $paramssld['light_box_retinasuffix'];?>";
	
				jQuery(document).ready(function(){
				jQuery("#huge_it_portfolio_content a[href$='.jpg'], #huge_it_portfolio_content a[href$='.png'], #huge_it_portfolio_content a[href$='.gif']").addClass('group1');
				jQuery(".group1").colorbox({rel:'group1'});
				jQuery(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				jQuery('.non-retina').colorbox({rel:'group5', transition:'none'})
				jQuery('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				

				jQuery("#click").click(function(){ 
					jQuery('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		
</script>
	<!--Huge IT portfolio START-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		if ( !(is_plugin_active( 'lightbox/lightbox.php' ) )) { 
		?>
	<link href="<?php echo plugins_url('../style/colorbox-'.$paramssld['light_box_style'].'.css', __FILE__);?>" rel="stylesheet" type="text/css" />
	<?php } ?>
	<link href="<?php echo plugins_url('../style/portfolio-all.css', __FILE__);?>" rel="stylesheet" type="text/css" />
	<script src="<?php echo plugins_url('../js/jquery.colorbox.js', __FILE__);?>"></script>
	<script src="<?php echo plugins_url('../js/portfolio-all.js', __FILE__);?>"></script>
	<link rel="stylesheet" href="<?php echo plugins_url('../style/style2-os.css', __FILE__);?>" />
	<script src="<?php echo plugins_url('../js/jquery.hugeitmicro.min.js', __FILE__);?>"></script>
	<link href="<?php echo plugins_url('../style/lightbox.css', __FILE__);?>" rel="stylesheet" type="text/css" />
	
	
	<?php
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		if ( !(is_plugin_active( 'wp-lightbox-2/wp-lightbox-2.php' ) )) { ?>

	<?php } ?>
	
	
	
	
	

	<?php 
	$i = $portfolioeffect;
	switch ($i) {
	
	
	/////////////////////////////// VIEW 0 Toggle Up/Down Blocks /////////////////////////////////////////
    case 0:
	?>

<style type="text/css"> 
.element {
	background:#<?php echo $paramssld['ht_view0_element_background_color']?>;
	width:<?php echo $paramssld['ht_view0_block_width']; ?>px !important;
	margin: 5px;
	float: left;
	overflow: hidden;
	outline:none;
	border:<?php echo $paramssld['ht_view0_element_border_width']; ?>px solid #<?php echo $paramssld['ht_view0_element_border_color']; ?>;
}

.element.large,
.variable-sizes .element.large,
.variable-sizes .element.large.width2.height2 {
	width: <?php echo $paramssld['ht_view0_block_width']; ?>px;
	z-index: 10;
}

.default-block {
	position:relative;
	width:<?php echo $paramssld['ht_view0_block_width']; ?>px;
	height:<?php echo $paramssld['ht_view0_block_height']+45;?>px;
} 

.default-block .image-block {
	margin:0px;
	padding:0px;
	line-height:0px;
	border-bottom:1px solid #<?php echo $paramssld['ht_view0_element_border_color']; ?>;
}

.default-block img {
	margin:0px !important;
	padding:0px !important;
	max-width:none !important;
	width:<?php echo $paramssld['ht_view0_block_width']; ?>px !important;
	height:<?php echo $paramssld['ht_view0_block_height']; ?>px !important;
	border-radius:0px;
}

.default-block .title-block {
	position:relative;
	display:block;
	height:35px;
	padding:10px 0px 0px 0px;
	width:<?php echo $paramssld['ht_view0_block_width']; ?>px !important;
}

.default-block .title-block h3 {
	position:relative;
	margin:0px !important;
	padding:0px 0px 0px 5px !important;
	width:<?php echo $paramssld['ht_view0_block_width']-30; ?>px !important;
	text-overflow: ellipsis;
	overflow: hidden; 
	white-space:nowrap;
	font-weight:normal;
	color:#<?php echo $paramssld['ht_view0_title_font_color']; ?>;
	font-size:<?php echo $paramssld['ht_view0_title_font_size']; ?>px !important;
	line-height:<?php echo $paramssld['ht_view0_title_font_size']+4; ?>px !important;
}

.element .title-block .open-close-button {
	width:20px;
	height:20px;
	display:block;
	position:absolute;
	top:13px;
	right:2%;
	background:url('<?php echo  plugins_url( '../images/open-close.'.$paramssld['ht_view0_togglebutton_style'].'.png' , __FILE__ ); ?>') left top no-repeat;
	z-index:5;
	cursor:pointer;
	opacity:0.33;
}

 .element:hover .title-block .open-close-button {opacity:1;}

.element.large .open-close-button {
	background:url('<?php echo  plugins_url( '../images/open-close.'.$paramssld['ht_view0_togglebutton_style'].'.png' , __FILE__ ); ?>') left bottom no-repeat;
}

.wd-portfolio-panel {
	position: absolute;
	display:block;
	width:<?php echo $paramssld['ht_view0_block_width']-10; ?>px !important;
	margin:0px 5px 0px 5px;
	padding:0px;
	text-align:left;
	top:<?php echo $paramssld['ht_view0_block_height']+45; ?>px;  
	z-index:6; 
	height:200px;
}


.wd-portfolio-panel .description-block, .element div.right-block .description-block * {
	position:relative;
	clear:both;
}

.wd-portfolio-panel .description-block p,.wd-portfolio-panel .description-block * {	
	text-align:justify;
	font-weight:normal;
	font-size:<?php echo $paramssld['ht_view0_description_font_size']; ?>px;
	color:#<?php echo $paramssld['ht_view0_description_color']; ?>;
	margin:0px;
	padding:0px;
}



.wd-portfolio-panel .description-block h1,
.wd-portfolio-panel .description-block h2,
.wd-portfolio-panel .description-block h3,
.wd-portfolio-panel .description-block h4,
.wd-portfolio-panel .description-block h5,
.wd-portfolio-panel .description-block h6,
.wd-portfolio-panel .description-block p, 
.wd-portfolio-panel .description-block strong,
.wd-portfolio-panel .description-block span {
	padding:2px !important;
	margin:0px !important;
}

.wd-portfolio-panel .description-block ul,
.wd-portfolio-panel .description-block li {
	padding:2px 0px 2px 5px;
	margin:0px 0px 0px 8px;
}


.wd-portfolio-panel .thumbs-list {
	position:relative;
	clear:both;
	list-style:none;
	display:table;
	width:100%;
	padding:0px;
	margin:3px 0px 0px 0px;
	text-align:center;
}

.wd-portfolio-panel .thumbs-list li {
	display:inline-block;
	margin:0px 3px 0px 2px;
}

.wd-portfolio-panel .thumbs-list li a {
	display:block;
	width:<?php echo $paramssld['ht_view0_thumbs_width']; ?>px;
	height:<?php echo $paramssld['ht_view0_thumbs_width']; ?>px;
	opacity:0.7;
	display:table;
}

.wd-portfolio-panel .thumbs-list li a:hover {
	opacity:1;
}

.wd-portfolio-panel img {
	margin:0px !important;
	padding:0px !important;
	display:table-cell;
	vertical-align:middle;
	width:<?php echo $paramssld['ht_view0_thumbs_width']; ?>px !important;
	max-height:<?php echo $paramssld['ht_view0_thumbs_width']; ?>px !important;
	width:100%;
	height:100%;
}

.wd-portfolio-panel > div {
	position:relative;
	clear:both;
	padding-top:10px;
	margin-bottom:10px;
	<?php if($paramssld['ht_view0_show_separator_lines']=="on") {?>
		background:url('<?php echo  plugins_url( '../images/divider.line.png' , __FILE__ ); ?>') center top repeat-x;
	<?php } ?>
}

.wd-portfolio-panel .button-block {
	padding-top:10px;
	margin-bottom:10px;
	
}

.wd-portfolio-panel .button-block a, .wd-portfolio-panel .button-block a:link, .wd-portfolio-panel .button-block a:visited {
	padding:6px 12px;
	text-decoration:none;
	display:inline-block;
	font-size:<?php echo $paramssld['ht_view0_linkbutton_font_size']; ?>px;
	background:#<?php echo $paramssld['ht_view0_linkbutton_background_color']; ?>;
	color:#<?php echo $paramssld['ht_view0_linkbutton_color']; ?>;
}

.wd-portfolio-panel .button-block a:hover, .wd-portfolio-panel .button-block a:focus, .wd-portfolio-panel .button-block a:active {
	background:#<?php echo $paramssld['ht_view0_linkbutton_background_hover_color']; ?>;
	color:#<?php echo $paramssld['ht_view0_linkbutton_font_hover_color']; ?>;
	text-decoration:none;
}

</style>
  <section id="huge_it_portfolio_content">
  <div id="huge_it_portfolio_container" class="super-list variable-sizes clearfix">
  	<?php

	foreach($images as $key=>$row)
	{
		$link = $row->sl_url;
		$descnohtml=strip_tags($row->description);
		$result = substr($descnohtml, 0, 50);
		?>
		<div class="element   " data-symbol="<?php echo $row->name; ?>" data-category="alkaline-earth">
			<div class="default-block">
				<div class="image-block">
					<?php $imgurl=explode(";",$row->image_url); ?>
					<?php 	if($row->image_url != ';'){ ?>
					<img id="wd-cl-img<?php echo $key; ?>" src="<?php echo $imgurl[0]; ?>" />
					<?php } else { ?>
					<img id="wd-cl-img<?php echo $key; ?>" src="images/noimage.jpg" />
					<?php
					} ?>	
				</div>
				<div class="title-block">
					<h3 class="title"><?php echo $row->name; ?></h3>
					<div class="open-close-button"></div>
				</div>
			</div>
				  
			<div class="wd-portfolio-panel" id="panel<?php echo $key; ?>">
			<?php if($paramssld['ht_view0_show_thumbs']=='on' and $paramssld['ht_view0_thumbs_position']=="before")
				{?>
					<div>
						<ul class="thumbs-list">
							<?php
							$imgurl=explode(";",$row->image_url);
							array_pop($imgurl);
							foreach($imgurl as $key1=>$img)
							{
							?>
							<li>
								<a href="<?php echo $img; ?>" class="group1"><img src="<?php echo $img; ?>"></a>
							</li>
							<?php
							}
							?>
						</ul>
					</div>
				<?php } 
				if($paramssld['ht_view0_show_description']=='on'){?>
					<div class="description-block">
						<p><?php echo $row->description; ?></p>
					</div>
				<?php }
				if($paramssld['ht_view0_show_thumbs']=='on' and $paramssld['ht_view0_thumbs_position']=="after"){?>
					<div>
						<ul class="thumbs-list">
							<?php
							$imgurl=explode(";",$row->image_url);
							array_pop($imgurl);
							foreach($imgurl as $key=>$img)
							{
							?>
							<li>
								<a href="<?php echo $img; ?>" class="group1"><img src="<?php echo $img; ?>"></a>
							</li>
							<?php
							}
							?>
						</ul>
					</div>
				<?php } 
				if($paramssld['ht_view0_show_linkbutton']=='on'){?>
					<div class="button-block">
						<a href="<?php echo $link; ?>" <?php if ($row->link_target=="on"){echo 'target="_blank"';}?>><?php echo $paramssld['ht_view0_linkbutton_text']; ?></a>
					</div>
				<?php } ?>
			</div>
		</div>
		
		<?php
	}
	?>
  </div>
 </section><script> 
jQuery(function(){
var defaultBlockHeight=<?php echo $paramssld['ht_view0_block_height']; ?>;
var defaultBlockWidth=<?php echo $paramssld['ht_view0_block_width']; ?>;
var $container = jQuery('#huge_it_portfolio_container');


  // add randomish size classes
  $container.find('.element').each(function(){
	var $this = jQuery(this),
		number = parseInt( $this.find('.number').text(), 10 );
		//alert(number);
	if ( number % 7 % 2 === 1 ) {
	  $this.addClass('width2');
	}
	if ( number % 3 === 0 ) {
	  $this.addClass('height2');
	}
  });

$container.hugeitmicro({
  itemSelector : '.element',
  masonry : {
	columnWidth : <?php echo $paramssld['ht_view0_block_width']; ?>+20+<?php echo $paramssld['ht_view0_border_width']*2; ?>
  },
  masonryHorizontal : {
	rowHeight: 300+20
  },
  cellsByRow : {
	columnWidth : <?php echo $paramssld['ht_view0_block_width']; ?>+20+<?php echo $paramssld['ht_view0_border_width']*2; ?>,
	rowHeight : 240
  },
  cellsByColumn : {
	columnWidth : 300+20,
	rowHeight : 240
  },
  getSortData : {
	symbol : function( $elem ) {
	  return $elem.attr('data-symbol');
	},
	category : function( $elem ) {
	  return $elem.attr('data-category');
	},
	number : function( $elem ) {
	  return parseInt( $elem.find('.number').text(), 10 );
	},
	weight : function( $elem ) {
	  return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
	},
	name : function ( $elem ) {
	  return $elem.find('.name').text();
	}
  }
});


  var $optionSets = jQuery('#huge_it_portfolio_options .option-set'),
	  $optionLinks = $optionSets.find('a');

  $optionLinks.click(function(){
	var $this = jQuery(this);

	if ( $this.hasClass('selected') ) {
	  return false;
	}
	var $optionSet = $this.parents('.option-set');
	$optionSet.find('.selected').removeClass('selected');
	$this.addClass('selected');


	var options = {},
		key = $optionSet.attr('data-option-key'),
		value = $this.attr('data-option-value');

	value = value === 'false' ? false : value;
	options[ key ] = value;
	if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {

	  changeLayoutMode( $this, options )
	} else {

	  $container.hugeitmicro( options );
	}
	
	return false;
  });




  var isHorizontal = false;
  function changeLayoutMode( $link, options ) {
	var wasHorizontal = isHorizontal;
	isHorizontal = $link.hasClass('horizontal');

	if ( wasHorizontal !== isHorizontal ) {

	  var style = isHorizontal ? 
		{ height: '100%', width: $container.width() } : 
		{ width: 'auto' };

	  $container.filter(':animated').stop();

	  $container.addClass('no-transition').css( style );
	  setTimeout(function(){
		$container.removeClass('no-transition').hugeitmicro( options );
	  }, 700)
	} else {
	  $container.hugeitmicro( options );
	}
  }


	$container.delegate( '.default-block', 'click', function(){
		
		var strheight=0;
		jQuery(this).parents('.element').find('.wd-portfolio-panel > div').each(function(){
			strheight+=jQuery(this).outerHeight()+10;
			//alert(strheight);
		})
		strheight+=<?php echo $paramssld['ht_view0_block_height']+45; ?>;
		
		if(jQuery(this).parents('.element').hasClass("large")){
			jQuery(this).parents('.element').animate({
				height: "<?php echo $paramssld['ht_view0_block_height']+45; ?>px"
			}, 300, function() {
				jQuery(this).removeClass('large');
				$container.hugeitmicro('reLayout');
			});
			
			jQuery(this).parents('.element').removeClass("active");
			return false;
		}
		
	
		jQuery(this).parents('.element').css({height:strheight});
		jQuery(this).parents('.element').addClass('large');

		$container.hugeitmicro('reLayout');
		jQuery(this).parents('.element').css({height:"<?php echo $paramssld['ht_view0_block_height']+45; ?>px"});		 
		 
		//alert(strheight);
		 
		 jQuery(this).parents('.element').animate({
			height:strheight+"px",
		  }, 300,function(){	$container.hugeitmicro('reLayout');});
	});

	var $sortBy = jQuery('#sort-by');
	jQuery('#shuffle a').click(function(){
	  $container.hugeitmicro('shuffle');
	  $sortBy.find('.selected').removeClass('selected');
	  $sortBy.find('[data-option-value="random"]').addClass('selected');
	  return false;
	});
});
</script>
	
<?php        
        break;
	
	///////////////////////////////// VIEW 1 FullHeight Blocks //////////////////////////////////////////////
	
	case 1;
      
	  
	  ?>
<style type="text/css"> 
.element {
  width:<?php echo $paramssld['ht_view1_block_width']; ?>px;
  height:auto;
  margin: 5px;
  float: left;
  overflow: hidden;
  position: relative;
  outline:none; 
  background:#<?php echo $paramssld['ht_view1_element_background_color']?>;
  border:<?php echo $paramssld['ht_view1_element_border_width']; ?>px solid #<?php echo $paramssld['ht_view1_element_border_color']; ?>;
}

.default-block {
	position:relative;;
	width:<?php echo $paramssld['ht_view1_block_width']; ?>px;
} 

.default-block .image-block {
	margin:0px;
	padding:0px;
	line-height:0px;
	border:1px solid #<?php echo $paramssld['ht_view1_element_border_color']; ?>;
}

.default-block img {
  margin:0px !important;
  padding:0px !important;
  max-width:none !important;
  width:<?php echo $paramssld['ht_view1_block_width']; ?>px !important;
  border-radius:0px;
}

.default-block .title-block {
	display:block;
	height:35px;
	padding:10px 0px 0px 0px;
	width:100%;
}

.default-block .title-block h3 {
	position:relative;
	margin:0px !important;
	padding:0px 5px 0px 5px !important;
	width:<?php echo $paramssld['ht_view1_block_width']; ?>px !important;
	text-overflow: ellipsis;
	overflow: hidden; 
	white-space:nowrap;
	font-weight:normal;
	color:#<?php echo $paramssld['ht_view1_title_font_color']; ?>;
	font-size:<?php echo $paramssld['ht_view1_title_font_size']; ?>px !important;
	line-height:<?php echo $paramssld['ht_view1_title_font_size']+4; ?>px !important;
}


.wd-portfolio-panel {
	position: relative;
	display:block;
	width:<?php echo $paramssld['ht_view1_block_width']-10; ?>px !important;
	margin:10px 5px 0px 5px;
	padding:0px;
	text-align:left;
}

.wd-portfolio-panel .description-block p,.wd-portfolio-panel .description-block * {	
	text-align:justify;
	font-weight:normal;
	font-size:<?php echo $paramssld['ht_view1_description_font_size']; ?>px !important;
	color:#<?php echo $paramssld['ht_view1_description_color']; ?>;
	margin:0px !important;
	padding:0px !important;
}


.wd-portfolio-panel .description-block h1,
.wd-portfolio-panel .description-block h2,
.wd-portfolio-panel .description-block h3,
.wd-portfolio-panel .description-block h4,
.wd-portfolio-panel .description-block h5,
.wd-portfolio-panel .description-block h6,
.wd-portfolio-panel .description-block p, 
.wd-portfolio-panel .description-block strong,
.wd-portfolio-panel .description-block span {
	padding:2px !important;
	margin:0px !important;
}

.wd-portfolio-panel .description-block ul,
.wd-portfolio-panel .description-block li {
	padding:2px 0px 2px 5px;
	margin:0px 0px 0px 8px;
}


.wd-portfolio-panel .thumbs-list {
	list-style:none;
	clear:both;
	display:table;
	width:100%;
	padding:0px;
	margin:3px 0px 0px 0px;
	text-align:center;
}

.wd-portfolio-panel .thumbs-list li {
	display:inline-block;
	margin:0px 3px 0px 2px;
}

.wd-portfolio-panel .thumbs-list li a {
	display:block;
	width:<?php echo $paramssld['ht_view1_thumbs_width']; ?>px;
	height:<?php echo $paramssld['ht_view1_thumbs_width']; ?>px;
	opacity:0.7;
	display:table;
}

.wd-portfolio-panel .thumbs-list li a:hover {
	opacity:1;
}

.wd-portfolio-panel img {
	margin:0px !important;
	padding:0px !important;
	display:table-cell;
	vertical-align:middle;
	width:<?php echo $paramssld['ht_view1_thumbs_width']; ?>px !important;
	max-height:<?php echo $paramssld['ht_view1_thumbs_width']; ?>px !important;
	width:100%;
	height:100%;
}

.wd-portfolio-panel > div {
	padding-top:10px;
	margin-bottom:10px;
	<?php if($paramssld['ht_view1_show_separator_lines']=="on") {?>
		background:url('<?php echo  plugins_url( '../images/divider.line.png' , __FILE__ ); ?>') center top repeat-x;
	<?php } ?>
}

.wd-portfolio-panel .button-block {
	padding-top:10px;
	margin-bottom:10px;
	
}

.wd-portfolio-panel .button-block a, .wd-portfolio-panel .button-block a:link, .wd-portfolio-panel .button-block a:visited {
	padding:10px;
	display:inline-block;
	font-size:<?php echo $paramssld['ht_view1_linkbutton_font_size']; ?>px;
	background:#<?php echo $paramssld['ht_view1_linkbutton_background_color']; ?>;
	color:#<?php echo $paramssld['ht_view1_linkbutton_color']; ?>;
	padding:6px 12px;
	text-decoration:none;
}

.wd-portfolio-panel .button-block a:hover, .wd-portfolio-panel .button-block a:focus, .wd-portfolio-panel .button-block a:active {
	background:#<?php echo $paramssld['ht_view1_linkbutton_background_hover_color']; ?>;
	color:#<?php echo $paramssld['ht_view1_linkbutton_font_hover_color']; ?>;
	text-decoration:none;
}

</style>
  <section id="huge_it_portfolio_content">
  <div id="huge_it_portfolio_container" class="super-list variable-sizes clearfix">
  	<?php

	foreach($images as $key=>$row)
	{
		$link = $row->sl_url;
		$descnohtml=strip_tags($row->description);
		$result = substr($descnohtml, 0, 50);
		?>
		<div class="element   " data-symbol="<?php echo $row->name; ?>" data-category="alkaline-earth">
			<div class="default-block">
				<div class="image-block">
					<?php $imgurl=explode(";",$row->image_url); ?>
					<?php 	if($row->image_url != ';'){ ?>
					<img id="wd-cl-img<?php echo $key; ?>" src="<?php echo $imgurl[0]; ?>" />
					<?php } else { ?>
					<img id="wd-cl-img<?php echo $key; ?>" src="images/noimage.jpg" />
					<?php
					} ?>	
				</div>
				<div class="title-block">
					<h3 class="title"><?php echo $row->name; ?></h3>
				</div>
			</div>
				  
			<div class="wd-portfolio-panel" id="panel<?php echo $key; ?>">
			<?php if($paramssld['ht_view1_show_thumbs']=='on' and $paramssld['ht_view1_thumbs_position']=="before")
				{?>
					<div>
						<ul class="thumbs-list">
							<?php
							$imgurl=explode(";",$row->image_url);
							array_pop($imgurl);
							foreach($imgurl as $key=>$img)
							{
							?>
							<li>
								<a href="<?php echo $img; ?>" class="group1"><img src="<?php echo $img; ?>"></a>
							</li>
							<?php
							}
							?>
						</ul>
					</div>
				<?php } 
				if($paramssld['ht_view1_show_description']=='on'){?>
					<div class="description-block">
						<p><?php echo $row->description; ?></p>
					</div>
				<?php }
				if($paramssld['ht_view1_show_thumbs']=='on' and $paramssld['ht_view1_thumbs_position']=="after"){?>
					<div>
						<ul class="thumbs-list">
							<?php
							$imgurl=explode(";",$row->image_url);
							array_pop($imgurl);
							foreach($imgurl as $key=>$img)
							{
							?>
							<li>
								<a href="<?php echo $img; ?>" class="group1"><img src="<?php echo $img; ?>"></a>
							</li>
							<?php
							}
							?>
						</ul>
					</div>
				<?php } 
				if($paramssld['ht_view1_show_linkbutton']=='on'){?>
					<div class="button-block">
						<a href="<?php echo $link; ?>" <?php if ($row->link_target=="on"){echo 'target="_blank"';}?>><?php echo $paramssld['ht_view1_linkbutton_text']; ?></a>
					</div>
				<?php } ?>
			</div>
		</div>
		
		<?php
	}
	?>
  </div>
 </section>
 <script>
   jQuery(function(){
    var defaultBlockHeight=<?php echo $paramssld['ht_view1_block_width']; ?>;
	var defaultBlockWidth=<?php echo $paramssld['ht_view1_block_width']; ?>;
    var $container = jQuery('#huge_it_portfolio_container');
    
    
      // add randomish size classes
      $container.find('.element').each(function(){
        var $this = jQuery(this),
            number = parseInt( $this.find('.number').text(), 10 );
			//alert(number);
        if ( number % 7 % 2 === 1 ) {
          $this.addClass('width2');
        }
        if ( number % 3 === 0 ) {
          $this.addClass('height2');
        }
      });
    
    $container.hugeitmicro({
      itemSelector : '.element',
      masonry : {
        columnWidth : <?php echo $paramssld['ht_view1_block_width']; ?>+20+<?php echo $paramssld['ht_view1_border_width']*2; ?>
      },
      masonryHorizontal : {
        rowHeight: 300+20
      },
      cellsByRow : {
        columnWidth : 300+20,
        rowHeight : 240
      },
      cellsByColumn : {
        columnWidth : 300+20,
        rowHeight : 240
      },
      getSortData : {
        symbol : function( $elem ) {
          return $elem.attr('data-symbol');
        },
        category : function( $elem ) {
          return $elem.attr('data-category');
        },
        number : function( $elem ) {
          return parseInt( $elem.find('.number').text(), 10 );
        },
        weight : function( $elem ) {
          return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
        },
        name : function ( $elem ) {
          return $elem.find('.name').text();
        }
      }
    });
    
    
      var $optionSets = jQuery('#huge_it_portfolio_options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = jQuery(this);

        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  

        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');

        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {

          changeLayoutMode( $this, options )
        } else {

          $container.hugeitmicro( options );
        }
        
        return false;
      });


    

      var isHorizontal = false;
      function changeLayoutMode( $link, options ) {
        var wasHorizontal = isHorizontal;
        isHorizontal = $link.hasClass('horizontal');

        if ( wasHorizontal !== isHorizontal ) {

          var style = isHorizontal ? 
            { height: '100%', width: $container.width() } : 
            { width: 'auto' };

          $container.filter(':animated').stop();

          $container.addClass('no-transition').css( style );
          setTimeout(function(){
            $container.removeClass('no-transition').hugeitmicro( options );
          }, 100 )
        } else {
          $container.hugeitmicro( options );
        }
      }
     
    var $sortBy = jQuery('#sort-by');
    jQuery('#shuffle a').click(function(){
      $container.hugeitmicro('shuffle');
      $sortBy.find('.selected').removeClass('selected');
      $sortBy.find('[data-option-value="random"]').addClass('selected');
      return false;
    });
	
	  jQuery(window).load(function(){
		$container.hugeitmicro('reLayout');
	  });


  });
</script>
	  
	  <?php
	  
        break;
/////////////////////////////// VIEW 2 Popup /////////////////////////////
		  case 2:
      
	
	  ?>

<script> 
jQuery(function(){
    var defaultBlockHeight=<?php echo $paramssld['ht_view2_element_height']+37; ?>;
	var defaultBlockWidth=<?php echo $paramssld['ht_view2_element_width']; ?>;
    var $container = jQuery('#huge_it_portfolio_container');

      // add randomish size classes
      $container.find('.element').each(function(){
        var $this = jQuery(this),
            number = parseInt( $this.find('.number').text(), 10 );
			//alert(number);
        if ( number % 7 % 2 === 1 ) {
          $this.addClass('width2');
        }
        if ( number % 3 === 0 ) {
          $this.addClass('height2');
        }
      });
    
    $container.hugeitmicro({
      itemSelector : '.element',
      masonry : {
        columnWidth : defaultBlockWidth+20
      },
      masonryHorizontal : {
        rowHeight: defaultBlockHeight+20
      },
      cellsByRow : {
        columnWidth : defaultBlockWidth+20,
        rowHeight : defaultBlockHeight
      },
      cellsByColumn : {
        columnWidth : defaultBlockWidth+20,
        rowHeight : defaultBlockHeight
      },
      getSortData : {
        symbol : function( $elem ) {
          return $elem.attr('data-symbol');
        },
        category : function( $elem ) {
          return $elem.attr('data-category');
        },
        number : function( $elem ) {
          return parseInt( $elem.find('.number').text(), 10 );
        },
        weight : function( $elem ) {
          return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
        },
        name : function ( $elem ) {
          return $elem.find('.name').text();
        }
      }
	 
    });
    
    
	var $optionSets = jQuery('#huge_it_portfolio_options .option-set'),
	$optionLinks = $optionSets.find('a');

	$optionLinks.click(function(){
		var $this = jQuery(this);

		if ( $this.hasClass('selected') ) {
		  return false;
		}
		var $optionSet = $this.parents('.option-set');
		$optionSet.find('.selected').removeClass('selected');
		$this.addClass('selected');

		var options = {},
			key = $optionSet.attr('data-option-key'),
			value = $this.attr('data-option-value');

		value = value === 'false' ? false : value;
		options[ key ] = value;
		if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {

		  changeLayoutMode( $this, options )
		} else {

		  $container.hugeitmicro( options );
		}

		return false;
	});    

	var isHorizontal = false;
	function changeLayoutMode( $link, options ) {
		var wasHorizontal = isHorizontal;
		isHorizontal = $link.hasClass('horizontal');

		if ( wasHorizontal !== isHorizontal ) {

		  var style = isHorizontal ? 
			{ height: '100%', width: $container.width() } : 
			{ width: 'auto' };

		  $container.filter(':animated').stop();

		  $container.addClass('no-transition').css( style );
		  setTimeout(function(){
			$container.removeClass('no-transition').hugeitmicro( options );
		  }, 100 )
		} else {
		  $container.hugeitmicro( options );
		}
	}

    var $sortBy = jQuery('#sort-by');
    jQuery('#shuffle a').click(function(){
      $container.hugeitmicro('shuffle');
      $sortBy.find('.selected').removeClass('selected');
      $sortBy.find('[data-option-value="random"]').addClass('selected');
      return false;
    });
});

jQuery(document).ready(function(){

	jQuery('.element .image-block .image-overlay a').on('click',function(){
		var strid = jQuery(this).attr('href').replace('#','');
		jQuery('body').append('<div id="huge-popup-overlay"></div>');
		jQuery('#huge_it_portfolio_popup_list').insertBefore('#huge-popup-overlay');
		var height = jQuery(window).height();
		var width=jQuery(window).width();
		if(width<=767){
			jQuery('body').scrollTop(0);
		}
		jQuery('#huge_it_portfolio_pupup_element_'+strid).addClass('active').css({height:height*0.7});
		jQuery('#huge_it_portfolio_popup_list').addClass('active');
		
		jQuery('#huge_it_portfolio_pupup_element_'+strid+' ul.thumbs-list li:first-child').addClass('active');
		var strsrc=jQuery('#huge_it_portfolio_pupup_element_'+strid+' ul.thumbs-list li:first-child a img').attr('src');
		jQuery('#huge_it_portfolio_pupup_element_'+strid+' .image-block img').attr('src',strsrc);
		//alert(strsrc);
		return false;
	});
	
	jQuery('#huge_it_portfolio_popup_list .popup-wrapper .right-block ul.thumbs-list li a').click(function(){
		var width=jQuery(window).width();
		if(width<=767){
			jQuery('body').scrollTop(0);
		}
		jQuery(this).parent().parent().find('li.active').removeClass('active');
		jQuery(this).parent().addClass('active');
		jQuery(this).parents('.right-block').prev().find('img').attr('src',jQuery(this).find('img').attr('src'));
		return false;
	});
	
	jQuery('#huge_it_portfolio_popup_list .heading-navigation .close').on('click',function(){
		closePopup();
		return false;
	});
	
	jQuery('body').on('click','#huge-popup-overlay',function(){
		closePopup();
		return false;
	});
	
	function closePopup() {
		jQuery('#huge-popup-overlay').remove();
		jQuery('#huge_it_portfolio_popup_list li').removeClass('active');
		jQuery('#huge_it_portfolio_popup_list').removeClass('active');
	}
	
}); 
</script>

<style type="text/css"> 

.element {
	width:<?php echo $paramssld['ht_view2_element_width']; ?>px;
	height:<?php echo $paramssld['ht_view2_element_height']+45; ?>px;
	margin:0px 0px 10px 0px;
	background:#<?php echo $paramssld['ht_view2_element_background_color']; ?>;
	border:<?php echo $paramssld['ht_view2_element_border_width']; ?>px solid #<?php echo $paramssld['ht_view2_element_border_color']; ?>;
	outline:none;
}

.element .image-block {
	position:relative;
	width:100%;
}

.element .image-block img {
	margin:0px !important;
	padding:0px !important;
	width:<?php echo $paramssld['ht_view2_element_width']; ?>px !important;
	height:<?php echo $paramssld['ht_view2_element_height']; ?>px !important;
	display:block;
	border-radius: 0px !important;
	box-shadow: 0 0px 0px rgba(0, 0, 0, 0) !important; 
}

.element .image-block .image-overlay {
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	background: <?php
			list($r,$g,$b) = array_map('hexdec',str_split($paramssld['ht_view2_element_overlay_color'],2));
				$titleopacity=$paramssld["ht_view2_element_overlay_transparency"]/100;						
				echo 'rgba('.$r.','.$g.','.$b.','.$titleopacity.')  !important'; 		
	?>;
	display:none;
}

.element:hover .image-block  .image-overlay {
	display:block;
}

.element .image-block .image-overlay a {
	position:absolute;
	top:0px;
	left:0px;
	display:block;
	width:100%;
	height:100%;
	background:url('<?php echo  plugins_url( '../images/zoom.'.$paramssld["ht_view2_zoombutton_style"].'.png' , __FILE__ ); ?>') center center no-repeat;
}

.element .title-block {
	position:relative;
	height: 30px;
	margin: 0;
	padding: 15px 0px 15px 0px;
	-webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.1);
	box-shadow: inset 0 1px 0 rgba(0,0,0,.1);
}

.element .title-block h3 {
	position:relative;
	margin:0px !important;
	padding:0px 1% 0px 1% !important;
	width:98%;
	text-overflow: ellipsis;
	overflow: hidden; 
	white-space:nowrap;
	font-weight:normal;
	font-size: <?php echo $paramssld["ht_view2_popup_title_font_size"];?>px !important;
	line-height: <?php echo $paramssld["ht_view2_popup_title_font_size"]+4;?>px !important;
	color:#<?php echo $paramssld["ht_view2_popup_title_font_color"];?>;
}

.element .title-block .button-block {
	position:absolute;
	right:0px;
	top:0px;
	display:none;
	vertical-align:middle;
	height:30px;
	padding:10px 10px 4px 10px;
	background: <?php
			list($r,$g,$b) = array_map('hexdec',str_split($paramssld['ht_view2_element_overlay_color'],2));
				$titleopacity=$paramssld["ht_view2_element_overlay_transparency"]/100;						
				echo 'rgba('.$r.','.$g.','.$b.','.$titleopacity.')  !important'; 		
	?>;
	border-left: 1px solid rgba(0,0,0,.05);
}
.element:hover .title-block .button-block {display:block;}

.element .title-block a,.element .title-block a:link,.element .title-block a:visited,
.element .title-block a:hover,.element .title-block a:focus,.element .title-block a:active {
	position:relative;
	display:block;
	vertical-align:middle;
	padding: 3px 10px 3px 10px; 
	border-radius:3px;
	font-size:<?php echo $paramssld["ht_view2_element_linkbutton_font_size"];?>px;
	background:#<?php echo $paramssld["ht_view2_element_linkbutton_background_color"];?>;
	color:#<?php echo $paramssld["ht_view2_element_linkbutton_color"];?>;
	text-decoration:none;
}

/*#####POPUP#####*/

#huge_it_portfolio_popup_list {
	position:fixed;
	display:table;
	width:80%;
	top:7%;
	left:7%;
	margin:0px !important;
	list-style:none;
	z-index:2000;
	display:none;
	height:90%;
}

#huge_it_portfolio_popup_list.active {display:table;}

#huge_it_portfolio_popup_list li.pupup-element {
	position:relative;
	display:none;
	width:100%;
	padding:40px 0px 20px 0px;
	min-height:100%;
	position:relative;
	background:#<?php echo $paramssld["ht_view2_popup_background_color"];?>;
}

#huge_it_portfolio_popup_list li.pupup-element.active {
	display:block;
}

#huge_it_portfolio_popup_list .heading-navigation {
	position:absolute;
	width:100%;
	height:40px;
	top:0px;
	left:0px;
	z-index:2001;
	background:url('<?php echo  plugins_url( '../images/divider.line.png' , __FILE__ ); ?>') center bottom repeat-x;
}

#huge_it_portfolio_popup_list .heading-navigation .close,#huge_it_portfolio_popup_list .heading-navigation .close:link, #huge_it_portfolio_popup_list .heading-navigation .close:visited {
	position:relative;
	float:right;
	width:40px;
	height:40px;
	display:block;
	background:url('<?php echo  plugins_url( '../images/close.popup.'.$paramssld["ht_view2_popup_closebutton_style"].'.png' , __FILE__ ); ?>') center center no-repeat;
	border-left:1px solid #ccc;
	opacity:.65;
}

#huge_it_portfolio_popup_list .heading-navigation .close:hover, #huge_it_portfolio_popup_list .heading-navigation .close:focus, #huge_it_portfolio_popup_list .heading-navigation .close:active {opacity:1;}


#huge_it_portfolio_popup_list li.pupup-element .popup-wrapper {
	overflow-y:scroll;
	position:relative;
	width:96%;
	height:98%;
	padding:2% 2% 0% 2%;
}

#huge_it_portfolio_popup_list .popup-wrapper .image-block {
	width:60%;
	position:relative;
	float:left;
	margin-right:2%;
	border-right:1px solid #ccc;
	min-width:200px;
}

#huge_it_portfolio_popup_list .popup-wrapper .image-block img {
	width:100% !important;
	display:block;
	margin:0px !important;
	padding:0px !important;
}

#huge_it_portfolio_popup_list .popup-wrapper .right-block {
	width:37%;
	position:relative;
	float:left;
}

#huge_it_portfolio_popup_list li.pupup-element .popup-wrapper .right-block > div {
	padding-top:10px;
	margin-bottom:10px;
	<?php if($paramssld['ht_view2_show_separator_lines']=="on") {?>
		background:url('<?php echo  plugins_url( '../images/divider.line.png' , __FILE__ ); ?>') center top repeat-x;
	<?php } ?>
}
#huge_it_portfolio_popup_list li.pupup-element .popup-wrapper .right-block > div:last-child {background:none;}


#huge_it_portfolio_popup_list .popup-wrapper .right-block .title {
	position:relative;
	display:block;
	margin:0px 0px 10px 0px !important;
	font-size:<?php echo $paramssld["ht_view2_element_title_font_size"];?>px !important;
	line-height:<?php echo $paramssld["ht_view2_element_title_font_size"]+4;?>px !important;
	color:#<?php echo $paramssld["ht_view2_element_title_font_color"];?>;
}

#huge_it_portfolio_popup_list .popup-wrapper .right-block .description {
	clear:both;
	position:relative;
	font-weight:normal;
	text-align:justify;
	font-size:<?php echo $paramssld["ht_view2_description_font_size"];?>px !important;
	color:#<?php echo $paramssld["ht_view2_description_color"];?>;
}

#huge_it_portfolio_popup_list .popup-wrapper .right-block .description h1,
#huge_it_portfolio_popup_list .popup-wrapper .right-block .description h2,
#huge_it_portfolio_popup_list .popup-wrapper .right-block .description h3,
#huge_it_portfolio_popup_list .popup-wrapper .right-block .description h4,
#huge_it_portfolio_popup_list .popup-wrapper .right-block .description h5,
#huge_it_portfolio_popup_list .popup-wrapper .right-block .description h6,
#huge_it_portfolio_popup_list .popup-wrapper .right-block .description p, 
#huge_it_portfolio_popup_list .popup-wrapper .right-block .description strong,
#huge_it_portfolio_popup_list .popup-wrapper .right-block .description span {
	padding:2px !important;
	margin:0px !important;
}

#huge_it_portfolio_popup_list .popup-wrapper .right-block .description ul,
#huge_it_portfolio_popup_list .popup-wrapper .right-block .description li {
	padding:2px 0px 2px 5px;
	margin:0px 0px 0px 8px;
}

#huge_it_portfolio_popup_list .popup-wrapper .right-block ul.thumbs-list {
	list-style:none;
	display:table;
	position:relative;
	clear:both;
	width:100%;
	margin:0px auto;
	padding:0px;
}

#huge_it_portfolio_popup_list .popup-wrapper .right-block ul.thumbs-list li {
	display:block;
	float:left;
	width:<?php echo $paramssld["ht_view2_thumbs_width"];?>px;
	height:<?php echo $paramssld["ht_view2_thumbs_height"];?>px;
	margin:0px 2% 5px 1% !important;
	opacity:0.45;
}

#huge_it_portfolio_popup_list .popup-wrapper .right-block ul.thumbs-list li.active,#huge_it_portfolio_popup_list .popup-wrapper .right-block ul.thumbs-list li:hover {
	opacity:1;
}

#huge_it_portfolio_popup_list .popup-wrapper .right-block ul.thumbs-list li a {
	display:block;
}

#huge_it_portfolio_popup_list .popup-wrapper .right-block ul.thumbs-list li img {
	margin:0px !important;
	padding:0px !important;
	width:<?php echo $paramssld["ht_view2_thumbs_width"];?>px !important;
	height:<?php echo $paramssld["ht_view2_thumbs_height"];?>px !important;
}


.pupup-element .button-block {
	position:relative;
}

.pupup-element .button-block a,.pupup-element .button-block a:link,.pupup-element .button-block a:visited{
	position:relative;
	display:inline-block;
	padding:6px 12px;
	background:#<?php echo $paramssld["ht_view2_popup_linkbutton_background_color"];?>;
	color:#<?php echo $paramssld["ht_view2_popup_linkbutton_color"];?>;
	font-size:<?php echo $paramssld["ht_view2_popup_linkbutton_font_size"];?>;
	text-decoration:none;
}

.pupup-element .button-block a:hover,.pupup-element .button-block a:focus,.pupup-element .button-block a:active {
	background:#<?php echo $paramssld["ht_view2_popup_linkbutton_background_hover_color"];?>;
	color:#<?php echo $paramssld["ht_view2_popup_linkbutton_font_hover_color"];?>;
}


#huge-popup-overlay {
	position:fixed;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	z-index:199;
	background: <?php
			list($r,$g,$b) = array_map('hexdec',str_split($paramssld['ht_view2_popup_overlay_color'],2));
				$titleopacity=$paramssld["ht_view2_popup_overlay_transparency_color"]/100;						
				echo 'rgba('.$r.','.$g.','.$b.','.$titleopacity.')  !important'; 		
	?>
}


@media only screen and (max-width: 767px) {
	
	#huge_it_portfolio_popup_list {
		position:absolute;
		left:0px;
		top:0px;
		width:100%;
		height:auto !important;
		left:0px;
	}
	
	#huge_it_portfolio_popup_list li.pupup-element {
		margin:0px;
		height:auto !important;
		position:absolute;
		left:0px;
		top:0px;
	}

	#huge_it_portfolio_popup_list li.pupup-element .popup-wrapper {
		height:auto !important;
		overflow-y:auto;
	}


	#huge_it_portfolio_popup_list .popup-wrapper .image-block {
		width:100%;
		float:none;
		clear:both;
		margin-right:0px;
		border-right:0px;
	}

	#huge_it_portfolio_popup_list .popup-wrapper .right-block {
		width:100%;
		float:none;
		clear:both;
		margin-right:0px;
		border-right:0px;
	}

	#huge-popup-overlay {
		position:fixed;
		top:0px;
		left:0px;
		width:100%;
		height:100%;
		z-index:199;
	}

}
</style>
<section id="huge_it_portfolio_content">
  <div id="huge_it_portfolio_container" class="super-list variable-sizes clearfix">
  	<?php
	
	foreach($images as $key=>$row)
	{
		$link = $row->sl_url;
		$descnohtml=strip_tags($row->description);
		$result = substr($descnohtml, 0, 50);
		?>
		<div class="element" tabindex="0" data-symbol="<?php echo $row->name; ?>" data-category="alkaline-earth">
			<div class="image-block">
				<?php $imgurl=explode(";",$row->image_url); ?>
					<?php 	if($row->image_url != ';'){ ?>
					<img id="wd-cl-img<?php echo $key; ?>" src="<?php echo $imgurl[0]; ?>" alt="" />
					<?php } else { ?>
					<img id="wd-cl-img<?php echo $key; ?>" src="images/noimage.jpg" alt="" />
					<?php
					} ?>	
				<div class="image-overlay"><a href="#<?php echo $row->id; ?>"></a></div>
			</div>
			<div class="title-block">
				<h3><?php echo $row->name; ?></h3>
				<?php if($paramssld["ht_view2_element_show_linkbutton"]=='on'){?>
					<div class="button-block"><a href="<?php echo $row->sl_url; ?>" <?php if ($row->link_target=="on"){echo 'target="_blank"';}?> ><?php echo $paramssld["ht_view2_element_linkbutton_text"]; ?></a></div>
				<?php } ?>
			</div>
		</div>	
		<?php
	}?>
	<div style="clear:both;"></div>
  </div>
</section>
<ul id="huge_it_portfolio_popup_list">
	<?php
	foreach($images as $key=>$row)
	{
		$imgurl=explode(";",$row->image_url);array_pop($imgurl);
		$link = $row->sl_url;
		$descnohtml=strip_tags($row->description);
		$result = substr($descnohtml, 0, 50);
		?>
		<li class="pupup-element" id="huge_it_portfolio_pupup_element_<?php echo $row->id; ?>">
			<div class="heading-navigation">
				<a href="#close" class="close"></a>
				<div style="clear:both;"></div>
			</div>
			<div class="popup-wrapper">
				<div class="image-block">
					<?php 	if($row->image_url != ';'){ ?>
					<img id="wd-cl-img<?php echo $key; ?>" src="<?php echo $imgurl[0]; ?>" alt="" />
					<?php } else { ?>
					<img id="wd-cl-img<?php echo $key; ?>" src="images/noimage.jpg" alt="" />
					<?php
					} ?>					
				</div>
				<div class="right-block">
					<?php if($paramssld["ht_view2_show_popup_title"]=='on'){?><h3 class="title"><?php echo $row->name; ?></h3><?php } ?>
					
					<?php if($paramssld["ht_view2_thumbs_position"]=='before' and $paramssld["ht_view2_show_thumbs"] == 'on'){?>
					<div><ul class="thumbs-list">
						<?php   
								foreach($imgurl as $key=>$img){?>
									<li><a href="<?php echo $row->sl_url; ?>" class="group1"><img src="<?php echo $img; ?>"></a></li>
								<?php } ?>
					</ul></div>
					<?php } ?>
					
					<?php if($paramssld["ht_view2_show_description"]=='on'){?><div class="description"><?php echo $row->description; ?></div><?php } ?>
					
					<?php if($paramssld["ht_view2_thumbs_position"]=='after' and $paramssld["ht_view2_show_thumbs"] == 'on'){?>
					<div><ul class="thumbs-list">
						<?php   $imgurl=explode(";",$row->image_url);array_pop($imgurl);
								foreach($imgurl as $key=>$img){?>
									<li><a href="#" class="group1"><img src="<?php echo $img; ?>"></a></li>
								<?php } ?>
					</ul></div>
					<?php } ?>
					
					<?php if($paramssld["ht_view2_show_popup_linkbutton"]=='on'){?>
						<div class="button-block">
						<a href="<?php echo $link; ?>"  <?php if ($row->link_target=="on"){echo 'target="_blank"';}?>><?php echo $paramssld["ht_view2_popup_linkbutton_text"]; ?></a>
						</div>
					<?php } ?>
					<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</li>
		<?php
	}?>
</ul>
	  
  <?php	  
	break;
	////////////////////////////// VIEW 3 FullWidth ////////////////////////////////////////////// 
	case 3:


  ?>

<style type="text/css"> 

.element {
	position: relative;
	width:93%; 
	margin:5px 0px 5px 0px;
	padding:2%;
	clear:both;
	overflow: hidden;
	border:<?php echo $paramssld['ht_view3_element_border_width']; ?>px solid #<?php echo $paramssld['ht_view3_element_border_color']; ?>;
	background:#<?php echo $paramssld['ht_view3_element_background_color']; ?>;
}

.element > div {
	display:table-cell;
}

.element div.left-block {
	padding-right:10px;
}

.element div.left-block .main-image-block {
	clear:both;
	width:<?php echo $paramssld['ht_view3_mainimage_width']; ?>px; 
}

.element div.left-block .main-image-block img {
	margin:0px !important;
	padding:0px !important;
	width:<?php echo $paramssld['ht_view3_mainimage_width']; ?>px !important; 
	height:auto;
}

.element div.left-block .thumbs-block {
	position:relative;
	margin-top:10px;
}

.element div.left-block .thumbs-block ul {
	width:<?php echo $paramssld['ht_view3_mainimage_width']; ?>px; 
	height:auto;
	display:table;
	margin:0px;
	padding:0px;
	list-style:none;
}

.element div.left-block .thumbs-block ul li {
	margin:0px 3px 0px 2px;
	padding:0px;
	width:<?php echo $paramssld['ht_view3_thumbs_width']; ?>px; 
	height:<?php echo $paramssld['ht_view3_thumbs_height']; ?>px; 
	float:left;
}

.element div.left-block .thumbs-block ul li a {
	display:block;
	width:<?php echo $paramssld['ht_view3_thumbs_width']; ?>px; 
	height:<?php echo $paramssld['ht_view3_thumbs_height']; ?>px; 
}

.element div.left-block .thumbs-block ul li a img {
	margin:0px !important;
	padding:0px !important;
	width:<?php echo $paramssld['ht_view3_thumbs_width']; ?>px; 
	height:<?php echo $paramssld['ht_view3_thumbs_height']; ?>px; 
}

.element div.right-block {
	vertical-align:top;
}

.element div.right-block > div {
	width:100%;
	padding-bottom:10px;
	margin-top:10px;
	<?php if($paramssld['ht_view3_show_separator_lines']=="on") {?>
		background:url('<?php echo  plugins_url( '../images/divider.line.png' , __FILE__ ); ?>') center bottom repeat-x;
	<?php } ?>	
}

.element div.right-block > div:last-child {
	background:none;
}

.element div.right-block .title-block  {
	margin-top:3px;
}

.element div.right-block .title-block h3 {
	margin:0px;
	padding:0px;
	font-weight:normal;
	font-size:<?php echo $paramssld['ht_view3_title_font_size']; ?>px !important;
	line-height:<?php echo $paramssld['ht_view3_title_font_size']+4; ?>px !important;
	color:#<?php echo $paramssld['ht_view3_title_font_color']; ?>;
}

.element div.right-block .description-block p,.element div.right-block .description-block * {
	margin:0px;
	padding:0px;
	font-weight:normal;
	font-size:<?php echo $paramssld['ht_view3_description_font_size']; ?>px;
	color:#<?php echo $paramssld['ht_view3_description_color']; ?>;
}


.element div.right-block .description-block h1,
.element div.right-block .description-block h2,
.element div.right-block .description-block h3,
.element div.right-block .description-block h4,
.element div.right-block .description-block h5,
.element div.right-block .description-block h6,
.element div.right-block .description-block p, 
.element div.right-block .description-block strong,
.element div.right-block .description-block span {
	padding:2px !important;
	margin:0px !important;
}

.element div.right-block .description-block ul,
.element div.right-block .description-block li {
	padding:2px 0px 2px 5px;
	margin:0px 0px 0px 8px;
}

.element .button-block {
	position:relative;
}

.element div.right-block .button-block a,.element div.right-block .button-block a:link,.element div.right-block .button-block a:visited {
	position:relative;
	display:inline-block;
	padding:6px 12px;
	background:#<?php echo $paramssld["ht_view3_linkbutton_background_color"];?>;
	color:#<?php echo $paramssld["ht_view3_linkbutton_color"];?>;
	font-size:<?php echo $paramssld["ht_view3_linkbutton_font_size"];?>;
	text-decoration:none;
}

.element div.right-block .button-block a:hover,.pupup-elemen.element div.right-block .button-block a:focus,.element div.right-block .button-block a:active {
	background:#<?php echo $paramssld["ht_view3_linkbutton_background_hover_color"];?>;
	color:#<?php echo $paramssld["ht_view3_linkbutton_font_hover_color"];?>;
}



@media only screen and (max-width: 767px) {
	
	.element > div {
		display:block;
		width:100%;
		clear:both;
	}

	.element div.left-block {
		padding-right:0px;
	}

	.element div.left-block .main-image-block {
		clear:both;
		width:100%; 
	}

	.element div.left-block .main-image-block img {
		margin:0px !important;
		padding:0px !important;
		width:100% !important;  
		height:auto;
	}

	.element div.left-block .thumbs-block ul {
		width:100%; 
	}
}

</style>
  <section id="huge_it_portfolio_content">
  <div id="huge_it_portfolio_container" class="super-list variable-sizes clearfix">
  	<?php

	foreach($images as $key=>$row)
	{
		$link = $row->sl_url;
		?>
		<div class="element" data-symbol="<?php echo $row->name; ?>" data-category="alkaline-earth">
			<div class="left-block">
				<div class="main-image-block">
					<?php $imgurl=explode(";",$row->image_url); ?>
					<?php 	if($row->image_url != ';'){ ?>
						<a href="<?php echo $imgurl[0]; ?>"><img id="wd-cl-img<?php echo $key; ?>"src="<?php echo $imgurl[0]; ?>"></a>
					<?php } else { ?>
						<a href="<?php echo $imgurl[0]; ?>"><img id="wd-cl-img<?php echo $key; ?>" src="images/noimage.jpg"></a>
					<?php
					}
					?>
				</div>
				<div class="thumbs-block">
                                    <?php
                                    if($paramssld["ht_view3_show_thumbs"] == 'on')
                                        {
                                    ?>
					<ul class="thumbs-list">					
						<?php
						$imgurl=explode(";",$row->image_url);
						array_pop($imgurl);
						array_shift($imgurl);
						
						foreach($imgurl as $key=>$img)
						{
							?>
								<li><a href="<?php echo $img;?>"><img src="<?php echo $img; ?>"></a></li>
						<?php
						}
						?>
					</ul>
                                    <?php
                                    }
                                    ?>
				</div>
			</div>
			<div class="right-block">
			  <?php if($row->name!=''){?><div class="title-block"><h3><?php echo $row->name; ?></h3></div><?php } ?>
			  <?php
                          if($paramssld["ht_view3_show_description"] == 'on')
                              {
                                if($row->description!='')
                                    { ?>
                                    <div class="description-block"><p><?php echo $row->description; ?></p></div>
                              <?php } ?>
                        <?php }
                          
                                if($link!='')
                                { 
                                if($paramssld["ht_view3_show_linkbutton"] == 'on') {
                                ?>
                                    <div class="button-block">
                                            <a href="<?php echo $link; ?>" <?php if ($row->link_target=="on"){echo 'target="_blank"';}?>><?php echo $paramssld["ht_view3_linkbutton_text"]; ?></a>
                                    </div>
                                <?php }
                                } ?>
			</div>
		</div>
		
    <?php
	}
	?>
  
  </div>
 </section>
  
 <script>
  jQuery(function(){
    
    var $container = jQuery('#huge_it_portfolio_container');
    
    
      // add randomish size classes
      $container.find('.element').each(function(){
        var $this = jQuery(this),
            number = parseInt( $this.find('.number').text(), 10 );
			//alert(number);
        if ( number % 7 % 2 === 1 ) {
          $this.addClass('width2');
        }
        if ( number % 3 === 0 ) {
          $this.addClass('height2');
        }
      });
    
    $container.hugeitmicro({
      itemSelector : '.element',
      masonry : {
        columnWidth : 300+20
      },
      masonryHorizontal : {
        rowHeight: 300+20
      },
      cellsByRow : {
        columnWidth : 300+20,
        rowHeight : 240
      },
      cellsByColumn : {
        columnWidth : 300+20,
        rowHeight : 240
      },
      getSortData : {
        symbol : function( $elem ) {
          return $elem.attr('data-symbol');
        },
        category : function( $elem ) {
          return $elem.attr('data-category');
        },
        number : function( $elem ) {
          return parseInt( $elem.find('.number').text(), 10 );
        },
        weight : function( $elem ) {
          return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
        },
        name : function ( $elem ) {
          return $elem.find('.name').text();
        }
      }
    });
    
    
      var $optionSets = jQuery('#huge_it_portfolio_options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = jQuery(this);

        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  

        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');

        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {

          changeLayoutMode( $this, options )
        } else {

          $container.hugeitmicro( options );
        }
        
        return false;
      });


    

      var isHorizontal = false;
      function changeLayoutMode( $link, options ) {
        var wasHorizontal = isHorizontal;
        isHorizontal = $link.hasClass('horizontal');

        if ( wasHorizontal !== isHorizontal ) {

          var style = isHorizontal ? 
            { height: '100%', width: $container.width() } : 
            { width: 'auto' };

          $container.filter(':animated').stop();

          $container.addClass('no-transition').css( style );
          setTimeout(function(){
            $container.removeClass('no-transition').hugeitmicro( options );
          }, 100 )
        } else {
          $container.hugeitmicro( options );
        }
      }

  

      $container.delegate( '.element', 'click', function(){
	  	if(jQuery(this).hasClass("large")){
		 jQuery(this).animate({
    height: "245px"
  }, 900, function() {
     jQuery(this).toggleClass('large');
        $container.hugeitmicro('reLayout');
	
  });
			 jQuery(this).removeClass("active");
			 return false;
		}
	

	$container.hugeitmicro('reLayout');


      });

    var $sortBy = jQuery('#sort-by');
    jQuery('#shuffle a').click(function(){
      $container.hugeitmicro('shuffle');
      $sortBy.find('.selected').removeClass('selected');
      $sortBy.find('[data-option-value="random"]').addClass('selected');
      return false;
    });
	
	jQuery(window).load(function(){
		$container.hugeitmicro('reLayout');
		jQuery(window).resize(function(){$container.hugeitmicro('reLayout');});
	});

  });
</script>
	  
	  <?php
	    
        break;
		
/////////////////////////////////// VIEW 4 FAQ ////////////////////////////////////
	case 4;
      
	  
	  ?>

<style type="text/css"> 
.element {
	background:#<?php echo $paramssld['ht_view4_element_background_color']?>;
	width:<?php echo $paramssld['ht_view4_block_width']; ?>px;
	height:45px;
	margin: 5px;
	float: left;
	overflow: hidden;
	position: relative;
	outline:none;
	border:<?php echo $paramssld['ht_view4_element_border_width']; ?>px solid #<?php echo $paramssld['ht_view4_element_border_color']; ?>;
}

.element.large,
.variable-sizes .element.large,
.variable-sizes .element.large.width2.height2 {
	width: <?php echo $paramssld['ht_view4_block_width']; ?>px;
	z-index: 10;
}


.title-block {
	position:relative;
	display:block;
	height:45px;
	padding:10px 0px 0px 0px;
	width:<?php echo $paramssld['ht_view4_block_width']; ?>px;
        max-width: 467px;
}

.title-block h3 {
	position:relative;
	margin:0px;
	padding:0px 5px 0px 5px;
	width:<?php echo $paramssld['ht_view4_block_width']-40; ?>px;
	text-overflow: ellipsis;
	overflow: hidden; 
	white-space:nowrap;
	font-weight:normal;
	color:#<?php echo $paramssld['ht_view4_title_font_color']; ?>;
	font-size:<?php echo $paramssld['ht_view4_title_font_size']; ?>;
}

.element .title-block .open-close-button {
	width:20px;
	height:20px;
	position:absolute;
	top:13px;
	right:5px;
	background:url('<?php echo  plugins_url( '../images/open-close.'.$paramssld['ht_view4_togglebutton_style'].'.png' , __FILE__ ); ?>') left top no-repeat;
	z-index:5;
	cursor:pointer;
	opacity:0.33;
}

.element:hover .title-block .open-close-button {opacity:1;}

.element.large .open-close-button {
	background:url('<?php echo  plugins_url( '../images/open-close.'.$paramssld['ht_view4_togglebutton_style'].'.png' , __FILE__ ); ?>') left bottom no-repeat;
}

.wd-portfolio-panel {
	position:relative;
	clear:both;
	display:block;
	width:<?php echo $paramssld['ht_view4_block_width']-10; ?>px;
	margin:0px 5px 0px 5px !important;
	padding:0px;
	text-align:left;
	z-index:6; 
}

.wd-portfolio-panel .description-block p,.element div.right-block .description-block * {	
	text-align:justify;
	font-weight:normal;
	font-size:<?php echo $paramssld['ht_view4_description_font_size']; ?>px;
	color:#<?php echo $paramssld['ht_view4_description_color']; ?>;
	margin:0px;
	padding:0px;
}

.wd-portfolio-panel .description-block h1,
.wd-portfolio-panel .description-block h2,
.wd-portfolio-panel .description-block h3,
.wd-portfolio-panel .description-block h4,
.wd-portfolio-panel .description-block h5,
.wd-portfolio-panel .description-block h6,
.wd-portfolio-panel .description-block p, 
.wd-portfolio-panel .description-block strong,
.wd-portfolio-panel .description-block span {
	line-height:auto !important;
	padding:2px !important;
	margin:0px !important;
}

.wd-portfolio-panel .description-block ul,
.wd-portfolio-panel .description-block li {
	padding:2px 0px 2px 5px;
	margin:0px 0px 0px 8px;
}

.wd-portfolio-panel > div {
	padding-top:10px;
	margin-bottom:10px;
	<?php if($paramssld['ht_view4_show_separator_lines']=="on") {?>
		background:url('<?php echo  plugins_url( '../images/divider.line.png' , __FILE__ ); ?>') center top repeat-x;
	<?php } ?>
}

.wd-portfolio-panel .button-block {
	padding:10px 0px 10px 0px;
}

.wd-portfolio-panel .button-block a, .wd-portfolio-panel .button-block a:link, .wd-portfolio-panel .button-block a:visited {
	padding:6px 12px;
	display:inline-block;
	font-size:<?php echo $paramssld['ht_view4_linkbutton_font_size']; ?>px;
	background:#<?php echo $paramssld['ht_view4_linkbutton_background_color']; ?>;
	color:#<?php echo $paramssld['ht_view4_linkbutton_color']; ?>;
	text-decoration:none;
}

.wd-portfolio-panel .button-block a:hover, .wd-portfolio-panel .button-block a:focus, .wd-portfolio-panel .button-block a:active {
	background:#<?php echo $paramssld['ht_view4_linkbutton_background_hover_color']; ?>;
	color:#<?php echo $paramssld['ht_view4_linkbutton_font_hover_color']; ?>;
	text-decoration:none;
}


@media only screen and (max-width: <?php echo $paramssld['ht_view4_block_width']; ?>px) {
	.element {
	  width:95%;
	}

	.element.large,
	.variable-sizes .element.large,
	.variable-sizes .element.large.width2.height2 {
	  width: 95%;
	}


	.title-block {
		width:88%;
	}
}

</style>
<section id="huge_it_portfolio_content">
  <div id="huge_it_portfolio_container" class="super-list variable-sizes clearfix">
  
  	<?php

	foreach($images as $key=>$row)
	{
		$link = $row->sl_url;
		$descnohtml=strip_tags($row->description);
		$result = substr($descnohtml, 0, 50);
		?>
		<div class="element" data-symbol="<?php echo $row->name; ?>" data-category="alkaline-earth">
			<div class="title-block">
				<h3 class="title"><?php echo $row->name; ?></h3>
				<div class="open-close-button"></div>
			</div>
				  
			<div class="wd-portfolio-panel" id="panel<?php echo $key; ?>">
				<?php
				if($paramssld['ht_view4_show_description']=='on'){?>
					<div class="description-block">
						<p><?php echo $row->description; ?></p>
					</div>
				<?php }
				if($paramssld['ht_view4_show_thumbs']=='on' and $paramssld['ht_view4_thumbs_position']=="after"){?>
					<div>
						<ul class="thumbs-list">
							<?php
							$imgurl=explode(";",$row->image_url);
							array_pop($imgurl);
							foreach($imgurl as $key=>$img)
							{
							?>
							<li>
								<a href="<?php echo $img; ?>" class="group1"><img src="<?php echo $img; ?>"></a>
							</li>
							<?php
							}
							?>
						</ul>
					</div>
				<?php } 
				if($paramssld['ht_view4_show_linkbutton']=='on'){?>
					<div class="button-block">
						<a href="<?php echo $link; ?>" <?php if ($row->link_target=="on"){echo 'target="_blank"';}?>><?php echo $paramssld['ht_view4_linkbutton_text']; ?></a>
					</div>
				<?php } ?>
				<div style="clear:both"></div>
			</div>
		</div>
		
		<?php
	}
	?>
  
  </div>
 </section><script> 
jQuery(function(){
var defaultBlockHeight=<?php echo $paramssld['ht_view4_block_width']; ?>;
var defaultBlockWidth=<?php echo $paramssld['ht_view4_block_width']; ?>+20+<?php echo $paramssld['ht_view4_border_width']*2; ?>;
var $container = jQuery('#huge_it_portfolio_container');


  // add randomish size classes
  $container.find('.element').each(function(){
	var $this = jQuery(this),
		number = parseInt( $this.find('.number').text(), 10 );
		//alert(number);
	if ( number % 7 % 2 === 1 ) {
	  $this.addClass('width2');
	}
	if ( number % 3 === 0 ) {
	  $this.addClass('height2');
	}
  });

$container.hugeitmicro({
  itemSelector : '.element',
  masonry : {
	columnWidth : defaultBlockWidth
  },
  masonryHorizontal : {
	rowHeight: 45
  },
  cellsByRow : {
	columnWidth : defaultBlockWidth,
	rowHeight : 45
  },
  cellsByColumn : {
	columnWidth : defaultBlockWidth,
	rowHeight : 45
  },
  getSortData : {
	symbol : function( $elem ) {
	  return $elem.attr('data-symbol');
	},
	category : function( $elem ) {
	  return $elem.attr('data-category');
	},
	number : function( $elem ) {
	  return parseInt( $elem.find('.number').text(), 10 );
	},
	weight : function( $elem ) {
	  return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
	},
	name : function ( $elem ) {
	  return $elem.find('.name').text();
	}
  }
});


  var $optionSets = jQuery('#huge_it_portfolio_options .option-set'),
	  $optionLinks = $optionSets.find('a');

  $optionLinks.click(function(){
	var $this = jQuery(this);

	if ( $this.hasClass('selected') ) {
	  return false;
	}
	var $optionSet = $this.parents('.option-set');
	$optionSet.find('.selected').removeClass('selected');
	$this.addClass('selected');


	var options = {},
		key = $optionSet.attr('data-option-key'),
		value = $this.attr('data-option-value');

	value = value === 'false' ? false : value;
	options[ key ] = value;
	if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {

	  changeLayoutMode( $this, options )
	} else {

	  $container.hugeitmicro( options );
	}
	
	return false;
  });




  var isHorizontal = false;
  function changeLayoutMode( $link, options ) {
	var wasHorizontal = isHorizontal;
	isHorizontal = $link.hasClass('horizontal');

	if ( wasHorizontal !== isHorizontal ) {

	  var style = isHorizontal ? 
		{ height: '100%', width: $container.width() } : 
		{ width: 'auto' };

	  $container.filter(':animated').stop();

	  $container.addClass('no-transition').css( style );
	  setTimeout(function(){
		$container.removeClass('no-transition').hugeitmicro( options );
	  }, 700)
	} else {
	  $container.hugeitmicro( options );
	}
  }




	$container.delegate( '.open-close-button', 'click', function(){		
		if(jQuery(this).parents('.element').hasClass("large")){
			jQuery(this).parents('.element').animate({
				height: "45px"
			}, 700, function() {
				jQuery(this).removeClass('large');
				$container.hugeitmicro('reLayout');
			});
			
			jQuery(this).parents('.element').removeClass("active");
			return false;
		}


		jQuery(this).parents('.element').css({height:45+jQuery(this).parents('.element').find('.wd-portfolio-panel').height()});
		jQuery(this).parents('.element').addClass('large');

		$container.hugeitmicro('reLayout');
		jQuery(this).parents('.element').css({height:"45px"});
		  
		 var strheight=(jQuery(this).parents('.element').find('.wd-portfolio-panel').height()+45);
		 
		 
		 jQuery(this).parents('.element').animate({
			height:strheight+"px",
		  }, 700,function(){	$container.hugeitmicro('reLayout');});
	});

	var $sortBy = jQuery('#sort-by');
	jQuery('#shuffle a').click(function(){
	  $container.hugeitmicro('shuffle');
	  $sortBy.find('.selected').removeClass('selected');
	  $sortBy.find('[data-option-value="random"]').addClass('selected');
	  return false;
	});
	
	jQuery(window).load(function(){
		jQuery(window).resize(function(){$container.hugeitmicro('reLayout');});
	});
});
</script>
	  
	  <?php
	  
	  
	  
        break;
/////////////////////////////////// VIEW 5 Slider ////////////////////////////////////
		case 5;
?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
  <link href="<?php echo plugins_url('../style/liquid-slider.css', __FILE__);?>" rel="stylesheet" type="text/css" />
 
<style>

#main-slider {background:#<?php echo $paramssld["ht_view5_slider_background_color"];?>;}

#main-slider div.slider-content {
	position:relative;
	width:100%;
	padding:0px 0px 0px 0px;
	position:relative;
	background:#<?php echo $paramssld["ht_view5_slider_background_color"];?>;
}



[class$="-arrow"] {
	background-image:url(<?php echo plugins_url('../images/arrow.'.$paramssld["ht_view5_icons_style"].'.png', __FILE__);?>);
}

.ls-select-box {
	background:url(<?php echo plugins_url('../images/menu.'.$paramssld["ht_view5_icons_style"].'.png', __FILE__);?>) right center no-repeat #<?php echo $paramssld["ht_view5_slider_background_color"];?>;
}

#main-slider-nav-select {
	color:#<?php echo $paramssld["ht_view5_title_font_color"];?>;
}

#main-slider div.slider-content .slider-content-wrapper {
	position:relative;
	width:100%;
	padding:0px;
	display:block;
}

#main-slider .slider-content-wrapper .image-block {
	width:<?php echo $paramssld["ht_view5_main_image_width"];?>px;
	display:table-cell;
	padding:0px 10px 0px 0px;
	float:left;
}

#main-slider .slider-content-wrapper .image-block img.main-image {
	position:relative;
	width:100%;
	height:auto;
	display:block;
}

#main-slider .slider-content-wrapper .image-block ul.thumbs-list {
	list-style:none;
	display:table;
	position:relative;
	clear:both;
	width:100%;
	margin:10px 0px 0px 0px;
	padding:0px;
	clear:both;
}

#main-slider .slider-content-wrapper .image-block ul.thumbs-list li {
	display:block;
	float:left;
	width:<?php echo $paramssld["ht_view5_thumbs_width"];?>px;
	height:<?php echo $paramssld["ht_view5_thumbs_height"];?>px;
	margin:0px 2% 5px 1%;
	opacity:0.45;
}

#main-slider .slider-content-wrapper .image-block ul.thumbs-list li.active,#main-slider .slider-content-wrapper .image-block ul.thumbs-list li:hover {
	opacity:1;
}

#main-slider .slider-content-wrapper .image-block ul.thumbs-list li a {
	display:block;
}

#main-slider .slider-content-wrapper .image-block ul.thumbs-list li img {
	margin:0px !important;
	padding:0px !important;
	width:<?php echo $paramssld["ht_view5_thumbs_width"];?>px !important;
	height:<?php echo $paramssld["ht_view5_thumbs_height"];?>px !important;
}

#main-slider .slider-content-wrapper .right-block {
	display:table-cell;
}

#main-slider .slider-content-wrapper .right-block > div {
	padding-bottom:10px;
	margin-top:10px;
	<?php if($paramssld['ht_view5_show_separator_lines']=="on") {?>
		background:url('<?php echo  plugins_url( '../images/divider.line.png' , __FILE__ ); ?>') center bottom repeat-x;
	<?php } ?>
}
#main-slider .slider-content-wrapper .right-block > div:last-child {background:none;}


#main-slider .slider-content-wrapper .right-block .title {
	position:relative;
	display:block;
	margin:-10px 0px 0px 0px;
	font-size:<?php echo $paramssld["ht_view5_title_font_size"];?>px !important;
	line-height:<?php echo $paramssld["ht_view5_title_font_size"]+4;?>px !important;
	color:#<?php echo $paramssld["ht_view5_title_font_color"];?>;
}

#main-slider .slider-content-wrapper .right-block .description {
	clear:both;
	position:relative;
	font-weight:normal;
	text-align:justify;
	font-size:<?php echo $paramssld["ht_view5_description_font_size"];?>px !important;
	line-height:<?php echo $paramssld["ht_view5_description_font_size"]+4;?>px !important;
	color:#<?php echo $paramssld["ht_view5_description_color"];?>;
}

#main-slider .slider-content-wrapper .right-block .description h1,
#main-slider .slider-content-wrapper .right-block .description h2,
#main-slider .slider-content-wrapper .right-block .description h3,
#main-slider .slider-content-wrapper .right-block .description h4,
#main-slider .slider-content-wrapper .right-block .description h5,
#main-slider .slider-content-wrapper .right-block .description h6,
#main-slider .slider-content-wrapper .right-block .description p, 
#main-slider .slider-content-wrapper .right-block .description strong,
#main-slider .slider-content-wrapper .right-block .description span {
	padding:2px !important;
	margin:0px !important;
}

#main-slider .slider-content-wrapper .right-block .description ul,
#main-slider .slider-content-wrapper .right-block .description li {
	padding:2px 0px 2px 5px;
	margin:0px 0px 0px 8px;
}



#main-slider .slider-content-wrapper .button-block {
	position:relative;
}

#main-slider .slider-content-wrapper .button-block a,#main-slider .slider-content-wrapper .button-block a:link,#main-slider .slider-content-wrapper .button-block a:visited{
	position:relative;
	display:inline-block;
	padding:6px 12px;
	background:#<?php echo $paramssld["ht_view5_linkbutton_background_color"];?>;
	color:#<?php echo $paramssld["ht_view5_linkbutton_color"];?>;
	font-size:<?php echo $paramssld["ht_view5_linkbutton_font_size"];?>;
	text-decoration:none;
}

#main-slider .slider-content-wrapper .button-block a:hover,#main-slider .slider-content-wrapper .button-block a:focus,#main-slider .slider-content-wrapper .button-block a:active {
	background:#<?php echo $paramssld["ht_view5_linkbutton_background_hover_color"];?>;
	color:#<?php echo $paramssld["ht_view5_linkbutton_font_hover_color"];?>;
}

@media only screen and (min-width:500px) {
	#main-slider-nav-ul {
		visibility:hidden !important;
		height:1px;
	}
}

@media only screen and (max-width:500px) {
	#main-slider .slider-content-wrapper .image-block,#main-slider .slider-content-wrapper .right-block {
		width:100%;
		display:block;
		float:none;
		clear:both;
	}
}



</style>
<div id="main-slider" class="liquid-slider">
	<?php
	
	foreach($images as $key=>$row)
	{
		$imgurl=explode(";",$row->image_url);array_pop($imgurl);
		$link = $row->sl_url;
		$descnohtml=strip_tags($row->description);
		$result = substr($descnohtml, 0, 50);
		?>
		<div class="slider-content">
			
			<div class="slider-content-wrapper">
				<div class="image-block">
					<?php 	if($row->image_url != ';'){ ?>
					<a class="group1" href="<?php echo $imgurl[0]; ?>"><img class="main-image" src="<?php echo $imgurl[0]; ?>" alt="" /></a>
					<?php } else { ?>
					<img class="main-image" src="images/noimage.jpg" alt="" />
					<?php
					} ?>
					
					<?php if($paramssld["ht_view5_show_thumbs"]){?>
					<div><ul class="thumbs-list">
						<?php  
						array_shift($imgurl);
								foreach($imgurl as $key=>$img){?>
									<li><a class="group1" href="<?php echo $img; ?>"><img src="<?php echo $img; ?>"></a></li>
								<?php } ?>
					</ul></div>
					<?php } ?>					
				</div>
				<div class="right-block">
					<div><h2 class="title"><?php echo $row->name; ?></h2></div>
					<?php if($paramssld["ht_view5_show_description"]=='on'){?><div class="description"><?php echo $row->description; ?></div><?php } ?>
					<?php if($paramssld["ht_view5_show_linkbutton"]=='on'){?>
						<div class="button-block">
							<a class="group1" href="<?php echo $link; ?>"  <?php if ($row->link_target=="on"){echo 'target="_blank"';}?>><?php echo $paramssld["ht_view5_linkbutton_text"]; ?></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php
	} ?>
</div>
  <script src="<?php echo plugins_url('../js/jquery.liquid-slider.min.js', __FILE__);?>"></script>  
   <script>
    /**
     * If you need to access the internal property or methods, use this:
     * var api = $.data( jQuery('#main-slider')[0], 'liquidSlider');
     * console.log(api);
     */
	 jQuery('#main-slider').liquidSlider();
  </script>
<?php  
        break;
/////////////////////////////// VIEW 6 Gallery /////////////////////////////
		
		case 6:
?>

<style type="text/css"> 

.element {
        max-width: 459px;
	width:<?php echo $paramssld['ht_view6_width']; ?>px;
	margin:0px 0px 10px 0px;
	border:<?php echo $paramssld['ht_view6_border_width']; ?>px solid #<?php echo $paramssld['ht_view6_border_color']; ?>;
	border-radius:<?php echo $paramssld['ht_view6_border_radius']; ?>px;
	outline:none;
	overflow:hidden;
}

.element .image-block {
	position:relative;
	width:<?php echo $paramssld['ht_view6_width']; ?>px;
}

.element .image-block img {
	margin:0px !important;
	padding:0px !important;
	width:<?php echo $paramssld['ht_view6_width']; ?>px !important;
	height:auto;
	display:block;
	border-radius: 0px !important;
	box-shadow: 0 0px 0px rgba(0, 0, 0, 0) !important; 
}

.element .image-block img:hover {
	cursor: -webkit-zoom-in; cursor: -moz-zoom-in;
}

.element .title-block {
	position:absolute;
	
	left:0px;
	width:100%;
	padding-top:5px;
	height: <?php echo $paramssld["ht_view6_title_font_size"] + 10; ?>px;
	bottom:-<?php echo $paramssld["ht_view6_title_font_size"] + 15; ?>px;
	background: <?php
			list($r,$g,$b) = array_map('hexdec',str_split($paramssld['ht_view6_title_background_color'],2));
				$titleopacity=$paramssld["ht_view6_title_background_transparency"]/100;						
				echo 'rgba('.$r.','.$g.','.$b.','.$titleopacity.')  !important'; 		
	?>;
	 -webkit-transition: bottom 0.3s ease-out 0.1s;
     -moz-transition: bottom 0.3s ease-out 0.1s;
     -o-transition: bottom 0.3s ease-out 0.1s;
     transition: bottom 0.3s ease-out 0.1s;
}

.element:hover .title-block {bottom:0px;}

.element .title-block a, .element .title-block a:link, .element .title-block a:visited {
	position:relative;
	margin:0px;
	padding:0px 1% 0px 2%;
	width:97%;
	text-decoration:none;
	text-overflow: ellipsis;
	overflow: hidden; 
	white-space:nowrap;
	z-index:20;
	font-size: <?php echo $paramssld["ht_view6_title_font_size"];?>px;
	color:#<?php echo $paramssld["ht_view6_title_font_color"];?>;
	font-weight:normal;
}



.element .title-block a:hover, .element .title-block a:focus, .element .title-block a:active {
	color:#<?php echo $paramssld["ht_view6_title_font_hover_color"];?>;
	text-decoration:none;
}

</style>
<section id="huge_it_portfolio_content">
  <div id="huge_it_portfolio_container" class="super-list variable-sizes clearfix">
  	<?php
	
	foreach($images as $key=>$row)
	{
		$link = $row->sl_url;
		$descnohtml=strip_tags($row->description);
		$result = substr($descnohtml, 0, 50);
		?>
		<div class="element" tabindex="0" data-symbol="<?php echo $row->name; ?>" data-category="alkaline-earth">
			<div class="image-block">
				<?php $imgurl=explode(";",$row->image_url); ?>
					<?php 	if($row->image_url != ';'){ ?>
					<a href="<?php echo $imgurl[0]; ?>"><img id="wd-cl-img<?php echo $key; ?>" src="<?php echo $imgurl[0]; ?>" alt="" /></a>
					<?php } else { ?>
					<img id="wd-cl-img<?php echo $key; ?>" src="images/noimage.jpg" alt="" />
					<?php
					} ?>	
			</div>
			<?php if($row->name!=""){?>
			<div class="title-block">
				<a href="<?php echo $link; ?>" <?php if ($row->link_target=="on"){echo 'target="_blank"';}?>><?php echo $row->name; ?></a>
			</div>
			<?php } ?>
		</div>	
		<?php
	}?>
	<div style="clear:both;"></div>
  </div>
</section>

<script> 
 jQuery(function(){
	var defaultBlockWidth=<?php echo $paramssld['ht_view6_width']; ?>+20+<?php echo $paramssld['ht_view6_width']*2; ?>;
    var $container = jQuery('#huge_it_portfolio_container');
    
    
      // add randomish size classes
      $container.find('.element').each(function(){
        var $this = jQuery(this),
            number = parseInt( $this.find('.number').text(), 10 );
			//alert(number);
        if ( number % 7 % 2 === 1 ) {
          $this.addClass('width2');
        }
        if ( number % 3 === 0 ) {
          $this.addClass('height2');
        }
      });
    
$container.hugeitmicro({
  itemSelector : '.element',
  masonry : {
	columnWidth : <?php echo $paramssld['ht_view6_width']; ?>+10+<?php echo $paramssld['ht_view6_border_width']*2; ?>
  },
  masonryHorizontal : {
	rowHeight: 'auto'
  },
  cellsByRow : {
	columnWidth : <?php echo $paramssld['ht_view6_width']; ?>,
	rowHeight : 'auto'
  },
  cellsByColumn : {
	columnWidth : <?php echo $paramssld['ht_view6_width']; ?>,
	rowHeight : 'auto'
  },
  getSortData : {
	symbol : function( $elem ) {
	  return $elem.attr('data-symbol');
	},
	category : function( $elem ) {
	  return $elem.attr('data-category');
	},
	number : function( $elem ) {
	  return parseInt( $elem.find('.number').text(), 10 );
	},
	weight : function( $elem ) {
	  return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
	},
	name : function ( $elem ) {
	  return $elem.find('.name').text();
	}
  }
});
    
    
      var $optionSets = jQuery('#huge_it_portfolio_options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = jQuery(this);

        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  

        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');

        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {

          changeLayoutMode( $this, options )
        } else {

          $container.hugeitmicro( options );
        }
        
        return false;
      });


    

      var isHorizontal = false;
      function changeLayoutMode( $link, options ) {
        var wasHorizontal = isHorizontal;
        isHorizontal = $link.hasClass('horizontal');

        if ( wasHorizontal !== isHorizontal ) {

          var style = isHorizontal ? 
            { height: '100%', width: $container.width() } : 
            { width: 'auto' };

          $container.filter(':animated').stop();

          $container.addClass('no-transition').css( style );
          setTimeout(function(){
            $container.removeClass('no-transition').hugeitmicro( options );
          }, 100 )
        } else {
          $container.hugeitmicro( options );
        }
      }
     
    var $sortBy = jQuery('#sort-by');
    jQuery('#shuffle a').click(function(){
      $container.hugeitmicro('shuffle');
      $sortBy.find('.selected').removeClass('selected');
      $sortBy.find('[data-option-value="random"]').addClass('selected');
      return false;
    });

	  jQuery(window).load(function(){
		$container.hugeitmicro('reLayout');
	  });
  });
  

</script>
<?php 
}
 ?>
   
	
      <?php   
	return ob_get_clean();
}
?>


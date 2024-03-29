<?php
$breakpoint = '1200';
if( isset($howes['menu_breakpoint']) && isset($howes['menu_breakpoint_custom']) ){
 if( $howes['menu_breakpoint']=='custom' ){
  $breakpoint = $howes['menu_breakpoint_custom'];
 } else {
  $breakpoint = $howes['menu_breakpoint'];
 }
}
?>

/**
 * Responsive Menu
 * ----------------------------------------------------------------------------
 */

@media (max-width: <?php echo $breakpoint; ?>px){


    /**
     * Header Section
     * ----------------------------------------------------------------------------
     */
	#stickable-header-sticky-wrapper{
		height:auto !important;
	}	
	.masthead-header-stickyOnScroll{
		position: relative !important;
	}	
	.header-inner {
		height:auto;		
	}
	.sticky-wrapper .header-inner{
		top:0px;
	}	
	.header-inner .navbar {
		width:auto
	}	

    /**
    *  Navigation  Text color
    * ----------------------------------------------------------------------------
    */ 
    #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a:hover,
    #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu li:hover > a,
    #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu li.current-menu-item a,
    #navbar #site-navigation .mega-menu-wrap .mega-menu-flyout .mega-sub-menu li.mega-current-menu-item a,
    #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a:hover,   
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-current-menu-parent:hover > a,
    ul.nav-menu li li a:hover, 
    ul.nav-menu li li:hover > a, 
    ul.nav-menu li li.current-menu-item > a, 
    div.nav-menu > ul li li a:hover, 
    div.nav-menu > ul li li:hover > a, 
    div.nav-menu > ul li li.current-menu-item > a{
        color: <?php echo $howes['skincolor']; ?>;
    }    
    .header-text-color-white .toggled-on ul.nav-menu li li a:hover,
    .header-text-color-white .toggled-on div.nav-menu > ul li li a:hover,
    .header-text-color-dark .toggled-on ul.nav-menu li li a:hover,
    .header-text-color-dark .toggled-on div.nav-menu > ul li li a:hover,
    .header-text-color-dark  .toggled-on ul.nav-menu > li > a:hover,
    .header-text-color-white  .toggled-on ul.nav-menu > li > a:hover,
    ul.nav-menu > li:hover > a,
    div.nav-menu > ul > li:hover > a{
        color: <?php echo $howes['skincolor']; ?>;
    }
    
    .header-text-color-white .toggled-on .nav-menu, 
    .header-text-color-white .toggled-on .nav-menu > ul {
        background-color: <?php echo $howes['headerbgcolor']; ?>;
    }

    
 /**
 *  2. Navigation
 * ----------------------------------------------------------------------------
 */ 
 
    .menu-main-menu-container{
    	float:none;
    }
 	.menu-toggle {
		display: block;
		text-align: center;			
		cursor: pointer;
		padding: 0px;
		margin: 0px;
		position: absolute;
		top: 26px;
		right: 10px;
		padding-right: 0px;
	}	
	.menu-toggle > span{
		display:none;
	}	
	ul.nav-menu, div.nav-menu > ul {
		float: none;
		overflow: hidden;
		max-height: 0px;
		position: absolute;
		left: 0px;
		z-index: 9999;
	}
	.thememount-header-style-3 .menu-toggle {
		position:relative;
	}	

	/*Responsive Menu*/	
	ul.nav-menu > li > a, 
	div.nav-menu > ul > li > a{
		padding:0px;
	}
	.toggled-on  .menu-main-navigation-container{
		padding-bottom:20px;
	}
	.toggled-on .nav-menu, 
	.toggled-on .nav-menu > ul, 
	.Headerlogo, .navbar  {
		width: 100%;
	}
	#navbar #site-navigation .mega-menu-wrap,	
	.toggled-on  ul.nav-menu, 
	.Headerlogo, 
	.navbar{
		float:none
	}		
	.toggled-on .nav-menu li > ul {
		border-top:none;
		background-color: transparent;		
		float: none;
		margin-left: 20px;
		position: relative;
		left: auto;
		top: auto;
		visibility: visible;		
		opacity: 1;	
		-webkit-box-shadow: none;
		box-shadow: none;	
	}
	ul.nav-menu li ul li a, 
	div.nav-menu > ul li ul li a,
	ul.nav-menu li li.current-menu-item a{
		border:none;
	}
	.nav-menu li > ul a,
	ul.nav-menu > li.current-menu-item > a, 
	div.nav-menu > ul > li.current-menu-item > a{	
		width: auto;
	}
	.toggled-on .nav-menu li:hover > a, 
	.toggled-on .nav-menu .children a {
		background-color: transparent;	
	}
	.toggled-on .nav-menu .sub-menu .sub-menu{
		left:0px;
	}	
	.toggled-on .nav-menu .sub-menu .sub-menu, 
	.toggled-on div.nav-menu > ul .children  .children{
		top:0px;
	}	
	.toggled-on .nav-menu > li.menu-item-has-childrenmenu-without-color.menu-with-icon {
		position:relative;
	}	
	.righticon{
		position:absolute;
		right:0px;
		z-index:9999;
		top:17px;
	}
	.righticon i{
		font-size:20px;
		cursor:pointer;
	}
	.header-text-color-white .righticon i{
		color: rgba(255, 255, 255, 0.80);
	}
	.header-text-color-dark .righticon i{
		color: rgba(0, 0, 0, 0.80);
	}		
	ul.nav-menu, 
	div.nav-menu > ul {
		float:none;
		overflow: hidden;
		max-height: 0px;
		display:none;
	}	
	ul.nav-menu li ul, 
	div.nav-menu > ul .children{
		display:inherit;
	}	
	.toggled-on .nav-menu, 
	.toggled-on .nav-menu > ul {	
		display:block;
		margin-left: 0;		
		background:#fff;	
		margin-left: 0;
		padding: 15px;
		margin:0px;		
		max-height: 500px;
		overflow: auto;
		padding-top:0px;
		padding-bottom:0px;
		box-shadow: rgba(0, 0, 0, 0.129412) 3px 3px 15px;	
	}	
	ul.nav-menu .sub-menu,
	div.nav-menu > ul ul.children,
	ul.nav-menu li > ul,
	ul.nav-menu li:hover > ul,		
	div.nav-menu > ul li:hover > ul{
		overflow: hidden;
		max-height: 0px;
		-webkit-transition: max-height 0.25s ease-out;
		-moz-transition: max-height 0.25s ease-out;
		-ms-transition: max-height 0.25s ease-out;
		-o-transition: max-height 0.25s ease-out;
		transition: max-height 0.25s ease-out;
	}	
	ul.nav-menu .sub-menu.open,
	ul.nav-menu .sub-menu.open li > ul,
	div.nav-menu > ul .children.open,
	div.nav-menu > ul .children.open li > ul{
		max-height: 1000px;
	}		
	.righticon{
		display:block;
	}	
	.navbar {		
		min-height: 0px;
		margin-bottom: 0px;
	}
	ul.nav-menu > li,
	div.nav-menu > ul > li {
		position: relative;
		display: block;
		float:none;
	}	
	ul.nav-menu  > li,
	div.nav-menu > ul > li  {
		font-size: 15px;
		line-height: 15px;
		padding-top: 10px;
		padding-bottom: 10px;
		border-bottom: 1px solid rgba(255, 255, 255, 0.14);		
		margin: 0;
	}	
	ul.nav-menu  li li:last-child,
	div.nav-menu > ul li li:last-child{
		border-bottom: none;	
	} 	
	ul.nav-menu > li a,
	div.nav-menu > ul > li a {
		display:inline-block;
	}	
	ul.nav-menu li:hover > ul,
	div.nav-menu > ul li:hover > ul{
		top:0px;
	}	
	ul.nav-menu > li.menu-item-has-children > a:after,
	div.nav-menu > ul > li.menu-item-has-children > a:after,
	ul.nav-menu li ul li.menu-item-has-children > a:after, 
	div.nav-menu > ul li ul li.menu-item-has-children > a:after{
		display:none;
	}	
	.toggled-on ul.nav-menu > li:hover > a, 	
	.toggled-on ul.nav-menu li li:hover > a, 
	
	.toggled-on div.nav-menu > ul > li:hover > a, 	
	.toggled-on div.nav-menu > ul li li:hover > a,
	
	.toggled-on ul.nav-menu li li.current-menu-item > a	{
		background-color:transparent;		
	}	
	.toggled-on ul.nav-menu li li:hover a{
		border:none;
	}	
	.nav-menu .sub-menu .sub-menu, 
	div.nav-menu > ul .children .children{
		border:none;
	}	
	.nav-menu .last .sub-menu{
		left:0px;
	}
	.nav-menu .lastsecond .sub-menu .sub-menu, 
	.nav-menu .last .sub-menu .sub-menu{
		left: auto;
	}
	
	/* when  header white */		
	ul.nav-menu li, 
	div.nav-menu > ul li{
		border-bottom: 1px solid rgba(0, 0, 0, 0.08);
	}	
	/* when header white */
	.header-text-color-dark ul.nav-menu > li:hover > a{
		color: rgba(0, 0, 0, 0.72) ;
	}	
	
	/*thememount-header-style-2*/		
	.thememount-header-style-2 .header-controls {
		position: absolute;
		z-index: 1;
		right: 0;
		top: 0;
	}	
	.thememount-header-style-2 #stickable-header  .headerlogo{
		position:relative;
	}
	.thememount-header-style-2 #stickable-header ul.nav-menu, 
	.thememount-header-style-2 #stickable-header div.nav-menu > ul{
		position:absolute;
		z-index:1001;
		text-align:left;
	}
	.thememount-header-style-2 #stickable-header ul.nav-menu > li, 
	.thememount-header-style-2 #stickable-header div.nav-menu > ul > li{
		display:block;
	}	
	.thememount-header-style-2 #stickable-header ul.nav-menu > li:nth-child(3), 
	.thememount-header-style-2 #stickable-header div.nav-menu > ul > li:nth-child(3){
		margin-right:0px;
	}   	
	
	
	/*thememount-header-style-3*/	
	.thememount-header-style-3 .menu-toggle{
		padding:0px;
		height: 55px;
		line-height: 55px !important;
		top:0px;
	}		
	.thememount-header-style-3 #stickable-header ul.nav-menu > li, 
	.thememount-header-style-3 #stickable-header div.nav-menu > ul > li {			
		text-align: left;
	}	
	.thememount-header-style-3 #stickable-header .toggled-on ul.nav-menu > li,
	.thememount-header-style-3 #stickable-header .toggled-on div.nav-menu > ul > li{
		display:block;
	}	
	.toggled-on ul.nav-menu > li > a, 
	.toggled-on div.nav-menu > ul > li > a {		
		height: auto;
		line-height: 29px !important;
	}	
	.thememount-header-style-3 ul.nav-menu > li > ul, 
	.thememount-header-style-3 div.nav-menu > ul > l > ul,
	.toggled-on ul.nav-menu > li:hover > ul, 
	.toggled-on div.nav-menu > ul > li:hover > ul{
		top:0px;
	}	
	.toggled-on  ul.nav-menu ul a, 
	.toggled-on  div.nav-menu ul ul a{
		padding-left:0px;
	}	
	ul.nav-menu > li > a:before{
		display:none;
	}	
	.thememount-header-style-2 #stickable-header ul.nav-menu > li:first-child, 
    .thememount-header-style-2 #stickable-header div.nav-menu > ul > li:first-child,
    .thememount-header-style-2 #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li:first-child{
		margin-left: 0px;
	}	
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal,
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-menu-flyout ul.mega-sub-menu {		
		width: 100%;
	}
	#navbar {
		float: none;
	}	
	#navbar #site-navigation .mega-menu-wrap  .mega-menu-toggle + label {
		display: block;
		position: absolute;
		top: 20px;
		right: 10px;
		width: 30px;
	}	
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-item > a:before{
		display:none;
	}
	.main-navigation .mega-menu-wrap ul.mega-menu > li.mega-menu-item > a,
	.is-sticky .main-navigation .mega-menu-wrap ul.mega-menu > li.mega-menu-item > a{
		height: 45px !important;
		line-height: 45px !important;
	}
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu {	
		-webkit-box-shadow: none;
		box-shadow: none;
	}
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item{
		float:none;
		width:100%;
	}		
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a,
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title{
		border-right:none;
	}
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li .mega-sub-menu,
	ul.nav-menu li:hover > ul, 
	ul.nav-menu ul li:hover > ul,	
	div.nav-menu > ul li:hover > ul,
	div.nav-menu > ul ul li:hover > ul{
		border-top:none;
	}		
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-menu-item  {
		border-bottom: 1px solid #e1e1e1;
	}	
    .header-text-color-white  #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a:hover,
	.header-text-color-white  #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-menu-item {
		border-bottom: 1px solid rgba(225, 225, 225, 0.22);
	}	
	.header-text-color-white ul.nav-menu ul a, 
	.header-text-color-white div.nav-menu ul ul a,
	.header-text-color-white  #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a,
	.header-text-color-white  #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title,
	.header-text-color-white  #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item .textwidget{
		color: rgba(255, 255, 255, 0.66);
	}
    
    
    	
	.header-text-color-white #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu,
	.header-text-color-white #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a{
		background: none;
	}
	.header-text-color-white #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a,
	.header-text-color-white ul.nav-menu li, div.nav-menu > ul li{
		border-bottom: 1px solid rgba(255, 255, 255, 0.22);
	}
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a{
		padding-left:0px !important;
		padding-right:0px !important;
	}	
	.main-navigation .mega-menu-wrap ul.mega-menu > li.mega-menu-item > a{
		margin-left:0px !important;
	}
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu{
		padding-left:15px;
	}
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a:hover{
		background-color:transparent;
	}
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a:hover{
		border-bottom: 1px solid #e1e1e1;
		border-right: none;
	}	
	#navbar #site-navigation .mega-menu-wrap .mega-menu-toggle + label:after{
		background:none;
		color:#2d2d2d;
	}	
	.header-text-color-white #navbar #site-navigation .mega-menu-wrap .mega-menu-toggle + label:after{		
		color: rgba(255, 255, 255, 0.80) !important;
	}	
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-menu-item-has-children > a:after {	
		position: absolute;
		right: 0;
		top:0;
	}
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout li.mega-menu-item-has-children > a:after {		
		content: '\f107';
	}	
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a:hover, 
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu li:hover > a,
	#navbar #site-navigation .mega-menu-wrap .mega-menu-flyout .mega-sub-menu li.mega-current-menu-item > a{
		background-color:transparent;
	}	
	.main-navigation .mega-menu-wrap ul.mega-menu > li.mega-menu-item > a {
		margin-right: 0px !important;	
	}	
	.thememount-header-style-2 #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-logo-after-this,
	.thememount-header-style-2 #stickable-header ul.nav-menu > li.logo-after-this,
	.thememount-header-style-2 #stickable-header div.nav-menu > ul > li.logo-after-this{
		margin-right: 0px !important;
	}	
	.thememount-header-style-3 #navbar .main-navigation {
		position: inherit;
	}	
	.thememount-header-style-3 #navbar #site-navigation .mega-menu-wrap .mega-menu-toggle + label {
		display: inline-block;
		float: none;
		position: inherit;
		margin-top: -12px;
	}
	.thememount-header-style-3 #navbar #site-navigation .mega-menu-wrap{
		text-align:center;
	}
	.thememount-header-style-3 #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal{
		width:auto;
		padding-left:15px;
		padding-right:15px;
	} 
 	.thememount-header-style-3 #navbar .main-navigation{
		width: 970px;
	} 
 	.header-controls{
		margin-right:50px;
		position: absolute;
		right: 0px;
		top: 0;
	}	
	.mega-sub-menu{
		display:none !important;
	}
	.mega-sub-menu.open, #navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li .mega-sub-menu .mega-sub-menu{
		display:block !important;
	}	
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-menu-item{
		position:relative;
	}	
	#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li .righticon {
		top: 7px;
	}
	.main-navigation .mega-menu-wrap ul.mega-menu > li.mega-menu-item > a{
		padding-left:0px !important;
	}    
    
}



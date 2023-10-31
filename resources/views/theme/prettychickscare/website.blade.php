<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Tag  -->
    <title>{{ isset($seo_title) ? $seo_title : get_option('site_title', config('app.name')) }}</title>

    <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : get_option('meta_keywords') }}" />
    <meta name="description"
        content="{{ isset($meta_description) ? $meta_description : get_option('meta_description') }}" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ get_favicon() }}">

    <link href="{{ asset('public/theme/prettychickscare/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/theme/prettychickscare/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/theme/prettychickscare/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('public/theme/prettychickscare/css/slick-theme.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> -->
    <link href="{{ asset('public/theme/prettychickscare/css/style.css') }}" rel="stylesheet">
    <!-- Font Awesome v4.7.0 -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
 
    @include('theme.default.components.custom_styles')
	@include('layouts.others.languages')
    <script type="text/javascript">
    	var _url = "{{ url('') }}";
    </script>
</head>
<style>
.customer_dashboard .nav-tabs li.nav-item a {
    text-align: left;
    padding: 12px 20px;
    border-radius: 0;
    border-bottom: 1px solid #efefef;
    color: #fff;
}

*{
                margin: 0px;
                padding: 0px;
            }
            ul {
                list-style: disc;
                width: 100%;
            }

.form-step {
  display: none;
  /* padding: 50px; */
}

.form-step.active {
  display: block;
  transform-origin: top;
  animation: animate .5s;
}

.form-step input {
  width: 100%;
  padding: 10px;
  border: 1px solid lightgray;
  outline: none;
  text-transform: capitalize;
}

.form-step select {
  width: 100%;
  padding: 10px;
  border: 1px solid lightgray;
  outline: none;
  text-transform: capitalize;
  background: white;
}

.form-step select option {
  text-transform: capitalize;
}

.form-step textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid lightgray;
  outline: none;
  resize: none;
}

.form-step label {
  font-size: 15px;
  font-weight: 600;
  text-transform: capitalize;
}

@keyframes animate {
  from {
    transform: scale(1, 0);
    opacity: 0;
  }

  to {
    transform: scale(1, 1);
    opacity: 1;
  }
}

.form-step .btn-group {
  width: 100%;
  display: flex;
  gap: 30px;
  justify-content: end;
}

.form {
  /*border: 1px solid lightgray;*/
  padding: 30px 0;
}
.form-step input[type="file"] {
  display: none;
}
.form-step p {
    font-size: 15px;
}

.form-step ul li {
    /* font-weight: 700; */
    line-height: 1.4;
    font-size: 15px;
    position: relative;
    margin: 20px;
}

/* .form-step ul li::before {
    content: "";
    width: 8px;
    height: 8px;
    top: 7px;
    left: -15px;
    position: absolute;
    background: black;
    border-radius: 50px;
} */
.form-step .radio-btn_box {
    display: flex;
    align-items: center;
    width: 100%;
    margin-top: 10px;
}

.form-step .radio-btn_box input {
    width: 30px;
    cursor: pointer;
}

.form-step .radio-btn_box label {
    margin: 0px;
}
.form-step strong {
    width: 100%;
}
button.btn-prev {
    background: transparent;
    border: 0px;
    text-transform: capitalize;
    font-weight: 600;
    outline: none;
    cursor: pointer;
    display:none;
}
.show{
    display:block !important;
}

button.btn-next {
    background: transparent;
    border: 0px;
    text-transform: capitalize;
    font-weight: 600;
    outline: none;
    cursor: pointer;
}
#showQuesAndAnswer{
    display: flex;
    justify-content: space-between;
}
#showQuesAndAnswer p{
    line-height: 40px;
}
.header-main__logo {
    width: 200px;
    position: absolute;
    left: 30%;
    top: -65%;
    transform: translateX(-50%);
}
i.fa-solid.fa-magnifying-glass {
    color: #000 !important;
}
/* =====================================
Template Name: Ultra Store
Description: Ultra Store - Multi Purpose eCommerce.
Version:1.0
========================================*/
/*======================================
[ CSS Table of contents ]
01. Preloader CSS
02. Header CSS
	+ Logo
	+ Category Menu
	+ Main Menu
03. Hero Area CSS
04. Small Banner CSS
05. Medium Banner CSS
06. Single Product CSS
07. Shop Sidebar CSS
08. Shop Single CSS
09. Shop Home List CSS
10. Cart CSS
11. Checkout CSS
12. Login & Register & My Account CSS
13. Cowndown CSS
14. Shop Services CSS
15. Newslatter CSS
16. About Us CSS
17. Team CSS
18. Blog CSS	
	+ Blog Archive
	+ Blog Sidebar
	+ Blog Single
19. Contact CSS
20. 404 Error CSS
21. Footer CSS
22. Payment gateway CSS
23. Receipt CSS
24. Wish List CSS
25. Brand Page
========================================*/
:root {
  --primary-color: #E91E63;
  --secondary-color: #b90a46;
}
/* Preloader */
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999999999;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,.2);
  overflow: hidden;
}
.preloader-inner {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%,-50%);
  -moz-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);
}
.preloader-icon {
  width: 100px;
  height: 100px;
  display: inline-block;
  padding: 0px;
}
.preloader-icon span {
  position: absolute;
  display: inline-block;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  background:var(--primary-color);
  -webkit-animation: preloader-fx 1.6s linear infinite;
  animation: preloader-fx 1.6s linear infinite;
}
.preloader-icon span:last-child {
  animation-delay: -0.8s;
  -webkit-animation-delay: -0.8s;
}
@keyframes preloader-fx {
  0% {transform: scale(0, 0); opacity:0.5;}
  100% {transform: scale(1, 1); opacity:0;}
}
@-webkit-keyframes preloader-fx {
  0% {-webkit-transform: scale(0, 0); opacity:0.5;}
  100% {-webkit-transform: scale(1, 1); opacity:0;}
}
/* End Preloader */






.topbar {
	background-color: #fff;
	border-bottom: 1px solid #e2e2e2;
	padding: 15px 0;
}
/* Logo */
.header .logo {
	float: left;
	margin-top: 35px;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.header .navbar {
	padding: 0;
}
/* Main Menu */
.navbar-expand-lg .navbar-collapse{
	display:block !important;
}
.header.v3 .navbar-expand-lg .navbar-collapse{
	display:block !important;
	background:#333;
}
.header .nav li a i {
	margin-right: 4px;
	font-size: 14px;
}
/* Dropdown Menu */
.header .nav li .dropdown {
	background: #fff;
	width: 220px;
	position: absolute;
	top: 100%;
	z-index: 999;
	-webkit-box-shadow: 0px 3px 5px #3333334d;
	-moz-box-shadow: 0px 3px 5px #3333334d;
	box-shadow: 0px 3px 5px #3333334d;
	transform-origin: 0 0 0;
	transform: scaleY(0.2);
	-webkit-transition: all 0.3s ease 0s;
	-moz-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	opacity: 0;
	visibility: hidden;
	padding: 0px;
	left: 0;
	margin: 0;
}
.header .nav li:hover .dropdown{
	opacity:1;
	visibility:visible;
	transform:translateY(0px);
}
.header .nav li .dropdown li{
	float:none;
	margin:0;
}
.header .nav li .dropdown li a {
	padding: 15px;
	color: #666;
	display: block;
	font-weight: 400;
	text-transform: capitalize;
	background: transparent;
}
.header .nav li .dropdown li a:before{
	display:none;
}
.header .nav li .dropdown li:last-child a{
	border-bottom:0px;
}
.header .nav li .dropdown li:hover a{
	color:#fff;
	background:var(--primary-color);
}
.header .nav li .dropdown li a:hover{
	border-color:transparent;
}
.header .nav li .dropdown li i {
	float: right;
	margin-top: 8px;
	font-size:10px;
	z-index:5;
}
.header .nav li .dropdown.sub-dropdown {
	background: #fff;
    width: 220px;
    position: absolute;
    left: 220px;
    top: 0;
    z-index: 999;
   -webkit-box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 3px 5px #3333334d;
    transform-origin: 0 0 0;
    transform: scaleY(0.2);
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    opacity: 0;
    visibility: hidden;
}
.header .nav li .dropdown li:hover .dropdown.sub-dropdown{
	opacity:1;
	visibility:visible;
	transform:translateY(0px);
}
.header .nav li .dropdown.sub-dropdown li a{
	padding: 15px;
	color: #666;
	display: block;
	font-weight: 400;
	text-transform: capitalize;
	background: transparent;
}
.header .nav li .dropdown li:hover .dropdown.sub-dropdown li a{
	background:transparent;
}
.header .nav li .dropdown li .dropdown.sub-dropdown li a:hover{
	color:#fff;
	background:var(--primary-color);
}
.header .nav li .dropdown.sub-dropdown li:last-child a{
	border-bottom: 0px solid;
}
.mobile-search{
	display:none;
}
.header.shop .topbar {
	border: none;
	padding: 12px 0px;
}
.header.shop .nav-inner {
	margin-right: 188px;
}
.header.shop .logo {
	float: left;
	margin-top: 35px;
}
.header.shop .top-contact {
	margin-top:0px;
}
.header.shop .topbar p {
	color: #ccc;
}
.header.shop .topbar .login a {
	color: var(--primary-color);
}
/* Topbar Left Nav */
.header.shop .left-nav{
	
}
.header.shop .top-left .list-main li:first-child{
	padding-left:0;
}
.header.shop .top-left .list-main li i{
	display: inline-block;
	margin-right: 4px;
	font-size: 15px;
	color: var(--primary-color);
	position: relative;
	top: 3px;
}
.header.shop .right-content{
	float:right;
}
.header.shop .list-main li {
	display: inline-block;
	color: #333;
	font-size: 13px;
	font-weight: 500;
	border-right: 1px solid #f0f0f0;
	padding: 0px 13px;
}
.header.shop .list-main li i {
	display: inline-block;
	margin-right: 4px;
	font-size: 15px;
	color: var(--primary-color);
	position: relative;
	top: 1px;
}
.header.shop .list-main li:last-child{
	padding-right:0;
	border:none;
}
.header.shop .list-main li a{
	color:#333;
	font-size: 14px;
}
.header.shop .list-main li a:hover{
	color:var(--primary-color);
}
.header.shop .nav li {
	margin-right: 40px;
	float: left;
	position: relative;
}
.header.shop .nav li {
	margin-right: 38px;
	position: relative;
}
.header.shop .nav li:last-child {
	margin: 0 !important;
}
.header.shop .nav li .new {
	background: var(--primary-color);
	color: #fff;
	text-transform: uppercase;
	font-size: 10px;
	padding: 0px 9px;
	position: absolute;
	left: 0;
	top: 6px;
	font-weight: 500;
}
.header.shop .nav li .new::before {
	position: absolute;
	content: "";
	left: 4px;
	bottom: -8px;
	border: 4px solid var(--primary-color);
	border-bottom-color: transparent;
	border-left-color: transparent;
	border-right-color: transparent;
}
.header.shop .list-main li .dropdown-menu{
	margin-top: 30px;
	border: none;
	box-shadow: 1px 3px 15px #e2e2e2;
	transition: margin 0.3s;
	display: block;
	border-radius: 0px;
	opacity: 0;
	z-index: -99;
}
.header.shop .list-main li .dropdown-menu.show{
	opacity: 1;
	margin-top: 15px;
	z-index: 1;
}
/* Shopping Cart */
.header .shopping {
	display: inline-block;
	z-index: 9999;
}
.header .shopping .icon {
	position: relative;
	cursor:pointer;
	color:#222;
}
.header .shopping .shopping-item {
	position: absolute;
	top: 68px;
	right: 0;
	width: 300px;
	background: #fff;
	padding: 20px 25px;
	-webkit-transition: all 0.3s ease 0s;
	-moz-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	-webkit-transform: translateY(10px);
	-moz-transform: translateY(10px);
	transform: translateY(10px);
	-webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
	opacity:0;
	visibility:hidden;
	z-index:99;
}
.header .shopping:hover .shopping-item{
	transform: translateY(0px);
	opacity:1;
	visibility:visible;
}
.header .shopping .dropdown-cart-header{
	padding-bottom: 10px;
    margin-bottom: 15px;
	border-bottom:1px solid #e6e6e6;
}
.header .shopping .dropdown-cart-header span {
	text-transform: uppercase;
	color: #222;
	font-size: 13px;
	font-weight: 600;
}
.header .shopping .dropdown-cart-header a {
	float: right;
	text-transform: uppercase;
	color: #222;
	font-size: 13px;
	font-weight: 600;
}
.header .shopping .dropdown-cart-header a:hover{
	color:var(--primary-color);
}
.header .shopping-list li {
	overflow: hidden;
	border-bottom: 1px solid #e6e6e6;
	padding-bottom: 15px;
	margin-bottom: 15px;
	position:relative;
}
.header .shopping-list li .remove {
	position: absolute;
	left: 0;
	bottom: 16px;
	margin-top: -20px;
	height: 20px;
	width: 20px;
	line-height: 18px;
	text-align: center;
	background: #fff;
	color: #222;
	border-radius: 0;
	font-size: 11px;
	border: 1px solid #ededed;
}
.header .shopping-list li .remove:hover{
	background:#222;
	color:#fff !important;
	border-color:transparent;
}
.header .shopping-list .cart-img {
	float: right;
	border: 1px solid #ededed;
	overflow:hidden;
}
.header .shopping-list .cart-img img {
	width: 70px;
	height: 70px;
	border-radius:0;
	
}
.header .shopping-list .cart-img:hover img{
	transform:scale(1.09);
}
.header .shopping-list .quantity{
	line-height: 22px;
    font-size: 13px;
	padding-bottom: 30px;
}
.header .shopping-list h4 {
	font-size: 14px;
}
.header .shopping-list h4 a {
	font-weight: 600;
	font-size: 13px;
	color: #333;
}
.header .shopping-list h4 a:hover{
	color:var(--primary-color);
}
.header .shopping-item .bottom {
	text-align: center;
}
.header .shopping-item .total {
	overflow:hidden;
	display: block;
    padding-bottom: 10px;
}
.header .shopping-item .total span {
	text-transform:uppercase;
	color:#222;
	font-size:13px;
	font-weight:600;
	float:left;
}
.header .shopping-item .total .total-amount {
	float:right;
	font-size:14px;
}
.header .shopping-item .bottom .btn {
	background: #222;
	padding: 10px 20px;
	display: block;
	color: #fff;
	margin-top: 10px;
	border-radius: 0px;
	text-transform: uppercase;
	font-size: 14px;
	font-weight: 500;
}
.header .shopping-item .bottom .btn:hover{
	background:var(--primary-color);
	color:#fff;
}
.header.shop{
	background:#fff;
}
.header.shop .nav-inner {
	margin: 0;
	float: left;
}
.header.shop .topbar {
	background-color: #fff;
	border: none;
}
.header.shop.v3 .topbar{
	padding:0;
}
.header.shop.v3 .topbar .inner-content{
	border-bottom:1px solid #eee;
	padding: 12px 0px;
}
.header.shop .right-nav li a {
	color: #333;
}
.header.shop .logo {
	float: left;
	margin: 19px 0 0;
}
.header.shop .top-contact {
	margin-top:0px;
}
#mobile-cart{
	display:none;
}
/* Header Middle */
.header.shop .search-bar-top {
	text-align: center;
	margin-top: 10px;
}
.header.shop .search-bar {
	margin-top: 33px;
	width: 460px;
	height: 40px;
	display: inline-block;
	background: #fff;
	position: relative;
}
.header.shop .search-bar {
	width: 535px;
	height: 50px;
	display: inline-block;
	background: #fff;
	position: relative;
	margin: 0;
	line-height: 45px;
	border-radius: 5px;
}

.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
  color: #999
}

.twitter-typeahead{
	background: #FFF;
}

.tt-menu {    /* used to be tt-dropdown-menu in older versions */
  width: 385px;
  background-color: #fff;
  border-bottom: 2px solid var(--primary-color);
  text-align: left;      
}

.tt-suggestion {
  padding: 3px 20px;
  line-height: 24px;
}

.tt-suggestion.tt-cursor,.tt-suggestion:hover {
  background-color: #eaeaea;
  cursor: pointer;
}

.tt-suggestion p {
  margin: 0;
}

.search-suggestions .image{
	width: 50px;
	padding: 8px 0px;
	margin-right: 15px;
}

.search-suggestions .content{
	width: calc(100% - 50px);
}

.search-suggestions .content h5{
	font-size: 14px;
	font-weight: 500;
}

.header.shop .nice-select {
	clear: initial;
	margin: 0;
	height: 48px;
	width: 150px;
	border: none;
	text-align: center;
	background: transparent;
	text-transform: capitalize;
	padding: 0 0 0 20px;
	line-height: 45px;
	font-size: 12px;
	font-weight: 400;
	border: 1px solid #afafaf;
	border-right: none;
	border-top-left-radius: 25px;
}
.header.shop .nice-select::after {
	border-color: #666;
	right: 20px;
}
.header.shop .nice-select .list {
	border-radius:0px;
}
.header.shop .nice-select .list li.focus{
	font-weight:400;
}
.header.shop .nice-select .list li {
	color: #666;
	border-radius: 0px;
	font-size: 14px;
	font-weight: 400;
}
.header.shop .nice-select .list li:hover{
	background:var(--primary-color);
	color:#fff;
}
.header.shop .search-bar form {
	display: inline-block;
	float: left;
	width: 370px;
}
.header.shop .search-bar input {
	height: 48px;
	background: transparent;
	color: #666;
	border-radius: 0;
	border: 1px solid #afafaf;
	font-size: 14px;
	font-weight: 400;
	padding: 0 25px 0 20px;
	width: 385px;
	/* border-top-right-radius: 25px; */
	border-bottom-right-radius: 25px;
}
.header.shop .search-bar input:focus {
	border: 1px solid var(--primary-color);
	outline: none;
}
.header.shop .search-bar .btnn {
	height: 48px;
	line-height: 53px;
	text-align: center;
	font-size: 18px;
	color: #666;
	background: transparent;
	position: absolute;
	right: 15px;
	top: -1px;
	border: none;
	border-radius: 0 5px 5px 0;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.header.shop .search-bar .btnn:hover{
	color: var(--primary-color);
}
.header.shop .search-bar .btnn:focus {
	outline: none;
	border:none;
}
/* Search Form */
.header.shop .search-top {
	opacity: 1;
	visibility: visible;
	top: 0;
	background: transparent;
	border: none;
	box-shadow: none;
	padding: 0;
	top: 0;
}
.header.shop .middle-inner {
	padding: 20px 0;
	background: #fff;
	border-top: 1px solid #eee;
}
.header.shop.v3 .middle-inner {
	border:none;
}
.header.shop .header-inner {
	background: #1d2224;
	height: 64px;
}
.header.shop.v3 .header-inner {
	background: transparent;
}
.header.shop.v2 .header-inner {
	background: #fff;
	border-top:1px solid #eee;
}
.header.shop .topbar p {
	color: #333;
}
.header.shop .all-category {
	color: #fff;
	background: transparent;
	position: relative;
	background: var(--primary-color);
}
.header.shop .all-category h3{
	padding: 20px 25px;
}
.header.shop .cat-heading {
	font-size: 20px;
	color: #fff;
}
.header.shop .cat-heading i {
	color: #fff;
	display: inline-block;
	margin-right: 15px;
	font-size: 22px;
}
.header.shop .main-category {
	position: absolute;
	left: 0;
	top: 64px;
	background: #fff;
	z-index: 1;
	width: 100%;
	-webkit-box-shadow: 0px 5px 15px #0000000a;
	-moz-box-shadow: 0px 5px 15px #0000000a;
	box-shadow: 0px 5px 15px #0000000a;
}
.header.shop .main-category li{
	display:block;
	border-bottom:1px solid #f6f6f6;
	position:relative;
}
.header.shop .main-category li:last-child{
	border:none;
}
.header.shop .main-category li a {
	font-size: 14px;
	font-weight: 600;
	color: #333;
	padding: 13px 25px 13px 25px;
	display: block;
	text-transform: uppercase;
}
.header.shop .main-category li a i{
	display:inline-block;
	float:right;
	margin-top: 5px;
}
.header.shop .sub-category {
	background: #fff;
	width: 220px;
	position: absolute;
	left: 238px;
	top: 0;
	z-index: 999999;
	display: none;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	border-left: 3px solid var(--primary-color);
	-webkit-box-shadow: 0px 5px 15px #0000000a;
	-moz-box-shadow: 0px 5px 15px #0000000a;
	box-shadow: 0px 5px 15px #0000000a;
}
.header.shop .main-category li:hover > .sub-category{
	display:block;
}

/* 2nd Sub category */
.header.shop .sub-category .sub-category {
	background: #fff;
	width: 220px;
	position: absolute;
	left: 196px;
	top: 0;
	z-index: 999999;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	border-left: 3px solid var(--primary-color);
	-webkit-box-shadow: 0px 5px 15px #0000000a;
	-moz-box-shadow: 0px 5px 15px #0000000a;
	box-shadow: 0px 5px 15px #0000000a;
}
.header.shop .main-category .sub-category li:hover .sub-category{
	opacity:1;
	visibility:visible;
}

.header.shop .main-category li a{
	text-transform:capitalize;
	font-weight:400;
}
.header.shop .main-category li a:hover{
	color:var(--primary-color);
}
.header.shop .main-category .main-mega{
	position:relative;
}
.header.shop .main-category li .mega-menu {
	width: 850px;
	display: inline-block;
	height: auto;
	position: absolute;
	left: 238px;
	top: 0;
	z-index: 99999;
	background: #fff;
	border: none;
	padding: 30px;
	border-left: 3px solid var(--primary-color);
	opacity:0;
	visibility:hidden;
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
}
.header.shop .main-category li:hover .mega-menu{
	opacity:1;
	visibility:visible;
}
.header.shop .main-category li .mega-menu .single-menu {
	width: 33%;
	display: inline-block;
	border: none;
	padding: 0;
	padding-right: 20px;
}
.header.shop .main-category li .mega-menu .single-menu a{
	padding:0;
}
.header.shop .main-category li .mega-menu .single-menu .image{
	overflow:hidden;
}
.header.shop .main-category li .mega-menu .single-menu img{
	display:block;
	height:100%;
	width:100%;
	cursor:pointer;
}
.header.shop .main-category li .mega-menu .single-menu .image:hover img{
	transform:scale(1.1);
}
.header.shop .main-category li .mega-menu .single-menu .title-link {
	margin-bottom: 20px;
	background: var(--primary-color);
	color: #fff;
	padding: 2px 13px;
	border-radius: 3px;
	display: inline-block;
	font-size: 14px;
}
.header.shop .main-category li .mega-menu .single-menu .title-link:hover{
	background:#333;
	color:#fff;
}
.header.shop .main-category li .mega-menu .single-menu .inner-link{
	margin-top:25px;
}
.header.shop .main-category li .mega-menu .single-menu .inner-link a{
	margin-bottom:10px;
}
.header.shop .main-category li .mega-menu .single-menu .inner-link a:hover{
	color:var(--primary-color);
	background:transparent;
}
.header.shop .main-category li .mega-menu .single-menu .inner-link a:last-child{
	margin-bottom:0px;
}
.header.shop .menu-origin {
	float:none;
	display: inline-block;
	float: right;
}
.header.shop .nav li {
	margin-right: 40px;
	float: left;
	position: relative;
}
.header.shop .nav li {
	margin-right:5px;
	position: relative;
	float: none;
}
.header.shop .nav li:last-child{
	margin-right:0;
}
.header.shop .nav li .new {
	background: var(--primary-color);
	color: #fff;
	text-transform: uppercase;
	font-size: 9px;
	position: absolute;
	left: 21px;
	top: 2px;
	font-weight: 500;
	height: 18px;
	line-height: 18px;
	text-align: center;
	display: block;
}
.header.shop.v2 .nav li a{
	color:#333;
}
.header.shop .nav li a {
	color: #fff;
	text-transform: capitalize;
	font-size: 15px;
	padding: 20px 15px;
	font-weight: 500;
	display: block;
	position: relative;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.header.shop .nav li:hover a{
	color:#fff;
	background:var(--primary-color);
}
.header.shop.v2 .nav li:hover a{
	color:var(--primary-color);
	background:transparent;
}
.header.shop .nav li.active a{
	color:#fff;
	background:var(--primary-color);
}
.header.shop.v2 .nav li.active a{
	color:#333 !important;
	background:transparent !important;
}
.header.shop.v2 .nav li.active a{
	color: var(--primary-color) !important;
}
.header.shop .nav .dropdown li{
	margin:0;
}
.header.shop .nav li .dropdown li:hover a{
	background:var(--primary-color);
}
.header.shop.v2 .nav li.active .dropdown li a{
	color:#333 !important;
}
.header.shop.v2 .nav li.active .dropdown li a:hover{
	color:#fff !important;
	background: var(--primary-color) !important;
}

span.total-count {
    color: #c8c3c8 !important;
}
i.bx.bxs-shopping-bag {
    color: #fff !important;
}

</style>
<body >

    <header class="header-main header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="header-mail-logo">
                        <p><span><i class='bx bxs-envelope'></i></span>PrettyChicsCare@gmail.com</p>
                        <img src="{{ asset('public/theme/prettychickscare/images/pretty-logo.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header-nav">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            {{-- <li><a href="{{ route('services') }}">Services</a></li> --}}
                            <li><a href="{{ url('shop') }}">Products</a></li>
                            <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header_loginBox">
                        @php
                            $user = Auth::user();
                        @endphp
                        @if (Auth::check())
							<a href="{{ url('/my_account') }}">{{ _lang('My account') }}</a> 
							<a href="{{ url('/sign_out') }}">{{ _lang('sign out') }}</a>
							@else
							<a href="{{ url('/sign_in') }}">{{ _lang('sign in') }}</a>
							<a href="{{ url('/sign_up') }}">{{ _lang('sign up') }}</a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-1">
                <div class="sinlge-bar shopping" id="mini-cart">
            		     	@include('theme.default.components.mini-cart')
                           </div>
        </div>
    </header>

    @yield('content')


    <!-- Footer Section Start -->
    <footer class="footer-main">
        <div class="container">
            <div class="row brand-slider">
                <div class="col-lg-3 p-0">
                    <div class="brand-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/partnership-icon.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="brand-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/partnership-icon.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="brand-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/partnership-icon.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="brand-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/partnership-icon.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="brand-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/partnership-icon.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="brand-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/partnership-icon.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="brand-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/partnership-icon.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="brand-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/partnership-icon.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row pl-5">
                <div class="col-lg-3">
                    <div class="footer-about">
                        <h4>About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="footer-pretty">
                        <a href="#"><img
                                src="{{ asset('public/theme/prettychickscare/images/pretty-logo.png') }}"
                                alt=""></a>
                        <img src="{{ asset('public/theme/prettychickscare/images/visa-brand.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-end">
                        <h4>Contact Us</h4>
                        <p><i class='bx bx-map'></i> 3133 Golf Ridge Blvd Suite 304</p>
                        <p><i class='bx bx-envelope'></i> PrettyChicsCare@gmail.com</p>
                        <p><i class='bx bxs-phone'></i> 6789773567</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <p>@copyright. 2023 All Right Reserved.</p>
        </div>
    </footer>
    <!-- Footer Section End -->

<script src="{{ asset('public/theme/prettychickscare/js/jquery.js') }}"></script>
<script src="{{ asset('public/theme/prettychickscare/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/theme/prettychickscare/js/wow.min.js') }}"></script>
<script src="{{ asset('public/theme/prettychickscare/js/slick.js') }}"></script>
<script src="{{ asset('public/theme/prettychickscare/js/app.js') }}"></script>
<script src="{{ asset('public/theme/default/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/theme/default/js/jquery-migrate-3.0.0.js') }}"></script>
<script src="{{ asset('public/theme/default/js/jquery-ui.min.js') }}"></script>
	<!-- Jquery -->
    <script src="{{ asset('public/theme/default/js/jquery.min.js') }}"></script>

    <script src="{{ asset('public/theme/default/js/jquery-migrate-3.0.0.js') }}"></script>

	<script src="{{ asset('public/theme/default/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('public/theme/default/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('public/theme/default/js/bootstrap.min.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('public/theme/default/js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('public/theme/default/js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('public/theme/default/js/magnific-popup.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('public/theme/default/js/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('public/theme/default/js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('public/theme/default/js/nicesellect.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('public/theme/default/js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('public/theme/default/js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('public/theme/default/js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('public/theme/default/js/easing.js') }}"></script>

	<script src="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
	
	<script src="{{ asset('public/theme/default/js/typeahead.bundle.js') }}"></script>

	<script src="{{ asset('public/backend/assets/js/print.js') }}"></script>
	
	<!-- Active JS -->
	<script src="{{ asset('public/theme/default/js/active.js?v=1.2') }}"></script>
    <!-- Custom JS -->
    @yield('js-script')
</body>

</html>

<?php
include('includes/header.php');
?>

<!-- search -->
<div class="search-overlay">
<div class="d-table">
<div class="d-table-cell">
<div class="search-overlay-layer"></div>
<div class="search-overlay-layer"></div>
<div class="search-overlay-layer"></div>
<div class="search-overlay-close">
<span class="search-overlay-close-line"></span>
<span class="search-overlay-close-line"></span>
</div>
<div class="search-overlay-form">
<form>
<input type="text" class="input-search" placeholder="Search here...">
<button type="button"><i class="fas fa-search"></i></button>
</form>
</div>
</div>
</div>
</div>

<!-- Common Banner Area -->
<section id="common_banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="common_bannner_text">
<h2>Register</h2>
<ul>
<li><a href="index.html">Home</a></li>
<li><span><i class="fas fa-circle"></i></span> Register</li>
</ul>
</div>
</div>
</div>
</div>
</section>

<!--  Common Author Area -->
<section id="common_author_area" class="section_padding">
<div class="container">
<div class="row">
<div class="col-lg-8 offset-lg-2">
<div class="common_author_boxed">
<div class="common_author_heading">
<h3>Register account</h3>
<h2>Register your account</h2>
</div>
<div class="common_author_form">
<form action="#" id="main_author_form">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter first name*" />
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter last name*" />
</div>
<div class="form-group">
<input type="text" class="form-control"
placeholder="your email address (Optional)" />
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Mobile number*" />
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="User name*" />
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Password" />
</div>
<div class="common_form_submit">
<button class="btn btn_theme btn_md">Register</button>
</div>
<div class="have_acount_area other_author_option">
<div class="line_or">
<span>or</span>
</div>
<ul>
<li><a href="#!"><img src="assets/img/icon/google.png" alt="icon"></a></li>
<li><a href="#!"><img src="assets/img/icon/facebook.png" alt="icon"></a></li>
<li><a href="#!"><img src="assets/img/icon/twitter.png" alt="icon"></a></li>
</ul>
<p>Already have an account? <a href="login.php">Log in now</a></p>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Cta Area -->
<section id="cta_area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-7">
<div class="cta_left">
<div class="cta_icon">
<img src="assets/img/common/email.png" alt="icon">
</div>
<div class="cta_content">
<h4>Get the latest news and offers</h4>
<h2>Subscribe to our newsletter</h2>
</div>
</div>
</div>
<div class="col-lg-5">
<div class="cat_form">
<form id="cta_form_wrappper">
<div class="input-group"><input type="text" class="form-control"
placeholder="Enter your mail address"><button class="btn btn_theme btn_md"
type="button">Subscribe</button></div>
</form>
</div>
</div>
</div>
</div>
</section>

<!-- Footer -->
<?php
include('includes/footer.php');
?>
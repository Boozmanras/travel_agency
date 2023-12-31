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
<h2>Cruise booking</h2>
<ul>
<li><a href="index.html">Home</a></li>
<li><span><i class="fas fa-circle"></i></span><a href="cruise-search-list.html">Cruise search</a></li>
<li><span><i class="fas fa-circle"></i></span>Cruise booking</li>
</ul>
</div>
</div>
</div>
</div>
</section>

<!-- Cruise Booking Submission Areas -->
<section id="tour_booking_submission" class="section_padding">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="tou_booking_form_Wrapper">
<div class="booking_tour_form">
<h3 class="heading_theme">Passenger information</h3>
<div class="tour_booking_form_box">
<form action="https://andit.co/projects/html/and-tour/demo/!#" id="tour_bookking_form_item">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="First name*">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="Last name*">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="Email address (Optional)">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="Mobile number*">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="Street address">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="Apartment, Suite, House no (optional)">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<select class="form-control form-select bg_input">
<option value="1">Khulna</option>
<option value="1">New York</option>
<option value="1">Barisal</option>
<option value="1">Nator</option>
<option value="1">Joybangla</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<select class="form-control form-select bg_input">
<option value="1">State</option>
<option value="1">New York</option>
<option value="1">Barisal</option>
<option value="1">Nator</option>
<option value="1">Joybangla</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<select class="form-control form-select bg_input">
<option value="1">Country</option>
<option value="1">New York</option>
<option value="1">Barisal</option>
<option value="1">Nator</option>
<option value="1">Joybangla</option>
</select>
</div>
</div>

</div>
</form>
</div>
</div>
<div class="booking_tour_form">
<h3 class="heading_theme">Payment method</h3>
<div class="tour_booking_form_box">
<div class="booking_payment_boxed">
<form action="https://andit.co/projects/html/and-tour/demo/!#" id="payment_checked">
<div class="form-check">
<input class="form-check-input" type="radio" name="flexRadioDefault"
id="flexRadioDefault1" value="red">
<label class="form-check-label" for="flexRadioDefault1">
Payment by card
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="flexRadioDefault"
id="flexRadioDefault2" value="green">
<label class="form-check-label" for="flexRadioDefault2">
Paypal
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="flexRadioDefault"
id="flexRadioDefault3" value="black">
<label class="form-check-label" for="flexRadioDefault3">
Payoneer
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="flexRadioDefault"
id="flexRadioDefault4" value="white">
<label class="form-check-label" for="flexRadioDefault4">
Cash on delivery
</label>
</div>
<div class="payment_filed_wrapper">
<div class="payment_card payment_toggle red">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="Card number">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="Cardholder name">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="Date of expiry">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="Security code">
</div>
</div>
</div>
</div>
<div class="paypal_payment payment_toggle green">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="Email Address">
</div>
</div>
</div>
</div>
<div class="payoneer_payment payment_toggle black">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="Email Address">
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="booking_tour_form_submit">
<div class="form-check write_spical_check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
<label class="form-check-label" for="flexCheckDefaultf1">
<span class="main_spical_check">
<span>I read and accept all <a href="terms-service.html">Terms and
conditios</a></span>
</span>
</label>
</div>
<a href="booking-confirmation.html" class="btn btn_theme btn_md">Submit</a>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="tour_details_right_sidebar_wrapper">
<div class="tour_detail_right_sidebar">
<div class="tour_details_right_boxed">
<div class="tour_details_right_box_heading">
<h3>Standard package</h3>
</div>
<div class="valid_date_area">
<div class="valid_date_area_one">
<h5>Valid from</h5>
<p>01 Feb 2022</p>
</div>
<div class="valid_date_area_one">
<h5>Valid till</h5>
<p>15 Feb 2022</p>
</div>
</div>
<div class="tour_package_details_bar_list">
<h5>Room facilities</h5>
<ul>
<li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
<li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian
culture
</li>
<li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>
<li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver
allowances
</li>
<li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>
</ul>
</div>
<div class="tour_package_details_bar_price">
<h5>Price</h5>
<div class="tour_package_bar_price">
<h6><del>ksh  35,500</del></h6>
<h3>ksh  30,500 <sub>/Per serson</sub> </h3>
</div>
</div>
</div>
</div>
<div class="tour_detail_right_sidebar">
<div class="tour_details_right_boxed">
<div class="tour_details_right_box_heading">
<h3>Journey date</h3>
</div>
<div class="edit_date_form">
<div class="form-group">
<label for="dates">Edit Date</label>
<input type="date" id="dates" value="2022-05-05" class="form-control">
</div>
</div>
<div class="tour_package_details_bar_list">
<h5>Tourist</h5>
<div class="select_person_item">
<div class="select_person_left">
<h6>Adult</h6>
<p>12y+</p>
</div>
<div class="select_person_right">
<h6>01</h6>
</div>
</div>

<div class="select_person_item">
<div class="select_person_left">
<h6>Children</h6>
<p>2 - 12 years</p>
</div>
<div class="select_person_right">
<h6>01</h6>
</div>
</div>
<div class="select_person_item">
<div class="select_person_left">
<h6>Infant</h6>
<p>Below 2 years</p>
</div>
<div class="select_person_right">
<h6>01</h6>
</div>
</div>
</div>
<div class="edit_person">
<p>Edit person</p>
</div>
</div>
</div>
<div class="tour_detail_right_sidebar">
<div class="tour_details_right_boxed">
<div class="tour_details_right_box_heading">
<h3>Coupon code</h3>
</div>
<div class="coupon_code_area_booking">
<form action="#!">
<div class="form-group">
<input type="text" class="form-control bg_input"
placeholder="Enter coupon code">
</div>
<div class="coupon_code_submit">
<button class="btn btn_theme btn_md">Apply voucher</button>
</div>
</form>
</div>

</div>
</div>
<div class="tour_detail_right_sidebar">
<div class="tour_details_right_boxed">
<div class="tour_details_right_box_heading">
<h3>Price details</h3>
</div>

<div class="tour_booking_amount_area">
<ul>
<li>Adult Price x 1 <span>ksh 40,000.00</span></li>
<li>Discount <span>-10%</span></li>
<li>Tax<span>5%</span></li>
</ul>
<div class="tour_bokking_subtotal_area">
<h6>Subtotal <span>ksh 38,000.00</span></h6>
</div>
<div class="coupon_add_area">
<h6><span class="remove_coupon_tour">Remove</span> Coupon code (OFF 5000)
<span>ksh 5,000.00</span>
</h6>
</div>
<div class="total_subtotal_booking">
<h6>Total Amount <span>ksh 33,000.00</span> </h6>
</div>
</div>
</div>
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

<!-- Footer  -->
<?php
include('includes/footer.php');
?>
<?php
include('includes/header.php');
?>

<!-- Banner Area -->
<section id="home_one_banner">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<div class="banner_one_text">
<h1>Explore the world together</h1>
<h3>Find awesome flights, hotel, tour, car and packages</h3>
</div>
</div>
</div>
</div>
</section>

<!-- Form Area -->
<section id="theme_search_form">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="theme_search_form_area">
<div class="theme_search_form_tabbtn">
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="flights-tab" data-bs-toggle="tab"
data-bs-target="#flights" type="button" role="tab" aria-controls="flights"
aria-selected="true"><i class="fas fa-plane-departure"></i>Flights</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="tours-tab" data-bs-toggle="tab" data-bs-target="#tours"
type="button" role="tab" aria-controls="tours" aria-selected="false"><i
class="fas fa-globe"></i>Tours</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="hotels-tab" data-bs-toggle="tab"
data-bs-target="#hotels" type="button" role="tab" aria-controls="hotels"
aria-selected="false"><i class="fas fa-hotel"></i>Hotels</button>
</li>
<!--<li class="nav-item" role="presentation">
<button class="nav-link" id="visa-tab" data-bs-toggle="tab"
data-bs-target="#visa-application" type="button" role="tab" aria-controls="visa"
aria-selected="false"><i class="fas fa-passport"></i> Visa</button>
</li>-
<li class="nav-item" role="presentation">
<button class="nav-link" id="apartments-tab" data-bs-toggle="tab"
data-bs-target="#apartments" type="button" role="tab" aria-controls="apartments"
aria-selected="false"><i class="fas fa-building"></i> Apartments</button>
</li>-->
<li class="nav-item" role="presentation">
<button class="nav-link" id="bus-tab" data-bs-toggle="tab"
data-bs-target="#bus" type="button" role="tab" aria-controls="bus"
aria-selected="false"><i class="fas fa-bus"></i> Bus</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="cruise-tab" data-bs-toggle="tab"
data-bs-target="#cruise" type="button" role="tab" aria-controls="cruise"
aria-selected="false"><i class="fas fa-ship"></i> Cruise</button>
</li>

</ul>
</div>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="flights" role="tabpanel"
aria-labelledby="flights-tab">
<div class="row">
<div class="col-lg-12">
<div class="flight_categories_search">
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="oneway-tab" data-bs-toggle="tab"
data-bs-target="#oneway_flight" type="button" role="tab"
aria-controls="oneway_flight" aria-selected="true">One
Way</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="roundtrip-tab" data-bs-toggle="tab"
data-bs-target="#roundtrip" type="button" role="tab"
aria-controls="roundtrip"
aria-selected="false">Roundtrip</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="multi_city-tab" data-bs-toggle="tab"
data-bs-target="#multi_city" type="button" role="tab"
aria-controls="multi_city" aria-selected="false">Multi
city</button>
</li>
</ul>
</div>
</div>
</div>
<div class="tab-content" id="myTabContent1">
<div class="tab-pane fade show active" id="oneway_flight" role="tabpanel"
aria-labelledby="oneway-tab">
<div class="row">
<div class="col-lg-12">
<div class="oneway_search_form">
<form action="#!">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-12 col-12">
<div class="flight_Search_boxed">
<p>From</p>
<input type="text" value="New York">
<span>JFK - John F. Kennedy International...</span>
<div class="plan_icon_posation">
    <i class="fas fa-plane-departure"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 col-12">
<div class="flight_Search_boxed">
<p>To</p>
<input type="text" value="London ">
<span>LCY, London city airport </span>
<div class="plan_icon_posation">
    <i class="fas fa-plane-arrival"></i>
</div>
<div class="range_plan">
    <i class="fas fa-exchange-alt"></i>
</div>
</div>
</div>
<div class="col-lg-4  col-md-6 col-sm-12 col-12">
<div class="form_search_date">
<div class="flight_Search_boxed date_flex_area">
    <div class="Journey_date">
        <p>Journey date</p>
        <input type="date" value="2022-05-05">
        <span>Thursday</span>
    </div>
</div>
</div>
</div>
<div class="col-lg-2  col-md-6 col-sm-12 col-12">
<div
class="flight_Search_boxed dropdown_passenger_area">
<p>Passenger, Class </p>
<div class="dropdown">
    <button class="dropdown-toggle final-count"
        data-toggle="dropdown" type="button"
        id="dropdownMenuButton1"
        data-bs-toggle="dropdown"
        aria-expanded="false">
        0 Passenger
    </button>
    <div class="dropdown-menu dropdown_passenger_info"
        aria-labelledby="dropdownMenuButton1">
        <div class="traveller-calulate-persons">
            <div class="passengers">
                <h6>Passengers</h6>
                <div class="passengers-types">
                    <div class="passengers-type">
                        <div class="text"><span
                                class="count pcount">2</span>
                            <div class="type-label">
                                <p>Adult</p>
                                <span>12+
                                    yrs</span>
                            </div>
                        </div>
                        <div class="button-set">
                            <button type="button"
                                class="btn-add">
                                <i
                                    class="fas fa-plus"></i>
                            </button>
                            <button type="button"
                                class="btn-subtract">
                                <i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="passengers-type">
                        <div class="text"><span
                                class="count ccount">0</span>
                            <div class="type-label">
                                <p
                                    class="fz14 mb-xs-0">
                                    Children
                                </p><span>2
                                    - Less than 12
                                    yrs</span>
                            </div>
                        </div>
                        <div class="button-set">
                            <button type="button"
                                class="btn-add-c">
                                <i
                                    class="fas fa-plus"></i>
                            </button>
                            <button type="button"
                                class="btn-subtract-c">
                                <i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="passengers-type">
                        <div class="text"><span
                                class="count incount">0</span>
                            <div class="type-label">
                                <p
                                    class="fz14 mb-xs-0">
                                    Infant
                                </p><span>Less
                                    than 2
                                    yrs</span>
                            </div>
                        </div>
                        <div class="button-set">
                            <button type="button"
                                class="btn-add-in">
                                <i
                                    class="fas fa-plus"></i>
                            </button>
                            <button type="button"
                                class="btn-subtract-in">
                                <i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cabin-selection">
                <h6>Cabin Class</h6>
                <div class="cabin-list">
                    <button type="button"
                        class="label-select-btn">
                        <span
                            class="muiButton-label">Economy
                        </span>
                    </button>
                    <button type="button"
                        class="label-select-btn active">
                        <span
                            class="muiButton-label">
                            Business
                        </span>
                    </button>
                    <button type="button"
                        class="label-select-btn">
                        <span
                            class="MuiButton-label">First
                            Class </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<span>Business</span>
</div>
</div>
<div class="top_form_search_button">
<button class="btn btn_theme btn_md">Search</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="roundtrip" role="tabpanel"
aria-labelledby="roundtrip-tab">
<div class="row">
<div class="col-lg-12">
<div class="oneway_search_form">
<form action="#!">
<div class="row">
<div class="col-lg-3  col-md-6 col-sm-12 col-12">
<div class="flight_Search_boxed">
<p>From</p>
<input type="text" value="New York">
<span>JFK - John F. Kennedy International...</span>
<div class="plan_icon_posation">
    <i class="fas fa-plane-departure"></i>
</div>
</div>
</div>
<div class="col-lg-3  col-md-6 col-sm-12 col-12">
<div class="flight_Search_boxed">
<p>To</p>
<input type="text" value="London ">
<span>LCY, London city airport </span>
<div class="plan_icon_posation">
    <i class="fas fa-plane-arrival"></i>
</div>
<div class="range_plan">
    <i class="fas fa-exchange-alt"></i>
</div>
</div>
</div>
<div class="col-lg-4  col-md-6 col-sm-12 col-12">
<div class="form_search_date">
<div class="flight_Search_boxed date_flex_area">
    <div class="Journey_date">
        <p>Journey date</p>
        <input type="date" value="2022-05-05">
        <span>Thursday</span>
    </div>
    <div class="Journey_date">
        <p>Return date</p>
        <input type="date" value="2022-05-08">
        <span>Saturday</span>
    </div>
</div>
</div>
</div>
<div class="col-lg-2  col-md-6 col-sm-12 col-12">
<div
class="flight_Search_boxed dropdown_passenger_area">
<p>Passenger, Class </p>
<div class="dropdown">
    <button class="dropdown-toggle final-count"
        data-toggle="dropdown" type="button"
        id="dropdownMenuButton1"
        data-bs-toggle="dropdown"
        aria-expanded="false">
        0 Passenger
    </button>
    <div class="dropdown-menu dropdown_passenger_info"
        aria-labelledby="dropdownMenuButton1">
        <div class="traveller-calulate-persons">
            <div class="passengers">
                <h6>Passengers</h6>
                <div class="passengers-types">
                    <div class="passengers-type">
                        <div class="text"><span
                                class="count pcount">2</span>
                            <div class="type-label">
                                <p>Adult</p>
                                <span>12+
                                    yrs</span>
                            </div>
                        </div>
                        <div class="button-set">
                            <button type="button"
                                class="btn-add">
                                <i
                                    class="fas fa-plus"></i>
                            </button>
                            <button type="button"
                                class="btn-subtract">
                                <i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="passengers-type">
                        <div class="text"><span
                                class="count ccount">0</span>
                            <div class="type-label">
                                <p
                                    class="fz14 mb-xs-0">
                                    Children
                                </p><span>2
                                    - Less than 12
                                    yrs</span>
                            </div>
                        </div>
                        <div class="button-set">
                            <button type="button"
                                class="btn-add-c">
                                <i
                                    class="fas fa-plus"></i>
                            </button>
                            <button type="button"
                                class="btn-subtract-c">
                                <i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="passengers-type">
                        <div class="text"><span
                                class="count incount">0</span>
                            <div class="type-label">
                                <p
                                    class="fz14 mb-xs-0">
                                    Infant
                                </p><span>Less
                                    than 2
                                    yrs</span>
                            </div>
                        </div>
                        <div class="button-set">
                            <button type="button"
                                class="btn-add-in">
                                <i
                                    class="fas fa-plus"></i>
                            </button>
                            <button type="button"
                                class="btn-subtract-in">
                                <i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cabin-selection">
                <h6>Cabin Class</h6>
                <div class="cabin-list">
                    <button type="button"
                        class="label-select-btn">
                        <span
                            class="muiButton-label">Economy
                        </span>
                    </button>
                    <button type="button"
                        class="label-select-btn active">
                        <span
                            class="muiButton-label">
                            Business
                        </span>
                    </button>
                    <button type="button"
                        class="label-select-btn">
                        <span
                            class="MuiButton-label">First
                            Class </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<span>Business</span>
</div>
</div>
</div>
<div class="top_form_search_button">
<button class="btn btn_theme btn_md">Search</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="multi_city" role="tabpanel"
aria-labelledby="multi_city-tab">
<div class="row">
<div class="col-lg-12">
<div class="oneway_search_form">
<form action="#!">
<div class="multi_city_form_wrapper">
<div class="multi_city_form">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-12 col-12">
    <div class="flight_Search_boxed">
        <p>From</p>
        <input type="text" value="New York">
        <span>DAC, Hazrat Shahajalal
            International...</span>
        <div class="plan_icon_posation">
            <i class="fas fa-plane-departure"></i>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 col-12">
    <div class="flight_Search_boxed">
        <p>To</p>
        <input type="text" value="London ">
        <span>LCY, London city airport </span>
        <div class="plan_icon_posation">
            <i class="fas fa-plane-arrival"></i>
        </div>
        <div class="range_plan">
            <i class="fas fa-exchange-alt"></i>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
    <div class="form_search_date">
        <div
            class="flight_Search_boxed date_flex_area">
            <div class="Journey_date">
                <p>Journey date</p>
                <input type="date"
                    value="2022-05-05">
                <span>Thursday</span>
            </div>
            <div class="Journey_date">
                <p>Return date</p>
                <input type="date"
                    value="2022-05-10">
                <span>Saturday</span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-2  col-md-6 col-sm-12 col-12">
    <div
        class="flight_Search_boxed dropdown_passenger_area">
        <p>Passenger, Class </p>
        <div class="dropdown">
            <button
                class="dropdown-toggle final-count"
                data-toggle="dropdown" type="button"
                id="dropdownMenuButton1"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                0 Passenger
            </button>
            <div class="dropdown-menu dropdown_passenger_info"
                aria-labelledby="dropdownMenuButton1">
                <div
                    class="traveller-calulate-persons">
                    <div class="passengers">
                        <h6>Passengers</h6>
                        <div
                            class="passengers-types">
                            <div
                                class="passengers-type">
                                <div class="text">
                                    <span
                                        class="count pcount">2</span>
                                    <div
                                        class="type-label">
                                        <p>Adult</p>
                                        <span>12+
                                            yrs</span>
                                    </div>
                                </div>
                                <div
                                    class="button-set">
                                    <button
                                        type="button"
                                        class="btn-add">
                                        <i
                                            class="fas fa-plus"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn-subtract">
                                        <i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div
                                class="passengers-type">
                                <div class="text">
                                    <span
                                        class="count ccount">0</span>
                                    <div
                                        class="type-label">
                                        <p
                                            class="fz14 mb-xs-0">
                                            Children
                                        </p><span>2
                                            - Less
                                            than 12
                                            yrs</span>
                                    </div>
                                </div>
                                <div
                                    class="button-set">
                                    <button
                                        type="button"
                                        class="btn-add-c">
                                        <i
                                            class="fas fa-plus"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn-subtract-c">
                                        <i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div
                                class="passengers-type">
                                <div class="text">
                                    <span
                                        class="count incount">0</span>
                                    <div
                                        class="type-label">
                                        <p
                                            class="fz14 mb-xs-0">
                                            Infant
                                        </p><span>Less
                                            than 2
                                            yrs</span>
                                    </div>
                                </div>
                                <div
                                    class="button-set">
                                    <button
                                        type="button"
                                        class="btn-add-in">
                                        <i
                                            class="fas fa-plus"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn-subtract-in">
                                        <i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cabin-selection">
                        <h6>Cabin Class</h6>
                        <div class="cabin-list">
                            <button type="button"
                                class="label-select-btn">
                                <span
                                    class="muiButton-label">Economy
                                </span>
                            </button>
                            <button type="button"
                                class="label-select-btn active">
                                <span
                                    class="muiButton-label">
                                    Business
                                </span>
                            </button>
                            <button type="button"
                                class="label-select-btn">
                                <span
                                    class="MuiButton-label">First
                                    Class </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span>Business</span>
    </div>
</div>
</div>
</div>
<div class="multi_city_form">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-12 col-12">
    <div class="flight_Search_boxed">
        <p>From</p>
        <input type="text" value="New York">
        <span>DAC, Hazrat Shahajalal
            International...</span>
        <div class="plan_icon_posation">
            <i class="fas fa-plane-departure"></i>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 col-12">
    <div class="flight_Search_boxed">
        <p>To</p>
        <input type="text" value="London ">
        <span>LCY, London city airport </span>
        <div class="plan_icon_posation">
            <i class="fas fa-plane-arrival"></i>
        </div>
        <div class="range_plan">
            <i class="fas fa-exchange-alt"></i>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
    <div class="form_search_date">
        <div
            class="flight_Search_boxed date_flex_area">
            <div class="Journey_date">
                <p>Journey date</p>
                <input type="date"
                    value="2022-05-05">
                <span>Thursday</span>
            </div>
            <div class="Journey_date">
                <p>Return date</p>
                <input type="date"
                    value="2022-05-12">
                <span>Saturday</span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-2  col-md-6 col-sm-12 col-12">
    <div
        class="flight_Search_boxed dropdown_passenger_area">
        <p>Passenger, Class </p>
        <div class="dropdown">
            <button
                class="dropdown-toggle final-count"
                data-toggle="dropdown" type="button"
                id="dropdownMenuButton1"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                0 Passenger
            </button>
            <div class="dropdown-menu dropdown_passenger_info"
                aria-labelledby="dropdownMenuButton1">
                <div
                    class="traveller-calulate-persons">
                    <div class="passengers">
                        <h6>Passengers</h6>
                        <div
                            class="passengers-types">
                            <div
                                class="passengers-type">
                                <div class="text">
                                    <span
                                        class="count pcount">2</span>
                                    <div
                                        class="type-label">
                                        <p>Adult</p>
                                        <span>12+
                                            yrs</span>
                                    </div>
                                </div>
                                <div
                                    class="button-set">
                                    <button
                                        type="button"
                                        class="btn-add">
                                        <i
                                            class="fas fa-plus"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn-subtract">
                                        <i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div
                                class="passengers-type">
                                <div class="text">
                                    <span
                                        class="count ccount">0</span>
                                    <div
                                        class="type-label">
                                        <p
                                            class="fz14 mb-xs-0">
                                            Children
                                        </p><span>2
                                            - Less
                                            than 12
                                            yrs</span>
                                    </div>
                                </div>
                                <div
                                    class="button-set">
                                    <button
                                        type="button"
                                        class="btn-add-c">
                                        <i
                                            class="fas fa-plus"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn-subtract-c">
                                        <i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div
                                class="passengers-type">
                                <div class="text">
                                    <span
                                        class="count incount">0</span>
                                    <div
                                        class="type-label">
                                        <p
                                            class="fz14 mb-xs-0">
                                            Infant
                                        </p><span>Less
                                            than 2
                                            yrs</span>
                                    </div>
                                </div>
                                <div
                                    class="button-set">
                                    <button
                                        type="button"
                                        class="btn-add-in">
                                        <i
                                            class="fas fa-plus"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn-subtract-in">
                                        <i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cabin-selection">
                        <h6>Cabin Class</h6>
                        <div class="cabin-list">
                            <button type="button"
                                class="label-select-btn">
                                <span
                                    class="muiButton-label">Economy
                                </span>
                            </button>
                            <button type="button"
                                class="label-select-btn active">
                                <span
                                    class="muiButton-label">
                                    Business
                                </span>
                            </button>
                            <button type="button"
                                class="label-select-btn">
                                <span
                                    class="MuiButton-label">First
                                    Class </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span>Business</span>
    </div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="add_multy_form">
<button type="button" id="addMulticityRow">+ Add
    another
    flight</button>
</div>
</div>
</div>
<div class="top_form_search_button">
<button class="btn btn_theme btn_md">Search</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="tours" role="tabpanel" aria-labelledby="tours-tab">
<div class="row">
<div class="col-lg-12">
<div class="tour_search_form">
<form action="#!">
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="flight_Search_boxed">
<p>Destination</p>
<input type="text" placeholder="Where are you going?">
<span>Where are you going?</span>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="form_search_date">
<div class="flight_Search_boxed date_flex_area">
<div class="Journey_date">
<p>Journey date</p>
<input type="date" value="2022-05-03">
<span>Thursday</span>
</div>
<div class="Journey_date">
<p>Return date</p>
<input type="date" value="2022-05-05">
<span>Thursday</span>
</div>
</div>
</div>
</div>
<div class="col-lg-2  col-md-6 col-sm-12 col-12">
<div class="flight_Search_boxed dropdown_passenger_area">
<p>Passenger, Class </p>
<div class="dropdown">
<button class="dropdown-toggle final-count"
data-toggle="dropdown" type="button"
id="dropdownMenuButton1" data-bs-toggle="dropdown"
aria-expanded="false">
0 Passenger
</button>
<div class="dropdown-menu dropdown_passenger_info"
aria-labelledby="dropdownMenuButton1">
<div class="traveller-calulate-persons">
    <div class="passengers">
        <h6>Passengers</h6>
        <div class="passengers-types">
            <div class="passengers-type">
                <div class="text"><span
                        class="count pcount">2</span>
                    <div class="type-label">
                        <p>Adult</p>
                        <span>12+
                            yrs</span>
                    </div>
                </div>
                <div class="button-set">
                    <button type="button"
                        class="btn-add">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button"
                        class="btn-subtract">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="passengers-type">
                <div class="text"><span
                        class="count ccount">0</span>
                    <div class="type-label">
                        <p class="fz14 mb-xs-0">
                            Children
                        </p><span>2
                            - Less than 12
                            yrs</span>
                    </div>
                </div>
                <div class="button-set">
                    <button type="button"
                        class="btn-add-c">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button"
                        class="btn-subtract-c">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="passengers-type">
                <div class="text"><span
                        class="count incount">0</span>
                    <div class="type-label">
                        <p class="fz14 mb-xs-0">
                            Infant
                        </p><span>Less
                            than 2
                            yrs</span>
                    </div>
                </div>
                <div class="button-set">
                    <button type="button"
                        class="btn-add-in">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button"
                        class="btn-subtract-in">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="cabin-selection">
        <h6>Cabin Class</h6>
        <div class="cabin-list">
            <button type="button"
                class="label-select-btn">
                <span
                    class="muiButton-label">Economy
                </span>
            </button>
            <button type="button"
                class="label-select-btn active">
                <span class="muiButton-label">
                    Business
                </span>
            </button>
            <button type="button"
                class="label-select-btn">
                <span class="MuiButton-label">First
                    Class </span>
            </button>
        </div>
    </div>
</div>
</div>
</div>
<span>Business</span>
</div>
</div>
<div class="top_form_search_button">
<button class="btn btn_theme btn_md">Search</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
<div class="row">
<div class="col-lg-12">
<div class="tour_search_form">
<form action="#!">
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="flight_Search_boxed">
<p>Destination</p>
<input type="text" placeholder="Where are you going?">
<span>Where are you going?</span>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="form_search_date">
<div class="flight_Search_boxed date_flex_area">
<div class="Journey_date">
<p>Journey date</p>
<input type="date" value="2022-05-03">
<span>Thursday</span>
</div>
<div class="Journey_date">
<p>Return date</p>
<input type="date" value="2022-05-05">
<span>Thursday</span>
</div>
</div>
</div>
</div>
<div class="col-lg-2  col-md-6 col-sm-12 col-12">
<div class="flight_Search_boxed dropdown_passenger_area">
<p>Passenger, Class </p>
<div class="dropdown">
<button class="dropdown-toggle final-count"
data-toggle="dropdown" type="button"
id="dropdownMenuButton1" data-bs-toggle="dropdown"
aria-expanded="false">
0 Passenger
</button>
<div class="dropdown-menu dropdown_passenger_info"
aria-labelledby="dropdownMenuButton1">
<div class="traveller-calulate-persons">
    <div class="passengers">
        <h6>Passengers</h6>
        <div class="passengers-types">
            <div class="passengers-type">
                <div class="text"><span
                        class="count pcount">2</span>
                    <div class="type-label">
                        <p>Adult</p>
                        <span>12+
                            yrs</span>
                    </div>
                </div>
                <div class="button-set">
                    <button type="button"
                        class="btn-add">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button"
                        class="btn-subtract">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="passengers-type">
                <div class="text"><span
                        class="count ccount">0</span>
                    <div class="type-label">
                        <p class="fz14 mb-xs-0">
                            Children
                        </p><span>2
                            - Less than 12
                            yrs</span>
                    </div>
                </div>
                <div class="button-set">
                    <button type="button"
                        class="btn-add-c">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button"
                        class="btn-subtract-c">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="passengers-type">
                <div class="text"><span
                        class="count incount">0</span>
                    <div class="type-label">
                        <p class="fz14 mb-xs-0">
                            Infant
                        </p><span>Less
                            than 2
                            yrs</span>
                    </div>
                </div>
                <div class="button-set">
                    <button type="button"
                        class="btn-add-in">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button"
                        class="btn-subtract-in">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="cabin-selection">
        <h6>Cabin Class</h6>
        <div class="cabin-list">
            <button type="button"
                class="label-select-btn">
                <span
                    class="muiButton-label">Economy
                </span>
            </button>
            <button type="button"
                class="label-select-btn active">
                <span class="muiButton-label">
                    Business
                </span>
            </button>
            <button type="button"
                class="label-select-btn">
                <span class="MuiButton-label">First
                    Class </span>
            </button>
        </div>
    </div>
</div>
</div>
</div>
<span>Business</span>
</div>
</div>
<div class="top_form_search_button">
<button class="btn btn_theme btn_md">Search</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="visa-application" role="tabpanel" aria-labelledby="visa-tab">
<div class="row">
<div class="col-lg-12">
<div class="tour_search_form">
<form action="#!">
<div class="row">
<div class="col-lg-3 col-md-12 col-sm-12 col-12">
<div class="flight_Search_boxed">
<p>Select country</p>
<input type="text" value="United states">
<span>Where are you going?</span>
</div>
</div>
<div class="col-lg-3 col-md-12 col-sm-12 col-12">
<div class="flight_Search_boxed">
<p>Your nationality</p>
<input type="text" value="Bangladesh">
<span>Where are you going?</span>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="form_search_date">
<div class="flight_Search_boxed date_flex_area">
<div class="Journey_date">
<p>Entry date</p>
<input type="date" value="2022-05-03">
<span>Thursday</span>
</div>
<div class="Journey_date">
<p>Exit date</p>
<input type="date" value="2022-05-05">
<span>Thursday</span>
</div>
</div>
</div>
</div>
<div class="col-lg-2  col-md-6 col-sm-12 col-12">
<div class="flight_Search_boxed dropdown_passenger_area">
<p>Traveller, Class </p>
<div class="dropdown">
<button class="dropdown-toggle final-count"
data-toggle="dropdown" type="button"
id="dropdownMenuButton1" data-bs-toggle="dropdown"
aria-expanded="false">
0 Traveller
</button>
<div class="dropdown-menu dropdown_passenger_info"
aria-labelledby="dropdownMenuButton1">
<div class="traveller-calulate-persons">
    <div class="passengers">
        <h6>Traveller</h6>
        <div class="passengers-types">
            <div class="passengers-type">
                <div class="text"><span
                        class="count pcount">2</span>
                    <div class="type-label">
                        <p>Adult</p>
                        <span>12+
                            yrs</span>
                    </div>
                </div>
                <div class="button-set">
                    <button type="button"
                        class="btn-add">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button"
                        class="btn-subtract">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="passengers-type">
                <div class="text"><span
                        class="count ccount">0</span>
                    <div class="type-label">
                        <p class="fz14 mb-xs-0">
                            Children
                        </p><span>2
                            - Less than 12
                            yrs</span>
                    </div>
                </div>
                <div class="button-set">
                    <button type="button"
                        class="btn-add-c">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button"
                        class="btn-subtract-c">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="passengers-type">
                <div class="text"><span
                        class="count incount">0</span>
                    <div class="type-label">
                        <p class="fz14 mb-xs-0">
                            Infant
                        </p><span>Less
                            than 2
                            yrs</span>
                    </div>
                </div>
                <div class="button-set">
                    <button type="button"
                        class="btn-add-in">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button"
                        class="btn-subtract-in">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<span>Business</span>
</div>
</div>
<div class="top_form_search_button">
<button class="btn btn_theme btn_md">Search</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="apartments" role="tabpanel" aria-labelledby="apartments-tab">
<div class="row">
<div class="col-lg-12">
<div class="tour_search_form">
<form action="#!">
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="flight_Search_boxed">
<p>Destination</p>
<input type="text" placeholder="Where are you going?">
<span>Where are you going?</span>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="form_search_date">
<div class="flight_Search_boxed date_flex_area">
<div class="Journey_date">
<p>Journey date</p>
<input type="date" value="2022-05-03">
<span>Thursday</span>
</div>
<div class="Journey_date">
<p>Return date</p>
<input type="date" value="2022-05-05">
<span>Thursday</span>
</div>
</div>
</div>
</div>
<div class="col-lg-2  col-md-6 col-sm-12 col-12">
<div class="flight_Search_boxed dropdown_passenger_area">
<p>Passenger, Class </p>
<div class="dropdown">
<button class="dropdown-toggle final-count"
data-toggle="dropdown" type="button"
id="dropdownMenuButton1" data-bs-toggle="dropdown"
aria-expanded="false">
0 Traveler
</button>
<div class="dropdown-menu dropdown_passenger_info"
aria-labelledby="dropdownMenuButton1">
<div class="traveller-calulate-persons">
    <div class="passengers">
        <h6>Passengers</h6>
        <div class="passengers-types">
            <div class="passengers-type">
                <div class="text"><span
                        class="count pcount">2</span>
                    <div class="type-label">
                        <p>Adult</p>
                        <span>12+
                            yrs</span>
                    </div>
                </div>
                <div class="button-set">
                    <button type="button"
                        class="btn-add">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button"
                        class="btn-subtract">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="passengers-type">
                <div class="text"><span
                        class="count ccount">0</span>
                    <div class="type-label">
                        <p class="fz14 mb-xs-0">
                            Children
                        </p><span>2
                            - Less than 12
                            yrs</span>
                    </div>
                </div>
                <div class="button-set">
                    <button type="button"
                        class="btn-add-c">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button"
                        class="btn-subtract-c">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="passengers-type">
                <div class="text"><span
                        class="count incount">0</span>
                    <div class="type-label">
                        <p class="fz14 mb-xs-0">
                            Infant
                        </p><span>Less
                            than 2
                            yrs</span>
                    </div>
                </div>
                <div class="button-set">
                    <button type="button"
                        class="btn-add-in">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button"
                        class="btn-subtract-in">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="cabin-selection">
        <h6>Cabin Class</h6>
        <div class="cabin-list">
            <button type="button"
                class="label-select-btn">
                <span
                    class="muiButton-label">Economy
                </span>
            </button>
            <button type="button"
                class="label-select-btn active">
                <span class="muiButton-label">
                    Business
                </span>
            </button>
            <button type="button"
                class="label-select-btn">
                <span class="MuiButton-label">First
                    Class </span>
            </button>
        </div>
    </div>
</div>
</div>
</div>
<span>Business</span>
</div>
</div>
<div class="top_form_search_button">
<button class="btn btn_theme btn_md">Search</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="bus" role="tabpanel" aria-labelledby="bus-tab">
<div class="row">
<div class="col-lg-12">
<div class="tour_search_form">
<form action="#!">
<div class="row">
<div class="col-lg-12">
<div class="oneway_search_form">
<form action="#!">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-12 col-12">
    <div class="flight_Search_boxed">
        <p>From</p>
        <input type="text" value="Dhaka">
        <span>Bus Trtminal</span>
        <div class="plan_icon_posation">
            <i class="fas fa-plane-departure"></i>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 col-12">
    <div class="flight_Search_boxed">
        <p>To</p>
        <input type="text" value="Cox’s Bazar ">
        <span>Bus Trtminal</span>
        <div class="plan_icon_posation">
            <i class="fas fa-plane-arrival"></i>
        </div>
        <div class="range_plan">
            <i class="fas fa-exchange-alt"></i>
        </div>
    </div>
</div>
<div class="col-lg-4  col-md-6 col-sm-12 col-12">
    <div class="form_search_date">
        <div class="flight_Search_boxed date_flex_area">
            <div class="Journey_date">
                <p>Journey date</p>
                <input type="date" value="2022-05-05">
                <span>Thursday</span>
            </div>
            <div class="Journey_date">
                <p>Return date</p>
                <input type="date" value="2022-05-08">
                <span>Saturday</span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-2  col-md-6 col-sm-12 col-12">
    <div
        class="flight_Search_boxed dropdown_passenger_area">
        <p>Passenger, Class </p>
        <div class="dropdown">
            <button class="dropdown-toggle final-count"
                data-toggle="dropdown" type="button"
                id="dropdownMenuButton1"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                0 Passenger
            </button>
            <div class="dropdown-menu dropdown_passenger_info"
                aria-labelledby="dropdownMenuButton1">
                <div class="traveller-calulate-persons">
                    <div class="passengers">
                        <h6>Passengers</h6>
                        <div class="passengers-types">
                            <div class="passengers-type">
                                <div class="text"><span
                                        class="count pcount">2</span>
                                    <div class="type-label">
                                        <p>Adult</p>
                                        <span>12+
                                            yrs</span>
                                    </div>
                                </div>
                                <div class="button-set">
                                    <button type="button"
                                        class="btn-add">
                                        <i
                                            class="fas fa-plus"></i>
                                    </button>
                                    <button type="button"
                                        class="btn-subtract">
                                        <i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="passengers-type">
                                <div class="text"><span
                                        class="count ccount">0</span>
                                    <div class="type-label">
                                        <p
                                            class="fz14 mb-xs-0">
                                            Children
                                        </p><span>2
                                            - Less than 12
                                            yrs</span>
                                    </div>
                                </div>
                                <div class="button-set">
                                    <button type="button"
                                        class="btn-add-c">
                                        <i
                                            class="fas fa-plus"></i>
                                    </button>
                                    <button type="button"
                                        class="btn-subtract-c">
                                        <i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="passengers-type">
                                <div class="text"><span
                                        class="count incount">0</span>
                                    <div class="type-label">
                                        <p
                                            class="fz14 mb-xs-0">
                                            Infant
                                        </p><span>Less
                                            than 2
                                            yrs</span>
                                    </div>
                                </div>
                                <div class="button-set">
                                    <button type="button"
                                        class="btn-add-in">
                                        <i
                                            class="fas fa-plus"></i>
                                    </button>
                                    <button type="button"
                                        class="btn-subtract-in">
                                        <i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cabin-selection">
                        <h6>Cabin Class</h6>
                        <div class="cabin-list">
                            <button type="button"
                                class="label-select-btn">
                                <span
                                    class="muiButton-label">Economy
                                </span>
                            </button>
                            <button type="button"
                                class="label-select-btn active">
                                <span
                                    class="muiButton-label">
                                    Business
                                </span>
                            </button>
                            <button type="button"
                                class="label-select-btn">
                                <span
                                    class="MuiButton-label">First
                                    Class </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span>Business</span>
    </div>
</div>
<div class="top_form_search_button">
    <button class="btn btn_theme btn_md">Search</button>
</div>
</div>
</form>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
<div class="row">
<div class="col-lg-12">
<div class="tour_search_form">
<form action="#!">
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="flight_Search_boxed">
<p>Destination</p>
<input type="text" placeholder="Where are you going?">
<span>Where are you going?</span>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="flight_Search_boxed">
<p>Cruise line</p>
<input type="text" placeholder="American line">
<span>Choose your cruise</span>
</div>
</div>
<div class="col-lg-2  col-md-6 col-sm-12 col-12">
<div class="form_search_date">
<div class="flight_Search_boxed date_flex_area">
<div class="Journey_date">
<p>Journey date</p>
<input type="date" value="2022-05-03">
<span>Thursday</span>
</div>
</div>
</div>
</div>
<div class="top_form_search_button">
<button class="btn btn_theme btn_md">Search</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- imagination Area -->
<section id="go_beyond_area" class="section_padding_top">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="heading_left_area">
<h2>Go beyond your <span>imagination</span></h2>
<h5>Discover your ideal experience with us</h5>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="imagination_boxed">
<a href="top-destinations.html">
<img src="assets/img/imagination/imagination1.png" alt="img">
</a>
<h3><a href="top-destinations.html">7% Discount for all <span>Airlines</span></a></h3>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="imagination_boxed">
<a href="top-destinations.html">
<img src="assets/img/imagination/imagination2.png" alt="img">
</a>
<h3><a href="#!">Travel around<span>the world</span></a></h3>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="imagination_boxed">
<a href="top-destinations.html">
<img src="assets/img/imagination/imagination3.png" alt="img">
</a>
<h3><a href="top-destinations.html">Luxury resorts<span>top deals</span></a></h3>
</div>
</div>
</div>
</div>
</section>

<!-- Top destinations -->
<section id="top_destinations" class="section_padding_top">
<div class="container">
<!-- Section Heading -->
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="section_heading_center">
<h2>Top destinations</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="destinations_content_box img_animation">
<img src="assets/img/destination/big-img.png" alt="img">
<div class="destinations_content_inner">
<h2>Up to</h2>
<div class="destinations_big_offer">
<h1>50</h1>
<h6><span>%</span> <span>Off</span></h6>
</div>
<h2>Holiday packages</h2>
<a href="top-destinations.html" class="btn btn_theme btn_md">Book now</a>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12 col-12">
<div class="destinations_content_box img_animation">
<a href="top-destinations.html">
<img src="assets/img/destination/destination1.png" alt="img">
</a>
<div class="destinations_content_inner">
<h3><a href="top-destinations.html">China</a></h3>
</div>
</div>
<div class="destinations_content_box img_animation">
<a href="top-destinations.html">
<img src="assets/img/destination/destination2.png" alt="img">
</a>
<div class="destinations_content_inner">
<h3><a href="top-destinations.html">Darjeeling</a></h3>
</div>
</div>
<div class="destinations_content_box img_animation">
<a href="top-destinations.html">
<img src="assets/img/destination/destination3.png" alt="img">
</a>
<div class="destinations_content_inner">
<h3><a href="top-destinations.html">Malaysia</a></h3>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-12">
<div class="destinations_content_box img_animation">
<a href="top-destinations.html">
<img src="assets/img/destination/destination4.png" alt="img">
</a>
<div class="destinations_content_inner">
<h3><a href="top-destinations.html">Gangtok</a></h3>
</div>
</div>
<div class="destinations_content_box img_animation">
<a href="top-destinations.html">
<img src="assets/img/destination/destination5.png" alt="img">
</a>
<div class="destinations_content_inner">
<h3><a href="top-destinations.html">Thailand</a></h3>
</div>
</div>
<div class="destinations_content_box img_animation">
<a href="top-destinations.html">
<img src="assets/img/destination/destination6.png" alt="img">
</a>
<div class="destinations_content_inner">
<h3><a href="top-destinations.html">Australia</a></h3>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-12">
<div class="destinations_content_box img_animation">
<a href="top-destinations.html">
<img src="assets/img/destination/destination7.png" alt="img">
</a>
<div class="destinations_content_inner">
<h3><a href="top-destinations.html">London</a></h3>
</div>
</div>
<div class="destinations_content_box img_animation">
<a href="top-destinations.html">
<img src="assets/img/destination/destination8.png" alt="img">
</a>
<div class="destinations_content_inner">
<h3><a href="top-destinations.html">USA</a></h3>
</div>
</div>
<div class="destinations_content_box">
<a href="top-destinations.html" class="btn btn_theme btn_md w-100">View all</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Explore our hot deals -->
<section id="explore_area" class="section_padding_top">
<div class="container">
<!-- Section Heading -->
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="section_heading_center">
<h2>Explore our hot deals</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 offset-lg-3">
<div class="theme_nav_tab">
<nav class="theme_nav_tab_item">
<div class="nav nav-tabs" id="nav-tab1" role="tablist">
<button class="nav-link active" id="nav-hotels-tab" data-bs-toggle="tab"
data-bs-target="#nav-hotels" type="button" role="tab" aria-controls="nav-hotels"
aria-selected="true">Hotels</button>
<button class="nav-link" id="nav-tours-tab" data-bs-toggle="tab"
data-bs-target="#nav-tours" type="button" role="tab" aria-controls="nav-tours"
aria-selected="false">Tours</button>
<button class="nav-link" id="nav-space-tab" data-bs-toggle="tab"
data-bs-target="#nav-space" type="button" role="tab" aria-controls="nav-space"
aria-selected="false">Space</button>
<button class="nav-link" id="nav-events-tab" data-bs-toggle="tab"
data-bs-target="#nav-events" type="button" role="tab" aria-controls="nav-events"
aria-selected="false">Events</button>
</div>
</nav>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="tab-content" id="nav-tabContent">
<div class="tab-pane fade show active" id="nav-hotels" role="tabpanel"
aria-labelledby="nav-hotels-tab">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel1.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel2.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
<div class="discount_tab">
<span>50%</span>
</div>

</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Hotel paradise international</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel3.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel4.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
<div class="discount_tab">
<span>50%</span>
</div>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Hotel deluxe</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel5.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>Kathmundu, Nepal</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Hotel rajavumi</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel6.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>Beach view</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Thailand grand suit</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel7.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>Long island</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel8.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>Philippine</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Manila international resort</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-tours" role="tabpanel" aria-labelledby="nav-tours-tab">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel1.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel3.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel8.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>Philippine</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Manila international resort</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-space" role="tabpanel" aria-labelledby="nav-space-tab">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel1.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel4.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel1.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html">
<img src="assets/img/tab-img/hotel8.png" alt="img">
</a>
<p><i class="fas fa-map-marker-alt"></i>Philippine</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Manila international resort</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span
class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Offer Area -->
<section id="offer_area" class="section_padding_top">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="offer_area_box d-none-phone img_animation">
<img src="assets/img/offer/offer1.png" alt="img">
<div class="offer_area_content">
<h2>Special Offers</h2>
<p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
accusam et justo duo dolores et ea rebum. Stet clita kasd dolor sit amet. Lorem ipsum
dolor sit amet.</p>
<a href="#!" class="btn btn_theme btn_md">Holiday deals</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 col-12">
<div class="offer_area_box img_animation">
<img src="assets/img/offer/offer2.png" alt="img">
<div class="offer_area_content">
<h2>News letter</h2>
<p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
<a href="#!" class="btn btn_theme btn_md">Subscribe now</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 col-12">
<div class="offer_area_box img_animation">
<img src="assets/img/offer/offer3.png" alt="img">
<div class="offer_area_content">
<h2>Travel tips</h2>
<p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
<a href="#!" class="btn btn_theme btn_md">Get tips</a>
</div>
</div>
</div>
</div>
</div>
</section>

<!--Promotional Tours Area -->
<section id="promotional_tours" class="section_padding_top">
<div class="container">
<!-- Section Heading -->
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="section_heading_center">
<h2>Our best promotional tours</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="promotional_tour_slider owl-theme owl-carousel dot_style">
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html"><img src="assets/img/tab-img/hotel1.png" alt="img"></a>
<p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html"><img src="assets/img/tab-img/hotel2.png" alt="img"></a>
<p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
<div class="discount_tab">
<span>50%</span>
</div>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Hotel paradise international</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html"><img src="assets/img/tab-img/hotel3.png" alt="img"></a>
<p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html"><img src="assets/img/tab-img/hotel4.png" alt="img"></a>
<p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
<div class="discount_tab">
<span>50%</span>
</div>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Hotel deluxe</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html"><img src="assets/img/tab-img/hotel6.png" alt="img"></a>
<p><i class="fas fa-map-marker-alt"></i>Beach view</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Thailand grand suit</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
<div class="theme_common_box_two img_hover">
<div class="theme_two_box_img">
<a href="hotel-details.html"><img src="assets/img/tab-img/hotel7.png" alt="img"></a>
<p><i class="fas fa-map-marker-alt"></i>Long island</p>
</div>
<div class="theme_two_box_content">
<h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
<p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
reviewes)</span></p>
<h3>ksh 99.00 <span>Price starts from</span></h3>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Destinations Area -->
<section id="destinations_area" class="section_padding_top">
<div class="container">
<!-- Section Heading -->
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="section_heading_center">
<h2>Destinations for you</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-10 offset-lg-1">
<div class="theme_nav_tab">
<nav class="theme_nav_tab_item">
<div class="nav nav-tabs" id="nav-tab" role="tablist">
<button class="nav-link active" id="nav-nepal-tab" data-bs-toggle="tab"
data-bs-target="#nav-nepal" type="button" role="tab" aria-controls="nav-nepal"
aria-selected="true">Nepal</button>
<button class="nav-link" id="nav-malaysia-tab" data-bs-toggle="tab"
data-bs-target="#nav-malaysia" type="button" role="tab" aria-controls="nav-malaysia"
aria-selected="false">Malaysia</button>
<button class="nav-link" id="nav-indonesia-tab" data-bs-toggle="tab"
data-bs-target="#nav-indonesia" type="button" role="tab"
aria-controls="nav-indonesia" aria-selected="false">Indonesia</button>
<button class="nav-link" id="nav-turkey-tab" data-bs-toggle="tab"
data-bs-target="#nav-turkey" type="button" role="tab" aria-controls="nav-turkey"
aria-selected="false">Turkey</button>
<button class="nav-link" id="nav-china-tab" data-bs-toggle="tab"
data-bs-target="#nav-china" type="button" role="tab" aria-controls="nav-china"
aria-selected="false">China</button>
<button class="nav-link" id="nav-darjeeling-tab" data-bs-toggle="tab"
data-bs-target="#nav-darjeeling" type="button" role="tab"
aria-controls="nav-darjeeling" aria-selected="false">Darjeeling</button>
<button class="nav-link" id="nav-italy-tab" data-bs-toggle="tab"
data-bs-target="#nav-italy" type="button" role="tab" aria-controls="nav-italy"
aria-selected="false">Italy</button>
</div>
</nav>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="tab-content" id="nav-tabContent1">
<div class="tab-pane fade show active" id="nav-nepal" role="tabpanel"
aria-labelledby="nav-nepal-tab">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small1.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Everest trek to Base Camp</a></h3>
<p>Price starts at <span>ksh 105.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small2.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Kathmundu tour</a></h3>
<p>Price starts at <span>ksh 85.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small3.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
<p>Price starts at <span>ksh 100.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small4.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Annapurna region</a></h3>
<p>Price starts at <span>ksh 75.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small5.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Chitwan national park</a></h3>
<p>Price starts at <span>ksh 105.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small6.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Langtang region</a></h3>
<p>Price starts at <span>ksh 105.00</span></p>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-malaysia" role="tabpanel" aria-labelledby="nav-malaysia-tab">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small2.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Kathmundu tour</a></h3>
<p>Price starts at <span>ksh 85.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small3.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
<p>Price starts at <span>ksh 100.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html">
<img src="assets/img/destination/destination-small4.png" alt="img">
</a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Annapurna region</a></h3>
<p>Price starts at <span>ksh 75.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small6.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Langtang region</a></h3>
<p>Price starts at <span>ksh 105.00</span></p>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-indonesia" role="tabpanel"
aria-labelledby="nav-indonesia-tab">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small3.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
<p>Price starts at <span>ksh 100.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small4.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Annapurna region</a></h3>
<p>Price starts at <span>ksh 75.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small6.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Langtang region</a></h3>
<p>Price starts at <span>ksh 105.00</span></p>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-turkey" role="tabpanel" aria-labelledby="nav-turkey-tab">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small2.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Kathmundu tour</a></h3>
<p>Price starts at <span>ksh 85.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small3.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
<p>Price starts at <span>ksh 100.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small4.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Annapurna region</a></h3>
<p>Price starts at <span>ksh 75.00</span></p>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-china" role="tabpanel" aria-labelledby="nav-china-tab">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small4.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Annapurna region</a></h3>
<p>Price starts at <span>ksh 75.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small6.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Langtang region</a></h3>
<p>Price starts at <span>ksh 105.00</span></p>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-darjeeling" role="tabpanel"
aria-labelledby="nav-darjeeling-tab">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small4.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Annapurna region</a></h3>
<p>Price starts at <span>ksh 75.00</span></p>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-italy" role="tabpanel" aria-labelledby="nav-italy-tab">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small4.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Annapurna region</a></h3>
<p>Price starts at <span>ksh 75.00</span></p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="tab_destinations_boxed">
<div class="tab_destinations_img">
<a href="top-destinations.html"><img
src="assets/img/destination/destination-small6.png" alt="img"></a>
</div>
<div class="tab_destinations_conntent">
<h3><a href="top-destinations.html">Langtang region</a></h3>
<p>Price starts at <span>ksh 105.00</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- News Area -->
<section id="home_news" class="section_padding_top">
<div class="container">
<!-- Section Heading -->
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="section_heading_center">
<h2>Latest travel news</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="home_news_left_wrapper">
<div class="home_news_item">
<div class="home_news_img">
<a href="news-details.html"><img src="assets/img/news/small1.png" alt="img"></a>
</div>
<div class="home_news_content">
<h3><a href="news-details.html">Revolutionising the travel industry,
one partnership at a time</a></h3>
<p><a href="news.html">26 Oct 2021</a> <span> <i class="fas fa-circle"></i>5min
read</span> </p>
</div>
</div>
<div class="home_news_item">
<div class="home_news_img">
<a href="news-details.html"><img src="assets/img/news/small2.png" alt="img"></a>
</div>
<div class="home_news_content">
<h3><a href="news-details.html">t is a long established fact that a reader will be
distracted.</a></h3>
<p><a href="news.html">26 Oct 2021</a> <span> <i class="fas fa-circle"></i>5min
read</span> </p>
</div>
</div>
<div class="home_news_item">
<div class="home_news_img">
<a href="news-details.html"><img src="assets/img/news/small3.png" alt="img"></a>
</div>
<div class="home_news_content">
<h3><a href="#!">There are many variations of passages of sum available</a></h3>
<p><a href="news.html">26 Oct 2021</a> <span> <i class="fas fa-circle"></i>5min
read</span> </p>
</div>
</div>
<div class="home_news_item">
<div class="home_news_img">
<a href="news-details.html"><img src="assets/img/news/small4.png" alt="img"></a>
</div>
<div class="home_news_content">
<h3><a href="news-details.html">Contrary to popular belief, Lorem Ipsum is not
simply.</a></h3>
<p><a href="news.html">26 Oct 2021</a> <span> <i class="fas fa-circle"></i>5min
read</span> </p>
</div>
</div>
<div class="home_news_item">
<div class="seeall_link">
<a href="news.html">See all article <i class="fas fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="home_news_big">
<div class="news_home_bigest img_hover">
<a href="news-details.html"><img src="assets/img/news/new-big.png" alt="img"></a>
</div>
<h3><a href="news-details.html">There are many variations of passages available but</a> </h3>
<p>It is a long established fact that a reader will be distracted by the readable content of.
The point of using Lorem Ipsum is that it has a more</p>
<p>It is a long established fact that a reader will be distracted by the readable long
established fact that a reader will be distracted content of a
page when looking at its layout.</p>
<a href="news-details.html">Read full article <i class="fas fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</section>

<!-- Our partners Area -->
<section id="our_partners" class="section_padding">
<div class="container">
<!-- Section Heading -->
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="section_heading_center">
<h2>Our partners</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="partner_slider_area owl-theme owl-carousel">
<div class="partner_logo">
<a href="#!"><img src="assets/img/partner/1.png" alt="logo"></a>
</div>
<div class="partner_logo">
<a href="#!"><img src="assets/img/partner/2.png" alt="logo"></a>
</div>
<div class="partner_logo">
<a href="#!"><img src="assets/img/partner/3.png" alt="logo"></a>
</div>
<div class="partner_logo">
<a href="#!"><img src="assets/img/partner/4.png" alt="logo"></a>
</div>
<div class="partner_logo">
<a href="#!"><img src="assets/img/partner/5.png" alt="logo"></a>
</div>
<div class="partner_logo">
<a href="#!"><img src="assets/img/partner/6.png" alt="logo"></a>
</div>
<div class="partner_logo">
<a href="#!"><img src="assets/img/partner/7.png" alt="logo"></a>
</div>
<div class="partner_logo">
<a href="#!"><img src="assets/img/partner/8.png" alt="logo"></a>
</div>
<div class="partner_logo">
<a href="#!"><img src="assets/img/partner/5.png" alt="logo"></a>
</div>
<div class="partner_logo">
<a href="#!"><img src="assets/img/partner/3.png" alt="logo"></a>
</div>
<div class="partner_logo">
<a href="#!"><img src="assets/img/partner/2.png" alt="logo"></a>
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

<?php
include('includes/footer.php');
?>
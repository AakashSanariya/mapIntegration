<html>
<head>
    <title>Add Address</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    {{-- //Bootstrap --}}

    {{-- Css Style--}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- //Css Style--}}
</head>
<body>
<div class="container">
    <div style="text-align: center"><h2>Select Address</h2></div>
    <!-- Default form login -->
    <form class="text-center border border-light p-5" action="{{ url('/map') }}" method="POST">
        @csrf
        @method('POST')
        <p class="h4 mb-4">Map </p>
        <input type="text" id="addressName" class="form-control mb-4" name="addressName" placeholder="Enter Address Name">
        <div class="pac-card" id="pac-card">
            <div>
                <div id="title">Autocomplete search</div>
                <div id="type-selector" class="pac-controls">
                    <input type="radio" name="type" id="changetype-all" checked="checked">
                    <label for="changetype-all">All</label>

                    <input type="radio" name="type" id="changetype-establishment">
                    <label for="changetype-establishment">Establishments</label>

                    <input type="radio" name="type" id="changetype-address">
                    <label for="changetype-address">Addresses</label>

                    <input type="radio" name="type" id="changetype-geocode">
                    <label for="changetype-geocode">Geocodes</label>
                </div>
                <div id="strict-bounds-selector" class="pac-controls">
                    <input type="checkbox" id="use-strict-bounds" value="">
                    <label for="use-strict-bounds">Strict Bounds</label>
                </div>
            </div>
            <div id="pac-container">
                <input id="pac-input" type="text" placeholder="Enter a location" >
            </div>
        </div>
        <div id="map"></div>
        <div id="infowindow-content">
            <img src="" width="16" height="16" id="place-icon">
            <span id="place-name"  class="title"></span><br>
            <span id="place-address"></span>
        </div>
        <div>
            <br>
            <input type="hidden" name="latitude" id="latitude" value="">
            <input type="hidden" name="longitude" id="longitude" value="">
        </div>
        <div class="row">
            <div class="col-5">
                <div class="input-group input-daterange">
                    <input type="text" id="startDate" name="startDate" class="form-control datepicker" placeholder="Enter Start Date">
                </div>
            </div>
            <div class="col-md-2">
                <div class="input-group-addon">to</div>
            </div>
            <div class="col-5">
                <div class="input-group input-daterange">
                    <input type="text" id="endDate" name="endDate" class="form-control datepicker" placeholder="Enter End Date">
                </div>
            </div>
        </div>
        <div>
            <input type="submit"  class="btn btn-info btn-block my-4" value="submit">
        </div>
    </form>
    <button onclick="codeAddress()">Get Latitude</button>
    <!-- Default form login -->
</div>
{{-- Map Script--}}
<script src="{{ asset('js/mapCustom.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('MAP_KEY') }}&libraries=places&callback=initMap"></script>
{{-- //Map Script--}}
</body>
{{-- datepicker--}}
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="{{ asset('js/DatePicker.js') }}"></script>
{{-- //datepicker--}}
</html>
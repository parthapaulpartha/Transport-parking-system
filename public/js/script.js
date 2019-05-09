var map;
var myLatLng;
$(document).ready(function() {
    geoLocationInit();
});
    function geoLocationInit() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(success, fail);
        } else {
            alert("Browser not supported");
        }
    }

    function success(position) {
        console.log(position);
        var latval = position.coords.latitude;
        var lngval = position.coords.longitude;
        myLatLng = new google.maps.LatLng(latval, lngval);
        createMap(myLatLng);
        // nearbySearch(myLatLng, "school");
        searchTP(latval,lngval);
    }

    function fail() {
        alert("it fails");
    }
    //Create Map
    function createMap(myLatLng) {
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 11
        });

        //marker point
        var marker = new google.maps.Marker({
            position: myLatLng,
             title: 'My Location',
            map: map
        });
        
         var marker = new google.maps.Marker({
            position:  {lat:24.0776974,lng:90.2076607},
            icon : 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            title: 'TP Kaliakair,Bus stand',
            map: map

        });
         var marker = new google.maps.Marker({
            position:  {lat: 23.9990021,lng:90.4176131},
            icon : 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            title: 'TP Gazipur,Chowrasta',
            map: map
        });
         var marker = new google.maps.Marker({
            position:  {lat: 23.7561235,lng:90.3733658},
            icon : 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            title: 'TP Dhanmondi 27 no',
            map: map
        });
         var marker = new google.maps.Marker({
            position:  {lat: 23.7584897,lng:90.3836137},
            icon : 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            title: 'TP Khamar Bari ',
            map: map
        });

         var marker = new google.maps.Marker({
            position:  {lat: 23.9101339,lng:90.3949522},
            icon : 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            title: 'TP Tongi college Rd ',
            map: map
        });
         var marker = new google.maps.Marker({
            position:  {lat: 23.7330344,lng:90.3824953},
            icon : 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             title: 'TP Dhaka New maret ',
            map: map
        });
          var marker = new google.maps.Marker({
            position:  {lat: 23.8392252,lng:90.254602},
            icon : 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
             title: 'TP Savar Education & Hospital Rd ',
            map: map
        });
           var marker = new google.maps.Marker({
            position:  {lat: 23.4892599,lng:91.0014859},
            icon : 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            title: 'TP Comilla Chandina ',
            map: map
        });
           var marker = new google.maps.Marker({
            position:  {lat: 23.7323809,lng:90.4250583},
            icon : 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            title: 'TP Motijheel Kamalapur station ',
            map: map
        });
    
    }
    //Create marker
    function createMarker(latlng, icn, name) {
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: icn,
            title: name
        });

        
    }
   
    function searcTP(lat,lng){
        $.post('http://localhost/api/searcTP',{lat:lat,lng:lng},function(match){
             console.log(match);
           $('#girlsResult').html('');

            $.each(match,function(i,val){
                var glatval=val.lat;
                var glngval=val.lng;
                var gname=val.name;
                var GLatLng = new google.maps.LatLng(glatval, glngval);
                var gicn= 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                createMarker(GLatLng,gicn,gname);
                var html='<h5><li>'+gname+'</li></h5>';
               // $('#girlsResult').append(html);
            });

               $.each(match, function(i, val) {
                 console.log(val.name);
               });
        });
    }

    $('#searcTP').submit(function(e){
       e.preventDefault();
        var val=$('#locationSelect').val();
        $.post('http://localhost/api/getLocationCoords',{val:val},function(match){

            var myLatLng = new google.maps.LatLng(match[0],match[1]);
            createMap(myLatLng);
            searcTP(match[0],match[1]);
        });
    });


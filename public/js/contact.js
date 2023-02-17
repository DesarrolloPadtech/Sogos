function changeSection(id){
    console.log(id);

    if(id == 'next1'){
        document.getElementById('section1').className = 'show';
        document.getElementById('section2').className = 'show';
        document.getElementById('section3').className = 'hide';

        document.getElementById('next1').style.display = 'none';
        //document.getElementById('next2').style.display = 'block';
        //codeAddress();

    }
    else if(id == 'next2'){
        document.getElementById('section1').className = 'hide';
        document.getElementById('section2').className = 'hide';
        document.getElementById('section3').className = 'show';

        //document.getElementById('next11').style.display = 'none';
        //document.getElementById('siguiente2').style.display = 'none';

        street = document.getElementById('street').value;
        num1 = document.getElementById('num_ext').value;
        num2 = document.getElementById('num_int').value;
        neighborhod = document.getElementById('neighborhod').value;
        city = document.getElementById('town').value;
        state = document.getElementById('state').value;
        cp = document.getElementById('cp').value;

        document.getElementById('card-text').textContent = street + " "+ num1  + " "+ neighborhod + " "+ city + " "+ state + " "+ cp;


    }

    else if(id == 'next3'){
        document.getElementById('section3').className = 'hide';
        document.getElementById('section4').className = 'show';
    }

    else if(id == '4'){
        document.getElementById('section1').className = 'show';
        document.getElementById('next1').style.display = 'block';
        document.getElementById('section2').className = 'hide';
        document.getElementById('section3').className = 'hide';
    }



}

// Initialize and add the map
var geocoder;
var map;

function initMap() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var mapOptions = {
        zoom: 15,
        center: latlng
    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
}

function codeAddress() {

    street = document.getElementById('street').value;
    num1 = document.getElementById('num_ext').value;
    num2 = document.getElementById('num_int').value;
    neighborhod = document.getElementById('neighborhod').value;
    city = document.getElementById('town').value;
    state = document.getElementById('state').value;
    cp = document.getElementById('cp').value;
    address = street+ " " +num1+ " " +neighborhod+" "+city+" "+state+" "+cp;

    geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == 'OK') {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}

//window.initMap = initMap;

$.ajax({
    url: 'public/sepomex,csv',
    dataType: "text",
}).done(successFunction);

function successFunction(data) {
    var allRows = data.split(/\r?\n|\r/);
    var table = '<table>';
    for (var singleRow = 0; singleRow < allRows.length; singleRow++) {
        if (singleRow === 0) {
            table += '<thead>';
            table += '<tr>';
        } else {
            table += '<tr>';
        }
        var rowCells = allRows[singleRow].split(',');
        for (var rowCell = 0; rowCell < rowCells.length; rowCell++) {
            if (singleRow === 0) {
                table += '<th>';
                table += rowCells[rowCell];
                table += '</th>';
            } else {
                table += '<td>';
                table += rowCells[rowCell];
                table += '</td>';
            }
        }
        if (singleRow === 0) {
            table += '</tr>';
            table += '</thead>';
            table += '<tbody>';
        } else {
            table += '</tr>';
        }
    }
    table += '</tbody>';
    table += '</table>';
    $('body').append(table);
}
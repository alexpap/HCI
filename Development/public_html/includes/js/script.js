/* JS functions   */

/*
* Author:      Marco Kuiper (http://www.marcofolio.net/)
*/
google.load("jquery", "1.3.1");
google.setOnLoadCallback(function()
{
	// Just for demonstration purposes, change the contents/active state using jQuery
	$("#aboutmenu ul li a").click(function(e) {
		e.preventDefault();
		
		$("#aboutmenu ul li a").each(function() {
			$(this).removeClass("active");	
		});
		
		$(this).addClass("active");
		
	});
});

/* About function */
function toggle_visibility(id, id2, id3, id4, id5) {
	var open = document.getElementById(id);
	var close1 = document.getElementById(id2);
	var close2 = document.getElementById(id3);
	var close3 = document.getElementById(id4);
	var close4 = document.getElementById(id5);
	close1.style.display = 'none';
	close2.style.display = 'none';
	close3.style.display = 'none';
	close4.style.display = 'none';
	open.style.display = 'block';
}

function initialize() {
        var mapOptions = {
          	center: new google.maps.LatLng(39.074208,21.824312),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('map_canvas'),
          mapOptions);

        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
          map: map
        });

        google.maps.event.addListener(autocomplete, 'place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          input.className = '';
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // Inform the user that the place was not found and return.
            input.className = 'notfound';
            return;
          }
    	document.getElementById('lati').value = place.geometry.location.lat();
          document.getElementById('longi').value = place.geometry.location.lng();
          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  
          }
          var image = new google.maps.MarkerImage(
              place.icon,
              new google.maps.Size(71, 71),
              new google.maps.Point(0, 0),
              new google.maps.Point(17, 34),
              new google.maps.Size(35, 35));
          marker.setIcon(image);
          marker.setPosition(place.geometry.location);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }
		document.getElementById('lati').value=place.geometry.location.lat();
		document.getElementById('longi').value=place.geometry.location.lng();
          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
          infowindow.open(map, marker);
      
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          google.maps.event.addDomListener(radioButton, 'click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);
      }


"use strict";function gMap(){if($(".google-map").length){$(".google-map").each(function(){var e=$(this).attr("id");var c=$(this).data("map-lat");var d=$(this).data("map-lng");var a=$(this).data("icon-path");var g=$(this).data("map-zoom");var f=$(this).data("map-title");var h=[{featureType:"administrative",elementType:"labels.text.fill",stylers:[{color:"#444444"}]},{featureType:"landscape",elementType:"all",stylers:[{color:"#000"}]},{featureType:"poi",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"all",stylers:[{saturation:-100},{lightness:45}]},{featureType:"road.highway",elementType:"all",stylers:[{visibility:"simplified"}]},{featureType:"road.arterial",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"water",elementType:"all",stylers:[{color:"#f1f1f1"},{visibility:"on"}]}];if(!g){var g=11}var b;b=new GMaps({div:"#"+e,scrollwheel:false,lat:c,lng:d,styles:h,zoom:g});if(a){b.addMarker({icon:a,lat:c,lng:d,title:f});b.addMarker({icon:a,lat:40.700843,lng:40.700843,title:"New York"})}})}}jQuery(document).on("ready",function(){(function(a){gMap()})(jQuery)});
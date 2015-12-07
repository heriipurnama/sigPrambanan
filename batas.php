<html>
<head>
    <title>heriipurnama</title>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCUmX6Xyoy4amBcTF6qDlx3PF9qOJofVPs&sensor=false">
</script>
<script>
//Deklarasi titik sudut polygon
var pusatPeta=new google.maps.LatLng(-7.7158247,110.5274143);//urutan dari latitide dan longitude
var a =new google.maps.LatLng(-7.7521561000000005,110.4925919);
var b =new google.maps.LatLng(-7.753176600000001,110.5142212);
var c =new google.maps.LatLng(-7.719156800000001,110.5691528);
var d =new google.maps.LatLng(-7.715754699999999,110.5924988);
var e =new google.maps.LatLng(-7.6919390000000005,110.6137848);
var f =new google.maps.LatLng(-7.658594800000001,110.5952454);
var g =new google.maps.LatLng(-7.6517895000000005,110.5911255);
var h =new google.maps.LatLng(-7.623206300000001,110.5636597);
var i =new google.maps.LatLng(-7.598704800000001,110.5348206);
var j =new google.maps.LatLng(-7.6177616,110.4678726);
var k =new google.maps.LatLng(-7.6494077,110.4689026);
var l =new google.maps.LatLng(-7.7521561000000005,110.4925919);
function initialize()
{
var mapProp = {
  center:pusatPeta,
  zoom:11,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };
var petaKu =new google.maps.Map(document.getElementById("googleMap") ,mapProp );
var ruteKu =[ a, b, c, d, e, f,g ,h,i,j,k,l] //lingkaran batas garis
//membuat poligon warna garis biru , blok biru transparan 
var lintasan=new google.maps.Polygon({
  path:ruteKu, //pengambaran garis poligon
  strokeColor:"#FF0066", //warna garis
  strokeOpacity:0.50, //ketebalan warna garis
  strokeWeight:5,//lebar garis
  fillColor:"#00CC99",//wanr dalam memblok poligon
  fillOpacity:0.4 //ketebalan warna dalam poligon
  });
lintasan.setMap(petaKu);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body>
<div id="googleMap" style="width:1400px;height:568px;"></div>
</body>
</html>
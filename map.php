<?php
include ('connection.php');

session_start();
$session_data = $_SESSION['email'];

$sql = "SELECT * FROM person WHERE person_email='$session_data'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $address = $row['person_address'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/core-img/favicon.ico">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>EduSolution | Location</title>
</head>

<body>
    <div id="maparea" style="height: 715px"></div>
    <script>
        var map;
        function drawmap() {
            map = new google.maps.Map(document.getElementById('maparea'), {
                center: { lat: 23.42, lng: 90.50 },
                zoom: 10,
                mapTypeId: 'hybrid'
            });

            map.addListener("click", drawMarker);
        }

        geocode();

        function geocode() {
            var location = "<?php echo $address ?>";
            console.log(location);
            axios.get('https://maps.googleapis.com/maps/api/geocode/json', {
                params: {
                    address: location,
                    key: 'AIzaSyBJG1gcDkonYdrBI4nREtk4mUJ_l245fys'
                }
            })
                .then(function (response) {
                    if (response.data.results) {
                        // Formatted Address
                        var formattedAddress = response.data.results[0].formatted_address;
                        console.log(formattedAddress);

                        // Geometry
                        var latitude = response.data.results[0].geometry.location.lat;
                        var longitude = response.data.results[0].geometry.location.lng;
                        console.log(latitude);
                        console.log(longitude);

                        var marker = new google.maps.Marker({
                            position: { lat: latitude, lng: longitude },
                            map: map
                        });
                    }  
                })
                .catch(function (error) {
                    console.log(error);
                });
        }

        function drawMarker(event) {
            var pos = event.latLng;

            var newMarker = new google.maps.Marker({
                position: pos,
                map: map,
                draggable: true
            });

            newMarker.addListener("dragend", dragEvent);
        }

        function dragEvent(event) {
            window.alert(event.latLng.lat() + " " + event.latLng.lng());
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJG1gcDkonYdrBI4nREtk4mUJ_l245fys&callback=drawmap"></script>
</body>

</html>
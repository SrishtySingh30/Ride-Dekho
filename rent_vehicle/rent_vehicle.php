
<html>
<head>
    <link rel="stylesheet" href="style_rent.css">
</head>

<body>
    <h1>
        <center>VEHICLE RENTAL SERVICES</center>
    </h1>
    <br>
    <section class="bike_last">

        <center>
            <h2>TAKE VEHICLE ON RENT</h2>
        </center>
    </section>
    <form method="GET">
        <center>
            <ul class="form-style-1">
                <li>
                    <label>Select Vehicle<span class="required">*</span></label>
                    <select name="field3" class="field-select" id="vehicle-list">
                        <option value="" selected disabled>Select a vehicle</option>
                        <option value="Honda Activa">Honda Activa 4G</option>
                        <option value="Jupiter">Jupiter</option>
                        <option value="Splendor Plus">Splendor Plus</option>
                        <option value="Passion Pro">Passion Pro</option>
                        <option value="Maruti Suzuki">Maruti Suzuki</option>
                        <option value="Swift">Swift</option>
                        <option value="Dezire">Dezire</option>
                        <option value="Hyundai i10">Hyuandai i10</option>
                    </select>
                </li>
                <div class="btn" align="center">
                    <div class="inner"></div>
                    <button type="button" onclick="showAlert()">Submit</button>
                </div>
            </ul>
        </center>
    </form>
    <script>
        function showAlert() {
            const selectedVehicle = document.getElementById('vehicle-list').value;
            if (selectedVehicle === '') {
                alert("Please select a vehicle.");
            } else {
                alert(`Request submitted for ${selectedVehicle}.`);
                window.location = "../dashboard/dashboard.php";
            }
        }
    </script>
</body>
</html>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
		<title>Sign Up</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style1.css" />
        <script src="https://kit.fontawesome.com/9f1e537989.js"></script>
    </head>
    <body style="background-color: #ff4c68;">
        <section>
            <div class="container">
                <div class="text">SignUp Form</div>

                    <form action="register.php" method="post">
                        <div class="data">
                            <label>Full Name<span class="required">*</span></label>
                            <input name="name" type="text" required />
                        </div>
						<div class="data">
                            <label>Email <span class="required">*</span></label>
        					<input name="email" type="email" class="field-long" />
                        </div>
						<div class="data">
                            <label>User ID<span class="required">*</span></label>
							<input type="text" name="User_id" class="field-long" >
                        </div>
						<div class="data">
                            <label>Password<span class="required">*</span></label>
							<input type="password" name="password" class="field-long" placeholder="**********">
                        </div>
						<div class="data">
							<label>Vehicle Type</label>
							<select name="vehicle_type" class="field-select">
							<option value="None">None</option>
							<option value="Car">Car</option>
							<option value="Bike">Bike</option>
							<option value="Scooter">Scooter</option>
							</select>
                        </div>
						
                        <div class="data">
							<label>Address <span class="required">*</span></label>
							<textarea name="address" id="field5" class="field-long field-textarea"></textarea>
                        </div>
						<div class="data">
							<label>Phone No. <span class="required">*</span></label>
							<input type="number" name="phone_no">
                        </div>
						<div class="data">
							<label>Status <span class="required">*</span></label>
							<input type="radio" name="status" 					value="renter">Lessee<br>
						</div>
                        <div class="btn" align="center">
                            <div class="inner"></div>
                            <button type="submit">Login</button>
                        </div>
                            <div class="signup-link">
                             Already a member-><a href="signin.php">Sign-in</a>
                        </div>
                    </form>
                </div>
            </div>
      </section>
    </body>
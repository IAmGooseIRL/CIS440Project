<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Registration</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style-1.css?v=1">
    </head>
    <body>
        <div id="page-container" class="container">
            <h2>Employee Registration</h2>
            <form action="#">
                <div id="personal-info" class="container">
                    <h3>Personal Information</h3>
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" class="form-control" id="first-name" placeholder="Enter first name">
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" id="last-name" placeholder="Enter last name">
                    </div>
                    <div class="form-group">
                        <label for="b-day">DOB</label>
                        <input type="date" class="form-control" id="b-day">
                    </div>
                    <div id="genders">
                        <label>Gender</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="male" value="option-1" name="gender">
                            <label for="male" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="female" value="option-2" name="gender">
                            <label for="female" class="form-check-label">Female</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="nonbinary" value="option-3" name="gender">
                            <label for="nonbinary" class="form-check-label">Nonbinary</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="no-answer" value="option-4" name="gender">
                            <label for="no-answer" class="form-check-label">Prefer not to answer</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address-1">Address 1</label>
                        <input type="text" class="form-control" id="address-1" placeholder="Enter address 1">
                    </div>
                    <div class="form-group">
                        <label for="address-2">Address 2</label>
                        <input type="text" class="form-control" id="address-2" placeholder="Enter address 2">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="Enter city">
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <select name="state" id="state">
                            <option value="" selected="selected">Select a State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="zip">ZIP Code</label>
                        <input type="text" class="form-control" id="zip" placeholder="Enter ZIP">
                    </div>
                    <div class="form-group">
                        <label for="ssn">Social Security Number</label>
                        <input type="password" class="form-control" id="ssn" placeholder="Enter SSN" maxlength="9">
                    </div>
                    <div class="form-group">
                        <label for="medical">Medical History</label>
                        <input type="text" class="form-control" id="medical" placeholder="Describe relevant medical history">
                    </div>
                </div>
                <div id="contact-info" class="container">
                    <h3>Contact Information</h3>
                    <div id="phones">
                        <div class="form-group">
                            <label for="home-phone">Home Phone</label>
                            <input type="text" class="form-control" id="home-phone" placeholder="(123) 456 7890">
                        </div>
                        <div class="form-group">
                            <label for="cell-phone">Cell</label>
                            <input type="text" class="form-control" id="cell-phone" placeholder="(123) 456 7890">
                        </div>
                        <div class="form-group">
                            <label for="work-phone">Work</label>
                            <input type="text" class="form-control" id="work-phone" placeholder="(123) 456 7890">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <h5>Emergency Contact Information</h5>
                    <div class="form-group">
                        <label for="emergency-first-name">First Name</label>
                        <input type="text" class="form-control" id="emergency-first-name" placeholder="Enter first name">
                    </div>
                    <div class="form-group">
                        <label for="emergency-last-name">Last Name</label>
                        <input type="text" class="form-control" id="emergency-last-name" placeholder="Enter last name">
                    </div>
                    <div id="emergency-relationship">
                        <label>Relationship to Contact</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="parent" name="emergency-relationship">
                            <label for="parent">Parent</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="sibling" name="emergency-relationship">
                            <label for="sibling">Sibling</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="spouse" name="emergency-relationship">
                            <label for="spouse">Spouse</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="friend" name="emergency-relationship">
                            <label for="friend">Friend</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="other" name="emergency-relationship">
                            <label for="other">Other</label>
                        </div>
                    </div>
                    <div id="emergency-phones">
                        <div class="form-group">
                            <label for="emergency-home-phone">Home Phone</label>
                            <input type="text" class="form-control" id="emergency-home-phone" placeholder="(123) 456 7890">
                        </div>
                        <div class="form-group">
                            <label for="emergency-cell-phone">Cell</label>
                            <input type="text" class="form-control" id="emergency-cell-phone" placeholder="(123) 456 7890">
                        </div>
                        <div class="form-group">
                            <label for="emergency-work-phone">Work</label>
                            <input type="text" class="form-control" id="emergency-work-phone" placeholder="(123) 456 7890">
                        </div>
                    </div>
                </div>
                <div id="bank-info" class="container">
                    <h3>Bank Information</h3>
                    <div class="form-group">
                        <label for="bank-name">Bank Name</label>
                        <input type="text" class="form-control" id="bank-name" placeholder="Enter bank name">
                    </div>
                    <div class="form-group">
                        <label for="routing-number">Routing Number</label>
                        <input type="text" class="form-control" id="routing-number" placeholder="Enter routing number">
                    </div>
                    <div class="form-group">
                        <label for="account-number">Account Number</label>
                        <input type="text" class="form-control" id="account-number" placeholder="Enter account number">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
    </body>
</html>

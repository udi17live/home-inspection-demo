<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Inspection Report Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-5">
        <form action="/generate" method="POST">
            @csrf
                        <div class="form-group">
                <label for="contact_name">Contact Name:</label>
                <input type="text" class="form-control" id="contact_name" name="contact_name">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div><div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            

            <div class="form-group">
                <label for="estimated_age">Estimated Age:</label>
                <input type="text" class="form-control" id="estimated_age" name="estimated_age">
            </div>
            <div class="form-group">
                <label for="building_type">Building Type:</label>
                <input type="text" class="form-control" id="building_type" name="building_type">
            </div>
            <div class="form-group">
                <label for="state_of_occupancy">State of Occupancy:</label>
                <input type="text" class="form-control" id="state_of_occupancy" name="state_of_occupancy">
            </div>
            
            <div class="form-group">
                <label for="inspection_date">Inspection Date:</label>
                <input type="date" class="form-control" id="inspection_date" name="inspection_date">
            </div>
            <div class="form-group">
                <label for="start_time">Start Time:</label>
                <input type="time" class="form-control" id="start_time" name="start_time">
            </div>
            <div class="form-group">
                <label for="end_time">End Time:</label>
                <input type="time" class="form-control" id="end_time" name="end_time">
            </div>
            <button type="submit" class="btn btn-primary">Generate Report</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Detection</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/weather.css">
</head>
<body>
    <div class="container">
        <h1>Check Today's Weather</h1>
        <div class="weather-info">
            <input type="text" id="city" placeholder="Enter city name">
            <button onclick="getWeather()">Get Weather</button>
        </div>
        <div id="weather-result"></div>
    </div>
    <script src="js/weather.js"></script>
</body>
</html>

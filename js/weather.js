async function getWeather() {
    const apiKey = '309c54899b312bb095f2d1f65047d05d';
    const city = document.getElementById('city').value;
    const weatherResult = document.getElementById('weather-result');

    if (city === "") {
        weatherResult.innerHTML = "Please enter a city name.";
        return;
    }

    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

    try {
        const response = await fetch(apiUrl);
        if (!response.ok) {
            throw new Error('City not found');
        }

        const data = await response.json();
        const weatherDescription = data.weather[0].description;
        const temperature = data.main.temp;
        const humidity = data.main.humidity;

        weatherResult.innerHTML = `
            <h2>Weather in ${city}</h2>
            <p>${weatherDescription}</p>
            <p>Temperature: ${temperature}°C</p>
            <p>Humidity: ${humidity}%</p>
        `;
    } catch (error) {
        weatherResult.innerHTML = error.message;
    }
}

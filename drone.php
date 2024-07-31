<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drone Search</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/drone.css"> <!-- Corrected CSS Link -->
    <script>
        function resetForm() {
            document.getElementById("searchForm").reset();
            fetchRandomDroneData(); // Fetch random drone data after resetting form
        }

        function fetchDroneData() {
            fetch('drones.json')
                .then(response => response.json())
                .then(data => {
                    const searchCrop = document.querySelector('input[name="searchname1"]').value.toLowerCase();
                    const searchPrice = document.querySelector('input[name="searchname2"]').value.toLowerCase();
                    let filteredData = data;
                    if (searchCrop.trim() !== "") {
                        filteredData = filteredData.filter(drone => drone.crop.toLowerCase() === searchCrop);
                    }
                    if (searchPrice.trim() !== "") {
                        filteredData = filteredData.filter(drone => drone.price.toLowerCase().includes(searchPrice));
                    }
                    const droneContainer = document.getElementById('droneCardContainer');
                    droneContainer.innerHTML = ''; // Clear existing content
                    if (filteredData.length > 0) {
                        filteredData.forEach(drone => {
                            const droneCard = createDroneCard(drone);
                            droneContainer.appendChild(droneCard);
                        });
                    } else {
                        droneContainer.innerHTML = '<p>No results found.</p>';
                    }
                })
                .catch(error => console.error('Error fetching drone data:', error));
        }

        function fetchRandomDroneData() {
            fetch('drones.json')
                .then(response => response.json())
                .then(data => {
                    const droneContainer = document.getElementById('droneCardContainer');
                    droneContainer.innerHTML = ''; // Clear existing content
                    for (let i = 0; i < 9; i++) {
                        const randomIndex = Math.floor(Math.random() * data.length);
                        const randomDrone = data[randomIndex];
                        const droneCard = createDroneCard(randomDrone);
                        droneContainer.appendChild(droneCard);
                    }
                })
                .catch(error => console.error('Error fetching random drone data:', error));
        }

        function createDroneCard(drone) {
            const droneCard = document.createElement('div');
            droneCard.classList.add('drone-card');
            droneCard.innerHTML = `
                <h2>${drone.name}</h2>
                <p>Crop: ${drone.crop}</p>
                <p>Price: ${drone.price}</p>
                <p>Date: ${drone.date}</p>
                <p>Description: ${drone.description}</p>
            `;
            return droneCard;
        }

        // Fetch random drone data on page load
        window.onload = fetchRandomDroneData;
    </script>
</head>
<body style="background-image: url('images/drone.jpg')">
    <div class="container">
        <h1>Drone</h1>
        <form id="searchForm">
            <div class="search-filters">
                <input type="text" name="searchname1" placeholder="Crop name">
                <input type="text" name="searchname2" placeholder="Drone Price">
                <input type="button" value="Search" onclick="fetchDroneData()">
                <input type="button" value="Reset" onclick="resetForm()">
            </div>
        </form>

        <div class="drone-container" id="droneCardContainer">
            <!-- Initially display 9 random drone data -->
        </div>
    </div>
</body>
</html>

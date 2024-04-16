<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drone</title>
    <link rel="stylesheet" href="css/drone.css">
    <script>
        function resetForm() {
            document.getElementById("searchForm").reset();
            document.getElementById("searchResults").style.display = "none";
            document.querySelectorAll('.drone-container').forEach(container => {
                container.style.display = "flex";
            });
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Drone</h1>
        <form action="" method="POST" id="searchForm">
            <div class="search-filters">
                <input type="text" name="searchname1" placeholder="Crop name">
                <input type="text" name="searchname2" placeholder="Land Area">
                <input type="date" name="searchname3" placeholder="Date">
                <input type="submit" name="search" id="search" value="Search">
                <input type="button" value="Reset" onclick="resetForm()">
            </div>
        </form>

        <div class="drone-container" id="droneCardContainer">
            <div class="drone-card">
                <h2>Drone Name</h2>
                <p>Crop</p>
                <p>Price</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="drone-card">
            <h2>Drone Name</h2>
                <p>Crop</p>
                <p>Price</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="drone-card">
            <h2>Drone Name</h2>
                <p>Crop</p>
                <p>Price</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

        <div class="drone-container" id="droneCardContainer">
            <div class="drone-card">
            <h2>Drone Name</h2>
                <p>Crop</p>
                <p>Price</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="drone-card">
            <h2>Drone Name</h2>
                <p>Crop</p>
                <p>Price</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="drone-card">
            <h2>Drone Name</h2>
                <p>Crop</p>
                <p>Price</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

        <div class="drone-container" id="droneCardContainer">
            <div class="drone-card">
            <h2>Drone Name</h2>
                <p>Crop</p>
                <p>Price</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="drone-card">
            <h2>Drone Name</h2>
                <p>Crop</p>
                <p>Price</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="drone-card">
            <h2>Drone Name</h2>
                <p>Crop</p>
                <p>Price</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

        <?php
            require_once("config.php");

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $search1 = $_POST["searchname1"];
                $search2 = $_POST["searchname2"];
                $search3 = $_POST["searchname3"];

                $qry = mysql_query("SELECT * FROM hackxspirit.drone WHERE (d_crop LIKE '$search1') OR (d_acr LIKE '$search2') OR (d_date LIKE '$search3') ");

                if (mysql_num_rows($qry) > 0) {

                    echo "<div class='drone-container'>";

                        while ($row = mysql_fetch_array($qry)) {

                            echo "<div class='drone-card'>";
                                echo "<h2>" . $row["d_name"] . "</h2>";
                                echo "<p>Crop: " . $row["d_crop"] . "</p>";
                                echo "<p>Price: " . $row["d_price"] . "</p>";
                                echo "<p>Date: " . $row["d_date"] . "</p>";

                            echo "</div>";
                        }
                    echo "</div>";

                    echo "<style>#droneCardContainer { display: none; }</style>"; // Hide job cards
                } 
            }
        ?>  
        
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (mysql_num_rows($qry) <= 0) {
                    echo "<p>No results found.</p>";
                    echo "<style>.drone-container { display: none; }</style>"; // Hide all job containers
                }
            }
        ?>
    </div>

    <!-- <script src="js/drone.js"></script> -->
</body>
</html>




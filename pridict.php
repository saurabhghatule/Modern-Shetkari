<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crop Price Prediction</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/predict.css">
</head>
<body>
  <header>
    <nav>
      <div class="navbar">
        <a href="#" class="nav-brand">
          <img src="images/logo.png" alt="Logo">
          Crop Price Prediction
        </a>
        <ul class="nav-links">
          <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
          <li><a href="#price-prediction"><i class="fas fa-chart-line"></i> Price Prediction</a></li>
          <li><a href="#crop-recommendations"><i class="fas fa-seedling"></i> Crop Recommendations</a></li>
          <li><a href="#features"><i class="fas fa-star"></i> Features</a></li>
          <li><a href="drone.php"><i class="fas fa-quote-left"></i>Drone</a></li>
          <li><a href="#about"><i class="fas fa-info-circle"></i> About</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>

    <section id="price-prediction" class="price-prediction">
      <h2>Crop Price Prediction</h2>
      <div class="chart-container" style="background-image: url(images/graph1.webp);">
        <canvas id="priceChart"></canvas>
      </div>
    </section>

    <section id="prediction-form" class="prediction-form">
        <h2>Predict Crop Price</h2>
        <form>
          <div class="form-group">
            <label for="month">Select Month:</label>
            <select id="month" name="month">
              <option value="january">January</option>
              <option value="february">February</option>
              <!-- Add more options for other months -->
            </select>
          </div>
          <div class="form-group">
            <label for="crop">Select Crop:</label>
            <select id="crop" name="crop">
              <option value="wheat">Wheat</option>
              <option value="rice">Rice</option>
              <option value="maize">Maize</option>
              <option value="soybean">Soybean</option>
              <option value="cotton">Cotton</option>
              <!-- Add more options for other crops -->
            </select>
          </div>
          <button type="button" id="predict-btn">Predict Price</button>
        </form>
        <div id="predictionResult"></div>
      </section>

    <section id="crop-recommendations" class="crop-recommendations">
      <h2>Crop Recommendations</h2>
      <div class="recommendation-cards">
        <div class="card">
          <img src="images/wheatimage.jpeg" alt="Crop 1">
          <h3>Wheat</h3>
          <p>Wheat is a versatile crop that can be grown in various climates. It is a rich source of carbohydrates, protein, and fiber. Wheat is widely used for making bread, pasta, and other baked goods.</p>
        </div>
        <div class="card">
          <img src="images/rice.jpeg" alt="Crop 2">
          <h3>Rice</h3>
          <p>Rice is a staple food for a large portion of the world's population. It is a great source of energy and can be grown in both irrigated and rainfed conditions. Rice is consumed in various forms, including white rice, brown rice, and rice flour.</p>
        </div>
        <div class="card">
          <img src="images/maize.jpeg" alt="Crop 3">
          <h3>Maize</h3>
          <p>Maize, also known as corn, is a widely cultivated cereal crop. It is used for human consumption, animal feed, and biofuel production. Maize is rich in vitamins and minerals and can be consumed fresh, canned, or processed into various products.</p>
        </div>
        <div class="card">
          <img src="images/Soybean.jpeg" alt="Crop 4">
          <h3>Soybean</h3>
          <p>Soybean is a legume crop that is a rich source of protein and oil. It is used for various food and industrial products. Soybean is a versatile crop and is a popular ingredient in many plant-based and vegetarian foods.</p>
        </div>
        <div class="card">
          <img src="images/Cotton.jpeg" alt="Crop 5">
          <h3>Cotton</h3>
          <p>Cotton is a crucial fiber crop used in the textile industry. It is also a source of cottonseed oil and animal feed. Cotton fibers are used to make a wide range of fabrics, including clothing, bedding, and towels.</p>
        </div>
      </div>
    </section>

    <section id="features" class="features">
      <h2>Key Features</h2>
      <div class="feature-cards">
        <div class="card">
          <i class="fas fa-chart-line"></i>
          <h3>Accurate Price Prediction</h3>
          <p>Our advanced machine learning algorithms analyze historical data and market trends to provide accurate crop price predictions, helping you make informed decisions and maximize your profits.</p>
        </div>
        <div class="card">
          <i class="fas fa-leaf"></i>
          <h3>Tailored Crop Recommendations</h3>
          <p>Get personalized crop recommendations based on your region's climate, soil conditions, and market demand. Our recommendations are designed to optimize your yield and profitability.</p>
        </div>
        <div class="card">
          <i class="fas fa-tractor"></i>
          <h3>Sustainable Farming Practices</h3>
          <p>We promote sustainable and eco-friendly farming practices to ensure long-term environmental sustainability. Our platform provides guidance on sustainable agricultural techniques and responsible resource management.</p>
        </div>
        <div class="card">
          <i class="fas fa-globe"></i>
          <h3>Global Market Insights</h3>
          <p>Stay updated with global market trends, supply and demand dynamics, and crop price fluctuations. Our platform offers comprehensive market intelligence to help you stay ahead of the competition.</p>
        </div>
      </div>
    </section>

    <section id="testimonials" class="testimonials">
      <h2>What Our Farmers Say</h2>
      <div class="testimonial-cards">
        <div class="card">
          <img src="images/farmer1.jpg" alt="Farmer 1">
          <h3>John Doe</h3>
          <p>"The crop price predictions and recommendations from this platform have been invaluable for my farming operations. It has helped me make informed decisions and increase my profitability."</p>
        </div>
        <div class="card">
          <img src="images/farmer2.jpg" alt="Farmer 2">
          <h3>Jane Smith</h3>
          <p>"I've been using this platform for the past year, and it has truly revolutionized the way I approach farming. The sustainable farming practices and market insights have been game-changers."</p>
        </div>
        <div class="card">
          <img src="images/farmer3.jpg" alt="Farmer 3">
          <h3>Michael Johnson</h3>
          <p>"As a small-scale farmer, this platform has provided me with the tools and knowledge I need to compete in the market. The user-friendly interface and personalized recommendations have made a significant impact on my operations."</p>
        </div>
      </div>
    </section>

    <section id="about" class="about">
      <h2>About Us</h2>
      <p>At Crop Price Prediction, our mission is to empower farmers with advanced technology and data-driven insights. We leverage machine learning algorithms and historical data to provide accurate crop price predictions, enabling farmers to make informed decisions and maximize their profits.</p>
      <p>Our platform also offers crop recommendations tailored to your region's climate, soil conditions, and market demand. We aim to promote sustainable farming practices and support the agricultural community in adopting modern technologies.</p>
      <p>With a team of experienced agronomists, data scientists, and technology experts, we are committed to delivering innovative solutions that drive the agricultural industry forward. Our goal is to help farmers achieve long-term success while contributing to a more sustainable and prosperous future for our planet.</p>
      <a href="#" class="btn">Learn More</a>
    </section>
    
    
  
    
  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
  </main>

  <script src="predict.js"></script>


  

  

      // Get the canvas elements
const priceChartCtx = document.getElementById('priceChart').getContext('2d');
const priceComparisonChartCtx = document.getElementById('priceComparisonChart').getContext('2d');
const monthSelect = document.getElementById('month');
const cropSelect = document.getElementById('crop');
const predictBtn = document.getElementById('predict-btn');
const predictionResult = document.getElementById('prediction-result');

// Sample data for price prediction


// Get the necessary elements
predictBtn.addEventListener('click', function () {
    console.log('Button clicked');
    // Rest of the code...
});

// Sample data for price prediction (you can replace this with your actual data)
const priceData = {
    wheat: {
        january: 120,
        february: 115,
        // Add more months and prices
    },
    rice: {
        january: 80,
        february: 85,
        // Add more months and prices
    },
    maize: {
        january: 95,
        february: 90,
        // Add more months and prices
    },
    soybean: {
        january: 110,
        february: 105,
        // Add more months and prices
    },
    cotton: {
        january: 75,
        february: 70,
        // Add more months and prices
    }
};

// Event listener for the "Predict Price" button
predictBtn.addEventListener('click', function () {

    const selectedMonth = monthSelect.value;
    const selectedCrop = cropSelect.value;


    // Check if the selected crop and month have data
    if (priceData[selectedCrop] && priceData[selectedCrop][selectedMonth]) {
        const predictedPrice = priceData[selectedCrop][selectedMonth];
        document.getElementById("predictionResult").innerText = Predicted price for ${selectedCrop} in ${selectedMonth}: $${predictedPrice};
    } else {
        document.getElementById("predictionResult").innerText = Not Predicted;

    }
});
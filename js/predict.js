const predictBtn = document.getElementById('predict-btn');
    const predictionResult = document.getElementById('predictionResult');
    const monthSelect = document.getElementById('month');
    const cropSelect = document.getElementById('crop');

    // Function to fetch data from CSV
    function fetchDataFromCSV() {
      Papa.parse('dataset.csv', {
        download: true,
        header: true,
        complete: function(results) {
          handleData(results.data);
        },
        error: function(error) {
          console.log('Error fetching data:', error);
          predictionResult.textContent = 'Error fetching data. Please try again later.';
        }
      });
    }

    // Function to handle fetched data
    function handleData(data) {
      // Convert fetched data into a usable format
      const formattedData = {};
      data.forEach(entry => {
        const month = entry['Month'];
        const crop = entry['Crop'];
        const price = parseFloat(entry['Price']);
        if (!formattedData[crop]) {
          formattedData[crop] = {};
        }
        formattedData[crop][month] = price;
      });

      // Event listener for the "Predict Price" button
      predictBtn.addEventListener('click', function() {
        const selectedMonth = monthSelect.value;
        const selectedCrop = cropSelect.value;

        // Check if the selected crop and month have data
        if (formattedData[selectedCrop] && formattedData[selectedCrop][selectedMonth]) {
          const predictedPrice = formattedData[selectedCrop][selectedMonth];
          predictionResult.innerText = `Predicted price for ${selectedCrop} in ${selectedMonth}: $${predictedPrice}`;
        } else {
          predictionResult.innerText = 'No data available for the selected crop and month.';
        }
      });
    }

    // Fetch data from CSV when the page loads
    window.addEventListener('DOMContentLoaded', fetchDataFromCSV);
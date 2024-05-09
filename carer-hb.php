<!DOCTYPE html>
<html>
<head>
  <title>HB LOCAL WebServer</title>
  <script>
  // List of pre-generated random values for BPM and SpO2
var bpmValues = [76, 77, 78, 79, 80, 80, 50, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80,80, 80,81, 82, 83, 84, 85, 86, 87, 88, 98, 99, 100,120]; // Example BPM values
var spo2Values = [94, 96, 95,  95, 95, 95, 95, 50, 95, 95, 95, 95, 95,  95, 98, 112]; // Example SpO2 values

// Function to select a random value from a given array
function selectRandomValue(values) {
  return values[Math.floor(Math.random() * values.length)];
}


function updateValues() {
  // Select random values for BPM and SpO2 from the pre-generated lists
  var bpmValue = parseInt(document.getElementById("BPM").innerText);
  var spo2Value = parseInt(document.getElementById("SpO2").innerText);
  
  if (bpmValue < 60 ) {
      alert('Warning: BPM value is not within the normal range (60-100).'+" BPM = [" + bpmValue + "] Please check the patient\'s condition. (Bradycardia)");
      }
  if (bpmValue > 100) {
      alert('Warning: BPM value is not within the normal range (60-100).'+" BPM = [" + bpmValue + "] Please check the patient\'s condition. (Tachycardia)");
      }
  if (spo2Value < 90) {
      alert('Warning: SpO2 value is not within the normal range (90-100).'+" SpO2 = [" + spo2Value + "] Please check the patient\'s condition. (Life-threatening)");
      }
  if (spo2Value > 100) {
      alert('Warning: SpO2 value is not within the normal range (90-100).'+" SpO2 = [" + spo2Value + "] Please check the patient\'s condition. (Excessive oxygen in the bloodstream)");
      }

      
  // updating BPM and SpO2 values
  var bpmValue = selectRandomValue(bpmValues);
  var spo2Value = selectRandomValue(spo2Values);

  // Update the HTML elements with the selected values
  document.getElementById("BPM").innerText = bpmValue;
  document.getElementById("SpO2").innerText = spo2Value;

  

  
}

// Function to run every second
setInterval(function() {
  // Update BPM and SpO2 values
  updateValues();
}, 1000);

  
  </script>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'>
  <link rel='stylesheet' type='text/css' href='styles.css'>
  <style>
    body {
  background-color: #fff;
  font-family: sans-serif;
  color: #333333;
  font-size: 14px;
  box-sizing: border-box;
}

#page {
  margin: 20px;
  background-color: #fff;
}

.container {
  height: inherit;
  padding-bottom: 20px;
}

.header {
  padding: 20px;
}

.header h1 {
  padding-bottom: 0.3em;
  color: #008080;
  font-size: 45px;
  font-weight: bold;
  font-family: Garmond, 'sans-serif';
  text-align: center;
}

h2 {
  padding-bottom: 0.2em;
  border-bottom: 1px solid #eee;
  margin: 2px;
  text-align: left;
}

.header h3 {
  font-weight: bold;
  font-family: Arial, 'sans-serif';
  font-size: 17px;
  color: #b6b6b6;
  text-align: center;
}

.box-full {
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 1em;
  box-shadow: 1px 7px 7px 1px rgba(0, 0, 0, 0.4);
  background: #fff;
  margin: 20px;
  width: 300px;
}

@media (max-width: 494px) {
  #page {
    width: inherit;
    margin: 5px auto;
  }
  #content {
    padding: 1px;
  }
  .box-full {
    margin: 8px 8px 12px 8px;
    padding: 10px;
    width: inherit;
    float: none;
  }
}

@media (min-width: 494px) and (max-width: 980px) {
  #page {
    width: 465px;
    margin: 0 auto;
  }
  .box-full {
    width: 380px;
  }
}

@media (min-width: 980px) {
  #page {
    width: 930px;
    margin: auto;
  }
}

.sensor {
  margin: 12px 0px;
  font-size: 2.5rem;
}

.sensor-labels {
  font-size: 1rem;
  vertical-align: middle;
  padding-bottom: 15px;
}

.units {
  font-size: 1.2rem;
}

hr {
  height: 1px;
  color: #eee;
  background-color: #eee;
  border: none;
}

  </style>
  
</head>
<body>
  <div id='page'>
    <div class='header'>
      <h1>Patient's Health</h1>
      <div style="text-align: center;">
      <a href='https://hcc-online.site' style="display: inline-block; padding: 10px 20px; background-color: #0059b3; color: white; text-decoration: none; font-weight: bold; border-radius: 5px;">HOMEPAGE</a>
    </div>
    </div>
    <div id='content' align='center'>
      <div class='box-full' align='left'>
        <h2>Sensor Readings</h2>
        <div class='sensors-container'>
          <p class='sensor'>
            <i class='fas fa-heartbeat' style='color:#cc3300'></i>
            <span class='sensor-labels'> Heart Rate </span>
            <p id="BPM">0</p>
            <sup class='units' style="font-weight: bold;">BPM</sup>
          </p>
          <hr>
          <p class='sensor'>
            <i class='fas fa-burn' style='color:#f7347a'></i>
            <span class='sensor-labels'> Sp02 </span>
            <p id ="SpO2">0<p>
            <sup class='units' style="font-weight: bold;">%</sup>
          </p>
        </div>
        <div style="text-align: center;">
        <a href='https://hcc-online.site/CLS.mp4' style="display: inline-block; padding: 10px 20px; background-color: #0059b3; color: white; text-decoration: none; font-weight: bold; border-radius: 5px;">Video Arduino BPM & Sp02 Monitor</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

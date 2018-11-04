
function getWeatherAtPosition(latitude, longitude) {

  const API_KEY = "2af9113262318bb5faa08059fdd6f08e";

  $.ajax({
    url: "https://api.openweathermap.org/data/2.5/weather",
    data: {
      lat: latitude,
      lon: longitude,
      appid: API_KEY,
      units: 'metric'
    },
    dataType: 'json',
    success: function (resp) {
      var weatherInfo = resp.weather[0].description;
      var temp = resp.main.temp;
      var city = resp.name;
      console.log(resp);
      $("#site-header-weather").html(city + " " + temp + "&deg;C");
    },
    error: function (err) {
      $("#site-header-weather").html("");
      console.log('something went wrong');
      console.log(err);
    }
  });
}

function findMyPositionAndFetchWeather() {

  if (!navigator.geolocation) {
    alert("<p>Geolocation is not supported by your browser</p>");
    return;
  }

  function success(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    
    getWeatherAtPosition(latitude, longitude);  
  }

  function error() {
    prompt("Kan ikke finde postion! Har du godkendt + slået GPS til?", "");
  }

  navigator.geolocation.getCurrentPosition(success, error); //success + error er callback...
} //findMyPositionAndFetchWeather


findMyPositionAndFetchWeather();
console.log("site-header.js was executed");





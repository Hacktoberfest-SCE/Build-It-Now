var name = document.querySelector(".name-city");
var temp = document.querySelector(".temp-city");
var button = document.querySelector(".submit-button");
var inputvalue = document.querySelector(".inputvalue");
var wind = document.querySelector(".wind-speed");
var desc = document.querySelector(".desc-city");
var humidity = document.querySelector(".humidity");
var sealevel = document.querySelector(".sealevel");
var namecity = document.querySelector(".namecity");
var countrycode = document.querySelector(".countrycode");
var weatherimg = document.querySelector(".apicloudicon");
var adviceforus = document.querySelector(".advice");

button.addEventListener("click", function (name) {
  fetch(
    "https://api.openweathermap.org/data/2.5/weather?q=" +
      inputvalue.value +
      "&appid=d61ad641b0ba38a0d9cd7b85f16170dc&units=metric"
  )
    .then((response) => response.json())
    .then((data) => {
      var tempValue = data["main"]["temp"];
      var nameValue = data["name"];
      var descValue = data["weather"][0]["description"];
      var windValue = data["wind"]["speed"];
      var humidityValue = data["main"]["humidity"];
      var sealevelValue = data["main"]["sea_level"];
      var countrycodeValue = data["sys"]["country"];
      var cityvalue = data["name"];
      var id = data["weather"][0]["id"];

      name.innerHTML = nameValue;
      temp.innerHTML = tempValue + "°C";
      wind.innerHTML = windValue + "m/s";
      desc.innerHTML = descValue;
      humidity.innerHTML = humidityValue + "%";
      sealevel.innerHTML = sealevelValue + "m";
      countrycode.innerHTML = countrycodeValue;
      namecity.innerHTML = cityvalue;

      if (id == 800) {
        weatherimg.src = "/Assets/weather_icons/clear.svg";
      } else if (id >= 200 && id <= 232) {
        weatherimg.src = "/Assets/weather_icons/storm.svg";
      } else if (id >= 600 && id <= 622) {
        weatherimg.src = "/Assets/weather_icons/snow.svg";
      } else if (id >= 701 && id <= 781) {
        weatherimg.src = "/Assets/weather_icons/haze.svg";
      } else if (id >= 801 && id <= 804) {
        weatherimg.src = "/Assets/weather_icons/cloud.svg";
      } else if ((id >= 500 && id <= 531) || (id >= 300 && id <= 321)) {
        weatherimg.src = "/Assets/weather_icons/rain.svg";
      }

      if (tempValue < 0) {
        adviceforus.innerHTML = "It's extreme cold outside, stay inside home.";
      } else if (tempValue > 0 && tempValue < 15) {
        adviceforus.innerHTML = "It's cold outside, you should wear a jacket.";
      } else if (tempValue > 15 && tempValue < 20) {
        adviceforus.innerHTML =
          "It's a bit chilly outside, can enjoy outside activities.";
      } else if (tempValue > 20 && tempValue < 25) {
        adviceforus.innerHTML = "It's a normal day outside, enjoy your day.";
      } else if (tempValue > 25 && tempValue < 30) {
        adviceforus.innerHTML = "It's a bit hot outside, apply your sunscream.";
      } else if (tempValue > 30 && tempValue < 40) {
        adviceforus.innerHTML = "It's a bit hot outside,Wear full clothes.";
      } else if (tempValue > 40 && tempValue < 50) {
        adviceforus.innerHTML =
          "It's extremely hot outside,Wear full clothes and stay hydrated.";
      } else if (tempValue > 50) {
        adviceforus.innerHTML = "It's extremely hot outside";
      }
    })

    .catch((err) => alert("Wrong city name!"));
});

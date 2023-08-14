document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("places-form");
    var resultDiv = document.getElementById("result1");
  
    form.addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent form submission
  
      var selectedPlaces = [];
      var checkboxes = document.querySelectorAll("input[name='place']:checked");
  
      checkboxes.forEach(function (checkbox) {
        selectedPlaces.push(checkbox.value);
      });
  
      var resultMessage = "You have selected: " + selectedPlaces.join(", ");
  
      resultDiv.textContent = resultMessage;
    });
  });
  
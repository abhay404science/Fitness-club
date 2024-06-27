// Initialize and add the map
function initMap() {
    // The location of Uluru
    const uluru = { lat: 28.6923, lng: 77.0916 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 10,
      center: uluru,
    });
    const contentString = 'Fitness Club';
    // The marker, positioned at Uluru
    const infowindow = new google.maps.InfoWindow({
        content: contentString,
        ariaLabel: "Uluru",
      });
      const marker = new google.maps.Marker({
        position: uluru,
        map,
        title: "FitnessCLub(mangolpuri)",
      });
    
      marker.addListener("mouseover", () => {
        infowindow.open({
          anchor: marker,
          map,
        }); })
  }
 
  window.initMap = initMap;

  function updateFileName() {
    const fileInput = document.getElementById("img");
    const fileLabel = document.getElementById("fileLabel");
  
    if (fileInput.files.length > 0) {
      fileLabel.innerText = fileInput.files[0].name;
    } else {
      fileLabel.innerText = "Choose file";
    }
  }
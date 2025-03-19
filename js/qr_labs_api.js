//

// let value = params.some_key; // "some_value"
// var sampleID = "2310APO3016.13905";
//

// API CALL FUNCTION

async function fetchAPI() {
  //
  const params = new Proxy(new URLSearchParams(window.location.search), {
    get: (searchParams, prop) => searchParams.get(prop),
  });
  console.log(params.id, params.b, params.s);

  // var sampleIDQuery = window.location.search;
  // if (sampleIDQuery.charAt(0) === "?") {
  //   sampleIDQuery = sampleIDQuery.slice(1);
  // }
  // sampleIDQuery = sampleIDQuery.replace("_", ".");

  await fetch(
    `https://api.confidentcannabis.com/v0/clients/sample/${params.id}`,
    {
      headers: {
        "X-ConfidentCannabis-Timestamp": "1474507118.77095",
        "X-ConfidentCannabis-APIKey": "ffa81c7e-1a56-497b-8a7f-ef281c6b588d",
      },
    }
  )
    .then((res) => res.json())
    .then((data) => {
      handleData(data, params);
      document.getElementById("qr_labs-api-js-extra").remove();
    })
    .catch((e) => {
      console.log(e);
      document.getElementById("qr_labs-api-js-extra").remove();
    });
}

fetchAPI();

// HANDLE DISPLAYING DATA FUNCTION

//
function handleData(data, params) {
  // VARIABLES
  const strainName = document.querySelector(".strains-name");
  const cannabinoids = document.querySelector(".cannabinoids");
  const terpenes = document.querySelector(".terpenes");
  const brand = document.querySelector(".brand");
  const batchID = document.querySelector(".batch-id");
  const harvestDate = document.querySelector(".harvest-date");
  const manufactureDate = document.querySelector(".manufacture-date");
  const extractionMethod = document.querySelector(".extraction-method");
  const downloadBtn = document.querySelector(".download-btn");
  const iframePDF = document.getElementById("pdf_iframe");
  // HIDE THESE IF NOT EXTRACT
  if (data.sample.production_method_name === "") {
    extractionMethod.parentElement.classList.add("hide-content");
    manufactureDate.parentElement.classList.add("hide-content");
  } else {
    extractionMethod.innerText = data.sample.production_method_name;
  }
  // DECODE STRING TO GET HARVEST/PRODUCTION DATES
  const decodedBatch = decodeBatchID(data.sample.batch_id);
  // console.log(decodedBatch);
  // SET DATA INTO ELEMENTS FOR DISPLAY
  strainName.innerText = data.sample.strain_name;
  cannabinoids.innerText =
    data.sample.lab_data.cannabinoid_total.toFixed(2) + "%";
  terpenes.innerText = data.sample.lab_data.terpene_total.toFixed(2) + "%";
  batchID.innerText = data.sample.batch_id;

  iframePDF.setAttribute("src", data.sample.coa.url);
  downloadBtn.setAttribute("href", data.sample.coa.url);
  harvestDate.innerText = decodedBatch.harvestDate;
  manufactureDate.innerText = decodedBatch.manufactureDate;
  //
  switch (params.b) {
    case "a":
      brand.innerText = "Aeriz";
      break;
    case "d":
      brand.innerText = "Daze Off";
      break;
    case "9":
      brand.innerText = "93 Boyz";
      break;
    case "f":
      brand.innerText = "Fig Farms";
      break;
    case "u":
      brand.innerText = "UpNorth Humboldt";
      break;
  }
}

//

function decodeBatchID(batchID) {
  let isConcentrate;

  // set formatted extraction date to null in case the batchID is not an extract
  let formattedXD = null;

  // Check if batchID contains Extraction/manufacture date
  if (batchID.indexOf("XD") !== -1) {
    isConcentrate = true;
  } else {
    isConcentrate = false;
  }

  // Pull first 8 characters of batchID string and separate y/m/d
  var unformattedHD = batchID.slice(0, 8);
  var yearHD = unformattedHD.substring(0, 4);
  var monthHD = unformattedHD.substring(4, 6);
  var dayHD = unformattedHD.substring(6, 8);
  // Put deconstructed date back together
  var formattedHD = monthHD + "/" + dayHD + "/" + yearHD;

  //If this batch is a concentrate, pull last 8 characters of string and separate y/m/d
  if (isConcentrate) {
    var unformattedXD = batchID.slice(-8);
    var yearXD = unformattedXD.substring(0, 4);
    var monthXD = unformattedXD.substring(4, 6);
    var dayXD = unformattedXD.substring(6, 8);
    // Put deconstructed date back together
    formattedXD = monthXD + "/" + dayXD + "/" + yearXD;
  }

  //Return harvest date and manufacture date
  return {
    harvestDate: formattedHD,
    manufactureDate: formattedXD,
  };
}

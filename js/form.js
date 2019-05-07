function lookupZip(str) {
  if (str.length == 0) {
    document.getElementById("state").value = "first";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
        if (obj.city !== "null" && obj.state !== "null") {
          document.getElementById("city").value = obj.city;
          document.getElementById("state").value = obj.state;
        } else {
          document.getElementById("city").value = " ";
          document.getElementById("state").value = "first";
        }
      }
    };
    xmlhttp.open("GET", "getzip.php?zip=" + str.srcElement.value, true);
    xmlhttp.send();
  }
}

function lookupTaxRate(str) {
  if (str.length == 0) {
    var price = document.getElementById("Rprice").innerHTML;
    var tax = document.getElementById("Rtax").innerHTML;

    var priceandtax = parseFloat(price) * parseFloat(tax);

    document.getElementById("Rtotal").innerHTML =
      parseFloat(price) + priceandtax;

    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);
        if (obj.tax !== "-1") {
          document.getElementById("Rtax").innerHTML = obj.tax;

          var price = document.getElementById("Rprice").innerHTML;
          var priceandtax = parseFloat(price) * parseFloat(obj.tax);

          document.getElementById("Rtotal").innerHTML =
            parseFloat(price) + priceandtax;
          document.getElementById("tax").value =
            parseFloat(price) + priceandtax;
          document.getElementById("cost").value =
            parseFloat(price) + priceandtax;
        } else {
          document.getElementById("Rtax").innerHTML = 0;

          var price = document.getElementById("Rprice").innerHTML;

          var priceandtax = parseFloat(price) * 0;

          document.getElementById("Rtotal").innerHTML =
            parseFloat(price) + priceandtax;
          document.getElementById("tax").value =
            parseFloat(price) + priceandtax;
          document.getElementById("cost").value =
            parseFloat(price) + priceandtax;
        }
      }
    };
    xmlhttp.open("GET", "gettaxrate.php?zip=" + str.srcElement.value, true);
    xmlhttp.send();
  }
}

function getzipInfo(zip) {
  lookupTaxRate(zip);
  lookupZip(zip);
}

const input = document.getElementById("zip");
input.addEventListener("input", getzipInfo);

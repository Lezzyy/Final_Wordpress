//Chrono

var seconds = 0;
var el = document.getElementById('chrono');

function incrementSeconds() {
    seconds += 1;
    el.innerText = "Vous êtes sur la page depuis " + seconds + " secondes.";
}

var cancel = setInterval(incrementSeconds, 1000);

//Horloge
window.onload=function() {
  horloge('div_horloge');
};

function horloge(el) {
  if(typeof el=="string") { el = document.getElementById(el); }
  function actualiser() {
    var date = new Date();
    var str = date.getHours();
    str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
    str += ':'+(date.getSeconds()<10?'0':'')+date.getSeconds();
    el.innerHTML = "Il est : " + str;
  }
  actualiser();
  setInterval(actualiser,1000);
}

//Affichage balise alt
function affi_alt () {
  var x = document.getElementById('ordinateur').attributes[1].value;
  document.getElementById('demo').innerHTML=x;
  }


//Table intéractive
function openRs(evt, rsName) {
  var i, tabcontent, tablinks;

  tabcontent=
document.getElementByClassName("tabcontent");
  for (i=0; i < tabcontent.length; i++) {
    tabcontent [i].style.display = "none";
  }

  tablinks =
document.getElementByClassName("tablinks");
  for (i=0; i<tablinks.length; i++) {
    tablinks [i].className.replace("active", "");
  }

  document.getElementById(rsName).style.display="block";
  evt.currentTarget.className += "active";
}

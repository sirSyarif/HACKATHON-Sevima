// PRELOADER !!
var hide;

function loader() {
  hide = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("preloader").style.display = "none";
  document.getElementById("page").style.display = "block";
}

// NAVBAR !!
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "10px 10px";
    document.getElementById("logo").style.fontSize = "40px";
  } else {
    document.getElementById("navbar").style.padding = "15px 10px";
    document.getElementById("logo").style.fontSize = "40px";
  }
}

// INI API NYA
        getData();
        getDataGlobal();
        
        async function getData() {
            const response = await fetch("https://covid19.mathdro.id/api/countries/Indonesia");
            const data = await response.json();
            const { confirmed, recovered, deaths } = data;
            
            document.getElementById("positif").innerHTML = confirmed.value;
            document.getElementById("sembuh").innerHTML = recovered.value;
            document.getElementById("meninggal").innerHTML = deaths.value;
        }

        async function getDataGlobal() {
            const response = await fetch("https://covid19.mathdro.id/api");
            const data = await response.json();
            const { confirmed, recovered, deaths } = data;
            
            document.getElementById("positifGlobal").innerHTML = confirmed.value;
            document.getElementById("sembuhGlobal").innerHTML = recovered.value;
            document.getElementById("meninggalGlobal").innerHTML = deaths.value;
        }
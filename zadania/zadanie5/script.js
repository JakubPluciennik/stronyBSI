function sprawdzImie()
{
  var spr = new RegExp("^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{2,49}$");
  var imie = document.getElementById('imie').value;
  var imieerr = document.getElementById('imieerr');
  var imiei = document.getElementById('imiei');
  if(spr.test(imie))
  {
    imieerr.innerHTML = "&#x2713;";
    imieerr.style.color = "green";
    imiei.style.fontWeight = "normal";
  }
  else
  {
      imieerr.innerHTML = "*";
      imieerr.style.color = "red";
      imiei.style.fontWeight = "bold";
  }
  return spr.test(imie);
}

function sprawdzNazwisko()
{
  var spr = new RegExp("^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{2,}$|^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{2,}-[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{2,}$");
  var nazwisko = document.getElementById('nazwisko').value;
  var nazwiskoerr = document.getElementById('nazwiskoerr');
  var nazwiskoi = document.getElementById('nazwiskoi');

  if(spr.test(nazwisko) && nazwisko.length <=150)
  {
    nazwiskoerr.innerHTML = "&#x2713;";
    nazwiskoerr.style.color = "green";
    nazwiskoi.style.fontWeight = "normal";
  }
  else
  {
      nazwiskoerr.innerHTML = "*";
      nazwiskoerr.style.color = "red";
      nazwiskoi.style.fontWeight = "bold";
  }
  return (spr.test(nazwisko) && nazwisko.length <=150);
}

function sprawdz(element)
{
  var spr = new RegExp("^[A-ZĄĆĘŁŃÓŚŹŻ][\\wąćęłńóśźż -]{2,70}$");
  var obj = element.value;
  var objerr = document.getElementById(element.id.concat("err"));
  if(spr.test(obj))
  {
    objerr.innerHTML = "&#x2713;";
    objerr.style.color = "green";
  }
  else
  {
    objerr.innerHTML = "*";
    objerr.style.color = "red";
  }
  return spr.test(obj);
}

function sprawdzHaslo()
{
  var sprDuze = new RegExp("[ĄĆĘŁŃÓŚŹŻA-Z]");
  var sprMale = new RegExp("[ąćęłńóśźża-z]");
  var sprCyfry = new RegExp("\\d");
  var sprSpecjalne = new RegExp("[!@#%&_=:;,/\.\+\?\*\^\$\(\)\{\}\|\\ \-]");
  var haslo = document.getElementById('haslo').value;
  var hasloerr = document.getElementById("hasloerr");
  var hasloi = document.getElementById('hasloi');
  var warunek = sprDuze.test(haslo) && sprMale.test(haslo) && sprCyfry.test(haslo) && sprSpecjalne.test(haslo) && haslo.length >=8 && haslo.length <=100;
  if(warunek)
  {
    hasloerr.innerHTML = "&#x2713;";
    hasloerr.style.color = "green";
    hasloi.style.fontWeight = "normal";
  }
  else
  {
      hasloerr.innerHTML = "*";
      hasloerr.style.color = "red";
      hasloi.style.fontWeight = "bold";
  }
  return warunek;
}

function sprawdzKodP()
{
  var spr = new RegExp("^\\d{2}-\\d{3}$");
  var kodp = document.getElementById('kodp').value;
  var kodperr = document.getElementById('kodperr');
  var kodpi = document.getElementById('kodpi');

  if(spr.test(kodp))
  {
    kodperr.innerHTML = "&#x2713;";
    kodperr.style.color = "green";
    kodpi.style.fontWeight = "normal";
  }
  else
  {
      kodperr.innerHTML = "*";
      kodperr.style.color = "red";
      kodpi.style.fontWeight = "bold";
  }
  return spr.test(kodp);
}

function sprawdzTelefon()
{
  var spr = new RegExp("^\\+\\d{2} \\d{3}-\\d{3}-\\d{3}$|^\\+\\d{2} \\d{9}$");
  var telefon = document.getElementById('telefon').value;
  var telefonerr = document.getElementById('telefonerr');
  var telefoni = document.getElementById('telefoni');
  if(spr.test(telefon))
  {
    telefonerr.innerHTML = "&#x2713;";
    telefonerr.style.color = "green";
    telefoni.style.fontWeight = "normal";
  }
  else
  {
      telefonerr.innerHTML = "*";
      telefonerr.style.color = "red";
      telefoni.style.fontWeight = "bold";
  }
  return spr.test(telefon)
}

function sprawdzUwagi()
{
  var uwagi = document.getElementById('uwagi').value;
  var uwagirr = document.getElementById('uwagierr');
  var uwagii = document.getElementById('uwagii');
  if (uwagi.length < 1000)
  {
    uwagierr.innerHTML = "&#x2713;";
    uwagierr.style.color = "green";
    uwagii.style.fontWeight = "normal";
  }
  else
  {
    uwagierr.innerHTML = "*";
    uwagierr.style.color = "red";
    uwagii.style.fontWeight = "bold";
  }
  return (uwagi.length < 1000);
}

function nrDod(element)
{
  var obj = element.value;
  var objerr = document.getElementById(element.id.concat("err"));
  if(element.value > 0 || (element.value == "" && element.id == 'nrmieszkania'))
  {
    objerr.innerHTML = "&#x2713;";
    objerr.style.color = "green";
  }
  else
  {
    objerr.innerHTML = "*";
    objerr.style.color = "red";
  }
  return (element.value > 0 || (element.value == "" && element.id == 'nrmieszkania'))
}

function sprawdzWszystko(element)
{
  if(sprawdzImie() && sprawdzNazwisko() && sprawdz(document.getElementById('ulica'))
  && sprawdz(document.getElementById('miasto')) && nrDod(document.getElementById('nrdom'))
  && nrDod(document.getElementById('nrmieszkania')) && sprawdzKodP() && sprawdzUwagi()
  && sprawdzTelefon() && sprawdzHaslo())
  {
    element.style.backgroundColor = "#8fffbf";
  }
  else
  {
    element.style.backgroundColor = "#ff7070";
    sprawdzImie()
    sprawdzNazwisko()
    sprawdz(document.getElementById('ulica'))
    sprawdz(document.getElementById('miasto'))
    nrDod(document.getElementById('nrdom'))
    nrDod(document.getElementById('nrmieszkania'))
    sprawdzKodP()
    sprawdzUwagi()
    sprawdzTelefon()
    sprawdzHaslo()
  }
  return (sprawdzImie() && sprawdzNazwisko() && sprawdz(document.getElementById('ulica'))
  && sprawdz(document.getElementById('miasto')) && nrDod(document.getElementById('nrdom'))
  && nrDod(document.getElementById('nrmieszkania')) && sprawdzKodP() && sprawdzUwagi()
  && sprawdzTelefon() && sprawdzHaslo());
}

function sprawdzWyslij()
{
  if(sprawdzWszystko(document.getElementById("sprWys")))
  {
    document.forms[0].submit();
  }
  else
  {
    sprawdzImie()
    sprawdzNazwisko()
    sprawdz(document.getElementById('ulica'))
    sprawdz(document.getElementById('miasto'))
    nrDod(document.getElementById('nrdom'))
    nrDod(document.getElementById('nrmieszkania'))
    sprawdzKodP()
    sprawdzUwagi()
    sprawdzTelefon()
    sprawdzHaslo()
  }
}

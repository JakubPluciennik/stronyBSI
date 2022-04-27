function czysc()
{
  document.getElementById("rownanie").value = "";
}
function wpisz(sender)
{
  tekst = document.getElementById("rownanie");
  tekst.value += sender.value;
}
function wykonaj()
{
  wynik = document.getElementById("rownanie").value;
  if(wynik != "")
  {
    document.getElementById("rownanie").value = eval(wynik);
  }
}

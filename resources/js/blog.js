var editId;
var xmlhttp;
function spustenie() {
    var spustenie = document.getElementsByClassName("model");
    spustenie[0].style.display = "block";


}
function ukoncit() {
    var spustenie = document.getElementsByClassName("model");
    spustenie[0].style.display = "none";
}
function spustenieedit(id,titulok,meno,fileload,tag,typ,text) {

    var a = titulok;

    var spustenie = document.getElementsByClassName("model");
    spustenie[0].style.display = "block";
    document.getElementById("atitulok").value = titulok
   document.getElementById("meno").value = meno;
    document.getElementById("idcka").value = id;
  document.getElementById("tag").value = tag;
   document.getElementById("typ").value = typ;
   document.getElementById("subject").value = text;

}
function vymazat(id) {
    var r = confirm("Chceš naozaj vymazať");
    if (!r) {
        document.getElementById(id).href = "adminlog/delete.php?id=<?php echo $novy->getId();?>";
    }
}

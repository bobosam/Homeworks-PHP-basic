var counter = 0;
function addLang() {
    var element = document.getElementsByClassName("clone1")[counter];
    var clone = element.cloneNode(true);
    pcSkills.appendChild(clone);
    counter++;
}
function removeElement(){
    if(counter != 0) {
        counter--;
        pcSkills.removeChild(document.getElementsByClassName("clone1")[counter + 1]);
    }
}
var langs = 0;
function addLangNormLang() {
    var element = document.getElementsByClassName("clone2")[langs];
    var clone = element.cloneNode(true);
    lang.appendChild(clone);
    langs++;
}
function remLangNormLang(){
    if(langs != 0) {
        langs--;
        lang.removeChild(document.getElementsByClassName("clone2")[langs + 1]);
    }
}
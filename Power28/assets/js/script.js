function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("total");
    if (checkBox.checked == true){
        text.style.display = "block";
        var somme= 1200 + 49;
        $("<p>" + somme + "€" + "</p>").appendTo('#total');
    } else {
        text.style.display = "none";
    }
}

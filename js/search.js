function myFunction() {
    var input, filter, figure, lii, h2, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    figure = document.getElementById("myfigure");
    lii = figure.getElementsByTagName("lii");
    for (i = 0; i < lii.length; i++) {
        h2 = lii[i].getElementsByTagName("h2")[0];
        txtValue = h2.textContent || h2.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            lii[i].style.display = "";
        } else {
            lii[i].style.display = "none";
        }
    }
}
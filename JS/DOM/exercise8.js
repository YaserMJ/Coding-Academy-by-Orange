function initGrid() {
    // collect colors in an array
    var colors = [];
    var range = ["00", "33", "66", "99", "cc", "ff"];

    for (var r = 0; r < range.length; r++) {
        for (var g = 0; g < range.length; g++) {
            for (var b = 0; b < range.length; b++) {
                colors.push("#" + range[r] + range[g] + range[b]);
            }
        }
    }
    var c = document.getElementById("colors");
    var s = document.getElementById("selected");

    for (i=0;i<colors.length;i++){

    //    c.append(document.createElement('div').classList.add("choice"));
    var ss = document.createElement('div');
   ss.className = "choice";
    ss.style.backgroundColor = colors[i];
    // ss.style.width='50px';
    // ss.style.height='50px';  

    c.appendChild(ss);
       


        
    }
}

window.onload = function () {
    initGrid();
}

window.onload = function() {
    let flip = document.getElementById("flip");
    
    flip.addEventListener("click", function() {

        if (document.getElementById("front").getAttribute("class") == "flipped") {

            document.getElementById("front").setAttribute("class", "flipped");
            document.getElementById("back").setAttribute("class", "visible");

        } else {
            document.getElementById("back").setAttribute("class", "flipped");
            document.getElementById("front").setAttribute("class", "visible");
        }
        
        
        
    });
};
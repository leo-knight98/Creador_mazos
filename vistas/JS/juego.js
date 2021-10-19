var i_max = document.getElementsByClassName("card-body").length;

for(var i = 0; i<i_max; i++) {
    
    var button = document.getElementById("flip"+i);
    

        if (button != null) {
            alert(button);
            button.addEventListener("click", function() {  
                var id_front = "front" + (i - 2);
                alert(i);
                var front = document.getElementById(id_front);
                alert(front);
            if (front.className == "visible") {
                front.setAttribute("class", "flipped");
                document.getElementById("back"+(i -2)).setAttribute("class", "visible");
            } else {
                document.getElementById("back"+(i -2)).setAttribute("class", "flipped");
                document.getElementById("front"+(i -2)).setAttribute("class", "visible");
            }
        });

    }

    
}




    
        
    
    
    
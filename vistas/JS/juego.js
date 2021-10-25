var i_max = document.getElementsByClassName("card-body").length;

const ids = [];
const nombres = []


for(var i = 0; i<i_max; i++) {
    var button = document.getElementById("flip"+i);
    if (button != null) {
        ids.push("flip"+i);
        nombres.push(i);
    }
}
    
function reply_click(clicked_id) {

    for (var i = 0; i < ids.length; i++) {
        if(clicked_id == ids[i]) {
            
            var img = document.getElementById("front"+nombres[i]).getAttribute("class");
            if(img == "visible") {
                document.getElementById("front"+nombres[i]).setAttribute("class", "flipped");
                document.getElementById("back"+nombres[i]).setAttribute("class", "visible");
                
            } else {
                document.getElementById("back"+nombres[i]).setAttribute("class", "flipped");
                document.getElementById("front"+nombres[i]).setAttribute("class", "visible");
            }   
        }
    }
}
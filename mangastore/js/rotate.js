function xtroll() {
    var body = window.document.getElementById("bodyIp");
        body.classList.add("troll");
        setTimeout(function exetroll() {
            body.classList.remove("troll");    
        }, 1000);

        /*if (body.classList != "bg-gray text-light bodyIP troll") {
            body.classList.add("troll");
        }else {
            body.classList.remove("troll");
        }*/
}

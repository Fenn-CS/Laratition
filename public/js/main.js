setTimeout(function () {
    $(" .spinner-wrapper").fadeToggle();
}, 500);


window.onload = function () {
    Particles.init({
        // normal options
        selector:'.background',
        maxParticles: 200,

        // options for breakpoints
        responsive: [
            {
                breakpoint: 768,
                options: {
                    maxParticles: 200,
                    color: '#fff',
                    connectParticles: true
                }
            }
        ]
    });
};

/*function currentTime() {*/
    setInterval(()=>{  var t = new Date();
        var h = t.getHours();
        var m = t.getMinutes();
        var s = t.getSeconds();
      
      
      document.getElementById("h").innerHTML = h;
      document.getElementById("m").innerText = " " + m;
      document.getElementById("s").innerText = " " + s;
        
      })
      /*
      }
      currentTime();*/
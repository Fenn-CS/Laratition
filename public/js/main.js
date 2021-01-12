$(function() {
    setTimeout(function() {
        $(" .spinner-wrapper").fadeToggle();
    }, 500);


    window.onload = function() {
        Particles.init({
            // normal options
            selector: '.background',
            maxParticles: 200,

            // options for breakpoints
            responsive: [{
                breakpoint: 768,
                options: {
                    maxParticles: 200,
                    color: '#fff',
                    connectParticles: true
                }
            }]
        });
    };

});
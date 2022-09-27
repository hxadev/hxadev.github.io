import "particles.js/particles";

export const ParticlesManager = function() {
    const particles = window.particlesJS;
    return {
        init: function() {
            particles.load("particles-js", "particles.json", function() {
                console.log("Particles Js Initialized");
            });
        }
    };
};

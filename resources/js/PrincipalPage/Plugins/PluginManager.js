import { ConfigMenu } from "./ConfigMenu/ConfigMenu";
import { ParticlesManager } from "./Particles/ParticlesManager";
import { Carousel } from "./Carousel/Carousel";
const Aos = require("aos");
const lozad = require("lozad");

export const PluginManager = function() {
    const particles = ParticlesManager();
    const configMenu = ConfigMenu();
    const carousel = Carousel();
    const observer = lozad(".lozad");
    return {
        init: function() {
            particles.init();
            configMenu.init();
            carousel.init();
            Aos.init();
            observer.observe();
        }
    };
};

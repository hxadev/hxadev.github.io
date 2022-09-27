import { HeroManager } from "./Hero/HeroManager";
import { NavManager } from "./Nav/NavManager";
import { PluginManager } from "./Plugins/PluginManager";
import { LazyLoadObserver } from "./Utils/LazyLoadObserver";

export const PrincipalManager = function() {
    const hero = HeroManager();
    const nav = NavManager();
    const plugin = PluginManager();
    const lazyObserver = LazyLoadObserver();

    return {
        init: function() {
            hero.init();
            nav.init();
            plugin.init();
            lazyObserver.init();
        }
    };
};

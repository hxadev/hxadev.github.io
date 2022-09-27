import { Session } from "./Session";
export const SessionManager = function() {
    var instance;
    function create() {
        var session = new Session();
        return session;
    }
    return {
        newInstance: function() {
            if (!instance) {
                instance = create();
            }
            return instance;
        }
    };
};

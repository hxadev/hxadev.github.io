import { Cookie } from "./Cookie";

export const CookieManager = function() {
    return {
        newInstance: function() {
            return Cookie();
        }
    };
};

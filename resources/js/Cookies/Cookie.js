export const Cookie = function() {
    return {
        saveCookie: function(name, value, exDays) {
            const date = new Date();
            date.setTime(date.getTime() + exDays * 24 * 60 * 60 * 1000);
            let expires = `expires=${date.toUTCString()}`;
            document.cookie = `${name}=${value};${expires};path=/`;
        },
        getCookie: function(name) {
            var name = name + "=";
            var ca = document.cookie.split(";");
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == " ") {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    };
};

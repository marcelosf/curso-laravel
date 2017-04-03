export default {

    set(key, value){

        window.localStorage[key] = value;
        return window.localStorage[key];

    },

    get(key, defaultValue = null){

        return window.localStorage[key] || defaultValue;

    },

    setObject(key, value){



    },

    getObject(key){


    },

    remove(key){

        window.localStorage.removeItem(key);

    }

}
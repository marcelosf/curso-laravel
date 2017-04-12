import config from '../config';

let localConfig = {

    test: 'teste'

};

const appConfig = Object.assign({}, config, localConfig);

export default appConfig;
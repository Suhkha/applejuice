import Tabby from 'tabbyjs';

const init = function () {
    if($('.tabs-section').length){
        new Tabby('[data-tabs]');
    }
};

export default init;
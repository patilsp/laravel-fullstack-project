window._ = require('lodash');
window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Explicitly expose DataTables to the global scope
window.DataTable = require('datatables.net-bs4');

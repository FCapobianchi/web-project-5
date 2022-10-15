var cpr = require('cpr');

cpr('node_modules/bootstrap/dist/', 'www/assets/bootstrap', {
    deleteFirst: false,
    overwrite: true,
    confirm: true
}, function(err, files) {});
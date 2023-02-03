var cpr = require('cpr');

cpr('node_modules/bootstrap-italia/dist/', 'www/assets/bootstrap-italia/', {
    deleteFirst: true,
    overwrite: true,
    confirm: true
}, function(err, files) {});

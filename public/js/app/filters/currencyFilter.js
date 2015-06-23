appAlexandra.filter("currencySol", function () {
    return function (value) {
        if (value != null) {
            return 'S/. ' + parseFloat(Math.round(value * 100) / 100).toFixed(2);
        }
    }
});
$(".product-items").on('click', function() {
    Swal.fire({
        title: 'Select Outage Tier',
        input: 'select',
        inputOptions: {
            '1': 'Tier 1',
            '2': 'Tier 2',
            '3': 'Tier 3'
        },
        inputPlaceholder: 'required',
        showCancelButton: true,
        inputValidator: function (value) {
            return new Promise(function (resolve, reject) {
                if (value !== '') {
                    resolve();
                } else {
                    resolve('You need to select a Tier');
                }
            });
        }
    }).then(function (result) {
        if (result.isConfirmed) {
            Swal.fire({
                icon: 'success',
                html: 'You selected: ' + result.value
            });
        }
    });
});

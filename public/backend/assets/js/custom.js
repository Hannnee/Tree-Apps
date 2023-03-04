    //convert input to rupiah
    function formatRupiah(angka, prefix) {
        let number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }


    let format_rupiah = document.querySelector('.format-rupiah');
    $('.format-rupiah').keyup(function (e) {
        format_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    function showLoading() {
        $.blockUI({
            message : '<div class="d-flex align-items-center justify-content-center"><em class="icon ni ni-loader me-2"></em><p>sedang mengambil data</p></div>',
            css		: {
                backgroundColor: '#fff',
                color: '#333',
                border: 'none',
                padding: 10,
            }
        });
    }

    function hideLoading() {
        $.unblockUI();
    }

    window.formatRupiah = formatRupiah;
    window.showLoading  = showLoading;
    window.hideLoading  = hideLoading;



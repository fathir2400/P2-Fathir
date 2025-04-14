(function () {
    "use strict";
    
    //delete Btn
    let invoicebtn = document.querySelectorAll(".invoice-btn");
    invoicebtn.forEach((eleBtn) => {
        eleBtn.onclick = () => {
            let invoice = eleBtn.closest(".invoice-list")
            invoice.remove();
        }
    });

    // Handle Print functionality
    window.onbeforeprint = () => {
        // Menyembunyikan elemen selain konten utama saat print
        document.querySelector('.navbar').style.display = 'none';
        document.querySelector('.sidebar').style.display = 'none';
        document.querySelector('.box-footer').style.display = 'none';
        document.querySelector('.ti-btn').style.display = 'none'; // Menyembunyikan tombol print
    };

    window.onafterprint = () => {
        // Menampilkan kembali elemen-elemen yang disembunyikan setelah print
        document.querySelector('.navbar').style.display = 'block';
        document.querySelector('.sidebar').style.display = 'block';
        document.querySelector('.box-footer').style.display = 'block';
        document.querySelector('.ti-btn').style.display = 'block'; // Menampilkan tombol print kembali
    };
})();



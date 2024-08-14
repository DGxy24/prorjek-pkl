// public/js/modal.js

document.addEventListener("DOMContentLoaded", function () {
    var pdfModal = document.getElementById("pdfModal");
    pdfModal.addEventListener("show.bs.modal", function (event) {
        var button = event.relatedTarget;
        var pdfSrc = "/img/cv.pdf"; // Gantilah dengan path dinamis jika ada
        var pdfFrame = document.getElementById("pdfFrame");
        var downloadPdfBtn = document.getElementById("downloadPdfBtn");

        // Set src untuk iframe dan href untuk tombol download
        pdfFrame.src = pdfSrc;
        downloadPdfBtn.href = pdfSrc;
    });

    pdfModal.addEventListener("hidden.bs.modal", function () {
        var pdfFrame = document.getElementById("pdfFrame");
        pdfFrame.src = ""; // Kosongkan src saat modal ditutup
    });
});

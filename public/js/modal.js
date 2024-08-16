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

document
    .getElementById("formFile")
    .addEventListener("change", function (event) {
        const fileInput = event.target;
        const viewPdfBtn = document.getElementById("viewPdfBtn");
        const pdfFrame1 = document.getElementById("pdfFrame");

        if (fileInput.files.length > 0) {
            const fileUrl = URL.createObjectURL(fileInput.files[0]);
            pdfFrame1.src = fileUrl;
            viewPdfBtn.style.display = "inline-block";
        } else {
            viewPdfBtn.style.display = "none";
        }
    });

document.getElementById("viewPdfBtn").addEventListener("click", function (e) {
    e.preventDefault(); // Prevent default behavior that might be closing the modal
});

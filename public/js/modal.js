// public/js/modal.js



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

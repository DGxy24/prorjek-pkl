// bar chart bidang
var ctx = document.getElementById("barchartBidang").getContext("2d");
var barchartBidang = new Chart(ctx, {
    type: "bar",
    data: {
        labels: [
            "Bidang 1",
            "Bidang 2",
            "Bidang 3",
            "Bidang 4",
            "Bidang 5",
            "Bidang 6",
            "Bidang 7",
            "Bidang 8",
            "Bidang 9",
        ],
        datasets: [
            {
                label: "Jumlah Tiket",
                data: [12, 19, 3, 5, 2, 3, 17, 3, 15], // Data sample
                backgroundColor: "rgba(54, 162, 235, 0.2)",
                borderColor: "rgba(54, 162, 235, 1)",
                borderWidth: 2,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
//  end bar chart bidang

// barchart masalah
var ctx = document.getElementById("barchartMasalah").getContext("2d");
var barchartMasalah = new Chart(ctx, {
    type: "bar",
    data: {
        labels: [
            "Masalah 1",
            "Masalah 2",
            "Masalah 3",
            "Masalah 4",
            "Masalah 5",
            "Masalah 6",
            "Masalah 7",
            "Masalah 8",
            "Masalah 9",
        ],
        datasets: [
            {
                label: "Jumlah Tiket",
                data: [14, 10, 23, 9, 7, 4, 12, 5, 8], // Data sample
                backgroundColor: "rgba(255, 99, 132, 0.2)",
                borderColor: "rgba(255, 99, 132, 1)",
                borderWidth: 2,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
// end barchart masalah

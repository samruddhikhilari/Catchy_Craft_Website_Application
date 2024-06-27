// script.js
document.addEventListener("DOMContentLoaded", function() {
    fetchSalesData();
});

function fetchSalesData() {
    fetch("fetch_sales_data.php")
        .then(response => response.json())
        .then(data => {
            const dates = data.map(item => item.date);
            const revenues = data.map(item => item.revenue);

            createChart(dates, revenues);
        })
        .catch(error => console.error("Error fetching sales data:", error));
}

function createChart(dates, revenues) {
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dates,
            datasets: [{
                label: 'Revenue',
                data: revenues,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}

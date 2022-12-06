const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['À Pagar', 'Pago', 'Em Atraso'],
        datasets: [{
            label: 'Valor',
            data: [700, 240, 600],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            subtitle: {
                display: true,
                text: 'Gráfico de Resultado'
            }
        }
    }
});

const anotherctx = document.getElementById('SecondChart');

new Chart(anotherctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        datasets: [{
            label: 'Acompanhemento Mensal',
            data: [7500, 6800, 9000, 5600, 3500, 8500, 9753, 9632, 8050, 1255, 3652, 9450],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },

});

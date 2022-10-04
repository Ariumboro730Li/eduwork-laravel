Highcharts.chart("container", {
    chart: {
        type: "column",
    },
    title: {
        align: "left",
        text: "Category Incomes",
    },
    subtitle: {
        align: "left",
    },
    accessibility: {
        announceNewData: {
            enabled: true,
        },
    },
    xAxis: {
        type: "category",
    },
    yAxis: {
        title: {
            text: "Total Income per Category",
        },
    },
    legend: {
        enabled: false,
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: "{point.y}",
            },
        },
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat:
            '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>',
    },

    series: [
        {
            name: "Incomes",
            colorByPoint: true,
            data: [
                {
                    name: "Chrome",
                    y: 62.74,
                },
                {
                    name: "Firefox",
                    y: 10.57,
                },
                {
                    name: "Internet Explorer",
                    y: 7.23,
                },
                {
                    name: "Safari",
                    y: 5.58,
                },
                {
                    name: "Edge",
                    y: 4.02,
                },
                {
                    name: "Opera",
                    y: 1.92,
                },
                {
                    name: "Other",
                    y: 7.62,
                },
            ],
        },
    ],
});

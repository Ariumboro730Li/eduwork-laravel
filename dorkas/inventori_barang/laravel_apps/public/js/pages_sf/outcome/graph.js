const getGraph = () => {
    $.ajax({
        url: `${configView.url}/outcome/graph`,
        type: "get",
        success: function (response) {
            Highcharts.chart("container", {
                chart: {
                    type: "column",
                },
                title: {
                    align: "left",
                    text: "Category Outcomes",
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
                        text: "Total Outcome per Category * 1000",
                    },
                },
                legend: {
                    enabled: false,
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: { ...response },
                        cursor: "pointer",
                        point: {
                            events: {
                                click: function (e) {
                                    configView.category = this.name;
                                    sourceData();
                                },
                            },
                        },
                    },
                },

                tooltip: {
                    headerFormat:
                        '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat:
                        '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>',
                },

                series: [
                    {
                        name: "Outcomes",
                        colorByPoint: true,
                        data: response,
                    },
                ],
            });
        },
        error: function (response) {},
    });
};

getGraph();

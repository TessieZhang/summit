
$(document).ready(function () {
    var question;
    var answer;
    var occupation = document.getElementById("title").textContent;


    //$('li#statistics').addClass('active');
    //$('.li#"' + path + '"').parent().addClass('active');

    $("#myBtn1").click(function () {
        var chart = new CanvasJS.Chart("statistic1", {
            title: {
                text: "Waiter salary"
            },
            exportEnabled: true,
            axisY: {
                includeZero:false,
                valueFormatString: "$ 0",
                interval: 10,
            },
            axisX: {
                interval:10
            },
            data: [
                {
                    type: "rangeBar",
                    showInLegend: true,
                    yValueFormatString: "$#0.##",
                    indexLabel: "{y[#index]}",
                    legendText: "Min and Max Salary",
                    dataPoints: [
                        {x: 10, y:[3.86, 35.70], label: "Overtime"},
                        {x: 20, y:[15.02, 22.27], label: "Hourly Rate"},
                    ]
                }
            ]
        });
        chart.render();
        $("#salaryModal").modal();
    });

    $("#myBtn1-kitchen-hand").click(function () {
        var chart = new CanvasJS.Chart("statistic1", {
            title: {
                text: "Kitchen hand salary"
            },
            exportEnabled: true,
            axisY: {
                includeZero:false,
                valueFormatString: "$ 0",
                interval: 10,
            },
            axisX: {
                interval:10
            },
            data: [
                {
                    type: "rangeBar",
                    showInLegend: true,
                    yValueFormatString: "$#0.##",
                    indexLabel: "{y[#index]}",
                    legendText: "Min and Max Salary",
                    dataPoints: [
                        {x: 10, y:[0.00, 33.32], label: "Overtime"},
                        {x: 20, y:[15.05, 21.73], label: "Hourly Rate"},
                    ]
                }
            ]
        });
        chart.render();
        $("#salaryModal").modal();
    });

    $("#myBtn1-convenience").click(function () {
        var chart = new CanvasJS.Chart("statistic1", {
            title: {
                text: "Convenience store worker salary"
            },
            exportEnabled: true,
            axisY: {
                includeZero: false,
                valueFormatString: "$ 0",
                interval: 10,
            },
            axisX: {
                interval: 10
            },
            data: [
                {
                    type: "rangeBar",
                    showInLegend: true,
                    yValueFormatString: "$#0.##",
                    indexLabel: "{y[#index]}",
                    legendText: "Min and Max Salary",
                    dataPoints: [
                        {x: 10, y: [3.86, 35.70], label: "Overtime"},
                        {x: 20, y: [15.02, 22.72], label: "Hourly Rate"},
                    ]
                }
            ]
        });
        chart.render();
        $("#salaryModal").modal();
    });

        $("#myBtn1-warehouse").click(function () {
            var chart = new CanvasJS.Chart("statistic1", {
                title: {
                    text: "Warehouse worker salary"
                },
                exportEnabled: true,
                axisY: {
                    includeZero: false,
                    valueFormatString: "$ 0",
                    interval: 10,
                },
                axisX: {
                    interval: 10
                },
                data: [
                    {
                        type: "rangeBar",
                        showInLegend: true,
                        yValueFormatString: "$#0.##",
                        indexLabel: "{y[#index]}",
                        legendText: "Min and Max Salary",
                        dataPoints: [
                            {x: 10, y: [2.83, 40.09], label: "Overtime"},
                            {x: 20, y: [16.83, 24.70], label: "Hourly Rate"},
                        ]
                    }
                ]
            });
            chart.render();
            $("#salaryModal").modal();

        });

            $("#myBtn1-driver").click(function () {
                var chart = new CanvasJS.Chart("statistic1", {
                    title: {
                        text: "Delivery driver salary"
                    },
                    exportEnabled: true,
                    axisY: {
                        includeZero: false,
                        valueFormatString: "$ 0",
                        interval: 10,
                    },
                    axisX: {
                        interval: 10
                    },
                    data: [
                        {
                            type: "rangeBar",
                            showInLegend: true,
                            yValueFormatString: "$#0.##",
                            indexLabel: "{y[#index]}",
                            legendText: "Min and Max Salary",
                            dataPoints: [
                                {x: 10, y: [17.81, 37.61], label: "Overtime"},
                                {x: 20, y: [16.47, 24.64], label: "Hourly Rate"},
                            ]
                        }
                    ]
                });
                chart.render();
                $("#salaryModal").modal();
            });


    $("#myBtn1-cleaner").click(function () {
        var chart = new CanvasJS.Chart("statistic1", {
            title: {
                text: "Cleaner salary"
            },
            exportEnabled: true,
            axisY: {
                includeZero: false,
                valueFormatString: "$ 0",
                interval: 10,
            },
            axisX: {
                interval: 10
            },
            data: [
                {
                    type: "rangeBar",
                    showInLegend: true,
                    yValueFormatString: "$#0.##",
                    indexLabel: "{y[#index]}",
                    legendText: "Min and Max Salary",
                    dataPoints: [
                        {x: 10, y: [0.00, 39.27], label: "Overtime"},
                        {x: 20, y: [16.75, 25.12], label: "Hourly Rate"},
                    ]
                }
            ]
        });
        chart.render();
        $("#salaryModal").modal();
    });
    $("#myBtn2").click(function () {
        question = 1;
        answer = document.getElementById("correctAnswer1").textContent;
        $('#answer1I').hide();
        $('#answer1C').hide();

        $("#myModal1").modal();
    });

    $("#myBtn3").click(function () {
        question = 2;
        answer = document.getElementById("correctAnswer2").textContent;
        $('#answer2I').hide();
        $('#answer2C').hide();
        $("#myModal2").modal('show');
        $("#myModal1").modal('hide');
    });

    $("#myBtn4").click(function () {
        question = 3;
        answer = document.getElementById("correctAnswer3").textContent;
        $('#answer3I').hide();
        $('#answer3C').hide();
        $("#myModal3").modal('show');
        $("#myModal2").modal('hide');
    });

    $("#myBtn5").click(function () {
        question = 4;
        answer = document.getElementById("correctAnswer4").textContent;
        $('#answer4I').hide();
        $('#answer4C').hide();
        $("#myModal4").modal('show');
        $("#myModal3").modal('hide');
    });

    $("#myBtn6").click(function () {
        question = 5;
        answer = document.getElementById("correctAnswer5").textContent;
        $('#answer5I').hide();
        $('#answer5C').hide();
        $("#myModal5").modal('show');
        $("#myModal4").modal('hide');
    });

    $("#finish").click(function () {
        $("#myModal5").modal('hide');
    });

    $("#finish1").click(function () {
        $("#myModal2").modal('hide');
    });

    $("#close").click(function () {
        $("#myModal").modal('hide');
    });

    $("#close1").click(function () {
        $("#salaryModal").modal('hide');
    });

    $(function () {
        var loading1 = $('#loadbar1').hide();
        var loading2 = $('#loadbar2').hide();
        var loading3 = $('#loadbar3').hide();
        var loading4 = $('#loadbar4').hide();
        var loading5 = $('#loadbar5').hide();



        $(document)
            .ajaxStart(function () {
                loading1.show();
                loading2.show();
                loading3.show();
                loading4.show();
                loading5.show();
            }).ajaxStop(function () {
            loading1.hide();
            loading2.hide();
            loading3.hide();
            loading4.hide();
            loading5.hide();
        });

        $("label.btn").on('click', function () {

            $('#answer1I').hide();
            $('#answer1C').hide();
            $('#answer2I').hide();
            $('#answer2C').hide();
            $('#answer3I').hide();
            $('#answer3C').hide();
            $('#answer4I').hide();
            $('#answer4C').hide();
            $('#answer5I').hide();
            $('#answer5C').hide();
            var choice = $(this).find('input:radio').val();
            switch (question) {
                case 1 :
                    $('#loadbar1').show();
                    $('#quiz1').fadeOut();
                    setTimeout(function () {
                        if (checking(choice,answer)) {
                            $('#answer1C').show();
                        } else {
                            $('#answer1I').show();
                        }
                        $('#quiz1').show();
                        $('#loadbar1').fadeOut();
                    }, 1500);
                    break;
                case 2 :
                    $('#loadbar2').show();
                    $('#quiz2').fadeOut();
                    setTimeout(function () {
                        if (checking(choice,answer)) {
                            $('#answer2C').show();
                        } else {
                            $('#answer2I').show();
                        }
                        $('#quiz2').show();
                        $('#loadbar2').fadeOut();
                    }, 1500);
                    break;
                case 3 :
                    $('#loadbar3').show();
                    $('#quiz3').fadeOut();
                    setTimeout(function () {
                        if (checking(choice,answer)) {
                            $('#answer3C').show();
                        } else {
                            $('#answer3I').show();
                        }
                        $('#quiz3').show();
                        $('#loadbar3').fadeOut();
                    }, 1500);
                    break;
                case 4 :
                    $('#loadbar4').show();
                    $('#quiz4').fadeOut();
                    setTimeout(function () {
                        if (checking(choice,answer)) {
                            $('#answer4C').show();
                        } else {
                            $('#answer4I').show();
                        }
                        $('#quiz4').show();
                        $('#loadbar4').fadeOut();
                    }, 1500);
                    break;
                case 5 :
                    $('#loadbar5').show();
                    $('#quiz5').fadeOut();
                    setTimeout(function () {
                        if (checking(choice,answer)) {
                            $('#answer5C').show();
                        } else {
                            $('#answer5I').show();
                        }
                        $('#quiz5').show();
                        $('#loadbar5').fadeOut();
                    }, 1500);
                    break;
            }


        });


    });

});

function checking(ck, test) {
    if (ck != test)
        return false;

    else
        return true;
}


function chartGraph(a) {
    var obj = eval(a);
    year1 = obj[0].yr;
    year2 = obj[1].yr;
    year3 = obj[2].yr;
    num_claims1 = obj[0].num_claims;

    num_claims2 = obj[1].num_claims;
    num_claims3 = obj[2].num_claims;
    var chart = new CanvasJS.Chart("statistic",
        {
            theme: "theme2",
            title: {
                text: "Number of serious claims"
            },
            animationEnabled: true,
            axisX: {
                valueFormatString: "YYYY"
            },
            axisY: {
                minimum: 1000
            },

            data: [
                {
                    type: "line",
                    dataPoints: [
                        {x: new Date(year1, 0), y: Number(num_claims1)},
                        {x: new Date(year2, 0), y: Number(num_claims2)},
                        {x: new Date(year3, 0), y: Number(num_claims3)}
                    ]
                }, {
                    type: "line",
                    showInLegend: true,
                    name: "Average value",
                    //lineThickness: 3,
                    dataPoints: [
                        {x: new Date(2009, 0), y: 1506},
                        {x: new Date(2010, 0), y: 1600},
                        {x: new Date(2011, 0), y: 1434}
                    ]
                }
            ]
        });
    chart.render();

    var chart1 = new CanvasJS.Chart("statistic1",
        {
            theme: "theme2",
            title: {
                text: "Frequency rate (serious claims per million hours worked)"
            },
            animationEnabled: true,
            axisX: {
                valueFormatString: "YYYY"
            },

            data: [
                {
                    type: "line",
                    showInLegend: true,
                    name: "Current value",
                    //lineThickness: 3,
                    dataPoints: [
                        {x: new Date(year1, 0), y: Number(obj[0].frequency_rate)},
                        {x: new Date(year2, 0), y: Number(obj[1].frequency_rate)},
                        {x: new Date(year3, 0), y: Number(obj[2].frequency_rate)}
                    ]
                }, {
                    type: "line",
                    showInLegend: true,
                    name: "Average value",
                    //lineThickness: 3,
                    dataPoints: [
                        {x: new Date(2009, 0), y: 13},
                        {x: new Date(2010, 0), y: 10},
                        {x: new Date(2011, 0), y: 14}
                    ]
                }
            ]
        });

    chart1.render();

    var chart2 = new CanvasJS.Chart("statistic2",
        {
            theme: "theme2",
            title: {
                text: "Incidence rate (serious claims per 1000 employees)"
            },
            animationEnabled: true,
            axisX: {
                valueFormatString: "YYYY"
            },
            data: [
                {
                    type: "line",
                    showInLegend: true,
                    name: "Current value",
                    //lineThickness: 3,
                    dataPoints: [
                        {x: new Date(year1, 0), y: Number(obj[0].incidence_rate)},
                        {x: new Date(year2, 0), y: Number(obj[1].incidence_rate)},
                        {x: new Date(year3, 0), y: Number(obj[2].incidence_rate)}
                    ]
                }, {
                    type: "line",
                    showInLegend: true,
                    name: "Average value",
                    //lineThickness: 3,
                    dataPoints: [
                        {x: new Date(2009, 0), y: 20},
                        {x: new Date(2010, 0), y: 30},
                        {x: new Date(2011, 0), y: 25}
                    ]
                }
            ]
        });
    chart2.render();
}

function xmlhttpConnect() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
}

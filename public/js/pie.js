//pie.js
let myChart4 = document.getElementById("pieChart").getContext('2d');

var data = {
    labels: ["2015", "2016", "2017", "2018", "2019"],
    datasets: [{
        labels: "TeamA Score",
        data: [10, 50, 25, 70, 40],
        backgroundColor: [
            "#FEAA99",
            "#00AA88",

            "#FE00BB",
            "#FEAA00",
            "#99AA33"
        ],
        borderColor: [
            "#DEBA19",
            "#F9AD28",

            "#59BFAB",
            "#AE8872",
            "#222DF99"
        ],
        borderWidth: [1, 1, 1, 1, 1]
    }]
};

var options = {
    title: {
        display: true,
        position: "top",
        text: "4. Pie Graph",
        fontSize: 18,
        fontColor: "black",
        cutoutPercentage: 10
    },
    legend: {
        display: true,
        position: "left"
    }
};
let chart4 = new Chart(myChart4, {
    type: "pie",
    data: data,
    options: options
});
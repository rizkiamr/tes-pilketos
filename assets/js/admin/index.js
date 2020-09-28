$(document).ready(function(){
    $('#sidebarCollapse').on('click' , function(){
        

        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    })
})

        
window.onload = function(){
               
    //chart
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
    labels: ["kandidat 1", "kandidat 2", "Kandidat 3", "Kandidat 4", "Kandidat 5" , "Kandidat 6"],
    datasets: [{
    data: [300, 50, 100, 40, 120 , 200],
    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
    }]
    },
    options: {
    responsive: true,
  
    legend : {
        position : 'right',
        labels : {
            boxWidth : 18,
            padding  : 20,
            fontSize : 16
           
        }
    }
    }
    });
}
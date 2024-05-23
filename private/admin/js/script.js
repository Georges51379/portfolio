// JavaScript for creating the charts
var projectData = {
  labels: ['Completed', 'In Progress', 'Not Started'],
  datasets: [{
      data: [30, 40, 30],
      backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384']
  }]
};

var revenueData = {
  labels: ['January', 'February', 'March', 'April', 'May', 'June'],
  datasets: [{
      label: 'Revenue',
      data: [1000, 2000, 1500, 2500, 1800, 3000],
      backgroundColor: '#36a2eb'
  }]
};

var projectChart = new Chart(document.getElementById('projectChart'), {
  type: 'pie',
  data: projectData
});

var revenueChart = new Chart(document.getElementById('revenueChart'), {
  type: 'bar',
  data: revenueData
});

// Update the visitor and project bars dynamically
document.getElementById('visitorBar').textContent = 'Visitors: 200';
document.getElementById('projectBar').textContent = 'Projects: 70';

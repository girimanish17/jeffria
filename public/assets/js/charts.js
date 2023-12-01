"use strict";

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

// oveview-income
(function () {
  var options = {
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    legend: {
      show: false
    },
    colors: ['#2A85FF'],
    series: [{
      name: 'Earning',
      data: [500, 1600, 1100, 1400, 1700, 800]
    }],
    chart: {
      height: '100%',
      type: 'line',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 4
    },
    xaxis: {
      type: 'category',
      categories: ["Apr", "May", "Jun", "July", "Aug", "Sep"],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      tooltip: {
        enabled: false
      }
    }
  };
  var chart = document.querySelector('#oveview-income');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})();

// Registration

(function () {
  var options = {
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    legend: {
      show: false
    },
    colors: ['#2A85FF'],
    series: [{
      name: 'Earning',
      data: [5, 7, 9, 14, 18, 20]
    }],
    chart: {
      height: '100%',
      type: 'line',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 4
    },
    xaxis: {
      type: 'category',
      categories: ["Apr", "May", "Jun", "July", "Aug", "Sep"],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      tooltip: {
        enabled: false
      }
    }
  };
  var chart = document.querySelector('#registration');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})();




// product-views


(function () {
  var options = {
    series: [{
      name: 'Product views',
      data: [27, 22, 32, 18, 27, 15, 21]
    }],
    chart: {
      type: 'bar',
      height: '100%',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    plotOptions: {
      bar: {
        borderRadius: 2,
        columnWidth: '50%'
      }
    },
    colors: ['#2A85FF'],
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: [22, 23, 24, 25, 26, 27, 28],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    states: {
      hover: {
        filter: {
          type: 'lighten',
          value: 0.05
        }
      }
    }
  };
  var chart = document.querySelector('#product-views');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})();


// Daily registration

// product-views


(function () {
  var options = {
    series: [{
      name: 'Product views',
      data: [27, 22, 32, 18, 27, 15, 21, 28, 29, 30, 31, 32, 33, 43]
    }],
    chart: {
      type: 'bar',
      height: '100%',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    plotOptions: {
      bar: {
        borderRadius: 2,
        columnWidth: '50%'
      }
    },
    colors: ['#2A85FF'],
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    states: {
      hover: {
        filter: {
          type: 'lighten',
          value: 0.05
        }
      }
    }
  };
  var chart = document.querySelector('#daily-registration');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})();


// product-views-small


(function () {
  var options = {
    series: [{
      name: 'Views',
      data: [20, 60, 45, 16, 20, 115, 25]
    }],
    chart: {
      type: 'bar',
      height: '100%',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    plotOptions: {
      bar: {
        borderRadius: 2,
        columnWidth: '75%'
      }
    },
    colors: ['#B5E4CA'],
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    yaxis: {
      labels: {
        show: false
      }
    },
    grid: {
      show: false,
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 0
      }
    },
    states: {
      hover: {
        filter: {
          type: 'darken',
          value: 0.6
        }
      }
    }
  };
  var chart = document.querySelector('#product-views-small');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})(); // dashboard-products-earning


(function () {
  var options = {
    grid: {
      show: false,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
        left: 0
      }
    },
    legend: {
      show: false
    },
    colors: ['#83BF6E'],
    series: [{
      name: 'Earning',
      data: [500, 1600, 1100, 1400, 1700, 800]
    }],
    chart: {
      height: '100%',
      type: 'line',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 4
    },
    tooltip: {
      enabled: false
    },
    xaxis: {
      type: 'category',
      labels: {
        show: false
      },
      categories: ["Apr", "May", "Jun", "July", "Aug", "Sep"],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      tooltip: {
        enabled: false
      }
    },
    yaxis: {
      labels: {
        show: false
      }
    }
  };
  var chart = document.querySelector('#dashboard-products-earning');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})(); // dashboard-products-customer


(function () {
  var options = {
    grid: {
      show: false,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
        left: 0
      }
    },
    legend: {
      show: false
    },
    colors: ['#2A85FF'],
    series: [{
      name: 'Customer',
      data: [1400, 1700, 800, 500, 1600, 1100]
    }],
    chart: {
      height: '100%',
      type: 'line',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 4
    },
    tooltip: {
      enabled: false
    },
    xaxis: {
      type: 'category',
      labels: {
        show: false
      },
      categories: ["Apr", "May", "Jun", "July", "Aug", "Sep"],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      tooltip: {
        enabled: false
      }
    },
    yaxis: {
      labels: {
        show: false
      }
    }
  };
  var chart = document.querySelector('#dashboard-products-customer');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})(); // dashboard-products-payouts


(function () {
  var options = {
    grid: {
      show: false,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
        left: 0
      }
    },
    legend: {
      show: false
    },
    colors: ['#8E59FF'],
    series: [{
      name: 'Payouts',
      data: [800, 500, 1400, 1700, 1600, 1100]
    }],
    chart: {
      height: '100%',
      type: 'line',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 4
    },
    tooltip: {
      enabled: false
    },
    xaxis: {
      type: 'category',
      labels: {
        show: false
      },
      categories: ["Apr", "May", "Jun", "July", "Aug", "Sep"],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      tooltip: {
        enabled: false
      }
    },
    yaxis: {
      labels: {
        show: false
      }
    }
  };
  var chart = document.querySelector('#dashboard-products-payouts');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})(); // total-customers


(function () {
  var options = {
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    legend: {
      show: false
    },
    colors: ['#2A85FF'],
    series: [{
      name: 'Customers',
      data: ['5', '10', '15', '20', '25', '30']
    }],
    chart: {
      height: '100%',
      type: 'line',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 4
    },
    xaxis: {
      type: 'category',
      categories: ["Sep", "Oct", "Nov", "Dec", "Jan", "Feb"],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      tooltip: {
        enabled: false
      }
    }
  };
  var chart = document.querySelector('#total-customers');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})(); // traffic-channel


(function () {
  var options = _defineProperty({
    series: [{
      name: 'Writer',
      data: [22, 12, 18, 10, 21, 17, 12]
    }, {
      name: 'Technical',
      data: [3, 8, 4, 10, 5, 8, 8]
    }, {
      name: 'Designer',
      data: [4, 5, 9, 5, 4, 4, 5]
    }, {
      name: 'Video Editor',
      data: [8, 2, 4, 8, 5, 5, 10]
    },{
      name: 'Marketing',
      data: [5, 10, 7, 2, 5, 12, 10]
    },{
      name: 'Other',
      data: [3, 8, 4, 10, 5, 8, 8]
    }],
    chart: {
      type: 'bar',
      height: '100%',
      stacked: true,
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    plotOptions: {
      bar: {
        borderRadius: 2,
        columnWidth: '55%'
      }
    },
    colors: ['#2A85FF', '#FFBC99', '#B1E5FC', '#CABDFF', '#FD2AFF', '#FFD88D'],
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: [22, 23, 24, 25, 26, 27, 28],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    states: {
      hover: {
        filter: {
          type: 'lighten',
          value: 0.05
        }
      }
    },
    legend: {
      offsetY: 6
    }
  }, "states", {
    hover: {
      filter: {
        type: 'darken',
        value: 0.8
      }
    }
  });

  var chart = document.querySelector('#traffic-channel');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})();

// Project type chart
(function () {
  var options = _defineProperty({
    series: [{
      name: 'Listing',
      data: [22, 12, 18, 10, 21, 17, 12]
    }, {
      name: 'News',
      data: [3, 8, 4, 10, 5, 8, 8]
    }, {
      name: 'Forum',
      data: [4, 5, 9, 5, 4, 4, 5]
    }, {
      name: 'Landing Page',
      data: [8, 2, 4, 8, 5, 5, 10]
    }, {
      name: 'Video',
      data: [5, 10, 7, 2, 5, 12, 10]
    }],
    chart: {
      type: 'bar',
      height: '100%',
      stacked: true,
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    plotOptions: {
      bar: {
        borderRadius: 2,
        columnWidth: '55%'
      }
    },
    colors: ['#2A85FF', '#FFBC99', '#B1E5FC', '#CABDFF', '#FFD88D'],
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: ['Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct'],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    states: {
      hover: {
        filter: {
          type: 'lighten',
          value: 0.05
        }
      }
    },
    legend: {
      offsetY: 6
    }
  }, "states", {
    hover: {
      filter: {
        type: 'darken',
        value: 0.8
      }
    }
  });

  var chart = document.querySelector('#project-type');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})();


// active-customers


(function () {
  var options = {
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    legend: {
      show: false
    },
    colors: ['#2A85FF', '#B5E4CA', '#B1E5FC'],
    series: [{
      name: 'Monthly',
      data: [500, 600, 550, 450, 620, 500, 600, 550]
    }],
    chart: {
      height: '100%',
      type: 'line',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 4
    },
    xaxis: {
      type: 'category',
      categories: ["Sep", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr"],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      tooltip: {
        enabled: false
      }
    }
  };
  var chart = document.querySelector('#active-customers');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})(); // top-device


(function () {
  var options = {
    series: [340, 85, 1275],
    chart: {
      type: 'donut'
    },
    legend: {
      show: false
    },
    dataLabels: {
      enabled: false
    },
    plotOptions: {
      pie: {
        donut: {
          size: '78%'
        }
      }
    },
    labels: ['Full-Time', 'Part-Time', 'Probation'],
    colors: ['#8E59FF', '#83BF6E', '#2A85FF']
  };
  var chart = document.querySelector('#top-device');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})(); // Top country


(function () {
  var options = {
    series: [{
      name: 'Views',
      data: [0, 5, 10, 15, 20, 25]
    }],
    chart: {
      type: 'bar',
      height: '100%',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    plotOptions: {
      bar: {
        borderRadius: 2,
        horizontal: true
      }
    },
    colors: ['#B5E4CA'],
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: ['Indonesia', 'Sri Lanka', 'Vietnam', 'Bangladesh', 'India', 'Pakistan'],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    states: {
      hover: {
        filter: {
          type: 'darken',
          value: 0.8
        }
      }
    }
  };
  var chart = document.querySelector('#top-country');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})(); // new-customer


(function () {
  var options = {
    series: [340, 1275],
    chart: {
      type: 'donut'
    },
    legend: {
      show: false
    },
    dataLabels: {
      enabled: false
    },
    plotOptions: {
      pie: {
        donut: {
          size: '78%'
        }
      }
    },
    labels: ['New customer', 'Returning customer'],
    colors: ['#B5E4CA', '#CABDFF'],
    states: {
      hover: {
        filter: {
          type: 'darken',
          value: 0.8
        }
      }
    }
  };
  var chart = document.querySelector('#new-customer');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})(); // snapshot-clicks


(function () {
  var options = {
    series: [{
      name: 'Clicks',
      data: [27, 22, 32, 18, 27, 15, 21]
    }],
    chart: {
      type: 'bar',
      height: '100%',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    plotOptions: {
      bar: {
        borderRadius: 2,
        columnWidth: '55%'
      }
    },
    colors: ['#B5E4CA'],
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: [22, 23, 24, 25, 26, 27, 28],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    states: {
      hover: {
        filter: {
          type: 'lighten',
          value: 0.05
        }
      }
    }
  };
  var chart = document.querySelector('#snapshot-clicks');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})(); // performance-by-day


(function () {
  var options = {
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    legend: {
      show: false
    },
    colors: ['#2A85FF'],
    series: [{
      name: 'Click',
      data: [20, 94, 120, 125, 202, 84]
    }],
    chart: {
      height: '100%',
      type: 'line',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 4
    },
    xaxis: {
      type: 'category',
      categories: ["12", "13", "14", "15", "16", "17"],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      tooltip: {
        enabled: false
      }
    }
  };
  var chart = document.querySelector('#performance-by-day');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})(); // product-sales


(function () {
  var options = {
    series: [{
      name: 'Product sales',
      data: [2400, 1350, 3100, 1900, 2500, 2000, 3000]
    }],
    chart: {
      type: 'bar',
      height: '100%',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    plotOptions: {
      bar: {
        borderRadius: 2,
        columnWidth: '50%'
      }
    },
    colors: ['#B5E4CA'],
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: [22, 23, 24, 25, 26, 27, 28],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    states: {
      hover: {
        filter: {
          type: 'darken',
          value: 0.8
        }
      }
    }
  };
  var chart = document.querySelector('#product-sales');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})();

// Monthly expense

(function () {
  var options = {
    chart: {
      type: 'bar',
      height: '100%',
      toolbar: {
        show: false
      },
      fontFamily: 'Inter, sans-serif'
    },
    series: [{
      name: 'Monthly',
      data: [2000, 4000, 8000, 2000, 4000, 8000]
    }],
    plotOptions: {
      bar: {
        borderRadius: 2,
        columnWidth: '50%'
      }
    },
    colors: ['#B5E4CA'],
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: [22, 23, 24, 25, 26, 27, 28],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 0,
        bottom: 0,
        left: 10
      }
    },
    states: {
      hover: {
        filter: {
          type: 'darken',
          value: 0.8
        }
      }
    },
    
    xaxis: {
      type: 'category',
      categories: ["Sep", "Oct", "Nov", "Dec", "Jan", "Feb"],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      tooltip: {
        enabled: false
      }
    }
  };
  var chart = document.querySelector('#monthly-expense');

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})();


var getJSON = function(url) {
 return new Promise(function(resolve, reject) {
   var xhr = new XMLHttpRequest();
   xhr.open('get', url, true);
   xhr.responseType = 'json';
   xhr.onload = function() {
     var status = xhr.status;
     if (status == 200) {
       resolve(xhr.response);
     } else {
       reject(status);
     }
   };
   xhr.send();
 });
};

getJSON('https://rezme.in/stats').then(function(data) {
   $("#user-counter").text(data.userCount)
   $("#resume-counter").text(data.resumeCount)
   $("#views-counter").text(data.views)
   result.innerText = data.result; //display the result in an HTML element
}, function(status) { //error detection....
 alert('Something went wrong.');
});

//jQuery('.statistic-counter').counterUp({
//delay: 10,
//time: 2000
//});

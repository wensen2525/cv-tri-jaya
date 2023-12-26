// $(document).ready(function(){

// });

document.onreadystatechange = function () {
      var state = document.readyState
      if (state == 'interactive') {
            document.getElementById('loading').style.display="block";
            document.getElementById('app').style.display="none";
            console.log("loading")
      } else if (state == 'complete') {
            console.log("loading_complete")
            let loading_complete = document.getElementById('loading');
            setTimeout(function(){
                  console.log('jalan')
                  document.getElementById('loading').style.display="none";
                  document.getElementById('app').style.display="block";
            },1500);
      };

}


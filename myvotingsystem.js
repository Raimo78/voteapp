
    var ehdokas1 = 0;
    var ehdokas2 = 0;
    var ehdokas3 = 0;
    var ehdokas4 = 0;
    var ehdokas5 = 0;
    var ehdokas6 = 0;
    var ehdokas7 = 0;
    var ehdokas8 = 0;
    var ehdokas9 = 0;
    var ehdokas10 = 0;
    
    
    function refreshResults () {
      var results = document.getElementById('results');
      results.innerHTML = 'total: ' + (ehdokas1 + ehdokas2 + ehdokas3 + ehdokas4 + ehdokas5 + ehdokas6 + ehdokas7 + ehdokas8 + ehdokas9 + ehdokas10);
      results.innerHTML += '<br />ehdokas1: ' + ehdokas1;
      results.innerHTML += '<br />ehdokas2: ' + ehdokas2;
      results.innerHTML += '<br />ehdokas3: ' + ehdokas3;
      results.innerHTML += '<br />ehdokas4: ' + ehdokas4;
      results.innerHTML += '<br />ehdokas5: ' + ehdokas5;
      results.innerHTML += '<br />ehdokas6: ' + ehdokas6;
      results.innerHTML += '<br />ehdokas7: ' + ehdokas7;
      results.innerHTML += '<br />ehdokas8: ' + ehdokas8;
      results.innerHTML += '<br />ehdokas9: ' + ehdokas9;
      results.innerHTML += '<br />ehdokas10: ' + ehdokas10;
    
    }
    
    document.getElementById('ehdokas1-button').addEventListener('click', function () {
      ehdokas1++;
      refreshResults();
    });
    
    document.getElementById('ehdokas2-button').addEventListener('click', function () {
      ehdokas2++;
      refreshResults();
    });
    
    document.getElementById('ehdokas3-button').addEventListener('click', function () {
      ehdokas3++;
      refreshResults();
    });
    
    document.getElementById('ehdokas4-button').addEventListener('click', function () {
      ehdokas4++;
      refreshResults();
    });
    
    document.getElementById('ehdokas5-button').addEventListener('click', function () {
      ehdokas5++;
      refreshResults();
    });
    
    document.getElementById('ehdokas6-button').addEventListener('click', function () {
      ehdokas6++;
      refreshResults();
    });
    
    document.getElementById('ehdokas7-button').addEventListener('click', function () {
      ehdokas7++;
      refreshResults();
    });
    
    document.getElementById('ehdokas8-button').addEventListener('click', function () {
      ehdokas8++;
      refreshResults();
    });
    
    document.getElementById('ehdokas9-button').addEventListener('click', function () {
      ehdokas9++;
      refreshResults();
    });
    
    document.getElementById('ehdokas10-button').addEventListener('click', function () {
      ehdokas10++;
      refreshResults();
    });
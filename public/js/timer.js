let endDate = new Date("jan 31, 2023 12:59:59").getTime();
var x = setInterval (function() {
    let dateNow = new Date ().getTime();

    let dif = endDate - dateNow ;
    let dyes = Math.floor (dif / 1000 / 60 / 60 / 24);
    let h = Math.floor ((dif % (1000 * 60 * 60* 24 )) / (1000 * 60 * 60));
    let m = Math.floor ((dif % (1000 * 60 * 60)) / (1000 * 60));
    let s = Math.floor ((dif % (1000 * 60 )) / 1000) ;

    document.getElementById('d').innerHTML = dyes;
    document.getElementById('h').innerHTML = h < 10 ? '0'+h : h;
    document.getElementById('m').innerHTML = m < 10 ? '0'+m : m;
    document.getElementById('s').innerHTML = s < 10 ? '0'+s : s;
}, 1000);


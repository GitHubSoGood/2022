const btn =document.querySelector('.label');
const point = document.querySelector('select');

const texts = document.querySelector('#text');

const arr = ['q=','?query=','?text='];


btn.onclick = function(){
    const p = point.value;

    const text = texts.value;

    let str = '';

    if (p.includes('baidu')) {
       
        str = '?' + arr[0] + '=' + text;
    }
    if (p.includes('bing')) {
        str = '?' + arr[1] + '=' + text;
    }
    if (p.includes('yandex')) {
        str = '?' + arr[2] + '=' + text;
    }
// console.log(p + str);
console.log(str);




}

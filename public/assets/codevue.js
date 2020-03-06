var model = {
    name:'David Abj',
    love:'this is a love page',
    rub:'this tell more about me',
    relpic:'./img/01.png',
}
var model01= {
    name:'David Abuja',
    love:'this is a love page',
    rub:'this tell more about me',
    relpic:'./img/03.png',
}
var vm = new Vue({
    el:'#app',
    data:{
      info_set:[
        {firstname:'David', age:'29', state:'delta'},
        {firstname:'Austine', age:'16', state:'Lagos'},
        {firstname:'David', age:'22', state:'Benini'},
        {firstname:'James', age:'24', state:'Londion'},
      ]
    }
})

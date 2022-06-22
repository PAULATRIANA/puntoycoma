var nav =document.getElementById('nav')

window.addEventListener('scroll',()=>{

    var scroll=window.scrollY
    if (scroll>10) {
        nav.style.backgroundColor = "#121212"
    }else{
        nav.style.backgroundColor = "transpare"
    }

})
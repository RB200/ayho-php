var imageIndex = 0

var galleryDiv = document.getElementsByClassName('gallery')[0]
//galleryDiv.style.background = 'red'
var backwardButton1 = document.getElementsByClassName('back-button1')[0]
var forwardButton1 = document.getElementsByClassName('next-button1')[0]

var backwardButton2 = document.getElementsByClassName('back-button2')[0]
var forwardButton2 = document.getElementsByClassName('next-button2')[0]

var backwardButton3 = document.getElementsByClassName('back-button3')[0]
var forwardButton3 = document.getElementsByClassName('next-button3')[0]

var imgToShow1 = document.getElementsByClassName('display-image1')[0]
var imgToShow2 = document.getElementsByClassName('display-image2')[0]
var imgToShow3 = document.getElementsByClassName('display-image3')[0]

var howManyImages = 26
let alphabet = ['a', 'b', 'c', 'd','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']


backwardButton1.addEventListener('click',()=>{
    imageIndex -= 1
    if(imageIndex < 0){
        imageIndex = howManyImages - 1
    }
    f = alphabet[imageIndex]
    imgToShow1.setAttribute('src',`https://via.placeholder.com/500?text=${f}`)
    console.log(f, imageIndex)
})

forwardButton1.addEventListener('click',()=>{
    imageIndex += 1
    if(imageIndex >= howManyImages){
        imageIndex = 0
    }
    f = alphabet[imageIndex]
    imgToShow1.setAttribute('src',`https://via.placeholder.com/500?text=${f}`)
    console.log(f, imageIndex)

})

backwardButton2.addEventListener('click',()=>{
    imageIndex -= 1
    if(imageIndex < 0){
        imageIndex = howManyImages - 1
    }
    f = alphabet[imageIndex]
    imgToShow2.setAttribute('src',`https://via.placeholder.com/500?text=${f}`)
    console.log(f, imageIndex)
})

forwardButton2.addEventListener('click',()=>{
    imageIndex += 1
    if(imageIndex >= howManyImages){
        imageIndex = 0
    }
    f = alphabet[imageIndex]
    imgToShow2.setAttribute('src',`https://via.placeholder.com/500?text=${f}`)
    console.log(f, imageIndex)

})

backwardButton3.addEventListener('click',()=>{
    imageIndex -= 1
    if(imageIndex < 0){
        imageIndex = howManyImages - 1
    }
    f = alphabet[imageIndex]
    imgToShow3.setAttribute('src',`https://via.placeholder.com/500?text=${f}`)
    console.log(f, imageIndex)
})

forwardButton3.addEventListener('click',()=>{
    imageIndex += 1
    if(imageIndex >= howManyImages){
        imageIndex = 0
    }
    f = alphabet[imageIndex]
    imgToShow3.setAttribute('src',`https://via.placeholder.com/500?text=${f}`)
    console.log(f, imageIndex)

})

let button_photo = document.querySelector('#btn-photo');
let image = document.querySelector('#user-photo');

let widGet_cloudinary = cloudinary.createUploadWidget({
    cloudName : '',
    uploadPreset: '',

}, (err, result)=>{
    if(!err && result && result.event === 'success'){
        console.log('Image uploaded successfully', result.info);
        image.src = (result.info.secure_url);
    }
});

button_photo.addEventListener('click', ()=>{
    widGet_cloudinary.open();
}, false);
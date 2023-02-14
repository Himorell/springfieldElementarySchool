const btn_foto = document.querySelector('btn-photo');

let widGet_cloudinary = cloudinary.createUploadWidget({
    cloudName : '',
    uploadPreset: '',
}(err, result)=>{
    if(!err && result && result.event === 'sucess');{
        console.log('Image uploaded successfully', result.info);
    }
});

btn_foto.addEventListener('click', ()=>{})
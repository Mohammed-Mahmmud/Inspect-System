// export function bytesToSize(bytes)
// {
//     const sizes = ['Bytes', 'KB', 'MB']

//     const i = parseInt( Math.floor(Math.log(bytes) / Math.log(1024) ), 10)

//     if (i === 0)
//         return {size: bytes , unit: sizes[i] }
//     else
//         return {size: (bytes / (1024 ** i)).toFixed(1) , unit: sizes[i] }
// }

    let multipleUploader = new MultipleUploader('#multiple-uploader').init({
    maxUpload : 20, // maximum number of uploaded images
    maxSize:2000, // in size in mb
    filesInpName:document.getElementById('upload').name , // input name sent to backend
    formSelector: document.getElementById('form').name // form selector
});

 const inputElement = document.querySelector('input[type="file"]'
//  , FilePond.setOptions({
//       server: {
//           process:(fieldName, file, metadata, load, error, progress, abort) => {
//               // fieldName is the name of the input field
//               // file is the actual file object to send
//               const formData = new FormData();
//               formData.append(fieldName, file, file.name);
  
//               const request = new XMLHttpRequest();
//               // request.open('POST', 'url-to-api');
//               request.open('POST', 'localhost/UploadIt/formulaire/formulaire.php');
  
//               // Should call the progress method to update the progress to 100% before calling load
//               // Setting computable to false switches the loading indicator to infinite mode
//               request.upload.onprogress = (e) => {
//                   progress(e.lengthComputable, e.loaded, e.total);
//               };
  
//               // Should call the load method when done and pass the returned server file id
//               // this server file id is then used later on when reverting or restoring a file
//               // so your server knows which file to return without exposing that info to the client
//               request.onload = function() {
//                   if (request.status >= 200 && request.status < 300) {
//                       // the load method accepts either a string (id) or an object
//                       load(request.responseText);
//                   }
//                   else {
//                       // Can call the error method if something is wrong, should exit after
//                       error('oh no');
//                   }
//               };
  
//               request.send(formData);
              
//               // Should expose an abort method so the request can be cancelled
//               return {
//                   abort: () => {
//                       // This function is entered if the user has tapped the cancel button
//                       request.abort();
  
//                       // Let FilePond know the request has been cancelled
//                       abort();
//                   }
//               };
//           }
//       }
//     })
);

FilePond.setOptions({
  server: {
    // url: 'http://192.168.0.100',
      // url: '',
      timeout: 7000,
      process: {
          url: './upload.php',
          method: 'POST',
          // headers: {
          //     'x-customheader': 'Hello World'
          // },
          withCredentials: false,
          onload: (response) => response.key,
          onerror: (response) => response.data,
          ondata: (formData) => {
              // formData.get("fichier");
              return formData;
          }
      },
      revert: './revert',
      restore: './restore/',
      load: './load/',
      fetch: './fetch/'
  }
})

const pond = FilePond.create( inputElement, {
      labelIdle : `Glisse les fichiers ou <br/> <span class="filepond--label-action">Navigue sur ton bureau</span>`,
      paramName: "fichier"
    } );

   
  

    // FilePond.registerPlugin(
    //     FilePondPluginImagePreview,
    //     FilePondPluginImageExifOrientation,
    //     FilePondPluginFileValidateSize
    //   );
      
    //   // Select the file input and use 
    //   // create() to turn it into a pond
    //   FilePond.create(
    //       document.querySelector('input')
    //   );


      // We register the plugins required to do 
// image previews, cropping, resizing, etc.
// FilePond.registerPlugin(
//     FilePondPluginFileValidateType,
//     FilePondPluginImageExifOrientation,
//     FilePondPluginImagePreview,
//     FilePondPluginImageCrop,
//     FilePondPluginImageResize,
//     FilePondPluginImageTransform,
//     FilePondPluginImageEdit
//   );
  
  // Select the file input and use 
  // create() to turn it into a pond
  // FilePond.create(
  //   document.querySelector('input'),
  //   {
  //     labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
  //     imagePreviewHeight: 170,
  //     imageCropAspectRatio: '1:1',
  //     imageResizeTargetWidth: 200,
  //     imageResizeTargetHeight: 200,
  //     stylePanelLayout: 'compact circle',
  //     styleLoadIndicatorPosition: 'center bottom',
  //     styleProgressIndicatorPosition: 'right bottom',
  //     styleButtonRemoveItemPosition: 'left bottom',
  //     styleButtonProcessItemPosition: 'right bottom',
  
  //     // Use Doka.js as image editor
  //     imageEditEditor: Doka.create()
  //   }
  // );
  
  //   FilePond.setOptions({
  //     server: 'http://192.168.33.10'
  // });
const inputElement = document.querySelector('input[type="file"]');
    const pond = FilePond.create( inputElement, {labelIdle : `Glisse les fichiers ou <br/> <span class="filepond--label-action">Navigue sur ton bureau</span>`} );

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
FilePond.registerPlugin(
    FilePondPluginFileValidateType,
    FilePondPluginImageExifOrientation,
    FilePondPluginImagePreview,
    FilePondPluginImageCrop,
    FilePondPluginImageResize,
    FilePondPluginImageTransform,
    FilePondPluginImageEdit
  );
  
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
  
//     FilePond.setOptions({
//       server: 'http://192.168.33.10'
//   });
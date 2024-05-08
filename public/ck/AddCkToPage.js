// ClassicEditor
// 		.create( document.querySelectorAll( '.ckEditor' ), {
// 			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
// 		} )
// 		.then( editor => {
// 			window.editor = editor;
// 		} )
// 		.catch( err => {
// 			console.error( err.stack );
// 		} );


//         window.editors = {};
window.editors = {};
window.editorFa = {};
setTimeout(() => {
    
    
    document.querySelectorAll( '.ckEditor' ).forEach( ( node, index ) => {
        ClassicEditor
            .create( node, {
   
                 //toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( newEditor => {
                window.editors[ index ] = newEditor 
            } );
    } );
    
    document.querySelectorAll( '.ckEditorF' ).forEach( ( node, index ) => {
        ClassicEditor
            .create( node, {
                language: 'fa'
                 //toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( newEditor => {
                window.editorFa[ index ] = newEditor 
            } );
    } );
}, 3000);
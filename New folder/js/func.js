// $(document).on('click', '.nav-link', function () {
//     getId = $(this).attr('data-tab');
//     // console.log(getId);
//     if (getId == "#color-opt") {
//         $('.design-circle').addClass('foam-clr');
//         // $('.my-btn').removeClass('backclr1');
//     } else if (getId == "#shape-opt") {
//         // $('.my-btn').addClass('backclr1');
//         // $('.my-btn').removeClass('patternclr1');
//     } else if (getId == "#color-opt") {
//         // $('.my-btn').removeClass('bindclr');
//     } else if (getId == "#panel-opt") {
//         $('.panel-circle').addClass('panel-clr');
//         // $('.my-btn').removeClass('bindclr');
//     }
// });


$(document).on('click', '.body-clr', function () {

    var hex_color = $(this).attr('data-color');

    // console.log(hex_color);

    material = 'Material #25';
    c = hex_color.replace('#', '0x');
    color_change = hexToRGB(c)
    // console.log(color_change);

    clara.scene.set({
        name: material,
        plug: 'Material',
        property: 'baseColor'
    }, {
        r: color_change[0] / 255,
        g: color_change[1] / 255,
        b: color_change[2] / 255
    });
});

$(document).on('click', '.diamond-clr', function () {
    var hex_color = $(this).attr('data-color');
    // console.log($("#selected-color").val())

    material = 'Physical1';
    c = hex_color.replace('#', '0x');
    color_change = hexToRGB(c)
    // console.log(color_change);

    clara.scene.set({
        name: material,
        plug: 'Material',
        property: 'baseColor'
    }, {
        r: color_change[0] / 255,
        g: color_change[1] / 255,
        b: color_change[2] / 255
    });

});

$(document).on('click', '.face-clr', function () {
    var hex_color = $(this).attr('data-color');

    // material = 'panel part';
    material = 'Physical';
    c = hex_color.replace('#', '0x');
    color_change = hexToRGB(c)
    // console.log(color_change);

    clara.scene.set({
        name: material,
        plug: 'Material',
        property: 'baseColor'
    }, {
        r: color_change[0] / 255,
        g: color_change[1] / 255,
        b: color_change[2] / 255
    });

});



// applyDesign2
// function applyDesign2(design_link2) {

//     clara.assets.importImage(design_link2, {
//         resizeTo: 1024,
//         targetFormat: 'png',
//         quality: 60
//     }).then(handleImport).catch(handleError);
//     function handleImport(attrs) {
//         clara.scene.set({
//             name: 'panel part',
//             plug: 'Material',
//             // property: 'bumpMap',
//             property: 'baseMap',
//         }, attrs.imageNodeId);
//     };
//     function handleError(err) {
//         console.log('Import image error: ', err);
//     }
// }

// CHANGING SIZE TO 60 X 60
// $(document).on("click", ".to60", function () {
//     $(".patternx120").addClass("d-none");
//     $(".patternx60").removeClass("d-none");
//     let size = $(".to60").data("size");
//     $("#selected-size").val(size);
//     // console.log(size);

//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'panel120x60',
//         plug: 'Properties',
//         property: 'visible'
//     }, false);
//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'Pattern Foarm part120x60',
//         plug: 'Properties',
//         property: 'visible'
//     }, false);
//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'cgaxis_models120x60',
//         plug: 'Properties',
//         property: 'visible'
//     }, false);

//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'Pattern Foarm part',
//         plug: 'Properties',
//         property: 'visible'
//     }, true);
//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'panel',
//         plug: 'Properties',
//         property: 'visible'
//     }, true);
//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'cgaxis_models_31_28_2',
//         plug: 'Properties',
//         property: 'visible'
//     }, true);

// })

// // CHANGING SIZE TO 120 X 60
// $(document).on("click", ".to120", function () {
//     $(".patternx60").addClass("d-none");
//     $(".patternx120").removeClass("d-none");
//     let size = $(".to120").data("size");
//     $("#selected-size").val(size);
//     // console.log(size);
//     // $(size).trigger("click");

//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'Pattern Foarm part',
//         plug: 'Properties',
//         property: 'visible'
//     }, false);
//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'panel',
//         plug: 'Properties',
//         property: 'visible'
//     }, false);
//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'cgaxis_models_31_28_2',
//         plug: 'Properties',
//         property: 'visible'
//     }, false);

//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'panel120x60',
//         plug: 'Properties',
//         property: 'visible'
//     }, true);
//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'Pattern Foarm part120x60',
//         plug: 'Properties',
//         property: 'visible'
//     }, true);
//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'cgaxis_models120x60',
//         plug: 'Properties',
//         property: 'visible'
//     }, true);
// })

// hide
// Pattern Foarm part
// panel
// cgaxis_models_31_28_2

// show
// panel120x60
// Pattern Foarm part120x60
// cgaxis_models120x60

// $(document).on('click', '.foam-box', function () {
//     var design_link1 = $(this).data('design1');
//     var design_link2 = $(this).data('design2');
//     console.log(design_link1)
//     // ,design_link2 );
//     $("#selected-foam").val(design_link1);
//     // console.log($("#selected-foam").val())

//     // clara.scene.set({
//     //     type: 'PolyMesh',
//     //     name: 'pattern_textre',
//     //     plug: 'Properties',
//     //     property: 'visible'
//     // }, true);

//     clara.assets.importImage(design_link1, {
//         resizeTo: 1024,
//         targetFormat: 'png',
//         quality: 60
//     }).then(handleImport).catch(handleError);
//     function handleImport(attrs) {
//         clara.scene.set({
//             name: 'panel part',
//             plug: 'Material',
//             property: 'baseMap',
//         }, attrs.imageNodeId);
//     };
//     function handleError(err) {
//         console.log('Import image error: ', err);
//     }

//     clara.assets.importImage(design_link2, {
//         resizeTo: 1024,
//         targetFormat: 'png',
//         quality: 60
//     }).then(handleImport).catch(handleError);
//     function handleImport(attrs) {
//         clara.scene.set({
//             name: 'panel part',
//             plug: 'Material',
//             property: 'bumpMap',
//         }, attrs.imageNodeId);
//     };
//     function handleError(err) {
//         console.log('Import image error: ', err);
//     }

// });


// $(document).on('click', '.shape-box', function () {
//     var text_link = $(this).data('shape');
//     $("#selected-shape").val(text_link);
//     // console.log($("#selected-shape").val())

//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'pattern',
//         plug: 'Properties',
//         property: 'visible'
//     }, true);

//     clara.assets.importImage(text_link, {
//         resizeTo: 1024,
//         targetFormat: 'png',
//         quality: 60
//     }).then(handleImport).catch(handleError);
//     function handleImport(attrs) {
//         clara.scene.set({
//             name: 'pattern color',
//             plug: 'Material',
//             property: 'baseMap'
//         }, attrs.imageNodeId);
//     };
//     function handleError(err) {
//         console.log('Import image error: ', err);
//     }


// });



// $(document).on('click', '.patternimg2', function () {
//     var text_link = $(this).data('pattern');
//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'pattern',
//         plug: 'Properties',
//         property: 'visible'
//     }, true);

//     clara.assets.importImage(text_link, {
//         resizeTo: 1024,
//         targetFormat: 'png',
//         quality: 60
//     }).then(handleImport).catch(handleError);
//     function handleImport(attrs) {
//         clara.scene.set({
//             name: 'pattern color',
//             plug: 'Material',
//             property: 'baseMap'
//         }, attrs.imageNodeId);
//     };
//     function handleError(err) {
//         console.log('Import image error: ', err);
//     }


// });


// $(document).on('click', '.patternimg3', function () {
//     var text_link = $(this).data('pattern');
//     clara.scene.set({
//         type: 'PolyMesh',
//         name: 'pattern',
//         plug: 'Properties',
//         property: 'visible'
//     }, true);

//     clara.assets.importImage(text_link, {
//         resizeTo: 1024,
//         targetFormat: 'png',
//         quality: 60
//     }).then(handleImport).catch(handleError);
//     function handleImport(attrs) {
//         clara.scene.set({
//             name: 'pattern color',
//             plug: 'Material',
//             property: 'baseMap'
//         }, attrs.imageNodeId);
//     };
//     function handleError(err) {
//         console.log('Import image error: ', err);
//     }


// });


// $(document).on('click', '.backclr1', function () {
//     var hex_color = $(this).attr('data-id');

//     material = 'back';
//     c = hex_color.replace('#', '0x');
//     color_change = hexToRGB(c)
//     console.log(color_change);

//     clara.scene.set({
//         name: material,
//         plug: 'Material',
//         property: 'baseColor'
//     }, {
//         r: color_change[0] / 255,
//         g: color_change[1] / 255,
//         b: color_change[2] / 255
//     });

// });

// handling lightbox for gallery images
var gallery_items = document.getElementsByClassName('blocks-gallery-item');
var viewers = [];

for(var i=0; i<gallery_items.length; i++){
	//prevent link from redirecting
	var item = gallery_items[i];
	var a = item.getElementsByTagName('a')[0];
	if(typeof a != 'undefined'){
		a.addEventListener('click', function(e){
			e.preventDefault();
		});
	}

	//setup viewer
	var img = item.getElementsByTagName('img')[0];
}
var gallery = document.querySelectorAll('.wp-block-gallery');
if(gallery != null){
	var viewers = [];
	for(var i=0; i<gallery.length; i++){
		viewers.push(new Viewer(gallery[i]));
	}
}
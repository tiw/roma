dojo.require("dijit.layout.BorderContainer");
dojo.require("dijit.layout.ContentPane");
dojo.addOnLoad(function(){
    dojo.forEach(
	dojo.query(".edit"),
	function($d) {
	    var id = dojo.attr($d, 'id');
	    dojo.connect($d, 'onclick', function() {console.debug(id)});
	});
});


function showNoteWindow (id) {
    
}
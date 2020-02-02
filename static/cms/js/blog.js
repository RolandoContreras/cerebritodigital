function new_blog(){
	var url= 'dashboard/blog/load';
	location.href = site+url;
}
function edit_blog(video_id){    
     var url = 'dashboard/blog/load/'+video_id;
     location.href = site+url;   
}
function cancel_blog(){
	var url= 'dashboard/blog';
	location.href = site+url;
}
<?php $count = $results->rowCount(); ?>

<?php
/*	drupal_add_css(drupal_get_path('module', 'file_upload') .'/jquery.fancybox.css');
	drupal_add_js(drupal_get_path('module', 'file_upload') .'/jquery.fancybox.js');*/
?>

<?php if($count > 0): ?>
<table id = "my-file-upload">
			
			<th>ID </th>
			<th>Title </th>
			<th>Desc </th>
			<th>Status </th>
			<th>FileID </th>
			<th>Uid </th>
			<th>FileName </th>
			<th>Uri </th>
			<th>FileSize </th>
			<th>TimeStamp </th>
		<?php foreach ($results as $key => $value): ?>

			<tr> 
				 <td> <?php print $value->id; ?> </td>
				 <td> <?php print $value->title; ?> </td>
				 <td> <?php print $value->description; ?> </td>
				 <td> <?php print $value->status; ?> </td>
				 <td> <?php print $value->file_id; ?> </td>
				 <td> <?php print $value->uid; ?> </td>
				 <td> <?php print $value->filename; ?> </td>
				 <td><!-- <img src="<?php //print image_style_url("thumbnail",$value->uri); ?>"> -->
				 	 <img id="myImg" class="myImg1" src="<?php print image_style_url("large",$value->uri); ?>" alt="<?php print $value->title; ?>" width="100" height="100"> </td>
				 <td> <?php print $value->filesize; ?> </td>
				 <td> <?php print $value->timestamp; ?> </td>

			</tr>
					
		<?php endforeach; ?>
		
		
</table>

<?php else: ?>

	<h1> No record Found... </h1>

<?php endif; ?>	




<style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3	s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>


<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>

jQuery('.myImg1').click(function(){
	modal.style.display = "block";
    modalImg.src = jQuery(this).attr('src');
    captionText.innerHTML = jQuery(this).attr('alt');

});




// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementsByClassName('myImg1');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
// img.onclick = function(){
//     modal.style.display = "block";
//     modalImg.src = this.src;
//     captionText.innerHTML = this.alt;
// }

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>


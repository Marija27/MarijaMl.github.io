$(document).ready(function(){
function searchBooks(){
	

	let search = document.getElementById('search').value;

	 // document.getElementById('results').innerHTML = "";
	 console.log(search);

		if (search == ''){
		
		document.getElementById('emptySearch').innerHTML='Please enter a valid author or  a book title';

			} 
		else {
				$.ajax({

					type: "GET",
					url: "https://www.googleapis.com/books/v1/volumes?q=" + search,
					dataType: "json",

					success: function(data){
						let title = "";
						let author = "";
						let description = "";
						let url = "";
						let img = "";
						let result=document.getElementById('results');


						result.innerHTML = "";

						for ( i = 0;  i < data.items.length; i++){
							title =  "<h2 id='title'>" + data.items[i].volumeInfo.title + "</h2>";
							author =  "<h4 id='author'>" + data.items[i].volumeInfo.authors + "</h4>";
							description = "<h4 id='description'>" + data.items[i].volumeInfo.description + "</h4>";
							
								img = $('<img id="book-img"> <br><a href =  ' + data.items[i].volumeInfo.infoLink + '> <button id="imagebutton">Read More</button>');

								url = data.items[i].volumeInfo.imageLinks.thumbnail;
								img.attr('src', url);
					
								result.innerHTML += title + author + description ;
									img.appendTo('#results');
							// console.log(data);
							}
						}

					});
			};

	}

	document.getElementById('button').addEventListener('click', searchBooks);
});

	


	


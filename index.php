<!DOCTYPE html>
<html>
<head>
	<title>Nosenti Bookstore</title>
</head>
<body>
	<h3>WELCOME TO NOSENTI BOOKSTORE</h3>
	<form>
	<label>
	<input type="text" name="title" placeholder="Enter the title of the book", id="title"> <br>
	</label>
	<label>
	<input type="text" name="author" placeholder="Enter the name of the author", id="author"><br>
	</label>
	<label>
	<input type="text" name="quantity" placeholder="Enter the quantity of book you want", id="quantity"><br>
	</label>	
	</form>

	<button id="button" onclick="storeData()">Add Book</button>

	<div id="container_div">
		
	</div>


	


</body>
<script type="text/javascript">
	function storeData(){
		var title, author, quantity;
		title = document.getElementById("title");
		author = document.getElementById("author");
		quantity = document.getElementById("quantity");

		var author = document.createElement("P");
		var title = document.createElement("P");
		var quantity = document.createElement("P");

		var t_author = document.createTextNode(title.value);
		var t_title = document.createTextNode(author.value);
		var t_quantity = document.createTextNode(quantity.value);

		author.appendChild(t_author);
		title.appendChild(t_title);
		quantity.appendChild(t_quantity);

		var title_a = document.getElementById("container_div").appendChild(title);
		var author_a = document.getElementById("container_div").appendChild(author);
		var quantity_a = document.getElementById("container_div").appendChild(quantity);
	}
</script>
</html>
<html>
<head>
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	
        

        <div class="container">
		  
		  
		  	
		  
		  
		    <h1><?= $heading; ?></h1>
        	<p><?= $message; ?></p>
		  
		  		
		  	
		    <h3>My Todo List</h3>

	        <ul>
	        <?php foreach ($todo_list as $item):?>

	                <li><?= $item;?></li>

	        <?php endforeach;?>
	        </ul>
             
            <h3>Add a new blog</h3> 

            <form method="POST" action="<?= base_url() ."index.php/blog/save" ?>"> 
	        <div class="field">
			  <label class="label">Title</label>
			  <p class="control">
			    <input class="input" type="text" name="title" placeholder="Blog Title">
			  </p>
			</div>

			<div class="field">
			  <label class="label">Message</label>
			  <p class="control">
			    <textarea class="textarea" name="body" placeholder="Blog Content"></textarea>
			  </p>
			</div>

			<div class="field is-grouped">
			  <p class="control">
			    <button class="button is-primary">Submit</button>
			  </p>
			  <p class="control">
			    <button class="button is-link">Cancel</button>
			  </p>
			</div>
			</form>
	      
		</div>

</body>
</html>
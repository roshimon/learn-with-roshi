

<div class="columns is-primary">
	<div class="column" style="color:#8b0000;">
		<?php echo validation_errors(); ?>		
	</div>
</div>


<?php echo form_open('news/create'); ?>

    <div class="field">
	  <label class="label" for="title">Title</label>
	  <p class="control">
	    <input class="input" type="text" name="title" placeholder="News Title">
	  </p>
	</div>

	<div class="field">
	  <label class="label" for="text">Message</label>
	  <p class="control">
	    <textarea class="textarea" name="text" placeholder="News Content"></textarea>
	  </p>
	</div>

	<div class="field is-grouped">
	  <p class="control">
	    <button class="button is-primary">Save</button>
	  </p>
	  <p class="control">
	    <button class="button is-link">Cancel</button>
	  </p>
	</div>

</form>
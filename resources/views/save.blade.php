
				
			<form action="{{url('users2')}}" method="POST">
              @csrf
                <div class="col-12" v-show="!editingNote.id">
					<h2>Add new note</h2>
					<div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Example input placeholder">
                </div>
					<div class="form-group">
						<label for="note">Write a note:</label>
						<textarea placeholder="Your note goes here..." ref="textarea" v-model="newNote.note" class="form-control" id="texto" name="texto" rows="3"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
				</div>
				
            </form>
		
	
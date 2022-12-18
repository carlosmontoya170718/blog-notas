<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditNote</title>
</head>
<body>
<form>
                <div class="col-12" v-show="!editingNote.id">
					<h2>Edit note</h2>
					<div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
					<div class="form-group">
						<label for="note">Write a note:</label>
						<textarea placeholder="Your note goes here..." ref="textarea" v-model="newNote.note" class="form-control" id="note" rows="3"></textarea>
					</div>
					<div class="form-group">
						<button @click="saveNote()" class="btn btn-success">Save</button>
					</div>
				</div>
            </form>
</body>
</html>
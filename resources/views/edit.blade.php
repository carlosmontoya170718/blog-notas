
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <title>Document</title>
    </head>
    <body>
        

        <form action="{{ url('users2/'.$notas->id ) }}" method="post">
         @csrf
         {{ method_field('PATCH') }}
        
        <div class="col-12" v-show="!editingNote.id">
					<h2>Edit note</h2>
					<div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" class="form-control" value="{{ $notas->titulo }}" name="titulo" id="titulo" placeholder="Example input placeholder">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Date</label>
                    <input type="text" class="form-control" value="{{ $notas->fecha }}" name="fecha" id="fecha" placeholder="Example input placeholder">
                </div>
					<div class="form-group">
						<label for="note">Write a note:</label>
						<textarea placeholder="Your note goes here..." value="{{ $notas->texto }}"  ref="textarea" v-model="newNote.note" class="form-control" id="texto" name="texto" rows="3">

                        {{ $notas->texto }}
                        </textarea>
					</div>
					<div class="form-group">
					<button type="submit" class="btn btn-success">Save</button><a href="{{url('/')}}" class="btn btn-success">Exit</a>
                    
					</div>

				</div>
                </form>
    </body>
    </html>
            
                
        



